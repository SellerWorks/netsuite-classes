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
 * BomSearchRowBasic
 */
class BomSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableForAllAssemblies;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableForAllLocations;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $includeChildren;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $legacyBomForAssembly;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $restrictToAssemblies;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $restrictToLocations;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $revisionName;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiaryNoHierarchy;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $useComponentYield;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $usedOnAssembly;

	static $paramtypesmap = array(
		"availableForAllAssemblies" => "SearchColumnBooleanField[]",
		"availableForAllLocations" => "SearchColumnBooleanField[]",
		"createdDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"includeChildren" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"legacyBomForAssembly" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"restrictToAssemblies" => "SearchColumnSelectField[]",
		"restrictToLocations" => "SearchColumnSelectField[]",
		"revisionName" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"subsidiaryNoHierarchy" => "SearchColumnSelectField[]",
		"useComponentYield" => "SearchColumnBooleanField[]",
		"usedOnAssembly" => "SearchColumnBooleanField[]",
	);
}
