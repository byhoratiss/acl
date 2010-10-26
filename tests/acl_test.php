<?php
/**
 * Tests the acl functionality
 *
 * @package    Vendo
 * @author     Jeremy Bush
 * @copyright  (c) 2010 Jeremy Bush
 * @license    http://github.com/zombor/Vendo/raw/master/LICENSE
 *
 * @group Vendo_ACL
 */
class ACL_Test extends Vendo_TestCase
{
	/**
	 * Tests that we can process and read and delete a photo
	 * 
	 * @return null
	 */
	public function test_do_it()
	{
		$policy = Vendo_Policy::factory('login');
	}
}