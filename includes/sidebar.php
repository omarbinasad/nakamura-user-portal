<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<aside class="user-sidebar">
    <a href="passenger-panel.php" class="sidebar-link <?php echo $currentPage === 'passenger-panel.php' ? 'active' : ''; ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
    </a>

    <a href="bookings.php" class="sidebar-link <?php echo $currentPage === 'bookings.php' ? 'active' : ''; ?>">
        <i class="bi bi-suitcase"></i>
        <span>Bookings</span>
    </a>

    <a href="profile.php" class="sidebar-link <?php echo $currentPage === 'profile.php' ? 'active' : ''; ?>">
        <i class="bi bi-person"></i>
        <span>Profile</span>
    </a>
</aside>
