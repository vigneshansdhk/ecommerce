<div>
    <div class="container" style="padding:30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                              Edit Category
                           </div>
                           <div class="col-md-6">
                            <a href="{{url('admin-categories')}}" class="btn btn-success pull-right">List Category</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                       <div class="form-horizontal">
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Category Name</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="Category Name" class="form-control" wire:model="name" wire:keyup="generatestring()">
                                  @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Category Slug</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="Category Slug" class="form-control" wire:model="slug" >
                                  @error('slug') <span class="error text-danger">{{ $message }}</span> @enderror
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label"></label>
                               <div class="col-md-4">
                                   <input type="submit" name="" Value="Update" Placeholder="Category "class="btn btn-primary pull-center" wire:click="update()" >
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>

