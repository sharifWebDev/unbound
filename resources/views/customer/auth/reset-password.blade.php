 @extends('layouts.guest')
 @section('title', 'Bangladesh Unbound - Login')
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

                 <!-- Welcome Text -->
                 <div class="login-welcome">
                     <h1>Welcome Back</h1>
                     <p>Sign in to your account to continue your journey</p>
                 </div>

                 <!-- Login Form -->
                 <form class="login-form" action="{{ route('customer.login') }}" method="POST" id="loginForm">
                     @csrf
                     @method('POST')
                     <div class="form-group">
                         <label for="email" class="form-label">
                             <img src="{{ asset('backend/img/ico/ico-profile.svg') }}" alt="Email" class="form-icon">
                             Email Address
                         </label>
                         <input type="email" class="form-control login-input" id="email" name="email"
                             placeholder="Enter your email" required>
                     </div>

                     <div class="row">
                         <div class="col-md-6">
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
                         <div class="col-md-6">
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
                     </div>

                     <div class="form-options">
                         <div class="remember-me">
                             <input type="checkbox" id="remember" name="remember" class="form-check-input">
                             <label for="remember" class="form-check-label">Remember me</label>
                         </div>
                         <a href="#" class="forgot-password" data-bs-toggle="modal"
                             data-bs-target="#forgotPasswordModal">Forgot Password?</a>
                     </div>

                     <button type="submit" class="btn btn-login">
                         <img src="{{ asset('backend/img/ico/ico-dashboard.svg') }}" alt="Login" class="btn-icon">
                         Sign In
                     </button>

                     <div class="login-divider">
                         <span>or</span>
                     </div>

                     <div class="signup-link">
                         <p>Don't have an account? <a href="#" data-bs-toggle="modal"
                                 data-bs-target="#signUpModal">Sign up here</a></p>
                     </div>
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

     <!-- Forgot Password Modal -->
     <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel"
         aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="text-white modal-title" id="forgotPasswordModalLabel">
                         <img src="{{ asset('backend/img/ico/ico-logout.svg') }}" alt="Reset Password"
                             class="modal-icon">
                         Reset Your Password
                     </h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <div id="forgotPasswordStep1">
                         <p class="mb-4 text-muted">Enter your email address and we'll send you a link to reset your
                             password.</p>
                         <form method="POST" action="{{ route('customer.verification.resend') }}"
                             id="forgotPasswordForm">
                             <div class="mb-3 form-group">
                                 <label for="forgotEmail" class="form-label">
                                     <i class="bi bi-envelope me-2"></i>Email Address
                                 </label>
                                 <input type="email" class="form-control" id="forgotEmail" name="email"
                                     placeholder="Enter your email address"
                                     value="{{ old('email', auth('customer')->user() ? auth('customer')->user()->email : '') }}"
                                     required autofocus>
                             </div>
                         </form>
                     </div>
                     <div id="forgotPasswordStep2" style="display: none;">
                         <div class="text-center">
                             <div class="mb-3 success-icon">
                                 <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
                             </div>
                             <h6>Email Sent Successfully!</h6>
                             <p class="text-muted">We've sent a password reset link to your email address. Please check
                                 your inbox and follow the instructions to reset your password.</p>
                             <p class="text-muted small">Didn't receive the email? Check your spam folder or <a
                                     href="#" class="text-success" onclick="resendResetEmail()">resend the
                                     email</a>.</p>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                     <button type="submit" form="forgotPasswordForm" class="btn btn-success" id="sendResetBtn">
                         <i class="bi bi-send me-2"></i>Send Reset Link
                     </button>
                 </div>
             </div>
         </div>
     </div>

 @endsection
 @push('scripts')
     <!-- Custom JavaScript -->
     <script>
         function togglePassword() {
             const passwordInput = document.getElementById('password');
             const toggleIcon = document.getElementById('passwordToggleIcon');

             if (passwordInput.type === 'password') {
                 passwordInput.type = 'text';
                 toggleIcon.className = 'bi bi-eye';
             } else {
                 passwordInput.type = 'password';
                 toggleIcon.className = 'bi bi-eye-slash';
             }
         }

         function toggleSignUpPassword() {
             const passwordInput = document.getElementById('signUpPassword');
             const toggleIcon = document.getElementById('signUpPasswordToggleIcon');

             if (passwordInput.type === 'password') {
                 passwordInput.type = 'text';
                 toggleIcon.className = 'bi bi-eye';
             } else {
                 passwordInput.type = 'password';
                 toggleIcon.className = 'bi bi-eye-slash';
             }
         }

         function toggleSignUpConfirmPassword() {
             const passwordInput = document.getElementById('signUpConfirmPassword');
             const toggleIcon = document.getElementById('signUpConfirmPasswordToggleIcon');

             if (passwordInput.type === 'password') {
                 passwordInput.type = 'text';
                 toggleIcon.className = 'bi bi-eye';
             } else {
                 passwordInput.type = 'password';
                 toggleIcon.className = 'bi bi-eye-slash';
             }
         }

         function resendResetEmail() {
             event.preventDefault();
             const email = document.getElementById('forgotEmail').value;
             if (email) {
                 //fthis form submit by axios
                 const form = document.getElementById('forgotPasswordForm');
                 axios.post(form.action, new FormData(form))
                     .then(response => {
                         const data = response.data;
                         if (data.status === 'success') {
                             document.getElementById('forgotPasswordStep1').style.display = 'none';
                             document.getElementById('forgotPasswordStep2').style.display = 'block';
                         } else {
                             alert(data.message);
                         }
                     })
                     .catch(error => {
                         console.error('Error:', error);
                         alert('An error occurred while resending the email. Please try again later.');
                     });
             } else {
                 alert('Please enter your email address.');
             }
         }
         // Form validation and animation
         document.addEventListener('DOMContentLoaded', function() {
             const form = document.querySelector('.login-form');
             const inputs = document.querySelectorAll('.login-input');

             // Add focus animations
             inputs.forEach(input => {
                 input.addEventListener('focus', function() {
                     this.parentElement.classList.add('focused');
                 });

                 input.addEventListener('blur', function() {
                     if (this.value === '') {
                         this.parentElement.classList.remove('focused');
                     }
                 });

                 // Check if input has value on load
                 if (input.value !== '') {
                     input.parentElement.classList.add('focused');
                 }
             });

             form.addEventListener('submit', function(e) {
                 e.preventDefault();

                 const submitBtn = document.querySelector('.btn-login');
                 const originalText = submitBtn.innerHTML;
                 submitBtn.innerHTML =
                     '<span class="spinner-border spinner-border-sm me-2"></span>Signing In...';
                 submitBtn.disabled = true;

                 const formData = new FormData(form);
                 axios.post(form.action, formData)
                     .then(response => {
                         const data = response.data;

                         if (data.success) {
                             submitBtn.innerHTML =
                                 '<span class="spinner-border spinner-border-sm me-2"></span> Redirecting...';
                             window.location.href = data.redirect || '/customer/dashboard';
                         } else {
                             alert('Login failed: ' + data.message);
                             submitBtn.innerHTML = originalText;
                             submitBtn.disabled = false;
                         }
                     })
                     .catch(error => {
                         console.error('Error:', error);
                         alert('An error occurred: ' + (error.response?.data?.message || error.message));
                         submitBtn.innerHTML = originalText;
                         submitBtn.disabled = false;
                     });
             });

             // Sign Up Form Handling
             const signUpForm = document.getElementById('signUpForm');
             if (signUpForm) {
                 signUpForm.addEventListener('submit', function(e) {
                     e.preventDefault();

                     // Validate passwords match
                     const password = document.getElementById('signUpPassword').value;
                     const confirmPassword = document.getElementById('signUpConfirmPassword').value;

                     if (password !== confirmPassword) {
                         alert('Passwords do not match!');
                         return;
                     }

                     // Add loading state
                     const submitBtn = document.querySelector('#signUpModal .btn-success');
                     const originalText = submitBtn.innerHTML;
                     submitBtn.innerHTML =
                         '<span class="spinner-border spinner-border-sm me-2"></span>Creating Account...';
                     submitBtn.disabled = true;

                     // Ajax signup sending with axios
                     const formData = new FormData(signUpForm);

                     axios.post(signUpForm.action, formData)
                         .then(response => {
                             const data = response.data;
                             if (data.success) {
                                 alert(
                                     'Account created successfully! Please check your email to verify your account.'
                                     );
                                 bootstrap.Modal.getInstance(document.getElementById('signUpModal'))
                                     .hide();
                                 signUpForm.reset();
                                 submitBtn.innerHTML = originalText;
                                 submitBtn.disabled = false;
                             } else {
                                 alert('Error creating account: ' + data.message);
                                 submitBtn.innerHTML = originalText;
                                 submitBtn.disabled = false;
                             }
                         })
                         .catch(error => {
                             console.error('Error:', error);
                             alert((error.response?.data?.message || error.message));
                             submitBtn.innerHTML = originalText;
                             submitBtn.disabled = false;
                         });

                 });
             }

             // Forgot Password Form Handling
             const forgotPasswordForm = document.getElementById('forgotPasswordForm');
             if (forgotPasswordForm) {
                 forgotPasswordForm.addEventListener('submit', function(e) {
                     e.preventDefault();

                     const email = document.getElementById('forgotEmail').value;
                     if (!email) {
                         alert('Please enter your email address.');
                         return;
                     }

                     // Add loading state
                     const submitBtn = document.getElementById('sendResetBtn');
                     const originalText = submitBtn.innerHTML;
                     submitBtn.innerHTML =
                         '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
                     submitBtn.disabled = true;

                     // Simulate sending reset email axios
                     const formData = new FormData(forgotPasswordForm);

                     axios.post(forgotPasswordForm.action, formData)
                         .then(response => {
                             const data = response.data;
                             if (data.success) {
                                 document.getElementById('forgotPasswordStep1').style.display = 'none';
                                 document.getElementById('forgotPasswordStep2').style.display = 'block';
                                 submitBtn.style.display = 'none';
                             } else {
                                 alert('Error sending reset email: ' + data.message);
                                 submitBtn.innerHTML = originalText;
                                 submitBtn.disabled = false;
                             }
                         })
                         .catch(error => {
                             console.error('Error:', error);
                             alert((error.response?.data?.message || error.message));
                             submitBtn.innerHTML = originalText;
                             submitBtn.disabled = false;
                         });
                 });
             }

             // Reset forgot password modal when closed
             const forgotPasswordModal = document.getElementById('forgotPasswordModal');
             if (forgotPasswordModal) {
                 forgotPasswordModal.addEventListener('hidden.bs.modal', function() {
                     document.getElementById('forgotPasswordStep1').style.display = 'block';
                     document.getElementById('forgotPasswordStep2').style.display = 'none';
                     document.getElementById('sendResetBtn').style.display = 'inline-block';
                     document.getElementById('sendResetBtn').disabled = false;
                     document.getElementById('sendResetBtn').innerHTML =
                         '<i class="bi bi-send me-2"></i>Send Reset Link';
                     forgotPasswordForm.reset();
                 });
             }
         });
     </script>
 @endpush
