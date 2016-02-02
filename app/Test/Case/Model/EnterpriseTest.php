<?php
App::uses('Enterprise', 'Model');

/**
 * Enterprise Test Case
 *
 */
class EnterpriseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.enterprise',
		'app.contract',
		'app.contracts_approval',
		'app.invoice',
		'app.charts_account',
		'app.chart_accounts_invoice',
		'app.invoices_operation',
		'app.invoices_status',
		'app.charts_accounts_contract'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Enterprise = ClassRegistry::init('Enterprise');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Enterprise);

		parent::tearDown();
	}

}
