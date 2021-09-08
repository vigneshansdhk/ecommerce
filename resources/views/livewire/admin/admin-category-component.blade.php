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
                           <div class="col-md-6"></div>
                           <div class="col-md-6">
                            <a href="{{url('admin-categories-add')}}" class="btn btn-success pull-right btn btn-success">Add New Category</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                       <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Category Name</th>
                                  <th>Slug</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($categories as $category)
                              <tr>
                              <td>{{$category->id}}</td>
                              <td>{{$category->name}}</td>
                              <td>{{$category->slug}}</td>
                              <td>
                                  <a href="{{url('admin-categories-edit',['category_slug' => $category->slug])}}" class="btn btn-warning">Edit</a>
                                  <button class="btn btn-danger" wire:click="delete({{$category->id}})">Delete</button>
                              </td>
                              </tr>
                              @endforeach
                          </tbody>
                       </table>
                       {{$categories->links()}}
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
