@section('header')

<div class=" container pt-3">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">laravelLessions</span>
        </a>
        
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route("home") }}">Home</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route("about") }}">About Us</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route("contact") }}">Contact Us</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route("contact-data") }}">All messages</a>
        </nav>
    </div>
</div>
