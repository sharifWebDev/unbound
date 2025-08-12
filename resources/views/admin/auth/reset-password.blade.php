 @extends('layouts.guest')
 @section('title', 'Bangladesh Unbound - Reset Password')
 @section('page-title', 'Login')
 @section('breadcrumb', '')
 @section('content')

     <div class="login-container">
         <!-- Left Side - Login Form -->
         <div class="login-form-section">
             <div class="login-form-container">
                 <!-- Logo -->
                 <div class="login-logo">
                     <img src="{{ asset('backend/img/logo.png') }}" alt="Bangladesh Unbound" class="login-logo-img">
                 </div>

                 <div class="login-welcome">
                     <h1>Hello, {{ request('name') }}</h1>
                     <p>Reset your password and continue your account.</p>
                 </div>

                 <!-- Login Form -->
                 <form class="login-form" action="{{ route('reset.password', request()->query()) }}" method="POST"
                     id="resetPasswordForm">
                     @csrf
                     @method('POST')

                     <input type="hidden" name="email" value="{{ request('email') }}">
                     <input type="hidden" name="id" value="{{ request('id') }}">

                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label for="signUpPassword" class="form-label">
                                 <i class="bi bi-lock me-2"></i>Password
                             </label>
                             <div class="password-input-container">
                                 <input type="password" class="form-control" id="signUpPassword" name="password"
                                     placeholder="Create a password" required>
                                 <button type="button" class="password-toggle" onclick="toggleSignUpPassword()">
                                     <i class="bi bi-eye-slash" id="signUpPasswordToggleIcon"></i>
                                 </button>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label for="signUpConfirmPassword" class="form-label">
                                 <i class="bi bi-lock me-2"></i>Confirm Password
                             </label>
                             <div class="password-input-container">
                                 <input type="password" class="form-control" id="signUpConfirmPassword"
                                     name="password_confirmation" placeholder="Confirm your password" required>
                                 <button type="button" class="password-toggle" onclick="toggleSignUpConfirmPassword()">
                                     <i class="bi bi-eye-slash" id="signUpConfirmPasswordToggleIcon"></i>
                                 </button>
                             </div>
                         </div>
                     </div>
                     <div class="form-options justify-content-end">
                         <a href="{{ route('admin.login') }}" class="forgot-password">Sign in?</a>
                     </div>

                     <button type="submit" class="btn btn-login">
                         <img src="{{ asset('backend/img/ico/ico-dashboard.svg') }}" alt="Login" class="btn-icon">
                         Reset Password
                     </button>
                 </form>
             </div>
         </div>

         <!-- Right Side - Hero Image -->
         <div class="login-hero-section">
             <div class="hero-content">
                 <div class="hero-overlay">
                     <h2>Discover Bangladesh</h2>
                     <p>Experience the beauty, culture, and adventure that Bangladesh has to offer with our expertly crafted
                         tours.</p>
                     <div class="hero-features">
                         <div class="feature-item">
                             <img src="{{ asset('backend/img/ico/ico-package.svg') }}" alt="Tours" class="feature-icon">
                             <span>Expert Guided Tours</span>
                         </div>
                         <div class="feature-item">
                             <img src="{{ asset('backend/img/ico/ico-status.svg') }}" alt="Safe" class="feature-icon">
                             <span>Safe & Secure Travel</span>
                         </div>
                         <div class="feature-item">
                             <img src="{{ asset('backend/img/ico/ico-custom.svg') }}" alt="Custom" class="feature-icon">
                             <span>Customized Experiences</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 @endsection
 @push('scripts')
     <script>
         function toggleSignUpPassword() {
             const passwordInput = document.getElementById('signUpPassword');
             const toggleIcon = document.getElementById('signUpPasswordToggleIcon');
             passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
             toggleIcon.className = passwordInput.type === 'password' ? 'bi bi-eye-slash' : 'bi bi-eye';
         }

         function toggleSignUpConfirmPassword() {
             const passwordInput = document.getElementById('signUpConfirmPassword');
             const toggleIcon = document.getElementById('signUpConfirmPasswordToggleIcon');
             passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
             toggleIcon.className = passwordInput.type === 'password' ? 'bi bi-eye-slash' : 'bi bi-eye';
         }

         document.addEventListener('DOMContentLoaded', function() {
             const form = document.querySelector('#resetPasswordForm');

             form.addEventListener('submit', function(e) {
                 e.preventDefault();

                 const submitBtn = document.querySelector('.btn-login');
                 const originalText = submitBtn.innerHTML;
                 submitBtn.innerHTML =
                     '<span class="spinner-border spinner-border-sm me-2"></span> Reseting...';
                 submitBtn.disabled = true;

                 const formData = new FormData(form);

                 const actionUrl = form.action;

                 axios.post(actionUrl, formData)
                     .then(response => {
                         const data = response.data;

                         if (data.success) {
                             toastr.success(data.message || 'Password reset successfully.');
                             submitBtn.innerHTML =
                                 '<span class="spinner-border spinner-border-sm me-2"></span> Redirecting...';
                             setTimeout(() => {
                                 window.location.href = data.redirect || '/admin/login';
                             }, 1000);
                         } else {
                             toastr.error(data.message || 'Something went wrong.');
                             submitBtn.innerHTML = originalText;
                             submitBtn.disabled = false;
                         }
                     })
                     .catch(error => {
                         toastr.error(error.response?.data?.message || 'An unexpected error occurred.');
                         submitBtn.innerHTML = originalText;
                         submitBtn.disabled = false;
                     });
             });
         });
     </script>
 @endpush
