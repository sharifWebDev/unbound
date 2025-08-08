 @extends('layouts.admin')
 @section('title', 'Bangladesh Unbound - Request Details')
 @section('page-title', 'Custom Package Request Details')
 @push('styles')
     <style>
         .info-card {
             background: #fff;
             border-radius: 12px;
             box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
             border: 1px solid #e9ecef;
             height: 100%;
         }

         .info-card-header {
             padding: 20px 24px 0;
             border-bottom: 1px solid #e9ecef;
             margin-bottom: 20px;
         }

         .info-card-title {
             font-size: 18px;
             font-weight: 600;
             color: #2c3e50;
             margin: 0 0 20px 0;
             display: flex;
             align-items: center;
             gap: 10px;
         }

         .info-icon {
             width: 20px;
             height: 20px;
         }

         .info-card-body {
             padding: 0 24px 24px;
         }

         .info-row {
             display: flex;
             justify-content: space-between;
             align-items: center;
             padding: 12px 0;
             border-bottom: 1px solid #f8f9fa;
         }

         .info-row:last-child {
             border-bottom: none;
         }

         .info-label {
             font-weight: 500;
             color: #6c757d;
             flex: 0 0 40%;
         }

         .info-value {
             color: #2c3e50;
             font-weight: 500;
             text-align: right;
         }

         .payment-amount {
             font-size: 18px;
             font-weight: 600;
             color: #28a745;
         }

         .customer-profile {
             display: flex;
             align-items: center;
             gap: 15px;
             padding: 15px;
             background: #f8f9fa;
             border-radius: 8px;
         }

         .customer-avatar {
             width: 60px;
             height: 60px;
             border-radius: 50%;
             object-fit: cover;
         }

         .customer-name {
             margin: 0;
             font-size: 18px;
             font-weight: 600;
             color: #2c3e50;
         }

         .customer-location {
             margin: 0;
             color: #6c757d;
             font-size: 14px;
         }

         .service-item {
             display: flex;
             align-items: center;
             gap: 10px;
             padding: 8px 0;
             font-weight: 500;
         }

         .customer-message {
             background: #f8f9fa;
             padding: 20px;
             border-radius: 8px;
             border-left: 4px solid #0C8040;
         }

         .customer-message p {
             margin-bottom: 15px;
             line-height: 1.6;
             color: #2c3e50;
         }

         .customer-message p:last-child {
             margin-bottom: 0;
         }

         .action-buttons-container {
             text-align: center;
             padding: 30px 0;
             background: #f8f9fa;
             border-radius: 12px;
             margin-bottom: 30px;
         }

         .header-actions .btn {
             font-weight: 500;
         }

         .request-details-header {
             background: #fff;
             padding: 20px;
             border-radius: 12px;
             box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
             border: 1px solid #e9ecef;
         }
     </style>
 @endpush
  @section('breadcrumb')
 <!-- Breadcrumb Navigation -->
            <nav class="breadcrumb-container" aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard-admin.php">
                            <img src="{{ asset('backend/img/ico/ico-dashboard.svg')}}" alt="Dashboard" class="breadcrumb-icon">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <img src="{{ asset('backend/img/ico/ico-custom.svg')}}" alt="Request Details" class="breadcrumb-icon">
                        Request Details
                    </li>
                </ol>
            </nav>

 @endsection
 @section('content')
     <!-- Request Details Header -->
     <div class="mb-4 request-details-header">
         <div class="d-flex align-items-center justify-content-between">
             <h3 class="mb-0 section-title">
                 <img src="{{ asset('backend/img/ico/ico-custom.svg')}}" alt="Request Details" class="section-icon">
                 Request Details
             </h3>
             <div class="header-actions">
                 <a href="{{ route('admin.dashboard')}}" class="btn btn-secondary">
                     <i class="bi bi-arrow-left"></i> Back to Dashboard
                 </a>
             </div>
         </div>
     </div>

     <!-- Request Information Cards -->
     <div class="mb-5 row g-4">
         <!-- Basic Request Info -->
         <div class="col-lg-6">
             <div class="info-card">
                 <div class="info-card-header">
                     <h5 class="info-card-title">
                         <img src="{{ asset('backend/img/ico/ico-info.svg')}}" alt="Info" class="info-icon">
                         Basic Information
                     </h5>
                 </div>
                 <div class="info-card-body">
                     <div class="info-row">
                         <span class="info-label">Request ID:</span>
                         <span class="info-value">#346GF3W</span>
                     </div>
                     <div class="info-row">
                         <span class="info-label">Request Date:</span>
                         <span class="info-value">15 Apr 2025</span>
                     </div>
                     <div class="info-row">
                         <span class="info-label">Package Details:</span>
                         <span class="info-value">2 Days, 1 Night</span>
                     </div>
                     <div class="info-row">
                         <span class="info-label">Destination:</span>
                         <span class="info-value">Dhaka</span>
                     </div>
                     <div class="info-row">
                         <span class="info-label">Payment Amount:</span>
                         <span class="info-value payment-amount">-</span>
                     </div>
                     <div class="info-row">
                         <span class="info-label">Status:</span>
                         <span class="status-new">New</span>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Customer Details -->
         <div class="col-lg-6">
             <div class="info-card">
                 <div class="info-card-header">
                     <h5 class="info-card-title">
                         <img src="{{ asset('backend/img/ico/ico-users-req.svg')}}" alt="Customer" class="info-icon">
                         Customer Details
                     </h5>
                 </div>
                 <div class="info-card-body">
                     <div class="mb-3 customer-profile">
                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Customer" class="customer-avatar">
                         <div class="customer-info">
                             <h6 class="customer-name">Sarah Johnson</h6>
                             <p class="customer-location">UK</p>
                         </div>
                     </div>
                     <div class="info-row">
                         <span class="info-label">Email:</span>
                         <span class="info-value">sarah.j@email.com</span>
                     </div>
                     <div class="info-row">
                         <span class="info-label">Phone:</span>
                         <span class="info-value">+44 7700 900123</span>
                     </div>
                     <div class="info-row">
                         <span class="info-label">Country:</span>
                         <span class="info-value">United Kingdom</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Tour Preferences -->
     <div class="mb-5 row g-4">
         <!-- Tour Details -->
         <div class="col-lg-8">
             <div class="info-card">
                 <div class="info-card-header">
                     <h5 class="info-card-title">
                         <img src="{{ asset('backend/img/ico/ico-package.svg')}}" alt="Tour" class="info-icon">
                         Tour Preferences
                     </h5>
                 </div>
                 <div class="info-card-body">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="info-row">
                                 <span class="info-label">Preferred Date:</span>
                                 <span class="info-value">15-16 May 2025</span>
                             </div>
                             <div class="info-row">
                                 <span class="info-label">Tour Type:</span>
                                 <span class="info-value">Day Trip</span>
                             </div>
                             <div class="info-row">
                                 <span class="info-label">Destination:</span>
                                 <span class="info-value">Old Dhaka</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="info-row">
                                 <span class="info-label">Adults:</span>
                                 <span class="info-value">2</span>
                             </div>
                             <div class="info-row">
                                 <span class="info-label">Kids:</span>
                                 <span class="info-value">1</span>
                             </div>
                             <div class="info-row">
                                 <span class="info-label">Total Persons:</span>
                                 <span class="info-value">3</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Additional Services -->
         <div class="col-lg-4">
             <div class="info-card">
                 <div class="info-card-header">
                     <h5 class="info-card-title">
                         <img src="{{ asset('backend/img/ico/ico-services.svg')}}" alt="Services" class="info-icon">
                         Additional Services
                     </h5>
                 </div>
                 <div class="info-card-body">
                     <div class="service-item">
                         <i class="bi bi-check-circle-fill text-success"></i>
                         <span>Hotel Reservations</span>
                     </div>
                     <div class="service-item">
                         <i class="bi bi-check-circle-fill text-success"></i>
                         <span>Pickup/Drop off</span>
                     </div>
                     <div class="service-item">
                         <i class="bi bi-circle text-muted"></i>
                         <span>Bus Tickets</span>
                     </div>
                     <div class="service-item">
                         <i class="bi bi-circle text-muted"></i>
                         <span>Car Rentals</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Customer Message -->
     <div class="mb-5 row">
         <div class="col-12">
             <div class="info-card">
                 <div class="info-card-header">
                     <h5 class="info-card-title">
                         <img src="{{ asset('backend/img/ico/ico-message.svg')}}" alt="Message" class="info-icon">
                         Customer Message
                     </h5>
                 </div>
                 <div class="info-card-body">
                     <div class="customer-message">
                         <p>Hello! I'm planning a cultural tour of Old Dhaka with my family. We're particularly interested
                             in visiting historical sites, local markets, and experiencing authentic Bengali cuisine. We
                             would prefer a guided tour with hotel accommodation and airport pickup/drop-off services.
                             Please let me know the best package options and pricing for our dates.</p>
                         <p>We're flexible with the itinerary but would love to include visits to Lalbagh Fort, Ahsan
                             Manzil, and the spice markets. Looking forward to your response!</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Action Buttons -->
     <div class="row">
         <div class="col-12">
             <div class="action-buttons-container">
                 <button class="btn btn-success btn-lg me-3">
                     <i class="bi bi-check-circle"></i> Approve & Create Package
                 </button>
                 <button class="btn btn-primary btn-lg me-3">
                     <i class="bi bi-envelope"></i> Send Quote
                 </button>
                 <button class="btn btn-danger btn-lg">
                     <i class="bi bi-x-circle"></i> Reject Request
                 </button>
             </div>
         </div>
     </div>


 @endsection
