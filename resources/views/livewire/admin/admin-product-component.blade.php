<div>
    <style>
        .nav svg{
            height:20px;
        }
        .nav hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
       <div class="row">
       @if(Session::has('success_message'))
              <div class="alert alert-success">
                  <strong>Success</strong>{{Session::get('success_message')}}
              </div>
            @endif
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                     <div class="row">
                         <div class="col-md-6">
                             All Products
                         </div>
                         <div class="col-md-6">
                            <a href="{{url('admin-products-add')}}" class="btn btn-success pull-right btn btn-success">Add New Product</a>
                         </div>
                     </div>
                   </div>
                   <div class="panel-body">
                       <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Image</th>
                                  <th>Name</th>
                                  <th>Stock</th>
                                  <th>Price</th>
                                  <th>Sale Price</th>
                                  <th>Category</th>
                                  <th>Date</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($products as $product)
                              <tr>
                              <td>{{$product->id}}</td>
                              <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60" alt=""></td>
                              <td>{{$product->name}}</td>
                              <td>{{$product->stock_status}}</td>
                              <td>{{$product->regular_price}}</td>
                              <td>{{$product->sale_price}}</td>
                              <td>{{$product->category->name}}</td>
                              <td>{{$product->created_at}}</td>
                              <td>
                              <a href="{{url('admin-products-edit',['product_slug' => $product->slug])}}" class="btn btn-warning">Edit</a>
                              <button class="btn btn-danger" onclick="confirm('Are You Sure to delete this?')|| event.stopImmediatePropagation()" wire:click="delete({{$product->id}})">Delete</button>
                              </td>
                              </tr>
                              @endforeach
                          </tbody>
                       </table>
                       {{$products->links()}}
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>

