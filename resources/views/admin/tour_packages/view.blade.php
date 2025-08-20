@extends('layouts.app')
@section('title', 'Bangladesh Unbound - View Package')
@section('page-title', 'View Package')
@push('styles')
    <!-- Quill.js CSS -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">

    <style>
        .rich-text-editor {
            min-height: 120px;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .rich-text-editor .ql-editor {
            min-height: 100px;
        }

        .rich-text-editor .ql-toolbar {
            border-top: 1px solid #ced4da;
            border-left: 1px solid #ced4da;
            border-right: 1px solid #ced4da;
            border-bottom: none;
            border-radius: 0.375rem 0.375rem 0 0;
        }

        .rich-text-editor .ql-container {
            border-top: none;
            border-left: 1px solid #ced4da;
            border-right: 1px solid #ced4da;
            border-bottom: 1px solid #ced4da;
            border-radius: 0 0 0.375rem 0.375rem;
        }
    </style>
@endpush
@section('breadcrumb')
    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb-container" aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard-admin.php">
                    <img src="{{ asset('backend/img/ico/ico-dashboard.svg') }}" alt="Dashboard" class="breadcrumb-icon">
                    Dashboard
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('admin.packages.index') }}">
                    <img src="{{ asset('backend/img/ico/ico-packages.svg') }}" alt="Packages" class="breadcrumb-icon">
                    Packages
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <img src="{{ asset('backend/img/ico/ico-packages.svg') }}" alt="View Package" class="breadcrumb-icon">
                View Package
            </li>
        </ol>
    </nav>

@endsection

@endsection @section('content')
<div class="row">
    <div class="p-0 bg-white card">
        <div class="py-3 card-header justify-content-between">
            <h4 class="float-left pt-2 card-title">View TourPackage</h4>
        </div>
        <div class="container p-4">
            @include('admin.tour_packages.partials.view-form')

        </div>
    </div>
</div> <!-- /.content -->
@endsection
