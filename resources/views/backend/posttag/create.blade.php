@extends('backend.layouts.master')
@section('main-content')

    <div class="card">
        <h5 class="card-header">Thêm thẻ bài viết</h5>
        <div class="card-body">
            <form method="post" action="{{route('post-tag.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Tiêu đề</label>
                    <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{old('title')}}"
                           class="form-control">
                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Trạng thái</label>
                    <select name="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
