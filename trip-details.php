<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Details | Nakamura Tour &amp; Travels</title>
    <?php include __DIR__ . '/includes/stylesheet.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<section class="trip-details-page-section">
    <div class="container">

        <nav class="trip-breadcrumb" aria-label="breadcrumb">
            <a href="passenger-panel.php">Home</a>
            <i class="bi bi-chevron-right"></i>
            <a href="bookings.php">Bookings</a>
            <i class="bi bi-chevron-right"></i>
            <span class="trip-breadcrumb-current">Trip Details</span>
        </nav>

        <div class="trip-details-header">
            <div class="trip-details-heading">
                <div class="trip-details-title-row">
                    <h1>Trip to Paris</h1>
                    <span class="trip-status-pill status-completed-pill">Completed</span>
                </div>

                <div class="trip-details-meta-row">
                    <span class="trip-details-meta-date">
                        <i class="bi bi-calendar3"></i>
                        03 Jun 2026 - 14 Jun 2026
                    </span>

                    <span class="trip-details-meta-dot"></span>

                    <span class="trip-details-meta-type">One way</span>
                </div>
            </div>

            <div class="trip-details-actions">
                <div class="dropdown trip-download-dropdown">
                    <button type="button" class="trip-download-btn trip-download-primary" data-bs-toggle="dropdown" data-bs-offset="0,10" aria-expanded="false">
                        <i class="bi bi-download"></i>
                        <span>Download Ticket</span>
                        <i class="bi bi-chevron-down trip-download-caret"></i>
                    </button>

                    <ul class="dropdown-menu trip-download-menu">
                        <li><a class="dropdown-item" href="#">With price</a></li>
                        <li><a class="dropdown-item" href="#">Without price</a></li>
                        <li><a class="dropdown-item" href="#">EMON BIUYA</a></li>
                        <li><a class="dropdown-item" href="#">FARJANA AKTER</a></li>
                    </ul>
                </div>

                <div class="dropdown trip-download-dropdown">
                    <button type="button" class="trip-download-btn trip-download-outline" data-bs-toggle="dropdown" data-bs-offset="0,10" aria-expanded="false">
                        <i class="bi bi-file-earmark-plus"></i>
                        <span>Download Invoice</span>
                        <i class="bi bi-chevron-down trip-download-caret"></i>
                    </button>

                    <ul class="dropdown-menu trip-download-menu">
                        <li><a class="dropdown-item" href="#">All passengers</a></li>
                        <li><a class="dropdown-item" href="#">EMON BIUYA</a></li>
                        <li><a class="dropdown-item" href="#">FARJANA AKTER</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="trip-details-layout">

            <div class="trip-details-main">

                <div class="trip-details-card">
                    <ul class="trip-details-tabs" role="tablist">
                        <li><button type="button" class="trip-tab is-active" data-trip-tab="itinerary">Itinerary</button></li>
                        <li><button type="button" class="trip-tab" data-trip-tab="passengers">Passenger Details</button></li>
                        <li><button type="button" class="trip-tab" data-trip-tab="fare">Fare Breakdown</button></li>
                        <li><button type="button" class="trip-tab" data-trip-tab="payment">Payment Details</button></li>
                        <li><button type="button" class="trip-tab" data-trip-tab="baggage">Baggage</button></li>
                        <li><button type="button" class="trip-tab" data-trip-tab="cancellation">Cancellation Policy</button></li>
                    </ul>

                    <div class="trip-tab-panel is-active" data-trip-panel="itinerary">

                        <div class="trip-itinerary">

                            <article class="trip-segment">
                                <div class="trip-segment-marker">
                                    <span class="trip-segment-number">1</span>
                                </div>

                                <div class="trip-segment-body">
                                    <div class="trip-segment-grid">
                                        <div class="trip-segment-route">
                                            <div class="trip-segment-cities">
                                                <h2>Mumbai (BOM) <i class="bi bi-arrow-right"></i> Dubai (DXB)</h2>
                                            </div>

                                            <div class="trip-segment-airline">
                                                <span class="trip-airline-badge">
                                                    <span class="trip-airline-logo emirates-logo">
                                                        <img src="assets/images/Emirates-Logo.png" alt="Emirates">
                                                    </span>
                                                    Emirates
                                                </span>

                                                <span class="trip-segment-dot"></span>
                                                <span class="trip-segment-flight">EK 503</span>
                                                <span class="trip-segment-dot"></span>
                                                <span class="trip-segment-aircraft">Boeing 777-300ER</span>
                                            </div>

                                            <div class="trip-segment-times">
                                                <div class="trip-time-block">
                                                    <span class="trip-time-label">Depart</span>
                                                    <strong class="trip-time-value">11:15</strong>
                                                    <span class="trip-time-date">03 June Wed</span>
                                                    <p class="trip-time-airport">Chhatrapati Shivaji Maharaj International Airport</p>
                                                </div>

                                                <div class="trip-time-duration">
                                                    <span class="trip-duration-text">3h 20m</span>
                                                    <div class="trip-duration-line">
                                                        <i class="bi bi-airplane-fill"></i>
                                                    </div>
                                                    <span class="trip-duration-stop">Non-stop</span>
                                                </div>

                                                <div class="trip-time-block">
                                                    <span class="trip-time-label">Arrive</span>
                                                    <strong class="trip-time-value">13:35</strong>
                                                    <span class="trip-time-date">03 June Wed</span>
                                                    <p class="trip-time-airport"><strong>DXB</strong><br>Dubai International Airport</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="trip-segment-extras">
                                            <div class="trip-extra-item">
                                                <i class="bi bi-airplane"></i>
                                                <div>
                                                    <span>Cabin class</span>
                                                    <strong>Economy</strong>
                                                </div>
                                            </div>

                                            <div class="trip-extra-item">
                                                <i class="bi bi-suitcase2"></i>
                                                <div>
                                                    <span>Baggage allowance</span>
                                                    <strong>30 kg</strong>
                                                </div>
                                            </div>

                                            <div class="trip-extra-item">
                                                <i class="bi bi-grid-3x3-gap"></i>
                                                <div>
                                                    <span>Seat</span>
                                                    <strong>25A</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <div class="trip-transit">
                                <span class="trip-transit-line trip-transit-line-left"></span>

                                <div class="trip-transit-card">
                                    <div class="trip-transit-info">
                                        <strong>Transit in Dubai (DXB)</strong>
                                        <span>Dubai International Airport</span>
                                    </div>

                                    <div class="trip-transit-divider"></div>

                                    <div class="trip-transit-layover">
                                        <span>Layover:</span>
                                        <strong>2h 05m</strong>
                                    </div>
                                </div>

                                <span class="trip-transit-line trip-transit-line-right"></span>
                            </div>

                            <article class="trip-segment">
                                <div class="trip-segment-marker">
                                    <span class="trip-segment-number">2</span>
                                </div>

                                <div class="trip-segment-body">
                                    <div class="trip-segment-grid">
                                        <div class="trip-segment-route">
                                            <div class="trip-segment-cities">
                                                <h2>Dubai (DXB) <i class="bi bi-arrow-right"></i> Paris (CDG)</h2>
                                            </div>

                                            <div class="trip-segment-airline">
                                                <span class="trip-airline-badge">
                                                    <span class="trip-airline-logo emirates-logo">
                                                        <img src="assets/images/Emirates-Logo.png" alt="Emirates">
                                                    </span>
                                                    Emirates
                                                </span>

                                                <span class="trip-segment-dot"></span>
                                                <span class="trip-segment-flight">EK 71</span>
                                                <span class="trip-segment-dot"></span>
                                                <span class="trip-segment-aircraft">Airbus A380-800</span>
                                            </div>

                                            <div class="trip-segment-times">
                                                <div class="trip-time-block">
                                                    <span class="trip-time-label">Depart</span>
                                                    <strong class="trip-time-value">15:40</strong>
                                                    <span class="trip-time-date">03 June Wed</span>
                                                    <p class="trip-time-airport"><strong>DXB</strong><br>Dubai International Airport</p>
                                                </div>

                                                <div class="trip-time-duration">
                                                    <span class="trip-duration-text">7h 25m</span>
                                                    <div class="trip-duration-line">
                                                        <i class="bi bi-airplane-fill"></i>
                                                    </div>
                                                    <span class="trip-duration-stop">Non-stop</span>
                                                </div>

                                                <div class="trip-time-block">
                                                    <span class="trip-time-label">Arrive</span>
                                                    <strong class="trip-time-value">20:05</strong>
                                                    <span class="trip-time-date">03 June Wed</span>
                                                    <p class="trip-time-airport"><strong>CDG</strong><br>Charles de Gaulle Airport</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="trip-segment-extras">
                                            <div class="trip-extra-item">
                                                <i class="bi bi-airplane"></i>
                                                <div>
                                                    <span>Cabin class</span>
                                                    <strong>Economy</strong>
                                                </div>
                                            </div>

                                            <div class="trip-extra-item">
                                                <i class="bi bi-suitcase2"></i>
                                                <div>
                                                    <span>Baggage allowance</span>
                                                    <strong>30 kg</strong>
                                                </div>
                                            </div>

                                            <div class="trip-extra-item">
                                                <i class="bi bi-grid-3x3-gap"></i>
                                                <div>
                                                    <span>Seat</span>
                                                    <strong>25A</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>

                    <div class="trip-tab-panel" data-trip-panel="passengers">
                        <p class="trip-tab-empty">Passenger details will appear here.</p>
                    </div>

                    <div class="trip-tab-panel" data-trip-panel="fare">
                        <p class="trip-tab-empty">Fare breakdown will appear here.</p>
                    </div>

                    <div class="trip-tab-panel" data-trip-panel="payment">
                        <p class="trip-tab-empty">Payment details will appear here.</p>
                    </div>

                    <div class="trip-tab-panel" data-trip-panel="baggage">
                        <p class="trip-tab-empty">Baggage information will appear here.</p>
                    </div>

                    <div class="trip-tab-panel" data-trip-panel="cancellation">
                        <p class="trip-tab-empty">Cancellation policy will appear here.</p>
                    </div>

                </div>

            </div>

            <aside class="trip-details-sidebar">

                <div class="trip-side-card trip-price-card">
                    <h3>Price summary</h3>

                    <div class="trip-price-row">
                        <span>Base fare (2 Adults)</span>
                        <strong>&#8377; 3,20,000</strong>
                    </div>

                    <div class="trip-price-row">
                        <span>Taxes &amp; fees</span>
                        <strong>&#8377; 73,250</strong>
                    </div>

                    <div class="trip-price-divider"></div>

                    <div class="trip-price-total">
                        <span>Total paid</span>
                        <strong>&#8377; 3,93,250</strong>
                    </div>
                </div>

                <div class="trip-side-card trip-help-card">
                    <div class="trip-help-head">
                        <span class="trip-help-icon">
                            <i class="bi bi-headset"></i>
                        </span>

                        <div>
                            <h3>Need help?</h3>
                            <p>Our support team is here to help you with any travel queries.</p>
                        </div>
                    </div>

                    <a href="mailto:support@nakamuratravels.com" class="trip-help-contact">
                        <i class="bi bi-envelope"></i>
                        <span>support@nakamuratravels.com</span>
                    </a>

                    <a href="tel:+919876543210" class="trip-help-contact">
                        <i class="bi bi-telephone"></i>
                        <span>+91 98765 43210</span>
                    </a>

                    <a href="#" class="trip-help-support-btn">Contact Support</a>
                </div>

            </aside>

        </div>

    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
