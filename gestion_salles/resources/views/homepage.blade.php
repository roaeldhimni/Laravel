<x-layout class="d-flex justify-content-center">
  <div class="container py-5">
    <div class="text-center mb-4">
      <h1 class="display-4 text-primary"><b>Inscription</b></h1>
      <style>
        h1{
  font-size: 48px;
  text-shadow: -1px -1px #9df, 1px 1px #49d, -3px 0 4px #000;
  font-family:"Segoe print", Arial, Helvetica, sans-serif;
  color:#6bf;
  padding:24px 32px 32px 32px;
  font-weight:lighter;
  -moz-box-shadow: 2px 2px 6px #888;  
  -webkit-box-shadow: 2px 2px 6px #888;  
  box-shadow:2px 2px 6px #888;  
  text-align:center;
  display:inline;
  line-height:150px;
}
        body{
            background-color: Gainsboro;

        }
      </style>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 bg-light p-5 rounded">
        <form action="{{ route('user.register') }}" method="POST" id="registration-form">
          @csrf
          <div class="form-group">
            <label for="username-register" class="text-muted mb-2 text-info"><small>Username</small></label>
            <input name="username" id="username-register" class="form-control @error('username') is-invalid @enderror" type="text" placeholder="Enter a username" autocomplete="off" value="{{ old('username') }}" />
            @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email-register" class="text-muted mb-2 text-info"><small>Email</small></label>
            <input name="email" id="email-register" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="example@gmail.com" autocomplete="off" value="{{ old('email') }}" />
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="password-register" class="text-muted mb-2 text-info"><small>Password</small></label>
            <input name="password" id="password-register" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Choose a password" />
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="password-register-confirm" class="text-muted mb-2 text-info"><small>Confirm Password</small></label>
            <input name="password_confirmation" id="password-register-confirm" class="form-control @error('password_confirmation') is-invalid @enderror" type="password" placeholder="Confirm password" />
            @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary btn-block mt-4">Sign up</button>
        </form>
      </div>
    </div>
  </div>
</x-layout>
