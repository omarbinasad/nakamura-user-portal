<?php $mainJsVer = @filemtime(__DIR__ . '/../assets/js/main.js') ?: time(); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js?v=<?php echo $mainJsVer; ?>"></script>
