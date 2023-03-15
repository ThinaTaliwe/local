<x-guest-layout>
    <main class="main-content  mt-0">

        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1627850991511-fd5640f0b472?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80');">
        {{-- <span class="mask bg-gradient-dark opacity-6"></span> --}}
          <div class="container my-auto">
            <div class="d-flex align-items-center mb-6">
                {{-- <img src="/img/GBA-LOGO-white.png"  alt="GBA Logo"  class="col-lg-2 col-md-4 col-4 mx-auto"> --}}
                <x-application-logo class="col-lg-2 col-md-4 col-4 mx-auto" />
            </div>
          <div class="row">
              <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1 text-center">
                      <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Reset Password</h4>
                      <p class="text-white mb-1 px-1">We will email you a password reset link that will allow you to choose a new one.</p>
                      <div class="row mt-3">
    
                    <!-- Session Status -->
                        <x-auth-session-status class="text-white mt-2 text-sm text-center" :status="session('status')" />

                       
                    <!-- Validation Errors -->
                        <x-auth-validation-errors class="text-white mt-2 text-sm text-center" :errors="$errors" />
    
                    </div>
    
                    </div>
                  </div>
    
                  <div class="card-body">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            {{-- <div class="mb-4 text-sm text-center text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div> --}}
    
           <!-- Email Address -->
           <div class="input-group input-group-static my-3">
            <label>Email</label>
            <input id="email" type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="John@email.io">
            </div>



            <div class="text-center">
                <button class="btn bg-gradient-dark w-100 my-4 mb-2">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
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
