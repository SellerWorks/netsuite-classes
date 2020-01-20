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
 * BomRevisionComponentSearchBasic
 */
class BomRevisionComponentSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $bomRevision;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $componentYield;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
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
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $itemSource;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $itemSubtype;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemType;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $lineId;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $weight;

	static $paramtypesmap = array(
		"bomQuantity" => "SearchDoubleField",
		"bomRevision" => "SearchMultiSelectField",
		"componentYield" => "SearchDoubleField",
		"description" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"itemSource" => "SearchEnumMultiSelectField",
		"itemSubtype" => "SearchStringField",
		"itemType" => "SearchMultiSelectField",
		"lineId" => "SearchLongField",
		"quantity" => "SearchDoubleField",
		"units" => "SearchStringField",
		"weight" => "SearchDoubleField",
	);
}
