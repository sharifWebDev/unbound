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
                    <img src="{{ asset('backend/img/logo.png')}}" alt="Bangladesh Unbound" class="login-logo-img">
                </div>

                <!-- Welcome Text -->
                <div class="login-welcome">
                    <h1>Welcome Back</h1>
                    <p>Sign in to your account to continue your journey</p>
                </div>

                <!-- Login Form -->
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="email" class="form-label">
                            <img src="{{ asset('backend/img/ico/ico-profile.svg')}}" alt="Email" class="form-icon">
                            Email Address
                        </label>
                        <input type="email" class="form-control login-input" id="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">
                            <img src="{{ asset('backend/img/ico/ico-locked.svg')}}" alt="Password" class="form-icon">
                            Password
                        </label>
                        <div class="password-input-container">
                            <input type="password" class="form-control login-input" id="password" name="password" placeholder="Enter your password" required>
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
                        <a href="#" class="forgot-password" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn btn-login">
                        <img src="{{ asset('backend/img/ico/ico-dashboard.svg')}}" alt="Login" class="btn-icon">
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
                        <p>Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign up here</a></p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Side - Hero Image -->
        <div class="login-hero-section">
            <div class="hero-content">
                <div class="hero-overlay">
                    <h2>Discover Bangladesh</h2>
                    <p>Experience the beauty, culture, and adventure that Bangladesh has to offer with our expertly crafted tours.</p>
                    <div class="hero-features">
                        <div class="feature-item">
                            <img src="{{ asset('backend/img/ico/ico-package.svg')}}" alt="Tours" class="feature-icon">
                            <span>Expert Guided Tours</span>
                        </div>
                        <div class="feature-item">
                            <img src="{{ asset('backend/img/ico/ico-status.svg')}}" alt="Safe" class="feature-icon">
                            <span>Safe & Secure Travel</span>
                        </div>
                        <div class="feature-item">
                            <img src="{{ asset('backend/img/ico/ico-custom.svg')}}" alt="Custom" class="feature-icon">
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
                        <img src="{{ asset('backend/img/ico/ico-profile.svg')}}" alt="Sign Up" class="modal-icon">
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
                                    <input type="text" class="form-control" id="signUpFirstName" name="firstName" placeholder="Enter your first name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 form-group">
                                    <label for="signUpLastName" class="form-label">
                                        <i class="bi bi-person me-2"></i>Last Name
                                    </label>
                                    <input type="text" class="form-control" id="signUpLastName" name="lastName" placeholder="Enter your last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="signUpEmail" class="form-label">
                                <i class="bi bi-envelope me-2"></i>Email Address
                            </label>
                            <input type="email" class="form-control" id="signUpEmail" name="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="signUpPhone" class="form-label">
                                <i class="bi bi-telephone me-2"></i>Phone Number
                            </label>
                            <input type="tel" class="form-control" id="signUpPhone" name="phone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 form-group">
                                    <label for="signUpPassword" class="form-label">
                                        <i class="bi bi-lock me-2"></i>Password
                                    </label>
                                    <div class="password-input-container">
                                        <input type="password" class="form-control" id="signUpPassword" name="password" placeholder="Create a password" required>
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
                                        <input type="password" class="form-control" id="signUpConfirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                                        <button type="button" class="password-toggle" onclick="toggleSignUpConfirmPassword()">
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
                            <input type="text" class="form-control" id="signUpAddress" name="address" placeholder="Enter your address" required>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="signUpCountry" class="form-label">
                                <i class="bi bi-geo-alt me-2"></i>Country
                            </label>
                            <select class="form-select" id="signUpCountry" name="country" required>
                                <option value="">Select your country</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brazil</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="CV">Cabo Verde</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo (Democratic Republic)</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="SZ">Eswatini</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GR">Greece</option>
                                <option value="GD">Grenada</option>
                                <option value="GT">Guatemala</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HN">Honduras</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="KP">North Korea</option>
                                <option value="MK">North Macedonia</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestine</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="QA">Qatar</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russia</option>
                                <option value="RW">Rwanda</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="KR">South Korea</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VA">Vatican City</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" id="agreeTerms" name="agreeTerms" required>
                            <label class="form-check-label" for="agreeTerms">
                                I agree to the <a href="#" class="text-success">Terms of Service</a> and <a href="#" class="text-success">Privacy Policy</a>
                            </label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" id="subscribeNewsletter" name="subscribeNewsletter">
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
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-white modal-title" id="forgotPasswordModalLabel">
                        <img src="{{ asset('backend/img/ico/ico-logout.svg')}}" alt="Reset Password" class="modal-icon">
                        Reset Your Password
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="forgotPasswordStep1">
                        <p class="mb-4 text-muted">Enter your email address and we'll send you a link to reset your password.</p>
                        <form id="forgotPasswordForm">
                            <div class="mb-3 form-group">
                                <label for="forgotEmail" class="form-label">
                                    <i class="bi bi-envelope me-2"></i>Email Address
                                </label>
                                <input type="email" class="form-control" id="forgotEmail" name="email" placeholder="Enter your email address" required>
                            </div>
                        </form>
                    </div>
                    <div id="forgotPasswordStep2" style="display: none;">
                        <div class="text-center">
                            <div class="mb-3 success-icon">
                                <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
                            </div>
                            <h6>Email Sent Successfully!</h6>
                            <p class="text-muted">We've sent a password reset link to your email address. Please check your inbox and follow the instructions to reset your password.</p>
                            <p class="text-muted small">Didn't receive the email? Check your spam folder or <a href="#" class="text-success" onclick="resendResetEmail()">resend the email</a>.</p>
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
            const email = document.getElementById('forgotEmail').value;
            if (email) {
                // Simulate resending email
                alert('Reset email resent to ' + email);
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

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Add loading state
                const submitBtn = document.querySelector('.btn-login');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Signing In...';
                submitBtn.disabled = true;

                //ajax call

                const formData = new FormData(form);
                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        alert('Login successful!');
                        window.location.href = 'dashboard';
                    } else {
                        alert('Login failed: ' + data.message);
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert(error.message);
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
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Creating Account...';
                    submitBtn.disabled = true;

                    //ajax signup sending
                    const formData = new FormData(signUpForm);
                    fetch(signUpForm.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            alert('Account created successfully! Please check your email to verify your account.');
                            bootstrap.Modal.getInstance(document.getElementById('signUpModal')).hide();
                            signUpForm.reset();
                        } else {
                            alert('Account creation failed: ' + data.message);
                        }
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while creating your account. Please try again later.');
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
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
                    submitBtn.disabled = true;

                    // Simulate sending reset email
                    setTimeout(() => {
                        document.getElementById('forgotPasswordStep1').style.display = 'none';
                        document.getElementById('forgotPasswordStep2').style.display = 'block';
                        submitBtn.style.display = 'none';
                    }, 1500);
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
                    document.getElementById('sendResetBtn').innerHTML = '<i class="bi bi-send me-2"></i>Send Reset Link';
                    forgotPasswordForm.reset();
                });
            }
        });
    </script>
@endpush
