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
 * CustomerSearch.
 */
class CustomerSearch extends SearchRecord
{
    /**
     * @var CustomerSearchBasic
     */
    public $basic;
    /**
     * @var BillingAccountSearchBasic
     */
    public $billingAccountJoin;
    /**
     * @var BillingScheduleSearchBasic
     */
    public $billingScheduleJoin;
    /**
     * @var PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var CampaignSearchBasic
     */
    public $campaignResponseJoin;
    /**
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var ContactSearchBasic
     */
    public $contactJoin;
    /**
     * @var ContactSearchBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var FileSearchBasic
     */
    public $hostedPageJoin;
    /**
     * @var JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var CampaignSearchBasic
     */
    public $leadSourceJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesFromJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesToJoin;
    /**
     * @var MseSubsidiarySearchBasic
     */
    public $mseSubsidiaryJoin;
    /**
     * @var OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var OriginatingLeadSearchBasic
     */
    public $originatingLeadJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $parentCustomerJoin;
    /**
     * @var PartnerSearchBasic
     */
    public $partnerJoin;
    /**
     * @var PricingSearchBasic
     */
    public $pricingJoin;
    /**
     * @var ItemSearchBasic
     */
    public $purchasedItemJoin;
    /**
     * @var ResourceAllocationSearchBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $salesRepJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $subCustomerJoin;
    /**
     * @var TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var EntityTaxRegistrationSearchBasic
     */
    public $taxRegistrationJoin;
    /**
     * @var TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $topLevelParentJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var ItemSearchBasic
     */
    public $upsellItemJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var SiteCategorySearchBasic
     */
    public $webSiteCategoryJoin;
    /**
     * @var ItemSearchBasic
     */
    public $webSiteItemJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'CustomerSearchBasic',
        'billingAccountJoin' => 'BillingAccountSearchBasic',
        'billingScheduleJoin' => 'BillingScheduleSearchBasic',
        'callJoin' => 'PhoneCallSearchBasic',
        'campaignResponseJoin' => 'CampaignSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'contactJoin' => 'ContactSearchBasic',
        'contactPrimaryJoin' => 'ContactSearchBasic',
        'eventJoin' => 'CalendarEventSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'hostedPageJoin' => 'FileSearchBasic',
        'jobJoin' => 'JobSearchBasic',
        'leadSourceJoin' => 'CampaignSearchBasic',
        'messagesJoin' => 'MessageSearchBasic',
        'messagesFromJoin' => 'MessageSearchBasic',
        'messagesToJoin' => 'MessageSearchBasic',
        'mseSubsidiaryJoin' => 'MseSubsidiarySearchBasic',
        'opportunityJoin' => 'OpportunitySearchBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchBasic',
        'parentCustomerJoin' => 'CustomerSearchBasic',
        'partnerJoin' => 'PartnerSearchBasic',
        'pricingJoin' => 'PricingSearchBasic',
        'purchasedItemJoin' => 'ItemSearchBasic',
        'resourceAllocationJoin' => 'ResourceAllocationSearchBasic',
        'salesRepJoin' => 'EmployeeSearchBasic',
        'subCustomerJoin' => 'CustomerSearchBasic',
        'taskJoin' => 'TaskSearchBasic',
        'taxRegistrationJoin' => 'EntityTaxRegistrationSearchBasic',
        'timeJoin' => 'TimeBillSearchBasic',
        'topLevelParentJoin' => 'CustomerSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'upsellItemJoin' => 'ItemSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'webSiteCategoryJoin' => 'SiteCategorySearchBasic',
        'webSiteItemJoin' => 'ItemSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
