<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        table{
            border: 2px solid black;
            text-align: center; 
            width: 800px;
        }
        th{
          background-color: orange;
          padding: 15px;
          font-size: 15px;
          border: 2px solid black;
          font-weight: bold;
          text-align: center;
        }
        td{
          border: 1px solid rgb(0, 0, 0);
          text-align: center;
        }
        .cart_value{
            text-align: center;
            margin-bottom: 70px;
            padding: 18px;
        }
        .order_deg{
            padding-right: 100px;
            margin-top: -50px; 
        }
        label{
            display: inline-block;
            width: 150px;
        }
        .div_gap{
            padding: 20px;
        }
    </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
        @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    <!-- end slider section -->
  </div>
  <!-- end hero area -->

<div class="div_deg">
   
    <table>
        <tr>
            <th>Tên món</th>
            <th>Giá</th>
            <th>Trạng thái</th>
            <th>Hình ảnh</th>
            <th>Hủy đơn hàng</th>
        </tr>

        @foreach ($order as $order)
        
        <tr>
            <td>{{$order->product->title}}</td>
            <td>{{$order->product->price}}</td>
            <td>
                @if($order->status == 'in progress')
                <span style="color: red">Chuẩn bị hàng</span>
            @elseif ($order->status == 'on the way') 
                <span style="color: orange">Đang giao hàng</span>
            @else
                <span style="color: green">Đã giao hàng</span>
            @endif
            </td>
            <td><img width="120" src="/products/{{$order->product->image}}" ></td>
            <td>@if($order->status == 'in progress')
                <a href="{{url('delete_order',$order->id)}}"
                    onclick="confirmation(event)"
                    class="btn btn-danger">Hủy</a>
                @endif
            </td>
        </tr>
  
        @endforeach
    </table>
</div>






   

  <!-- info section -->

  @include('home.footer')

</body>

</html>