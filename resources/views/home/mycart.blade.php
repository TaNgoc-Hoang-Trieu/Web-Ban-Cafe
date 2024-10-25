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
    <div class="order_deg">
        <form action="{{url('comfirm_order')}}" method="POST">
            @csrf
            <div class="div_gap">
                <label>Tên</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>
            <div class="div_gap">
                <label>Địa chỉ</label>
                <textarea name="address">{{Auth::user()->address}}</textarea>
            </div>
            <div class="div_gap">
                <label>Số điện thoại</label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}">
            </div>
            <div class="div_gap">
                
                <input class="btn btn-cart" type="submit" value="Đặt hàng">
            </div>
        </form>
    </div>
    <table>
        <tr>
            <th>Tên món</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Xóa</th>
        </tr>
        <?php
            $value = 0;
        ?>

        @foreach ($cart as $cart)

        <tr>
            <td>{{$cart->product->title}}</td>
            <td>{{$cart->product->price}}</td>
            <td><img width="120" src="/products/{{$cart->product->image}}" ></td>
            <td>
                <a href="{{url('delete_cart',$cart->id)}}"
                    onclick="confirmation(event)"
                    class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                      </svg></a>
            </td>
        </tr>
        <?php
            $value = $value + $cart->product->price;
        ?>
        @endforeach
    </table>
</div>
<div class="cart_value">
    <h3>Tổng giá : {{$value}}đ</h3>
</div>






   

  <!-- info section -->

  @include('home.footer')

</body>

</html>