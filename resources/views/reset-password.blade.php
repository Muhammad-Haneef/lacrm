@extends('layouts.login')

@section('content')
  <form class="theme-form">
    <h4>Reset Your Password</h4>
    <h6 class="mt-4">Create Your Password</h6>
    <div class="form-group">
      <label class="col-form-label">New Password</label>
      <div class="form-input position-relative">
        <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
        <div class="show-hide"><span class="show"></span></div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-form-label">Retype Password</label>
      <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
    </div>
    <div class="form-group mb-0">
      <button class="btn btn-primary btn-block w-100" type="submit">Done                          </button>
    </div>
    <p class="mt-4 mb-0 text-center">Already have an password?<a class="ms-2" href="/">Sign in</a></p>
  </form>
@endsection