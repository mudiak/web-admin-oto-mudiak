<?php
$page=isset($_GET['page']) ? $_GET['page'] : 'home';
if ($page=='home') include 'dashboard.php';
if ($page=='user') include 'user.php';
if ($page=='topup') include 'top-up.php';
if ($page=='customer') include 'customers.php';
if ($page=='test') include 'test.php';