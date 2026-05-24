<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancel Booking | Nakamura Tour &amp; Travels</title>
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
            <span class="trip-breadcrumb-current">Cancel Booking</span>
        </nav>

        <div class="trip-details-header">
            <div class="trip-details-heading">
                <div class="trip-details-title-row">
                    <h1>Cancel Booking</h1>
                </div>

                <div class="trip-details-meta-row">
                    <span class="trip-details-meta-type">Review your refund and confirm the cancellation</span>
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
                                <p>The booking you are about to cancel</p>
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
                                <span class="manage-field-label">Total paid</span>
                                <span class="manage-field-value">&yen; 1,96,625</span>
                            </div>
                        </div>
                    </div>

                    <div class="manage-card">
                        <div class="manage-card-head">
                            <i class="bi bi-cash-coin"></i>
                            <div>
                                <h3>Refund Details</h3>
                                <p>Cancelled 30+ days before departure &mdash; full base fare refund</p>
                            </div>
                        </div>

                        <div class="manage-refund-row">
                            <span>Total amount paid</span>
                            <strong>&yen; 1,96,625</strong>
                        </div>

                        <div class="manage-refund-row is-deduct">
                            <span>Cancellation charge (30+ days, 0%)</span>
                            <strong>&minus; &yen; 0</strong>
                        </div>

                        <div class="manage-refund-row is-deduct">
                            <span>Non-refundable taxes &amp; service fees</span>
                            <strong>&minus; &yen; 36,625</strong>
                        </div>

                        <div class="manage-refund-total">
                            <span>Estimated refund</span>
                            <strong>&yen; 1,60,000</strong>
                        </div>
                    </div>

                    <div class="manage-card">
                        <div class="manage-card-head">
                            <i class="bi bi-chat-left-text"></i>
                            <div>
                                <h3>Reason for Cancellation</h3>
                                <p>Help us improve by telling us why you are cancelling</p>
                            </div>
                        </div>

                        <div class="manage-form-group">
                            <label for="cancelReason" class="manage-form-label">Reason</label>
                            <select id="cancelReason" name="cancel_reason" class="manage-control">
                                <option value="" selected>Select a reason</option>
                                <option value="plans">Change of travel plans</option>
                                <option value="price">Found a better price</option>
                                <option value="medical">Medical or family emergency</option>
                                <option value="visa">Visa or travel document issue</option>
                                <option value="mistake">Booked by mistake</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="manage-form-group">
                            <label for="cancelComments" class="manage-form-label">Additional comments (optional)</label>
                            <textarea id="cancelComments" name="cancel_comments" class="manage-control" placeholder="Tell us more about your cancellation..."></textarea>
                        </div>
                    </div>

                    <div class="manage-note manage-note-warning">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        <div>
                            <strong>This action cannot be undone</strong>
                            <p>Once confirmed, your seats will be released and the booking cannot be reinstated. Refunds are processed to your original payment method within 7-10 business days.</p>
                        </div>
                    </div>

                    <div class="manage-card">
                        <label class="manage-ack">
                            <input type="checkbox" name="cancel_ack" required>
                            <span>I understand the cancellation charges and agree to cancel this booking. The estimated refund of &yen; 1,60,000 will be credited to my original payment method.</span>
                        </label>
                    </div>

                    <div class="manage-actions">
                        <button type="submit" class="manage-btn manage-btn-danger">
                            <i class="bi bi-x-circle"></i>
                            Confirm Cancellation
                        </button>

                        <a href="trip-details-roundtrip.php" class="manage-btn manage-btn-ghost">
                            <i class="bi bi-arrow-left"></i>
                            Keep Booking
                        </a>
                    </div>

                </form>

            </div>

            <aside class="trip-details-sidebar">

                <div class="trip-side-card">
                    <h3>Estimated refund</h3>

                    <div class="manage-side-refund">
                        <span>You will receive</span>
                        <strong>&yen; 1,60,000</strong>
                    </div>

                    <p class="manage-side-note">Credited to your original payment method (Credit Card ending in 4242) within 7-10 business days of confirmation.</p>
                </div>

                <div class="trip-side-card">
                    <h3>Before you cancel</h3>

                    <ul class="manage-side-list">
                        <li>
                            <i class="bi bi-arrow-repeat"></i>
                            Consider changing your dates instead &mdash; it may cost less than cancelling.
                        </li>
                        <li>
                            <i class="bi bi-receipt-cutoff"></i>
                            Taxes, service fees and convenience charges are non-refundable.
                        </li>
                        <li>
                            <i class="bi bi-shield-check"></i>
                            If you bought travel insurance, additional coverage may apply.
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
