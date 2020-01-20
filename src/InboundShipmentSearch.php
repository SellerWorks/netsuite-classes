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
 * InboundShipmentSearch
 */
class InboundShipmentSearch extends SearchRecord {
	/**
	 * @access public
	 * @var InboundShipmentSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $itemReceiptJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $purchaseOrderJoin;
	/**
	 * @access public
	 * @var VendorSearchBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "InboundShipmentSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"itemReceiptJoin" => "TransactionSearchBasic",
		"purchaseOrderJoin" => "TransactionSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
