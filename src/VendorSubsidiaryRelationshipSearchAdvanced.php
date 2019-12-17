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
 * VendorSubsidiaryRelationshipSearchAdvanced
 */
class VendorSubsidiaryRelationshipSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var VendorSubsidiaryRelationshipSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var VendorSubsidiaryRelationshipSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "VendorSubsidiaryRelationshipSearch",
		"columns" => "VendorSubsidiaryRelationshipSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
