@extends('layouts.view')

@section('content')

<div class="card" style="">
	<div class="card-header ">
        <div class="row">
            <div class="col col-md-2 mt-2"><h4><b>Book Details</b></h4></div>
			<div class="col col-md-6 justify-content-end mt-1">
                <a href="/books" class="btn btn-dark btn-sm-float-end ">View All</a>
            </div>
        </div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Code</b></label>
			<div class="col-sm-10">
				{{ $book->code}}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Title</b></label>
			<div class="col-sm-10">
				{{ $book->title }}
			</div>
		</div>
        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Type</b></label>
			<div class="col-sm-10">
				{{ $book->type }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Author</b></label>
			<div class="col-sm-10">
				{{ $book->author }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Publication Date</b></label>
			<div class="col-sm-10">
                {{ $book->release }}
			</div>
		</div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Description</b></label>
            <div class="col-sm-10">
                {{ $book->description }}
            </div>
        </div>
	</div>
    <div class="mx-auto justify-center items-center relative mb-4">
        <a href="/edit/{{$book->id}}" class="btn btn-dark">Edit Book Data</a>
		<a class=" btn btn-danger" href="{{"/delete/" .$book['id']}}" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a> <!-- books/delete/{{$book->id}}-->
    </div>
</div>

@endsection('content')