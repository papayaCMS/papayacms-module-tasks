<?php
/**
* Admin module for task manager
*
* @copyright 2010 by papaya Software GmbH - All rights reserved.
* @link http://www.papaya-cms.com/
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, version 2
*
* You can redistribute and/or modify this script under the terms of the GNU General Public
* License (GPL) version 2, provided that the copyright and license notes, including these
* lines, remain unmodified. papaya is distributed in the hope that it will be useful, but
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.
*
* @package Papaya-Modules
* @subpackage Free-Tasks
* @version $Id: edmodule_tasks.php 39576 2014-03-17 09:47:18Z weinert $
*/

/**
* Admin module for task manager
*
* @package Papaya-Modules
* @subpackage Free-Tasks
*/
class edmodule_tasks extends base_module {

  /**
  * @var array $permissions holds permissions available for this module package
  */
  var $permissions = array(
    1 => 'Manage'
  );

  /**
  * Initializes and executes the admin module.
  */
  function execModule() {
    if ($this->hasPerm(1, TRUE)) {
      $tasks = new PapayaModuleTasksAdministration($this);
      $tasks->layout = $this->layout;
      $tasks->execute();
      $tasks->getXML();
    }
  }
}
