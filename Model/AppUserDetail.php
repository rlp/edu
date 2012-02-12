<?php
App::import('Model', 'Users.UserDetail');
class AppUserDetail extends UserDetail {
    public $useTable = 'user_details';
	public $alias = 'UserDetail';
	public $name = 'UserDetail';
	public function beforeSave() {
		return true;
	}
/**
 * Constructor
 *
 * @param string $id ID
 * @param string $table Table
 * @param string $ds Datasource
 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
	}
/**
 * Create the default fields for a user
 * (overridden)
 *
 * @param string $userId User ID
 * @return void
 */
	public function createDefaults($userId) {
		$entries = array(
			array(
				'field' => 'User.firstname',
				'value' => '',
				'input' => 'text',
				'data_type' => 'string'),
			array(
				'field' => 'User.middlename',
				'value' => '',
				'input' => 'text',
				'data_type' => 'string'),
			array(
				'field' => 'User.lastname',
				'value' => '',
				'input' => 'text',
				'data_type' => 'string'),
			array(
				'field' => 'User.abbr-country-name',
				'value' => '',
				'input' => 'text',
				'data_type' => 'string'),
			array(
				'field' => 'User.abbr-region',
				'value' => '',
				'input' => 'text',
				'data_type' => 'string'),
			array(
				'field' => 'User.country-name',
				'value' => '',
				'input' => 'text',
				'data_type' => 'string'),
			array(
				'field' => 'User.location',
				'value' => '',
				'input' => 'text',
				'data_type' => 'string'),
			array(
				'field' => 'User.postal-code',
				'value' => '',
				'input' => 'text',
				'data_type' => 'string'),
			array(
				'field' => 'User.region',
				'value' => '',
				'input' => 'text',
				'data_type' => 'string'),
			array(
				'field' => 'User.timeoffset',
				'value' => '',
				'input' => 'text',
				'data_type' => 'string'));

		$i = 0;
		$data = array();
		foreach ($entries as $entry) {
			$data[$this->alias] = $entry;
			$data[$this->alias]['user_id'] = $userId;
			$data[$this->alias]['position'] = $i++;
			$this->create();
			$this->save($data);
		}
	}
/**
 * Returns details for named section
 * (overridden)
 *
 * @var string $userId User ID
 * @var string $section Section name
 * @return array
 */
	public function getSection($userId = null, $section = null) {
		$conditions = array(
			"{$this->alias}.user_id" => $userId);

		if (!is_null($section)) {
			$conditions["{$this->alias}.field LIKE"] = $section . '.%'; 
		}

		$results = $this->find('all', array(
			'recursive' => -1,
			'conditions' => $conditions,
			'fields' => array("{$this->alias}.field", "{$this->alias}.value")));

		if (!empty($results)) {
			foreach($results as $result) {
				list($prefix, $field) = explode('.', $result[$this->alias]['field']);
				$userDetails[$prefix][$field] = $result[$this->alias]['value'];
			}
			$results = $userDetails;
		} else {
			$this->createDefaults($userId);
			$results = array();
		}
		return $results;
	}

}
