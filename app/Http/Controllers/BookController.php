<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Book;
use App\Http\Requests\StoreBookRequest;
use File;
use Image;
use Session;
use Redirect;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with('typebooks')->orderBy('book_id', 'desc')->paginate(5);
        return view('books/index', ['books' => $books]);
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
    public function store(StoreBookRequest $request)
    {
        $book = new Book();
        $book->book_title = $request->book_title;
        $book->book_price = $request->book_price;
        $book->typebooks_id = $request->typebooks_id;
        if ($request->hasFile('book_image')) {
            $filename = str_random(10) . '.' . $request->file('book_image')->getClientOriginalExtension();
            $request->file('book_image')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename)->resize(50,50)->save(public_path() . '/images/resize/' . $filename);
            $book->book_image = $filename;
        } else {
            $book->book_image = 'nopic.png';
        }
        $book->save();

        Session::flash('flash_message', 'Task successfully');
        
        //$request->session()->flash('status', 'บันทึกข้อมูลเรียบร้อยแล้ว');
        return redirect()->action('BookController@index');
        //return back();
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
    public function edit($book_id)
    {
        $book = Book::findOrFail($book_id);
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBookRequest $request, $book_id)
    {
        $book = Book::find($book_id);
        $book->book_title = $request->book_title;
        $book->book_price = $request->book_price;
        // $book->book_typebooks_id = $request->typebooks_id;
        // $book->save();
        $book->update($request->all());
        //$request->session()->flash('status', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
        // Session::flash('status', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
        // Session::flash('alert-class', 'alert-danger');
        //return back();
        // return redirect()->action('BookController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($book_id)
    {
        $book = Book::find($book_id);
        if ($book->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\'. $book->book_image);
            File::delete(public_path() . '\\images\\resize\\' . $book->book_image);
        }
        $book->delete();
        return redirect()->action('BookController@index');
    }
}
