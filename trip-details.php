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
                                                    <p class="trip-time-airport"><strong>BOM</strong><br>Mumbai International Airport
</p>
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

                        <div class="trip-pax-summary">
                            <div class="trip-pax-summary-item">
                                <span class="trip-pax-summary-icon">
                                    <i class="bi bi-people"></i>
                                </span>
                                <div class="trip-pax-summary-text">
                                    <span>Total passengers</span>
                                    <strong>2 Adults</strong>
                                </div>
                            </div>

                            <div class="trip-pax-summary-item">
                                <span class="trip-pax-summary-icon">
                                    <i class="bi bi-person-vcard"></i>
                                </span>
                                <div class="trip-pax-summary-text">
                                    <span>Booking ID</span>
                                    <strong>NKM-PAR-0626</strong>
                                </div>
                            </div>

                            <div class="trip-pax-summary-item">
                                <span class="trip-pax-summary-icon">
                                    <i class="bi bi-telephone"></i>
                                </span>
                                <div class="trip-pax-summary-text">
                                    <span>Primary contact</span>
                                    <strong>+91 98765 43210</strong>
                                </div>
                            </div>

                            <div class="trip-pax-summary-item">
                                <span class="trip-pax-summary-icon">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <div class="trip-pax-summary-text">
                                    <span>Email</span>
                                    <strong>support@nakamuratravels.com</strong>
                                </div>
                            </div>
                        </div>

                        <article class="trip-pax-card">
                            <header class="trip-pax-card-head">
                                <span class="trip-pax-number">1</span>
                                <h3>Passenger 1 (Adult)</h3>
                            </header>

                            <div class="trip-pax-grid">
                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">First name</span>
                                    <strong class="trip-pax-value">Tanvir</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Last name</span>
                                    <strong class="trip-pax-value">Ahmed</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Gender</span>
                                    <strong class="trip-pax-value">Male</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Date of birth</span>
                                    <strong class="trip-pax-value">12 Aug 1985</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Nationality</span>
                                    <strong class="trip-pax-value">Bangladeshi</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Passport number</span>
                                    <strong class="trip-pax-value">A12345678</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Passport expiry date</span>
                                    <strong class="trip-pax-value">02 Jun 2035</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Email address</span>
                                    <strong class="trip-pax-value">tanvir@example.com</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Phone number</span>
                                    <strong class="trip-pax-value">+880 1712 345678</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Passenger type</span>
                                    <strong class="trip-pax-value">Adult</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Seat preference</span>
                                    <strong class="trip-pax-value">25A</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Frequent flyer (Optional)</span>
                                    <strong class="trip-pax-value trip-pax-value-muted">Not provided</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Special requests (Optional)</span>
                                    <strong class="trip-pax-value trip-pax-value-muted">No special requests</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Upload passport photo</span>
                                    <a href="#" class="trip-pax-file">
                                        <i class="bi bi-file-earmark-text"></i>
                                        <span>passport.jpg</span>
                                    </a>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Redress number (if any)</span>
                                    <strong class="trip-pax-value trip-pax-value-muted">Not provided</strong>
                                </div>
                            </div>
                        </article>

                        <article class="trip-pax-card">
                            <header class="trip-pax-card-head">
                                <span class="trip-pax-number">2</span>
                                <h3>Passenger 2 (Adult)</h3>
                            </header>

                            <div class="trip-pax-grid">
                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">First name</span>
                                    <strong class="trip-pax-value">Farjana</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Last name</span>
                                    <strong class="trip-pax-value">Akter</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Gender</span>
                                    <strong class="trip-pax-value">Female</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Date of birth</span>
                                    <strong class="trip-pax-value">21 Sep 1990</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Nationality</span>
                                    <strong class="trip-pax-value">Bangladeshi</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Passport number</span>
                                    <strong class="trip-pax-value">B4827195</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Passport expiry date</span>
                                    <strong class="trip-pax-value">11 Jan 2031</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Email address</span>
                                    <strong class="trip-pax-value">farjana@example.com</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Phone number</span>
                                    <strong class="trip-pax-value">+880 1811 223344</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Passenger type</span>
                                    <strong class="trip-pax-value">Adult</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Seat preference</span>
                                    <strong class="trip-pax-value">25B</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Frequent flyer (Optional)</span>
                                    <strong class="trip-pax-value trip-pax-value-muted">Not provided</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Special requests (Optional)</span>
                                    <strong class="trip-pax-value">Vegetarian meal</strong>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Upload passport photo</span>
                                    <a href="#" class="trip-pax-file">
                                        <i class="bi bi-file-earmark-text"></i>
                                        <span>farjana-passport.jpg</span>
                                    </a>
                                </div>

                                <div class="trip-pax-field">
                                    <span class="trip-pax-label">Redress number (if any)</span>
                                    <strong class="trip-pax-value trip-pax-value-muted">Not provided</strong>
                                </div>
                            </div>
                        </article>

                    </div>

                    <div class="trip-tab-panel" data-trip-panel="fare">
                        <p class="trip-tab-empty">Fare breakdown will appear here.</p>
                    </div>

                    <div class="trip-tab-panel" data-trip-panel="payment">

                        <div class="trip-payment">
                            <div class="trip-payment-side trip-payment-left">
                                <h3 class="trip-payment-title">Payment Details</h3>

                                <div class="trip-payment-grid">
                                    <div class="trip-payment-field">
                                        <span class="trip-payment-label">Payment Method</span>
                                        <strong class="trip-payment-value">Credit Card (Visa)</strong>
                                    </div>

                                    <div class="trip-payment-field">
                                        <span class="trip-payment-label">Paid Amount</span>
                                        <strong class="trip-payment-value">&yen;55,320</strong>
                                    </div>

                                    <div class="trip-payment-field">
                                        <span class="trip-payment-label">Payment Status</span>
                                        <span class="trip-payment-status-pill">Paid</span>
                                    </div>

                                    <div class="trip-payment-field">
                                        <span class="trip-payment-label">Payment Date</span>
                                        <strong class="trip-payment-value">10 Jun 2025, 10:30 AM</strong>
                                    </div>

                                    <div class="trip-payment-field">
                                        <span class="trip-payment-label">Transaction ID</span>
                                        <strong class="trip-payment-value">TXN1234567890</strong>
                                    </div>

                                    <div class="trip-payment-field">
                                        <span class="trip-payment-label">Billing Name</span>
                                        <strong class="trip-payment-value">Tanvir Ahmed</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="trip-payment-side trip-payment-right">
                                <div class="trip-payment-card-head">
                                    <h3 class="trip-payment-title">Card Information</h3>
                                    <span class="trip-payment-brand">VISA</span>
                                </div>

                                <div class="trip-payment-fields">
                                    <div class="trip-payment-field">
                                        <span class="trip-payment-label">Card Number</span>
                                        <strong class="trip-payment-value trip-payment-card-number">&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; 4242</strong>
                                    </div>

                                    <div class="trip-payment-field">
                                        <span class="trip-payment-label">Card Holder Name</span>
                                        <strong class="trip-payment-value">Tanvir Ahmed</strong>
                                    </div>

                                    <div class="trip-payment-field">
                                        <span class="trip-payment-label">Expiry Date</span>
                                        <strong class="trip-payment-value">06 / 27</strong>
                                    </div>

                                    <div class="trip-payment-field">
                                        <span class="trip-payment-label">Bank Name</span>
                                        <strong class="trip-payment-value">Mitsubishi UFJ Bank</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="trip-tab-panel" data-trip-panel="baggage">

                        <h3 class="trip-baggage-title">Baggage Details</h3>

                        <div class="trip-baggage-routes">

                            <div class="trip-baggage-route">
                                <h4 class="trip-baggage-route-title">
                                    Dhaka (DAC)
                                    <i class="bi bi-arrow-right"></i>
                                    Tokyo (NRT)
                                </h4>

                                <div class="trip-baggage-card">
                                    <div class="trip-baggage-airline">
                                        <div class="trip-baggage-airline-head">
                                            <span class="trip-baggage-logo trip-baggage-logo-biman">
                                                <img src="assets/images/bimanbd-logo.png" alt="Biman Bangladesh Airlines">
                                            </span>
                                            <strong>Biman Bangladesh Airlines</strong>
                                        </div>

                                        <div class="trip-baggage-item">
                                            <span>Checked Baggage</span>
                                            <strong>1 Piece(s), 23kg</strong>
                                        </div>

                                        <div class="trip-baggage-item">
                                            <span>Cabin Baggage</span>
                                            <strong>1 Piece(s), 7kg</strong>
                                        </div>
                                    </div>

                                    <div class="trip-baggage-airline">
                                        <div class="trip-baggage-airline-head">
                                            <span class="trip-baggage-logo trip-baggage-logo-cz">
                                                <img src="assets/images/china-southern-logo.png" alt="China Southern Airlines">
                                            </span>
                                            <strong>China Southern Airlines</strong>
                                        </div>

                                        <div class="trip-baggage-item">
                                            <span>Checked Baggage</span>
                                            <strong>1 Piece(s), 23kg</strong>
                                        </div>

                                        <div class="trip-baggage-item">
                                            <span>Cabin Baggage</span>
                                            <strong>1 Piece(s), 7kg</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="trip-baggage-route">
                                <h4 class="trip-baggage-route-title">
                                    Tokyo (NRT)
                                    <i class="bi bi-arrow-right"></i>
                                    Dhaka (DAC)
                                </h4>

                                <div class="trip-baggage-card">
                                    <div class="trip-baggage-airline">
                                        <div class="trip-baggage-airline-head">
                                            <span class="trip-baggage-logo trip-baggage-logo-biman">
                                                <img src="assets/images/bimanbd-logo.png" alt="Biman Bangladesh Airlines">
                                            </span>
                                            <strong>Biman Bangladesh Airlines</strong>
                                        </div>

                                        <div class="trip-baggage-item">
                                            <span>Checked Baggage</span>
                                            <strong>1 Piece(s), 23kg</strong>
                                        </div>

                                        <div class="trip-baggage-item">
                                            <span>Cabin Baggage</span>
                                            <strong>1 Piece(s), 7kg</strong>
                                        </div>
                                    </div>

                                    <div class="trip-baggage-airline">
                                        <div class="trip-baggage-airline-head">
                                            <span class="trip-baggage-logo trip-baggage-logo-cz">
                                                <img src="assets/images/china-southern-logo.png" alt="China Southern Airlines">
                                            </span>
                                            <strong>China Southern Airlines</strong>
                                        </div>

                                        <div class="trip-baggage-item">
                                            <span>Checked Baggage</span>
                                            <strong>1 Piece(s), 23kg</strong>
                                        </div>

                                        <div class="trip-baggage-item">
                                            <span>Cabin Baggage</span>
                                            <strong>1 Piece(s), 7kg</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="trip-baggage-note">
                            <i class="bi bi-info-circle-fill"></i>
                            <div>
                                <strong>Important Information</strong>
                                <p>Baggage allowance may vary based on fare rules. Excess baggage will be subject to airline charges.</p>
                            </div>
                        </div>

                    </div>

                    <div class="trip-tab-panel" data-trip-panel="cancellation">

                        <div class="trip-cancel-head">
                            <h3 class="trip-cancel-title">Cancellation Policy</h3>
                            <p class="trip-cancel-desc">Refund amount depends on how far in advance you cancel before the departure date.</p>
                        </div>

                        <div class="trip-cancel-tiers">
                            <article class="trip-cancel-tier trip-cancel-tier-success">
                                <div class="trip-cancel-tier-head">
                                    <span class="trip-cancel-tier-icon">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </span>
                                    <div class="trip-cancel-tier-when">
                                        <strong>30+ days before</strong>
                                        <span>More than 30 days to go</span>
                                    </div>
                                </div>

                                <div class="trip-cancel-tier-body">
                                    <span class="trip-cancel-amount">100%</span>
                                    <p>Full refund</p>
                                </div>
                            </article>

                            <article class="trip-cancel-tier trip-cancel-tier-warning">
                                <div class="trip-cancel-tier-head">
                                    <span class="trip-cancel-tier-icon">
                                        <i class="bi bi-exclamation-triangle-fill"></i>
                                    </span>
                                    <div class="trip-cancel-tier-when">
                                        <strong>7 - 29 days before</strong>
                                        <span>1 week to 1 month to go</span>
                                    </div>
                                </div>

                                <div class="trip-cancel-tier-body">
                                    <span class="trip-cancel-amount">50%</span>
                                    <p>Partial refund</p>
                                </div>
                            </article>

                            <article class="trip-cancel-tier trip-cancel-tier-danger">
                                <div class="trip-cancel-tier-head">
                                    <span class="trip-cancel-tier-icon">
                                        <i class="bi bi-x-circle-fill"></i>
                                    </span>
                                    <div class="trip-cancel-tier-when">
                                        <strong>Less than 7 days</strong>
                                        <span>Within the week of travel</span>
                                    </div>
                                </div>

                                <div class="trip-cancel-tier-body">
                                    <span class="trip-cancel-amount">0%</span>
                                    <p>Non-refundable</p>
                                </div>
                            </article>
                        </div>

                        <div class="trip-cancel-section">
                            <h4 class="trip-cancel-section-title">Refund Process</h4>

                            <ul class="trip-cancel-list">
                                <li>
                                    <span class="trip-cancel-list-icon">
                                        <i class="bi bi-clock-history"></i>
                                    </span>
                                    <div>
                                        <strong>Processing time</strong>
                                        <p>Refunds are processed within 7-10 business days from the cancellation date.</p>
                                    </div>
                                </li>

                                <li>
                                    <span class="trip-cancel-list-icon">
                                        <i class="bi bi-credit-card-2-back"></i>
                                    </span>
                                    <div>
                                        <strong>Refund method</strong>
                                        <p>The refund will be credited to the original payment method (Credit Card ending in 4242).</p>
                                    </div>
                                </li>

                                <li>
                                    <span class="trip-cancel-list-icon">
                                        <i class="bi bi-receipt-cutoff"></i>
                                    </span>
                                    <div>
                                        <strong>Non-refundable charges</strong>
                                        <p>Service fees, taxes, and convenience charges are non-refundable, regardless of the cancellation tier.</p>
                                    </div>
                                </li>

                                <li>
                                    <span class="trip-cancel-list-icon">
                                        <i class="bi bi-shield-check"></i>
                                    </span>
                                    <div>
                                        <strong>Travel insurance</strong>
                                        <p>If you purchased travel insurance, additional coverage may apply. Please review your policy or contact the insurance provider.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="trip-cancel-note">
                            <i class="bi bi-info-circle-fill"></i>
                            <div>
                                <strong>Need to cancel?</strong>
                                <p>Contact our support team to start the cancellation process. The applicable refund will be calculated based on the date your cancellation request is received.</p>
                            </div>
                        </div>

                        <div class="trip-cancel-actions">
                            <a href="support-chat.php" class="trip-cancel-btn trip-cancel-btn-primary">
                                <i class="bi bi-chat-text"></i>
                                Request Cancellation
                            </a>
                            <a href="#" class="trip-cancel-btn trip-cancel-btn-outline">
                                <i class="bi bi-file-earmark-text"></i>
                                Read full terms
                            </a>
                        </div>

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

                    <a href="support-chat.php" class="trip-help-support-btn">Contact Support</a>
                </div>

            </aside>

        </div>

    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
