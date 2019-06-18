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
 * VendorSearch.
 */
class VendorSearch extends SearchRecord
{
    /**
     * @var VendorSearchBasic
     */
    public $basic;
    /**
     * @var AccountSearchBasic
     */
    public $accountJoin;
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
     * @var AccountSearchBasic
     */
    public $expAccountJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var MseSubsidiarySearchBasic
     */
    public $mseSubsidiaryJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesFromJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesToJoin;
    /**
     * @var EntityTaxRegistrationSearchBasic
     */
    public $taxRegistrationJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $timeApproverJoin;
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

    public static $paramtypesmap = array(
        'basic' => 'VendorSearchBasic',
        'accountJoin' => 'AccountSearchBasic',
        'campaignResponseJoin' => 'CampaignSearchBasic',
        'contactJoin' => 'ContactSearchBasic',
        'contactPrimaryJoin' => 'ContactSearchBasic',
        'expAccountJoin' => 'AccountSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'messagesJoin' => 'MessageSearchBasic',
        'mseSubsidiaryJoin' => 'MseSubsidiarySearchBasic',
        'messagesFromJoin' => 'MessageSearchBasic',
        'messagesToJoin' => 'MessageSearchBasic',
        'taxRegistrationJoin' => 'EntityTaxRegistrationSearchBasic',
        'timeApproverJoin' => 'EmployeeSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
