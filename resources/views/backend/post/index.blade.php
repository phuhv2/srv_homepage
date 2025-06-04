@extends('backend.layouts.master')
@section('main-content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-12">
                @include('backend.layouts.notification')
            </div>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Danh sách bài viết</h6>
            <a href="{{route('post.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
               data-placement="bottom" title="Thêm bài viết"><i class="fas fa-plus"></i> Thêm bài viết</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if(count($posts)>0)
                    <table class="table table-bordered table-hover" id="product-dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th style="width: 15px">S.N.</th>
                            <th>Tiêu đề</th>
                            <th>Danh mục</th>
                            <th>Thẻ</th>
                            <th>Tác giả</th>
                            <th>Trạng thái</th>
                            <th style="width: 90px">Hành động</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>S.N.</th>
                            <th>Tiêu đề</th>
                            <th>Danh mục</th>
                            <th>Thẻ</th>
                            <th>Tác giả</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($posts as $post)
                            @php
                                $author_info=DB::table('users')->select('name')->where('id',$post->added_by)->get();
                            @endphp
                            <tr>
                                <td style="text-align: center">{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{ optional($post->cat_info)->title }}</td>
                                <td>{{$post->tags}}</td>

                                <td>
                                    @foreach($author_info as $data)
                                        {{$data->name}}
                                    @endforeach
                                </td>
                                <td>
                                    @if($post->status=='active')
                                        <span class="badge badge-success">{{$post->status}}</span>
                                    @else
                                        <span class="badge badge-warning">{{$post->status}}</span>
                                    @endif
                                </td>
                                <td style="width: 100px">
                                    <a href="{{route('post.edit',$post->id)}}"
                                       class="btn btn-primary btn-sm float-left mr-1"
                                       style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                       title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                    <form method="POST" action="{{route('post.destroy',[$post->id])}}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm dltBtn"
                                                data-id={{$post->id}} style="height:30px; width:30px;border-radius:50%
                                        " data-toggle="tooltip" data-placement="bottom" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <span style="float: right;">{{$posts->links('pagination::bootstrap-4')}}</span>
                @else
                    <h6 class="text-center">No posts found!!! Please create Post</h6>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
    <style>
        .zoom {
            transition: transform .2s; /* Animation */
        }
        .zoom:hover {
            transform: scale(5);
        }
    </style>
@endpush

@push('scripts')

    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
    <script>

        $('#product-dataTable').DataTable({
            "columnDefs": [
                {
                    "orderable": false,
                    "targets": [6]
                }
            ],
            "order": [[0, 'desc']]
        });

        // Sweet alert
        function deleteData(id) {

        }
    </script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.dltBtn').click(function (e) {
                var form = $(this).closest('form');
                var dataID = $(this).data('id');
                // alert(dataID);
                e.preventDefault();
                swal({
                    title: "Bạn chắc chắn muốn xóa?",
                    text: "Sau khi xóa, bạn sẽ không thể khôi phục dữ liệu này!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            })
        })
    </script>
@endpush
