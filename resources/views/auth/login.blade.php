@extends('layouts.app')

@section('content')

  <section class="vh-100">
    <div class="container py-5 h-100">
      <h3><a class="navbar-brand text-white" href="{{ url('/') }}"><i class="fa fa-book" aria-hidden="true"></i> Sketche</a></h3>
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-12">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://www.bootstrapdash.com/demo/login-template-free-2/assets/images/login.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color: #ffff">
                <div class="card-body p-4 p-lg-3 text-black">
  
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                    <div class="form-outline mb-4">
                     
                      <label class="form-label" for="form2Example17">Email address</label>

                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" id="form3Example3" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                    </div>
  
                    <div class="form-outline mb-4">

                      <label class="form-label" for="form2Example27">Password</label>

                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  id="form3Example4" class="form-control form-control-lg"
                      placeholder="Enter password" name="password" required autocomplete="current-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                      <!-- Checkbox -->
                      <div class="form-check mb-0">
        
                        <input class="form-check-input me-2" type="checkbox" id="form2Example3" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                        <label class="form-check-label" for="form2Example3">
                          Remember me
                        </label>
                      </div>
        
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    </div>

                    @if (Route::has('password.request'))
                       <a class="small text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                    @endif

                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a class="text-primary" href="{{ route('register') }}"
                        style="color: #393f81;">Register here</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
