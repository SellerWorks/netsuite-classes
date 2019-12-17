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
 * MerchandiseHierarchyNodeSearchRowBasic
 */
class MerchandiseHierarchyNodeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $hierarchyLevel;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $hierarchyVersion;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parentNode;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"hierarchyLevel" => "SearchColumnSelectField[]",
		"hierarchyVersion" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
		"parentNode" => "SearchColumnSelectField[]",
	);
}
