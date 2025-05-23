@extends('backend.layouts.master')
@section('main-content')
    <div class="card">
        <h5 class="card-header">Hồ sơ ứng tuyển</h5>
        <div class="card-body">
            @if($message)
                <div class="py-2">
                    Tên : <strong>{{$message->name}}</strong><br>
                    Email : <strong><a href="mailto:{{$message->email}}">{{$message->email}}</a></strong><br>
                    Điện thoại : <strong><a href="tel:{{$message->phone}}">{{$message->phone}}</a></strong>
                </div>
                <hr/>
                <h5 style="text-decoration:underline"><strong>Vị trí ứng tuyển :</strong> {{$message->subject}}</h5>
            @endif
        </div>
    </div>
@endsection
