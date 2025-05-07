<?php
    setcookie("userID", "hong", time()+24*60*60);
    echo "<script>location.href='cookie_page.php';</script>" 
?>