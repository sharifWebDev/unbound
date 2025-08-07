<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Bangladesh Unbound - Dashboard'; ?></title>
    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5.3.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <a href="dashboard.php">
                <img src="assets/img/logo.png" alt="Bangladesh Unbound" class="img-fluid">
            </a>
        </div>
        <nav class="nav flex-column">
            <?php
            $current_page = basename($_SERVER['PHP_SELF']);
    ?>
            <a class="nav-link <?php echo ($current_page == 'dashboard-admin.php') ? 'active' : ''; ?>" href="dashboard-admin.php"><img src="assets/img/ico/ico-dashboard.svg" alt=""> Dashboard</a>
            <a class="nav-link <?php echo ($current_page == 'bookings-admin.php') ? 'active' : ''; ?>" href="bookings-admin.php"><img src="assets/img/ico/ico-bookings.svg" alt=""> Bookings</a>
            <a class="nav-link <?php echo ($current_page == 'payment-admin.php') ? 'active' : ''; ?>" href="payment-admin.php"><img src="assets/img/ico/ico-payment.svg" alt=""> Payment</a>
            <a class="nav-link <?php echo ($current_page == 'coupons.php') ? 'active' : ''; ?>" href="coupons.php"><img src="assets/img/ico/ico-coupons.svg" alt=""> Coupons</a>
            <a class="nav-link <?php echo ($current_page == 'packages.php') ? 'active' : ''; ?>" href="packages.php"><img src="assets/img/ico/ico-packages.svg" alt=""> Packages</a>
            <a class="nav-link <?php echo ($current_page == 'users.php') ? 'active' : ''; ?>" href="users.php"><img src="assets/img/ico/ico-users.svg" alt=""> Users</a>
            <a class="nav-link <?php echo ($current_page == 'profile-admin.php') ? 'active' : ''; ?>" href="profile-admin.php"><img src="assets/img/ico/ico-profile.svg" alt=""> Profile</a>
            <a class="nav-link" href="login.php"><img src="assets/img/ico/ico-logout.svg" alt=""> Logout</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Header -->
        <div class="top-header">
            <h2 class="mb-0"><?php echo isset($page_header) ? $page_header : 'Dashboard'; ?></h2>
            <div class="user-profile">
                <span>Hello,<br><strong>Nasim</strong></span>
                <img src="assets/img/avatar.jpg" alt="User Avatar" class="user-avatar">
            </div>
        </div>

        <!-- Content Area -->
        <div class="content-area">
