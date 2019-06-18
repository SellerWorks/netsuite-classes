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
 * TimeSheetSearchBasic.
 */
class TimeSheetSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $approvalStatus;
    /**
     * @var SearchMultiSelectField
     */
    public $employee;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchLongField
     */
    public $id;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchDateField
     */
    public $timeSheetDate;
    /**
     * @var SearchDoubleField
     */
    public $totalHours;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'approvalStatus' => 'SearchMultiSelectField',
        'employee' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'id' => 'SearchLongField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'timeSheetDate' => 'SearchDateField',
        'totalHours' => 'SearchDoubleField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
