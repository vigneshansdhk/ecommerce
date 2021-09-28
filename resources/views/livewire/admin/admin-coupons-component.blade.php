<div>
   
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
                               All Coupons
                           </div>
                           <div class="col-md-6">
                            <a href="{{url('admin-coupons-add')}}" class="btn btn-success pull-right btn btn-success">Add New Coupon</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                       <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Coupons code</th>
                                  <th>Coupons Type</th>
                                  <th>Coupon value</th>
                                  <th>Cart value</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($coupons as $coupon)
                              <tr>
                              <td>{{$coupon->id}}</td>
                              <td>{{$coupon->code}}</td>
                              <td>{{$coupon->type}}</td>
                              @if($coupon->type == 'fixed')
                              <td>${{$coupon->value}}</td>
                              @else
                              <td>{{$coupon->value}} %</td>
                              @endif
                              <td>{{$coupon->cart_value}}</td>
                              <td>
                                  <a href="{{url('admin-coupons-edit',['coupon->id' => $coupon->id])}}" class="btn btn-warning">Edit</a>
                                  <button class="btn btn-danger" onclick="confirm('Are You Sure to delete this?')|| event.stopImmediatePropagation()" wire:click="delete({{$coupon->id}})">Delete</button>
                              </td>
                              </tr>
                              @endforeach
                          </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
 <!-- <script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script> -->

