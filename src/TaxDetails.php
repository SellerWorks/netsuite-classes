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
 * TaxDetails
 */
class TaxDetails {
	/**
	 * @access public
	 * @var string
	 */
	public $taxDetailsReference;
	/**
	 * @access public
	 * @var string
	 */
	public $lineType;
	/**
	 * @access public
	 * @var string
	 */
	public $lineName;
	/**
	 * @access public
	 * @var float
	 */
	public $netAmount;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var float
	 */
	public $taxBasis;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate;
	/**
	 * @access public
	 * @var float
	 */
	public $taxAmount;
	/**
	 * @access public
	 * @var string
	 */
	public $calcDetail;

	static $paramtypesmap = array(
		"taxDetailsReference" => "string",
		"lineType" => "string",
		"lineName" => "string",
		"netAmount" => "float",
		"grossAmount" => "float",
		"taxType" => "RecordRef",
		"taxCode" => "RecordRef",
		"taxBasis" => "float",
		"taxRate" => "float",
		"taxAmount" => "float",
		"calcDetail" => "string",
	);
}
