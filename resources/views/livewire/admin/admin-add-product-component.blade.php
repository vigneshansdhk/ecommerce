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
                                   <input type="text" name="name" Placeholder="Product Name" class="form-control" wire:model="name" >
                                  @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Product Slug</label>
                               <div class="col-md-4">
                                   <input type="text" name="slug" Placeholder="Product Slug" class="form-control" wire:model="slug" >
                                  @error('slug') <span class="error text-danger">{{ $message }}</span> @enderror

                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Short Description</label>
                               <div class="col-md-4" wire:ignore>
                                   <textarea  name="short_description" id="short_description" Placeholder="Short Description" class="form-control" wire:model="short_description" ></textarea>
                                  @error('short_description') <span class="error text-danger">{{ $message }}</span> @enderror

                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label"> Description</label>
                               <div class="col-md-4" wire:ignore>
                                   <textarea  name="description" id="description" Placeholder=" Description" class="form-control" wire:model="description" ></textarea>
                                  @error('description') <span class="error text-danger">{{ $message }}</span> @enderror

                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Regular Price</label>
                               <div class="col-md-4">
                                   <input type="text" name="regular_price" Placeholder="Regular Price" class="form-control" wire:model="regular_price" >
                                  @error('regular_price') <span class="error text-danger">{{ $message }}</span> @enderror

                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Sale Price</label>
                               <div class="col-md-4">
                                   <input type="text" name="sale_price" Placeholder="Sale Price" class="form-control" wire:model="sale_price" >
                                  @error('sale_price') <span class="error text-danger">{{ $message }}</span> @enderror

                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">SKU</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="SKU" class="form-control" wire:model="sku" >
                                  @error('sku') <span class="error text-danger">{{ $message }}</span> @enderror

                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Stock</label>
                               <div class="col-md-4">
                                  <select name="stock" id=""  class="form-control" wire:model="stock">
                                      <option value="instock">In Stock</option>
                                      <option value="outofstock">Out Of Stock</option>
                                  </select>
                               </div>
                               @error('stock') <span class="error text-danger">{{ $message }}</span> @enderror

                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Featured</label>
                               <div class="col-md-4">
                                  <select name="featured" id="" class="form-control" wire:model="featured">
                                      <option value="0">No</option>
                                      <option value="1">Yes</option>
                                  </select>
                               </div>
                               @error('featured') <span class="error text-danger">{{ $message }}</span> @enderror

                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Quantity</label>
                               <div class="col-md-4">
                                   <input type="text" name="qty" Placeholder="SKU" class="form-control" wire:model="qty" >
                                   @error('qty') <span class="error text-danger">{{ $message }}</span> @enderror
                               </div>
                           </div>
                          
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Image</label>
                               <div class="col-md-4">
                                   <input type="file" name="image" class="form-control" wire:model="image" >
                                   @error('image') <span class="error text-danger">{{ $message }}</span> @enderror
                                   @if($image)
                                      <img src="{{$image->temporaryUrl()}}" width="120" alt="">
                                   @endif
                               </div>
                           </div>


                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Category</label>
                               <div class="col-md-4">
                                  <select name="category_id" id="" class="form-control" wire:model="category_id">
                                      @foreach($categories as $category)
                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                      @endforeach
                                  </select>
                               </div>
                               @error('category_id') <span class="error text-danger">{{ $message }}</span> @enderror

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

@push('scripts')
 <script>
     $(function(){
         tinymce.init({
             selector: '#short_description',
             setup:function(editor){
                 editor.on('Change', function(e){
                     tinyMCE.triggerSave();
                     var sd_data = $('#short_description').val();
                     @this.set('short_description',sd_data);
                 });
             }
         });

         tinymce.init({
             selector : '#description',
             setup     :function(editor){
                 editor.on('Change', function(e){
                     tinyMCE.triggerSave();
                     var d_data = $('#description').val();
                     @this.set('description',d_data);
                 });
             }
         });
     });
 </script>
@endpush


