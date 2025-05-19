@extends('backend.layouts.master')
@section('main-content')
    <div class="container-fluid">
        <iframe src="{{ url('laravel-filemanager?type=image') }}" style="width: 100%; height: 768px; border: none;"></iframe>
    </div>
@endsection
