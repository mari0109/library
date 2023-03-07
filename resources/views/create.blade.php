@extends('layouts.view')

@section('title')
E-Library System - New 
@endsection

@section('name')
<h1>Add New Book</h1>
@endsection

@section('content')
    <form class="add" action="/books" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="code">Code:</label>
            <input type="text" id="code" name="code" class="form-control-2" required>
        </div>
        <div class="form-group mb-3">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control-2" required>
        </div>
        <div class="form-group mb-3">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" class="form-control-2" required> 
        </div>
        <div class="form-group mb-3">
            <label for="release">Publication Date:</label>
            <input type="date" id="release" name="release" class="form-control-2" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description:</label>
            <textarea type="text" id="description" name="description" class="form-control-2" style="height:7em;"></textarea>
        </div>

        <input type="button" value="Go back" class="btn btn-secondary" onclick="history.back()">
        <input type="submit" value="Add Record" class="btn btn-light">
    </form>
@endsection

@section('message')
	@if($errors->any())
		@foreach($errors->all() as $error)
			<div class="alert alert-warning">
				{{$error}}
			</div>
		@endforeach
	@endif
@endsection