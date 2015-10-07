<?php

include("../store.php");

class ShopTest extends PHPUnit_Framework_TestCase {
	public function testEmpty() {
		$stack = array();
        	$this->assertEmpty($stack);

        	return $stack;
	}

	public function testProductQuery() {
		$this->assetNull
	}
}
