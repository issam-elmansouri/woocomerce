<?php 
require "Connection.php";
echo json_encode($woocommerce->get('customers'));