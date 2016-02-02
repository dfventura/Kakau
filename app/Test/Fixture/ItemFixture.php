<?php
/**
 * ItemFixture
 *
 */
class ItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'conferences_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'unit_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'checked' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'note' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'user_modified' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'conferences_id', 'product_id', 'unit_id'), 'unique' => 1),
			'fk_items_products1_idx' => array('column' => 'product_id', 'unique' => 0),
			'fk_items_units1_idx' => array('column' => 'unit_id', 'unique' => 0),
			'fk_items_conferences1_idx' => array('column' => 'conferences_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'conferences_id' => 1,
			'product_id' => 1,
			'unit_id' => 1,
			'checked' => 1,
			'note' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2016-01-21 13:08:43',
			'modified' => '2016-01-21 13:08:43',
			'user_modified' => 'Lorem ipsum dolor sit amet'
		),
	);

}
