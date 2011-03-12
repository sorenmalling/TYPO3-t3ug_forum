<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2011 Soren Malling <soren.malling@gmail.com>
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Testcase for class Tx_T3ugForum_Domain_Model_Posts.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage T3UG User
 * 
 * @author Soren Malling <soren.malling@gmail.com>
 */
class Tx_T3ugForum_Domain_Model_PostsTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_T3ugForum_Domain_Model_Posts
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_T3ugForum_Domain_Model_Posts();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getBodytextReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBodytextForStringSetsBodytext() { 
		$this->fixture->setBodytext('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBodytext()
		);
	}
	
	/**
	 * @test
	 */
	public function getTopicReturnsInitialValueForTx_T3ugForum_Domain_Model_Topic() { }

	/**
	 * @test
	 */
	public function setTopicForTx_T3ugForum_Domain_Model_TopicSetsTopic() { }
	
}
?>