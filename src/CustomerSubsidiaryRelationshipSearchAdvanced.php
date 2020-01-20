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
 * CustomerSubsidiaryRelationshipSearchAdvanced
 */
class CustomerSubsidiaryRelationshipSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomerSubsidiaryRelationshipSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomerSubsidiaryRelationshipSearchRow
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
		"criteria" => "CustomerSubsidiaryRelationshipSearch",
		"columns" => "CustomerSubsidiaryRelationshipSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
