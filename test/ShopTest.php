<?php

include("../store.php");

class ShopTest extends PHPUnit_Framework_TestCase {
	public function testFind() {
		$product = "milk";
		$store = new Store();
		$this->assertNotEmpty($store->find($product));
	}

	public function testFindParam() {
		$product = 123;
		$store = new Store();
		$this->assertArrayHasKey('error_code', $store->find($product));
	}

	public function testAllProduct() {
		$identify = "milk";
		$store = new Store();
		$this->assertArrayHasKey($identify,$store->all_product());
	}
}
