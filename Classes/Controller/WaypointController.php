<?php
namespace CedricZiel\Simpleroute\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Cedric Ziel <cedric@cedric-ziel.com>
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

use CedricZiel\Simpleroute\Domain\Model\DTO\DirectionSearchDTO;
use CedricZiel\Simpleroute\Domain\Repository\WaypointRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * WaypointController
 */
class WaypointController extends ActionController {

	/**
	 * waypointRepository
	 *
	 * @var \CedricZiel\Simpleroute\Domain\Repository\WaypointRepository
	 */
	protected $waypointRepository = NULL;

	/**
	 * @param WaypointRepository $waypointRepository
	 */
	public function __construct(WaypointRepository $waypointRepository = NULL) {

		$this->waypointRepository = $waypointRepository;
	}

	/**
	 * action searchForm
	 *
	 * @param \CedricZiel\Simpleroute\Domain\Model\DTO\DirectionSearchDTO $directionSearch
	 */
	public function searchFormAction(DirectionSearchDTO $directionSearch = NULL) {

		if (NULL === $directionSearch) {
			$directionSearch = new DirectionSearchDTO();
		}

		$this->view->assign('search', $directionSearch);
	}

	/**
	 * action showDirections
	 * @param DirectionSearchDTO $directionSearch
	 */
	public function showDirectionsAction(DirectionSearchDTO $directionSearch) {

		$this->view->assign('search', $directionSearch);
	}
}
