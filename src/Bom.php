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
 * Bom
 */
class Bom extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var boolean
	 */
	public $usedOnAssembly;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $useComponentYield;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $legacyBomForAssembly;
	/**
	 * @access public
	 * @var boolean
	 */
	public $availableForAllAssemblies;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $restrictToAssembliesList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $availableForAllLocations;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $restrictToLocationsList;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $subsidiaryList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeChildren;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"name" => "string",
		"usedOnAssembly" => "boolean",
		"createdDate" => "dateTime",
		"isInactive" => "boolean",
		"useComponentYield" => "boolean",
		"memo" => "string",
		"legacyBomForAssembly" => "RecordRef",
		"availableForAllAssemblies" => "boolean",
		"restrictToAssembliesList" => "RecordRefList",
		"availableForAllLocations" => "boolean",
		"restrictToLocationsList" => "RecordRefList",
		"subsidiaryList" => "RecordRefList",
		"includeChildren" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
