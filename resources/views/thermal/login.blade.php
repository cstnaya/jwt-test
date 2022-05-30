@extends('thermal.layout')
@section('content')
<div class='bg-white border m-5 p-5'>
    @error('error')
    <div class='text-danger p-2'>
        <strong>{{ $message }}</strong>
    </div>
    @enderror

    <form action="/thermal/login/post/" method="post">
        @csrf
        account: <input type="text" name="account" required>
        password: <input type="password" name="password" required>
        <button>Submit</button>

        @error('incorrect')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </form>
</div>
@endsection