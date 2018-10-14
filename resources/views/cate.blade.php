@extends('layout.master')

    @section('content')
        <section class="tada-container content-posts page post-full-width">


        <!-- CONTENT -->
        <div class="content col-xs-12">
			<table class="table-bordered">
				<caption>category</caption>
				<thead>
					<tr>
						<th>#</th>
						<th>name</th>
						<th>thumbnail</th>
						<th>slug</th>
						<th>description</th>
						
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td>{{$category->id}}</td>
						<td>{{$category->name}}</td>
						<td><img src="{{asset($category->thumbnail)}}" alt="" style="width: 100px; height: 100px;"></td>
						<td>{{$category->slug}}</td>
						<td>{{$category->description}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
	  
        </div>
        
        <div class="clearfix"></div>
        
        
    </section>
	
@endsection