<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Booking | Nakamura Tour &amp; Travels</title>
    <?php include __DIR__ . '/includes/stylesheet.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.css">
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
                    <span class="trip-details-meta-type">PNR NTT26J4K2 &middot; Delhi &harr; London &middot; Round trip</span>
                </div>
            </div>
        </div>

        <div class="trip-details-layout">

            <div class="trip-details-main">

                <form action="#" method="post" class="manage-stack">

                    <div class="manage-card">
                        <div class="manage-card-head">
                            <i class="bi bi-pencil-square"></i>
                            <div>
                                <h3>Change Details</h3>
                                <p>Select the segments and pick new travel dates</p>
                            </div>
                            <a href="trip-details-roundtrip.php#cancellation" class="manage-card-link">
                                <i class="bi bi-journal-text"></i>
                                Change &amp; Cancellation Policies
                            </a>
                        </div>

                        <div class="manage-note manage-note-info" style="margin-bottom: 22px;">
                            <i class="bi bi-info-circle-fill"></i>
                            <div>
                                <p>Nakamura Travels does not charge any additional service fees for changes. Fees charged depend on airline supplier rules and fare conditions. For details, please review the Change &amp; Cancellation Policies.</p>
                            </div>
                        </div>

                        <div class="manage-section">
                            <h4 class="manage-section-title">1. Passengers / Segments</h4>

                            <p class="manage-pax-name">Tanvir Ahmed</p>

                            <div class="manage-seg-list">
                                <label class="manage-seg-item">
                                    <input type="checkbox" name="change_segments[]" value="outbound" data-segment-toggle="outbound">
                                    <span class="manage-seg-text">
                                        <span class="manage-seg-route">Delhi &mdash; London <span style="color: var(--color-muted, #6c7890); font-weight: var(--fw-medium, 500);">(Transfer in Doha)</span></span>
                                        <span class="manage-seg-time">09:45, Tue, Jul 21, 2026</span>
                                    </span>
                                </label>

                                <label class="manage-seg-item">
                                    <input type="checkbox" name="change_segments[]" value="return" data-segment-toggle="return">
                                    <span class="manage-seg-text">
                                        <span class="manage-seg-route">London &mdash; Delhi <span style="color: var(--color-muted, #6c7890); font-weight: var(--fw-medium, 500);">(Transfer in Doha)</span></span>
                                        <span class="manage-seg-time">14:20, Thu, Jul 30, 2026</span>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="manage-section">
                            <h4 class="manage-section-title">2. Change Date / Flight</h4>

                            <p class="manage-section-hint">Tick the segment(s) above to enable their date picker.</p>

                            <div class="manage-change-row">
                                <div class="manage-change-cell">
                                    <span class="manage-change-route">Delhi &mdash; London</span>
                                    <input type="text" name="new_date_outbound" class="manage-date-input" data-segment-input="outbound" placeholder="Select a date" readonly disabled>
                                </div>

                                <div class="manage-change-cell">
                                    <span class="manage-change-route">London &mdash; Delhi</span>
                                    <input type="text" name="new_date_return" class="manage-date-input" data-segment-input="return" placeholder="Select a date" readonly disabled>
                                </div>

                                <button type="button" class="manage-search-btn" disabled>
                                    <i class="bi bi-search"></i>
                                    Search Flights
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="manage-card">
                        <div class="manage-card-head">
                            <i class="bi bi-person-vcard"></i>
                            <div>
                                <h3>Contact Details</h3>
                                <p>We will send change updates to these details</p>
                            </div>
                        </div>

                        <div class="manage-contact-list">
                            <div class="manage-contact-line">
                                <strong>Mobile number:</strong>+880 1712 345678
                            </div>

                            <div class="manage-contact-line">
                                <strong>Email:</strong>tanvir.ahmed@example.com
                            </div>
                        </div>
                    </div>

                    <div class="manage-card">
                        <div class="manage-total-grand">
                            <span>Total</span>
                            <strong>&mdash; &mdash;</strong>
                        </div>

                        <p class="manage-total-note">As exchange rates change in real time, there may be small differences between the sum of individual prices and the displayed final price. Please refer to the final price shown at payment.</p>
                    </div>

                    <button type="submit" class="manage-pay" disabled>
                        <i class="bi bi-credit-card-2-front"></i>
                        Pay
                    </button>

                    <div class="manage-actions">
                        <a href="trip-details-roundtrip.php" class="manage-btn manage-btn-ghost">
                            <i class="bi bi-arrow-left"></i>
                            Back to Trip Details
                        </a>
                    </div>

                </form>

            </div>

            <aside class="trip-details-sidebar">

                <div class="trip-side-card">
                    <h3>Total</h3>

                    <div class="manage-total-line">
                        <span>Change processing fee</span>
                        <strong>&mdash; &mdash;</strong>
                    </div>

                    <div class="manage-total-line">
                        <span>Fare difference</span>
                        <strong>&mdash; &mdash;</strong>
                    </div>

                    <div class="manage-total-divider"></div>

                    <div class="manage-total-grand">
                        <span>Total</span>
                        <strong>&mdash; &mdash;</strong>
                    </div>

                    <p class="manage-total-note">Final amount will be confirmed after our team checks availability and any airline fees.</p>
                </div>

                <div class="trip-side-card">
                    <h3>How it works</h3>

                    <ul class="manage-side-list">
                        <li>
                            <i class="bi bi-1-circle"></i>
                            Select the segments you want to change and pick the new dates.
                        </li>
                        <li>
                            <i class="bi bi-2-circle"></i>
                            Tap Search Flights to see available options for the new dates.
                        </li>
                        <li>
                            <i class="bi bi-3-circle"></i>
                            Review the total (processing fee + fare difference) and confirm payment.
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

<script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13"></script>

<script>
    // Themed flatpickr date pickers + segment-conditional enable/disable.
    // Each segment checkbox unlocks its matching date picker; Search Flights
    // enables once any unlocked date has a value.
    (function () {
        if (typeof flatpickr !== "function") {
            return;
        }

        const toggles = document.querySelectorAll("[data-segment-toggle]");
        const dateInputs = document.querySelectorAll(".manage-date-input");
        const searchBtn = document.querySelector(".manage-search-btn");

        if (!dateInputs.length || !searchBtn) {
            return;
        }

        function refreshSearchBtn() {
            const ready = Array.from(dateInputs).some(function (input) {
                const fp = input._flatpickr;
                if (!fp) {
                    return !input.disabled && input.value !== "";
                }
                return !fp.altInput.disabled && input.value !== "";
            });
            searchBtn.disabled = !ready;
        }

        // Initialise flatpickr on every date input
        dateInputs.forEach(function (input) {
            const startsDisabled = input.disabled;
            input.disabled = false; // we'll control disabled state via altInput

            flatpickr(input, {
                dateFormat: "Y-m-d",
                altInput: true,
                altFormat: "D, M j, Y",
                minDate: "today",
                disableMobile: true,
                onChange: refreshSearchBtn
            });

            if (startsDisabled && input._flatpickr) {
                input._flatpickr.altInput.disabled = true;
            }
        });

        toggles.forEach(function (cb) {
            cb.addEventListener("change", function () {
                const key = cb.getAttribute("data-segment-toggle");
                const target = document.querySelector(
                    '[data-segment-input="' + key + '"]'
                );
                if (!target || !target._flatpickr) {
                    return;
                }

                const fp = target._flatpickr;
                if (cb.checked) {
                    fp.altInput.disabled = false;
                } else {
                    fp.altInput.disabled = true;
                    fp.clear();
                }

                refreshSearchBtn();
            });
        });
    })();
</script>

</body>
</html>
