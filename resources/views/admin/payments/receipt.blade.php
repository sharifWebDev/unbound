 @extends('layouts.admin')
 @section('title', 'Bangladesh Unbound - Payment Receipt')
 @section('page-title', 'Payment Receipt')
 @push('styles')
     <style>
         .back-icon-green {
             filter: hue-rotate(90deg) saturate(1.5) brightness(0.8);
         }

         .btn-back {
             text-align: center;
             line-height: 1.2;
         }

         .btn-back br {
             margin: 4px 0;
         }
     </style>
 @endpush
 @section('breadcrumb')
     <?php
     // Get transaction ID from URL parameter
     $transaction_id = isset($_GET['txn']) ? $_GET['txn'] : 'TXN001';

     // Sample transaction data (in a real app, this would come from a database)
     $transactions = [
         'TXN001' => [
             'id' => 'TXN001',
             'booking_id' => 'BK001',
             'tour_name' => 'Old Dhaka Tour',
             'package' => '2 Days, 1 Night',
             'date' => '25 Apr 2024',
             'amount' => 1500,
             'method' => 'Credit Card',
             'card_last4' => '****1234',
             'status' => 'Completed',
             'customer_name' => 'Nasim Ahmed',
             'customer_email' => 'nasim@example.com',
             'customer_phone' => '+880 1721001234',
             'tour_dates' => '02-03 May 2024',
             'guide_name' => 'Rahman Ahmed',
             'guide_phone' => '+880 1721005678',
         ],
         'TXN002' => [
             'id' => 'TXN002',
             'booking_id' => 'BK002',
             'tour_name' => 'Sundarbans Adventure',
             'package' => '3 Days, 2 Nights',
             'date' => '28 Apr 2024',
             'amount' => 800,
             'method' => 'Bank Transfer',
             'card_last4' => 'Bank: DBBL',
             'status' => 'Completed',
             'customer_name' => 'Nasim Ahmed',
             'customer_email' => 'nasim@example.com',
             'customer_phone' => '+880 1721001234',
             'tour_dates' => '15-17 May 2024',
             'guide_name' => 'Rahman Ahmed',
             'guide_phone' => '+880 1721005678',
         ],
         'TXN003' => [
             'id' => 'TXN003',
             'booking_id' => 'BK003',
             'tour_name' => 'Cox\'s Bazar Beach',
             'package' => '4 Days, 3 Nights',
             'date' => '30 Apr 2024',
             'amount' => 1500,
             'method' => 'Mobile Banking',
             'card_last4' => 'bKash: 01721***234',
             'status' => 'Completed',
             'customer_name' => 'Nasim Ahmed',
             'customer_email' => 'nasim@example.com',
             'customer_phone' => '+880 1721001234',
             'tour_dates' => '25-28 May 2024',
             'guide_name' => 'Sarah Khan',
             'guide_phone' => '+880 1721005679',
         ],
         'TXN004' => [
             'id' => 'TXN004',
             'booking_id' => 'BK004',
             'tour_name' => 'Sylhet Tea Gardens',
             'package' => '2 Days, 1 Night',
             'date' => '15 Apr 2024',
             'amount' => 1200,
             'method' => 'Credit Card',
             'card_last4' => '****5678',
             'status' => 'Completed',
             'customer_name' => 'Nasim Ahmed',
             'customer_email' => 'nasim@example.com',
             'customer_phone' => '+880 1721001234',
             'tour_dates' => '20-21 Apr 2024',
             'guide_name' => 'Ahmed Hassan',
             'guide_phone' => '+880 1721005680',
         ],
         'TXN005' => [
             'id' => 'TXN005',
             'booking_id' => 'BK005',
             'tour_name' => 'Chittagong Hill Tracts',
             'package' => '5 Days, 4 Nights',
             'date' => '05 May 2024',
             'amount' => 2500,
             'method' => 'Credit Card',
             'card_last4' => '****9012',
             'status' => 'Refunded',
             'customer_name' => 'Nasim Ahmed',
             'customer_email' => 'nasim@example.com',
             'customer_phone' => '+880 1721001234',
             'tour_dates' => '10-14 Jun 2024',
             'guide_name' => 'N/A',
             'guide_phone' => 'N/A',
         ],
     ];

     $transaction = isset($transactions[$transaction_id]) ? $transactions[$transaction_id] : $transactions['TXN001'];

     ?>
     <!-- Breadcrumb Navigation -->
     <nav class="breadcrumb-container" aria-label="breadcrumb" class="mb-4">
         <ol class="breadcrumb">
             <li class="breadcrumb-item">
                 <a href="dashboard">
                     <img src="{{ asset('backend/img/ico/ico-dashboard.svg')}}" alt="Dashboard" class="breadcrumb-icon">
                     Dashboard
                 </a>
             </li>
             <li class="breadcrumb-item">
                 <a href="payments">
                     <img src="{{ asset('backend/img/ico/ico-payment.svg')}}" alt="Payment" class="breadcrumb-icon">
                     Payment
                 </a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">
                 <img src="{{ asset('backend/img/ico/ico-status.svg')}}" alt="Receipt" class="breadcrumb-icon">
                 Receipt #<?php echo $transaction['id']; ?>
             </li>
         </ol>
     </nav>
 @endsection
 @section('content')
     <!-- Receipt Container -->
     <div class="receipt-container">
         <div class="receipt-header">
             <div class="receipt-logo">
                 <img src="{{ asset('backend/img/logo.png')}}" alt="Bangladesh Unbound" class="receipt-logo-img">
             </div>
             <div class="receipt-title">
                 <h2>Payment Receipt</h2>
                 <p>Transaction ID: <strong><?php echo $transaction['id']; ?></strong></p>
             </div>
             <div class="receipt-status">
                 <?php if ($transaction['status'] === 'Completed') { ?>
                 <span class="badge bg-success receipt-badge">Paid</span>
                 <?php } else { ?>
                 <span class="badge bg-danger receipt-badge">Refunded</span>
                 <?php } ?>
             </div>
         </div>

         <div class="receipt-content">
             <div class="row">
                 <!-- Customer Information -->
                 <div class="col-md-6">
                     <div class="receipt-section">
                         <h4 class="receipt-section-title">
                             <img src="{{ asset('backend/img/ico/ico-profile.svg')}}" alt="Customer" class="receipt-section-icon">
                             Customer Information
                         </h4>
                         <div class="receipt-info">
                             <p><strong>Name:</strong> <?php echo $transaction['customer_name']; ?></p>
                             <p><strong>Email:</strong> <?php echo $transaction['customer_email']; ?></p>
                             <p><strong>Phone:</strong> <?php echo $transaction['customer_phone']; ?></p>
                         </div>
                     </div>
                 </div>

                 <!-- Payment Information -->
                 <div class="col-md-6">
                     <div class="receipt-section">
                         <h4 class="receipt-section-title">
                             <img src="{{ asset('backend/img/ico/ico-payment.svg')}}" alt="Payment" class="receipt-section-icon">
                             Payment Information
                         </h4>
                         <div class="receipt-info">
                             <p><strong>Date:</strong> <?php echo $transaction['date']; ?></p>
                             <p><strong>Method:</strong> <?php echo $transaction['method']; ?></p>
                             <p><strong>Details:</strong> <?php echo $transaction['card_last4']; ?></p>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Tour Information -->
             <div class="receipt-section">
                 <h4 class="receipt-section-title">
                     <img src="{{ asset('backend/img/ico/ico-package.svg')}}" alt="Tour" class="receipt-section-icon">
                     Tour Information
                 </h4>
                 <div class="row">
                     <div class="col-md-8">
                         <div class="receipt-info">
                             <p><strong>Order ID:</strong> <?php echo $transaction['booking_id']; ?></p>
                             <p><strong>Tour Name:</strong> <?php echo $transaction['tour_name']; ?></p>
                             <p><strong>Package:</strong> <?php echo $transaction['package']; ?></p>
                             <p><strong>Tour Dates:</strong> <?php echo $transaction['tour_dates']; ?></p>
                             <?php if ($transaction['guide_name'] !== 'N/A') { ?>
                             <p><strong>Tour Guide:</strong> <?php echo $transaction['guide_name']; ?> (<?php echo $transaction['guide_phone']; ?>)</p>
                             <?php } ?>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="receipt-amount">
                             <h3>Total Amount</h3>
                             <div class="amount-display">$<?php echo number_format($transaction['amount']); ?></div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Receipt Footer -->
             <div class="receipt-footer">
                 <div class="receipt-actions">
                     <button class="btn btn-print" onclick="window.print()">
                         <img src="{{ asset('backend/img/ico/ico-print.svg')}}" alt="Print"> Print
                     </button>
                     <button class="btn btn-save-profile">
                         <i class="bi bi-download"></i> Download
                     </button>
                 </div>
                 <div class="receipt-actions">
                     <a href="{{ route('admin.payments.index')}}" class="btn btn-back">
                         <img src="{{ asset('backend/img/ico/ico-payment.svg')}}" alt="Back" class="back-icon-green"> Back to Payments
                     </a>
                 </div>
                 <div class="receipt-note">
                     <p><strong>Note:</strong> This is an electronic receipt. Please keep this for your records.</p>
                     <p><small>Generated on <?php echo date('d M Y, H:i'); ?> | Bangladesh Unbound Tours</small></p>
                 </div>
             </div>
         </div>
     </div>


 @endsection
