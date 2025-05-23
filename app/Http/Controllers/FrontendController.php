<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\Post;
use App\User;
use Auth;
use Session;
use Newsletter;
use DB;
use Hash;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index(Request $request)
    {
        return redirect()->route($request->user()->role);
    }

    public function home()
    {
        $posts = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();
        $banners = Banner::where('status', 'active')->limit(3)->orderBy('id', 'DESC')->get();
        return view('frontend.index')
            ->with('posts', $posts)
            ->with('banners', $banners);
    }

    public function aboutUs()
    {
        return view('frontend.pages.about-us');
    }

    public function recruitment()
    {
        return view('frontend.pages.recruitment');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function blog()
    {
        $post = Post::query();
        // Filter theo category
        if (!empty($_GET['category'])) {
            $slug = explode(',', $_GET['category']);
            $cat_ids = PostCategory::select('id')->whereIn('slug', $slug)->pluck('id')->toArray();
            $post->whereIn('post_cat_id', $cat_ids);
        }
        // Filter theo tag
        if (!empty($_GET['tag'])) {
            $slug = explode(',', $_GET['tag']);
            $tag_ids = PostTag::select('id')->whereIn('slug', $slug)->pluck('id')->toArray();
            $post->whereIn('post_tag_id', $tag_ids);
        }
        // Phân trang
        $perPage = !empty($_GET['show']) ? (int)$_GET['show'] : 9;
        $posts = $post->with(['cat_info', 'author_info'])->where('status', 'active')->orderBy('id', 'DESC')->paginate($perPage);
        $posts->appends($_GET);
        // Bài viết gần đây
        $recent_posts = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();
        return view('frontend.pages.blog', compact('posts', 'recent_posts'));
    }

    public function blogDetail($slug)
    {
        $post = Post::getPostBySlug($slug);
        if (!$post) {
            abort(404);
        }
        $rcnt_post = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();
        return view('frontend.pages.blog-detail')
            ->with('post', $post)
            ->with('recent_posts', $rcnt_post);
    }

    public function blogSearch(Request $request)
    {
        $rcnt_post = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();
        $posts = Post::orwhere('title', 'like', '%' . $request->search . '%')
            ->orwhere('quote', 'like', '%' . $request->search . '%')
            ->orwhere('summary', 'like', '%' . $request->search . '%')
            ->orwhere('description', 'like', '%' . $request->search . '%')
            ->orwhere('slug', 'like', '%' . $request->search . '%')
            ->orderBy('id', 'DESC')
            ->paginate(9);
        return view('frontend.pages.blog')->with('posts', $posts)->with('recent_posts', $rcnt_post);
    }

    public function blogFilter(Request $request)
    {
        $data = $request->all();
        $catURL = "";
        if (!empty($data['category'])) {
            foreach ($data['category'] as $category) {
                if (empty($catURL)) {
                    $catURL .= '&category=' . $category;
                } else {
                    $catURL .= ',' . $category;
                }
            }
        }
        $tagURL = "";
        if (!empty($data['tag'])) {
            foreach ($data['tag'] as $tag) {
                if (empty($tagURL)) {
                    $tagURL .= '&tag=' . $tag;
                } else {
                    $tagURL .= ',' . $tag;
                }
            }
        }
        return redirect()->route('blog', $catURL . $tagURL);
    }

    public function blogByCategory(Request $request)
    {
        $category = PostCategory::where('slug', $request->slug)->firstOrFail();
        $posts = Post::where('post_cat_id', $category->id)
            ->where('status', 'active')
            ->orderBy('id', 'DESC')
            ->paginate(9);
        $rcnt_post = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();
        return view('frontend.pages.blog', [
            'posts' => $posts,
            'recent_posts' => $rcnt_post
        ]);
    }

    public function blogByTag(Request $request)
    {
        $post = Post::getBlogByTag($request->slug);
        $rcnt_post = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();
        return view('frontend.pages.blog')->with('posts', $post)->with('recent_posts', $rcnt_post);
    }

    // Login
    public function login()
    {
        return view('frontend.pages.login');
    }

    public function loginSubmit(Request $request)
    {
        $data = $request->all();
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 'active'])) {
            Session::put('user', $data['email']);
            request()->session()->flash('success', 'Successfully login');
            return redirect()->route('home');
        } else {
            request()->session()->flash('error', 'Email và mật khẩu không hợp lệ vui lòng thử lại!');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success', 'Đăng xuất thành công');
        return back();
    }

    public function register()
    {
        return view('frontend.pages.register');
    }

    public function registerSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|min:2',
            'email' => 'string|required|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        Session::put('user', $data['email']);
        if ($check) {
            request()->session()->flash('success', 'Đăng ký thành công');
            return redirect()->route('home');
        } else {
            request()->session()->flash('error', 'Please try again!');
            return back();
        }
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => 'active'
        ]);
    }

    // Reset password
    public function showResetForm()
    {
        return view('auth.passwords.reset');
    }

}
