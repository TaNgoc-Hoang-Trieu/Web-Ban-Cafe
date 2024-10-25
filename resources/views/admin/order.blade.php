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
          border: 2px solid rgb(255, 255, 255);
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
            <div class="div_deg">

                <table class="table_deg">
                  <tr>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product title</th>   
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Change Status</th>
                  </tr>
                  @foreach ($data as $data)
                    
                  <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->rec_address}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->product->title}}</td>
                    <td>{{$data->product->price}}</td>
                    <td>
                        <img src="products/{{$data->product->image}}" width="120px" height="120px">
                    </td>
                    <td>
                        @if($data->status == 'in progress')
                            <span style="color: red">{{$data->status}}</span>
                        @elseif ($data->status == 'on the way') 
                            <span style="color: yellow">{{$data->status}}</span>
                        @else
                            <span style="color: green">{{$data->status}}</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('on_the_way',$data->id)}}">On the way</a>
                        <a class="btn btn-success" href="{{url('delivered',$data->id)}}">Delivered</a>
                    </td>
                  </tr>
  
                  @endforeach
                </table>
                
  
            </div>
            
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>