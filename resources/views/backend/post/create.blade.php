@extends('backend.layouts.master')
@section('main-content')

    <div class="card">
        <h5 class="card-header">Thêm bài viết</h5>
        <div class="card-body">
            <form method="post" action="{{route('post.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Tiêu đề <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{old('title')}}"
                           class="form-control">
                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group" style="display: none">
                    <label for="quote" class="col-form-label">Trích dẫn</label>
                    <textarea class="form-control" id="quote" name="quote">{{old('quote')}}</textarea>
                    @error('quote')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="summary" class="col-form-label">Mô tả ngắn <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="summary" name="summary">{{old('summary')}}</textarea>
                    @error('summary')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description" class="col-form-label">Mô tả chi tiết</label>
                    <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="post_cat_id">Danh mục</label>
                    <select name="post_cat_id" class="form-control">
                        @foreach($categories as $key=>$data)
                            <option value='{{$data->id}}'>{{$data->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Thẻ bài viết</label>
                    <select name="tags[]" multiple data-live-search="true" class="form-control selectpicker">
                        @foreach($tags as $key=>$data)
                            <option value='{{$data->title}}'>{{$data->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="added_by">Tác giả</label>
                    <select name="added_by" class="form-control">
                        @foreach($users as $key=>$data)
                            <option value='{{$data->id}}' {{($key==0) ? 'selected' : ''}}>{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Hình ảnh</label>
                    <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Chọn
                  </a>
              </span>
                        <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Trạng thái</label>
                    <select name="status" class="form-control">
                        <option value="active">Hoạt động</option>
                        <option value="inactive">Không hoạt động</option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Lưu</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
    <style>
        .dropdown .dropdown-menu .selected {
            background: #f2f2f2 !important;
        }
    </style>
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{ url('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script>
        $('#lfm').filemanager('image');
        $(document).ready(function () {
            function initSummernoteWithLFM(selector, placeholder, height) {
                $(selector).summernote({
                    placeholder: placeholder,
                    tabsize: 2,
                    height: height,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['lfm', 'link']],
                        ['view', ['codeview']]
                    ],
                    buttons: {
                        lfm: function (context) {
                            var ui = $.summernote.ui;
                            var button = ui.button({
                                contents: '<i class="note-icon-picture"></i>',
                                tooltip: 'Chèn ảnh từ File Manager',
                                click: function () {
                                    var route_prefix = "{{ url('filemanager') }}";
                                    window.open(route_prefix + '?type=image', 'FileManager', 'width=900,height=600');
                                    window.SetUrl = function (items) {
                                        var imageUrl = items[0].url;
                                        context.invoke('insertImage', imageUrl);
                                    };
                                }
                            });
                            return button.render();
                        }
                    }
                });
            }

            initSummernoteWithLFM('#summary', 'Write short description.....', 100);
            initSummernoteWithLFM('#description', 'Write detail description.....', 150);
            initSummernoteWithLFM('#quote', 'Write detail Quote.....', 100);
        });
    </script>
@endpush
