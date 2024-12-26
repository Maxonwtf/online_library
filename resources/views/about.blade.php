@extends('layout')

@section('title')
    About
@endsection

@section('content')
    <div class="container text-center my-5">
        <h1 class="text-warning">About Us</h1>
        <p class="mt-3">
            BooksClub is a platform for book lovers. Here, you can explore a wide catalog of books, read reviews, and create your own collection of favorites.
        </p>
        <h3 class="mt-4 text-warning">Why Choose Us?</h3>
        <ul class="list-unstyled mt-3">
            <li>📚 A convenient catalog to find books by genre and author.</li>
            <li>⭐ The ability to add books to your favorites.</li>
            <li>✍️ Read and write reviews for books.</li>
        </ul>
        <h3 class="mt-4 text-warning">Get in Touch</h3>
        <p>
            If you have any suggestions or questions, feel free to contact us at
            <a href="mailto:support@booksclub.com" class="text-white">support@booksclub.com</a>.
        </p>
        <a href="/register" class="btn btn-warning mt-3">Join Us</a>
    </div>

@endsection
