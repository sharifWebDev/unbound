 @extends('layouts.admin')
 @section('title', 'Bangladesh Unbound - Coupons')
 @section('page-title', 'Coupons Management')
 @section('breadcrumb')
     <!-- Breadcrumb Navigation -->
     <nav class="breadcrumb-container" aria-label="breadcrumb" class="mb-4">
         <ol class="breadcrumb">
             <li class="breadcrumb-item">
                 <a href="dashboard">
                     <img src="{{ asset('backend/img/ico/ico-dashboard.svg') }}" alt="Dashboard" class="breadcrumb-icon">
                     Dashboard
                 </a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">
                 <img src="{{ asset('backend/img/ico/ico-coupons.svg') }}" alt="Coupons" class="breadcrumb-icon">
                 Coupons Management
             </li>
         </ol>
     </nav>
 @endsection
 @section('content')
     <!-- Coupons Management Header -->
     <div class="coupons-header">
         <div class="d-flex align-items-center justify-content-between">
             <h3 class="mb-0 section-title">
                 <img src="{{ asset('backend/img/ico/ico-coupons.svg') }}" alt="Coupons" class="section-icon">
                 Coupons Management
             </h3>
             <button class="btn btn-add-coupon" data-bs-toggle="modal" data-bs-target="#addCouponModal">
                 <i class="bi bi-plus-circle"></i> Add Coupon
             </button>
         </div>
     </div>

     <!-- Coupons Table -->
     <div class="coupons-table-container">
         <table class="table coupons-table">
             <thead>
                 <tr>
                     <th>Coupon Code</th>
                     <th>Type</th>
                     <th>Value</th>
                     <th>Usage Limit</th>
                     <th>Used</th>
                     <th>Expires</th>
                     <th>Status</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
                 <tr class="coupon-row">
                     <td>
                         <div class="coupon-code-cell">
                             <span class="coupon-code">SUMMER2024</span>
                             <small class="coupon-description">Summer Special Discount</small>
                         </div>
                     </td>
                     <td><span class="coupon-type percentage">Percentage</span></td>
                     <td><span class="coupon-value">25%</span></td>
                     <td><span class="usage-limit">100</span></td>
                     <td><span class="usage-count">23</span></td>
                     <td><span class="expiry-date">31 Aug 2024</span></td>
                     <td><span class="status-badge active-status">Active</span></td>
                     <td>
                         <div class="action-buttons">
                             <button class="btn btn-edit-coupon" data-coupon-id="1" title="Edit Coupon">
                                 <i class="bi bi-pencil"></i>
                             </button>
                             <button class="btn btn-delete-coupon" data-coupon-id="1" title="Delete Coupon">
                                 <i class="bi bi-trash"></i>
                             </button>
                             <button class="btn btn-toggle-status" data-coupon-id="1" title="Toggle Status">
                                 <i class="bi bi-toggle-on"></i>
                             </button>
                         </div>
                     </td>
                 </tr>
                 <tr class="coupon-row">
                     <td>
                         <div class="coupon-code-cell">
                             <span class="coupon-code">WELCOME50</span>
                             <small class="coupon-description">New Customer Welcome</small>
                         </div>
                     </td>
                     <td><span class="fixed coupon-type">Fixed</span></td>
                     <td><span class="coupon-value">$50</span></td>
                     <td><span class="usage-limit">50</span></td>
                     <td><span class="usage-count">12</span></td>
                     <td><span class="expiry-date">31 Dec 2024</span></td>
                     <td><span class="status-badge active-status">Active</span></td>
                     <td>
                         <div class="action-buttons">
                             <button class="btn btn-edit-coupon" data-coupon-id="2" title="Edit Coupon">
                                 <i class="bi bi-pencil"></i>
                             </button>
                             <button class="btn btn-delete-coupon" data-coupon-id="2" title="Delete Coupon">
                                 <i class="bi bi-trash"></i>
                             </button>
                             <button class="btn btn-toggle-status" data-coupon-id="2" title="Toggle Status">
                                 <i class="bi bi-toggle-on"></i>
                             </button>
                         </div>
                     </td>
                 </tr>
                 <tr class="coupon-row">
                     <td>
                         <div class="coupon-code-cell">
                             <span class="coupon-code">HOLIDAY15</span>
                             <small class="coupon-description">Holiday Season Offer</small>
                         </div>
                     </td>
                     <td><span class="coupon-type percentage">Percentage</span></td>
                     <td><span class="coupon-value">15%</span></td>
                     <td><span class="usage-limit">200</span></td>
                     <td><span class="usage-count">156</span></td>
                     <td><span class="expiry-date">15 Jan 2025</span></td>
                     <td><span class="status-badge inactive-status">Inactive</span></td>
                     <td>
                         <div class="action-buttons">
                             <button class="btn btn-edit-coupon" data-coupon-id="3" title="Edit Coupon">
                                 <i class="bi bi-pencil"></i>
                             </button>
                             <button class="btn btn-delete-coupon" data-coupon-id="3" title="Delete Coupon">
                                 <i class="bi bi-trash"></i>
                             </button>
                             <button class="btn btn-toggle-status" data-coupon-id="3" title="Toggle Status">
                                 <i class="bi bi-toggle-off"></i>
                             </button>
                         </div>
                     </td>
                 </tr>
             </tbody>
         </table>
     </div>

     <!-- Add Coupon Modal -->
     <div class="modal fade" id="addCouponModal" tabindex="-1" aria-labelledby="addCouponModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <img src="{{ asset('backend/img/ico/ico-coupons.svg') }}" alt="Sign Up" class="modal-icon">
                     <h5 class="text-white modal-title" id="addCouponModalLabel">Add New Coupon</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form id="addCouponForm">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="couponCode" class="form-label">Coupon Code *</label>
                                     <input type="text" class="form-control" id="couponCode" name="couponCode"
                                         placeholder="e.g., SUMMER2024" required>
                                     <small class="form-text text-muted">Use uppercase letters and numbers only</small>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="couponDescription" class="form-label">Description</label>
                                     <input type="text" class="form-control" id="couponDescription"
                                         name="couponDescription" placeholder="e.g., Summer Special Discount">
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="couponType" class="form-label">Coupon Type *</label>
                                     <select class="form-control" id="couponType" name="couponType" required>
                                         <option value="">Select Type</option>
                                         <option value="fixed">Fixed Amount</option>
                                         <option value="percentage">Percentage</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="couponValue" class="form-label">Value *</label>
                                     <div class="input-group">
                                         <span class="input-group-text" id="valuePrefix">$</span>
                                         <input type="number" class="form-control" id="couponValue" name="couponValue"
                                             placeholder="0" step="0.01" min="0" required>
                                     </div>
                                     <small class="form-text text-muted" id="valueHelp">Enter the discount amount</small>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="usageLimit" class="form-label">Usage Limit *</label>
                                     <input type="number" class="form-control" id="usageLimit" name="usageLimit"
                                         placeholder="100" min="1" required>
                                     <small class="form-text text-muted">How many times this coupon can be used</small>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="expiryDate" class="form-label">Expiry Date *</label>
                                     <input type="date" class="form-control" id="expiryDate" name="expiryDate"
                                         required>
                                     <small class="form-text text-muted">When this coupon will expire</small>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-12">
                                 <div class="mb-3 form-check">
                                     <input class="form-check-input" type="checkbox" id="couponActive"
                                         name="couponActive" checked>
                                     <label class="form-check-label" for="couponActive">
                                         Activate this coupon immediately
                                     </label>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                     <button type="button" class="btn btn-primary" id="saveCouponBtn">Create Coupon</button>
                 </div>
             </div>
         </div>
     </div>

     <!-- Edit Coupon Modal -->
     <div class="modal fade" id="editCouponModal" tabindex="-1" aria-labelledby="editCouponModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <img src="{{ asset('backend/img/ico/ico-coupons.svg') }}" alt="Sign Up" class="modal-icon">
                     <h5 class="text-white modal-title" id="editCouponModalLabel">Edit Coupon</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form id="editCouponForm">
                         <input type="hidden" id="editCouponId" name="couponId">
                         <!-- Same form fields as add modal -->
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="editCouponCode" class="form-label">Coupon Code *</label>
                                     <input type="text" class="form-control" id="editCouponCode" name="couponCode"
                                         required>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="editCouponDescription" class="form-label">Description</label>
                                     <input type="text" class="form-control" id="editCouponDescription"
                                         name="couponDescription">
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="editCouponType" class="form-label">Coupon Type *</label>
                                     <select class="form-control" id="editCouponType" name="couponType" required>
                                         <option value="fixed">Fixed Amount</option>
                                         <option value="percentage">Percentage</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="editCouponValue" class="form-label">Value *</label>
                                     <div class="input-group">
                                         <span class="input-group-text" id="editValuePrefix">$</span>
                                         <input type="number" class="form-control" id="editCouponValue"
                                             name="couponValue" step="0.01" min="0" required>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="editUsageLimit" class="form-label">Usage Limit *</label>
                                     <input type="number" class="form-control" id="editUsageLimit" name="usageLimit"
                                         min="1" required>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3 form-group">
                                     <label for="editExpiryDate" class="form-label">Expiry Date *</label>
                                     <input type="date" class="form-control" id="editExpiryDate" name="expiryDate"
                                         required>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-12">
                                 <div class="mb-3 form-check">
                                     <input class="form-check-input" type="checkbox" id="editCouponActive"
                                         name="couponActive">
                                     <label class="form-check-label" for="editCouponActive">
                                         Coupon is active
                                     </label>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                     <button type="button" class="btn btn-primary" id="updateCouponBtn">Update Coupon</button>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @push('scripts')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             // Add Coupon Modal functionality
             const addCouponModal = new bootstrap.Modal(document.getElementById('addCouponModal'));
             const editCouponModal = new bootstrap.Modal(document.getElementById('editCouponModal'));
             const saveCouponBtn = document.getElementById('saveCouponBtn');
             const updateCouponBtn = document.getElementById('updateCouponBtn');
             const addCouponForm = document.getElementById('addCouponForm');
             const editCouponForm = document.getElementById('editCouponForm');

             // Coupon type change handler for add modal
             const couponTypeSelect = document.getElementById('couponType');
             const valuePrefix = document.getElementById('valuePrefix');
             const valueHelp = document.getElementById('valueHelp');

             couponTypeSelect.addEventListener('change', function() {
                 if (this.value === 'percentage') {
                     valuePrefix.textContent = '%';
                     valueHelp.textContent = 'Enter percentage (e.g., 25 for 25%)';
                     document.getElementById('couponValue').setAttribute('max', '100');
                 } else {
                     valuePrefix.textContent = '$';
                     valueHelp.textContent = 'Enter the discount amount';
                     document.getElementById('couponValue').removeAttribute('max');
                 }
             });

             // Edit coupon type change handler
             const editCouponTypeSelect = document.getElementById('editCouponType');
             const editValuePrefix = document.getElementById('editValuePrefix');

             editCouponTypeSelect.addEventListener('change', function() {
                 if (this.value === 'percentage') {
                     editValuePrefix.textContent = '%';
                     document.getElementById('editCouponValue').setAttribute('max', '100');
                 } else {
                     editValuePrefix.textContent = '$';
                     document.getElementById('editCouponValue').removeAttribute('max');
                 }
             });

             // Save new coupon
             saveCouponBtn.addEventListener('click', function() {
                 const formData = new FormData(addCouponForm);

                 // Basic validation
                 const code = formData.get('couponCode');
                 const type = formData.get('couponType');
                 const value = formData.get('couponValue');
                 const limit = formData.get('usageLimit');
                 const expiry = formData.get('expiryDate');

                 if (!code || !type || !value || !limit || !expiry) {
                     alert('Please fill in all required fields.');
                     return;
                 }

                 // Here you would typically send the data to a server
                 console.log('New coupon data:', Object.fromEntries(formData));

                 // For demo purposes, add to table
                 addCouponToTable(code, type, value, limit, expiry, formData.get('couponDescription'),
                     formData.get('couponActive'));

                 // Close modal and reset form
                 addCouponModal.hide();
                 addCouponForm.reset();

                 alert('Coupon created successfully!');
             });

             // Edit coupon button handlers
             document.querySelectorAll('.btn-edit-coupon').forEach(button => {
                 button.addEventListener('click', function() {
                     const couponId = this.getAttribute('data-coupon-id');
                     // Here you would typically fetch coupon data from server
                     // For demo, we'll populate with sample data
                     populateEditForm(couponId);
                     editCouponModal.show();
                 });
             });

             // Delete coupon handlers
             document.querySelectorAll('.btn-delete-coupon').forEach(button => {
                 button.addEventListener('click', function() {
                     const couponId = this.getAttribute('data-coupon-id');
                     if (confirm('Are you sure you want to delete this coupon?')) {
                         // Here you would typically send delete request to server
                         this.closest('tr').remove();
                         alert('Coupon deleted successfully!');
                     }
                 });
             });

             // Toggle status handlers
             document.querySelectorAll('.btn-toggle-status').forEach(button => {
                 button.addEventListener('click', function() {
                     const couponId = this.getAttribute('data-coupon-id');
                     const statusBadge = this.closest('tr').querySelector('.status-badge');
                     const icon = this.querySelector('i');

                     if (statusBadge.classList.contains('active-status')) {
                         statusBadge.textContent = 'Inactive';
                         statusBadge.className = 'status-badge inactive-status';
                         icon.className = 'bi bi-toggle-off';
                     } else {
                         statusBadge.textContent = 'Active';
                         statusBadge.className = 'status-badge active-status';
                         icon.className = 'bi bi-toggle-on';
                     }
                 });
             });

             function addCouponToTable(code, type, value, limit, expiry, description, active) {
                 const tbody = document.querySelector('.coupons-table tbody');
                 const newRow = document.createElement('tr');
                 newRow.className = 'coupon-row';

                 const displayValue = type === 'percentage' ? value + '%' : '$' + value;
                 const statusClass = active ? 'active-status' : 'inactive-status';
                 const statusText = active ? 'Active' : 'Inactive';
                 const toggleIcon = active ? 'bi-toggle-on' : 'bi-toggle-off';

                 newRow.innerHTML = `
            <td>
                <div class="coupon-code-cell">
                    <span class="coupon-code">${code}</span>
                    <small class="coupon-description">${description || ''}</small>
                </div>
            </td>
            <td><span class="coupon-type ${type}">${type.charAt(0).toUpperCase() + type.slice(1)}</span></td>
            <td><span class="coupon-value">${displayValue}</span></td>
            <td><span class="usage-limit">${limit}</span></td>
            <td><span class="usage-count">0</span></td>
            <td><span class="expiry-date">${new Date(expiry).toLocaleDateString('en-GB', {day: '2-digit', month: 'short', year: 'numeric'})}</span></td>
            <td><span class="status-badge ${statusClass}">${statusText}</span></td>
            <td>
                <div class="action-buttons">
                    <button class="btn btn-edit-coupon" data-coupon-id="new" title="Edit Coupon">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <button class="btn btn-delete-coupon" data-coupon-id="new" title="Delete Coupon">
                        <i class="bi bi-trash"></i>
                    </button>
                    <button class="btn btn-toggle-status" data-coupon-id="new" title="Toggle Status">
                        <i class="bi ${toggleIcon}"></i>
                    </button>
                </div>
            </td>
        `;

                 tbody.appendChild(newRow);

                 // Re-attach event listeners to new buttons
                 attachEventListeners(newRow);
             }

             function populateEditForm(couponId) {
                 // This would typically fetch data from server
                 // For demo, using sample data
                 document.getElementById('editCouponId').value = couponId;
                 document.getElementById('editCouponCode').value = 'SAMPLE' + couponId;
                 document.getElementById('editCouponDescription').value = 'Sample Description';
                 document.getElementById('editCouponType').value = 'percentage';
                 document.getElementById('editCouponValue').value = '25';
                 document.getElementById('editUsageLimit').value = '100';
                 document.getElementById('editExpiryDate').value = '2024-12-31';
                 document.getElementById('editCouponActive').checked = true;

                 // Trigger type change to update prefix
                 editCouponTypeSelect.dispatchEvent(new Event('change'));
             }

             function attachEventListeners(row) {
                 // Attach event listeners to buttons in the new row
                 row.querySelector('.btn-edit-coupon').addEventListener('click', function() {
                     const couponId = this.getAttribute('data-coupon-id');
                     populateEditForm(couponId);
                     editCouponModal.show();
                 });

                 row.querySelector('.btn-delete-coupon').addEventListener('click', function() {
                     if (confirm('Are you sure you want to delete this coupon?')) {
                         this.closest('tr').remove();
                         alert('Coupon deleted successfully!');
                     }
                 });

                 row.querySelector('.btn-toggle-status').addEventListener('click', function() {
                     const statusBadge = this.closest('tr').querySelector('.status-badge');
                     const icon = this.querySelector('i');

                     if (statusBadge.classList.contains('active-status')) {
                         statusBadge.textContent = 'Inactive';
                         statusBadge.className = 'status-badge inactive-status';
                         icon.className = 'bi bi-toggle-off';
                     } else {
                         statusBadge.textContent = 'Active';
                         statusBadge.className = 'status-badge active-status';
                         icon.className = 'bi bi-toggle-on';
                     }
                 });
             }
         });
     </script>
 @endpush
