@extends('layout.app')

@section('content')

<div class="container">
    <form action="{{ route('login')}}" method="POST"
        class="d-flex flex-column justify-content-center align-self-center marginy">
        @csrf

        @if (session('status'))
        <div class="bg-danger py-2 text-white text-center text-center rounded my-3">

            {{session('status')}}
        </div>
        @endif
        <div class="mb-4">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Your email"
                class="form-control border border-primary rounded-sm @error('email')border-red-500 @enderror"
                value="{{old('email')}}">

            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message}}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Your password"
                class="form-control border border-primary rounded-sm @error('password')border-red-500 @enderror"
                value="">

            @error('password')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message}}
            </div>
            @enderror
        </div>

        <div class="mb-1">
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember">Remember me</label>
            </div>
        </div>
        <div class="form-group">
                                   
            <div style="font-size:13px;" class="mb-2">
                Don't have an account! 
            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                Sign Up Here
            </a>
            </div>
                                   
                                    

        <div>
            <button class="btn btn-primary" type="submit">Login</button>
        </div>


    </form>
</div>
@endsection