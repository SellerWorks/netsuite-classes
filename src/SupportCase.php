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
 * SupportCase.
 */
class SupportCase extends Record
{
    /**
     * @var string
     */
    public $escalationMessage;
    /**
     * @var dateTime
     */
    public $lastReopenedDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var string
     */
    public $incomingMessage;
    /**
     * @var RecordRef
     */
    public $insertSolution;
    /**
     * @var string
     */
    public $outgoingMessage;
    /**
     * @var string
     */
    public $searchSolution;
    /**
     * @var bool
     */
    public $emailForm;
    /**
     * @var string
     */
    public $newSolutionFromMsg;
    /**
     * @var bool
     */
    public $internalOnly;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $caseNumber;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var dateTime
     */
    public $lastMessageDate;
    /**
     * @var RecordRef
     */
    public $company;
    /**
     * @var RecordRef
     */
    public $profile;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $contact;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var RecordRef
     */
    public $product;
    /**
     * @var RecordRef
     */
    public $module;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRef
     */
    public $serialNumber;
    /**
     * @var string
     */
    public $inboundEmail;
    /**
     * @var RecordRef
     */
    public $issue;
    /**
     * @var RecordRef
     */
    public $status;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var RecordRef
     */
    public $priority;
    /**
     * @var RecordRef
     */
    public $origin;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var RecordRef
     */
    public $assigned;
    /**
     * @var bool
     */
    public $helpDesk;
    /**
     * @var EmailEmployeesList
     */
    public $emailEmployeesList;
    /**
     * @var SupportCaseEscalateToList
     */
    public $escalateToList;
    /**
     * @var SupportCaseTimeItemList
     */
    public $timeItemList;
    /**
     * @var SupportCaseSolutionsList
     */
    public $solutionsList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'escalationMessage' => 'string',
        'lastReopenedDate' => 'dateTime',
        'endDate' => 'dateTime',
        'incomingMessage' => 'string',
        'insertSolution' => 'RecordRef',
        'outgoingMessage' => 'string',
        'searchSolution' => 'string',
        'emailForm' => 'boolean',
        'newSolutionFromMsg' => 'string',
        'internalOnly' => 'boolean',
        'customForm' => 'RecordRef',
        'title' => 'string',
        'caseNumber' => 'string',
        'startDate' => 'dateTime',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'lastMessageDate' => 'dateTime',
        'company' => 'RecordRef',
        'profile' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'contact' => 'RecordRef',
        'email' => 'string',
        'phone' => 'string',
        'product' => 'RecordRef',
        'module' => 'RecordRef',
        'item' => 'RecordRef',
        'serialNumber' => 'RecordRef',
        'inboundEmail' => 'string',
        'issue' => 'RecordRef',
        'status' => 'RecordRef',
        'isInactive' => 'boolean',
        'priority' => 'RecordRef',
        'origin' => 'RecordRef',
        'category' => 'RecordRef',
        'assigned' => 'RecordRef',
        'helpDesk' => 'boolean',
        'emailEmployeesList' => 'EmailEmployeesList',
        'escalateToList' => 'SupportCaseEscalateToList',
        'timeItemList' => 'SupportCaseTimeItemList',
        'solutionsList' => 'SupportCaseSolutionsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
