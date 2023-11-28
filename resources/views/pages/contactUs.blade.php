@extends("layouts.app")

@section("content")

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
        <p class="text-center contact-heading">Contact Us</p>
            <form action="/submit-contact" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Submit</button>
        </form>  
</body>

@endsection 