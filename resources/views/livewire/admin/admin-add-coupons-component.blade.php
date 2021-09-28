<div>
    <div class="container" style="padding:30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                             Add New Coupons
                           </div>
                           <div class="col-md-6">
                            <a href="{{url('admin-coupons')}}" class="btn btn-success pull-right">All Coupons</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                       <div class="form-horizontal">
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Coupon Code</label>
                               <div class="col-md-4">
                                   <input type="text" name="coupon_code" Placeholder="Coupon Code" class="form-control" wire:model="coupon_code" >
                                  @error('coupon_code') <span class="error text-danger">{{ $message }}</span> @enderror

                               </div>
                           </div>

                           <div class="form-horizontal">
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Coupon Type</label>
                               <div class="col-md-4">
                                   <select name="coupon_type" id="" class="form-control" wire:model="coupon_type">
                                      <option value="">Select Type</option>
                                      <option value="fixed">Fixed</option>
                                      <option value="percent">Percent</option>
                                   </select>
                                  @error('coupon_type') <span class="error text-danger">{{ $message }}</span> @enderror
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Coupon Value</label>
                               <div class="col-md-4">
                                   <input type="text" name="coupon_value" Placeholder="Coupon Value" class="form-control" wire:model="coupon_value" >
                                  @error('coupon_value') <span class="error text-danger">{{ $message }}</span> @enderror 
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="col-md-4 control-label">Cart Value</label>
                               <div class="col-md-4">
                                   <input type="text" name="cart_value" Placeholder="Cart Value" class="form-control" wire:model="cart_value" >
                                  @error('cart_value') <span class="error text-danger">{{ $message }}</span> @enderror 
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








                          