@extends("layouts.app")

@section("page-title")Edit message @endsection

@section('content')
    <h1>Edit message</h1>

    <form action="{{ route("contact-edit-submit", $data->id) }}" method="post" class="mt-4">
        @csrf

        <div class="form-floating mt-2">
            <input type="text" value="{{ $data->name }}" class="form-control" name="name" placeholder="Enter name" id="name">
            <label for="name">Name</label>
        </div>
        <div class="form-floating mt-2">
            <input type="email" value="{{ $data->email }}" class="form-control" name="email" placeholder="Enter email" id="email">
            <label for="email">Email</label>
        </div>
        <div class="form-floating mt-2">
            <input type="text" value="{{ $data->subject }}" class="form-control" name="subject" placeholder="Enter message subject" id="subject">
            <label for="name">Subject</label>
        </div>
        <div class="form-floating mt-2">
            <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 100px">{{ $data->message }}</textarea>
            <label for="message">Message</label>
        </div>
        <button type="submit" class="btn btn-outline-dark mt-4">Save message</button>
    </form>

@endsection
