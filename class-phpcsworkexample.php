<?php
/**
 * PHPCSWorkExample
 *
 * @package APP
 */

namespace APP;

/**
 * PHPCSWorkExample
 */
class PHPCSWorkExample {

	/**
	 * Test name.
	 *
	 * @var string $name
	 */
	private $name = 'test';

	/**
	 * Get test name.
	 *
	 * @return string
	 */
	public function get_test_name() {
		return $this->name;
	}
}
