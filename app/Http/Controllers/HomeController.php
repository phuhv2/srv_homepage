<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Order;
use App\Rules\MatchOldPassword;
use Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.index');
    }

    public function profile()
    {
        $profile = Auth()->user();
        return view('user.users.profile')->with('profile', $profile);
    }

    public function profileUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        $status = $user->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Cập nhật hồ sơ cá nhân thành công');
        } else {
            request()->session()->flash('error', 'Please try again!');
        }
        return redirect()->back();
    }

    // Order
    public function orderIndex()
    {
        $orders = Order::orderBy('id', 'DESC')->where('user_id', auth()->user()->id)->paginate(10);
        return view('user.order.index')->with('orders', $orders);
    }

    public function userOrderDelete($id)
    {
        $order = Order::find($id);
        if ($order) {
            if ($order->status == "process" || $order->status == 'delivered' || $order->status == 'cancel') {
                return redirect()->back()->with('error', 'Bạn không thể xóa khi đơn hàng ở trạng thái hiện tại');
            } else {
                $status = $order->delete();
                if ($status) {
                    request()->session()->flash('success', 'Xóa / Hủy đơn hàng thành công');
                } else {
                    request()->session()->flash('error', 'Không thể xóa đơn hàng');
                }
                return redirect()->route('user.order.index');
            }
        } else {
            request()->session()->flash('error', 'Order can not found');
            return redirect()->back();
        }
    }

    public function orderShow($id)
    {
        $order = Order::find($id);
        return view('user.order.show')->with('order', $order);
    }

    // Product Review
    public function productReviewIndex()
    {
        $reviews = ProductReview::getAllUserReview();
        return view('user.review.index')->with('reviews', $reviews);
    }

    public function productReviewEdit($id)
    {
        $review = ProductReview::find($id);
        // return $review;
        return view('user.review.edit')->with('review', $review);
    }

    public function productReviewUpdate(Request $request, $id)
    {
        $review = ProductReview::find($id);
        if ($review) {
            $data = $request->all();
            $status = $review->fill($data)->update();
            if ($status) {
                request()->session()->flash('success', 'Đánh giá được cập nhật thành công');
            } else {
                request()->session()->flash('error', 'Đã xảy ra lỗi! Vui lòng thử lại!');
            }
        } else {
            request()->session()->flash('error', 'Review not found!!');
        }

        return redirect()->route('user.productreview.index');
    }

    public function productReviewDelete($id)
    {
        $review = ProductReview::find($id);
        $status = $review->delete();
        if ($status) {
            request()->session()->flash('success', 'Đã xóa đánh giá thành công');
        } else {
            request()->session()->flash('error', 'Something went wrong! Try again');
        }
        return redirect()->route('user.productreview.index');
    }

    public function userComment()
    {
        $comments = PostComment::getAllUserComments();
        return view('user.comment.index')->with('comments', $comments);
    }

    public function userCommentDelete($id)
    {
        $comment = PostComment::find($id);
        if ($comment) {
            $status = $comment->delete();
            if ($status) {
                request()->session()->flash('success', 'Bình luận bài viết đã được xóa thành công');
            } else {
                request()->session()->flash('error', 'Error occurred please try again');
            }
            return back();
        } else {
            request()->session()->flash('error', 'Post Comment not found');
            return redirect()->back();
        }
    }

    public function userCommentEdit($id)
    {
        $comments = PostComment::find($id);
        if ($comments) {
            return view('user.comment.edit')->with('comment', $comments);
        } else {
            request()->session()->flash('error', 'Comment not found');
            return redirect()->back();
        }
    }

    public function userCommentUpdate(Request $request, $id)
    {
        $comment = PostComment::find($id);
        if ($comment) {
            $data = $request->all();
            // return $data;
            $status = $comment->fill($data)->update();
            if ($status) {
                request()->session()->flash('success', 'Đã cập nhật bình luận thành công');
            } else {
                request()->session()->flash('error', 'Something went wrong! Please try again!!');
            }
            return redirect()->route('user.post-comment.index');
        } else {
            request()->session()->flash('error', 'Comment not found');
            return redirect()->back();
        }

    }

    public function changePassword()
    {
        return view('user.layouts.userPasswordChange');
    }

    public function changPasswordStore(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        return redirect()->route('user')->with('success', 'Mật khẩu đã được thay đổi thành công');
    }

}
