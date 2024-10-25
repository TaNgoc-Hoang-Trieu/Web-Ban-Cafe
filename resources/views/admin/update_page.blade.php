<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        input[type='text']
        {
            width: 350px;
            height: 50px;
        }
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }
        label
        {
          display: inline-block;
          width: 250px;
          font-size: 18px!important;
          color: white!important;
        }
        textarea
        {
          width: 450px;
          height: 80px;
        }
        .input_deg
        {
          padding: 15px;
        }
    </style>
  </head>
  <body>
   @include('admin.header')
 
      @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1 style="color: white">Update Product</h1>
            <div class="div_deg">
                <form action="{{url('edit_product',$data->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf  
                  <div class="input_deg">
                        <label>Product Title</label>
                        <input type="text" name="title" value="{{$data->title}}" required>
                    </div>
                    <div class="input_deg">
                        <label>Description</label>
                        <textarea name="description" required>{{$data->description}}</textarea>
                    </div>
                    <div class="input_deg">
                        <label>Price</label>
                        <input type="text" name="price" value="{{$data->price}}" required>
                    </div>
                    <div class="input_deg">
                        <label>Quantity</label>
                        <input type="number" name="qty" value="{{$data->quantity}}" required>
                    </div>
                    <div class="input_deg">
                        <label>Product Category</label>
                        <select name="category" required>

                            <option value="{{$data->category}}">
                              {{$data->category}}</option>
                              @foreach ($category as $category)

                              <option value="{{$category->category_name}}">
                                {{$category->category_name}}</option>
                                
                              @endforeach
                              

                        </select>
                    </div>
                    <div class="input_deg">
                        <label>Current Image</label>
                        <img width="150" src="/products/{{$data->image}}" alt="">
                    </div>
                    <div class="input_deg">
                        <label>New Image</label>
                        <input type="file" name="image" >
                    </div>
                    <div class="input_deg">            
                      <input class="btn btn-success" type="submit" value="Update Product">
                  </div>
                </form>
            </div>
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>