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
 * PaymentMethodSearchAdvanced
 */
class PaymentMethodSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PaymentMethodSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PaymentMethodSearchRow
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
		"criteria" => "PaymentMethodSearch",
		"columns" => "PaymentMethodSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
