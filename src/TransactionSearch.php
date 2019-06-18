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
 * TransactionSearch.
 */
class TransactionSearch extends SearchRecord
{
    /**
     * @var TransactionSearchBasic
     */
    public $basic;
    /**
     * @var AccountSearchBasic
     */
    public $accountJoin;
    /**
     * @var AccountingPeriodSearchBasic
     */
    public $accountingPeriodJoin;
    /**
     * @var AccountingTransactionSearchBasic
     */
    public $accountingTransactionJoin;
    /**
     * @var AccountSearchBasic
     */
    public $advanceToApplyAccountJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $appliedToTransactionJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $applyingTransactionJoin;
    /**
     * @var AddressSearchBasic
     */
    public $billingAddressJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $billingTransactionJoin;
    /**
     * @var BinSearchBasic
     */
    public $binNumberJoin;
    /**
     * @var BomSearchBasic
     */
    public $bomJoin;
    /**
     * @var BomRevisionSearchBasic
     */
    public $bomRevisionJoin;
    /**
     * @var PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var ClassificationSearchBasic
     */
    public $classJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $cogsPurchaseJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $cogsSaleJoin;
    /**
     * @var ContactSearchBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $createdFromJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerMainJoin;
    /**
     * @var DepartmentSearchBasic
     */
    public $departmentJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $depositTransactionJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var ExpenseCategorySearchBasic
     */
    public $expenseCategoryJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var LocationSearchBasic
     */
    public $fromLocationJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $fulfillingTransactionJoin;
    /**
     * @var BillingAccountSearchBasic
     */
    public $headerBillingAccountJoin;
    /**
     * @var InventoryDetailSearchBasic
     */
    public $inventoryDetailJoin;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var InventoryNumberSearchBasic
     */
    public $itemNumberJoin;
    /**
     * @var JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var JobSearchBasic
     */
    public $jobMainJoin;
    /**
     * @var CampaignSearchBasic
     */
    public $leadSourceJoin;
    /**
     * @var BillingAccountSearchBasic
     */
    public $lineBillingAccountJoin;
    /**
     * @var FileSearchBasic
     */
    public $lineFileJoin;
    /**
     * @var LocationSearchBasic
     */
    public $locationJoin;
    /**
     * @var ManufacturingOperationTaskSearchBasic
     */
    public $manufacturingOperationTaskJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var EntitySearchBasic
     */
    public $nextApproverJoin;
    /**
     * @var OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $paidTransactionJoin;
    /**
     * @var PartnerSearchBasic
     */
    public $partnerJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $payingTransactionJoin;
    /**
     * @var PayrollItemSearchBasic
     */
    public $payrollItemJoin;
    /**
     * @var ProjectTaskSearchBasic
     */
    public $projectTaskJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $purchaseOrderJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $requestorJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $revCommittingTransactionJoin;
    /**
     * @var ItemRevisionSearchBasic
     */
    public $revisionJoin;
    /**
     * @var RevRecScheduleSearchBasic
     */
    public $revRecScheduleJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $rgPostingTransactionJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $salesOrderJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $salesRepJoin;
    /**
     * @var AddressSearchBasic
     */
    public $shippingAddressJoin;
    /**
     * @var SubsidiarySearchBasic
     */
    public $subsidiaryJoin;
    /**
     * @var TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var SalesTaxItemSearchBasic
     */
    public $taxCodeJoin;
    /**
     * @var TaxDetailSearchBasic
     */
    public $taxDetailJoin;
    /**
     * @var SalesTaxItemSearchBasic
     */
    public $taxItemJoin;
    /**
     * @var TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var LocationSearchBasic
     */
    public $toLocationJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var VendorSearchBasic
     */
    public $vendorLineJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'TransactionSearchBasic',
        'accountJoin' => 'AccountSearchBasic',
        'accountingPeriodJoin' => 'AccountingPeriodSearchBasic',
        'accountingTransactionJoin' => 'AccountingTransactionSearchBasic',
        'advanceToApplyAccountJoin' => 'AccountSearchBasic',
        'appliedToTransactionJoin' => 'TransactionSearchBasic',
        'applyingTransactionJoin' => 'TransactionSearchBasic',
        'billingAddressJoin' => 'AddressSearchBasic',
        'billingTransactionJoin' => 'TransactionSearchBasic',
        'binNumberJoin' => 'BinSearchBasic',
        'bomJoin' => 'BomSearchBasic',
        'bomRevisionJoin' => 'BomRevisionSearchBasic',
        'callJoin' => 'PhoneCallSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'classJoin' => 'ClassificationSearchBasic',
        'cogsPurchaseJoin' => 'TransactionSearchBasic',
        'cogsSaleJoin' => 'TransactionSearchBasic',
        'contactPrimaryJoin' => 'ContactSearchBasic',
        'createdFromJoin' => 'TransactionSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'customerMainJoin' => 'CustomerSearchBasic',
        'departmentJoin' => 'DepartmentSearchBasic',
        'depositTransactionJoin' => 'TransactionSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'eventJoin' => 'CalendarEventSearchBasic',
        'expenseCategoryJoin' => 'ExpenseCategorySearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'fromLocationJoin' => 'LocationSearchBasic',
        'fulfillingTransactionJoin' => 'TransactionSearchBasic',
        'headerBillingAccountJoin' => 'BillingAccountSearchBasic',
        'inventoryDetailJoin' => 'InventoryDetailSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'itemNumberJoin' => 'InventoryNumberSearchBasic',
        'jobJoin' => 'JobSearchBasic',
        'jobMainJoin' => 'JobSearchBasic',
        'leadSourceJoin' => 'CampaignSearchBasic',
        'lineBillingAccountJoin' => 'BillingAccountSearchBasic',
        'lineFileJoin' => 'FileSearchBasic',
        'locationJoin' => 'LocationSearchBasic',
        'manufacturingOperationTaskJoin' => 'ManufacturingOperationTaskSearchBasic',
        'messagesJoin' => 'MessageSearchBasic',
        'nextApproverJoin' => 'EntitySearchBasic',
        'opportunityJoin' => 'OpportunitySearchBasic',
        'paidTransactionJoin' => 'TransactionSearchBasic',
        'partnerJoin' => 'PartnerSearchBasic',
        'payingTransactionJoin' => 'TransactionSearchBasic',
        'payrollItemJoin' => 'PayrollItemSearchBasic',
        'projectTaskJoin' => 'ProjectTaskSearchBasic',
        'purchaseOrderJoin' => 'TransactionSearchBasic',
        'requestorJoin' => 'EmployeeSearchBasic',
        'revCommittingTransactionJoin' => 'TransactionSearchBasic',
        'revisionJoin' => 'ItemRevisionSearchBasic',
        'revRecScheduleJoin' => 'RevRecScheduleSearchBasic',
        'rgPostingTransactionJoin' => 'TransactionSearchBasic',
        'salesOrderJoin' => 'TransactionSearchBasic',
        'salesRepJoin' => 'EmployeeSearchBasic',
        'shippingAddressJoin' => 'AddressSearchBasic',
        'subsidiaryJoin' => 'SubsidiarySearchBasic',
        'taskJoin' => 'TaskSearchBasic',
        'taxCodeJoin' => 'SalesTaxItemSearchBasic',
        'taxDetailJoin' => 'TaxDetailSearchBasic',
        'taxItemJoin' => 'SalesTaxItemSearchBasic',
        'timeJoin' => 'TimeBillSearchBasic',
        'toLocationJoin' => 'LocationSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'vendorJoin' => 'VendorSearchBasic',
        'vendorLineJoin' => 'VendorSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
