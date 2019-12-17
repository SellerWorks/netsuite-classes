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
 * PhoneCallSearchBasic.
 */
class PhoneCallSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $assigned;
    /**
     * @var SearchMultiSelectField
     */
    public $company;
    /**
     * @var SearchDateField
     */
    public $completedDate;
    /**
     * @var SearchMultiSelectField
     */
    public $contact;
    /**
     * @var SearchMultiSelectField
     */
    public $createdBy;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
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
    public $isPrivate;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchBooleanField
     */
    public $owner;
    /**
     * @var SearchStringField
     */
    public $phone;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $priority;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $status;
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
        'company' => 'SearchMultiSelectField',
        'completedDate' => 'SearchDateField',
        'contact' => 'SearchMultiSelectField',
        'createdBy' => 'SearchMultiSelectField',
        'createdDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isPrivate' => 'SearchBooleanField',
        'lastModifiedDate' => 'SearchDateField',
        'owner' => 'SearchBooleanField',
        'phone' => 'SearchStringField',
        'priority' => 'SearchEnumMultiSelectField',
        'startDate' => 'SearchDateField',
        'status' => 'SearchEnumMultiSelectField',
        'title' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
