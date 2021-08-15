@extends('layout.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <div class="container">

            <form action="{{ route('register')}}" method="POST"
                class="d-flex flex-column justify-content-center align-self-center marginy">
                @csrf
                @if (session('status'))
                <div class="bg-danger py-2 text-white text-center text-center rounded my-3">

                    {{session('status')}}
                </div>
                @endif
                <div class="mb-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name"
                        class="form-control border border-primary rounded-sm @error('name')border-red @enderror"
                        value="{{old('name')}}">


                    @error('name')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your username"
                        class="form-control border border-primary rounded-sm @error('username')border-red @enderror"
                        value="{{old('username')}}">

                    @error('username')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email"
                        class="form-control border border-primary rounded-sm @error('email')border-red @enderror"
                        value="{{old('email')}}">

                    @error('email')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your password"
                        class="form-control border border-primary rounded-sm @error('password')border-red @enderror"
                        value="">

                    @error('password')
                    <div class="text-danger mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirm Your password" class="form-control border border-primary rounded-sm"
                        value="">


                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection