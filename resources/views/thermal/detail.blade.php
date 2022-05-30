@extends('thermal.layout')
@section('content')
<div class='bg-white border m-5 p-5'>
    <h1>Hi! {{ Auth('web-thermal')->user()->account }}</h1>
    <h2>Here is detail page.</h2>
    <a href="/thermal/dashboard">go dashboard >></a>

    <a href="/thermal/logout"
        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="/thermal/logout" method="POST" class="d-none">
        @csrf
    </form>
</div>
@endsection