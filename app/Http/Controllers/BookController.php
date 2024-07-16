<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Display a listing of the books.
    public function index()
    {
        $books = Book::paginate(10);
        return response()->json($books);
    }

    // Store a newly created book in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $book = Book::create($validatedData);

        return response()->json($book, 201);
    }

    // Display the specified book.
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book);
    }

    // Update the specified book in storage.
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $book = Book::findOrFail($id);
        $book->update($validatedData);

        return response()->json($book);
    }

    // Remove the specified book from storage.
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json(null, 204);
    }
}
