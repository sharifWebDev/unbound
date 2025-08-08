 @extends('layouts.admin')
 @section('title', 'Bangladesh Unbound - Users Management')
 @section('page-title', 'Users Management')
 @section('breadcrumb')
     <!-- Breadcrumb Navigation -->
     <nav class="breadcrumb-container" aria-label="breadcrumb" class="mb-4">
         <ol class="breadcrumb">
             <li class="breadcrumb-item">
                 <a href="dashboard">
                     <img src="{{ asset('backend/img/ico/ico-dashboard.svg')}}" alt="Dashboard" class="breadcrumb-icon">
                     Dashboard
                 </a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">
                 <img src="{{ asset('backend/img/ico/ico-users.svg')}}" alt="Users" class="breadcrumb-icon">
                 Users Management
             </li>
         </ol>
     </nav>
 @endsection
 @section('content')
     <!-- Users Management Header -->
     <div class="users-header">
         <div class="d-flex align-items-center justify-content-between">
             <h3 class="mb-0 section-title">
                 <img src="{{ asset('backend/img/ico/ico-users.svg')}}" alt="Users" class="section-icon">
                 Users Management
             </h3>
             <button class="btn btn-add-user" data-bs-toggle="modal" data-bs-target="#addUserModal">
                 <img src="{{ asset('backend/img/ico/ico-profile.svg')}}" alt="Add"> Add New User
             </button>
         </div>
     </div>

     <!-- Users Tabs -->
     <div class="users-tabs-container">
         <ul class="nav nav-tabs users-tabs" id="usersTabs" role="tablist">
             <li class="nav-item" role="presentation">
                 <button class="nav-link active" id="admins-tab" data-bs-toggle="tab" data-bs-target="#admins"
                     type="button" role="tab">
                     <img src="{{ asset('backend/img/ico/ico-dashboard.svg')}}" alt="Admin" class="tab-icon">
                     Administrators <span class="tab-count">2</span>
                 </button>
             </li>
             <li class="nav-item" role="presentation">
                 <button class="nav-link" id="guides-tab" data-bs-toggle="tab" data-bs-target="#guides" type="button"
                     role="tab">
                     <img src="{{ asset('backend/img/ico/ico-ongoing.svg')}}" alt="Guides" class="tab-icon">
                     Team Leaders & Guides <span class="tab-count">4</span>
                 </button>
             </li>
             <li class="nav-item" role="presentation">
                 <button class="nav-link" id="customers-tab" data-bs-toggle="tab" data-bs-target="#customers" type="button"
                     role="tab">
                     <img src="{{ asset('backend/img/ico/ico-profile.svg')}}" alt="Customers" class="tab-icon">
                     Customers <span class="tab-count">6</span>
                 </button>
             </li>
         </ul>
     </div>

     <!-- Tab Content -->
     <div class="tab-content users-tab-content" id="usersTabContent">

         <!-- Administrators Tab -->
         <div class="tab-pane fade show active" id="admins" role="tabpanel">
             <!-- Search and Filter Section for Administrators -->
             <div class="mb-4 search-filter-container">
                 <div class="row align-items-center">
                     <div class="col-md-4">
                         <div class="search-box">
                             <input type="text" class="form-control" id="searchAdmins"
                                 placeholder="Search by name, email, phone...">
                             <i class="bi bi-search search-icon"></i>
                         </div>
                     </div>
                     <div class="col-md-2">
                         <select class="form-select" id="adminRoleFilter">
                             <option value="">All Roles</option>
                             <option value="super admin">Super Admin</option>
                             <option value="admin">Admin</option>
                         </select>
                     </div>
                     <div class="col-md-2">
                         <select class="form-select" id="adminStatusFilter">
                             <option value="">All Status</option>
                             <option value="active">Active</option>
                             <option value="inactive">Inactive</option>
                         </select>
                     </div>
                     <div class="col-md-2">
                         <select class="form-select" id="adminEntriesPerPage">
                             <option value="10">10 per page</option>
                             <option value="25">25 per page</option>
                             <option value="50">50 per page</option>
                         </select>
                     </div>
                     <div class="col-md-1">
                         <button class="btn btn-search" id="adminSearchButton">
                             <i class="bi bi-search"></i> Search
                         </button>
                     </div>
                     <div class="col-md-1">
                         <button class="btn btn-outline-secondary" id="clearAdminFilters">
                             <i class="bi bi-arrow-clockwise"></i> Clear
                         </button>
                     </div>
                 </div>
                 <div class="mt-2 row">
                     <div class="col-md-12">
                         <div class="results-info">
                             <span class="text-muted">Showing <span id="adminShowingStart">1</span>-<span
                                     id="adminShowingEnd">2</span> of <span id="adminTotalResults">2</span> results</span>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="users-table-container" id="adminsTable">
                 <table class="table users-table">
                     <thead>
                         <tr>
                             <th>User</th>
                             <th>Role</th>
                             <th>Contact</th>
                             <th>Status</th>
                             <th>Joined</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr class="admin-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Nasim Ahmed" class="user-img-small">
                                         <span class="user-status-small active"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">Nasim Ahmed</span>
                                     </div>
                                 </div>
                             </td>
                             <td><span class="role-badge admin-role">Super Admin</span></td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">nasim@bangladeshunbound.com</div>
                                     <div class="user-phone-small">+880 1721001234</div>
                                 </div>
                             </td>
                             <td><span class="status-badge active-status">Active</span></td>
                             <td>Jan 2024</td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile-admin.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>
                         <tr class="admin-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Sarah Khan" class="user-img-small">
                                         <span class="user-status-small inactive"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">Sarah Khan</span>
                                     </div>
                                 </div>
                             </td>
                             <td><span class="role-badge admin-role">Admin</span></td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">sarah@bangladeshunbound.com</div>
                                     <div class="user-phone-small">+880 1721005678</div>
                                 </div>
                             </td>
                             <td><span class="status-badge inactive-status">Inactive</span></td>
                             <td>Feb 2024</td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile-admin.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>
                     </tbody>
                 </table>
             </div>

             <!-- Pagination for Admins -->
             <div class="pagination-container">
                 <div class="row align-items-center">
                     <div class="col-md-6">
                         <div class="pagination-info">
                             <span class="text-muted">Showing <span id="adminPaginationStart">1</span> to <span
                                     id="adminPaginationEnd">2</span> of <span id="adminPaginationTotal">2</span>
                                 entries</span>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <nav aria-label="Administrators pagination">
                             <ul class="mb-0 pagination justify-content-end" id="adminPaginationControls">
                                 <li class="page-item disabled">
                                     <a class="page-link" href="#" id="adminPrevPage">
                                         <i class="bi bi-chevron-left"></i> Previous
                                     </a>
                                 </li>
                                 <li class="page-item active">
                                     <a class="page-link" href="#" data-page="1">1</a>
                                 </li>
                                 <li class="page-item disabled">
                                     <a class="page-link" href="#" id="adminNextPage">
                                         Next <i class="bi bi-chevron-right"></i>
                                     </a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Team Leaders & Guides Tab -->
         <div class="tab-pane fade" id="guides" role="tabpanel">
             <!-- Search and Filter Section for Guides -->
             <div class="mb-4 search-filter-container">
                 <div class="row align-items-center">
                     <div class="col-md-4">
                         <div class="search-box">
                             <input type="text" class="form-control" id="searchGuides"
                                 placeholder="Search by name, email, phone...">
                             <i class="bi bi-search search-icon"></i>
                         </div>
                     </div>
                     <div class="col-md-2">
                         <select class="form-select" id="guideRoleFilter">
                             <option value="">All Roles</option>
                             <option value="team leader">Team Leader</option>
                             <option value="guide">Guide</option>
                         </select>
                     </div>
                     <div class="col-md-2">
                         <select class="form-select" id="guideStatusFilter">
                             <option value="">All Status</option>
                             <option value="active">Active</option>
                             <option value="inactive">Inactive</option>
                         </select>
                     </div>
                     <div class="col-md-2">
                         <select class="form-select" id="guideEntriesPerPage">
                             <option value="10">10 per page</option>
                             <option value="25">25 per page</option>
                             <option value="50">50 per page</option>
                         </select>
                     </div>
                     <div class="col-md-1">
                         <button class="btn btn-search" id="guideSearchButton">
                             <i class="bi bi-search"></i> Search
                         </button>
                     </div>
                     <div class="col-md-1">
                         <button class="btn btn-outline-secondary" id="clearGuideFilters">
                             <i class="bi bi-arrow-clockwise"></i> Clear
                         </button>
                     </div>
                 </div>
                 <div class="mt-2 row">
                     <div class="col-md-12">
                         <div class="results-info">
                             <span class="text-muted">Showing <span id="guideShowingStart">1</span>-<span
                                     id="guideShowingEnd">4</span> of <span id="guideTotalResults">4</span> results</span>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="users-table-container" id="guidesTable">
                 <table class="table users-table">
                     <thead>
                         <tr>
                             <th>User</th>
                             <th>Role</th>
                             <th>Contact</th>
                             <th>Status</th>
                             <th>Joined</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr class="guide-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Rahman Ahmed" class="user-img-small">
                                         <span class="user-status-small active"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">Rahman Ahmed</span>
                                     </div>
                                 </div>
                             </td>
                             <td><span class="role-badge guide-role">Team Leader</span></td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">rahman@bangladeshunbound.com</div>
                                     <div class="user-phone-small">+880 1721005678</div>
                                 </div>
                             </td>
                             <td><span class="status-badge active-status">Active</span></td>
                             <td>Mar 2024</td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile-guide.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>
                         <tr class="guide-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Ahmed Hassan" class="user-img-small">
                                         <span class="user-status-small active"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">Ahmed Hassan</span>
                                     </div>
                                 </div>
                             </td>
                             <td><span class="role-badge guide-role">Team Leader</span></td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">ahmed@bangladeshunbound.com</div>
                                     <div class="user-phone-small">+880 1721005680</div>
                                 </div>
                             </td>
                             <td><span class="status-badge active-status">Active</span></td>
                             <td>Mar 2024</td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile-guide.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>
                         <tr class="guide-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Fahim Bakhtiar" class="user-img-small">
                                         <span class="user-status-small inactive"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">Fahim Bakhtiar</span>
                                     </div>
                                 </div>
                             </td>
                             <td><span class="role-badge guide-role">Guide</span></td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">fahim@bangladeshunbound.com</div>
                                     <div class="user-phone-small">+880 1721001234</div>
                                 </div>
                             </td>
                             <td><span class="status-badge inactive-status">Inactive</span></td>
                             <td>Apr 2024</td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile-guide.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>
                         <tr class="guide-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Nasir Khan" class="user-img-small">
                                         <span class="user-status-small active"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">Nasir Khan</span>
                                     </div>
                                 </div>
                             </td>
                             <td><span class="role-badge guide-role">Guide</span></td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">nasir@bangladeshunbound.com</div>
                                     <div class="user-phone-small">+880 1721009876</div>
                                 </div>
                             </td>
                             <td><span class="status-badge active-status">Active</span></td>
                             <td>Apr 2024</td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile-guide.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>
                     </tbody>
                 </table>
             </div>

             <!-- Pagination for Guides -->
             <div class="pagination-container">
                 <div class="row align-items-center">
                     <div class="col-md-6">
                         <div class="pagination-info">
                             <span class="text-muted">Showing <span id="guidePaginationStart">1</span> to <span
                                     id="guidePaginationEnd">4</span> of <span id="guidePaginationTotal">4</span>
                                 entries</span>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <nav aria-label="Guides pagination">
                             <ul class="mb-0 pagination justify-content-end" id="guidePaginationControls">
                                 <li class="page-item disabled">
                                     <a class="page-link" href="#" id="guidePrevPage">
                                         <i class="bi bi-chevron-left"></i> Previous
                                     </a>
                                 </li>
                                 <li class="page-item active">
                                     <a class="page-link" href="#" data-page="1">1</a>
                                 </li>
                                 <li class="page-item disabled">
                                     <a class="page-link" href="#" id="guideNextPage">
                                         Next <i class="bi bi-chevron-right"></i>
                                     </a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Customers Tab -->
         <div class="tab-pane fade" id="customers" role="tabpanel">
             <!-- Search and Filter Section for Customers -->
             <div class="mb-4 search-filter-container">
                 <div class="row align-items-center">
                     <div class="col-md-4">
                         <div class="search-box">
                             <input type="text" class="form-control" id="searchCustomers"
                                 placeholder="Search by name, email, phone...">
                             <i class="bi bi-search search-icon"></i>
                         </div>
                     </div>
                     <div class="col-md-2">
                         <select class="form-select" id="customerStatusFilter">
                             <option value="">All Status</option>
                             <option value="active">Active</option>
                             <option value="inactive">Inactive</option>
                         </select>
                     </div>
                     <div class="col-md-2">
                         <select class="form-select" id="customerBookingsFilter">
                             <option value="">All Bookings</option>
                             <option value="high">5+ Bookings</option>
                             <option value="medium">2-4 Bookings</option>
                             <option value="low">1 Booking</option>
                         </select>
                     </div>
                     <div class="col-md-2">
                         <select class="form-select" id="customerEntriesPerPage">
                             <option value="10">10 per page</option>
                             <option value="25">25 per page</option>
                             <option value="50">50 per page</option>
                         </select>
                     </div>
                     <div class="col-md-1">
                         <button class="btn btn-search" id="customerSearchButton">
                             <i class="bi bi-search"></i> Search
                         </button>
                     </div>
                     <div class="col-md-1">
                         <button class="btn btn-outline-secondary" id="clearCustomerFilters">
                             <i class="bi bi-arrow-clockwise"></i> Clear
                         </button>
                     </div>
                 </div>
                 <div class="mt-2 row">
                     <div class="col-md-12">
                         <div class="results-info">
                             <span class="text-muted">Showing <span id="customerShowingStart">1</span>-<span
                                     id="customerShowingEnd">6</span> of <span id="customerTotalResults">6</span>
                                 results</span>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="users-table-container" id="customersTable">
                 <table class="table users-table">
                     <thead>
                         <tr>
                             <th>User</th>
                             <th>Contact</th>
                             <th>Status</th>
                             <th>Joined</th>
                             <th>Bookings</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr class="customer-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Fahad Anwar" class="user-img-small">
                                         <span class="user-status-small active"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">Fahad Anwar</span>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">fahad@example.com</div>
                                     <div class="user-phone-small">+880 1721001234</div>
                                 </div>
                             </td>
                             <td><span class="status-badge active-status">Active</span></td>
                             <td>Jan 2024</td>
                             <td><span class="booking-count">5 Bookings</span></td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>

                         <tr class="customer-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="John Smith" class="user-img-small">
                                         <span class="user-status-small inactive"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">John Smith</span>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">john@example.com</div>
                                     <div class="user-phone-small">+1 555 123 4567</div>
                                 </div>
                             </td>
                             <td><span class="status-badge inactive-status">Inactive</span></td>
                             <td>Feb 2024</td>
                             <td><span class="booking-count">3 Bookings</span></td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>

                         <tr class="customer-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Maria Garcia" class="user-img-small">
                                         <span class="user-status-small active"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">Maria Garcia</span>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">maria@example.com</div>
                                     <div class="user-phone-small">+34 666 789 012</div>
                                 </div>
                             </td>
                             <td><span class="status-badge active-status">Active</span></td>
                             <td>May 2024</td>
                             <td><span class="booking-count">1 Booking</span></td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>
                         <tr class="customer-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="David Wilson" class="user-img-small">
                                         <span class="user-status-small inactive"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">David Wilson</span>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">david@example.com</div>
                                     <div class="user-phone-small">+44 20 7946 0958</div>
                                 </div>
                             </td>
                             <td><span class="status-badge inactive-status">Inactive</span></td>
                             <td>Mar 2024</td>
                             <td><span class="booking-count">2 Bookings</span></td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>
                         <tr class="customer-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Lisa Chen" class="user-img-small">
                                         <span class="user-status-small active"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">Lisa Chen</span>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">lisa@example.com</div>
                                     <div class="user-phone-small">+86 138 0013 8000</div>
                                 </div>
                             </td>
                             <td><span class="status-badge active-status">Active</span></td>
                             <td>Dec 2023</td>
                             <td><span class="booking-count">8 Bookings</span></td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>
                         <tr class="customer-user-row">
                             <td>
                                 <div class="user-info-cell">
                                     <div class="user-avatar-small">
                                         <img src="{{ asset('backend/img/avatar.jpg')}}" alt="Ahmed Ali" class="user-img-small">
                                         <span class="user-status-small inactive"></span>
                                     </div>
                                     <div class="user-details-small">
                                         <span class="user-name-small">Ahmed Ali</span>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                 <div class="contact-info">
                                     <div class="user-email-small">ahmed.ali@example.com</div>
                                     <div class="user-phone-small">+971 50 123 4567</div>
                                 </div>
                             </td>
                             <td><span class="status-badge inactive-status">Inactive</span></td>
                             <td>Apr 2024</td>
                             <td><span class="booking-count">1 Booking</span></td>
                             <td>
                                 <div class="action-buttons">
                                     <a href="profile.php" class="btn btn-view-user-table" title="View Details">
                                         <i class="bi bi-eye"></i>
                                     </a>
                                     <button class="btn btn-edit-user-table" title="Edit User">
                                         <i class="bi bi-pencil"></i>
                                     </button>
                                 </div>
                             </td>
                         </tr>
                     </tbody>
                 </table>
             </div>

             <!-- Pagination for Customers -->
             <div class="pagination-container">
                 <div class="row align-items-center">
                     <div class="col-md-6">
                         <div class="pagination-info">
                             <span class="text-muted">Showing <span id="customerPaginationStart">1</span> to <span
                                     id="customerPaginationEnd">6</span> of <span id="customerPaginationTotal">6</span>
                                 entries</span>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <nav aria-label="Customers pagination">
                             <ul class="mb-0 pagination justify-content-end" id="customerPaginationControls">
                                 <li class="page-item disabled">
                                     <a class="page-link" href="#" id="customerPrevPage">
                                         <i class="bi bi-chevron-left"></i> Previous
                                     </a>
                                 </li>
                                 <li class="page-item active">
                                     <a class="page-link" href="#" data-page="1">1</a>
                                 </li>
                                 <li class="page-item disabled">
                                     <a class="page-link" href="#" id="customerNextPage">
                                         Next <i class="bi bi-chevron-right"></i>
                                     </a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <script>
         document.addEventListener('DOMContentLoaded', function() {
             // Initialize variables for each tab
             const tabs = {
                 admin: {
                     searchInput: document.getElementById('searchAdmins'),
                     roleFilter: document.getElementById('adminRoleFilter'),
                     statusFilter: document.getElementById('adminStatusFilter'),
                     entriesPerPage: document.getElementById('adminEntriesPerPage'),
                     searchButton: document.getElementById('adminSearchButton'),
                     clearButton: document.getElementById('clearAdminFilters'),
                     tableRows: document.querySelectorAll('#adminsTable tbody tr'),
                     currentPage: 1,
                     itemsPerPage: 10,
                     filteredRows: []
                 },
                 guide: {
                     searchInput: document.getElementById('searchGuides'),
                     roleFilter: document.getElementById('guideRoleFilter'),
                     statusFilter: document.getElementById('guideStatusFilter'),
                     entriesPerPage: document.getElementById('guideEntriesPerPage'),
                     searchButton: document.getElementById('guideSearchButton'),
                     clearButton: document.getElementById('clearGuideFilters'),
                     tableRows: document.querySelectorAll('#guidesTable tbody tr'),
                     currentPage: 1,
                     itemsPerPage: 10,
                     filteredRows: []
                 },
                 customer: {
                     searchInput: document.getElementById('searchCustomers'),
                     statusFilter: document.getElementById('customerStatusFilter'),
                     bookingsFilter: document.getElementById('customerBookingsFilter'),
                     entriesPerPage: document.getElementById('customerEntriesPerPage'),
                     searchButton: document.getElementById('customerSearchButton'),
                     clearButton: document.getElementById('clearCustomerFilters'),
                     tableRows: document.querySelectorAll('#customersTable tbody tr'),
                     currentPage: 1,
                     itemsPerPage: 10,
                     filteredRows: []
                 }
             };

             // Initialize filtered rows
             Object.keys(tabs).forEach(tabKey => {
                 tabs[tabKey].filteredRows = Array.from(tabs[tabKey].tableRows);
             });

             // Generic search function
             function performSearch(tabKey) {
                 const tab = tabs[tabKey];
                 const searchTerm = tab.searchInput.value.toLowerCase();

                 tab.filteredRows = Array.from(tab.tableRows).filter(row => {
                     const userName = row.querySelector('.user-name-small').textContent.toLowerCase();
                     const userEmail = row.querySelector('.user-email-small').textContent.toLowerCase();
                     const userPhone = row.querySelector('.user-phone-small').textContent.toLowerCase();

                     // Search filter
                     const matchesSearch = !searchTerm ||
                         userName.includes(searchTerm) ||
                         userEmail.includes(searchTerm) ||
                         userPhone.includes(searchTerm);

                     // Role filter (for admin and guide tabs)
                     let matchesRole = true;
                     if (tab.roleFilter) {
                         const roleValue = tab.roleFilter.value.toLowerCase();
                         if (roleValue) {
                             const userRole = row.querySelector('.role-badge').textContent.toLowerCase();
                             matchesRole = userRole.includes(roleValue);
                         }
                     }

                     // Status filter
                     let matchesStatus = true;
                     if (tab.statusFilter) {
                         const statusValue = tab.statusFilter.value.toLowerCase();
                         if (statusValue) {
                             const userStatus = row.querySelector('.status-badge').textContent.toLowerCase();
                             matchesStatus = userStatus.includes(statusValue);
                         }
                     }

                     // Bookings filter (for customer tab)
                     let matchesBookings = true;
                     if (tab.bookingsFilter) {
                         const bookingsValue = tab.bookingsFilter.value;
                         if (bookingsValue) {
                             const bookingText = row.querySelector('.booking-count').textContent;
                             const bookingCount = parseInt(bookingText.match(/\d+/)[0]);

                             if (bookingsValue === 'high') {
                                 matchesBookings = bookingCount >= 5;
                             } else if (bookingsValue === 'medium') {
                                 matchesBookings = bookingCount >= 2 && bookingCount <= 4;
                             } else if (bookingsValue === 'low') {
                                 matchesBookings = bookingCount === 1;
                             }
                         }
                     }

                     return matchesSearch && matchesRole && matchesStatus && matchesBookings;
                 });

                 tab.currentPage = 1;
                 updateDisplay(tabKey);
                 updatePagination(tabKey);
             }

             // Update display function
             function updateDisplay(tabKey) {
                 const tab = tabs[tabKey];
                 tab.itemsPerPage = parseInt(tab.entriesPerPage.value);
                 const startIndex = (tab.currentPage - 1) * tab.itemsPerPage;
                 const endIndex = startIndex + tab.itemsPerPage;

                 // Hide all rows
                 tab.tableRows.forEach(row => row.style.display = 'none');

                 // Show filtered rows for current page
                 tab.filteredRows.slice(startIndex, endIndex).forEach(row => {
                     row.style.display = '';
                 });

                 // Update results info
                 const totalResults = tab.filteredRows.length;
                 const showingStart = totalResults > 0 ? startIndex + 1 : 0;
                 const showingEnd = Math.min(endIndex, totalResults);

                 document.getElementById(`${tabKey}ShowingStart`).textContent = showingStart;
                 document.getElementById(`${tabKey}ShowingEnd`).textContent = showingEnd;
                 document.getElementById(`${tabKey}TotalResults`).textContent = totalResults;
                 document.getElementById(`${tabKey}PaginationStart`).textContent = showingStart;
                 document.getElementById(`${tabKey}PaginationEnd`).textContent = showingEnd;
                 document.getElementById(`${tabKey}PaginationTotal`).textContent = totalResults;
             }

             // Update pagination function
             function updatePagination(tabKey) {
                 const tab = tabs[tabKey];
                 const totalPages = Math.ceil(tab.filteredRows.length / tab.itemsPerPage);
                 const paginationControls = document.getElementById(`${tabKey}PaginationControls`);

                 // Clear existing pagination
                 paginationControls.innerHTML = '';

                 // Previous button
                 const prevLi = document.createElement('li');
                 prevLi.className = `page-item ${tab.currentPage === 1 ? 'disabled' : ''}`;
                 prevLi.innerHTML =
                     `<a class="page-link" href="#" id="${tabKey}PrevPage"><i class="bi bi-chevron-left"></i> Previous</a>`;
                 paginationControls.appendChild(prevLi);

                 // Page numbers
                 const startPage = Math.max(1, tab.currentPage - 2);
                 const endPage = Math.min(totalPages, tab.currentPage + 2);

                 for (let i = startPage; i <= endPage; i++) {
                     const pageLi = document.createElement('li');
                     pageLi.className = `page-item ${i === tab.currentPage ? 'active' : ''}`;
                     pageLi.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
                     paginationControls.appendChild(pageLi);
                 }

                 // Next button
                 const nextLi = document.createElement('li');
                 nextLi.className =
                     `page-item ${tab.currentPage === totalPages || totalPages === 0 ? 'disabled' : ''}`;
                 nextLi.innerHTML =
                     `<a class="page-link" href="#" id="${tabKey}NextPage">Next <i class="bi bi-chevron-right"></i></a>`;
                 paginationControls.appendChild(nextLi);

                 // Add event listeners
                 paginationControls.addEventListener('click', function(e) {
                     e.preventDefault();
                     const target = e.target.closest('a');
                     if (!target || target.closest('.disabled')) return;

                     if (target.id === `${tabKey}PrevPage`) {
                         if (tab.currentPage > 1) {
                             tab.currentPage--;
                             updateDisplay(tabKey);
                             updatePagination(tabKey);
                         }
                     } else if (target.id === `${tabKey}NextPage`) {
                         if (tab.currentPage < totalPages) {
                             tab.currentPage++;
                             updateDisplay(tabKey);
                             updatePagination(tabKey);
                         }
                     } else if (target.dataset.page) {
                         tab.currentPage = parseInt(target.dataset.page);
                         updateDisplay(tabKey);
                         updatePagination(tabKey);
                     }
                 });
             }

             // Add event listeners for each tab
             Object.keys(tabs).forEach(tabKey => {
                 const tab = tabs[tabKey];

                 // Search input
                 tab.searchInput.addEventListener('input', () => performSearch(tabKey));

                 // Role filter (if exists)
                 if (tab.roleFilter) {
                     tab.roleFilter.addEventListener('change', () => performSearch(tabKey));
                 }

                 // Status filter
                 if (tab.statusFilter) {
                     tab.statusFilter.addEventListener('change', () => performSearch(tabKey));
                 }

                 // Bookings filter (if exists)
                 if (tab.bookingsFilter) {
                     tab.bookingsFilter.addEventListener('change', () => performSearch(tabKey));
                 }

                 // Entries per page
                 tab.entriesPerPage.addEventListener('change', function() {
                     tab.currentPage = 1;
                     updateDisplay(tabKey);
                     updatePagination(tabKey);
                 });

                 // Search button
                 tab.searchButton.addEventListener('click', () => performSearch(tabKey));

                 // Clear button
                 tab.clearButton.addEventListener('click', function() {
                     tab.searchInput.value = '';
                     if (tab.roleFilter) tab.roleFilter.value = '';
                     if (tab.statusFilter) tab.statusFilter.value = '';
                     if (tab.bookingsFilter) tab.bookingsFilter.value = '';
                     tab.entriesPerPage.value = '10';
                     performSearch(tabKey);
                 });

                 // Initialize display
                 updateDisplay(tabKey);
                 updatePagination(tabKey);
             });
         });
     </script>

     <!-- Add User Modal -->
     <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="text-white modal-title" id="addUserModalLabel">
                         <img src="{{ asset('backend/img/ico/ico-profile.svg')}}" alt="Add User" class="modal-icon">
                         Add New User
                     </h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form id="addUserForm">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="userFName" class="form-label">First Name</label>
                                     <input type="text" class="form-control" id="userFName"
                                         placeholder="Enter full name" required>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="userLEmail" class="form-label">Last Name</label>
                                     <input type="email" class="form-control" id="userLEmail"
                                         placeholder="Enter email address" required>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="mb-3 form-group">
                                     <label for="userEmail" class="form-label">Email Address</label>
                                     <input type="email" class="form-control" id="userEmail"
                                         placeholder="Enter email address" required>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="userPhone" class="form-label">Phone Number</label>
                                     <input type="tel" class="form-control" id="userPhone"
                                         placeholder="Enter phone number" required>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="userRole" class="form-label">User Role</label>
                                     <select class="form-control admin-select" id="userRole" required>
                                         <option value="">Select Role</option>
                                         <option value="admin">Administrator</option>
                                         <option value="team-leader">Team/Leader</option>
                                         <option value="guide">Guide</option>
                                         <option value="customer">Customer</option>
                                     </select>
                                 </div>
                             </div>
                         </div>
                         <!-- Team/Guide Type Selection (Hidden by default) -->
                         <div class="row" id="teamGuideTypeRow" style="display: none;">
                             <div class="col-md-12">
                                 <div class="mb-3 form-group">
                                     <label for="teamGuideType" class="form-label">
                                         <i class="bi bi-people text-success me-2"></i>Select Team/Leader
                                     </label>
                                     <select class="form-control admin-select" id="teamGuideType" name="teamGuideType">
                                         <option value="">Select Team/Leader</option>
                                         <option value="team-alpha">Team Alpha</option>
                                         <option value="team-beta">Team Beta</option>
                                     </select>
                                     <small class="form-text text-muted">
                                         Select the specific team or leader for this user
                                     </small>
                                 </div>
                             </div>
                         </div>
                         <!-- Team Name Input (Hidden by default) -->
                         <div class="row" id="teamNameRow" style="display: none;">
                             <div class="col-md-12">
                                 <div class="mb-3 form-group">
                                     <label for="teamName" class="form-label">
                                         <i class="bi bi-people text-success me-2"></i>Team Name
                                     </label>
                                     <input type="text" class="form-control" id="teamName" name="teamName"
                                         placeholder="Enter team name">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="userPassword" class="form-label">Password</label>
                                     <input type="password" class="form-control" id="userPassword"
                                         placeholder="Enter password" required>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="userConfirmPassword" class="form-label">Confirm Password</label>
                                     <input type="password" class="form-control" id="userConfirmPassword"
                                         placeholder="Confirm password" required>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="mb-3 form-group">
                                 <label for="userAddress" class="form-label">Address</label>
                                 <textarea class="form-control" id="userAddress" rows="3" placeholder="Enter address"></textarea>
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="mb-3 form-group">
                                 <label for="userCountry" class="form-label">Country</label>
                                 <select class="form-control admin-select" id="userCountry" required>
                                     <option value="">Select Country</option>
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
                         </div>

                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                     <button type="button" class="btn btn-primary" id="saveUserBtn">Add User</button>
                 </div>
             </div>
         </div>
     </div>
 @endsection
 @push('scripts')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             // Add User Modal functionality
             const addUserModal = new bootstrap.Modal(document.getElementById('addUserModal'));
             const saveUserBtn = document.getElementById('saveUserBtn');
             const userForm = document.getElementById('addUserForm');

             // Handle save user
             saveUserBtn.addEventListener('click', function() {
                 const firstName = document.getElementById('userFName').value;
                 const lastName = document.getElementById('userLEmail')
                 .value; // Note: This seems to be mislabeled in the original form
                 const email = document.getElementById('userEmail').value;
                 const phone = document.getElementById('userPhone').value;
                 const role = document.getElementById('userRole').value;
                 const teamGuideType = document.getElementById('teamGuideType').value;
                 const teamName = document.getElementById('teamName').value;
                 const password = document.getElementById('userPassword').value;
                 const confirmPassword = document.getElementById('userConfirmPassword').value;
                 const address = document.getElementById('userAddress').value;
                 const country = document.getElementById('userCountry').value;

                 // Basic validation
                 if (!firstName || !email || !phone || !role || !password || !confirmPassword || !country) {
                     alert('Please fill in all required fields.');
                     return;
                 }

                 // Validate guide type only for guides
                 if (role === 'guide' && !teamGuideType) {
                     alert('Please select a Guide type for this role.');
                     return;
                 }

                 // Validate team name for team leaders
                 if (role === 'team-leader' && !teamName) {
                     alert('Please enter a Team name for this role.');
                     return;
                 }

                 if (password !== confirmPassword) {
                     alert('Passwords do not match.');
                     return;
                 }

                 // Prepare user data
                 const userData = {
                     firstName,
                     lastName,
                     email,
                     phone,
                     role,
                     teamGuideType: role === 'guide' ? teamGuideType : null,
                     teamName: role === 'team-leader' ? teamName : null,
                     address,
                     country
                 };

                 // Here you would typically send the data to the server
                 console.log('Adding user:', userData);

                 // Reset form and close modal
                 userForm.reset();
                 document.getElementById('teamGuideTypeRow').style.display = 'none';
                 document.getElementById('teamGuideType').removeAttribute('required');
                 document.getElementById('teamNameRow').style.display = 'none';
                 document.getElementById('teamName').removeAttribute('required');
                 addUserModal.hide();

                 // Show success message with role-specific information
                 let successMessage = 'User added successfully!';
                 if (role === 'guide') {
                     const typeText = teamGuideType.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase());
                     successMessage = `Guide added successfully as ${typeText}!`;
                 } else if (role === 'team-leader') {
                     successMessage = `Team Leader added successfully for team "${teamName}"!`;
                 }
                 alert(successMessage);
             });

             // Reset form when modal is closed
             document.getElementById('addUserModal').addEventListener('hidden.bs.modal', function() {
                 userForm.reset();
                 // Hide team/guide type dropdown when modal is closed
                 document.getElementById('teamGuideTypeRow').style.display = 'none';
                 document.getElementById('teamGuideType').removeAttribute('required');
                 // Hide team name input when modal is closed
                 document.getElementById('teamNameRow').style.display = 'none';
                 document.getElementById('teamName').removeAttribute('required');
             });

             // Handle User Role change to show/hide Team/Guide Type dropdown and Team Name input
             const userRoleSelect = document.getElementById('userRole');
             const teamGuideTypeRow = document.getElementById('teamGuideTypeRow');
             const teamGuideTypeSelect = document.getElementById('teamGuideType');
             const teamNameRow = document.getElementById('teamNameRow');
             const teamNameInput = document.getElementById('teamName');

             userRoleSelect.addEventListener('change', function() {
                 const selectedRole = this.value;

                 if (selectedRole === 'guide') {
                     // Show the Team/Guide type dropdown only for Guide role
                     teamGuideTypeRow.style.display = 'block';
                     teamGuideTypeSelect.setAttribute('required', 'required');

                     // Hide team name input
                     teamNameRow.style.display = 'none';
                     teamNameInput.removeAttribute('required');
                     teamNameInput.value = '';

                     // Update label for guide role
                     const label = teamGuideTypeRow.querySelector('label');
                     label.innerHTML =
                         '<i class="bi bi-person-badge text-success me-2"></i>Select Guide Type';
                 } else if (selectedRole === 'team-leader') {
                     // Hide the guide type dropdown
                     teamGuideTypeRow.style.display = 'none';
                     teamGuideTypeSelect.removeAttribute('required');
                     teamGuideTypeSelect.value = '';

                     // Show the team name input for Team Leader role
                     teamNameRow.style.display = 'block';
                     teamNameInput.setAttribute('required', 'required');
                 } else {
                     // Hide both fields for all other roles
                     teamGuideTypeRow.style.display = 'none';
                     teamGuideTypeSelect.removeAttribute('required');
                     teamGuideTypeSelect.value = '';

                     teamNameRow.style.display = 'none';
                     teamNameInput.removeAttribute('required');
                     teamNameInput.value = '';
                 }
             });
         });
     </script>
 @endpush
