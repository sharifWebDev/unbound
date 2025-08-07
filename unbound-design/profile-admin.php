<?php
$page_title = 'Bangladesh Unbound - Profile';
$page_header = 'My Profile';
include 'inc/header-admin.php';
?>



            <!-- Breadcrumb Navigation -->
            <nav class="breadcrumb-container" aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php">
                            <img src="assets/img/ico/ico-dashboard.svg" alt="Dashboard" class="breadcrumb-icon">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <img src="assets/img/ico/ico-profile.svg" alt="Profile" class="breadcrumb-icon">
                        My Profile
                    </li>
                </ol>
            </nav>

            <!-- Profile Header -->
            <div class="profile-header">
                <div class="profile-avatar-section">
                    <div class="profile-avatar-container">
                        <img src="assets/img/avatar.jpg" alt="Profile Picture" class="profile-avatar-large">
                        <button class="btn btn-change-photo">
                            <img src="assets/img/ico/ico-status.svg" alt="Change"> Change Photo
                        </button>
                    </div>
                </div>
                <div class="profile-info-section">
                    <h2 class="profile-name">Nasim Ahmed</h2>
                    <p class="profile-email">nasim@example.com</p>
                    <p class="profile-member-since">Admin Account</p>
                    <div class="profile-stats">
                        <div class="stat-item">
                            <span class="stat-number">5</span>
                            <span class="stat-label">Total Teams</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30</span>
                            <span class="stat-label">Total Guides</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">360</span>
                            <span class="stat-label">Total Customers</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Content -->
            <div class="row">
                <!-- Personal Information -->
                <div class="col-md-8">
                    <div class="profile-section">
                        <h3 class="section-title">
                            <img src="assets/img/ico/ico-profile.svg" alt="Personal" class="section-icon">
                            Personal Information
                        </h3>
                        <form class="profile-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" value="Nasim">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" value="Ahmed">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" value="nasim@example.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" value="+880 1721001234">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dateOfBirth" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="dateOfBirth" value="1990-05-15">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nationality" class="form-label">Nationality</label>
                                        <select class="form-control" id="nationality">
                                            <option value="BD" selected>Bangladesh</option>
                                            <option value="US">United States</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="CA">Canada</option>
                                            <option value="AU">Australia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" rows="3">House 123, Road 15, Block C
Bashundhara R/A, Dhaka 1229
Bangladesh</textarea>
                            </div>
                        </form>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="profile-section">
                        <h3 class="section-title">
                            <img src="assets/img/ico/ico-status.svg" alt="Emergency" class="section-icon">
                            Emergency Contact
                        </h3>
                        <form class="profile-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emergencyName" class="form-label">Contact Name</label>
                                        <input type="text" class="form-control" id="emergencyName" value="Sarah Ahmed">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emergencyRelation" class="form-label">Relationship</label>
                                        <input type="text" class="form-control" id="emergencyRelation" value="Sister">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emergencyPhone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="emergencyPhone" value="+880 1721005555">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emergencyEmail" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="emergencyEmail" value="sarah@example.com">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Action Buttons -->
                    <div class="profile-actions">
                        <button class="btn btn-save-profile">
                            <img src="assets/img/ico/ico-status.svg" alt="Save"> Save Changes
                        </button>
                        <button class="btn btn-save-profile">
                            <i class="bi bi-download"></i> Download Profile
                        </button>
                        <button class="btn btn-cancel-profile">
                            Cancel
                        </button>
                    </div>
                </div>

                <!-- Account Settings Sidebar -->
                <div class="col-md-4">
                    <div class="profile-sidebar">
                        <!-- Account Security -->
                        <div class="sidebar-section">
                            <h4 class="sidebar-title">
                                <img src="assets/img/ico/ico-payment.svg" alt="Security" class="sidebar-icon">
                                Account Security
                            </h4>
                            <div class="sidebar-content">
                                <div class="security-item">
                                    <span class="security-label">Change Your Password</span>
                                    <button class="btn btn-change-password">Change</button>
                                </div>
                            </div>
                        </div>

                        <!-- Notification Settings -->
                        <div class="sidebar-section">
                            <h4 class="sidebar-title">
                                <img src="assets/img/ico/ico-status.svg" alt="Notifications" class="sidebar-icon">
                                Notifications
                            </h4>
                            <div class="sidebar-content">
                                <div class="notification-item">
                                    <label class="notification-label">
                                        <input type="checkbox" checked> Email Notifications
                                    </label>
                                </div>
                                <div class="notification-item">
                                    <label class="notification-label">
                                        <input type="checkbox"> Marketing Updates
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php include 'inc/footer.php'; ?>
