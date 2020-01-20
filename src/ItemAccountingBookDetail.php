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
 * ItemAccountingBookDetail
 */
class ItemAccountingBookDetail {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $createRevenuePlansOn;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revenueRecognitionRule;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revRecForecastRule;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revRecSchedule;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sameAsPrimaryRevRec;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $amortizationTemplate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $sameAsPrimaryAmortization;

	static $paramtypesmap = array(
		"accountingBook" => "RecordRef",
		"createRevenuePlansOn" => "RecordRef",
		"revenueRecognitionRule" => "RecordRef",
		"revRecForecastRule" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"sameAsPrimaryRevRec" => "boolean",
		"amortizationTemplate" => "RecordRef",
		"sameAsPrimaryAmortization" => "boolean",
	);
}
