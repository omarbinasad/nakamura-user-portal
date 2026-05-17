<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Nakamura Tour &amp; Travels</title>
    <?php include __DIR__ . '/includes/stylesheet.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<section class="profile-page-section">
    <div class="container">

        <div class="profile-layout">

            <div class="profile-main">

                <div class="profile-page-heading profile-view-only">
                    <h1>My Profile</h1>
                    <p>Manage your personal details, travel preferences, and account security.</p>
                </div>

                <div class="profile-summary-card profile-view-only">
                    <div class="profile-summary-left">
                        <div class="profile-avatar-wrap">
                            <img src="assets/images/avatar-image.png" alt="Tanvir Ahmed" class="profile-avatar-img">
                            <button type="button" class="profile-avatar-camera">
                                <i class="bi bi-camera"></i>
                            </button>
                        </div>

                        <div class="profile-summary-info">
                            <h2>Tanvir Ahmed</h2>

                            <p>
                                <i class="bi bi-envelope"></i>
                                tanvir.ahmed@example.com
                            </p>

                            <p>
                                <i class="bi bi-telephone"></i>
                                +81 90-1234-5678
                            </p>
                        </div>
                    </div>

                    <button type="button" class="profile-edit-btn" id="profileEditBtn">
                        <i class="bi bi-pencil-square"></i>
                        Edit Profile
                    </button>
                </div>

                <form action="#" method="post" class="profile-form-card" id="profileForm" enctype="multipart/form-data">

                    <div class="profile-edit-heading profile-edit-only">
                        <button type="button" class="profile-back-btn" id="profileBackBtn">
                            <i class="bi bi-arrow-left"></i>
                            Back to Profile
                        </button>

                        <h1>Edit Profile</h1>
                        <p>Update your personal details, travel preferences, and account security.</p>
                    </div>

                    <div class="profile-photo-edit profile-edit-only">
                        <h3>Profile Photo</h3>

                        <div class="profile-photo-edit-row">
                            <div class="profile-avatar-wrap">
                                <img src="assets/images/avatar-image.png" alt="Tanvir Ahmed" class="profile-avatar-img" id="profilePreviewImage">
                                <span class="profile-avatar-camera">
                                    <i class="bi bi-camera"></i>
                                </span>
                            </div>

                            <div class="profile-photo-actions">
                                <p>JPG, PNG or GIF. Max size of 2MB.</p>

                                <input type="file" name="profile_photo" id="profilePhotoInput" class="profile-photo-input" accept="image/*">

                                <label for="profilePhotoInput" class="profile-upload-btn">
                                    <i class="bi bi-upload"></i>
                                    Upload New Photo
                                </label>

                                <button type="button" class="profile-remove-photo-btn" id="profileRemovePhotoBtn">
                                    <i class="bi bi-trash"></i>
                                    Remove Photo
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="profile-form-section">
                        <div class="profile-section-title">
                            <i class="bi bi-person"></i>
                            <h3>Personal Information</h3>
                        </div>

                        <div class="profile-form-grid">
                            <div class="profile-form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" name="first_name" class="profile-form-control" value="Tanvir" readonly data-profile-field>
                            </div>

                            <div class="profile-form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="last_name" class="profile-form-control" value="Ahmed" readonly data-profile-field>
                            </div>

                            <div class="profile-form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="profile-form-control" value="tanvir.ahmed@example.com" readonly data-profile-field>
                            </div>

                            <div class="profile-form-group">
                                <label for="phoneNumber">Phone Number</label>

                                <div class="profile-phone-field">
                                    <select name="country_code" class="profile-form-control profile-country-code" disabled data-profile-field>
                                        <option value="+81" selected>+81</option>
                                        <option value="+880">+880</option>
                                        <option value="+1">+1</option>
                                        <option value="+44">+44</option>
                                    </select>

                                    <input type="text" id="phoneNumber" name="phone_number" class="profile-form-control" value="90-1234-5678" readonly data-profile-field>
                                </div>
                            </div>

                            <div class="profile-form-group">
                                <label for="dateOfBirth">Date of Birth</label>

                                <div class="profile-input-icon">
                                    <i class="bi bi-calendar"></i>
                                    <input type="text" id="dateOfBirth" name="date_of_birth" class="profile-form-control" value="15 May 1990" readonly data-profile-field>
                                </div>
                            </div>

                            <div class="profile-form-group">
                                <label for="nationality">Nationality</label>
                                <select id="nationality" name="nationality" class="profile-form-control" disabled data-profile-field>
                                    <option selected>Bangladeshi</option>
                                    <option>Japanese</option>
                                    <option>Indian</option>
                                    <option>American</option>
                                    <option>British</option>
                                </select>
                            </div>

                            <div class="profile-form-group">
                                <label for="passportNumber">Passport Number</label>
                                <input type="text" id="passportNumber" name="passport_number" class="profile-form-control" value="A12345678" readonly data-profile-field>
                            </div>
                        </div>
                    </div>

                    <div class="profile-form-section">
                        <div class="profile-section-title">
                            <i class="bi bi-send"></i>
                            <h3>Travel Preferences</h3>
                        </div>

                        <div class="profile-form-grid">
                            <div class="profile-form-group">
                                <label for="preferredSeat">Preferred Seat</label>
                                <select id="preferredSeat" name="preferred_seat" class="profile-form-control" disabled data-profile-field>
                                    <option selected>Window Seat</option>
                                    <option>Aisle Seat</option>
                                    <option>Middle Seat</option>
                                </select>
                            </div>

                            <div class="profile-form-group">
                                <label for="mealPreference">Meal Preference</label>
                                <select id="mealPreference" name="meal_preference" class="profile-form-control" disabled data-profile-field>
                                    <option selected>No Preference</option>
                                    <option>Vegetarian</option>
                                    <option>Halal</option>
                                    <option>Kosher</option>
                                </select>
                            </div>

                            <div class="profile-form-group">
                                <label for="favoriteDestination">Favorite Destination</label>
                                <select id="favoriteDestination" name="favorite_destination" class="profile-form-control" disabled data-profile-field>
                                    <option selected>Japan</option>
                                    <option>Bangladesh</option>
                                    <option>Thailand</option>
                                    <option>Malaysia</option>
                                </select>
                            </div>

                            <div class="profile-form-group">
                                <label for="preferredLanguage">Preferred Currency / Language</label>
                                <select id="preferredLanguage" name="preferred_language" class="profile-form-control" disabled data-profile-field>
                                    <option selected>Japanese (JPY) / English</option>
                                    <option>Bangladeshi (BDT) / Bangla</option>
                                    <option>US Dollar (USD) / English</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="profile-form-section profile-security-section">
                        <div class="profile-section-title">
                            <i class="bi bi-shield-check"></i>
                            <h3>Security</h3>
                        </div>

                        <div class="profile-security-row">
                            <div>
                                <h4>Change Password</h4>
                                <p>Update your password regularly to keep your account secure.</p>
                            </div>

                            <a href="reset-password.php" class="profile-change-password-btn">
                                <i class="bi bi-lock"></i>
                                Change Password
                            </a>
                        </div>

                        <div class="profile-security-row">
                            <div>
                                <h4>Two-Factor Authentication</h4>
                                <p>Add an extra layer of security to your account.</p>
                            </div>

                            <label class="profile-switch">
                                <input type="checkbox" checked disabled data-profile-field>
                                <span></span>
                            </label>
                        </div>

                        <div class="profile-verified-row profile-view-only">
                            <span>
                                <i class="bi bi-shield-check"></i>
                            </span>

                            <strong>Verified Email</strong>
                            <p>Your email is verified and your account is protected.</p>
                        </div>
                    </div>

                    <div class="profile-form-actions profile-edit-only">
                        <button type="submit" class="profile-save-btn">Save Changes</button>

                        <button type="button" class="profile-cancel-btn" id="profileCancelBtn">
                            Cancel
                        </button>
                    </div>

                </form>

            </div>

            <aside class="profile-sidebar">

                <div class="profile-side-card">
                    <h3>My Account</h3>

                    <ul class="profile-account-menu">
                        <li>
                            <a href="profile.php" class="active">
                                <i class="bi bi-person"></i>
                                My Profile
                            </a>
                        </li>

                        <li>
                            <a href="bookings.php">
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

                <div class="profile-side-card">
                    <div class="profile-side-title-icon">
                        <i class="bi bi-headset"></i>
                        <h3>Need help?</h3>
                    </div>

                    <p class="profile-help-text">
                        Our support team is here to help you with any travel queries.
                    </p>

                    <div class="profile-contact-line">
                        <i class="bi bi-envelope"></i>
                        <span>support@nakamuratours.com</span>
                    </div>

                    <div class="profile-contact-line">
                        <i class="bi bi-telephone"></i>
                        <span>+81 90-1234-5678</span>
                    </div>

                    <a href="#" class="profile-help-btn">
                        Visit help center
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="profile-side-card">
                    <div class="profile-side-title-icon profile-tip-title">
                        <i class="bi bi-lightbulb"></i>
                        <h3>Profile tips</h3>
                    </div>

                    <ul class="profile-tips-list">
                        <li>
                            <i class="bi bi-check-circle"></i>
                            Keep your personal details up to date for smooth travel.
                        </li>

                        <li>
                            <i class="bi bi-check-circle"></i>
                            Add your passport details for faster bookings.
                        </li>

                        <li>
                            <i class="bi bi-check-circle"></i>
                            Enable two-factor authentication for extra security.
                        </li>
                    </ul>
                </div>

            </aside>

        </div>

    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
