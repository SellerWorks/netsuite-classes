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
 * BomSearchBasic
 */
class BomSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableForAllAssemblies;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableForAllLocations;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $includeChildren;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $legacyBomForAssembly;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $restrictToAssemblies;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $restrictToLocations;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useComponentYield;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $usedOnAssembly;

	static $paramtypesmap = array(
		"availableForAllAssemblies" => "SearchBooleanField",
		"availableForAllLocations" => "SearchBooleanField",
		"createdDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"includeChildren" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"legacyBomForAssembly" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"name" => "SearchStringField",
		"restrictToAssemblies" => "SearchMultiSelectField",
		"restrictToLocations" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"useComponentYield" => "SearchBooleanField",
		"usedOnAssembly" => "SearchBooleanField",
	);
}
