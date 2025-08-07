<?php
$page_title = 'Bangladesh Unbound - Payment';
$page_header = 'Payment Management';
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
                        <img src="assets/img/ico/ico-payment.svg" alt="Payment" class="breadcrumb-icon">
                        Payment Management
                    </li>
                </ol>
            </nav>

            <!-- Payment Summary Cards -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="payment-summary-card">
                        <div class="payment-summary-icon">
                            <img src="assets/img/ico/ico-payment.svg" alt="Total Paid" class="summary-icon">
                        </div>
                        <div class="payment-summary-content">
                            <h4>$4,800</h4>
                            <p>Total Paid</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="payment-summary-card pending">
                        <div class="payment-summary-icon">
                            <img src="assets/img/ico/ico-cart.svg" alt="Pending" class="summary-icon">
                        </div>
                        <div class="payment-summary-content">
                            <h4>$1,700</h4>
                            <p>Pending Payment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="payment-summary-card refunded">
                        <div class="payment-summary-icon">
                            <img src="assets/img/ico/ico-status.svg" alt="Refunded" class="summary-icon">
                        </div>
                        <div class="payment-summary-content">
                            <h4>$2,500</h4>
                            <p>Refunded</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search and Filter Section for Pending Payments -->
            <div class="search-filter-container mb-4">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="search-box">
                            <input type="text" class="form-control" id="searchPendingPayments" placeholder="Search by Order ID, Customer, Tour Name...">
                            <i class="bi bi-search search-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="paymentMethodFilter">
                            <option value="">All Methods</option>
                            <option value="card">Credit Card</option>
                            <option value="bank">Bank Transfer</option>
                            <option value="mobile">Mobile Banking</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="dueDateFilter">
                            <option value="">All Due Dates</option>
                            <option value="overdue">Overdue</option>
                            <option value="today">Due Today</option>
                            <option value="week">Due This Week</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="pendingEntriesPerPage">
                            <option value="10">10 per page</option>
                            <option value="25">25 per page</option>
                            <option value="50">50 per page</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-search" id="pendingSearchButton">
                            <i class="bi bi-search"></i> Search
                        </button>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-outline-secondary" id="clearPendingFilters">
                            <i class="bi bi-arrow-clockwise"></i> Clear
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pending Payments -->
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="section-title mb-0">
                        <img src="assets/img/ico/ico-cart.svg" alt="Pending" class="section-icon">
                        Pending Payments
                    </h3>
                    <div class="results-info">
                        <span class="text-muted">Showing <span id="pendingShowingStart">1</span>-<span id="pendingShowingEnd">2</span> of <span id="pendingTotalResults">2</span> results</span>
                    </div>
                </div>
                <div class="table-container" id="pendingPaymentsTable">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Details</th>
                                <th>Tour Name</th>
                                <th>Due Date</th>
                                <th class="text-center">Amount Due</th>
                                <th>Payment Method</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>#BK002</strong>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Aziz Ahmed</div>
                                            <small class="text-muted">USA</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Sundarbans Adventure
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    10 May 2024
                                </td>
                                <td class="text-center">
                                    <div class="payment-paid">$200</div>
                                    <div class="payment-due">$1,200</div>
                                </td>
                                <td>
                                    <select class="form-select payment-method-select">
                                        <option value="card">Credit Card</option>
                                        <option value="bank">Bank Transfer</option>
                                        <option value="mobile">Mobile Banking</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-pay-now">
                                        Add Payment <img src="assets/img/ico/ico-cart.svg" alt="">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>#BK003</strong>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Aziz Ahmed</div>
                                            <small class="text-muted">USA</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Cox's Bazar Beach
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    20 May 2024
                                </td>
                                <td class="text-center">
                                    <div class="payment-paid">$800</div>
                                    <div class="payment-due">$500</div>
                                </td>
                                <td>
                                    <select class="form-select payment-method-select">
                                        <option value="card">Credit Card</option>
                                        <option value="bank">Bank Transfer</option>
                                        <option value="mobile">Mobile Banking</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-pay-now">
                                        Add Payment <img src="assets/img/ico/ico-cart.svg" alt="">
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination for Pending Payments -->
                <div class="pagination-container pagination-container-padding">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="pagination-info">
                                <span class="text-muted">Showing <span id="pendingPaginationStart">1</span> to <span id="pendingPaginationEnd">2</span> of <span id="pendingPaginationTotal">2</span> entries</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="Pending payments pagination">
                                <ul class="pagination justify-content-end mb-0" id="pendingPaginationControls">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" id="pendingPrevPage">
                                            <i class="bi bi-chevron-left"></i> Previous
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#" data-page="1">1</a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" id="pendingNextPage">
                                            Next <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search and Filter Section for Payment History -->
            <div class="search-filter-container mb-4">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="search-box">
                            <input type="text" class="form-control" id="searchPaymentHistory" placeholder="Search by Transaction ID, Order ID, Tour Name...">
                            <i class="bi bi-search search-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="historyPaymentMethodFilter">
                            <option value="">All Methods</option>
                            <option value="credit card">Credit Card</option>
                            <option value="bank transfer">Bank Transfer</option>
                            <option value="mobile banking">Mobile Banking</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="historyStatusFilter">
                            <option value="">All Status</option>
                            <option value="completed">Completed</option>
                            <option value="refunded">Refunded</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="historyEntriesPerPage">
                            <option value="10">10 per page</option>
                            <option value="25">25 per page</option>
                            <option value="50">50 per page</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-search" id="historySearchButton">
                            <i class="bi bi-search"></i> Search
                        </button>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-outline-secondary" id="clearHistoryFilters">
                            <i class="bi bi-arrow-clockwise"></i> Clear
                        </button>
                    </div>
                </div>
            </div>

            <!-- Payment History -->
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="section-title mb-0">
                        <img src="assets/img/ico/ico-status.svg" alt="History" class="section-icon">
                        Payment History
                    </h3>
                    <div class="results-info">
                        <span class="text-muted">Showing <span id="historyShowingStart">1</span>-<span id="historyShowingEnd">5</span> of <span id="historyTotalResults">5</span> results</span>
                    </div>
                </div>
                <div class="table-container" id="paymentHistoryTable">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Order ID</th>
                                <th>Tour Name</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                                <th>Receipt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>#TXN001</strong>
                                </td>
                                <td>
                                    <strong>#BK001</strong>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Old Dhaka Tour
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    25 Apr 2024
                                </td>
                                <td>
                                    <span class="payment-paid">$1,500</span>
                                </td>
                                <td>Credit Card</td>
                                <td>
                                    <span class="badge bg-success">Completed</span>
                                </td>
                                <td>
                                    <a href="receipt.php?txn=TXN001" class="btn btn-download-receipt">
                                        <img src="assets/img/ico/ico-map.svg" alt="Download">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>#TXN002</strong>
                                </td>
                                <td>
                                    <strong>#BK002</strong>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Sundarbans Adventure
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    28 Apr 2024
                                </td>
                                <td>
                                    <span class="payment-paid">$800</span>
                                </td>
                                <td>Bank Transfer</td>
                                <td>
                                    <span class="badge bg-success">Completed</span>
                                </td>
                                <td>
                                    <a href="receipt.php?txn=TXN002" class="btn btn-download-receipt">
                                        <img src="assets/img/ico/ico-map.svg" alt="Download">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>#TXN003</strong>
                                </td>
                                <td>
                                    <strong>#BK003</strong>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Cox's Bazar Beach
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    30 Apr 2024
                                </td>
                                <td>
                                    <span class="payment-paid">$1,500</span>
                                </td>
                                <td>Mobile Banking</td>
                                <td>
                                    <span class="badge bg-success">Completed</span>
                                </td>
                                <td>
                                    <a href="receipt.php?txn=TXN003" class="btn btn-download-receipt">
                                        <img src="assets/img/ico/ico-map.svg" alt="Download">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>#TXN004</strong>
                                </td>
                                <td>
                                    <strong>#BK004</strong>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Sylhet Tea Gardens
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    15 Apr 2024
                                </td>
                                <td>
                                    <span class="payment-paid">$1,200</span>
                                </td>
                                <td>Credit Card</td>
                                <td>
                                    <span class="badge bg-success">Completed</span>
                                </td>
                                <td>
                                    <a href="receipt.php?txn=TXN004" class="btn btn-download-receipt">
                                        <img src="assets/img/ico/ico-map.svg" alt="Download">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>#TXN005</strong>
                                </td>
                                <td>
                                    <strong>#BK005</strong>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Chittagong Hill Tracts
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    05 May 2024
                                </td>
                                <td>
                                    <span class="payment-refunded">$2,500</span>
                                </td>
                                <td>Credit Card</td>
                                <td>
                                    <span class="badge bg-danger">Refunded</span>
                                </td>
                                <td>
                                    <a href="receipt.php?txn=TXN005" class="btn btn-download-receipt">
                                        <img src="assets/img/ico/ico-map.svg" alt="Download">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination for Payment History -->
                <div class="pagination-container pagination-container-padding">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="pagination-info">
                                <span class="text-muted">Showing <span id="historyPaginationStart">1</span> to <span id="historyPaginationEnd">5</span> of <span id="historyPaginationTotal">5</span> entries</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="Payment history pagination">
                                <ul class="pagination justify-content-end mb-0" id="historyPaginationControls">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" id="historyPrevPage">
                                            <i class="bi bi-chevron-left"></i> Previous
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#" data-page="1">1</a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" id="historyNextPage">
                                            Next <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Pending Payments functionality
    const pendingSearchInput = document.getElementById('searchPendingPayments');
    const paymentMethodFilter = document.getElementById('paymentMethodFilter');
    const dueDateFilter = document.getElementById('dueDateFilter');
    const pendingEntriesPerPage = document.getElementById('pendingEntriesPerPage');
    const clearPendingFilters = document.getElementById('clearPendingFilters');
    const pendingTableRows = document.querySelectorAll('#pendingPaymentsTable tbody tr');

    let pendingCurrentPage = 1;
    let pendingItemsPerPage = 10;
    let pendingFilteredRows = Array.from(pendingTableRows);

    // Payment History functionality
    const historySearchInput = document.getElementById('searchPaymentHistory');
    const historyPaymentMethodFilter = document.getElementById('historyPaymentMethodFilter');
    const historyStatusFilter = document.getElementById('historyStatusFilter');
    const historyEntriesPerPage = document.getElementById('historyEntriesPerPage');
    const clearHistoryFilters = document.getElementById('clearHistoryFilters');
    const historyTableRows = document.querySelectorAll('#paymentHistoryTable tbody tr');

    let historyCurrentPage = 1;
    let historyItemsPerPage = 10;
    let historyFilteredRows = Array.from(historyTableRows);

    // Pending Payments Search functionality
    function performPendingSearch() {
        const searchTerm = pendingSearchInput.value.toLowerCase();
        const methodValue = paymentMethodFilter.value.toLowerCase();
        const dueDateValue = dueDateFilter.value.toLowerCase();

        pendingFilteredRows = Array.from(pendingTableRows).filter(row => {
            const orderID = row.querySelector('td:first-child').textContent.toLowerCase();
            const customerName = row.querySelector('td:nth-child(2) .fw-semibold').textContent.toLowerCase();
            const tourName = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
            const paymentMethod = row.querySelector('.payment-method-select').value.toLowerCase();
            const dueDate = row.querySelector('td:nth-child(4)').textContent.toLowerCase();

            // Search filter
            const matchesSearch = !searchTerm ||
                orderID.includes(searchTerm) ||
                customerName.includes(searchTerm) ||
                tourName.includes(searchTerm);

            // Payment method filter
            const matchesMethod = !methodValue || paymentMethod.includes(methodValue);

            // Due date filter (simplified - in real app would use actual date comparison)
            let matchesDueDate = true;
            if (dueDateValue) {
                // This is a simplified implementation
                matchesDueDate = true; // Would implement actual date logic here
            }

            return matchesSearch && matchesMethod && matchesDueDate;
        });

        pendingCurrentPage = 1;
        updatePendingDisplay();
        updatePendingPagination();
    }

    // Payment History Search functionality
    function performHistorySearch() {
        const searchTerm = historySearchInput.value.toLowerCase();
        const methodValue = historyPaymentMethodFilter.value.toLowerCase();
        const statusValue = historyStatusFilter.value.toLowerCase();

        historyFilteredRows = Array.from(historyTableRows).filter(row => {
            const transactionID = row.querySelector('td:first-child').textContent.toLowerCase();
            const orderID = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
            const tourName = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
            const paymentMethod = row.querySelector('td:nth-child(6)').textContent.toLowerCase();
            const status = row.querySelector('.badge').textContent.toLowerCase();

            // Search filter
            const matchesSearch = !searchTerm ||
                transactionID.includes(searchTerm) ||
                orderID.includes(searchTerm) ||
                tourName.includes(searchTerm);

            // Payment method filter
            const matchesMethod = !methodValue || paymentMethod.includes(methodValue);

            // Status filter
            const matchesStatus = !statusValue || status.includes(statusValue);

            return matchesSearch && matchesMethod && matchesStatus;
        });

        historyCurrentPage = 1;
        updateHistoryDisplay();
        updateHistoryPagination();
    }

    // Update Pending Payments display
    function updatePendingDisplay() {
        pendingItemsPerPage = parseInt(pendingEntriesPerPage.value);
        const startIndex = (pendingCurrentPage - 1) * pendingItemsPerPage;
        const endIndex = startIndex + pendingItemsPerPage;

        // Hide all rows
        pendingTableRows.forEach(row => row.style.display = 'none');

        // Show filtered rows for current page
        pendingFilteredRows.slice(startIndex, endIndex).forEach(row => {
            row.style.display = '';
        });

        // Update results info
        const totalResults = pendingFilteredRows.length;
        const showingStart = totalResults > 0 ? startIndex + 1 : 0;
        const showingEnd = Math.min(endIndex, totalResults);

        document.getElementById('pendingShowingStart').textContent = showingStart;
        document.getElementById('pendingShowingEnd').textContent = showingEnd;
        document.getElementById('pendingTotalResults').textContent = totalResults;
        document.getElementById('pendingPaginationStart').textContent = showingStart;
        document.getElementById('pendingPaginationEnd').textContent = showingEnd;
        document.getElementById('pendingPaginationTotal').textContent = totalResults;
    }

    // Update Payment History display
    function updateHistoryDisplay() {
        historyItemsPerPage = parseInt(historyEntriesPerPage.value);
        const startIndex = (historyCurrentPage - 1) * historyItemsPerPage;
        const endIndex = startIndex + historyItemsPerPage;

        // Hide all rows
        historyTableRows.forEach(row => row.style.display = 'none');

        // Show filtered rows for current page
        historyFilteredRows.slice(startIndex, endIndex).forEach(row => {
            row.style.display = '';
        });

        // Update results info
        const totalResults = historyFilteredRows.length;
        const showingStart = totalResults > 0 ? startIndex + 1 : 0;
        const showingEnd = Math.min(endIndex, totalResults);

        document.getElementById('historyShowingStart').textContent = showingStart;
        document.getElementById('historyShowingEnd').textContent = showingEnd;
        document.getElementById('historyTotalResults').textContent = totalResults;
        document.getElementById('historyPaginationStart').textContent = showingStart;
        document.getElementById('historyPaginationEnd').textContent = showingEnd;
        document.getElementById('historyPaginationTotal').textContent = totalResults;
    }

    // Update Pending Payments pagination
    function updatePendingPagination() {
        const totalPages = Math.ceil(pendingFilteredRows.length / pendingItemsPerPage);
        const paginationControls = document.getElementById('pendingPaginationControls');

        // Clear existing pagination
        paginationControls.innerHTML = '';

        // Previous button
        const prevLi = document.createElement('li');
        prevLi.className = `page-item ${pendingCurrentPage === 1 ? 'disabled' : ''}`;
        prevLi.innerHTML = `<a class="page-link" href="#" id="pendingPrevPage"><i class="bi bi-chevron-left"></i> Previous</a>`;
        paginationControls.appendChild(prevLi);

        // Page numbers
        const startPage = Math.max(1, pendingCurrentPage - 2);
        const endPage = Math.min(totalPages, pendingCurrentPage + 2);

        for (let i = startPage; i <= endPage; i++) {
            const pageLi = document.createElement('li');
            pageLi.className = `page-item ${i === pendingCurrentPage ? 'active' : ''}`;
            pageLi.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
            paginationControls.appendChild(pageLi);
        }

        // Next button
        const nextLi = document.createElement('li');
        nextLi.className = `page-item ${pendingCurrentPage === totalPages || totalPages === 0 ? 'disabled' : ''}`;
        nextLi.innerHTML = `<a class="page-link" href="#" id="pendingNextPage">Next <i class="bi bi-chevron-right"></i></a>`;
        paginationControls.appendChild(nextLi);

        // Add event listeners
        paginationControls.addEventListener('click', function(e) {
            e.preventDefault();
            const target = e.target.closest('a');
            if (!target || target.closest('.disabled')) return;

            if (target.id === 'pendingPrevPage') {
                if (pendingCurrentPage > 1) {
                    pendingCurrentPage--;
                    updatePendingDisplay();
                    updatePendingPagination();
                }
            } else if (target.id === 'pendingNextPage') {
                if (pendingCurrentPage < totalPages) {
                    pendingCurrentPage++;
                    updatePendingDisplay();
                    updatePendingPagination();
                }
            } else if (target.dataset.page) {
                pendingCurrentPage = parseInt(target.dataset.page);
                updatePendingDisplay();
                updatePendingPagination();
            }
        });
    }

    // Update Payment History pagination
    function updateHistoryPagination() {
        const totalPages = Math.ceil(historyFilteredRows.length / historyItemsPerPage);
        const paginationControls = document.getElementById('historyPaginationControls');

        // Clear existing pagination
        paginationControls.innerHTML = '';

        // Previous button
        const prevLi = document.createElement('li');
        prevLi.className = `page-item ${historyCurrentPage === 1 ? 'disabled' : ''}`;
        prevLi.innerHTML = `<a class="page-link" href="#" id="historyPrevPage"><i class="bi bi-chevron-left"></i> Previous</a>`;
        paginationControls.appendChild(prevLi);

        // Page numbers
        const startPage = Math.max(1, historyCurrentPage - 2);
        const endPage = Math.min(totalPages, historyCurrentPage + 2);

        for (let i = startPage; i <= endPage; i++) {
            const pageLi = document.createElement('li');
            pageLi.className = `page-item ${i === historyCurrentPage ? 'active' : ''}`;
            pageLi.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
            paginationControls.appendChild(pageLi);
        }

        // Next button
        const nextLi = document.createElement('li');
        nextLi.className = `page-item ${historyCurrentPage === totalPages || totalPages === 0 ? 'disabled' : ''}`;
        nextLi.innerHTML = `<a class="page-link" href="#" id="historyNextPage">Next <i class="bi bi-chevron-right"></i></a>`;
        paginationControls.appendChild(nextLi);

        // Add event listeners
        paginationControls.addEventListener('click', function(e) {
            e.preventDefault();
            const target = e.target.closest('a');
            if (!target || target.closest('.disabled')) return;

            if (target.id === 'historyPrevPage') {
                if (historyCurrentPage > 1) {
                    historyCurrentPage--;
                    updateHistoryDisplay();
                    updateHistoryPagination();
                }
            } else if (target.id === 'historyNextPage') {
                if (historyCurrentPage < totalPages) {
                    historyCurrentPage++;
                    updateHistoryDisplay();
                    updateHistoryPagination();
                }
            } else if (target.dataset.page) {
                historyCurrentPage = parseInt(target.dataset.page);
                updateHistoryDisplay();
                updateHistoryPagination();
            }
        });
    }

    // Event listeners for Pending Payments
    pendingSearchInput.addEventListener('input', performPendingSearch);
    paymentMethodFilter.addEventListener('change', performPendingSearch);
    dueDateFilter.addEventListener('change', performPendingSearch);
    pendingEntriesPerPage.addEventListener('change', function() {
        pendingCurrentPage = 1;
        updatePendingDisplay();
        updatePendingPagination();
    });

    // Pending Search button event listener
    document.getElementById('pendingSearchButton').addEventListener('click', function() {
        performPendingSearch();
    });

    clearPendingFilters.addEventListener('click', function() {
        pendingSearchInput.value = '';
        paymentMethodFilter.value = '';
        dueDateFilter.value = '';
        pendingEntriesPerPage.value = '10';
        performPendingSearch();
    });

    // Event listeners for Payment History
    historySearchInput.addEventListener('input', performHistorySearch);
    historyPaymentMethodFilter.addEventListener('change', performHistorySearch);
    historyStatusFilter.addEventListener('change', performHistorySearch);
    historyEntriesPerPage.addEventListener('change', function() {
        historyCurrentPage = 1;
        updateHistoryDisplay();
        updateHistoryPagination();
    });

    // History Search button event listener
    document.getElementById('historySearchButton').addEventListener('click', function() {
        performHistorySearch();
    });

    clearHistoryFilters.addEventListener('click', function() {
        historySearchInput.value = '';
        historyPaymentMethodFilter.value = '';
        historyStatusFilter.value = '';
        historyEntriesPerPage.value = '10';
        performHistorySearch();
    });

    // Initialize both sections
    updatePendingDisplay();
    updatePendingPagination();
    updateHistoryDisplay();
    updateHistoryPagination();
});
</script>

<?php include 'inc/footer.php'; ?>
