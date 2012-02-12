<?php
/* AppUser Test cases generated on: 2012-02-11 14:58:05 : 1328990285*/
App::uses('AppUser', 'Model');

/**
 * AppUser Test Case
 *
 */
class AppUserTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('plugin.users.user', 'plugin.users.user_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->AppUser = ClassRegistry::init('AppUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AppUser);

		parent::tearDown();
	}
	
	public function testInstance() {
		$this->assertIsA($this->AppUser, 'AppUser');
	}
	
	public function testBehaviors() {
//		debug(App::import('Behavior', 'Utils.Sluggable'));
//		debug(App::import('Behavior', 'Search.Searchable'));
		$actsAs = $this->AppUser->actsAs;
	}

}
