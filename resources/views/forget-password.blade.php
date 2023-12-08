@extends('layouts.login')

@section('content')
  <form class="theme-form">
    <h4>Forget Password! no problem</h4>    
    <div class="form-group">
      <label class="col-form-label">Enter your register email</label>
      <div class="form-input">
        <input class="form-control" type="email" name="email" required="" placeholder="email">
      </div>
    </div>    
    <div class="form-group mb-0">
      <button class="btn btn-primary btn-block w-100" type="submit">
        Submit
      </button>
    </div>
    <p class="mt-4 mb-0 text-center">Already have an password?
      <a class="ms-2" href="/">Sign in</a>
    </p>
  </form>
@endsection