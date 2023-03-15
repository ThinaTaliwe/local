<x-guest-layout>
    <main class="main-content  mt-0">

        <div class="page-header align-items-start min-vh-100" style="background: radial-gradient(circle, #00923F 0%, rgba(28,28,28,1) 100%);">
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="container my-auto">
            <div class="d-flex align-items-center mb-6">
                <img src="/img/GBA-LOGO-white.png"  alt="GBA Logo"  class="col-lg-2 col-md-4 col-4 mx-auto">
            </div>
          <div class="row">
              <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                      <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                      <div class="row mt-3">
    
                    <!-- Validation Errors -->
                        <x-auth-validation-errors class="text-white mt-2 text-sm text-center" :errors="$errors" />
    
                    </div>
    
                    </div>
                  </div>
    
                  <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
    
                <!-- Email Address -->
                <div class="input-group input-group-outline my-3">
                    <x-label class="form-label" for="email" :value="__('Email')" />
    
                    <x-input class="form-control" id="email" type="email" name="email" :value="old('email')" required />
                </div>
    
                <!-- Password -->
                <div class="input-group input-group-outline mb-3">
                    <x-label class="form-label" for="password" :value="__('Password')" />
    
                    <x-input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>
    
                <!-- Remember Me -->
                <div class="form-check form-switch d-flex align-items-center mb-3">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember" checked>
                        <span  class="form-check-label mb-0 ms-3">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="text-center">
                <button class="btn bg-gradient-success w-100 my-4 mb-2">
                        {{ __('Log in') }}
                    </button>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                      {{ __('Not registered yet?') }}
                  </a>
                </div>
                
                <p class="mt-4 text-sm text-center">
                Forgot your
                    @if (Route::has('password.request'))
                        <a class="text-success text-gradient font-weight-bold" href="{{ route('password.request') }}">
                            {{ __(' Password?') }}
                        </a>
                    @endif
    
    
                </p>
            </form>
    
            </div>
                </div>
              </div>
            </div>
          </div>
    
    
    
    
          </div>
      </main>
      <!--   Core JS Files   -->
      <script src="/js/core/popper.min.js"></script>
      <script src="/js/core/bootstrap.min.js"></script>
      <script src="/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="/js/plugins/smooth-scrollbar.min.js"></script>
      <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="/js/material-dashboard.min.js?v=3.0.4"></script>
</x-guest-layout>
