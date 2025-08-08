 @extends('layouts.admin')
 @section('title', 'Dashboard')
 @section('page-title', 'Dashboard')
 @section('breadcrumb', '')
 @section('content')
     <!-- Overview Cards -->
     <div class="mb-5 overview-cards-container">
         <div class="row g-4">
             <!-- Total Orders Card -->
             <div class="col-xl-3 col-lg-6 col-md-6">
                 <div class="overview-card">
                     <div class="overview-card-header">
                         <div class="overview-icon orders-icon">
                             <img src="{{ asset('backend/img/ico/ico-bookings.svg')}}" alt="Orders" class="overview-icon-img">
                         </div>
                         <div class="overview-trend positive">
                             <i class="bi bi-arrow-up"></i>
                             <span>+12%</span>
                         </div>
                     </div>
                     <div class="overview-card-body">
                         <h3 class="overview-number">247</h3>
                         <p class="overview-label">Total Orders</p>
                         <div class="overview-subtitle">
                             <span class="text-success">+18 this month</span>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Revenue Card -->
             <div class="col-xl-3 col-lg-6 col-md-6">
                 <div class="overview-card">
                     <div class="overview-card-header">
                         <div class="overview-icon revenue-icon">
                             <img src="{{ asset('backend/img/ico/ico-payment.svg')}}" alt="Revenue" class="overview-icon-img">
                         </div>
                         <div class="overview-trend positive">
                             <i class="bi bi-arrow-up"></i>
                             <span>+8%</span>
                         </div>
                     </div>
                     <div class="overview-card-body">
                         <h3 class="overview-number">$4,850</h3>
                         <p class="overview-label">Total Revenue</p>
                         <div class="overview-subtitle">
                             <span class="text-success">+৳45,000 this month</span>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Active Customers Card -->
             <div class="col-xl-3 col-lg-6 col-md-6">
                 <div class="overview-card">
                     <div class="overview-card-header">
                         <div class="overview-icon customers-icon">
                             <img src="{{ asset('backend/img/ico/ico-users.svg')}}" alt="Customers" class="overview-icon-img">
                         </div>
                         <div class="overview-trend positive">
                             <i class="bi bi-arrow-up"></i>
                             <span>+15%</span>
                         </div>
                     </div>
                     <div class="overview-card-body">
                         <h3 class="overview-number">1,284</h3>
                         <p class="overview-label">Active Customers</p>
                         <div class="overview-subtitle">
                             <span class="text-success">+156 new customers</span>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Pending Payments Card -->
             <div class="col-xl-3 col-lg-6 col-md-6">
                 <div class="overview-card">
                     <div class="overview-card-header">
                         <div class="overview-icon pending-icon">
                             <img src="{{ asset('backend/img/ico/ico-alert.svg')}}" alt="Pending" class="overview-icon-img">
                         </div>
                         <div class="overview-trend negative">
                             <i class="bi bi-arrow-down"></i>
                             <span>-3%</span>
                         </div>
                     </div>
                     <div class="overview-card-body">
                         <h3 class="overview-number">23</h3>
                         <p class="overview-label">Pending Payments</p>
                         <div class="overview-subtitle">
                             <span class="text-warning">Requires attention</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- On Going Bookings -->
     <div class="mb-4">
         <h3 class="section-title">
             <img src="{{ asset('backend/img/ico/ico-ongoing.svg')}}" alt="Ongoing" class="section-icon">
             On Going Bookings
         </h3>
         <div class="table-container">
             <table class="table mb-0 table-hover">
                 <thead>
                     <tr>
                         <th>Tour Name</th>
                         <th>Package Details</th>
                         <th>Tour Date</th>
                         <th>Assigned Team</th>
                         <th>Tour Guide</th>
                         <th>Customer Details</th>
                         <th>Tour Details</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package.svg')}}" alt="Tour" class="table-cell-icon">
                             Old Dhaka Tour
                             <div class="text-muted order-id">Order ID: #BK001</div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg')}}" alt="Package" class="table-cell-icon">
                             2 Days, 1 Night
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg')}}" alt="Date" class="table-cell-icon">
                             02-03 May
                         </td>
                         <td>
                             ABC Travels
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Aziz Ahmed</div>
                                     <small class="text-muted">+880 1721005678</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Fahim Bakhtiar</div>
                                     <small class="text-muted">USA</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <a href="ongoing-bookings-admin.php" class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg')}}" alt="">
                             </a>
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>

     <!-- Upcoming Bookings -->
     <div class="mb-4">
         <h3 class="section-title">
             <img src="{{ asset('backend/img/ico/ico-upcoming.svg')}}" alt="Upcoming" class="section-icon">
             Upcoming Bookings
         </h3>
         <div class="table-container">
             <table class="table mb-0 table-hover">
                 <thead>
                     <tr>
                         <th>Tour Name</th>
                         <th>Package Details</th>
                         <th>Tour Date</th>
                         <th class="text-center">Payment</th>
                         <th>Assigned Team</th>
                         <th>Tour Guide</th>
                         <th>Customer Details</th>
                         <th>Tour Details</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package.svg')}}" alt="Tour" class="table-cell-icon">
                             Old Dhaka Tour
                             <div class="text-muted order-id">Order ID: #BK001</div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg')}}" alt="Package" class="table-cell-icon">
                             2 Days, 1 Night
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg')}}" alt="Date" class="table-cell-icon">
                             02-03 May
                         </td>
                         <td class="text-center">
                             <div class="payment-info">
                                 <div class="payment-paid">$500 Paid</div>
                                 <div class="payment-due">$2,000 Due</div>
                             </div>
                         </td>
                         <td>
                             ABC Travels
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Aziz Ahmed</div>
                                     <small class="text-muted">+880 1721005678</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Fahim Bakhtiar</div>
                                     <small class="text-muted">USA</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <button class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg')}}" alt="">
                             </button>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package.svg')}}" alt="Tour" class="table-cell-icon">
                             Sundarbans Adventure
                             <div class="text-muted order-id">Order ID: #BK001</div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg')}}" alt="Package" class="table-cell-icon">
                             3 Days, 2 Nights
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg')}}" alt="Date" class="table-cell-icon">
                             15-17 May
                         </td>
                         <td class="text-center">
                             <div class="payment-info">
                                 <div class="payment-paid">$800 Paid</div>
                             </div>
                         </td>
                         <td>
                             ABC Travels
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Aziz Ahmed</div>
                                     <small class="text-muted">+880 1721005678</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Rahman Ahmed</div>
                                     <small class="text-muted">USA</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <button class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg')}}" alt="">
                             </button>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package.svg')}}" alt="Tour" class="table-cell-icon">
                             Cox's Bazar Beach
                             <div class="text-muted order-id">Order ID: #BK001</div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg')}}" alt="Package" class="table-cell-icon">
                             4 Days, 3 Nights
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg')}}" alt="Date" class="table-cell-icon">
                             25-28 May
                         </td>
                         <td class="text-center">
                             <div class="payment-info">
                                 <div class="payment-paid">$1,500 Paid</div>
                             </div>
                         </td>
                         <td>
                             ABC Travels
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Aziz Ahmed</div>
                                     <small class="text-muted">+880 1721005678</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Nasir Khan</div>
                                     <small class="text-muted">USA</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <button class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg')}}" alt="">
                             </button>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-custom.svg')}}" alt="Tour" class="table-cell-icon">
                             Custom Package
                             <div class="text-muted order-id">Order ID: #BK004</div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg')}}" alt="Package" class="table-cell-icon">
                             6 Days, 5 Nights
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg')}}" alt="Date" class="table-cell-icon">
                             05-10 Jun
                         </td>
                         <td class="text-center">
                             <div class="payment-info">
                                 <div class="payment-paid">$1,200 Paid</div>
                                 <div class="payment-due">$1,800 Due</div>
                             </div>
                         </td>
                         <td>
                             Custom Tours Ltd
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Rahman Ali</div>
                                     <small class="text-muted">+880 1721009876</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Emma Wilson</div>
                                     <small class="text-muted">UK</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <button class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg')}}" alt="">
                             </button>
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>

     <!-- Custom Package/Services Request -->
     <div class="mb-4">
         <h3 class="section-title">
             <img src="{{ asset('backend/img/ico/ico-custom.svg')}}" alt="Custom" class="section-icon">
             Custom Package/Services Request
         </h3>
         <div class="table-container">
             <table class="table mb-0 table-hover">
                 <thead>
                     <tr>
                         <th>Request ID</th>
                         <th>Request Date</th>
                         <th>Customer Details</th>
                         <th>Package Details</th>
                         <th>Destination</th>
                         <th>Payment Amount</th>
                         <th>Status</th>
                         <th>Request Details</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>#346GF3W</td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg')}}" alt="Date" class="table-cell-icon">
                             15 Apr 2025
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Customer" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Sarah Johnson</div>
                                     <small class="text-muted">UK</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg')}}" alt="Package" class="table-cell-icon">
                             2 Days, 1 Night
                         </td>
                         <td>Dhaka</td>
                         <td>
                             <div class="payment-info">
                                 -
                             </div>
                         </td>
                         <td>
                             <span class="status-new">New</span>
                         </td>
                         <td>
                             <a href="request-details.php?id=#346GF3W" class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg')}}" alt="">
                             </a>
                         </td>
                     </tr>
                     <tr>
                         <td>#789ABC2</td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg')}}" alt="Date" class="table-cell-icon">
                             12 Apr 2025
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Customer" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Michael Chen</div>
                                     <small class="text-muted">USA</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg')}}" alt="Package" class="table-cell-icon">
                             5 Days, 4 Nights
                         </td>
                         <td>Sylhet</td>
                         <td>
                             <div class="payment-info">
                                 <div class="payment-paid">$2,800</div>
                             </div>
                         </td>
                         <td>
                             <span class="status-valid">Sent</span>
                             <img src="{{ asset('backend/img/ico/ico-status.svg')}}" alt="Status" class="table-cell-icon">
                         </td>
                         <td>
                             <a href="request-details.php?id=#789ABC2" class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg')}}" alt="">
                             </a>
                         </td>
                     </tr>
                     <tr>
                         <td>#123DEF4</td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg')}}" alt="Date" class="table-cell-icon">
                             10 Apr 2025
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Customer" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Emma Wilson</div>
                                     <small class="text-muted">Canada</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg')}}" alt="Package" class="table-cell-icon">
                             3 Days, 2 Nights
                         </td>
                         <td>Cox's Bazar</td>
                         <td>
                             <div class="payment-info">
                                 <div class="payment-paid">$1,800</div>
                             </div>
                         </td>
                         <td>
                             <span class="status-confirmed">Confirmed</span>
                         </td>
                         <td>
                             <a href="request-details.php?id=#123DEF4" class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg')}}" alt="">
                             </a>
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
 @endsection

 @push('.js')
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 @endpush
