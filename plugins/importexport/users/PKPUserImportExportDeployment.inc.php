<?php

/**
 * @file plugins/importexport/users/PKPUserImportExportDeployment.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPUserImportExportDeployment
 * @ingroup plugins_importexport_user
 *
 * @brief Class configuring the user import/export process to this
 * application's specifics.
 */

import('lib.pkp.classes.plugins.importexport.PKPImportExportDeployment');

class PKPUserImportExportDeployment extends PKPImportExportDeployment {
	/**
	 * Constructor
	 * @param $context Context
	 * @param $user User
	 */
	function PKPUserImportExportDeployment($context, $user) {
		parent::PKPImportExportDeployment($context, $user);
	}

	/**
	 * Get the schema filename.
	 * @return string
	 */
	function getSchemaFilename() {
		return 'pkp-users.xsd';
	}

	/**
	 * Get the namespace URN
	 * @return string
	 */
	function getNamespace() {
		return 'http://pkp.sfu.ca';
	}
}

?>
