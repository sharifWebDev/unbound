<?php
$page_title = 'Bangladesh Unbound - Ongoing Tours';
$page_header = 'Ongoing Tours';
include 'inc/header-admin.php';
?>

            <!-- Breadcrumb Navigation -->
            <nav class="breadcrumb-container" aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard-admin.php">
                            <img src="assets/img/ico/ico-dashboard.svg" alt="Dashboard" class="breadcrumb-icon">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <img src="assets/img/ico/ico-ongoing.svg" alt="Ongoing Tours" class="breadcrumb-icon">
                        Ongoing Tours
                    </li>
                </ol>
            </nav>

            <!-- Ongoing Tours Content -->
            <div class="admin-order-container">
                <!-- Order Header Card -->
                <div class="admin-order-header">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="order-info-section">
                                <div class="order-icon">
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour Icon" class="order-icon-img">
                                </div>
                                <div class="order-details">
                                    <h2 class="order-title">Old Dhaka Tour</h2>
                                    <p class="order-duration">2 days, 1 night</p>
                                    <div class="order-meta">
                                        <div class="order-id-section">
                                            <span class="order-id-label">Order ID:</span>
                                            <span class="order-id-value">#BK001</span>
                                        </div>
                                        <div class="order-package">
                                            <strong>Package:</strong> Package Delux
                                        </div>
                                        <div class="order-pickup-location">
                                            <strong>Pickup Location:</strong> Hazrat Shahjalal International Airport
                                        </div>
                                        <div class="order-dropoff-location">
                                            <strong>Drop off Location:</strong> Hotel Dhaka Regency
                                        </div>
                                        <div class="order-payment">
                                            <strong>Amount Paid:</strong> <span class="amount-paid">$500</span>
                                        </div>
                                        <div class="order-due">
                                            <strong>Amount Due:</strong> <span class="amount-due">$4,000</span>
                                        </div>
                                        <div class="order-due-date">
                                            <strong>Payment Due Date:</strong> 20 Mar 2025
                                        </div>
                                        <div class="order-special-discount mt-3">
                                            <div class="form-group">
                                                <label for="specialDiscount" class="form-label"><strong>Special Discount:</strong></label>
                                                <div class="input-group">
                                                    <span class="input-group-text">$</span>
                                                    <input type="number" class="form-control" id="specialDiscount" name="specialDiscount" placeholder="0.00" step="0.01" min="0">
                                                    <button type="button" class="btn btn-outline-success" id="applyDiscountBtn">Apply</button>
                                                </div>
                                                <small class="form-text text-muted">Enter discount amount to apply to this booking</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="customer-card">
                                <div class="customer-header">Customer</div>
                                <div class="customer-info">
                                    <div class="customer-avatar">
                                        <img src="assets/img/avatar.jpg" alt="Fahad Anwar" class="customer-img">
                                    </div>
                                    <div class="customer-details">
                                        <h4 class="customer-name">Fahad Anwar</h4>
                                        <p class="customer-phone">+880 1721001234</p>
                                        <p class="customer-country">USA</p>
                                        <p class="customer-email">demo@example.com</p>
                                        <p class="customer-id">Customer ID: HG2343</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Assign a Team Section -->
                <div class="admin-section assign-team-section">
                    <h3 class="admin-section-title">Assign a Team</h3>
                    <div class="assign-team-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control admin-select" id="selectTeam">
                                        <option value="">Select Team</option>
                                        <option value="team1">Team Alpha</option>
                                        <option value="team2">Team Beta</option>
                                        <option value="team3">Team Gamma</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control admin-select" id="selectGuide">
                                        <option value="">Select Guide</option>
                                        <option value="guide1">Rahman Ahmed</option>
                                        <option value="guide2">Sarah Khan</option>
                                        <option value="guide3">Ahmed Hassan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-assign">Assign</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Manage Order Section -->
                <div class="admin-section manage-order-section">
                    <h3 class="admin-section-title">Manage Order</h3>
                    <div class="manage-order-form">
                        <div class="order-status-options">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orderStatus" id="approved" value="approved">
                                <label class="form-check-label" for="approved">
                                    Confirmed
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orderStatus" id="pending" value="pending">
                                <label class="form-check-label" for="pending">
                                    Pending
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orderStatus" id="cancelled" value="cancelled">
                                <label class="form-check-label" for="cancelled">
                                    Cancelled
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orderStatus" id="refunded" value="refunded">
                                <label class="form-check-label" for="refunded">
                                    Refunded
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-submit-order">Submit</button>
                    </div>
                </div>

                <!-- Feedback Tour Calendar Settings Section -->
                <div class="admin-section feedback-calendar-section">
                    <h3 class="admin-section-title">Feedback Tour Calendar Settings</h3>
                    <div class="feedback-calendar-form">
                        <div class="form-group">
                            <label class="form-label"><strong>Lock/Unlock Feedback Tour Calendar:</strong></label>
                            <div class="calendar-lock-options">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="feedbackCalendarLock" id="calendarUnlocked" value="no" checked>
                                    <label class="form-check-label" for="calendarUnlocked">
                                        <i class="bi bi-unlock text-success me-2"></i>No (Unlocked)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="feedbackCalendarLock" id="calendarLocked" value="yes">
                                    <label class="form-check-label" for="calendarLocked">
                                        <i class="bi bi-lock text-danger me-2"></i>Yes (Locked)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-submit-calendar-settings">Save Settings</button>
                    </div>
                </div>

                <!-- Payment History Section -->
                <div class="admin-section payment-history-section">
                    <div class="payment-history-header">
                        <h3 class="admin-section-title">Payment History</h3>
                        <button class="btn btn-add-payment">Add Payment</button>
                    </div>
                    <div class="payment-history-table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Payment ID</th>
                                    <th>Amount</th>
                                    <th>Gateway</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#P4932</strong></td>
                                    <td><strong>$500</strong></td>
                                    <td>PayPal</td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                    <td>08 Apr 2025</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>

<!-- Add Payment Modal -->
<div class="modal fade" id="addPaymentModal" tabindex="-1" aria-labelledby="addPaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="addPaymentModalLabel">
                    <img src="assets/img/ico/ico-payment.svg" alt="Sign Up" class="modal-icon">
                    Add Payment
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPaymentForm">
                    <div class="row">
                        <!-- <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="paymentId" class="form-label">Payment ID</label>
                                <input type="text" class="form-control" id="paymentId" placeholder="e.g., #P4933" required>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="paymentAmount" class="form-label">Payment Amount</label>
                                <input type="number" class="form-control" id="paymentAmount" placeholder="500" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="paymentGateway" class="form-label">Gateway</label>
                                <select class="form-control admin-select" id="paymentGateway" required>
                                    <option value="">Select Gateway</option>
                                    <option value="PayPal">PayPal</option>
                                    <option value="Stripe">Stripe</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Cash">Cash</option>
                                    <option value="bKash">bKash</option>
                                    <option value="Nagad">Nagad</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="paymentStatus" class="form-label">Status</label>
                                <select class="form-control admin-select" id="paymentStatus" required>
                                    <option value="">Select Status</option>
                                    <option value="Paid">Paid</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Failed">Failed</option>
                                    <option value="Refunded">Refunded</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="paymentDate" class="form-label">Payment Date</label>
                        <input type="date" class="form-control" id="paymentDate" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="paymentNotes" class="form-label">Notes (Optional)</label>
                        <textarea class="form-control" id="paymentNotes" rows="3" placeholder="Additional payment details..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="savePaymentBtn">Add Payment</button>
            </div>
        </div>
    </div>
</div>

<!-- Alert Modal -->
<div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content alert-modal">
            <div class="modal-body text-center">
                <div class="alert-icon mb-2">
                    <img src="assets/img/ico/ico-alert.svg" alt="Alert" class="alert-icon-img">
                </div>
                <h2 class="alert-title">Alert!</h2>
                <p class="alert-message">
                    To View, Please Submit<br>
                    <strong>Day 1</strong> Report!
                </p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add Payment Modal functionality
    const addPaymentModal = new bootstrap.Modal(document.getElementById('addPaymentModal'));
    const addPaymentBtn = document.querySelector('.btn-add-payment');
    const savePaymentBtn = document.getElementById('savePaymentBtn');
    const paymentForm = document.getElementById('addPaymentForm');

    // Open modal when Add Payment button is clicked
    addPaymentBtn.addEventListener('click', function() {
        // Set today's date as default
        document.getElementById('paymentDate').value = new Date().toISOString().split('T')[0];
        addPaymentModal.show();
    });

    // Handle save payment
    savePaymentBtn.addEventListener('click', function() {
        const formData = new FormData(paymentForm);
        const paymentId = document.getElementById('paymentId').value;
        const amount = document.getElementById('paymentAmount').value;
        const gateway = document.getElementById('paymentGateway').value;
        const status = document.getElementById('paymentStatus').value;
        const date = document.getElementById('paymentDate').value;

        // Basic validation
        if (!paymentId || !amount || !gateway || !status || !date) {
            alert('Please fill in all required fields.');
            return;
        }

        // Format date
        const formattedDate = new Date(date).toLocaleDateString('en-GB', {
            day: '2-digit',
            month: 'short',
            year: 'numeric'
        });

        // Create new table row
        const tableBody = document.querySelector('.payment-history-table tbody');
        const newRow = document.createElement('tr');

        // Determine badge class based on status
        let badgeClass = 'bg-success';
        if (status === 'Pending') badgeClass = 'bg-warning';
        if (status === 'Failed') badgeClass = 'bg-danger';
        if (status === 'Refunded') badgeClass = 'bg-secondary';

        newRow.innerHTML = `
            <td><strong>${paymentId}</strong></td>
            <td><strong>$${amount}</strong></td>
            <td>${gateway}</td>
            <td><span class="badge ${badgeClass}">${status}</span></td>
            <td>${formattedDate}</td>
        `;

        // Add to table
        tableBody.appendChild(newRow);

        // Reset form and close modal
        paymentForm.reset();
        addPaymentModal.hide();

        // Show success message
        alert('Payment added successfully!');
    });

    // Reset form when modal is closed
    document.getElementById('addPaymentModal').addEventListener('hidden.bs.modal', function() {
        paymentForm.reset();
    });

    // Special Discount functionality
    const applyDiscountBtn = document.getElementById('applyDiscountBtn');
    const specialDiscountInput = document.getElementById('specialDiscount');
    const amountDueElement = document.querySelector('.amount-due');

    if (applyDiscountBtn && specialDiscountInput && amountDueElement) {
        applyDiscountBtn.addEventListener('click', function() {
            const discountAmount = parseFloat(specialDiscountInput.value) || 0;
            const currentDue = parseFloat(amountDueElement.textContent.replace('$', '').replace(',', '')) || 0;

            if (discountAmount > 0 && discountAmount <= currentDue) {
                const newAmount = currentDue - discountAmount;
                amountDueElement.textContent = `$${newAmount.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;

                // Show success message
                alert(`Discount of $${discountAmount.toFixed(2)} applied successfully!`);

                // Reset the input
                specialDiscountInput.value = '';
            } else if (discountAmount > currentDue) {
                alert('Discount amount cannot be greater than the amount due.');
            } else {
                alert('Please enter a valid discount amount.');
            }
        });

        // Allow Enter key to apply discount
        specialDiscountInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                applyDiscountBtn.click();
            }
        });
    }

    // Feedback Tour Calendar Settings functionality
    const saveCalendarSettingsBtn = document.querySelector('.btn-submit-calendar-settings');

    if (saveCalendarSettingsBtn) {
        saveCalendarSettingsBtn.addEventListener('click', function() {
            const selectedOption = document.querySelector('input[name="feedbackCalendarLock"]:checked');

            if (selectedOption) {
                const isLocked = selectedOption.value === 'yes';
                const statusText = isLocked ? 'locked' : 'unlocked';
                const statusIcon = isLocked ? '🔒' : '🔓';

                // Here you would typically send the data to your backend
                // For now, we'll just show a confirmation message
                alert(`${statusIcon} Feedback Tour Calendar has been ${statusText} successfully!`);

                // You can add additional logic here to update the UI or send data to server
                console.log('Calendar lock status:', selectedOption.value);
            } else {
                alert('Please select a calendar lock option.');
            }
        });
    }
});
</script>

<?php include 'inc/footer.php'; ?>
