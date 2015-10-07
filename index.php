<?php

include("store.php");

$store = new Store();
$product = isset($_REQUEST['product']) ? $_REQUEST['product'] : false;

if(!empty($product)) {
	$product = strtolower(trim($product));
	echo json_encode($store->find($product));
} else {
	echo json_encode($store->all_product());
}
