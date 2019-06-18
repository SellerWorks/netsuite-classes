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
 * SolutionSearchBasic.
 */
class SolutionSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $abstract;
    /**
     * @var SearchMultiSelectField
     */
    public $assigned;
    /**
     * @var SearchLongField
     */
    public $caseCount;
    /**
     * @var SearchStringField
     */
    public $code;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchStringField
     */
    public $description;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchStringField
     */
    public $find;
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
     * @var SearchBooleanField
     */
    public $isOnline;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchLongField
     */
    public $number;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchMultiSelectField
     */
    public $topic;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'abstract' => 'SearchStringField',
        'assigned' => 'SearchMultiSelectField',
        'caseCount' => 'SearchLongField',
        'code' => 'SearchStringField',
        'createdDate' => 'SearchDateField',
        'description' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'find' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'isOnline' => 'SearchBooleanField',
        'lastModifiedDate' => 'SearchDateField',
        'number' => 'SearchLongField',
        'status' => 'SearchEnumMultiSelectField',
        'title' => 'SearchStringField',
        'topic' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
