<?php include 'inc/header-guide.php'; ?>

            <!-- Overview Cards -->
            <div class="overview-cards-container mb-5">
                <div class="row g-4">
                    <!-- Tours Assigned Card -->
                    <div class="col-md-4">
                        <div class="overview-card">
                            <div class="overview-card-header">
                                <div class="overview-icon tours-icon">
                                    <img src="assets/img/ico/ico-ongoing.svg" alt="Tours" class="overview-icon-img">
                                </div>
                                <div class="overview-trend positive">
                                    <i class="bi bi-arrow-up"></i>
                                    <span>+5</span>
                                </div>
                            </div>
                            <div class="overview-card-body">
                                <h3 class="overview-number">24</h3>
                                <p class="overview-label">Tours Assigned</p>
                                <div class="overview-subtitle">
                                    <span class="text-success">3 active tours</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customers Guided Card -->
                    <div class="col-md-4">
                        <div class="overview-card">
                            <div class="overview-card-header">
                                <div class="overview-icon customers-guided-icon">
                                    <img src="assets/img/ico/ico-users.svg" alt="Customers" class="overview-icon-img">
                                </div>
                                <div class="overview-trend positive">
                                    <i class="bi bi-arrow-up"></i>
                                    <span>+12</span>
                                </div>
                            </div>
                            <div class="overview-card-body">
                                <h3 class="overview-number">156</h3>
                                <p class="overview-label">Customers Guided</p>
                                <div class="overview-subtitle">
                                    <span class="text-success">This month: 18</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Tours Card -->
                    <div class="col-md-4">
                        <div class="overview-card">
                            <div class="overview-card-header">
                                <div class="overview-icon upcoming-icon">
                                    <img src="assets/img/ico/ico-upcoming.svg" alt="Upcoming" class="overview-icon-img">
                                </div>
                                <div class="overview-trend neutral">
                                    <i class="bi bi-calendar-event"></i>
                                </div>
                            </div>
                            <div class="overview-card-body">
                                <h3 class="overview-number">7</h3>
                                <p class="overview-label">Upcoming Tours</p>
                                <div class="overview-subtitle">
                                    <span class="text-warning">Next: Tomorrow 9 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- On Going Bookings -->
            <div class="mb-4">
                <h3 class="section-title">
                    <img src="assets/img/ico/ico-ongoing.svg" alt="Ongoing" class="section-icon">
                    On Going Bookings
                </h3>
                <div class="table-container">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Tour Name</th>
                                <th>Package Details</th>
                                <th>Tour Date</th>
                                <th>Tour Guide</th>
                                <th>Customer Details</th>
                                <th>Tour Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Old Dhaka Tour
                                    <div class="text-muted order-id">Order ID: #BK001</div>
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
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Aziz Ahmed</div>
                                            <small class="text-muted">+880 1721005678</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Fahim Bakhtiar</div>
                                            <small class="text-muted">USA</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="ongoing-bookings-guide.php" class="btn btn-view-details">
                                        Details <img src="assets/img/ico/ico-map.svg" alt="">
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
                    <img src="assets/img/ico/ico-upcoming.svg" alt="Upcoming" class="section-icon">
                    Upcoming Bookings
                </h3>
                <div class="table-container">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Tour Name</th>
                                <th>Package Details</th>
                                <th>Tour Date</th>
                                <th class="text-center">Payment</th>
                                <th>Tour Guide</th>
                                <th>Customer Details</th>
                                <th>Tour Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Old Dhaka Tour
                                    <div class="text-muted order-id">Order ID: #BK001</div>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package-details.svg" alt="Package" class="table-cell-icon">
                                    2 Days, 1 Night
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    02-03 May
                                </td>
                                <td class="text-center">
                                    <div class="payment-info">
                                        <div class="payment-paid">$500 Paid</div>
                                        <div class="payment-due">$2,000 Due</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Aziz Ahmed</div>
                                            <small class="text-muted">+880 1721005678</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Fahim Bakhtiar</div>
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
                            <tr>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Sundarbans Adventure
                                    <div class="text-muted order-id">Order ID: #BK001</div>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package-details.svg" alt="Package" class="table-cell-icon">
                                    3 Days, 2 Nights
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    15-17 May
                                </td>
                                <td class="text-center">
                                    <div class="payment-info">
                                        <div class="payment-paid">$800 Paid</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Aziz Ahmed</div>
                                            <small class="text-muted">+880 1721005678</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Rahman Ahmed</div>
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
                            <tr>
                                <td>
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour" class="table-cell-icon">
                                    Cox's Bazar Beach
                                    <div class="text-muted order-id">Order ID: #BK001</div>
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-package-details.svg" alt="Package" class="table-cell-icon">
                                    4 Days, 3 Nights
                                </td>
                                <td>
                                    <img src="assets/img/ico/ico-calendar.svg" alt="Date" class="table-cell-icon">
                                    25-28 May
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
                                            <div class="fw-semibold">Aziz Ahmed</div>
                                            <small class="text-muted">+880 1721005678</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="guide-info">
                                        <img src="assets/img/avatar.jpg" alt="Guide" class="guide-avatar">
                                        <div>
                                            <div class="fw-semibold">Nasir Khan</div>
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
                        </tbody>
                    </table>
                </div>
            </div>

<?php include 'inc/footer.php'; ?>
