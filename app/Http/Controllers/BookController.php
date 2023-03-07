<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; // call as an object - class
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{  
    // get the data from database using the Subject model inside the Controller   
    public function index(){
        // declare a local variable = call the Model and function
        // $books = DB::table('cars')->paginate(10);
        
        //$books = Book::paginate(10); // select * from book limit 10;
        $books = Book::all();
        return view('\books', ['books'=>$books]); // $books is defined at the view file where the table is displayed
        //(becomes associative array) throw to view, [(object) variable that view will used to save => value ]
    }

    public function store(Request $request){
		$book = new Book(); // create an object called Book

		$request->validate([
			'code' => 'required|min:3|unique:books',
            'type' => 'required',
            'title' => 'required',
		]);

		$book->code = $request->input('code');
        $book->title = $request->input('title');
        $book->type = $request->input('type');
        $book->author = $request->input('author');
        $book->release = $request->input('release');
		$book->description = $request->input('description');

		$book->save();

		return redirect('/books')->with('success', 'Book Added Successfully.');

	}

    public function view($id){
        $book = Book::findOrFail($id);
        return view('show', ['book'=>$book]);
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        return view('/edit', ['book'=>$book]); // save object for Book
    }

    public function update($id){
        $book = Book::findOrFail($id);

        $book->code = request('code');
        $book->title = request('title');
        $book->type = request('type');
        $book->author = request('author');
        $book->release = request('release');
		$book->description = request('description');

		$book->save();

		return redirect('/books')->with('success', 'Book Update Successfully.');
    }

    public function delete($id){
        $book = Book::find($id);
        $book->delete();

        return redirect('/books')->with('success', 'Book Data deleted successfully');
    } 

    public function search(Request $request)
{
    $query = request()->input('search');
    
    $books = Book::where('code', 'LIKE', '%' . $query . '%')
                ->orWhere('title', 'LIKE', '%' . $query . '%')
                ->orWhere('author', 'LIKE', '%' . $query . '%')
                ->orWhere('release', 'LIKE', '%' . $query . '%')->get();
    
    return view('/search', compact('books', 'query'));
}
}
