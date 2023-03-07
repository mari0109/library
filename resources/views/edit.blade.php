@extends('layouts.view')

@section('title')
E-Library System - Edit 
@endsection

@section('name')
<h1>Edit Book</h1>
@endsection

@section('content')
    <form class="add " action="/show/{{$book->id}}" method="POST" style="background-color: #26272b;">
        @csrf
        @method('PUT')
        <div class="row ">
            <div class="col form-group mb-3">
                <label for="code">Code:</label>
                <input type="text" id="code" name="code" class="form-control-2" value="{{ $book->code }}" required>
            </div>
            <div class="col form-group mb-3">
                <label for="type">Type:</label>
                <input type="text" id="type" name="type" class="form-control-2" value="{{ $book->type }}">  
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control-2" value="{{ $book->title }}"required>
        </div>
        <div class="form-group mb-3">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" class="form-control-2" value="{{ $book->author }}" required> 
        </div>
        <div class="form-group mb-3">
            <label for="release">Publication Date:</label>
            <input type="date" id="release" name="release" class="form-control-2" value="{{ $book->release }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control-2" value="" style="height:7em;">{{ $book->description }}</textarea>
        </div>

        <input type="button" value="Go back" class="btn btn-secondary" onclick="history.back()">
        <input type="submit" value="Update Record" class="btn btn-light">
    </form>
@endsection