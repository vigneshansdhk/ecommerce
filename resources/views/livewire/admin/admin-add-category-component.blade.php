<div>
    <div class="container" style="padding:30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                             Add New Category
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
                                   <input type="text" name="" Placeholder="Category Name" class="form-control" wire:model="name" >
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Category Slug</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="Category Slug" class="form-control" wire:model="slug" >
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label"></label>
                               <div class="col-md-4">
                                   <input type="submit" name="" Placeholder="Category "class="btn btn-primary pull-center" wire:click="store()" >
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>








                          