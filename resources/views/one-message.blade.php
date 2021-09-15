@extends("layouts.app")

@section('page-title'){{ $data->subject }} @endsection

@section('content')
    <h1>{{ $data->subject }}</h1>
    <div class="alert alert-info">
        <p>{{ $data->message }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <p>
            <strong>From</strong>: {{ $data->email }}&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>By</strong>: {{ $data->name }}
        </p>
        <a href="{{ route('contact-edit', $data->id) }}"><button class="btn btn-primary">Edit</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
    </div>
@endsection
