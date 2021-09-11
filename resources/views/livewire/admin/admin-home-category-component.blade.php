<div>
    <div class="container" style="padding:30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                    Manage Home Categories
                   </div>
                   <div class="panel-body">
                   @if(Session::has('success_message'))
              <div class="alert alert-success">
                  <strong>Success</strong>{{Session::get('success_message')}}
              </div>
            @endif
                       <div class="form-horizontal">
                            <div class="form-group">
                                    <label for="" class="col-md-4 control-label">Category</label>
                                    <div class="col-md-4" wire:ignore>
                                        <select name="selected_category_id[]" id="" class="my-select form-control" wire:model="selected_category_id" multiple="multiple">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                     </div>
                             </div>
                             <div class="form-group">
                               <label for="" class="col-md-4 control-label">No Of Products</label>
                               <div class="col-md-4">
                                   <input type="text" name="" Placeholder=" Enter No Of Products" class="form-control" wire:model="no_of_products" >
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

@push('scripts')
  <!-- <script>
      $(document).ready(function(){
          $('.sel-categories').select2();
          $('.sel-categories').on('change',function(e){
              var data = $('.sel_categories').select2("val");
              $this.set('selected_category_id',data);
          });
      });
  </script> -->

  <script>
		$(document).ready(function(){
    $('.my-select').selectpicker();
})
	</script>
@endpush