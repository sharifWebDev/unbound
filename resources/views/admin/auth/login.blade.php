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
                 <form class="login-form" method="POST" action="{{ route('admin.login.submit') }}">
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

                     <div class="form-group">
                         <label for="password" class="form-label">
                             <img src="{{ asset('backend/img/ico/ico-locked.svg') }}" alt="Password" class="form-icon">
                             Password
                         </label>
                         <div class="password-input-container">
                             <input type="password" class="form-control login-input" id="password" name="password"
                                 placeholder="Enter your password" required>
                             <button type="button" class="password-toggle" onclick="togglePassword()">
                                 <i class="bi bi-eye-slash" id="passwordToggleIcon"></i>
                             </button>
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

                     <!-- <div class="social-login">
                                <button type="button" class="btn btn-social btn-google">
                                    <img src="/img/ico/ico-status.svg" alt="Google" class="social-icon">
                                    Continue with Google
                                </button>
                                <button type="button" class="btn btn-social btn-facebook">
                                    <img src="/img/ico/ico-bookings.svg" alt="Facebook" class="social-icon">
                                    Continue with Facebook
                                </button>
                            </div> -->

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

     <!-- Sign Up Modal -->
     <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="text-white modal-title" id="signUpModalLabel">
                         <img src="{{ asset('backend/img/ico/ico-profile.svg') }}" alt="Sign Up" class="modal-icon">
                         Create Your Account
                     </h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form id="signUpForm" action="{{ route('register') }}" method="POST">
                         @csrf
                         @method('POST')
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="signUpFirstName" class="form-label">
                                         <i class="bi bi-person me-2"></i>First Name
                                     </label>
                                     <input type="text" class="form-control" id="signUpFirstName" name="firstName"
                                         placeholder="Enter your first name" required>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="signUpLastName" class="form-label">
                                         <i class="bi bi-person me-2"></i>Last Name
                                     </label>
                                     <input type="text" class="form-control" id="signUpLastName" name="lastName"
                                         placeholder="Enter your last name" required>
                                 </div>
                             </div>
                         </div>
                         <div class="mb-3 form-group">
                             <label for="signUpEmail" class="form-label">
                                 <i class="bi bi-envelope me-2"></i>Email Address
                             </label>
                             <input type="email" class="form-control" id="signUpEmail" name="email"
                                 placeholder="Enter your email address" required>
                         </div>
                         <div class="mb-3 form-group">
                             <label for="signUpPhone" class="form-label">
                                 <i class="bi bi-telephone me-2"></i>Phone Number
                             </label>
                             <input type="tel" class="form-control" id="signUpPhone" name="phone"
                                 placeholder="Enter your phone number" required>
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
                                         <button type="button" class="password-toggle"
                                             onclick="toggleSignUpConfirmPassword()">
                                             <i class="bi bi-eye-slash" id="signUpConfirmPasswordToggleIcon"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="mb-3 form-group">
                             <label for="signUpAddress" class="form-label">
                                 <i class="bi bi-house me-2"></i>Address
                             </label>
                             <input type="text" class="form-control" id="signUpAddress" name="address"
                                 placeholder="Enter your address" required>
                         </div>
                         <div class="mb-3 form-group">
                             <label for="signUpCountry" class="form-label">
                                 <i class="bi bi-geo-alt me-2"></i>Country
                             </label>
                             <select class="form-select" id="signUpCountry" name="country" required>
                                 <option value="">Select your country</option>
                                @foreach ($countries ?? [] as $country)
                                     <option value="{{ $country->code }}">{{ $country->name }}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="mb-3 form-check">
                             <input class="form-check-input" type="checkbox" id="agreeTerms" name="agreeTerms" required>
                             <label class="form-check-label" for="agreeTerms">
                                 I agree to the <a href="#" class="text-success">Terms of Service</a> and <a
                                     href="#" class="text-success">Privacy Policy</a>
                             </label>
                         </div>
                         <div class="mb-3 form-check">
                             <input class="form-check-input" type="checkbox" id="subscribeNewsletter"
                                 name="subscribeNewsletter">
                             <label class="form-check-label" for="subscribeNewsletter">
                                 Subscribe to our newsletter for travel updates and special offers
                             </label>
                         </div>
                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                     <button type="submit" form="signUpForm" class="btn btn-success">
                         <i class="bi bi-person-plus me-2"></i>Create Account
                     </button>
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
                         <form id="forgotPasswordForm"action="{{ route('sent.reset.password') }}" method="POST">
                             @csrf
                             @method('POST')
                             <div class="mb-3 form-group">
                                 <label for="forgotEmail" class="form-label">
                                     <i class="bi bi-envelope me-2"></i>Email Address
                                 </label>
                                 <input type="email" class="form-control" id="forgotEmail" name="email"
                                     placeholder="Enter your email address" required>
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
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
             if (!email) {
                 toastr.error('Please enter your email address.');
                 return;
             }
             const form = document.getElementById('forgotPasswordForm');
             axios.post(form.action, new FormData(form))
                 .then(response => {
                     const data = response.data;
                     if (data.status === 'success') {
                         document.getElementById('forgotPasswordStep1').style.display = 'none';
                         document.getElementById('forgotPasswordStep2').style.display = 'block';
                         toastr.success(data.message);
                     } else {
                         toastr.error(data.message);
                     }
                 })
                 .catch(error => {
                     toastr.error(error.response.data.message);
                 });
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
                             window.location.href = data.redirect || '/admin/dashboard';
                         } else {
                             swal.fire({
                                 icon: 'error',
                                 title: 'Login Failed',
                                 text: data.message
                             })
                             submitBtn.innerHTML = originalText;
                             submitBtn.disabled = false;
                         }
                     })
                     .catch(error => {
                         swal.fire({
                             icon: 'error',
                             title: 'Login Failed',
                             text: (error.response?.data?.message || error.message)
                         })
                         submitBtn.innerHTML = originalText;
                         submitBtn.disabled = false;
                     });
             });

             const signUpForm = document.getElementById('signUpForm');
             if (signUpForm) {
                 signUpForm.addEventListener('submit', function(e) {
                     e.preventDefault();

                     const password = document.getElementById('signUpPassword').value;
                     const confirmPassword = document.getElementById('signUpConfirmPassword').value;

                     if (password !== confirmPassword) {
                        toastr.error('Passwords do not match.');
                         return;
                     }

                     const submitBtn = document.querySelector('#signUpModal .btn-success');
                     const originalText = submitBtn.innerHTML;
                     submitBtn.innerHTML =
                         '<span class="spinner-border spinner-border-sm me-2"></span>Creating Account...';
                     submitBtn.disabled = true;

                     const formData = new FormData(signUpForm);

                     axios.post(signUpForm.action, formData)
                         .then(response => {
                             const data = response.data;
                             if (data.success) {
                                toastr.success(data.message);
                                 bootstrap.Modal.getInstance(document.getElementById('signUpModal'))
                                     .hide();
                                 signUpForm.reset();
                                 submitBtn.innerHTML = originalText;
                                 submitBtn.disabled = false;
                             } else {
                                toastr.error(data.message);
                                 submitBtn.innerHTML = originalText;
                                 submitBtn.disabled = false;
                             }
                         })
                         .catch(error => {
                            toastr.error(error.response.data.message);
                             submitBtn.innerHTML = originalText;
                             submitBtn.disabled = false;
                         });

                 });
             }

             const forgotPasswordForm = document.getElementById('forgotPasswordForm');
             if (forgotPasswordForm) {
                 forgotPasswordForm.addEventListener('submit', function(e) {
                     e.preventDefault();

                     const email = document.getElementById('forgotEmail').value;
                     if (!email) {
                        toastr.error('Please enter your email address.');
                         return;
                     }

                     const submitBtn = document.getElementById('sendResetBtn');
                     const originalText = submitBtn.innerHTML;
                     submitBtn.innerHTML =
                         '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
                     submitBtn.disabled = true;

                     const formData = new FormData(forgotPasswordForm);

                     axios.post(forgotPasswordForm.action, formData)
                         .then(response => {
                             const data = response.data;
                             if (data.success) {
                                 document.getElementById('forgotPasswordStep1').style.display = 'none';
                                 document.getElementById('forgotPasswordStep2').style.display = 'block';
                                 submitBtn.style.display = 'none';
                                 submitBtn.innerHTML = originalText;
                                 submitBtn.disabled = false;
                                 toastr.success(data.message);
                             } else {
                                toastr.error(data.message);
                                 submitBtn.innerHTML = originalText;
                                 submitBtn.disabled = false;
                             }
                         })
                         .catch(error => {
                             console.error('Error:', error);
                             toastr.error(error.response?.data?.message || error.message);
                             submitBtn.innerHTML = originalText;
                             submitBtn.disabled = false;
                         });
                 });
             }

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
