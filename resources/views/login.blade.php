@extends('layouts.login')

@section('content')
  <form class="theme-form">
    <h4>Sign in to account</h4>
    <p>Enter your email & password to login</p>
    <div class="form-group">
      <label class="col-form-label">Email Address</label>
      <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
    </div>
    <div class="form-group">
      <label class="col-form-label">Password</label>
      <div class="form-input position-relative">
        <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
        <div class="show-hide"><span class="show">                         </span></div>
      </div>
    </div>
    <div class="form-group mb-0">
      <div class="checkbox p-0">
        <input id="checkbox1" type="checkbox">
        <label class="text-muted" for="checkbox1">Remember password</label>
      </div><a class="link" href="/forget-password">Forgot password?</a>
      <div class="text-end mt-3">
        {{-- <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button> --}}
        <a class="btn btn-primary btn-block w-100" href="/admin/dashboard">Sign in</a>
      </div>
    </div>
  </form>
@endsection