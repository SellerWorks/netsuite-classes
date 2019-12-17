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
 * BomRevisionComponentSearchRowBasic
 */
class BomRevisionComponentSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $bomRevision;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $componentYield;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $itemSource;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $itemSubtype;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $itemType;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $lineId;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $weight;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"bomQuantity" => "SearchColumnDoubleField[]",
		"bomRevision" => "SearchColumnSelectField[]",
		"componentYield" => "SearchColumnDoubleField[]",
		"description" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"itemSource" => "SearchColumnEnumSelectField[]",
		"itemSubtype" => "SearchColumnStringField[]",
		"itemType" => "SearchColumnSelectField[]",
		"lineId" => "SearchColumnLongField[]",
		"quantity" => "SearchColumnDoubleField[]",
		"units" => "SearchColumnStringField[]",
		"weight" => "SearchColumnDoubleField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
