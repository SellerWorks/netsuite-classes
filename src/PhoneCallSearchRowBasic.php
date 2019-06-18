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
 * PhoneCallSearchRowBasic.
 */
class PhoneCallSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $accessLevel;
    /**
     * @var SearchColumnSelectField[]
     */
    public $assigned;
    /**
     * @var SearchColumnSelectField[]
     */
    public $company;
    /**
     * @var SearchColumnDateField[]
     */
    public $completedDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $contact;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $markdone;
    /**
     * @var SearchColumnStringField[]
     */
    public $message;
    /**
     * @var SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $priority;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $startTime;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnSelectField[]
     */
    public $transaction;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'accessLevel' => 'SearchColumnStringField[]',
        'assigned' => 'SearchColumnSelectField[]',
        'company' => 'SearchColumnSelectField[]',
        'completedDate' => 'SearchColumnDateField[]',
        'contact' => 'SearchColumnSelectField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'endDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'markdone' => 'SearchColumnStringField[]',
        'message' => 'SearchColumnStringField[]',
        'owner' => 'SearchColumnSelectField[]',
        'phone' => 'SearchColumnStringField[]',
        'priority' => 'SearchColumnEnumSelectField[]',
        'startDate' => 'SearchColumnDateField[]',
        'startTime' => 'SearchColumnDateField[]',
        'status' => 'SearchColumnEnumSelectField[]',
        'title' => 'SearchColumnStringField[]',
        'transaction' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
