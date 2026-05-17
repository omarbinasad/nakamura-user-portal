<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Nakamura Tour &amp; Travels</title>
    <?php include __DIR__ . '/includes/stylesheet.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<section class="reset-password-page-section">
    <div class="container">

        <div class="reset-password-card">

            <div class="reset-password-illustration">
                <span class="reset-shape reset-shape-left"></span>
                <span class="reset-shape reset-shape-right"></span>
                <span class="reset-spark reset-spark-one"></span>
                <span class="reset-spark reset-spark-two"></span>
                <span class="reset-spark reset-spark-three"></span>

                <div class="reset-shield-icon">
                    <i class="bi bi-shield-lock-fill"></i>
                </div>
            </div>

            <div class="reset-password-content">
                <h1 class="reset-password-title">Reset Your Password</h1>

                <p class="reset-password-description">
                    Create a new password for your account.
                </p>

                <form action="index.php" method="post" class="reset-password-form">

                    <div class="reset-form-group">
                        <label for="newPassword" class="reset-form-label">New Password</label>

                        <div class="reset-password-field">
                            <i class="bi bi-lock reset-field-icon"></i>

                            <input
                                type="password"
                                name="new_password"
                                id="newPassword"
                                class="reset-form-control"
                                placeholder="••••••••••••"
                            >

                            <button type="button" class="reset-password-toggle" data-target="newPassword" aria-label="Show password">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>

                        <div class="reset-strength-row">
                            <div class="reset-strength-bar">
                                <span class="reset-strength-fill"></span>
                            </div>

                            <span class="reset-strength-text">Strong</span>
                        </div>

                        <p class="reset-password-hint">
                            Use 8+ characters with a mix of letters, numbers &amp; symbols
                        </p>
                    </div>

                    <div class="reset-form-group">
                        <label for="confirmPassword" class="reset-form-label">Confirm New Password</label>

                        <div class="reset-password-field is-matched">
                            <i class="bi bi-lock reset-field-icon"></i>

                            <input
                                type="password"
                                name="confirm_password"
                                id="confirmPassword"
                                class="reset-form-control"
                                placeholder="••••••••••••"
                            >

                            <button type="button" class="reset-password-toggle" data-target="confirmPassword" aria-label="Show password">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>

                        <p class="reset-match-text">
                            <i class="bi bi-check-circle-fill"></i>
                            Passwords match
                        </p>
                    </div>

                    <button type="submit" class="reset-submit-btn">
                        Reset Password
                    </button>

                    <p class="reset-signin-text">
                        Remember your password?
                        <a href="index.php">Sign in</a>
                    </p>

                </form>
            </div>

        </div>

        <div class="reset-info-card">

            <div class="reset-info-item">
                <div class="reset-info-icon">
                    <i class="bi bi-shield-check"></i>
                </div>

                <div class="reset-info-content">
                    <h3>Secure &amp; Trusted</h3>
                    <p>Your data is encrypted and protected.</p>
                </div>
            </div>

            <div class="reset-info-divider"></div>

            <div class="reset-info-item">
                <div class="reset-info-icon">
                    <i class="bi bi-lightning-charge"></i>
                </div>

                <div class="reset-info-content">
                    <h3>Quick &amp; Easy</h3>
                    <p>Reset your password in just a few steps.</p>
                </div>
            </div>

            <div class="reset-info-divider"></div>

            <div class="reset-info-item">
                <div class="reset-info-icon">
                    <i class="bi bi-headset"></i>
                </div>

                <div class="reset-info-content">
                    <h3>24/7 Support</h3>
                    <p>We're here to help, anytime you need us.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
