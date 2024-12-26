@extends('layout')

@section('title')
    Review
@endsection

@section('content')
    <h1>Feedback form</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" required placeholder="Enter your email..." class="form-control"><br>
        <input type="text" name="subject" id="subject" required placeholder="Enter your feedback..." class="form-control"><br>
        <textarea name="message" id="message" class="form-control" required placeholder="Enter a message..."></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
