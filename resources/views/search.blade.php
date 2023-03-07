@extends('layouts.view')

@section('name')
<h1>Search results for "{{ $query }}"</h1>
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
            </td>
        </tr>
    @endforeach 
</tbody>
</table> 


@endsection
