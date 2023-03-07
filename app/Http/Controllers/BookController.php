<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; // call as an object - class

class BookController extends Controller
{  
    // get the data from database using the Subject model inside the Controller   
    public function index(){
        // declare a local variable = call the Model and function
        $books = Book::all(); // select * from book;

        return view('\books', ['books'=>$books]); // $books is defined at the view file where the table is displayed
        //(becomes associative array) throw to view, [(object) variable that view will used to save => value ]
    }

    public function store(Request $request){
		$book = new Book(); // create an object called Book

		$request->validate([
			'code' => 'required|min:3|unique:books',
            'description' => 'min:25',
		]);

		// Subject::create($request->all());

		$book->code = request('code');
        $book->title = request('title');
        $book->author = request('author');
        $book->release = request('release');
		$book->description = request('description');

		$book->save();

		return redirect('/books');

	}

    public function delete($id){
        $book = Book::find($id);
        $book->delete();

        return redirect('/books');
    } 
}
