<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Events\MessageSent;
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

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|min:2',
            'email' => 'email|required',
            'message' => 'required',
            'subject' => 'string|required',
            'phone' => 'numeric|required'
        ]);
        $message = Message::create($request->only(['name', 'email', 'message', 'subject', 'phone']));
        $data = [
            'url'     => route('message.show', $message->id),
            'date'    => $message->created_at->format('F d, Y h:i A'),
            'name'    => $message->name,
            'email'   => $message->email,
            'phone'   => $message->phone,
            'message' => $message->message,
            'subject' => $message->subject,
            'photo'   => Auth()->user()->photo ?? null
        ];
        event(new MessageSent($data));
        return response()->json(['success' => true]);
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
