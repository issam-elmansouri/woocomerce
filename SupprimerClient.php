<?php
require "Connection.php";
$id = $_GET['id'];
$woocommerce->delete('customers/' . $id, 
                        ['force' => true]);
header('Location: index.php');