<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(5); // lay tat ca cac sach luu trong CSDL vao mang ten books
        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'author' => 'required|max:50',
            'year' => 'required',
            'category' => 'required|max:50',
            'quantity'=>'required',
            
        ]);
        Book::create($request->all());
        return redirect()->route('index')->with('succses','them thanh cong');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        return view('update',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'author' => 'required|max:50',
            'year' => 'required',
            'category' => 'required|max:50',
            'quantity'=>'required',
        ]);
        $book = Book::findorFail($id);
        $book->update($request->all());
        return redirect()->route('index')->with('succses','Sua thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::findorFail($id);
        $book->delete();
        return redirect()->route('index')->with('succses','Xoa thanh cong');
        
    }
}
