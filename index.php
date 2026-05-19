<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Passenger Trip Access | Nakamura Tour &amp; Travels</title>
    <?php include __DIR__ . '/includes/stylesheet.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main class="login-page">
    <section class="login-wrapper container">

        <div class="login-main-card">
            <div class="row g-0 h-100">
                <div class="login-form-side col-lg-6">
                <div class="login-badge">
                    <i class="bi bi-person"></i>
                    <span>Welcome</span>
                </div>

                <h1>Sign in to access your trips</h1>

                <p class="login-subtitle">
                    Enter the email used on your booking.<br>
                    We'll send a one-time password (OTP) to your email.
                </p>

                <form action="verify-otp.php" method="POST" class="login-form">
                    <div class="login-field-group">
                        <label for="email">Email on your ticket</label>

                        <div class="login-input-box">
                            <i class="bi bi-envelope"></i>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="you@example.com"
                                required
                            >
                        </div>
                    </div>

                    <button type="submit" class="login-submit-btn">
                        <i class="bi bi-envelope"></i>
                        <span>Send Code</span>
                    </button>
                </form>

                <div class="secure-login-note">
                    <div class="secure-login-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <div>
                        <strong>Secure OTP access</strong>
                        <p>Your information is encrypted and safe with us.</p>
                    </div>
                </div>
            </div>

            <div class="login-visual-side col-lg-6">
                <div class="quick-travel-card">
                    <h3>Quick access to your travel</h3>

                    <div class="quick-travel-grid row g-3">
                        <div class="quick-travel-item col-4">
                            <div class="quick-travel-icon">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <div>
                                <strong>View</strong>
                                <span>upcoming trips</span>
                            </div>
                        </div>

                        <div class="quick-travel-item col-4">
                            <div class="quick-travel-icon">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <div>
                                <strong>Download</strong>
                                <span>invoices</span>
                            </div>
                        </div>

                        <div class="quick-travel-item col-4">
                            <div class="quick-travel-icon">
                                <i class="bi bi-suitcase"></i>
                            </div>
                            <div>
                                <strong>Manage</strong>
                                <span>bookings</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="login-info-card">
            <div class="row g-3 align-items-stretch login-info-card-left">
                <div class="login-steps col-lg">
                <h4>How it works</h4>

                <div class="login-steps-row">
                    <div class="login-step-item">
                        <span class="step-number">1</span>
                        <div class="step-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <strong>Enter email</strong>
                            <p>Enter the email used on your booking.</p>
                        </div>
                    </div>

                    <i class="bi bi-arrow-right step-arrow"></i>

                    <div class="login-step-item">
                        <span class="step-number">2</span>
                        <div class="step-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <strong>Verify OTP</strong>
                            <p>Check your email and enter the OTP.</p>
                        </div>
                    </div>

                    <i class="bi bi-arrow-right step-arrow"></i>

                    <div class="login-step-item">
                        <span class="step-number">3</span>
                        <div class="step-icon">
                            <i class="bi bi-suitcase"></i>
                        </div>
                        <div>
                            <strong>Access bookings</strong>
                            <p>View and manage all your upcoming trips.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="login-support-card col-lg-auto">
                <h4>Need help? Contact support</h4>

                <a href="mailto:support@nakamuratravels.com">
                    <i class="bi bi-envelope"></i>
                    <span>support@nakamuratravels.com</span>
                </a>

                <a href="tel:+919876543210">
                    <i class="bi bi-telephone"></i>
                    <span>+91 98765 43210</span>
                </a>
            </div>
            </div>
        </div>

    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
