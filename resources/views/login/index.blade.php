@extends('layouts.main')

@section('contents')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
          <form>
            <h1 class="h3 mb-3 fw-normal text-center">Please log in</h1>
        
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
          </form>
          <small class="d-block text-center mt-3">Not registered? <a href="/register">Register now!</a></small>
        </main>

    </div>
</div>


@endsection