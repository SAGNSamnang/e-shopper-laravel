@extends("admin.layouts.admin")
@section('content')
<main class="content">
	<div class="container-fluid p-0">
		<h1 class="h3 mb-3 float-start">Slideshow</h1>
		<a href="#" class="btn btn-primary float-end">Add Slidshow</a>
		<table class="table">
			<tr>
				<th>No</th>
				<th>Image</th>
				<th>Title</th>
				<th>Subtitle</th>
				<th>Text</th>
				<th>Link</th>
				<th>Action</th>
			</tr>
			@foreach($slideshows as $slideshow)
				<tr>
					<td>{{ ($slideshows->currentPage() - 1) * $slideshows->count() + $loop->iteration }}</td>
					<td><img src="#" alt=""></td>
					<td>{{$slideshow['title']}}</td>
					<td>{{$slideshow['subtitle']}}</td>
					<td>{{$slideshow['text']}}</td>
					<td>{{$slideshow['link']}}</td>
					<td>
						<a href="#">
							<i class="align-middle" data-feather="eye"></i>
						</a>
						<a href="#">
							<i class="align-middle" data-feather="arrow-up"></i>
						</a>
						<a href="#">
							<i class="align-middle" data-feather="arrow-down"></i>
						</a>
						<a href="#">
							<i class="align-middle" data-feather="trash"></i>
						</a>
						<a href="#">
							<i class="align-middle" data-feather="edit"></i>
						</a>
					</td>
				</tr>
			@endforeach
		</table>
		<div class="d-flex">
			<ul class="pagination">
				<li class="page-item">
				<a class="page-link" href="{{$slideshows->previousPageUrl()}}">Previous</a>
				</li>
				@for($i=1;$i<=$slideshows->lastPage();$i++)
				<li class="page-item {{$slideshows->currentPage() == $i ? 'active' : ''}}">
					<a class="page-link" href="{{$slideshows->url($i)}}">{{$i}}</a>
				</li>
				@endfor
				<li class="page-item">
					<a class="page-link" href="{{$slideshows->nextPageUrl()}}">Next</a>
				</li>
			</ul>
		</div>
	</div>
</main>
@endsection