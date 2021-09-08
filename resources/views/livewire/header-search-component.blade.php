<div class="wrap-search center-section">
 <div class="wrap-search-form">
 	<form action="{{url('search')}}" id="form-search-top" name="form-search-top" method="get">
 		<input type="text" name="search" value="{{$search}}" placeholder="Search here...">
 		<button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
 		<div class="wrap-list-cate">
		 <input type="hidden" name="product_cat" value="{{$product_cat}}" id="product-cat">
 			<input type="hidden" name="product_cat_id" value="{{$product_cat_id}}" id="product-cat-id">
			 <a href="#" class="link-control">{{str_split($product_cat,12)[0]}}</a>
 			<ul class="list-cate">
			 <a href="#" class="link-control">All Category</a>
 			    @foreach($categories as $category)
 				<li class="level-2" data-id="{{$category->id}}">{{$category->name}}</li>
                 @endforeach
 			</ul>
 		</div>
 	</form>
 </div>
</div>
