@extends('backend.layouts.master')
@section('main-content')

    <div class="card">
        <h5 class="card-header">Cài đặt trang web</h5>
        <div class="card-body">
            <form method="post" action="{{route('settings.update')}}">
                @csrf
                {{-- @method('PATCH') --}}
                {{-- {{dd($data)}} --}}
                <div class="form-group" style="display:none">
                    <label for="short_des" class="col-form-label">Mô tả ngắn <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="quote" name="short_des">{{$data->short_des}}</textarea>
                    @error('short_des')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group" style="display:none">
                    <label for="description" class="col-form-label">Mô tả chi tiết <span
                            class="text-danger">*</span></label>
                    <textarea class="form-control" id="description" name="description">{{$data->description}}</textarea>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Logo <span class="text-danger">*</span></label>
                    <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Chọn
                  </a>
              </span>
                        <input id="thumbnail1" class="form-control" type="text" name="logo" value="{{$data->logo}}">
                    </div>
                    <div id="holder1" style="margin-top:15px;max-height:100px;"></div>

                    @error('logo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Hình ảnh giới thiệu <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Chọn
                  </a>
              </span>
                        <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$data->photo}}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address" class="col-form-label">Địa chỉ <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="address" required value="{{$data->address}}">
                    @error('address')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" required value="{{$data->email}}">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone" class="col-form-label">Điện thoại <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="phone" required value="{{$data->phone}}">
                    @error('phone')
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

@endpush
@push('scripts')
    <script src="{{ url('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script>
        $('#lfm').filemanager('image');
        $('#lfm1').filemanager('image');

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

            initSummernoteWithLFM('#summary', 'Write short description.....', 150);
            initSummernoteWithLFM('#quote', 'Write short Quote.....', 100);
            initSummernoteWithLFM('#description', 'Write detail description.....', 150);
        });
    </script>
@endpush
