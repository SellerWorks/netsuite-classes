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
 * AccountingPeriodSearchRowBasic.
 */
class AccountingPeriodSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnBooleanField[]
     */
    public $allLocked;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $allowNonGLChanges;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $apLocked;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $arLocked;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $closed;
    /**
     * @var SearchColumnDateField[]
     */
    public $closedOnDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isAdjust;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isQuarter;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isYear;
    /**
     * @var SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $payrollLocked;
    /**
     * @var SearchColumnStringField[]
     */
    public $periodName;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;

    public static $paramtypesmap = array(
        'allLocked' => 'SearchColumnBooleanField[]',
        'allowNonGLChanges' => 'SearchColumnBooleanField[]',
        'apLocked' => 'SearchColumnBooleanField[]',
        'arLocked' => 'SearchColumnBooleanField[]',
        'closed' => 'SearchColumnBooleanField[]',
        'closedOnDate' => 'SearchColumnDateField[]',
        'endDate' => 'SearchColumnDateField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isAdjust' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isQuarter' => 'SearchColumnBooleanField[]',
        'isYear' => 'SearchColumnBooleanField[]',
        'parent' => 'SearchColumnSelectField[]',
        'payrollLocked' => 'SearchColumnBooleanField[]',
        'periodName' => 'SearchColumnStringField[]',
        'startDate' => 'SearchColumnDateField[]',
    );
}
