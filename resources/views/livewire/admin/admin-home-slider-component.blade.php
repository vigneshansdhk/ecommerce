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
                               All Sliders
                           </div>
                           <div class="col-md-6">
                            <a href="{{url('admin-home-slider-add')}}" class="btn btn-success pull-right btn btn-success">Add Home Slider</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                       <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Image</th>
                                  <th>Title</th>
                                  <th>Subtitle</th>
                                  <th>Price</th>
                                  <th>Link</th>
                                  <th>Status</th>
                                  <th>Date</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($sliders as $slider)
                              <tr>
                              <td>{{$slider->id}}</td>
                              <td><img src="{{asset('assets/images/sliders')}}/{{$slider->image}}" width="120" alt=""></td>
                              <td>{{$slider->title}}</td>
                              <td>{{$slider->subtitle}}</td>
                              <td>{{$slider->price}}</td>
                              <td>{{$slider->link}}</td>
                              <td>{{$slider->status == 1 ? 'Active':'InActive'}}</td>
                              <td>{{$slider->created_at}}</td>
                              <td>
                              <a href="{{url('admin-home-slider-edit',['slider_id' => $slider->id])}}" class="btn btn-warning">Edit</a>
                              <button class="btn btn-danger" wire:click="delete({{$slider->id}})">Delete</button>
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
