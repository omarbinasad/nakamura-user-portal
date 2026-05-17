<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email | Nakamura Tour &amp; Travels</title>
    <?php include __DIR__ . '/includes/stylesheet.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<section class="otp-page-section">
    <div class="container">

        <div class="otp-card">

            <div class="otp-image-wrap">
                <img
                    src="assets/images/otp-secure-email.png"
                    alt="Secure email verification"
                    class="otp-secure-image"
                >
            </div>

            <div class="otp-content">
                <h1 class="otp-title">Verify Your Email</h1>

                <p class="otp-description">
                    We've sent a 6-digit OTP to your booking email.<br>
                    Please enter the code below to continue.
                </p>

                <div class="otp-email-badge">
                    <i class="bi bi-envelope"></i>
                    <span>you@example.com</span>
                </div>

                <form action="passenger-panel.php" method="post" class="otp-form">

                    <div class="otp-input-group">
                        <input type="text" name="otp_1" class="otp-input" maxlength="1" inputmode="numeric">
                        <input type="text" name="otp_2" class="otp-input" maxlength="1" inputmode="numeric">
                        <input type="text" name="otp_3" class="otp-input" maxlength="1" inputmode="numeric">
                        <input type="text" name="otp_4" class="otp-input" maxlength="1" inputmode="numeric">
                        <input type="text" name="otp_5" class="otp-input" maxlength="1" inputmode="numeric">
                        <input type="text" name="otp_6" class="otp-input" maxlength="1" inputmode="numeric">
                    </div>

                    <p class="otp-resend-text">
                        Didn't receive the code?
                        <a href="#" class="otp-resend-link">Resend OTP in <span id="otpTimer">00:45</span></a>
                    </p>

                    <button type="submit" class="otp-submit-btn">
                        Verify OTP
                    </button>

                    <a href="index.php" class="otp-back-link">
                        <i class="bi bi-arrow-left"></i>
                        Back to sign in
                    </a>

                </form>
            </div>

        </div>

        <div class="otp-info-card">

            <div class="otp-info-item">
                <div class="otp-info-icon">
                    <i class="bi bi-shield-check"></i>
                </div>

                <div class="otp-info-content">
                    <h3>Secure &amp; Trusted</h3>
                    <p>Your data is protected with industry standards.</p>
                </div>
            </div>

            <div class="otp-info-divider"></div>

            <div class="otp-info-item">
                <div class="otp-info-icon">
                    <i class="bi bi-lightning-charge-fill"></i>
                </div>

                <div class="otp-info-content">
                    <h3>Quick &amp; Easy</h3>
                    <p>Simple steps to verify and access your trips.</p>
                </div>
            </div>

            <div class="otp-info-divider"></div>

            <div class="otp-info-item">
                <div class="otp-info-icon">
                    <i class="bi bi-headset"></i>
                </div>

                <div class="otp-info-content">
                    <h3>24/7 Support</h3>
                    <p>We're here to help you anytime, anywhere.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
