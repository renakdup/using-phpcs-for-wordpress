<?php
/**
 * PHPCSWorkExample
 *
 * @package APP
 */

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
	public function get_test_name() { ?>
		<p><?= esc_html( $this->name ) ?></p>
		<?php
		return $this->name;
	}
}
