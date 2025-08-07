<?php
$page_title = 'Bangladesh Unbound - Bookings';
$page_header = 'All Bookings';
include 'inc/header-guide.php';
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
                        <img src="assets/img/ico/ico-bookings.svg" alt="Bookings" class="breadcrumb-icon">
                        All Bookings
                    </li>
                </ol>
            </nav>

            <!-- Search and Filter Section -->
            <div class="search-filter-container mb-4">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="search-box">
                            <input type="text" class="form-control" id="searchBookings" placeholder="Search by Order ID, Tour Name, Customer...">
                            <i class="bi bi-search search-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="statusFilter">
                            <option value="">All Status</option>
                            <option value="ongoing">Ongoing</option>
                            <option value="upcoming">Upcoming</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="paymentFilter">
                            <option value="">All Payments</option>
                            <option value="paid">Fully Paid</option>
                            <option value="partial">Partially Paid</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="entriesPerPage">
                            <option value="10">10 per page</option>
                            <option value="25">25 per page</option>
                            <option value="50">50 per page</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-search" id="searchButton">
                            <i class="bi bi-search"></i> Search
                        </button>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-outline-secondary" id="clearFilters">
                            <i class="bi bi-arrow-clockwise"></i> Clear
                        </button>
                    </div>
                </div>
            </div>

            <!-- All Bookings -->
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="section-title mb-0">
                        <img src="assets/img/ico/ico-bookings.svg" alt="Bookings" class="section-icon">
                        All Bookings
                    </h3>
                    <div class="results-info">
                        <span class="text-muted">Showing <span id="showingStart">1</span>-<span id="showingEnd">5</span> of <span id="totalResults">5</span> results</span>
                    </div>
                </div>
                <div class="table-container">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Tour Name</th>
                                <th>Package Details</th>
                                <th>Tour Date</th>
                                <th>Status</th>
                                <th class="text-center">Payment</th>
                                <th>Tour Guide</th>
                                <th>Customer Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ongoing Booking -->
                            <tr>
                                <td>
                                    <strong>#BK001</strong>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Old Dhaka Tour
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package-details.svg" alt="Package" class="table-cell-icon">
                                    2 Days, 1 Night
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    02-03 May
                                </td>
                                <td>
                                    <span class="badge bg-success">Ongoing</span>
                                </td>
                                <td class="text-center">
                                    <div class="payment-info">
                                        <div class="payment-paid">$1,500 Paid</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Rahman Ahmed</div>
                                            <small class="text-muted">+880 1721005678</small>
                                        </div>
                                    </div>
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
                                    <button class="btn btn-view-details">
                                        Details <img src="assets/img/ico/ico-map.svg" alt="">
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Upcoming Booking 1 -->
                            <tr>
                                <td>
                                    <strong>#BK002</strong>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Sundarbans Adventure
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package-details.svg" alt="Package" class="table-cell-icon">
                                    3 Days, 2 Nights
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    15-17 May
                                </td>
                                <td>
                                    <span class="badge bg-primary">Upcoming</span>
                                </td>
                                <td class="text-center">
                                    <div class="payment-info">
                                        <div class="payment-paid">$800 Paid</div>
                                        <div class="payment-due">$1,200 Due</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Rahman Ahmed</div>
                                            <small class="text-muted">+880 1721005678</small>
                                        </div>
                                    </div>
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
                                    <button class="btn btn-view-details">
                                        Details <img src="assets/img/ico/ico-map.svg" alt="">
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Upcoming Booking 2 -->
                            <tr>
                                <td>
                                    <strong>#BK003</strong>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Cox's Bazar Beach
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package-details.svg" alt="Package" class="table-cell-icon">
                                    4 Days, 3 Nights
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    25-28 May
                                </td>
                                <td>
                                    <span class="badge bg-primary">Upcoming</span>
                                </td>
                                <td class="text-center">
                                    <div class="payment-info">
                                        <div class="payment-paid">$1,500 Paid</div>
                                        <div class="payment-due">$500 Due</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Sarah Khan</div>
                                            <small class="text-muted">+880 1721005679</small>
                                        </div>
                                    </div>
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
                                    <button class="btn btn-view-details">
                                        Details <img src="assets/img/ico/ico-map.svg" alt="">
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Completed Booking -->
                            <tr>
                                <td>
                                    <strong>#BK004</strong>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Sylhet Tea Gardens
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package-details.svg" alt="Package" class="table-cell-icon">
                                    2 Days, 1 Night
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    20-21 Apr
                                </td>
                                <td>
                                    <span class="badge bg-secondary">Completed</span>
                                </td>
                                <td class="text-center">
                                    <div class="payment-info">
                                        <div class="payment-paid">$1,200 Paid</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Ahmed Hassan</div>
                                            <small class="text-muted">+880 1721005680</small>
                                        </div>
                                    </div>
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
                                    <button class="btn btn-view-details">
                                        Details <img src="assets/img/ico/ico-map.svg" alt="">
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Cancelled Booking -->
                            <tr>
                                <td>
                                    <strong>#BK005</strong>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Chittagong Hill Tracts
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package-details.svg" alt="Package" class="table-cell-icon">
                                    5 Days, 4 Nights
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    10-14 Jun
                                </td>
                                <td>
                                    <span class="badge bg-danger">Cancelled</span>
                                </td>
                                <td class="text-center">
                                    <div class="payment-info">
                                        <div class="payment-due">Refunded</div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">-</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination-container pagination-container-padding">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="pagination-info">
                                <span class="text-muted">Showing <span id="paginationStart">1</span> to <span id="paginationEnd">5</span> of <span id="paginationTotal">5</span> entries</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="Bookings pagination">
                                <ul class="pagination justify-content-end mb-0" id="paginationControls">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" id="prevPage">
                                            <i class="bi bi-chevron-left"></i> Previous
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#" data-page="1">1</a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" id="nextPage">
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
    // Search and filter functionality
    const searchInput = document.getElementById('searchBookings');
    const statusFilter = document.getElementById('statusFilter');
    const paymentFilter = document.getElementById('paymentFilter');
    const entriesPerPage = document.getElementById('entriesPerPage');
    const searchButton = document.getElementById('searchButton');
    const clearFilters = document.getElementById('clearFilters');
    const tableRows = document.querySelectorAll('tbody tr');

    let currentPage = 1;
    let itemsPerPage = 10;
    let filteredRows = Array.from(tableRows);

    // Search functionality
    function performSearch() {
        const searchTerm = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value.toLowerCase();
        const paymentValue = paymentFilter.value.toLowerCase();

        filteredRows = Array.from(tableRows).filter(row => {
            const orderID = row.querySelector('td:first-child').textContent.toLowerCase();
            const tourName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
            const customerName = row.querySelector('td:nth-child(8) .fw-semibold')?.textContent.toLowerCase() || '';
            const status = row.querySelector('.badge').textContent.toLowerCase();
            const paymentInfo = row.querySelector('.payment-info').textContent.toLowerCase();

            // Search filter
            const matchesSearch = !searchTerm ||
                orderID.includes(searchTerm) ||
                tourName.includes(searchTerm) ||
                customerName.includes(searchTerm);

            // Status filter
            const matchesStatus = !statusValue || status.includes(statusValue);

            // Payment filter
            let matchesPayment = true;
            if (paymentValue) {
                if (paymentValue === 'paid') {
                    matchesPayment = paymentInfo.includes('paid') && !paymentInfo.includes('due');
                } else if (paymentValue === 'partial') {
                    matchesPayment = paymentInfo.includes('due');
                }
            }

            return matchesSearch && matchesStatus && matchesPayment;
        });

        currentPage = 1;
        updateDisplay();
        updatePagination();
    }

    // Update table display
    function updateDisplay() {
        itemsPerPage = parseInt(entriesPerPage.value);
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        // Hide all rows
        tableRows.forEach(row => row.style.display = 'none');

        // Show filtered rows for current page
        filteredRows.slice(startIndex, endIndex).forEach(row => {
            row.style.display = '';
        });

        // Update results info
        const totalResults = filteredRows.length;
        const showingStart = totalResults > 0 ? startIndex + 1 : 0;
        const showingEnd = Math.min(endIndex, totalResults);

        document.getElementById('showingStart').textContent = showingStart;
        document.getElementById('showingEnd').textContent = showingEnd;
        document.getElementById('totalResults').textContent = totalResults;
        document.getElementById('paginationStart').textContent = showingStart;
        document.getElementById('paginationEnd').textContent = showingEnd;
        document.getElementById('paginationTotal').textContent = totalResults;
    }

    // Update pagination controls
    function updatePagination() {
        const totalPages = Math.ceil(filteredRows.length / itemsPerPage);
        const paginationControls = document.getElementById('paginationControls');

        // Clear existing pagination
        paginationControls.innerHTML = '';

        // Previous button
        const prevLi = document.createElement('li');
        prevLi.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
        prevLi.innerHTML = `<a class="page-link" href="#" id="prevPage"><i class="bi bi-chevron-left"></i> Previous</a>`;
        paginationControls.appendChild(prevLi);

        // Page numbers
        const startPage = Math.max(1, currentPage - 2);
        const endPage = Math.min(totalPages, currentPage + 2);

        for (let i = startPage; i <= endPage; i++) {
            const pageLi = document.createElement('li');
            pageLi.className = `page-item ${i === currentPage ? 'active' : ''}`;
            pageLi.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
            paginationControls.appendChild(pageLi);
        }

        // Next button
        const nextLi = document.createElement('li');
        nextLi.className = `page-item ${currentPage === totalPages || totalPages === 0 ? 'disabled' : ''}`;
        nextLi.innerHTML = `<a class="page-link" href="#" id="nextPage">Next <i class="bi bi-chevron-right"></i></a>`;
        paginationControls.appendChild(nextLi);

        // Add event listeners
        paginationControls.addEventListener('click', function(e) {
            e.preventDefault();
            const target = e.target.closest('a');
            if (!target || target.closest('.disabled')) return;

            if (target.id === 'prevPage') {
                if (currentPage > 1) {
                    currentPage--;
                    updateDisplay();
                    updatePagination();
                }
            } else if (target.id === 'nextPage') {
                if (currentPage < totalPages) {
                    currentPage++;
                    updateDisplay();
                    updatePagination();
                }
            } else if (target.dataset.page) {
                currentPage = parseInt(target.dataset.page);
                updateDisplay();
                updatePagination();
            }
        });
    }

    // Event listeners
    searchInput.addEventListener('input', performSearch);
    statusFilter.addEventListener('change', performSearch);
    paymentFilter.addEventListener('change', performSearch);
    entriesPerPage.addEventListener('change', function() {
        currentPage = 1;
        updateDisplay();
        updatePagination();
    });

    searchButton.addEventListener('click', performSearch);

    clearFilters.addEventListener('click', function() {
        searchInput.value = '';
        statusFilter.value = '';
        paymentFilter.value = '';
        entriesPerPage.value = '10';
        performSearch();
    });

    // Initialize
    updateDisplay();
    updatePagination();
});
</script>

<?php include 'inc/footer.php'; ?>
