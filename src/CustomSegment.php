<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * CustomSegment
 */
class CustomSegment extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $label;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;
	/**
	 * @access public
	 * @var string
	 */
	public $recordScriptId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recordType;
	/**
	 * @access public
	 * @var CustomizationFieldType
	 */
	public $fieldType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $showInList;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $filteredByList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $hasGLImpact;
	/**
	 * @access public
	 * @var string
	 */
	public $help;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isMandatory;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $defaultSelection;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"label" => "string",
		"scriptId" => "string",
		"recordScriptId" => "string",
		"recordType" => "RecordRef",
		"fieldType" => "CustomizationFieldType",
		"isInactive" => "boolean",
		"showInList" => "boolean",
		"filteredByList" => "RecordRefList",
		"hasGLImpact" => "boolean",
		"help" => "string",
		"description" => "string",
		"isMandatory" => "boolean",
		"defaultSelection" => "RecordRef",
		"internalId" => "string",
	);
}
