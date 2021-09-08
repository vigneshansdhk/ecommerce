<div>
    <div class="container" style="padding:30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                             Add New Product
                           </div>
                           <div class="col-md-6">
                            <a href="{{url('admin-products')}}" class="btn btn-success pull-right">List Product</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                       <div class="form-horizontal">
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Product Name</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="Product Name" class="form-control" wire:model="name" >
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Product Slug</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="Product Slug" class="form-control" wire:model="slug" >
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Short Description</label>
                               <div class="col-md-4">
                                   <textarea  name="" Placeholder="Short Description" class="form-control" wire:model="short_description" ></textarea>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label"> Description</label>
                               <div class="col-md-4">
                                   <textarea  name="" Placeholder=" Description" class="form-control" wire:model="description" ></textarea>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Regular Price</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="Regular Price" class="form-control" wire:model="regular_price" >
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Sale Price</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="Sale Price" class="form-control" wire:model="sale_price" >
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">SKU</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="SKU" class="form-control" wire:model="sku" >
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Stock</label>
                               <div class="col-md-4">
                                  <select name="" id=""  class="form-control" wire:model="stock">
                                      <option value="instock">In Stock</option>
                                      <option value="outofstock">Out Of Stock</option>
                                  </select>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Featured</label>
                               <div class="col-md-4">
                                  <select name="" id="" class="form-control" wire:model="featured">
                                      <option value="0">No</option>
                                      <option value="1">Yes</option>
                                  </select>
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Quantity</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="SKU" class="form-control" wire:model="qty" >
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Image</label>
                               <div class="col-md-4">
                                   <input type="file" name="" class="form-control" wire:model="image" >
                                   @if($image)
                                      <img src="{{$image->temporaryUrl()}}" width="120" alt="">
                                   @endif
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Category</label>
                               <div class="col-md-4">
                                  <select name="" id="" class="form-control" wire:model="category_id">
                                      @foreach($categories as $category)
                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                      @endforeach
                                  </select>
                               </div>
                           </div>
                           
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label"></label>
                               <div class="col-md-4">
                                   <input type="submit" name="" Placeholder=" "class="btn btn-primary pull-center" wire:click="store()" >
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>


