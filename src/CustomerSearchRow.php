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
 * CustomerSearchRow.
 */
class CustomerSearchRow extends SearchRow
{
    /**
     * @var CustomerSearchRowBasic
     */
    public $basic;
    /**
     * @var BillingAccountSearchRowBasic
     */
    public $billingAccountJoin;
    /**
     * @var BillingScheduleSearchRowBasic
     */
    public $billingScheduleJoin;
    /**
     * @var PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @var CampaignSearchRowBasic
     */
    public $campaignResponseJoin;
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $contactJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $hostedPageJoin;
    /**
     * @var JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var CampaignSearchRowBasic
     */
    public $leadSourceJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesFromJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesToJoin;
    /**
     * @var MseSubsidiarySearchRowBasic
     */
    public $mseSubsidiaryJoin;
    /**
     * @var OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $parentCustomerJoin;
    /**
     * @var PartnerSearchRowBasic
     */
    public $partnerJoin;
    /**
     * @var PricingSearchRowBasic
     */
    public $pricingJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $purchasedItemJoin;
    /**
     * @var ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $salesRepJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $subCustomerJoin;
    /**
     * @var TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var EntityTaxRegistrationSearchRowBasic
     */
    public $taxRegistrationJoin;
    /**
     * @var TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $topLevelParentJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $upsellItemJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var SiteCategorySearchRowBasic
     */
    public $webSiteCategoryJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $webSiteItemJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'CustomerSearchRowBasic',
        'billingAccountJoin' => 'BillingAccountSearchRowBasic',
        'billingScheduleJoin' => 'BillingScheduleSearchRowBasic',
        'callJoin' => 'PhoneCallSearchRowBasic',
        'campaignResponseJoin' => 'CampaignSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'contactJoin' => 'ContactSearchRowBasic',
        'contactPrimaryJoin' => 'ContactSearchRowBasic',
        'eventJoin' => 'CalendarEventSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'hostedPageJoin' => 'FileSearchRowBasic',
        'jobJoin' => 'JobSearchRowBasic',
        'leadSourceJoin' => 'CampaignSearchRowBasic',
        'messagesJoin' => 'MessageSearchRowBasic',
        'messagesFromJoin' => 'MessageSearchRowBasic',
        'messagesToJoin' => 'MessageSearchRowBasic',
        'mseSubsidiaryJoin' => 'MseSubsidiarySearchRowBasic',
        'opportunityJoin' => 'OpportunitySearchRowBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchRowBasic',
        'parentCustomerJoin' => 'CustomerSearchRowBasic',
        'partnerJoin' => 'PartnerSearchRowBasic',
        'pricingJoin' => 'PricingSearchRowBasic',
        'purchasedItemJoin' => 'ItemSearchRowBasic',
        'resourceAllocationJoin' => 'ResourceAllocationSearchRowBasic',
        'salesRepJoin' => 'EmployeeSearchRowBasic',
        'subCustomerJoin' => 'CustomerSearchRowBasic',
        'taskJoin' => 'TaskSearchRowBasic',
        'taxRegistrationJoin' => 'EntityTaxRegistrationSearchRowBasic',
        'timeJoin' => 'TimeBillSearchRowBasic',
        'topLevelParentJoin' => 'CustomerSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'upsellItemJoin' => 'ItemSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'webSiteCategoryJoin' => 'SiteCategorySearchRowBasic',
        'webSiteItemJoin' => 'ItemSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
