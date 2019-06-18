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
 * SupportCaseSearchRowBasic.
 */
class SupportCaseSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $assigned;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $awaitingReply;
    /**
     * @var SearchColumnStringField[]
     */
    public $caseNumber;
    /**
     * @var SearchColumnSelectField[]
     */
    public $category;
    /**
     * @var SearchColumnSelectField[]
     */
    public $company;
    /**
     * @var SearchColumnSelectField[]
     */
    public $contact;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $customerStage;
    /**
     * @var SearchColumnStringField[]
     */
    public $email;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $escalatee;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $helpDesk;
    /**
     * @var SearchColumnStringField[]
     */
    public $inboundEmail;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnSelectField[]
     */
    public $issue;
    /**
     * @var SearchColumnStringField[]
     */
    public $issueNumber;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastMessageDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastReopenedDate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $locked;
    /**
     * @var SearchColumnSelectField[]
     */
    public $module;
    /**
     * @var SearchColumnSelectField[]
     */
    public $origin;
    /**
     * @var SearchColumnSelectField[]
     */
    public $priority;
    /**
     * @var SearchColumnSelectField[]
     */
    public $product;
    /**
     * @var SearchColumnSelectField[]
     */
    public $profile;
    /**
     * @var SearchColumnStringField[]
     */
    public $serialNumber;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $stage;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $status;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'assigned' => 'SearchColumnSelectField[]',
        'awaitingReply' => 'SearchColumnBooleanField[]',
        'caseNumber' => 'SearchColumnStringField[]',
        'category' => 'SearchColumnSelectField[]',
        'company' => 'SearchColumnSelectField[]',
        'contact' => 'SearchColumnSelectField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'customerStage' => 'SearchColumnEnumSelectField[]',
        'email' => 'SearchColumnStringField[]',
        'endDate' => 'SearchColumnDateField[]',
        'escalatee' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'helpDesk' => 'SearchColumnBooleanField[]',
        'inboundEmail' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'issue' => 'SearchColumnSelectField[]',
        'issueNumber' => 'SearchColumnStringField[]',
        'item' => 'SearchColumnSelectField[]',
        'lastMessageDate' => 'SearchColumnDateField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'lastReopenedDate' => 'SearchColumnDateField[]',
        'locked' => 'SearchColumnBooleanField[]',
        'module' => 'SearchColumnSelectField[]',
        'origin' => 'SearchColumnSelectField[]',
        'priority' => 'SearchColumnSelectField[]',
        'product' => 'SearchColumnSelectField[]',
        'profile' => 'SearchColumnSelectField[]',
        'serialNumber' => 'SearchColumnStringField[]',
        'stage' => 'SearchColumnEnumSelectField[]',
        'startDate' => 'SearchColumnDateField[]',
        'status' => 'SearchColumnSelectField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'title' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
