<div>
    <div class="container" style="padding:30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                   Sales Setting
                   </div>
                   <div class="panel-body">
                   @if(Session::has('success_message'))
                   <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>
                   @endif
                       <div class="form-horizontal">
                            <div class="form-group">
                                    <label for="" class="col-md-4 control-label">Status</label>
                                    <div class="col-md-4">
                                        <select name="status" id="" class="my-select form-control" wire:model="status">
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
                                     </div>   
                            </div>

                            <div class="form-horizontal">
                            <div class="form-group">
                                    <label for="" class="col-md-4 control-label">Sale Date</label>
                                    <div class="col-md-4">
                                      <input type="text" name="" id="saledate" Placeholder="YYYY/MM/DD H:M:S" class="form-control" wire:model="sale_date" >
                                     </div>
                                </div>  
                            </div> 
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label"></label>
                               <div class="col-md-4">
                                   <input type="submit" value="Update" name="" Placeholder="Category "class="btn btn-primary pull-center" wire:click="updatesale()" >
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
           $('#saledate').datetimepicker({
               format : 'Y-MM-DD h:m:s',
           })
           .on('dp.change',function(ev){
               var data = $('#saledate').val();
               @this.set('sale_date',data)
           });
      });
   </script>
@endpush