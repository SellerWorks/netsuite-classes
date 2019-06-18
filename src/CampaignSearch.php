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
 * CampaignSearch.
 */
class CampaignSearch extends SearchRecord
{
    /**
     * @var CampaignSearchBasic
     */
    public $basic;
    /**
     * @var EntitySearchBasic
     */
    public $campaignRecipientJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var OriginatingLeadSearchBasic
     */
    public $originatingLeadJoin;
    /**
     * @var PromotionCodeSearchBasic
     */
    public $promotionCodeJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'CampaignSearchBasic',
        'campaignRecipientJoin' => 'EntitySearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'messagesJoin' => 'MessageSearchBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchBasic',
        'promotionCodeJoin' => 'PromotionCodeSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
