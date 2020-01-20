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
 * VendorSearchRow
 */
class VendorSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $accountJoin;
	/**
	 * @access public
	 * @var CampaignSearchRowBasic
	 */
	public $campaignResponseJoin;
	/**
	 * @access public
	 * @var ContactSearchRowBasic
	 */
	public $contactJoin;
	/**
	 * @access public
	 * @var ContactSearchRowBasic
	 */
	public $contactPrimaryJoin;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $expAccountJoin;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var MseSubsidiarySearchRowBasic
	 */
	public $mseSubsidiaryJoin;
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $messagesFromJoin;
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $messagesToJoin;
	/**
	 * @access public
	 * @var EntityTaxRegistrationSearchRowBasic
	 */
	public $taxRegistrationJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $timeApproverJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var NoteSearchRowBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "VendorSearchRowBasic",
		"accountJoin" => "AccountSearchRowBasic",
		"campaignResponseJoin" => "CampaignSearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"contactPrimaryJoin" => "ContactSearchRowBasic",
		"expAccountJoin" => "AccountSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"mseSubsidiaryJoin" => "MseSubsidiarySearchRowBasic",
		"messagesFromJoin" => "MessageSearchRowBasic",
		"messagesToJoin" => "MessageSearchRowBasic",
		"taxRegistrationJoin" => "EntityTaxRegistrationSearchRowBasic",
		"timeApproverJoin" => "EmployeeSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
