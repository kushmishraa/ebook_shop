<?php
session_start();
session_destroy();

echo "<script type='text/javascript'>
                alert('You logged out!');
            </script>";
header("refresh:2; url=index.php");
?>