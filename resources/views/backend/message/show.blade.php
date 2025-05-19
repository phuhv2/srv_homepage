@extends('backend.layouts.master')
@section('main-content')
    <div class="card">
        <h5 class="card-header">Tin nhắn</h5>
        <div class="card-body">
            @if($message)
                @if($message->photo)
                    <img src="{{$message->photo}}" class="rounded-circle " style="margin-left:44%;">
                @else
                    <img src="{{asset('backend/img/avatar.png')}}" class="rounded-circle " style="margin-left:44%;">
                @endif
                <div class="py-2">
                    Tên : <strong>{{$message->name}}</strong><br>
                    Email : <strong><a href="mailto:{{$message->email}}">{{$message->email}}</a></strong><br>
                    Điện thoại : <strong><a href="tel:{{$message->phone}}">{{$message->phone}}</a></strong>
                </div>
                <hr/>
                <h5 style="text-decoration:underline"><strong>Chủ đề :</strong> {{$message->subject}}</h5>
                <p class="py-2">{{$message->message}}</p>
            @endif
        </div>
    </div>
@endsection
