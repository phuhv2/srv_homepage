<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function index(){
        $messages=Message::paginate(100);
        return view('backend.message.index')->with('messages',$messages);
    }

    public function messageFive()
    {
        $message=Message::whereNull('read_at')->limit(5)->get();
        return response()->json($message);
    }

    public function create()
    {
        //
    }

//    public function store(Request $request)
//    {
//        $validated = $request->validate([
//            'name' => 'string|required|min:2',
//            'email' => 'email|required',
//            'subject' => 'string|required',
//            'phone' => 'numeric|required'
//        ]);
//        Message::create($validated);
//        return response()->json(['success' => true]);
//    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'subject' => 'required|string|not_in:0',
            'cv'      => [
                'nullable',
                'max:2048',
            ],
        ]);

        $position_apply = null;
        if($request->subject =='worker') {
            $position_apply = 'Công Nhân';
        } else if ($request->subject =='qa') {
            $position_apply = 'Nhân Viên Phòng Chất Lượng (QA)';
        } else if ($request->subject =='plan') {
            $position_apply = 'Nhân Viên Kế Hoạch Sản Xuất';
        } else if ($request->subject =='pro') {
            $position_apply = 'Nhân Viên Quản Lý Sản Xuất';
        }

        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'subject' => $position_apply,
        ];

        $htmlContent = "
        <h2>Thông tin ứng viên:</h2>
        <p><strong>Họ tên:</strong> {$data['name']}</p>
        <p><strong>Email:</strong> {$data['email']}</p>
        <p><strong>Số điện thoại:</strong> {$data['phone']}</p>
        <p><strong>Vị trí ứng tuyển:</strong> {$data['subject']}</p>
    ";

        try {
            Mail::send([], [], function ($message) use ($request, $htmlContent) {
                $message->to('phuhv2@gmail.com')
                    ->subject('Ứng tuyển việc làm từ website')
                    ->html($htmlContent);

                if ($request->hasFile('cv') && $request->file('cv')->isValid()) {
                    $file = $request->file('cv');
                    $message->attach($file->getRealPath(), [
                        'as' => $file->getClientOriginalName(),
                        'mime' => $file->getMimeType(),
                    ]);
                }
            });

            return response()->json(['success' => true, 'message' => 'Đã gửi đơn ứng tuyển thành công!']);
        } catch (\Exception $e) {
            \Log::error('Lỗi gửi mail: ' . $e->getMessage());
            return response()->json(['error' => 'Lỗi khi gửi email: ' . $e->getMessage()], 500);
        }
    }


    public function show(Request $request,$id)
    {
        $message=Message::find($id);
        if($message){
            $message->read_at=\Carbon\Carbon::now();
            $message->save();
            return view('backend.message.show')->with('message',$message);
        }
        else{
            return back();
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $message=Message::find($id);
        $status=$message->delete();
        if($status){
            request()->session()->flash('success','Đã xóa tin nhắn thành công');
        }
        else{
            request()->session()->flash('error','Error occurred please try again');
        }
        return back();
    }

}
