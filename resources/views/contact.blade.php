@extends("layouts.app")

@section("page-title")Contact Us @endsection

@section('content')
    <h1>Contact Us</h1>

    <form action="{{ route("contact-form") }}" method="post" class="mt-4">
        @csrf

        <div class="form-floating mt-2">
            <input type="text" class="form-control" name="name" placeholder="Enter name" id="name">
            <label for="name">Name</label>
        </div>
        <div class="form-floating mt-2">
            <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
            <label for="email">Email</label>
        </div>
        <div class="form-floating mt-2">
            <input type="text" class="form-control" name="subject" placeholder="Enter message subject" id="subject">
            <label for="name">Subject</label>
        </div>
        <div class="form-floating mt-2">
            <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
            <label for="message">Message</label>
        </div>
        <button type="submit" class="btn btn-outline-dark mt-4">Send message</button>
    </form>

@endsection
