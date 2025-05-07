<?php
    setcookie("userID", "hong", time()-1000);
    header("Location: cookie_page.php");
    exit
    //  echo "<script>location.href='cookie_page.php';</script>"
?>