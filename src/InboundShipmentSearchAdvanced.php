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
 * InboundShipmentSearchAdvanced
 */
class InboundShipmentSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var InboundShipmentSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var InboundShipmentSearchRow
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
		"criteria" => "InboundShipmentSearch",
		"columns" => "InboundShipmentSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
