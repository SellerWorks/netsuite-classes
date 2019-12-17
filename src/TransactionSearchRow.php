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
 * TransactionSearchRow
 */
class TransactionSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $accountJoin;
	/**
	 * @access public
	 * @var AccountingPeriodSearchRowBasic
	 */
	public $accountingPeriodJoin;
	/**
	 * @access public
	 * @var AccountingTransactionSearchRowBasic
	 */
	public $accountingTransactionJoin;
	/**
	 * @access public
	 * @var AccountSearchRowBasic
	 */
	public $advanceToApplyAccountJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $appliedToTransactionJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $applyingTransactionJoin;
	/**
	 * @access public
	 * @var AddressSearchRowBasic
	 */
	public $billingAddressJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $billingTransactionJoin;
	/**
	 * @access public
	 * @var BinSearchRowBasic
	 */
	public $binNumberJoin;
	/**
	 * @access public
	 * @var BomSearchRowBasic
	 */
	public $bomJoin;
	/**
	 * @access public
	 * @var BomRevisionSearchRowBasic
	 */
	public $bomRevisionJoin;
	/**
	 * @access public
	 * @var PhoneCallSearchRowBasic
	 */
	public $callJoin;
	/**
	 * @access public
	 * @var SupportCaseSearchRowBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var ClassificationSearchRowBasic
	 */
	public $classJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $cogsPurchaseJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $cogsSaleJoin;
	/**
	 * @access public
	 * @var ContactSearchRowBasic
	 */
	public $contactPrimaryJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $createdFromJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerJoin;
	/**
	 * @access public
	 * @var CustomerSearchRowBasic
	 */
	public $customerMainJoin;
	/**
	 * @access public
	 * @var DepartmentSearchRowBasic
	 */
	public $departmentJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $depositTransactionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $employeeJoin;
	/**
	 * @access public
	 * @var CalendarEventSearchRowBasic
	 */
	public $eventJoin;
	/**
	 * @access public
	 * @var ExpenseCategorySearchRowBasic
	 */
	public $expenseCategoryJoin;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $fromLocationJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $fulfillingTransactionJoin;
	/**
	 * @access public
	 * @var BillingAccountSearchRowBasic
	 */
	public $headerBillingAccountJoin;
	/**
	 * @access public
	 * @var InstallmentSearchRowBasic
	 */
	public $installmentJoin;
	/**
	 * @access public
	 * @var InventoryDetailSearchRowBasic
	 */
	public $inventoryDetailJoin;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var InventoryNumberSearchRowBasic
	 */
	public $itemNumberJoin;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $jobJoin;
	/**
	 * @access public
	 * @var JobSearchRowBasic
	 */
	public $jobMainJoin;
	/**
	 * @access public
	 * @var CampaignSearchRowBasic
	 */
	public $leadSourceJoin;
	/**
	 * @access public
	 * @var BillingAccountSearchRowBasic
	 */
	public $lineBillingAccountJoin;
	/**
	 * @access public
	 * @var FileSearchRowBasic
	 */
	public $lineFileJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $locationJoin;
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchRowBasic
	 */
	public $manufacturingOperationTaskJoin;
	/**
	 * @access public
	 * @var MessageSearchRowBasic
	 */
	public $messagesJoin;
	/**
	 * @access public
	 * @var EntitySearchRowBasic
	 */
	public $nextApproverJoin;
	/**
	 * @access public
	 * @var OpportunitySearchRowBasic
	 */
	public $opportunityJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $paidTransactionJoin;
	/**
	 * @access public
	 * @var PartnerSearchRowBasic
	 */
	public $partnerJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $payingTransactionJoin;
	/**
	 * @access public
	 * @var PayrollItemSearchRowBasic
	 */
	public $payrollItemJoin;
	/**
	 * @access public
	 * @var ProjectTaskSearchRowBasic
	 */
	public $projectTaskJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $purchaseOrderJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $requestorJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $revCommittingTransactionJoin;
	/**
	 * @access public
	 * @var ItemRevisionSearchRowBasic
	 */
	public $revisionJoin;
	/**
	 * @access public
	 * @var RevRecScheduleSearchRowBasic
	 */
	public $revRecScheduleJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $rgPostingTransactionJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $salesOrderJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $salesRepJoin;
	/**
	 * @access public
	 * @var AddressSearchRowBasic
	 */
	public $shippingAddressJoin;
	/**
	 * @access public
	 * @var SubsidiarySearchRowBasic
	 */
	public $subsidiaryJoin;
	/**
	 * @access public
	 * @var TaskSearchRowBasic
	 */
	public $taskJoin;
	/**
	 * @access public
	 * @var SalesTaxItemSearchRowBasic
	 */
	public $taxCodeJoin;
	/**
	 * @access public
	 * @var TaxDetailSearchRowBasic
	 */
	public $taxDetailJoin;
	/**
	 * @access public
	 * @var SalesTaxItemSearchRowBasic
	 */
	public $taxItemJoin;
	/**
	 * @access public
	 * @var TimeBillSearchRowBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var LocationSearchRowBasic
	 */
	public $toLocationJoin;
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
	 * @var VendorSearchRowBasic
	 */
	public $vendorJoin;
	/**
	 * @access public
	 * @var VendorSearchRowBasic
	 */
	public $vendorLineJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "TransactionSearchRowBasic",
		"accountJoin" => "AccountSearchRowBasic",
		"accountingPeriodJoin" => "AccountingPeriodSearchRowBasic",
		"accountingTransactionJoin" => "AccountingTransactionSearchRowBasic",
		"advanceToApplyAccountJoin" => "AccountSearchRowBasic",
		"appliedToTransactionJoin" => "TransactionSearchRowBasic",
		"applyingTransactionJoin" => "TransactionSearchRowBasic",
		"billingAddressJoin" => "AddressSearchRowBasic",
		"billingTransactionJoin" => "TransactionSearchRowBasic",
		"binNumberJoin" => "BinSearchRowBasic",
		"bomJoin" => "BomSearchRowBasic",
		"bomRevisionJoin" => "BomRevisionSearchRowBasic",
		"callJoin" => "PhoneCallSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"classJoin" => "ClassificationSearchRowBasic",
		"cogsPurchaseJoin" => "TransactionSearchRowBasic",
		"cogsSaleJoin" => "TransactionSearchRowBasic",
		"contactPrimaryJoin" => "ContactSearchRowBasic",
		"createdFromJoin" => "TransactionSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"customerMainJoin" => "CustomerSearchRowBasic",
		"departmentJoin" => "DepartmentSearchRowBasic",
		"depositTransactionJoin" => "TransactionSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"eventJoin" => "CalendarEventSearchRowBasic",
		"expenseCategoryJoin" => "ExpenseCategorySearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"fromLocationJoin" => "LocationSearchRowBasic",
		"fulfillingTransactionJoin" => "TransactionSearchRowBasic",
		"headerBillingAccountJoin" => "BillingAccountSearchRowBasic",
		"installmentJoin" => "InstallmentSearchRowBasic",
		"inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"itemNumberJoin" => "InventoryNumberSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"jobMainJoin" => "JobSearchRowBasic",
		"leadSourceJoin" => "CampaignSearchRowBasic",
		"lineBillingAccountJoin" => "BillingAccountSearchRowBasic",
		"lineFileJoin" => "FileSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"manufacturingOperationTaskJoin" => "ManufacturingOperationTaskSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"nextApproverJoin" => "EntitySearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"paidTransactionJoin" => "TransactionSearchRowBasic",
		"partnerJoin" => "PartnerSearchRowBasic",
		"payingTransactionJoin" => "TransactionSearchRowBasic",
		"payrollItemJoin" => "PayrollItemSearchRowBasic",
		"projectTaskJoin" => "ProjectTaskSearchRowBasic",
		"purchaseOrderJoin" => "TransactionSearchRowBasic",
		"requestorJoin" => "EmployeeSearchRowBasic",
		"revCommittingTransactionJoin" => "TransactionSearchRowBasic",
		"revisionJoin" => "ItemRevisionSearchRowBasic",
		"revRecScheduleJoin" => "RevRecScheduleSearchRowBasic",
		"rgPostingTransactionJoin" => "TransactionSearchRowBasic",
		"salesOrderJoin" => "TransactionSearchRowBasic",
		"salesRepJoin" => "EmployeeSearchRowBasic",
		"shippingAddressJoin" => "AddressSearchRowBasic",
		"subsidiaryJoin" => "SubsidiarySearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"taxCodeJoin" => "SalesTaxItemSearchRowBasic",
		"taxDetailJoin" => "TaxDetailSearchRowBasic",
		"taxItemJoin" => "SalesTaxItemSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"toLocationJoin" => "LocationSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"vendorLineJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
