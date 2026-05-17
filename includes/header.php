<?php $hasLogo = file_exists(__DIR__ . '/../assets/images/nakamura-logo.webp'); ?>
<header class="site-header">
    <div class="container">
        <div class="site-header-inner">
            <a href="index.php" class="site-logo-link" aria-label="Nakamura Tour & Travels">
                <?php if ($hasLogo): ?>
                    <img
                        src="assets/images/nakamura-logo.webp"
                        alt="Nakamura Tour & Travels"
                        class="site-logo"
                    >
                <?php else: ?>
                    <span class="site-logo-text">Nakamura Tour &amp; Travels</span>
                <?php endif; ?>
            </a>

            <div class="site-header-actions">

                <div class="dashboard-header-actions">
                    <div class="dropdown">
                        <button class="dashboard-profile-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/avatar-image.png" alt="Tanvir Ahmed">
                            <span>Tanvir Ahmed</span>
                            <i class="bi bi-chevron-down"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end dashboard-profile-dropdown">
                            <li>
                                <a class="dropdown-item" href="profile.php">
                                    <i class="bi bi-person"></i>
                                    My Profile
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="bookings.php">
                                    <i class="bi bi-calendar3"></i>
                                    Bookings
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="index.php">
                                    <i class="bi bi-box-arrow-right"></i>
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <a href="index.php" class="header-signin-btn">
                    Sign in
                </a>

                <button type="button" class="sidebar-toggle-btn" id="sidebarToggle" aria-label="Open menu" aria-expanded="false" aria-controls="tripsSidebar">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="sidebar-backdrop" id="sidebarBackdrop"></div>
