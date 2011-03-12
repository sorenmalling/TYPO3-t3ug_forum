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
 * Topic
 */
class Tx_T3ugForum_Domain_Model_Topic extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Subject of this topic
	 *
	 * @var string $subject
	 * @validate NotEmpty
	 */
	protected $subject;

	/**
	 * posts
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_T3ugForum_Domain_Model_Posts> $posts
	 * @lazy
	 */
	protected $posts;

	/**
	 * forum
	 *
	 * @var Tx_T3ugForum_Domain_Model_Forum $forum
	 */
	protected $forum;

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
		$this->posts = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Setter for subject
	 *
	 * @param string $subject Subject of this topic
	 * @return void
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}

	/**
	 * Getter for subject
	 *
	 * @return string Subject of this topic
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * Setter for posts
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_T3ugForum_Domain_Model_Posts> $posts posts
	 * @return void
	 */
	public function setPosts(Tx_Extbase_Persistence_ObjectStorage $posts) {
		$this->posts = $posts;
	}

	/**
	 * Getter for posts
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_T3ugForum_Domain_Model_Posts> posts
	 */
	public function getPosts() {
		return $this->posts;
	}

	/**
	 * Adds a Posts
	 *
	 * @param Tx_T3ugForum_Domain_Model_Posts the Posts to be added
	 * @return void
	 */
	public function addPost(Tx_T3ugForum_Domain_Model_Posts $post) {
		$this->posts->attach($post);
	}

	/**
	 * Removes a Posts
	 *
	 * @param Tx_T3ugForum_Domain_Model_Posts the Posts to be removed
	 * @return void
	 */
	public function removePost(Tx_T3ugForum_Domain_Model_Posts $postToRemove) {
		$this->posts->detach($postToRemove);
	}

	/**
	 * Setter for forum
	 *
	 * @param Tx_T3ugForum_Domain_Model_Forum $forum forum
	 * @return void
	 */
	public function setForum(Tx_T3ugForum_Domain_Model_Forum $forum) {
		$this->forum = $forum;
	}

	/**
	 * Getter for forum
	 *
	 * @return Tx_T3ugForum_Domain_Model_Forum forum
	 */
	public function getForum() {
		return $this->forum;
	}

}
?>