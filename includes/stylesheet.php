<?php
    $styleVer = @filemtime(__DIR__ . '/../assets/css/style.css') ?: time();
    $responsiveVer = @filemtime(__DIR__ . '/../assets/css/responsive.css') ?: time();
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap-icons.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css?v=<?php echo $styleVer; ?>">
<link rel="stylesheet" href="assets/css/responsive.css?v=<?php echo $responsiveVer; ?>">
