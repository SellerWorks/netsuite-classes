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
 * AccountingPeriodSearchBasic.
 */
class AccountingPeriodSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchBooleanField
     */
    public $allLocked;
    /**
     * @var SearchBooleanField
     */
    public $allowNonGlChanges;
    /**
     * @var SearchBooleanField
     */
    public $apLocked;
    /**
     * @var SearchBooleanField
     */
    public $arLocked;
    /**
     * @var SearchBooleanField
     */
    public $closed;
    /**
     * @var SearchDateField
     */
    public $closedOnDate;
    /**
     * @var SearchDateField
     */
    public $endDate;
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
    public $isAdjust;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchBooleanField
     */
    public $isQuarter;
    /**
     * @var SearchBooleanField
     */
    public $isYear;
    /**
     * @var SearchMultiSelectField
     */
    public $parent;
    /**
     * @var SearchBooleanField
     */
    public $payrollLocked;
    /**
     * @var SearchStringField
     */
    public $periodName;
    /**
     * @var SearchDateField
     */
    public $startDate;

    public static $paramtypesmap = [
        'allLocked' => 'SearchBooleanField',
        'allowNonGlChanges' => 'SearchBooleanField',
        'apLocked' => 'SearchBooleanField',
        'arLocked' => 'SearchBooleanField',
        'closed' => 'SearchBooleanField',
        'closedOnDate' => 'SearchDateField',
        'endDate' => 'SearchDateField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isAdjust' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'isQuarter' => 'SearchBooleanField',
        'isYear' => 'SearchBooleanField',
        'parent' => 'SearchMultiSelectField',
        'payrollLocked' => 'SearchBooleanField',
        'periodName' => 'SearchStringField',
        'startDate' => 'SearchDateField',
    ];
}
