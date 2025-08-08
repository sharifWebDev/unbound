 @extends('layouts.app')
 @section('title', 'Bangladesh Unbound - Profile')
 @section('page-title', 'My Profile')
 @section('breadcrumb')
     <!-- Breadcrumb Navigation -->
     <nav class="breadcrumb-container" aria-label="breadcrumb" class="mb-4">
         <ol class="breadcrumb">
             <li class="breadcrumb-item">
                 <a href="{{ route('customer.dashboard') }}">
                     <img src="{{ asset('backend/img/ico/ico-dashboard.svg') }}" alt="Dashboard" class="breadcrumb-icon">
                     Dashboard
                 </a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">
                 <img src="{{ asset('backend/img/ico/ico-profile.svg') }}" alt="Profile" class="breadcrumb-icon">
                 My Profile
             </li>
         </ol>
     </nav>
 @endsection
 @section('content')
     <!-- Profile Header -->
     <div class="profile-header">
         <div class="profile-avatar-section">
             <div class="profile-avatar-container">
                 <img src="{{ asset('backend/img/avatar.jpg') }}" alt="Profile Picture" class="profile-avatar-large">
                 <button class="btn btn-change-photo">
                     <img src="{{ asset('backend/img/ico/ico-status.svg') }}" alt="Change"> Change Photo
                 </button>
             </div>
         </div>
         <div class="profile-info-section">
             <h2 class="profile-name">Nasim Ahmed</h2>
             <p class="profile-email">nasim@example.com</p>
             <p class="profile-member-since">Member since April 2024</p>
             <div class="profile-stats">
                 <div class="stat-item">
                     <span class="stat-number">5</span>
                     <span class="stat-label">Total Bookings</span>
                 </div>
                 <div class="stat-item">
                     <span class="stat-number">3</span>
                     <span class="stat-label">Completed Tours</span>
                 </div>
                 <div class="stat-item">
                     <span class="stat-number">$7,000</span>
                     <span class="stat-label">Total Spent</span>
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
                     <img src="{{ asset('backend/img/ico/ico-profile.svg') }}" alt="Personal" class="section-icon">
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
                     <img src="{{ asset('backend/img/ico/ico-status.svg') }}" alt="Emergency" class="section-icon">
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
                                 <input type="email" class="form-control" id="emergencyEmail"
                                     value="sarah@example.com">
                             </div>
                         </div>
                     </div>
                 </form>
             </div>

             <!-- Travel Preferences -->
             <div class="profile-section">
                 <h3 class="section-title">
                     <img src="{{ asset('backend/img/ico/ico-package.svg') }}" alt="Preferences" class="section-icon">
                     Travel Preferences
                 </h3>
                 <form class="profile-form">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="preferredLanguage" class="form-label">Preferred Language</label>
                                 <select class="form-control" id="preferredLanguage">
                                     <option value="en" selected>English</option>
                                     <option value="bn">Bengali</option>
                                     <option value="hi">Hindi</option>
                                     <option value="ur">Urdu</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="dietaryRestrictions" class="form-label">Dietary Restrictions</label>
                                 <select class="form-control" id="dietaryRestrictions">
                                     <option value="none" selected>None</option>
                                     <option value="vegetarian">Vegetarian</option>
                                     <option value="vegan">Vegan</option>
                                     <option value="halal">Halal</option>
                                     <option value="kosher">Kosher</option>
                                 </select>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="specialRequests" class="form-label">Special Requests/Medical Conditions</label>
                         <textarea class="form-control" id="specialRequests" rows="3"
                             placeholder="Please mention any medical conditions, mobility requirements, or special requests..."></textarea>
                     </div>
                 </form>
             </div>

             <!-- Action Buttons -->
             <div class="profile-actions">
                 <button class="btn btn-save-profile">
                     <img src="{{ asset('backend/img/ico/ico-status.svg') }}" alt="Save"> Save Changes
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
                         <img src="{{ asset('backend/img/ico/ico-payment.svg') }}" alt="Security" class="sidebar-icon">
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
                         <img src="{{ asset('backend/img/ico/ico-status.svg') }}" alt="Notifications" class="sidebar-icon">
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

                 <!-- Account Actions -->
                 <div class="sidebar-section">
                     <h4 class="sidebar-title">
                         <img src="{{ asset('backend/img/ico/ico-custom.svg') }}" alt="Account" class="sidebar-icon">
                         Account Actions
                     </h4>
                     <div class="sidebar-content">
                         <button class="btn btn-delete-account">
                             <img src="{{ asset('backend/img/ico/ico-logout.svg') }}" alt="Delete"> Delete Account
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
