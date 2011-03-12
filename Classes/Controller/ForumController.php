<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Soren Malling <soren.malling@gmail.com>
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

class Tx_T3ugForum_Controller_ForumController extends Tx_T3ugForum_Controller_AbstractController {

	/**
	 * Forum repository
	 *
	 * @var Tx_T3ugForum_Domain_Repository_ForumRepository
	 */
	protected $forumRepository;

	/**
	 * Dependency injection of Forum Repository
	 *
	 * @param Tx_T3ugForum_Domain_Repository_ForumRepository $forumRepository
	 * @return void
	 */
	public function injectForumRepository(Tx_T3ugForum_Domain_Repository_ForumRepository $forumRepository) {
		$this->forumRepository = $forumRepository;
	}

	/**
	 * List function
	 *
	 * @return void
	 */
	public function listAction() {
		$this->view->assign('forums', $this->forumRepository->findall());
	}

}

?>
