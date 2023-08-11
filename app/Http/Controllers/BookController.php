<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function index(){
        $books =Book::paginate(4);
        return view('Book.books',['books'=>$books]);
    }
    public function create(){
        return view('Book.create');
    }
    public function store(Request $request){
        $book = new Book();
        $book->title =$request->title;
        $book->author =$request->author;
        $book->publication =$request->publication;
        $book->isbn =$request->isbn;
        $book->stock =$request->stock;
        $book->price =$request->price;
        $book->save();
        return redirect('/');
    }
    public function edit(Request $request , $id){
        $book=Book::where('id',$id)->first();
       return view('Book.update',['book'=>$book]);
    }
    public function update(Request $request, $id){
        $book =Book::where('id',$id)->first();
        
        $book->title=$request->title;
        $book->author=$request->author;
        $book->publication=$request->publication;
        $book->isbn=$request->isbn;
        $book->stock=$request->stock;
        $book->price=$request->price;
        $book->save();
        return redirect('/');
    }
    public function destroy($id){
        $book =Book::where('id',$id)->first();
        $book->delete();
        return redirect('/');
    }
}
