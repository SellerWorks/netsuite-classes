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
 * TransactionSearchRow.
 */
class TransactionSearchRow extends SearchRow
{
    /**
     * @var TransactionSearchRowBasic
     */
    public $basic;
    /**
     * @var AccountSearchRowBasic
     */
    public $accountJoin;
    /**
     * @var AccountingPeriodSearchRowBasic
     */
    public $accountingPeriodJoin;
    /**
     * @var AccountingTransactionSearchRowBasic
     */
    public $accountingTransactionJoin;
    /**
     * @var AccountSearchRowBasic
     */
    public $advanceToApplyAccountJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $appliedToTransactionJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $applyingTransactionJoin;
    /**
     * @var AddressSearchRowBasic
     */
    public $billingAddressJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $billingTransactionJoin;
    /**
     * @var BinSearchRowBasic
     */
    public $binNumberJoin;
    /**
     * @var BomSearchRowBasic
     */
    public $bomJoin;
    /**
     * @var BomRevisionSearchRowBasic
     */
    public $bomRevisionJoin;
    /**
     * @var PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var ClassificationSearchRowBasic
     */
    public $classJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $cogsPurchaseJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $cogsSaleJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $createdFromJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerMainJoin;
    /**
     * @var DepartmentSearchRowBasic
     */
    public $departmentJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $depositTransactionJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var ExpenseCategorySearchRowBasic
     */
    public $expenseCategoryJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var LocationSearchRowBasic
     */
    public $fromLocationJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $fulfillingTransactionJoin;
    /**
     * @var BillingAccountSearchRowBasic
     */
    public $headerBillingAccountJoin;
    /**
     * @var InventoryDetailSearchRowBasic
     */
    public $inventoryDetailJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var InventoryNumberSearchRowBasic
     */
    public $itemNumberJoin;
    /**
     * @var JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var JobSearchRowBasic
     */
    public $jobMainJoin;
    /**
     * @var CampaignSearchRowBasic
     */
    public $leadSourceJoin;
    /**
     * @var BillingAccountSearchRowBasic
     */
    public $lineBillingAccountJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $lineFileJoin;
    /**
     * @var LocationSearchRowBasic
     */
    public $locationJoin;
    /**
     * @var ManufacturingOperationTaskSearchRowBasic
     */
    public $manufacturingOperationTaskJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @var EntitySearchRowBasic
     */
    public $nextApproverJoin;
    /**
     * @var OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $paidTransactionJoin;
    /**
     * @var PartnerSearchRowBasic
     */
    public $partnerJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $payingTransactionJoin;
    /**
     * @var PayrollItemSearchRowBasic
     */
    public $payrollItemJoin;
    /**
     * @var ProjectTaskSearchRowBasic
     */
    public $projectTaskJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $purchaseOrderJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $requestorJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $revCommittingTransactionJoin;
    /**
     * @var ItemRevisionSearchRowBasic
     */
    public $revisionJoin;
    /**
     * @var RevRecScheduleSearchRowBasic
     */
    public $revRecScheduleJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $rgPostingTransactionJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $salesOrderJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $salesRepJoin;
    /**
     * @var AddressSearchRowBasic
     */
    public $shippingAddressJoin;
    /**
     * @var SubsidiarySearchRowBasic
     */
    public $subsidiaryJoin;
    /**
     * @var TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var SalesTaxItemSearchRowBasic
     */
    public $taxCodeJoin;
    /**
     * @var TaxDetailSearchRowBasic
     */
    public $taxDetailJoin;
    /**
     * @var SalesTaxItemSearchRowBasic
     */
    public $taxItemJoin;
    /**
     * @var TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var LocationSearchRowBasic
     */
    public $toLocationJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $vendorLineJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'TransactionSearchRowBasic',
        'accountJoin' => 'AccountSearchRowBasic',
        'accountingPeriodJoin' => 'AccountingPeriodSearchRowBasic',
        'accountingTransactionJoin' => 'AccountingTransactionSearchRowBasic',
        'advanceToApplyAccountJoin' => 'AccountSearchRowBasic',
        'appliedToTransactionJoin' => 'TransactionSearchRowBasic',
        'applyingTransactionJoin' => 'TransactionSearchRowBasic',
        'billingAddressJoin' => 'AddressSearchRowBasic',
        'billingTransactionJoin' => 'TransactionSearchRowBasic',
        'binNumberJoin' => 'BinSearchRowBasic',
        'bomJoin' => 'BomSearchRowBasic',
        'bomRevisionJoin' => 'BomRevisionSearchRowBasic',
        'callJoin' => 'PhoneCallSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'classJoin' => 'ClassificationSearchRowBasic',
        'cogsPurchaseJoin' => 'TransactionSearchRowBasic',
        'cogsSaleJoin' => 'TransactionSearchRowBasic',
        'contactPrimaryJoin' => 'ContactSearchRowBasic',
        'createdFromJoin' => 'TransactionSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'customerMainJoin' => 'CustomerSearchRowBasic',
        'departmentJoin' => 'DepartmentSearchRowBasic',
        'depositTransactionJoin' => 'TransactionSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'eventJoin' => 'CalendarEventSearchRowBasic',
        'expenseCategoryJoin' => 'ExpenseCategorySearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'fromLocationJoin' => 'LocationSearchRowBasic',
        'fulfillingTransactionJoin' => 'TransactionSearchRowBasic',
        'headerBillingAccountJoin' => 'BillingAccountSearchRowBasic',
        'inventoryDetailJoin' => 'InventoryDetailSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'itemNumberJoin' => 'InventoryNumberSearchRowBasic',
        'jobJoin' => 'JobSearchRowBasic',
        'jobMainJoin' => 'JobSearchRowBasic',
        'leadSourceJoin' => 'CampaignSearchRowBasic',
        'lineBillingAccountJoin' => 'BillingAccountSearchRowBasic',
        'lineFileJoin' => 'FileSearchRowBasic',
        'locationJoin' => 'LocationSearchRowBasic',
        'manufacturingOperationTaskJoin' => 'ManufacturingOperationTaskSearchRowBasic',
        'messagesJoin' => 'MessageSearchRowBasic',
        'nextApproverJoin' => 'EntitySearchRowBasic',
        'opportunityJoin' => 'OpportunitySearchRowBasic',
        'paidTransactionJoin' => 'TransactionSearchRowBasic',
        'partnerJoin' => 'PartnerSearchRowBasic',
        'payingTransactionJoin' => 'TransactionSearchRowBasic',
        'payrollItemJoin' => 'PayrollItemSearchRowBasic',
        'projectTaskJoin' => 'ProjectTaskSearchRowBasic',
        'purchaseOrderJoin' => 'TransactionSearchRowBasic',
        'requestorJoin' => 'EmployeeSearchRowBasic',
        'revCommittingTransactionJoin' => 'TransactionSearchRowBasic',
        'revisionJoin' => 'ItemRevisionSearchRowBasic',
        'revRecScheduleJoin' => 'RevRecScheduleSearchRowBasic',
        'rgPostingTransactionJoin' => 'TransactionSearchRowBasic',
        'salesOrderJoin' => 'TransactionSearchRowBasic',
        'salesRepJoin' => 'EmployeeSearchRowBasic',
        'shippingAddressJoin' => 'AddressSearchRowBasic',
        'subsidiaryJoin' => 'SubsidiarySearchRowBasic',
        'taskJoin' => 'TaskSearchRowBasic',
        'taxCodeJoin' => 'SalesTaxItemSearchRowBasic',
        'taxDetailJoin' => 'TaxDetailSearchRowBasic',
        'taxItemJoin' => 'SalesTaxItemSearchRowBasic',
        'timeJoin' => 'TimeBillSearchRowBasic',
        'toLocationJoin' => 'LocationSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'vendorJoin' => 'VendorSearchRowBasic',
        'vendorLineJoin' => 'VendorSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
