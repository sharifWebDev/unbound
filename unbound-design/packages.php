<?php
$page_title = 'Bangladesh Unbound - Packages Management';
$page_header = 'Packages Management';
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
                        <img src="assets/img/ico/ico-package.svg" alt="Packages" class="breadcrumb-icon">
                        Packages Management
                    </li>
                </ol>
            </nav>

            <!-- Packages Management Header -->
            <div class="packages-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="section-title mb-0">
                        <img src="assets/img/ico/ico-package.svg" alt="Packages" class="section-icon">
                        Packages Management
                    </h3>
                    <a href="create-package.php" class="btn btn-add-package">
                        <img src="assets/img/ico/ico-package.svg" alt="Add"> Add Package
                    </a>
                </div>
            </div>

            <!-- Packages Table -->
            <div class="packages-table-container">
                <table class="table packages-table">
                    <thead>
                        <tr>
                            <th>Package</th>
                            <th>Duration</th>
                            <th>Regular Price</th>
                            <th>Discounted Price</th>
                            <th>Status</th>
                            <th>Featured</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="package-row">
                            <td>
                                <div class="package-info-cell">
                                    <div class="package-image">
                                        <img src="assets/img/ico/ico-package.svg" alt="Sundarbans Adventure" class="package-img">
                                    </div>
                                    <div class="package-details">
                                        <span class="package-name">Sundarbans Adventure</span>
                                        <span class="package-description">Explore the world's largest mangrove forest</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="duration-badge">3 Days, 2 Nights</span></td>
                            <td><span class="price-regular">$299</span></td>
                            <td><span class="price-discounted">$249</span></td>
                            <td><span class="status-badge active-status">Active</span></td>
                            <td><span class="featured-badge featured">Featured</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-view-package" data-package-id="1" title="View Details">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-edit-package" data-package-id="1" title="Edit Package">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-delete-package" data-package-id="1" title="Delete Package">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="package-row">
                            <td>
                                <div class="package-info-cell">
                                    <div class="package-image">
                                        <img src="assets/img/ico/ico-package.svg" alt="Cox's Bazar Beach Tour" class="package-img">
                                    </div>
                                    <div class="package-details">
                                        <span class="package-name">Cox's Bazar Beach Tour</span>
                                        <span class="package-description">Relax at the world's longest natural beach</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="duration-badge">4 Days, 3 Nights</span></td>
                            <td><span class="price-regular">$399</span></td>
                            <td><span class="price-discounted">$349</span></td>
                            <td><span class="status-badge active-status">Active</span></td>
                            <td><span class="featured-badge">Not Featured</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-view-package" data-package-id="2" title="View Details">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-edit-package" data-package-id="2" title="Edit Package">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-delete-package" data-package-id="2" title="Delete Package">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="package-row">
                            <td>
                                <div class="package-info-cell">
                                    <div class="package-image">
                                        <img src="assets/img/ico/ico-package.svg" alt="Sylhet Tea Gardens" class="package-img">
                                    </div>
                                    <div class="package-details">
                                        <span class="package-name">Sylhet Tea Gardens</span>
                                        <span class="package-description">Discover the beauty of tea plantations</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="duration-badge">2 Days, 1 Night</span></td>
                            <td><span class="price-regular">$199</span></td>
                            <td><span class="price-discounted">$179</span></td>
                            <td><span class="status-badge inactive-status">Inactive</span></td>
                            <td><span class="featured-badge">Not Featured</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-view-package" data-package-id="3" title="View Details">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-edit-package" data-package-id="3" title="Edit Package">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-delete-package" data-package-id="3" title="Delete Package">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="package-row">
                            <td>
                                <div class="package-info-cell">
                                    <div class="package-image">
                                        <img src="assets/img/ico/ico-package.svg" alt="Chittagong Hill Tracts" class="package-img">
                                    </div>
                                    <div class="package-details">
                                        <span class="package-name">Chittagong Hill Tracts</span>
                                        <span class="package-description">Experience tribal culture and hills</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="duration-badge">5 Days, 4 Nights</span></td>
                            <td><span class="price-regular">$499</span></td>
                            <td><span class="price-discounted">$449</span></td>
                            <td><span class="status-badge active-status">Active</span></td>
                            <td><span class="featured-badge featured">Featured</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-view-package" data-package-id="4" title="View Details">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-edit-package" data-package-id="4" title="Edit Package">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-delete-package" data-package-id="4" title="Delete Package">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination-container">
                <nav aria-label="Packages pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

<?php include 'inc/footer.php'; ?>
