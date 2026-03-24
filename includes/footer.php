<?php
function write_copyright() {
    $year = date('Y');
    echo '&copy' . $year;
}
?>
<footer>
    <?php write_logo(); ?>    
    <?php write_copyright(); ?>
</footer>
</body>
</html>