<?php
$page_title = 'Bangladesh Unbound - Ongoing Tours';
$page_header = 'Ongoing Tours';
include 'inc/header.php';
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
                        <img src="assets/img/ico/ico-ongoing.svg" alt="Ongoing Tours" class="breadcrumb-icon">
                        Ongoing Tours
                    </li>
                </ol>
            </nav>

            <!-- Ongoing Tours Content -->
            <div class="ongoing-tours-container">
                <!-- Tour Header -->
                <div class="tour-header mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="tour-info">
                                <div class="tour-icon">
                                    <img src="assets/img/ico/ico-package.svg" alt="Tour Icon" class="tour-icon-img">
                                </div>
                                <div class="tour-details">
                                    <h2 class="tour-title">Old Dhaka Tour</h2>
                                    <p class="tour-duration">2 days, 1 night</p>
                                    <div class="tour-locations mt-2">
                                        <div class="location-item">
                                            <strong>Pickup:</strong> Hazrat Shahjalal International Airport
                                        </div>
                                        <div class="location-item">
                                            <strong>Drop off:</strong> Hotel Dhaka Regency
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tour-guide-card">
                                <div class="guide-header">Tour Guide</div>
                                <div class="guide-info-card">
                                    <div class="guide-avatar-large">
                                        <img src="assets/img/avatar.jpg" alt="Fahim Bakhtiar" class="guide-img">
                                    </div>
                                    <div class="guide-details">
                                        <h4 class="guide-name">Fahim Bakhtiar</h4>
                                        <p class="guide-phone">+880 1721001234</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tour Progress Calendar -->
                <div class="tour-progress mb-5">
                    <div class="progress-header">
                        <h4 class="progress-title">Tour Calendar</h4>
                        <div class="download-link">
                            <a href="#" class="download-btn">
                                <div class="btn-text">
                                    <span>Download</span>
                                    <span>Entire Tour Plan</span>
                                </div>
                                <img src="assets/img/ico/ico-download.svg" alt="Download" class="download-icon">
                            </a>
                        </div>
                    </div>
                    <div class="calendar-container">
                        <div class="calendar-grid" id="calendarGrid">
                            <div class="calendar-day" data-day="1">
                                <div class="day-number">Day 1</div>
                                <div class="day-date">11 Apr</div>
                                <div class="day-name">Fri</div>
                            </div>
                            <div class="calendar-day active" data-day="2">
                                <div class="day-number">Day 2</div>
                                <div class="day-date">12 Apr</div>
                                <div class="day-name">Sat</div>
                            </div>
                            <div class="calendar-day locked" data-day="3">
                                <div class="day-number">Day 3</div>
                                <div class="day-date">13 Apr</div>
                                <div class="day-name">Sun</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="4">
                                <div class="day-number">Day 4</div>
                                <div class="day-date">14 Apr</div>
                                <div class="day-name">Mon</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="5">
                                <div class="day-number">Day 5</div>
                                <div class="day-date">15 Apr</div>
                                <div class="day-name">Tue</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="6">
                                <div class="day-number">Day 6</div>
                                <div class="day-date">16 Apr</div>
                                <div class="day-name">Wed</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="7">
                                <div class="day-number">Day 7</div>
                                <div class="day-date">17 Apr</div>
                                <div class="day-name">Thu</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="8">
                                <div class="day-number">Day 8</div>
                                <div class="day-date">18 Apr</div>
                                <div class="day-name">Fri</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="9">
                                <div class="day-number">Day 9</div>
                                <div class="day-date">19 Apr</div>
                                <div class="day-name">Sat</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="10">
                                <div class="day-number">Day 10</div>
                                <div class="day-date">20 Apr</div>
                                <div class="day-name">Sun</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="11">
                                <div class="day-number">Day 11</div>
                                <div class="day-date">21 Apr</div>
                                <div class="day-name">Mon</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="12">
                                <div class="day-number">Day 12</div>
                                <div class="day-date">22 Apr</div>
                                <div class="day-name">Tue</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="13">
                                <div class="day-number">Day 13</div>
                                <div class="day-date">23 Apr</div>
                                <div class="day-name">Wed</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="14">
                                <div class="day-number">Day 14</div>
                                <div class="day-date">24 Apr</div>
                                <div class="day-name">Thu</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="15">
                                <div class="day-number">Day 15</div>
                                <div class="day-date">25 Apr</div>
                                <div class="day-name">Fri</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="16">
                                <div class="day-number">Day 16</div>
                                <div class="day-date">26 Apr</div>
                                <div class="day-name">Sat</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="17">
                                <div class="day-number">Day 17</div>
                                <div class="day-date">27 Apr</div>
                                <div class="day-name">Sun</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="18">
                                <div class="day-number">Day 18</div>
                                <div class="day-date">28 Apr</div>
                                <div class="day-name">Mon</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="19">
                                <div class="day-number">Day 19</div>
                                <div class="day-date">29 Apr</div>
                                <div class="day-name">Tue</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="20">
                                <div class="day-number">Day 20</div>
                                <div class="day-date">30 Apr</div>
                                <div class="day-name">Wed</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="21">
                                <div class="day-number">Day 21</div>
                                <div class="day-date">01 May</div>
                                <div class="day-name">Thu</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="22">
                                <div class="day-number">Day 22</div>
                                <div class="day-date">02 May</div>
                                <div class="day-name">Fri</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="23">
                                <div class="day-number">Day 23</div>
                                <div class="day-date">03 May</div>
                                <div class="day-name">Sat</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="24">
                                <div class="day-number">Day 24</div>
                                <div class="day-date">04 May</div>
                                <div class="day-name">Sun</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="25">
                                <div class="day-number">Day 25</div>
                                <div class="day-date">05 May</div>
                                <div class="day-name">Mon</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="26">
                                <div class="day-number">Day 26</div>
                                <div class="day-date">06 May</div>
                                <div class="day-name">Tue</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="27">
                                <div class="day-number">Day 27</div>
                                <div class="day-date">07 May</div>
                                <div class="day-name">Wed</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="28">
                                <div class="day-number">Day 28</div>
                                <div class="day-date">08 May</div>
                                <div class="day-name">Thu</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="29">
                                <div class="day-number">Day 29</div>
                                <div class="day-date">09 May</div>
                                <div class="day-name">Fri</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                            <div class="calendar-day locked" data-day="30">
                                <div class="day-number">Day 30</div>
                                <div class="day-date">10 May</div>
                                <div class="day-name">Sat</div>
                                <div class="lock-icon"><i class="bi bi-lock"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day Details -->
                <div class="day-details">
                    <div class="day-content">
                        <!-- Day 1 Section -->
                        <div class="day-section" id="day-1">
                            <div class="day-header">
                                <h3 class="day-title">Feedback for Day 1</h3>
                            </div>

                            <!-- Checklist -->
                            <div class="checklist">
                                <div class="checklist-item">
                                    <input type="checkbox" id="pickup" class="checklist-checkbox">
                                    <label for="pickup" class="checklist-label">Pick Up from the Airport</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="dropoff1" class="checklist-checkbox">
                                    <label for="dropoff1" class="checklist-label">Drop off to Hotel</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="lunch" class="checklist-checkbox">
                                    <label for="lunch" class="checklist-label">Lunch</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="siteseeing" class="checklist-checkbox">
                                    <label for="siteseeing" class="checklist-label">Site seeing</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="dinner" class="checklist-checkbox">
                                    <label for="dinner" class="checklist-label">Dinner</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="dropoff2" class="checklist-checkbox">
                                    <label for="dropoff2" class="checklist-label">Drop off to Hotel</label>
                                </div>
                            </div>

                            <!-- Comments Section -->
                            <div class="comments-section">
                                <textarea class="form-control comments-textarea" placeholder="Any comments" rows="4"></textarea>
                            </div>

                            <!-- Action Buttons -->
                            <div class="action-buttons">
                                <button class="btn btn-submit">Submit Acknowledgement</button>
                                <button class="btn btn-complaint">Raise a Complaint</button>
                            </div>
                        </div>

                        <!-- Day 2 Section -->
                        <div class="day-section active" id="day-2">
                            <div class="day-header">
                                <h3 class="day-title">Feedback for Day 2</h3>
                            </div>

                            <!-- Checklist -->
                            <div class="checklist">
                                <div class="checklist-item">
                                    <input type="checkbox" id="breakfast2" class="checklist-checkbox">
                                    <label for="breakfast2" class="checklist-label">Breakfast at Hotel</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="museum" class="checklist-checkbox">
                                    <label for="museum" class="checklist-label">Visit National Museum</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="lunch2" class="checklist-checkbox">
                                    <label for="lunch2" class="checklist-label">Traditional Lunch</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="shopping" class="checklist-checkbox">
                                    <label for="shopping" class="checklist-label">Shopping at New Market</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="dinner2" class="checklist-checkbox">
                                    <label for="dinner2" class="checklist-label">Dinner at Restaurant</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="hotel2" class="checklist-checkbox">
                                    <label for="hotel2" class="checklist-label">Return to Hotel</label>
                                </div>
                            </div>

                            <!-- Comments Section -->
                            <div class="comments-section">
                                <textarea class="form-control comments-textarea" placeholder="Any comments" rows="4"></textarea>
                            </div>

                            <!-- Action Buttons -->
                            <div class="action-buttons">
                                <button class="btn btn-submit">Submit Acknowledgement</button>
                                <button class="btn btn-complaint">Raise a Complaint</button>
                            </div>
                        </div>

                        <!-- Day 3 Section -->
                        <div class="day-section" id="day-3">
                            <div class="day-header">
                                <h3 class="day-title">Day 3</h3>
                                <div class="download-link">
                                    <a href="#" class="download-btn">
                                        <div class="btn-text">
                                            <span>Download the</span>
                                            <span><strong>Day 3</strong> Tour Plan</span>
                                        </div>
                                        <img src="assets/img/ico/ico-download.svg" alt="Download">
                                    </a>
                                </div>
                            </div>

                            <!-- Checklist -->
                            <div class="checklist">
                                <div class="checklist-item">
                                    <input type="checkbox" id="checkout" class="checklist-checkbox">
                                    <label for="checkout" class="checklist-label">Hotel Checkout</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="riverside" class="checklist-checkbox">
                                    <label for="riverside" class="checklist-label">Riverside Walk</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="lunch3" class="checklist-checkbox">
                                    <label for="lunch3" class="checklist-label">Farewell Lunch</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="souvenir" class="checklist-checkbox">
                                    <label for="souvenir" class="checklist-label">Souvenir Shopping</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="airport" class="checklist-checkbox">
                                    <label for="airport" class="checklist-label">Transfer to Airport</label>
                                </div>
                                <div class="checklist-item">
                                    <input type="checkbox" id="departure" class="checklist-checkbox">
                                    <label for="departure" class="checklist-label">Departure</label>
                                </div>
                            </div>

                            <!-- Comments Section -->
                            <div class="comments-section">
                                <textarea class="form-control comments-textarea" placeholder="Any comments" rows="4"></textarea>
                            </div>

                            <!-- Action Buttons -->
                            <div class="action-buttons">
                                <button class="btn btn-submit">Submit Acknowledgement</button>
                                <button class="btn btn-complaint">Raise a Complaint</button>
                            </div>
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
    let currentActiveDay = 1;

    const calendarGrid = document.getElementById('calendarGrid');
    const alertModal = new bootstrap.Modal(document.getElementById('alertModal'));

    // Attach click listeners to calendar days
    function attachDayClickListeners() {
        const calendarDays = calendarGrid.querySelectorAll('.calendar-day');

        calendarDays.forEach(day => {
            day.addEventListener('click', function() {
                // Check if the day is locked
                if (this.classList.contains('locked')) {
                    // Show the alert modal
                    alertModal.show();
                    return;
                }

                const dayNumber = parseInt(this.getAttribute('data-day'));

                // Remove active class from all days
                calendarDays.forEach(d => d.classList.remove('active'));

                // Add active class to clicked day
                this.classList.add('active');

                // Update current active day
                currentActiveDay = dayNumber;

                // Hide all day sections
                const daySections = document.querySelectorAll('.day-section');
                daySections.forEach(section => section.classList.remove('active'));

                // Show selected day section (create if doesn't exist)
                let targetSection = document.getElementById(`day-${dayNumber}`);
                if (!targetSection) {
                    targetSection = createDaySection(dayNumber);
                }
                targetSection.classList.add('active');
            });
        });
    }

    // Create day section dynamically
    function createDaySection(dayNumber) {
        const dayContent = document.querySelector('.day-content');
        const newSection = document.createElement('div');
        newSection.className = 'day-section';
        newSection.id = `day-${dayNumber}`;

        newSection.innerHTML = `
            <div class="day-header">
                <h3 class="day-title">Day ${dayNumber}</h3>
                <div class="download-link">
                    <a href="#" class="download-btn">
                        <div class="btn-text">
                            <span>Download</span>
                            <span>Itinerary</span>
                        </div>
                        <img src="assets/img/ico/ico-download.svg" alt="Download" class="download-icon">
                    </a>
                </div>
            </div>

            <!-- Checklist -->
            <div class="checklist-section">
                <div class="checklist-items">
                    <div class="checklist-item">
                        <input type="checkbox" id="breakfast_${dayNumber}" class="checklist-checkbox">
                        <label for="breakfast_${dayNumber}" class="checklist-label">Breakfast</label>
                    </div>
                    <div class="checklist-item">
                        <input type="checkbox" id="sightseeing_${dayNumber}" class="checklist-checkbox">
                        <label for="sightseeing_${dayNumber}" class="checklist-label">Sightseeing</label>
                    </div>
                    <div class="checklist-item">
                        <input type="checkbox" id="lunch_${dayNumber}" class="checklist-checkbox">
                        <label for="lunch_${dayNumber}" class="checklist-label">Lunch</label>
                    </div>
                    <div class="checklist-item">
                        <input type="checkbox" id="activities_${dayNumber}" class="checklist-checkbox">
                        <label for="activities_${dayNumber}" class="checklist-label">Activities</label>
                    </div>
                    <div class="checklist-item">
                        <input type="checkbox" id="dinner_${dayNumber}" class="checklist-checkbox">
                        <label for="dinner_${dayNumber}" class="checklist-label">Dinner</label>
                    </div>
                    <div class="checklist-item">
                        <input type="checkbox" id="accommodation_${dayNumber}" class="checklist-checkbox">
                        <label for="accommodation_${dayNumber}" class="checklist-label">Accommodation</label>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comments-section">
                    <textarea class="form-control comments-textarea" placeholder="Any comments for Day ${dayNumber}" rows="4"></textarea>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn btn-submit">Submit Acknowledgement</button>
                    <button class="btn btn-complaint">Raise a Complaint</button>
                </div>
            </div>
        `;

        dayContent.appendChild(newSection);
        return newSection;
    }

    // Initialize calendar click listeners
    attachDayClickListeners();

    // Simulate unlocking days (for demo purposes)
    // In real implementation, this would be based on server data
    setTimeout(() => {
        const day2 = calendarGrid.querySelector('[data-day="2"]');
        if (day2) {
            day2.classList.remove('locked');
            day2.querySelector('.lock-icon').style.display = 'none';
        }
    }, 1000);

    // Auto-close modal after 3 seconds
    document.getElementById('alertModal').addEventListener('shown.bs.modal', function() {
        setTimeout(() => {
            alertModal.hide();
        }, 3000);
    });
});
</script>

<?php include 'inc/footer.php'; ?>
