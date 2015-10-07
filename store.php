<?php

//Begin - Store Class
class Store {

        private $products = array(
                'milk'=>1000,
                'eggs'=>20
        );

	private $errors = array(
		101=>"Parameter must be a string.",
		102=>"Product item is not found in store."
	);
	
	/*
	Get the error message by $code value, and formats to array
	@param string $code number value 
	@return Array of the error details or false if error code is not found.
	*/
	private function error_format($code) {
		if(!empty($code) && isset($this->errors[$code])) {
			return array(
				'error_code'=>$code,
				'error_msg'=>$this->errors[$code]
			);
		} 

		return false;
	}

	/*
	Find the product by name
	@param string $type name of the product e.g. milk or eggs
	@return array of products, or error if product not found.
	*/
        public function find($type) {
		if(!is_string($type)) return $this->error_format(101);

                if(isset($this->products[$type])) {
			return array($type=>$this->products[$type]);
		}

		return $this->error_format(102);
        }

	/*
	Returs all available product list
	@return array of products
	*/
	public function all_product() {
		return $this->products;
	}
}
//End - Store Class
