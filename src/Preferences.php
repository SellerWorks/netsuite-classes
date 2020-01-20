<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * Preferences
 */
class Preferences {
	/**
	 * @access public
	 * @var boolean
	 */
	public $warningAsError;
	/**
	 * @access public
	 * @var boolean
	 */
	public $disableMandatoryCustomFieldValidation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $disableSystemNotesForCustomFields;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ignoreReadOnlyFields;
	/**
	 * @access public
	 * @var boolean
	 */
	public $runServerSuiteScriptAndTriggerWorkflows;

	static $paramtypesmap = array(
		"warningAsError" => "boolean",
		"disableMandatoryCustomFieldValidation" => "boolean",
		"disableSystemNotesForCustomFields" => "boolean",
		"ignoreReadOnlyFields" => "boolean",
		"runServerSuiteScriptAndTriggerWorkflows" => "boolean",
	);
}
