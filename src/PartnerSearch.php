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
 * PartnerSearch.
 */
class PartnerSearch extends SearchRecord
{
    /**
     * @var PartnerSearchBasic
     */
    public $basic;
    /**
     * @var CampaignSearchBasic
     */
    public $campaignResponseJoin;
    /**
     * @var ContactSearchBasic
     */
    public $contactJoin;
    /**
     * @var ContactSearchBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
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
     * @var OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var EntityTaxRegistrationSearchBasic
     */
    public $taxRegistrationJoin;
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
        'basic' => 'PartnerSearchBasic',
        'campaignResponseJoin' => 'CampaignSearchBasic',
        'contactJoin' => 'ContactSearchBasic',
        'contactPrimaryJoin' => 'ContactSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'messagesJoin' => 'MessageSearchBasic',
        'messagesFromJoin' => 'MessageSearchBasic',
        'messagesToJoin' => 'MessageSearchBasic',
        'opportunityJoin' => 'OpportunitySearchBasic',
        'taxRegistrationJoin' => 'EntityTaxRegistrationSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
