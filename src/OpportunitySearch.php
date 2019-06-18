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
 * OpportunitySearch.
 */
class OpportunitySearch extends SearchRecord
{
    /**
     * @var OpportunitySearchBasic
     */
    public $basic;
    /**
     * @var TransactionSearchBasic
     */
    public $actualJoin;
    /**
     * @var PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var ContactSearchBasic
     */
    public $decisionMakerJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $estimateJoin;
    /**
     * @var CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var CampaignSearchBasic
     */
    public $leadSourceJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $orderJoin;
    /**
     * @var OriginatingLeadSearchBasic
     */
    public $originatingLeadJoin;
    /**
     * @var PartnerSearchBasic
     */
    public $partnerJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $salesRepJoin;
    /**
     * @var TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'OpportunitySearchBasic',
        'actualJoin' => 'TransactionSearchBasic',
        'callJoin' => 'PhoneCallSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'decisionMakerJoin' => 'ContactSearchBasic',
        'estimateJoin' => 'TransactionSearchBasic',
        'eventJoin' => 'CalendarEventSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'leadSourceJoin' => 'CampaignSearchBasic',
        'messagesJoin' => 'MessageSearchBasic',
        'orderJoin' => 'TransactionSearchBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchBasic',
        'partnerJoin' => 'PartnerSearchBasic',
        'salesRepJoin' => 'EmployeeSearchBasic',
        'taskJoin' => 'TaskSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
