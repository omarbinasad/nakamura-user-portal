<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Booking | Nakamura Tour &amp; Travels</title>
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
            <a href="trip-details-roundtrip.php">Trip Details</a>
            <i class="bi bi-chevron-right"></i>
            <span class="trip-breadcrumb-current">Change Booking</span>
        </nav>

        <div class="trip-details-header">
            <div class="trip-details-heading">
                <div class="trip-details-title-row">
                    <h1>Change Booking</h1>
                </div>

                <div class="trip-details-meta-row">
                    <span class="trip-details-meta-type">Request a change to your existing booking</span>
                </div>
            </div>
        </div>

        <div class="trip-details-layout">

            <div class="trip-details-main">

                <form action="#" method="post" class="manage-stack">

                    <div class="manage-card">
                        <div class="manage-card-head">
                            <i class="bi bi-ticket-perforated"></i>
                            <div>
                                <h3>Booking Summary</h3>
                                <p>The booking you want to change</p>
                            </div>
                        </div>

                        <div class="manage-summary-route">
                            Delhi
                            <i class="bi bi-arrow-left-right"></i>
                            London
                        </div>

                        <div class="manage-summary-grid">
                            <div class="manage-field">
                                <span class="manage-field-label">Booking ref. (PNR)</span>
                                <span class="manage-field-value">NTT26J4K2</span>
                            </div>

                            <div class="manage-field">
                                <span class="manage-field-label">Trip type</span>
                                <span class="manage-field-value">Round trip</span>
                            </div>

                            <div class="manage-field">
                                <span class="manage-field-label">Travel dates</span>
                                <span class="manage-field-value">21 Jul 2026 - 30 Jul 2026</span>
                            </div>

                            <div class="manage-field">
                                <span class="manage-field-label">Passengers</span>
                                <span class="manage-field-value">1 Adult</span>
                            </div>

                            <div class="manage-field">
                                <span class="manage-field-label">Airline</span>
                                <span class="manage-field-value">British Airways</span>
                            </div>

                            <div class="manage-field">
                                <span class="manage-field-label">Cabin class</span>
                                <span class="manage-field-value">Economy</span>
                            </div>
                        </div>
                    </div>

                    <div class="manage-card">
                        <div class="manage-card-head">
                            <i class="bi bi-sliders"></i>
                            <div>
                                <h3>What would you like to change?</h3>
                                <p>Select one or more items you want to update</p>
                            </div>
                        </div>

                        <div class="manage-options">
                            <label class="manage-option">
                                <input type="checkbox" name="change_items[]" value="dates">
                                <span class="manage-option-text">
                                    <strong>Travel dates</strong>
                                    <span>Reschedule departure or return</span>
                                </span>
                            </label>

                            <label class="manage-option">
                                <input type="checkbox" name="change_items[]" value="passenger">
                                <span class="manage-option-text">
                                    <strong>Passenger details</strong>
                                    <span>Correct a name or document</span>
                                </span>
                            </label>

                            <label class="manage-option">
                                <input type="checkbox" name="change_items[]" value="seat">
                                <span class="manage-option-text">
                                    <strong>Seat selection</strong>
                                    <span>Change your preferred seat</span>
                                </span>
                            </label>

                            <label class="manage-option">
                                <input type="checkbox" name="change_items[]" value="baggage">
                                <span class="manage-option-text">
                                    <strong>Add extra baggage</strong>
                                    <span>Buy additional baggage allowance</span>
                                </span>
                            </label>

                            <label class="manage-option">
                                <input type="checkbox" name="change_items[]" value="meal">
                                <span class="manage-option-text">
                                    <strong>Meal preference</strong>
                                    <span>Update in-flight meal choice</span>
                                </span>
                            </label>

                            <label class="manage-option">
                                <input type="checkbox" name="change_items[]" value="upgrade">
                                <span class="manage-option-text">
                                    <strong>Cabin class upgrade</strong>
                                    <span>Move to Business or First</span>
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="manage-card">
                        <div class="manage-card-head">
                            <i class="bi bi-pencil-square"></i>
                            <div>
                                <h3>Change Details</h3>
                                <p>Tell us your preferred new options</p>
                            </div>
                        </div>

                        <div class="manage-summary-grid" style="margin-bottom: 18px;">
                            <div class="manage-form-group" style="margin-bottom: 0;">
                                <label for="newDeparture" class="manage-form-label">New departure date</label>
                                <input type="date" id="newDeparture" name="new_departure" class="manage-control">
                            </div>

                            <div class="manage-form-group" style="margin-bottom: 0;">
                                <label for="newReturn" class="manage-form-label">New return date</label>
                                <input type="date" id="newReturn" name="new_return" class="manage-control">
                            </div>
                        </div>

                        <div class="manage-form-group">
                            <label for="changeNotes" class="manage-form-label">Additional notes</label>
                            <textarea id="changeNotes" name="change_notes" class="manage-control" placeholder="Describe the changes you would like to make..."></textarea>
                        </div>
                    </div>

                    <div class="manage-note manage-note-info">
                        <i class="bi bi-info-circle-fill"></i>
                        <div>
                            <strong>Change fees may apply</strong>
                            <p>This is a change request, not a confirmed change. Our team will review availability and any fare difference or airline fees, then contact you with the final amount before processing.</p>
                        </div>
                    </div>

                    <div class="manage-actions">
                        <button type="submit" class="manage-btn manage-btn-primary">
                            <i class="bi bi-send"></i>
                            Submit Change Request
                        </button>

                        <a href="trip-details-roundtrip.php" class="manage-btn manage-btn-ghost">
                            <i class="bi bi-arrow-left"></i>
                            Cancel
                        </a>
                    </div>

                </form>

            </div>

            <aside class="trip-details-sidebar">

                <div class="trip-side-card">
                    <h3>How it works</h3>

                    <ul class="manage-side-list">
                        <li>
                            <i class="bi bi-1-circle"></i>
                            Select what you want to change and submit your request.
                        </li>
                        <li>
                            <i class="bi bi-2-circle"></i>
                            Our team checks availability and calculates any fee or fare difference.
                        </li>
                        <li>
                            <i class="bi bi-3-circle"></i>
                            You receive a confirmation with the final amount to approve.
                        </li>
                    </ul>
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
