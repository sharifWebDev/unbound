 @extends('layouts.admin')
 @section('title', 'Bangladesh Unbound - Create Package')
 @section('page-title', 'Create New Package')@push('styles')
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
                 <a href="packages.php">
                     <img src="{{ asset('backend/img/ico/ico-packages.svg') }}" alt="Packages" class="breadcrumb-icon">
                     Packages
                 </a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">
                 <img src="{{ asset('backend/img/ico/ico-packages.svg') }}" alt="Create Package" class="breadcrumb-icon">
                 Create Package
             </li>
         </ol>
     </nav>

 @endsection
 @section('content')
     <!-- Create Package Header -->
     <div class="create-package-header">
         <div class="d-flex align-items-center justify-content-between">
             <h3 class="mb-0 section-title">
                 <img src="{{ asset('backend/img/ico/ico-packages.svg') }}" alt="Create Package" class="section-icon">
                 Create New Package
             </h3>
             <a href="packages.php" class="btn btn-add-package">
                 <i class="bi bi-arrow-left"></i> Back to Packages
             </a>
         </div>
     </div>

     <!-- Create Package Form -->
     <div class="create-package-container">
         <form id="createPackageForm" class="package-form">

             <!-- Package Basic Information -->
             <div class="form-section">
                 <h4 class="section-subtitle">Package Name:</h4>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <input type="text" class="form-control" id="packageName" name="packageName"
                                 placeholder="Enter package name" required>
                         </div>
                     </div>
                 </div>

                 <!-- Price Information Card -->
                 <div class="form-card">
                     <h5 class="card-title">Price Information</h5>
                     <div class="row">
                         <div class="col-md-4">
                             <div class="mb-3 form-group">
                                 <label for="regularPrice" class="form-label">Regular Price</label>
                                 <input type="number" class="form-control" id="regularPrice" name="regularPrice"
                                     placeholder="Enter regular price" step="0.01" required>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="mb-3 form-group">
                                 <label for="discountedPrice" class="form-label">Discounted Price</label>
                                 <input type="number" class="form-control" id="discountedPrice" name="discountedPrice"
                                     placeholder="Enter discounted price" step="0.01">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="mb-3 form-group">
                                 <label for="bookingMoney" class="form-label">Booking Money</label>
                                 <input type="number" class="form-control" id="bookingMoney" name="bookingMoney"
                                     placeholder="Enter booking money" step="0.01">
                             </div>
                         </div>
                     </div>
                 </div>



                 <!-- Package Settings Card -->
                 <div class="form-card">
                     <h5 class="card-title">Package Settings</h5>
                     <div class="row">
                         <div class="col-md-3">
                             <div class="mb-3 form-check">
                                 <input class="form-check-input" type="checkbox" id="showOnWebsite" name="showOnWebsite"
                                     checked>
                                 <label class="form-check-label" for="showOnWebsite">
                                     Show this on Website?
                                 </label>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-check">
                                 <input class="form-check-input" type="checkbox" id="makeFeatured" name="makeFeatured">
                                 <label class="form-check-label" for="makeFeatured">
                                     Make this Featured?
                                 </label>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-check">
                                 <input class="form-check-input" type="checkbox" id="popularDayTrips"
                                     name="popularDayTrips">
                                 <label class="form-check-label" for="popularDayTrips">
                                     Popular Day Trips?
                                 </label>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-check">
                                 <input class="form-check-input" type="checkbox" id="travellersChoice"
                                     name="travellersChoice">
                                 <label class="form-check-label" for="travellersChoice">
                                     Tours by Travellers Choice?
                                 </label>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Activities Selection -->
                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <h4 class="section-subtitle">Select Activities:</h4>
                             <div class="activities-checkboxes">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="artCrafts"
                                                 name="activities[]" value="art-crafts">
                                             <label class="form-check-label" for="artCrafts">
                                                 Art & Crafts
                                             </label>
                                         </div>
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="boatCruise"
                                                 name="activities[]" value="boat-cruise">
                                             <label class="form-check-label" for="boatCruise">
                                                 Boat & Cruise
                                             </label>
                                         </div>
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="culinaryFood"
                                                 name="activities[]" value="culinary-food">
                                             <label class="form-check-label" for="culinaryFood">
                                                 Culinary & Food
                                             </label>
                                         </div>
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="cyclingCamping"
                                                 name="activities[]" value="cycling-camping">
                                             <label class="form-check-label" for="cyclingCamping">
                                                 Cycling & Camping
                                             </label>
                                         </div>
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="folkFestivals"
                                                 name="activities[]" value="folk-festivals">
                                             <label class="form-check-label" for="folkFestivals">
                                                 Folk & Festivals
                                             </label>
                                         </div>
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="historyHeritage"
                                                 name="activities[]" value="history-heritage">
                                             <label class="form-check-label" for="historyHeritage">
                                                 History & Heritage
                                             </label>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="natureWildlife"
                                                 name="activities[]" value="nature-wildlife">
                                             <label class="form-check-label" for="natureWildlife">
                                                 Nature & Wildlife
                                             </label>
                                         </div>
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="trailingWalking"
                                                 name="activities[]" value="trailing-walking">
                                             <label class="form-check-label" for="trailingWalking">
                                                 Trailing & Walking
                                             </label>
                                         </div>
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="adventureSports"
                                                 name="activities[]" value="adventure-sports">
                                             <label class="form-check-label" for="adventureSports">
                                                 Adventure & Sports
                                             </label>
                                         </div>
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="photographyTours"
                                                 name="activities[]" value="photography-tours">
                                             <label class="form-check-label" for="photographyTours">
                                                 Photography Tours
                                             </label>
                                         </div>
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="religiousSites"
                                                 name="activities[]" value="religious-sites">
                                             <label class="form-check-label" for="religiousSites">
                                                 Religious Sites
                                             </label>
                                         </div>
                                         <div class="form-check activity-checkbox">
                                             <input class="form-check-input" type="checkbox" id="beachCoastal"
                                                 name="activities[]" value="beach-coastal">
                                             <label class="form-check-label" for="beachCoastal">
                                                 Beach & Coastal
                                             </label>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Package Details Section -->
             <div class="form-section">
                 <h4 class="section-subtitle">Package Details:</h4>

                 <!-- Tour Date Information -->
                 <div class="form-card">
                     <h5 class="card-title">Tour Date</h5>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="mb-3 form-group">
                                 <label for="tourDateFrom" class="form-label">
                                     <i class="bi bi-calendar text-success me-2"></i>From Date
                                 </label>
                                 <input type="date" class="form-control" id="tourDateFrom" name="tourDateFrom"
                                     required>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="mb-3 form-group">
                                 <label for="tourDateTo" class="form-label">
                                     <i class="bi bi-calendar-check text-success me-2"></i>To Date
                                 </label>
                                 <input type="date" class="form-control" id="tourDateTo" name="tourDateTo" required>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Tour Information Grid -->
                 <div class="tour-info-grid">
                     <div class="row">
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="tourType" class="form-label">
                                     <i class="bi bi-calendar-check text-success me-2"></i>Tour Type
                                 </label>
                                 <select class="form-control admin-select" id="tourType" name="tourType" required>
                                     <option value="">Select Tours Type</option>
                                     <option value="day-trip">Day Trip</option>
                                     <option value="multi-day-tours">Multi-Day Tours</option>
                                     <option value="holiday-tours">Holiday Tours</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="duration" class="form-label">
                                     <i class="bi bi-clock text-success me-2"></i>Duration
                                 </label>
                                 <input type="text" class="form-control" id="duration" name="duration"
                                     placeholder="e.g., 2 Days, 1 Night">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="groupSize" class="form-label">
                                     <i class="bi bi-people text-success me-2"></i>Group Size
                                 </label>
                                 <input type="text" class="form-control" id="groupSize" name="groupSize"
                                     placeholder="e.g., 8 Persons (Max)">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="accommodation" class="form-label">
                                     <i class="bi bi-building text-success me-2"></i>Accommodation
                                 </label>
                                 <input type="text" class="form-control" id="accommodation" name="accommodation"
                                     placeholder="e.g., 0 (Not Included)">
                             </div>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="transportation" class="form-label">
                                     <i class="bi bi-car-front text-success me-2"></i>Transportation
                                 </label>
                                 <input type="text" class="form-control" id="transportation" name="transportation"
                                     placeholder="e.g., A/C Vehicle">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="meals" class="form-label">
                                     <i class="bi bi-cup-straw text-success me-2"></i>Meals
                                 </label>
                                 <input type="text" class="form-control" id="meals" name="meals"
                                     placeholder="e.g., 1 (Lunch/person)">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="fitnessLevel" class="form-label">
                                     <i class="bi bi-activity text-success me-2"></i>Fitness Level
                                 </label>
                                 <input type="text" class="form-control" id="fitnessLevel" name="fitnessLevel"
                                     placeholder="e.g., Moderate">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="minimumAge" class="form-label">
                                     <i class="bi bi-person text-success me-2"></i>Minimum Age
                                 </label>
                                 <input type="text" class="form-control" id="minimumAge" name="minimumAge"
                                     placeholder="e.g., 6">
                             </div>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="language" class="form-label">
                                     <i class="bi bi-translate text-success me-2"></i>Language
                                 </label>
                                 <input type="text" class="form-control" id="language" name="language"
                                     placeholder="e.g., English" value="English">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="bestSeason" class="form-label">
                                     <i class="bi bi-sun text-success me-2"></i>Best Season
                                 </label>
                                 <input type="text" class="form-control" id="bestSeason" name="bestSeason"
                                     placeholder="e.g., All Year Round">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="guidingMethod" class="form-label">
                                     <i class="bi bi-person-check text-success me-2"></i>Guiding Method
                                 </label>
                                 <input type="text" class="form-control" id="guidingMethod" name="guidingMethod"
                                     placeholder="e.g., Full Time">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="location" class="form-label">
                                     <i class="bi bi-geo-alt text-success me-2"></i>Location
                                 </label>
                                 <input type="text" class="form-control" id="location" name="location"
                                     placeholder="e.g., New & Old Dhaka">
                             </div>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="destinations" class="form-label">
                                     <i class="bi bi-geo-alt-fill text-success me-2"></i>Select Destinations
                                 </label>
                                 <select class="form-control admin-select" id="destinations" name="destinations"
                                     required>
                                     <option value="">Select Destination</option>
                                     <option value="barisal">Barisal</option>
                                     <option value="chittagong">Chittagong</option>
                                     <option value="dhaka">Dhaka</option>
                                     <option value="khulna">Khulna</option>
                                     <option value="mymensingh">Mymensingh</option>
                                     <option value="rajshahi">Rajshahi</option>
                                     <option value="rangpur">Rangpur</option>
                                     <option value="sylhet">Sylhet</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="maxAltitude" class="form-label">
                                     <i class="bi bi-triangle text-success me-2"></i>Max Altitude
                                 </label>
                                 <input type="text" class="form-control" id="maxAltitude" name="maxAltitude"
                                     placeholder="e.g., Not Applicable">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="arrivalOn" class="form-label">
                                     <i class="bi bi-airplane-engines text-success me-2"></i>Arrival On
                                 </label>
                                 <input type="text" class="form-control" id="arrivalOn" name="arrivalOn"
                                     placeholder="e.g., Dhaka, Bangladesh">
                             </div>
                         </div>
                         <div class="col-md-3">
                             <div class="mb-3 form-group">
                                 <label for="departureFrom" class="form-label">
                                     <i class="bi bi-airplane text-success me-2"></i>Departure From
                                 </label>
                                 <input type="text" class="form-control" id="departureFrom" name="departureFrom"
                                     placeholder="e.g., Dhaka, Bangladesh">
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Subtitle -->
                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label for="packageSubtitle" class="form-label">Subtitle</label>
                             <input type="text" class="form-control" id="packageSubtitle" name="packageSubtitle"
                                 placeholder="Enter package subtitle">
                         </div>
                     </div>
                 </div>

                 <!-- Intro -->
                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label for="packageIntro" class="form-label">Intro</label>
                             <div id="packageIntroEditor" class="rich-text-editor"></div>
                             <textarea class="form-control d-none" id="packageIntro" name="packageIntro" rows="4"
                                 placeholder="Enter package introduction"></textarea>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label for="tourHighlights" class="form-label">Tour Highlights</label>
                             <div id="tourHighlightsEditor" class="rich-text-editor"></div>
                             <textarea class="form-control d-none" id="tourHighlights" name="tourHighlights" rows="4"
                                 placeholder="Enter tour highlights"></textarea>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label for="tourAttractions" class="form-label">Tour Attractions</label>
                             <div id="tourAttractionsEditor" class="rich-text-editor"></div>
                             <textarea class="form-control d-none" id="tourAttractions" name="tourAttractions" rows="4"
                                 placeholder="Enter tour attractions"></textarea>
                         </div>
                     </div>
                 </div>

                 <!-- Dynamic Itinerary Section -->
                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label class="form-label">Itinerary</label>

                             <!-- Itinerary Days Container -->
                             <div class="itinerary-container" id="itineraryContainer">
                                 <!-- Day 1 (Initially visible) -->
                                 <div class="itinerary-day" data-day="1">
                                     <div class="itinerary-day-header">
                                         <h6 class="itinerary-day-title">Day 1</h6>
                                         <button type="button" class="btn btn-sm btn-outline-danger remove-itinerary-day"
                                             onclick="removeItineraryDay(1)" style="display: none;">
                                             <i class="bi bi-trash"></i>
                                         </button>
                                     </div>
                                     <div id="itineraryDay1Editor" class="rich-text-editor"></div>
                                     <textarea class="form-control d-none" name="itinerary_day_1" rows="3"
                                         placeholder="Enter Day 1 itinerary details"></textarea>
                                 </div>
                             </div>

                             <!-- Add Day Button -->
                             <button type="button" class="mt-3 btn btn-outline-primary" id="addItineraryDay">
                                 <i class="bi bi-plus-circle"></i> Add Day
                             </button>
                         </div>
                     </div>
                 </div>

                 <!-- Tour Map Image Upload -->
                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label for="tourMapImage" class="form-label">Tour Map Image</label>
                             <input type="file" class="form-control" id="tourMapImage" name="tourMapImage"
                                 accept="image/*">
                             <small class="form-text text-muted">Upload a single tour map image. Supported formats: JPG,
                                 PNG, GIF</small>

                             <!-- Tour Map Image Preview -->
                             <div class="mt-3 tour-map-preview" id="tourMapPreview" style="display: none;">
                                 <div class="tour-map-preview-item">
                                     <img id="tourMapPreviewImg" src="" alt="Tour Map Preview"
                                         style="max-width: 300px; max-height: 200px; border-radius: 8px;">
                                     <button type="button" class="mt-2 btn btn-sm btn-danger"
                                         onclick="removeTourMapPreview()">
                                         <i class="bi bi-trash"></i> Remove
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label for="tripNotes" class="form-label">Trip Notes</label>
                             <div id="tripNotesEditor" class="rich-text-editor"></div>
                             <textarea class="form-control d-none" id="tripNotes" name="tripNotes" rows="4"
                                 placeholder="Enter important trip notes"></textarea>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label for="faq" class="form-label">FAQ</label>
                             <div id="faqEditor" class="rich-text-editor"></div>
                             <textarea class="form-control d-none" id="faq" name="faq" rows="6"
                                 placeholder="Enter frequently asked questions and answers"></textarea>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12">
                         <div class="mb-3 form-group">
                             <label for="reviews" class="form-label">Reviews</label>
                             <div id="reviewsEditor" class="rich-text-editor"></div>
                             <textarea class="form-control d-none" id="reviews" name="reviews" rows="4"
                                 placeholder="Enter customer reviews"></textarea>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Pick up & Drop off Location Section -->
             <div class="form-section">
                 <h4 class="section-subtitle">Pick up & Drop off Location:</h4>

                 <div class="form-card">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="mb-3 form-group">
                                 <label for="pickupLocation" class="form-label">
                                     <i class="bi bi-geo-alt text-success me-2"></i>Pick up Location
                                 </label>
                                 <input type="text" class="form-control" id="pickupLocation" name="pickupLocation"
                                     placeholder="Enter pick up location">
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="mb-3 form-group">
                                 <label for="dropoffLocation" class="form-label">
                                     <i class="bi bi-geo-alt-fill text-success me-2"></i>Drop off Location
                                 </label>
                                 <input type="text" class="form-control" id="dropoffLocation" name="dropoffLocation"
                                     placeholder="Enter drop off location">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Media Section -->
             <div class="form-section">
                 <h4 class="section-subtitle">Media & Gallery:</h4>

                 <!-- Featured Image Upload -->
                 <div class="form-card">
                     <h5 class="card-title">Featured Image</h5>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="mb-3 form-group">
                                 <label for="featuredImage" class="form-label">Upload Featured Image</label>
                                 <input type="file" class="form-control" id="featuredImage" name="featuredImage"
                                     accept="image/*">
                                 <small class="form-text text-muted">Upload a single featured image. Supported formats:
                                     JPG, PNG, GIF</small>

                                 <!-- Featured Image Preview -->
                                 <div class="mt-3 featured-image-preview" id="featuredImagePreview"
                                     style="display: none;">
                                     <div class="featured-image-preview-item">
                                         <img id="featuredImagePreviewImg" src="" alt="Featured Image Preview"
                                             style="max-width: 300px; max-height: 200px; border-radius: 8px;">
                                         <button type="button" class="mt-2 btn btn-sm btn-danger"
                                             onclick="removeFeaturedImagePreview()">
                                             <i class="bi bi-trash"></i> Remove
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Thumbnail Image Upload -->
                 <div class="form-card">
                     <h5 class="card-title">Thumbnail Image</h5>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="mb-3 form-group">
                                 <label for="thumbnailImage" class="form-label">Upload Thumbnail Image</label>
                                 <input type="file" class="form-control" id="thumbnailImage" name="thumbnailImage"
                                     accept="image/*">
                                 <small class="form-text text-muted">Upload a single thumbnail image. Supported formats:
                                     JPG, PNG, GIF</small>

                                 <!-- Thumbnail Image Preview -->
                                 <div class="mt-3 thumbnail-image-preview" id="thumbnailImagePreview"
                                     style="display: none;">
                                     <div class="thumbnail-image-preview-item">
                                         <img id="thumbnailImagePreviewImg" src="" alt="Thumbnail Image Preview"
                                             style="max-width: 300px; max-height: 200px; border-radius: 8px;">
                                         <button type="button" class="mt-2 btn btn-sm btn-danger"
                                             onclick="removeThumbnailImagePreview()">
                                             <i class="bi bi-trash"></i> Remove
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Gallery Images Upload -->
                 <div class="form-card">
                     <h5 class="card-title">Gallery Images</h5>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="mb-3 form-group">
                                 <label for="galleryImages" class="form-label">Upload Gallery Images</label>
                                 <input type="file" class="form-control" id="galleryImages" name="galleryImages[]"
                                     multiple accept="image/*">
                                 <small class="form-text text-muted">You can select multiple images. Supported formats:
                                     JPG, PNG, GIF</small>
                             </div>

                             <!-- Image Preview Area -->
                             <div class="image-preview-container" id="imagePreviewContainer">
                                 <div class="image-preview-placeholder">
                                     <i class="bi bi-images"></i>
                                     <p>Selected images will appear here</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Video Section -->
                 <div class="form-card">
                     <h5 class="card-title">Video</h5>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="mb-3 form-group">
                                 <label for="videoFile" class="form-label">Upload Video File</label>
                                 <input type="file" class="form-control" id="videoFile" name="videoFile"
                                     accept="video/*">
                                 <small class="form-text text-muted">Supported formats: MP4, AVI, MOV</small>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="mb-3 form-group">
                                 <label for="videoUrl" class="form-label">Or Video URL</label>
                                 <input type="url" class="form-control" id="videoUrl" name="videoUrl"
                                     placeholder="Enter YouTube video URL">
                                 <small class="form-text text-muted">Alternative to file upload</small>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Feedback Logs Section -->
             <div class="form-section">
                 <h4 class="section-subtitle">Add Feedback Logs:</h4>

                 <!-- Activities Days Container -->
                 <div class="activities-logs-container" id="activitiesLogsContainer">
                     <!-- Day 1 (Initially visible) -->
                     <div class="activities-log-day" data-day="1">
                         <div class="activities-day-header">
                             <h5 class="activities-day-title">Day 1</h5>
                             <button type="button" class="btn btn-sm btn-outline-danger remove-activities-day"
                                 onclick="removeActivitiesDay(1)" style="display: none;">
                                 <i class="bi bi-trash"></i>
                             </button>
                         </div>
                         <div class="activities-list">
                             <!-- Empty activities list for Day 1 - user can add feedback logs as needed -->
                         </div>
                         <button type="button" class="mt-2 btn btn-outline-secondary btn-sm add-activity-item"
                             data-day="1">
                             <i class="bi bi-plus-circle"></i> Add Feedback
                         </button>
                     </div>
                 </div>

                 <!-- Add Day Button -->
                 <button type="button" class="mt-3 btn btn-outline-primary" id="addActivitiesDay">
                     <i class="bi bi-plus-circle"></i> Add Day
                 </button>

             </div>

             <!-- Submit Button -->
             <div class="form-section">
                 <div class="d-flex justify-content-center">
                     <button type="submit" class="btn btn-create-package">
                         Create Package
                     </button>
                 </div>
             </div>

         </form>
     </div>
 @endsection

 @push('scripts')
     <!-- Quill.js JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
     <script>
         // Global variable for Quill editors
         window.quillEditors = {};

         document.addEventListener('DOMContentLoaded', function() {
             let itineraryDayCount = 1;
             let activitiesDayCount = 1;

             // Initialize Quill editors
             const quillEditors = window.quillEditors;

             // Quill toolbar configuration
             const toolbarOptions = [
                 [{
                     'header': [1, 2, 3, false]
                 }],
                 ['bold', 'italic', 'underline', 'strike'],
                 [{
                     'list': 'ordered'
                 }, {
                     'list': 'bullet'
                 }],
                 [{
                     'indent': '-1'
                 }, {
                     'indent': '+1'
                 }],
                 [{
                     'color': []
                 }, {
                     'background': []
                 }],
                 [{
                     'align': []
                 }],
                 ['link'],
                 ['clean']
             ];

             // Initialize Package Intro Editor
             if (document.getElementById('packageIntroEditor')) {
                 quillEditors.packageIntro = new Quill('#packageIntroEditor', {
                     theme: 'snow',
                     modules: {
                         toolbar: toolbarOptions
                     },
                     placeholder: 'Enter package introduction...'
                 });
             }

             // Initialize Tour Highlights Editor
             if (document.getElementById('tourHighlightsEditor')) {
                 quillEditors.tourHighlights = new Quill('#tourHighlightsEditor', {
                     theme: 'snow',
                     modules: {
                         toolbar: toolbarOptions
                     },
                     placeholder: 'Enter tour highlights...'
                 });
             }

             // Initialize Tour Attractions Editor
             if (document.getElementById('tourAttractionsEditor')) {
                 quillEditors.tourAttractions = new Quill('#tourAttractionsEditor', {
                     theme: 'snow',
                     modules: {
                         toolbar: toolbarOptions
                     },
                     placeholder: 'Enter tour attractions...'
                 });
             }

             // Initialize Itinerary Day 1 Editor
             if (document.getElementById('itineraryDay1Editor')) {
                 quillEditors.itineraryDay1 = new Quill('#itineraryDay1Editor', {
                     theme: 'snow',
                     modules: {
                         toolbar: toolbarOptions
                     },
                     placeholder: 'Enter Day 1 itinerary details...'
                 });
             }

             // Initialize Trip Notes Editor
             if (document.getElementById('tripNotesEditor')) {
                 quillEditors.tripNotes = new Quill('#tripNotesEditor', {
                     theme: 'snow',
                     modules: {
                         toolbar: toolbarOptions
                     },
                     placeholder: 'Enter important trip notes...'
                 });
             }

             // Initialize FAQ Editor
             if (document.getElementById('faqEditor')) {
                 quillEditors.faq = new Quill('#faqEditor', {
                     theme: 'snow',
                     modules: {
                         toolbar: toolbarOptions
                     },
                     placeholder: 'Enter frequently asked questions and answers...'
                 });
             }

             // Initialize Reviews Editor
             if (document.getElementById('reviewsEditor')) {
                 quillEditors.reviews = new Quill('#reviewsEditor', {
                     theme: 'snow',
                     modules: {
                         toolbar: toolbarOptions
                     },
                     placeholder: 'Enter customer reviews...'
                 });
             }

             // Dynamic Itinerary functionality
             const addItineraryDayBtn = document.getElementById('addItineraryDay');
             const itineraryContainer = document.getElementById('itineraryContainer');

             if (addItineraryDayBtn) {
                 addItineraryDayBtn.addEventListener('click', function() {
                     itineraryDayCount++;

                     const newDay = document.createElement('div');
                     newDay.className = 'itinerary-day';
                     newDay.setAttribute('data-day', itineraryDayCount);
                     newDay.innerHTML = `
                <div class="itinerary-day-header">
                    <h6 class="itinerary-day-title">Day ${itineraryDayCount}</h6>
                    <button type="button" class="btn btn-sm btn-outline-danger remove-itinerary-day" onclick="removeItineraryDay(${itineraryDayCount})">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
                <div id="itineraryDay${itineraryDayCount}Editor" class="rich-text-editor"></div>
                <textarea class="form-control d-none" name="itinerary_day_${itineraryDayCount}" rows="3" placeholder="Enter Day ${itineraryDayCount} itinerary details"></textarea>
            `;

                     itineraryContainer.appendChild(newDay);

                     // Initialize Quill editor for the new day
                     quillEditors[`itineraryDay${itineraryDayCount}`] = new Quill(
                         `#itineraryDay${itineraryDayCount}Editor`, {
                             theme: 'snow',
                             modules: {
                                 toolbar: toolbarOptions
                             },
                             placeholder: `Enter Day ${itineraryDayCount} itinerary details...`
                         });

                     // Show remove button for all days except Day 1 if there are multiple days
                     if (itineraryDayCount > 1) {
                         const allRemoveBtns = itineraryContainer.querySelectorAll('.remove-itinerary-day');
                         allRemoveBtns.forEach((btn, index) => {
                             if (index > 0) { // Don't show for Day 1
                                 btn.style.display = 'inline-block';
                             }
                         });
                     }
                 });
             }

             // Dynamic Activities Logs functionality
             const addActivitiesDayBtn = document.getElementById('addActivitiesDay');
             const activitiesLogsContainer = document.getElementById('activitiesLogsContainer');

             if (addActivitiesDayBtn) {
                 addActivitiesDayBtn.addEventListener('click', function() {
                     activitiesDayCount++;

                     const newDay = document.createElement('div');
                     newDay.className = 'activities-log-day';
                     newDay.setAttribute('data-day', activitiesDayCount);
                     newDay.innerHTML = `
                <div class="activities-day-header">
                    <h5 class="activities-day-title">Day ${activitiesDayCount}</h5>
                    <button type="button" class="btn btn-sm btn-outline-danger remove-activities-day" onclick="removeActivitiesDay(${activitiesDayCount})">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
                <div class="activities-list">
                    <!-- Empty activities list for new day -->
                </div>
                <button type="button" class="mt-2 btn btn-outline-secondary btn-sm add-activity-item" data-day="${activitiesDayCount}">
                    <i class="bi bi-plus-circle"></i> Add Feedback
                </button>
            `;

                     activitiesLogsContainer.appendChild(newDay);

                     // Add event listener to the new "Add Activity" button
                     const newAddActivityBtn = newDay.querySelector('.add-activity-item');
                     addActivityItemListener(newAddActivityBtn);

                     // Show remove button for all days except Day 1 if there are multiple days
                     if (activitiesDayCount > 1) {
                         const allRemoveBtns = activitiesLogsContainer.querySelectorAll(
                             '.remove-activities-day');
                         allRemoveBtns.forEach((btn, index) => {
                             if (index > 0) { // Don't show for Day 1
                                 btn.style.display = 'inline-block';
                             }
                         });
                     }
                 });
             }

             // Add activity item functionality
             function addActivityItemListener(button) {
                 button.addEventListener('click', function() {
                     const dayNumber = this.getAttribute('data-day');
                     const activitiesList = this.previousElementSibling;
                     const activityCount = activitiesList.querySelectorAll('.activity-item').length;

                     const newActivity = document.createElement('div');
                     newActivity.className = 'form-check activity-item';
                     newActivity.innerHTML = `
                <input class="form-check-input" type="checkbox" id="day${dayNumber}_custom${activityCount}" name="day${dayNumber}_activities[]" value="">
                <label class="form-check-label" for="day${dayNumber}_custom${activityCount}">
                    <input type="text" class="form-control activity-input" placeholder="Enter feedback log" onchange="updateActivityValue(this)">
                </label>
                <button type="button" class="btn btn-sm btn-outline-danger ms-2" onclick="removeActivity(this)">
                    <i class="bi bi-trash"></i>
                </button>
            `;

                     activitiesList.appendChild(newActivity);
                 });
             }

             // Initialize existing "Add Activity" buttons
             const existingAddActivityBtns = document.querySelectorAll('.add-activity-item');
             existingAddActivityBtns.forEach(addActivityItemListener);

             // Featured Image Preview
             const featuredImageInput = document.getElementById('featuredImage');
             const featuredImagePreview = document.getElementById('featuredImagePreview');
             const featuredImagePreviewImg = document.getElementById('featuredImagePreviewImg');

             if (featuredImageInput) {
                 featuredImageInput.addEventListener('change', function(e) {
                     const file = e.target.files[0];

                     if (file && file.type.startsWith('image/')) {
                         const reader = new FileReader();
                         reader.onload = function(e) {
                             featuredImagePreviewImg.src = e.target.result;
                             featuredImagePreview.style.display = 'block';
                         };
                         reader.readAsDataURL(file);
                     } else {
                         featuredImagePreview.style.display = 'none';
                     }
                 });
             }

             // Thumbnail Image Preview
             const thumbnailImageInput = document.getElementById('thumbnailImage');
             const thumbnailImagePreview = document.getElementById('thumbnailImagePreview');
             const thumbnailImagePreviewImg = document.getElementById('thumbnailImagePreviewImg');

             if (thumbnailImageInput) {
                 thumbnailImageInput.addEventListener('change', function(e) {
                     const file = e.target.files[0];

                     if (file && file.type.startsWith('image/')) {
                         const reader = new FileReader();
                         reader.onload = function(e) {
                             thumbnailImagePreviewImg.src = e.target.result;
                             thumbnailImagePreview.style.display = 'block';
                         };
                         reader.readAsDataURL(file);
                     } else {
                         thumbnailImagePreview.style.display = 'none';
                     }
                 });
             }

             // Tour Map Image Preview
             const tourMapImageInput = document.getElementById('tourMapImage');
             const tourMapPreview = document.getElementById('tourMapPreview');
             const tourMapPreviewImg = document.getElementById('tourMapPreviewImg');

             if (tourMapImageInput) {
                 tourMapImageInput.addEventListener('change', function(e) {
                     const file = e.target.files[0];

                     if (file && file.type.startsWith('image/')) {
                         const reader = new FileReader();
                         reader.onload = function(e) {
                             tourMapPreviewImg.src = e.target.result;
                             tourMapPreview.style.display = 'block';
                         };
                         reader.readAsDataURL(file);
                     } else {
                         tourMapPreview.style.display = 'none';
                     }
                 });
             }

             // Gallery Images Preview
             const galleryInput = document.getElementById('galleryImages');
             const previewContainer = document.getElementById('imagePreviewContainer');

             if (galleryInput) {
                 galleryInput.addEventListener('change', function(e) {
                     const files = Array.from(e.target.files);

                     if (files.length > 0) {
                         // Clear placeholder
                         previewContainer.innerHTML = '';

                         // Create grid container
                         const gridContainer = document.createElement('div');
                         gridContainer.className = 'image-preview-grid';

                         files.forEach((file, index) => {
                             if (file.type.startsWith('image/')) {
                                 const reader = new FileReader();
                                 reader.onload = function(e) {
                                     const previewItem = document.createElement('div');
                                     previewItem.className = 'image-preview-item';
                                     previewItem.innerHTML = `
                                <img src="${e.target.result}" alt="Preview ${index + 1}">
                                <button type="button" class="remove-image" onclick="removeImagePreview(this, ${index})">
                                    <i class="bi bi-x"></i>
                                </button>
                            `;
                                     gridContainer.appendChild(previewItem);
                                 };
                                 reader.readAsDataURL(file);
                             }
                         });

                         previewContainer.appendChild(gridContainer);
                     } else {
                         // Show placeholder if no files
                         previewContainer.innerHTML = `
                    <div class="image-preview-placeholder">
                        <i class="bi bi-images"></i>
                        <p>Selected images will appear here</p>
                    </div>
                `;
                     }
                 });
             }

             // Form submission handler to sync Quill content with textareas
             const createPackageForm = document.getElementById('createPackageForm');
             if (createPackageForm) {
                 createPackageForm.addEventListener('submit', function(e) {
                     // Sync all Quill editors with their corresponding textareas
                     Object.keys(quillEditors).forEach(editorKey => {
                         const editor = quillEditors[editorKey];
                         let textareaId = '';

                         // Map editor keys to textarea IDs
                         switch (editorKey) {
                             case 'packageIntro':
                                 textareaId = 'packageIntro';
                                 break;
                             case 'tourHighlights':
                                 textareaId = 'tourHighlights';
                                 break;
                             case 'tourAttractions':
                                 textareaId = 'tourAttractions';
                                 break;
                             case 'tripNotes':
                                 textareaId = 'tripNotes';
                                 break;
                             case 'faq':
                                 textareaId = 'faq';
                                 break;
                             case 'reviews':
                                 textareaId = 'reviews';
                                 break;
                             default:
                                 // Handle itinerary days
                                 if (editorKey.startsWith('itineraryDay')) {
                                     const dayNumber = editorKey.replace('itineraryDay', '');
                                     const textarea = document.querySelector(
                                         `textarea[name="itinerary_day_${dayNumber}"]`);
                                     if (textarea) {
                                         textarea.value = editor.root.innerHTML;
                                     }
                                 }
                                 return;
                         }

                         const textarea = document.getElementById(textareaId);
                         if (textarea) {
                             textarea.value = editor.root.innerHTML;
                         }
                     });
                 });
             }
         });

         // Helper functions
         function updateActivityValue(input) {
             const checkbox = input.closest('.activity-item').querySelector('input[type="checkbox"]');
             checkbox.value = input.value;
         }

         function removeActivity(button) {
             button.closest('.activity-item').remove();
         }

         function removeItineraryDay(dayNumber) {
             const dayElement = document.querySelector(`.itinerary-day[data-day="${dayNumber}"]`);
             if (dayElement && dayNumber > 1) { // Don't allow removing Day 1
                 // Clean up the Quill editor
                 const editorKey = `itineraryDay${dayNumber}`;
                 if (window.quillEditors && window.quillEditors[editorKey]) {
                     delete window.quillEditors[editorKey];
                 }
                 dayElement.remove();
             }
         }

         function removeActivitiesDay(dayNumber) {
             const dayElement = document.querySelector(`.activities-log-day[data-day="${dayNumber}"]`);
             if (dayElement && dayNumber > 1) { // Don't allow removing Day 1
                 dayElement.remove();
             }
         }

         function removeFeaturedImagePreview() {
             const featuredImageInput = document.getElementById('featuredImage');
             const featuredImagePreview = document.getElementById('featuredImagePreview');

             featuredImageInput.value = '';
             featuredImagePreview.style.display = 'none';
         }

         function removeThumbnailImagePreview() {
             const thumbnailImageInput = document.getElementById('thumbnailImage');
             const thumbnailImagePreview = document.getElementById('thumbnailImagePreview');

             thumbnailImageInput.value = '';
             thumbnailImagePreview.style.display = 'none';
         }

         function removeTourMapPreview() {
             const tourMapImageInput = document.getElementById('tourMapImage');
             const tourMapPreview = document.getElementById('tourMapPreview');

             tourMapImageInput.value = '';
             tourMapPreview.style.display = 'none';
         }

         function removeImagePreview(button, index) {
             const previewItem = button.closest('.image-preview-item');
             const galleryInput = document.getElementById('galleryImages');

             // Remove the preview item
             previewItem.remove();

             // Update the file input (remove the specific file)
             const dt = new DataTransfer();
             const files = Array.from(galleryInput.files);

             files.forEach((file, i) => {
                 if (i !== index) {
                     dt.items.add(file);
                 }
             });

             galleryInput.files = dt.files;

             // If no files left, show placeholder
             const previewContainer = document.getElementById('imagePreviewContainer');
             if (galleryInput.files.length === 0) {
                 previewContainer.innerHTML = `
            <div class="image-preview-placeholder">
                <i class="bi bi-images"></i>
                <p>Selected images will appear here</p>
            </div>
        `;
             }
         }

         // Form submission
         document.getElementById('createPackageForm').addEventListener('submit', function(e) {
             e.preventDefault();

             // Collect form data
             const formData = new FormData(this);

             // Here you would typically send the data to a server
             console.log('Package data:', Object.fromEntries(formData));

             // Show success message (you can replace this with actual form submission)
             alert('Package created successfully!');
         });
     </script>
 @endpush
