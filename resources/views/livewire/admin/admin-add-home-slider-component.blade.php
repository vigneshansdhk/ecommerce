<div>
    <div class="container" style="padding:30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                             Add New Home Sliders
                           </div>
                           <div class="col-md-6">
                            <a href="{{url('admin-home-slider')}}" class="btn btn-success pull-right">List Home Sliders</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                       <div class="form-horizontal">
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Title</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="title" class="form-control" wire:model="title" >
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Subtitle</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="Subtitle" class="form-control" wire:model="subtitle" >
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Price</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="Price" class="form-control" wire:model="price" >
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Link</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder="Link" class="form-control" wire:model="link" >
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">status</label>
                               <div class="col-md-4">
                                  <select name="" id=""  class="form-control" wire:model="status">
                                      <option value="0">Active</option>
                                      <option value="1">InActive</option>
                                  </select>
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



