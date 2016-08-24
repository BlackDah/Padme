<?php 
session_start();
session_destroy();
printf("<script>location.href='index.php'</script>");
 ?>