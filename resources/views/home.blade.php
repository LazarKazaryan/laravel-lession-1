@extends("layouts.app")

@section("page-title")Home @endsection

@section("content")
    <h1>Home page</h1>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem libero eum unde nulla aut enim animi eius iure assumenda recusandae mollitia consequatur molestias, officiis eveniet commodi consectetur inventore, alias vitae.
    </p>
@endsection

@section("aside")
    @parent
    <p>Additional text</p>
@endsection
