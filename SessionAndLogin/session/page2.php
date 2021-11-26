/* This page is linked to page1.php */

<?php

/* We can also call Session from another page. */
session_start();
echo $_SESSION['name'];