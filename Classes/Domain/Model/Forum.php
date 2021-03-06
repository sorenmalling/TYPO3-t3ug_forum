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
*  the Free Software Foundation; either version 3 of the License, or
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
 * Forum
 */
class Tx_T3ugForum_Domain_Model_Forum extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Forum name
	 *
	 * @var string $title
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * Forum description
	 *
	 * @var string $description
	 * @validate NotEmpty
	 */
	protected $description;

	/**
	 * topics
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_T3ugForum_Domain_Model_Topic> $topics
	 * @lazy
	 */
	protected $topics;

	/**
	 * The constructor.
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		* Do not modify this method!
		* It will be rewritten on each save in the kickstarter
		* You may modify the constructor of this class instead
		*/
		$this->topics = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Setter for title
	 *
	 * @param string $title Forum name
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Getter for title
	 *
	 * @return string Forum name
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Setter for description
	 *
	 * @param string $description Forum description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Getter for description
	 *
	 * @return string Forum description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Setter for topics
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_T3ugForum_Domain_Model_Topic> $topics topics
	 * @return void
	 */
	public function setTopics(Tx_Extbase_Persistence_ObjectStorage $topics) {
		$this->topics = $topics;
	}

	/**
	 * Getter for topics
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_T3ugForum_Domain_Model_Topic> topics
	 */
	public function getTopics() {
		return $this->topics;
	}

	/**
	 * Adds a Topic
	 *
	 * @param Tx_T3ugForum_Domain_Model_Topic the Topic to be added
	 * @return void
	 */
	public function addTopic(Tx_T3ugForum_Domain_Model_Topic $topic) {
		$this->topics->attach($topic);
	}

	/**
	 * Removes a Topic
	 *
	 * @param Tx_T3ugForum_Domain_Model_Topic the Topic to be removed
	 * @return void
	 */
	public function removeTopic(Tx_T3ugForum_Domain_Model_Topic $topicToRemove) {
		$this->topics->detach($topicToRemove);
	}

}
?>