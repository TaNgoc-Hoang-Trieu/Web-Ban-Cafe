<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        .table_deg{
            border: 2px solid rgb(255, 255, 255);
        }
        th{
          background-color: orange;
          padding: 15px;
          font-size: 20px;
          font-weight: bold;
          color: white;
        }
        td{
          color: white;
          border: 1px solid orange;
          text-align: center;
        }
        input[type='search']
        {
            width: 400px;
            height: 50px;
            margin-left: 50px;
        }
    </style>
  </head>
  <body>
   @include('admin.header')
 
      @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <form action="{{url('search_product')}}" method="GET">
                @csrf
                <input type="search" name="search">
                <input type="submit" class="btn btn-primary" value="Tìm Kiếm">
            </form>
            <div class="div_deg">

                <table class="table_deg">
                  <tr>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>     
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  @foreach ($product as $products)
                    
                  <tr>
                    <td>{{$products->title}}</td>
                    <td>{!!Str::limit($products->description,50)!!}</td>
                    <td>{{$products->category}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>
                        <img src="products/{{$products->image}}" width="120px" height="120px">
                    </td>
                    <td>
                      <a href="{{url('update_product',$products->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                      <a href="{{url('delete_product',$products->id)}}"
                      onclick="confirmation(event)"
                        class="btn btn-danger">Xóa</a>
                    </td>
                  </tr>
  
                  @endforeach
                </table>
                
  
            </div>
            <div class="div_deg">
                {{$product->onEachSide(1)->links()}}
            </div>
            
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>