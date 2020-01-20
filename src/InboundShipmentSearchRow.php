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
 * InboundShipmentSearchRow
 */
class InboundShipmentSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var InboundShipmentSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $itemReceiptJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $purchaseOrderJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "InboundShipmentSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"itemReceiptJoin" => "TransactionSearchRowBasic",
		"purchaseOrderJoin" => "TransactionSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
