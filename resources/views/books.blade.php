@extends('layouts.view')


@section('title')
E-Library System - Collections 
@endsection

@section('name')
<h1>Book Collections</h1>
@endsection

@section('content')
<table id="library">
<thead>
    <tr>
        <th>Code</th>
        <th>Title</th>
        <th>Author</th>
        <th>Release Date</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    @foreach($books as $book)
        <tr>
            <td>{{$book->code}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->release}}</td>
            <td class="select_view">
                <a class="button_view btn btn-edit" href="{{"show/" .$book['id']}}">View More</a>
                <!-- <a class="button_view btn btn-danger" href="{{"delete/" .$book['id']}}" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a> <!-- books/delete/{{$book->id}}-->
            </td>
        </tr>
    @endforeach 
</tbody>
</table> 
@endsection

@section('message')
	@if($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
	@endif
@endsection