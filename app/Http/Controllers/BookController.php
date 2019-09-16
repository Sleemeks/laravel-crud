<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_name'     => 'required',
            'book_author'   => 'required',
            'book_price'    => 'required|integer',
            'book_qty'      => 'required|integer'
        ]);
        $share = new Book([
            'book_name'     => $request->get('book_name'),
            'book_author'   => $request->get('book_author'),
            'book_price'    => $request->get('book_price'),
            'book_qty'      => $request->get('book_qty')
        ]);
        $share->save();

        return redirect('/book')->with('success', 'Book has been saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);

        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'book_name'     => 'required',
            'book_author'   => 'required',
            'book_price'    => 'required|integer',
            'book_qty'      => 'required|integer'
        ]);

        $book = Book::find($id);
        $book->book_name       = $request->get('book_name');
        $book->book_author     = $request->get('book_author');
        $book->book_price      = $request->get('book_price');
        $book->book_qty        = $request->get('book_qty');
        $book->save();

        return redirect('/book')->with('success', 'Book has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/book')->with('success', 'Book has been deleted Successfully');
    }
}
