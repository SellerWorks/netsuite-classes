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
 * SupportCaseSearchBasic.
 */
class SupportCaseSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $assigned;
    /**
     * @var SearchBooleanField
     */
    public $awaitingReply;
    /**
     * @var SearchStringField
     */
    public $caseNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $category;
    /**
     * @var SearchDateField
     */
    public $closedDate;
    /**
     * @var SearchStringField
     */
    public $company;
    /**
     * @var SearchStringField
     */
    public $contact;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchStringField
     */
    public $email;
    /**
     * @var SearchMultiSelectField
     */
    public $escalateTo;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchBooleanField
     */
    public $helpDesk;
    /**
     * @var SearchStringField
     */
    public $inboundEmail;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchMultiSelectField
     */
    public $issue;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchBooleanField
     */
    public $lastMessage;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchDateField
     */
    public $lastReopenedDate;
    /**
     * @var SearchBooleanField
     */
    public $locked;
    /**
     * @var SearchStringField
     */
    public $message;
    /**
     * @var SearchMultiSelectField
     */
    public $messageAuthor;
    /**
     * @var SearchDateField
     */
    public $messageDate;
    /**
     * @var SearchBooleanField
     */
    public $messageType;
    /**
     * @var SearchMultiSelectField
     */
    public $module;
    /**
     * @var SearchLongField
     */
    public $number;
    /**
     * @var SearchMultiSelectField
     */
    public $origin;
    /**
     * @var SearchMultiSelectField
     */
    public $priority;
    /**
     * @var SearchMultiSelectField
     */
    public $product;
    /**
     * @var SearchMultiSelectField
     */
    public $profile;
    /**
     * @var SearchStringField
     */
    public $serialNumber;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $stage;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchMultiSelectField
     */
    public $status;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'assigned' => 'SearchMultiSelectField',
        'awaitingReply' => 'SearchBooleanField',
        'caseNumber' => 'SearchStringField',
        'category' => 'SearchMultiSelectField',
        'closedDate' => 'SearchDateField',
        'company' => 'SearchStringField',
        'contact' => 'SearchStringField',
        'createdDate' => 'SearchDateField',
        'email' => 'SearchStringField',
        'escalateTo' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'helpDesk' => 'SearchBooleanField',
        'inboundEmail' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'issue' => 'SearchMultiSelectField',
        'item' => 'SearchMultiSelectField',
        'lastMessage' => 'SearchBooleanField',
        'lastModifiedDate' => 'SearchDateField',
        'lastReopenedDate' => 'SearchDateField',
        'locked' => 'SearchBooleanField',
        'message' => 'SearchStringField',
        'messageAuthor' => 'SearchMultiSelectField',
        'messageDate' => 'SearchDateField',
        'messageType' => 'SearchBooleanField',
        'module' => 'SearchMultiSelectField',
        'number' => 'SearchLongField',
        'origin' => 'SearchMultiSelectField',
        'priority' => 'SearchMultiSelectField',
        'product' => 'SearchMultiSelectField',
        'profile' => 'SearchMultiSelectField',
        'serialNumber' => 'SearchStringField',
        'stage' => 'SearchEnumMultiSelectField',
        'startDate' => 'SearchDateField',
        'status' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'title' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
