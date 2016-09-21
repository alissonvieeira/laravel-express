@extends('template')

@section('title')
	Blog
@stop

@section('content')
	<h1>Blog</h1>
	<hr>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Posts</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
			<tr>
				<td>{{ $post }}</td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop