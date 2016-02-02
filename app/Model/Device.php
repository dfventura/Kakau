<?php
App::uses('AppModel', 'Model');
/**
 * Device Model
 *
 * @property Conference $Conference
 */
class Device extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Conference' => array(
			'className' => 'Conference',
			'foreignKey' => 'device_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
