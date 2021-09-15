@extends("layouts.app")

@section('page-title')Messages @endsection

@section('content')
    <h1>All Messages</h1>
    @foreach($data as $item)
        <div class="alert alert-info">
            <h3>{{ $item->subject }}</h3>
            <p><small>{{ $item->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $item->id) }}"><button class="btn btn-secondary">More</button></a>
        </div>
    @endforeach
@endsection
