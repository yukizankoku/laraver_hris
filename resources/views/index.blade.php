@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      
        <main class="form-signin w-100 m-auto text-center">
            <img class="mb-4" src="img/logo.png" alt="" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal text-center">Please Log In</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <div class="form-check text-start my-3">
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
            </form>
          </main>
    </div>
</div>
@endsection