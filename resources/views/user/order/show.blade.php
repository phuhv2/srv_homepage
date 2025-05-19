@extends('user.layouts.master')

@section('title','Order Detail')

@section('main-content')
<div class="card">
<h5 class="card-header">Đơn hàng</h5>
  <div class="card-body">
    @if($order)
    <table class="table table-striped table-hover">
      <thead>
        <tr>
            <th class="col-4">Order No.</th>
            <th class="col-2">Tên</th>
            <th class="col-2">Email</th>
            <th class="col-2">Tổng cộng</th>
            <th class="col-2">Trạng thái</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>{{$order->order_number}}</td>
            <td>{{$order->first_name}} {{$order->last_name}}</td>
            <td>{{$order->email}}</td>
            <td>{{number_format($order->total_amount,0)}} ₫</td>
            <td>
                @if($order->status=='new')
                  <span class="badge badge-primary">Mới</span>
                @elseif($order->status=='process')
                  <span class="badge badge-warning">Đang xử lý</span>
                @elseif($order->status=='delivered')
                  <span class="badge badge-success">Đã giao hàng</span>
                @else
                  <span class="badge badge-danger">Hủy</span>
                @endif
            </td>

        </tr>
      </tbody>
    </table>

    <section class="order_details">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" class="col-6">Tên sản phẩm</th>
            <!-- <th scope="col" class="col-2">Size</th> -->
            <th scope="col" class="col-2"></th>
            <th scope="col" class="col-2">Số lượng</th>
            <th scope="col" class="col-2">Giá sản phẩm</th>
          </tr>
        </thead>
        <tbody>
        @foreach($order->cart_info as $cart)
        @php 
          $product=DB::table('products')->select('title')->where('id',$cart->product_id)->get();
        @endphp
          <tr>
            <td>
              <span>
                @foreach($product as $pro)
                  {{$pro->title}}
                @endforeach
              </span>
            </td>
            <!-- <td>{{$cart->size}}</td> -->
            <td></td>
            <td>x{{$cart->quantity}}</td>
            <td><span>{{number_format($cart->price,0)}} ₫</span></td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th scope="col" class="empty"></th>
            <th scope="col" class="empty"></th>
            <th scope="col" class="text-right">Tổng tiền sản phẩm:</th>
            <th scope="col"> <span>{{number_format($order->sub_total,0)}} ₫</span></th>
          </tr>
        @if(!empty($order->coupon))
          <tr>
            <th scope="col" class="empty"></th>
            <th scope="col" class="empty"></th>
            <th scope="col" class="text-right">Giảm giá:</th>
            <th scope="col"><span>-{{$order->coupon}} ₫</span></th>
          </tr>
        @endif
          <tr>
            <th scope="col" class="empty"></th>
            <th scope="col" class="empty"></th>
            <th scope="col" class="text-right">Tổng thanh toán:</th>
            <th>
              <span>
                  {{number_format($order->total_amount,0)}} ₫
              </span>
            </th>
          </tr>
        </tfoot>
      </table>
    </section>

    <section class="confirmation_part section_padding">
      <div class="order_boxes">
        <div class="row">
          <div class="col-lg-6 col-lx-4">
            <div class="order-info">
              <h4 class="text-center pb-4">THÔNG TIN ĐƠN HÀNG</h4>
              <table class="table">
                    <tr class="">
                        <td>Đơn hàng số</td>
                        <td> : {{$order->order_number}}</td>
                    </tr>
                    <tr>
                        <td>Đơn hàng ngày</td>
                        <td> : {{$order->created_at->format('d/m/Y')}} at {{$order->created_at->format('h:i A')}} </td>
                    </tr>
                    <tr>
                        <td>Trạng thái đơn hàng</td>
                        <td> : 
                          @if($order->status=='new')
                            <span class="badge badge-primary">Mới</span>
                          @elseif($order->status=='process')
                            <span class="badge badge-warning">Đang xử lý</span>
                          @elseif($order->status=='delivered')
                            <span class="badge badge-success">Đã giao hàng</span>
                          @else
                            <span class="badge badge-danger">Hủy</span>
                          @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Phương thức thanh toán</td>
                        <td> : @if($order->payment_method=='cod') Cash on Delivery @else Paypal @endif</td>
                    </tr>
                    <tr>
                        <td>Trạng thái thanh toán</td>
                        <td> : @if($order->payment_status=='unpaid') <span class="badge badge-danger">Chưa thanh toán</span> @else <span class="badge badge-success">Đã thanh toán</span> @endif</td>
                    </tr>
              </table>
            </div>
          </div>

          <div class="col-lg-6 col-lx-4">
            <div class="shipping-info">
              <h4 class="text-center pb-4">THÔNG TIN VẬN CHUYỂN</h4>
              <table class="table">
                    <tr class="">
                        <td>Họ tên</td>
                        <td> : {{$order->first_name}} {{$order->last_name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> : {{$order->email}}</td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td> : {{$order->phone}}</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td> : {{$order->address1}}, {{$order->address2}}</td>
                    </tr>
                    <tr>
                        <td>Quốc gia</td>
                        <td> : {{$order->country}}</td>
                    </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }

</style>
@endpush
