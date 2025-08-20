@extends('layouts.app')
@section('title', 'Bangladesh Unbound - Packages Management')
@section('page-title', 'Packages Management')
@section('breadcrumb')
    <nav class="breadcrumb-container" aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('backend/img/ico/ico-dashboard.svg') }}" alt="Dashboard" class="breadcrumb-icon">
                    Dashboard
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <img src="{{ asset('backend/img/ico/ico-package.svg') }}" alt="Packages" class="breadcrumb-icon">
                Packages Management
            </li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="packages-header">
        <div class="d-flex align-items-center justify-content-between">
            <h3 class="mb-0 section-title">
                <img src="{{ asset('backend/img/ico/ico-package.svg') }}" alt="Packages" class="section-icon">
                Packages Management
            </h3>
            <div class="d-flex align-items-center gap-2">

                <form class="pb-0 mb-0" id="sort_tour_packages" action="" method="GET">
                    <div class="py-0 my-0 input-group">
                        <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                            id="inputGroupFile02" placeholder="Search...">
                        <i class="bi bi-search search-icon me-3"></i>

                        <button type="submit" class="btn btn-success input-group-text" for="inputGroupFile02"><i
                                class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <a href="{{ route('admin.tour_packages.create') }}" class="btn btn-add-package">
                    <img src="{{ asset('backend/img/ico/ico-package.svg') }}" alt="Add"> Add Package
                </a>
            </div>
        </div>
    </div>



    <div class="p-0 card-body">

        @include('admin.tour_packages.partials.tour_packages_table')


        <!-- Pagination -->
        <div class="pagination-container d-flex">
            @include('admin.tour_packages.partials.pagination-info')
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
    </div>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function updateQueryString() {
            var perPage = document.getElementById('per_page').value;
            var currentUrl = window.location.href;
            var url = new URL(currentUrl);
            var searchParams = new URLSearchParams(url.search);
            searchParams.set('per_page', perPage);
            window.location.href = url.pathname + '?' + searchParams.toString();
        }

        // Function to fetch data and update the table body
        function fetchDataAndPopulateTable() {
            document.addEventListener('DOMContentLoaded', function() {
                const table = document.getElementById('datatable');
                const tableRow = table.querySelector('tr');

                // Display loading animation
                if (tableRow) {
                    const loadingDiv =
                        '<div id="loading-animation1" style="display: block; font-size: 50px; height: 100px; padding: 100px;"><i class="fas fa-spinner fa-spin"></i></div>';
                    tableRow.appendChild(loadingDiv);
                    setTimeout(function() {

                    }, 2500);
                }
            });
        }

        fetchDataAndPopulateTable();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const statusToggles = document.querySelectorAll('.status-toggle');

            statusToggles.forEach(toggle => {
                toggle.addEventListener('change', async function() {
                    const dataId = this.dataset.id;
                    const fieldName = this.name;
                    const newStatus = this.checked ? 1 : 0;

                    const route = `/admin/toggle-status/${dataId}`;

                    if (confirm(
                            `Are you sure you want to change the status to ${newStatus == 1 ? 'Active' : 'In-Active'}?`
                        )) {
                        try {
                            const response = await axios.post(route, {
                                status: newStatus,
                                url: window.location.href,
                                columnName: fieldName
                            }, {
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                }
                            });

                            if (response.data.success) {
                                const badge = this.closest('tr').querySelector(
                                    `.badge-${fieldName}`);
                                badge.className = newStatus == 1 ?
                                    'badge badge-success badge-${fieldName}' :
                                    'badge badge-danger badge-${fieldName}';
                                badge.textContent = newStatus == 1 ? 'Active' : 'In-Active';
                                alert('Changed status.');
                            } else {
                                alert('Failed to change status');
                            }
                        } catch (error) {
                            if (error.response) {
                                console.error('Server Error:', error.response.data);
                                alert('Failed to change status: Server Error');
                            } else if (error.request) {

                                console.error('Network Error:', error.request);
                                alert('Failed to change status: Network Error');
                            } else {
                                console.error('Error:', error.message);
                                alert('Failed to change status: ' + error.message);
                            }
                        }
                    } else {
                        this.checked = !this.checked;
                    }
                });
            });
        });
    </script>
@endsection
