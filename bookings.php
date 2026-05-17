<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Trips | Nakamura Tour &amp; Travels</title>
    <?php include __DIR__ . '/includes/stylesheet.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<section class="trips-page-section">
    <div class="container">

        <div class="trips-layout">

            <div class="trips-main">

                <div class="trips-page-heading">
                    <h1>Your Trips</h1>
                    <p>Manage your bookings, check trip details and access important travel information.</p>
                </div>

                <div class="trips-alert" id="tripsAlert">
                    <div class="trips-alert-content">
                        <i class="bi bi-check-circle"></i>
                        <span>You are signed in.</span>
                    </div>

                    <button type="button" class="trips-alert-close" id="tripsAlertClose">
                        <i class="bi bi-x"></i>
                    </button>
                </div>

                <div class="trips-stats-row">
                    <div class="trips-stat-card w-100">
                        <div class="trips-stat-icon">
                            <i class="bi bi-calendar3"></i>
                        </div>

                        <div>
                            <span>Upcoming</span>
                            <h3>2</h3>
                            <p>Next: 03 Jun 2026</p>
                        </div>
                    </div>
                </div>

                <div class="trips-list">

                    <article class="trip-card">
                        <div class="trip-route-block">
                            <span class="trip-type-badge">Multi-city</span>

                            <h2>Mumbai <i class="bi bi-arrow-right"></i> Dubai <i class="bi bi-arrow-right"></i> Paris</h2>

                            <div class="trip-date-row">
                                <span>
                                    <i class="bi bi-calendar3"></i>
                                    03 Jun 2026 - 14 Jun 2026
                                </span>

                                <span class="trip-dot"></span>

                                <!-- <span>12 days</span> -->
                            </div>

                            <div class="trip-airline-row">
                                <span class="trip-airline-badge">
                                    <span class="trip-airline-logo emirates-logo">
                                        <img src="assets/images/Emirates-Logo.png" alt="Emirates">
                                    </span>
                                    Emirates
                                </span>

                                <span class="trip-flight-badge">EK 503, EK 71</span>
                            </div>
                        </div>

                        <div class="trip-info-block">
                            <div class="trip-info-item">
                                <i class="bi bi-calendar4"></i>
                                <div>
                                    <span>Booking ref. (PNR)</span>
                                    <strong>NTT26A8F7</strong>
                                </div>
                            </div>

                            <div class="trip-info-item">
                                <i class="bi bi-calendar-check"></i>
                                <div>
                                    <span>Booking date</span>
                                    <strong>20 May 2026</strong>
                                </div>
                            </div>
                        </div>

                        <div class="trip-info-block">
                            <div class="trip-info-item">
                                <i class="bi bi-person"></i>
                                <div>
                                    <span>Passengers</span>
                                    <strong>2 Adults</strong>
                                </div>
                            </div>

                            <div class="trip-info-item">
                                <i class="bi bi-signpost-split"></i>
                                <div>
                                    <span>Trip type</span>
                                    <strong>Multi-city</strong>
                                </div>
                            </div>
                        </div>

                        <div class="trip-action-block">
                            <span class="trip-status-badge status-request">On Request</span>

                            <a href="trip-details.php" class="trip-action-btn">
                                View details
                                <i class="bi bi-chevron-right"></i>
                            </a>

                            <!-- <a href="#" class="trip-action-btn">
                                <i class="bi bi-download"></i>
                                Download invoice
                            </a> -->
                        </div>
                    </article>

                    <article class="trip-card">
                        <div class="trip-route-block">
                            <span class="trip-type-badge">Round trip</span>

                            <h2>Delhi <i class="bi bi-arrow-left-right"></i> London</h2>

                            <div class="trip-date-row">
                                <span>
                                    <i class="bi bi-calendar3"></i>
                                    21 Jul 2026 - 30 Jul 2026
                                </span>

                                <span class="trip-dot"></span>

                                <!-- <span>10 days</span> -->
                            </div>

                            <div class="trip-airline-row">
                                <span class="trip-airline-badge">
                                    <span class="trip-airline-logo ba-logo">BA</span>
                                    British Airways
                                </span>

                                <span class="trip-flight-badge">BA 257, BA 258</span>
                            </div>
                        </div>

                        <div class="trip-info-block">
                            <div class="trip-info-item">
                                <i class="bi bi-calendar4"></i>
                                <div>
                                    <span>Booking ref. (PNR)</span>
                                    <strong>NTT26J4K2</strong>
                                </div>
                            </div>

                            <div class="trip-info-item">
                                <i class="bi bi-calendar-check"></i>
                                <div>
                                    <span>Booking date</span>
                                    <strong>11 May 2026</strong>
                                </div>
                            </div>
                        </div>

                        <div class="trip-info-block">
                            <div class="trip-info-item">
                                <i class="bi bi-person"></i>
                                <div>
                                    <span>Passengers</span>
                                    <strong>1 Adult</strong>
                                </div>
                            </div>

                            <div class="trip-info-item">
                                <i class="bi bi-signpost-split"></i>
                                <div>
                                    <span>Trip type</span>
                                    <strong>Round trip</strong>
                                </div>
                            </div>
                        </div>

                        <div class="trip-action-block">
                            <span class="trip-status-badge status-upcoming">Upcoming</span>

                            <a href="trip-details.php" class="trip-action-btn">
                                View details
                                <i class="bi bi-chevron-right"></i>
                            </a>

                            <!-- <a href="#" class="trip-action-btn">
                                <i class="bi bi-download"></i>
                                Download invoice
                            </a> -->
                        </div>
                    </article>

                    <article class="trip-card">
                        <div class="trip-route-block">
                            <span class="trip-type-badge">One way</span>

                            <h2>Bengaluru <i class="bi bi-arrow-right"></i> Singapore</h2>

                            <div class="trip-date-row">
                                <span>
                                    <i class="bi bi-calendar3"></i>
                                    18 May 2026
                                </span>

                                <span class="trip-dot"></span>

                                <!-- <span>1 day</span> -->
                            </div>

                            <div class="trip-airline-row">
                                <span class="trip-airline-badge">
                                    <span class="trip-airline-logo sq-logo">SQ</span>
                                    Singapore Airlines
                                </span>

                                <span class="trip-flight-badge">SQ 517</span>
                            </div>
                        </div>

                        <div class="trip-info-block">
                            <div class="trip-info-item">
                                <i class="bi bi-calendar4"></i>
                                <div>
                                    <span>Booking ref. (PNR)</span>
                                    <strong>NTT26M2Q9</strong>
                                </div>
                            </div>

                            <div class="trip-info-item">
                                <i class="bi bi-calendar-check"></i>
                                <div>
                                    <span>Booking date</span>
                                    <strong>02 May 2026</strong>
                                </div>
                            </div>
                        </div>

                        <div class="trip-info-block">
                            <div class="trip-info-item">
                                <i class="bi bi-person"></i>
                                <div>
                                    <span>Passengers</span>
                                    <strong>1 Adult</strong>
                                </div>
                            </div>

                            <div class="trip-info-item">
                                <i class="bi bi-signpost-split"></i>
                                <div>
                                    <span>Trip type</span>
                                    <strong>One way</strong>
                                </div>
                            </div>
                        </div>

                        <div class="trip-action-block">
                            <span class="trip-status-badge status-completed">Completed</span>

                            <a href="trip-details.php" class="trip-action-btn">
                                View details
                                <i class="bi bi-chevron-right"></i>
                            </a>

                            <!-- <a href="#" class="trip-action-btn">
                                <i class="bi bi-download"></i>
                                Download invoice
                            </a> -->
                        </div>
                    </article>

                </div>

                <p class="trips-count-text">Showing 3 of 3 trips</p>

            </div>

            <aside class="trips-sidebar" id="tripsSidebar">

                <div class="trips-side-card">
                    <h3>My Account</h3>

                    <ul class="trips-account-menu">
                        <li>
                            <a href="profile.php">
                                <i class="bi bi-person"></i>
                                My Profile
                            </a>
                        </li>

                        <li>
                            <a href="bookings.php" class="active">
                                <i class="bi bi-calendar3"></i>
                                Bookings
                            </a>
                        </li>

                        <li>
                            <a href="index.php">
                                <i class="bi bi-box-arrow-right"></i>
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="trips-side-card">
                    <div class="trips-side-title-icon">
                        <i class="bi bi-headset"></i>
                        <h3>Need help?</h3>
                    </div>

                    <p class="trips-help-text">
                        Our support team is here to help you with any travel queries.
                    </p>

                    <div class="trips-contact-line">
                        <i class="bi bi-envelope"></i>
                        <span>support@nakamuratravels.com</span>
                    </div>

                    <div class="trips-contact-line">
                        <i class="bi bi-telephone"></i>
                        <span>+91 98765 43210</span>
                    </div>

                    <a href="#" class="trips-help-btn">
                        Visit help center
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="trips-side-card">
                    <div class="trips-side-title-icon trips-tip-title">
                        <i class="bi bi-lightbulb"></i>
                        <h3>Upcoming travel tips</h3>
                    </div>

                    <ul class="trips-tips-list">
                        <li>
                            <i class="bi bi-star"></i>
                            Arrive at the airport 3 hours early for international flights.
                        </li>

                        <li>
                            <i class="bi bi-file-earmark-text"></i>
                            Keep digital copies of your travel documents handy.
                        </li>

                        <li>
                            <i class="bi bi-shield-check"></i>
                            Check visa requirements for your destination before travel.
                        </li>
                    </ul>

                    <a href="#" class="trips-view-tips-link">
                        View all tips
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </div>

            </aside>

        </div>

    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
