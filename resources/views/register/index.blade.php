@extends('layouts.main')

@section('container')
    <div id="register" class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-md-6">
            <main class="form-signin">
                <form action="/register" method="POST">
                    @csrf
                    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                    <h1 class="h3 mb-3 fw-normal text-center text-capitalize">registration form</h1>

                    <div class="form-floating">
                        <input required type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="your name" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-floating">
                        <input required type="text" name="username"
                            class="form-control @error('username') is-invalid @enderror" id="username"
                            placeholder="your username" value="{{ old('username') }}">
                        <label for=" username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-floating">
                        <input required type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for=" email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-floating">
                        <input required type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div> --}}
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                    <small class="mt-3 d-block text-center">Already have an account? <a href="/login#sign-in">Sign
                            In!</a></small>
                </form>
            </main>

        </div>
    </div>
@endsection
