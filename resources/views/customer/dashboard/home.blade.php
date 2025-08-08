 @extends('layouts.app')
 @section('title', 'Dashboard')
 @section('page-title', 'Dashboard')
 @section('breadcrumb', '')
 @section('content')
     <!-- Overview Cards -->
     <div class="mb-5 overview-cards-container">
         <div class="row g-4">
             <!-- My Bookings Card -->
             <div class="col-md-4">
                 <div class="overview-card">
                     <div class="overview-card-header">
                         <div class="overview-icon bookings-icon">
                             <img src="{{ asset('backend/img/ico/ico-bookings.svg') }}" alt="Bookings" class="overview-icon-img">
                         </div>
                         <div class="overview-trend positive">
                             <i class="bi bi-calendar-check"></i>
                         </div>
                     </div>
                     <div class="overview-card-body">
                         <h3 class="overview-number">8</h3>
                         <p class="overview-label">Total Bookings</p>
                         <div class="overview-subtitle">
                             <span class="text-success">2 upcoming tours</span>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Total Spent Card -->
             <div class="col-md-4">
                 <div class="overview-card">
                     <div class="overview-card-header">
                         <div class="overview-icon spent-icon">
                             <img src="{{ asset('backend/img/ico/ico-payment.svg') }}" alt="Spent" class="overview-icon-img">
                         </div>
                         <div class="overview-trend positive">
                             <i class="bi bi-wallet2"></i>
                         </div>
                     </div>
                     <div class="overview-card-body">
                         <h3 class="overview-number">$2,450</h3>
                         <p class="overview-label">Total Spent</p>
                         <div class="overview-subtitle">
                             <span class="text-success">Lifetime value</span>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Destinations Visited Card -->
             <div class="col-md-4">
                 <div class="overview-card">
                     <div class="overview-card-header">
                         <div class="overview-icon destinations-icon">
                             <img src="{{ asset('backend/img/ico/ico-map.svg') }}" alt="Destinations" class="overview-icon-img">
                         </div>
                         <div class="overview-trend positive">
                             <i class="bi bi-geo-alt"></i>
                         </div>
                     </div>
                     <div class="overview-card-body">
                         <h3 class="overview-number">12</h3>
                         <p class="overview-label">Places Visited</p>
                         <div class="overview-subtitle">
                             <span class="text-success">3 new this year</span>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>

     <!-- On Going Bookings -->
     <div class="mb-4">
         <h3 class="section-title">
             <img src="{{ asset('backend/img/ico/ico-ongoing.svg') }}" alt="Ongoing" class="section-icon">
             On Going Bookings
         </h3>
         <div class="table-container">
             <table class="table mb-0 table-hover">
                 <thead>
                     <tr>
                         <th>Tour Name</th>
                         <th>Package Details</th>
                         <th>Tour Date</th>
                         <th>Tour Guide</th>
                         <th>Tour Details</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package.svg') }}" alt="Tour" class="table-cell-icon">
                             Old Dhaka Tour
                             <div class="text-muted order-id">Order ID: #BK001</div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg') }}" alt="Package" class="table-cell-icon">
                             2 Days, 1 Night
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg') }}" alt="Date" class="table-cell-icon">
                             02-03 May
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg') }}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Fahim Bakhtiar</div>
                                     <small class="text-muted">+880 1721001234</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <a href="{{url('customer/ongoing-bookings')}}" class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg') }}" alt="">
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
             <img src="{{ asset('backend/img/ico/ico-upcoming.svg') }}" alt="Upcoming" class="section-icon">
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
                         <th>Tour Guide</th>
                         <th>Tour Details</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package.svg') }}" alt="Tour" class="table-cell-icon">
                             Old Dhaka Tour
                             <div class="text-muted order-id">Order ID: #BK001</div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg') }}" alt="Package" class="table-cell-icon">
                             2 Days, 1 Night
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg') }}" alt="Date" class="table-cell-icon">
                             02-03 May
                         </td>
                         <td class="text-center">
                             <div class="payment-info">
                                 <div class="payment-paid">$500 Paid</div>
                                 <div class="payment-due">$2,000 Due</div>
                                 <button class="mt-2 btn btn-pay-now">
                                     Pay Now <img src="{{ asset('backend/img/ico/ico-cart.svg') }}" alt="">
                                 </button>
                             </div>
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg') }}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Fahim Bakhtiar</div>
                                     <small class="text-muted">+880 1721001234</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <button class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg') }}" alt="">
                             </button>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package.svg') }}" alt="Tour" class="table-cell-icon">
                             Sundarbans Adventure
                             <div class="text-muted order-id">Order ID: #BK001</div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg') }}" alt="Package" class="table-cell-icon">
                             3 Days, 2 Nights
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg') }}" alt="Date" class="table-cell-icon">
                             15-17 May
                         </td>
                         <td class="text-center">
                             <div class="payment-info">
                                 <div class="payment-paid">$800 Paid</div>
                             </div>
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg') }}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Rahman Ahmed</div>
                                     <small class="text-muted">+880 1721005678</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <button class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg') }}" alt="">
                             </button>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package.svg') }}" alt="Tour" class="table-cell-icon">
                             Cox's Bazar Beach
                             <div class="text-muted order-id">Order ID: #BK001</div>
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg') }}" alt="Package" class="table-cell-icon">
                             4 Days, 3 Nights
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg') }}" alt="Date" class="table-cell-icon">
                             25-28 May
                         </td>
                         <td class="text-center">
                             <div class="payment-info">
                                 <div class="payment-paid">$1,500 Paid</div>
                             </div>
                         </td>
                         <td>
                             <div class="guide-info">
                                 <img src="{{ asset('backend/img/avatar.jpg') }}" alt="Guide" class="guide-avatar">
                                 <div>
                                     <div class="fw-semibold">Nasir Khan</div>
                                     <small class="text-muted">+880 1721009876</small>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <button class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg') }}" alt="">
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
             <img src="{{ asset('backend/img/ico/ico-custom.svg') }}" alt="Custom" class="section-icon">
             Custom Package/Services Request
         </h3>
         <div class="table-container">
             <table class="table mb-0 table-hover">
                 <thead>
                     <tr>
                         <th>Request ID</th>
                         <th>Request Date</th>
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
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg') }}" alt="Date" class="table-cell-icon">
                             15 Apr 2025
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg') }}" alt="Package" class="table-cell-icon">
                             2 Days, 1 Night
                         </td>
                         <td>Dhaka</td>
                         <td>
                             <div class="payment-info">
                                 -
                             </div>
                         </td>
                         <td>
                             <span class="status-new">Requested</span>
                         </td>
                         <td>
                             <a href="{{url('customer/custom-package-requests/details')}}?id=#346GF3W" class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg') }}" alt="">
                             </a>
                         </td>
                     </tr>
                     <tr>
                         <td>#789ABC2</td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg') }}" alt="Date" class="table-cell-icon">
                             12 Apr 2025
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg') }}" alt="Package" class="table-cell-icon">
                             5 Days, 4 Nights
                         </td>
                         <td>Sylhet</td>
                         <td>
                             <div class="payment-info">
                                 <div class="payment-paid">$2,800</div>
                             </div>
                         </td>
                         <td>
                             <span class="status-valid">Offer Received</span>
                             <img src="{{ asset('backend/img/ico/ico-status.svg') }}" alt="Status" class="table-cell-icon">
                         </td>
                         <td>
                             <a href="{{url('customer/custom-package-requests/details')}}?id=#789ABC2" class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg') }}" alt="">
                             </a>
                         </td>
                     </tr>
                     <tr>
                         <td>#123DEF4</td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-calendar.svg') }}" alt="Date" class="table-cell-icon">
                             10 Apr 2025
                         </td>
                         <td>
                             <img src="{{ asset('backend/img/ico/ico-package-details.svg') }}" alt="Package" class="table-cell-icon">
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
                             <a href="{{url('customer/custom-package-requests/details')}}?id=#123DEF4" class="btn btn-view-details">
                                 Details <img src="{{ asset('backend/img/ico/ico-map.svg') }}" alt="">
                             </a>
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
 @endsection
