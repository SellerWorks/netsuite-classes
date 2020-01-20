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
 * ConsolidatedExchangeRateSearchBasic
 */
class ConsolidatedExchangeRateSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fromSubsidiary;
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
	 * @var SearchBooleanField
	 */
	public $isDerivedRate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $period;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $periodStartDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $toSubsidiary;

	static $paramtypesmap = array(
		"accountingBook" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fromSubsidiary" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDerivedRate" => "SearchBooleanField",
		"period" => "SearchMultiSelectField",
		"periodStartDate" => "SearchDateField",
		"toSubsidiary" => "SearchMultiSelectField",
	);
}
