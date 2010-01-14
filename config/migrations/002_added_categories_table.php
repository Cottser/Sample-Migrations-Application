<?php
class M4b4cb207543c421e80be745d0bda76d4 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	var $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	var $migration = array(
		'up' => array(
			'create_table' => array(
				'categories' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
				),
			),
			'create_field' => array(
				'recipes' => array(
					'category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL)
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'categories'
			),
			'drop_field' => array(
				'recipes' => array(
					'category_id'
				),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	function after($direction) {
		if ($direction === 'up') {
			$Category = $this->generateModel('Category');
			$categories = array(
				array('name' => 'Starters'),
				array('name' => 'Main Dish'),
				array('name' => 'Desserts'));
			$Category->saveAll($categories);
		}
		return true;
	}
}
?>