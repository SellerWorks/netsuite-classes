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
 * ItemDemandPlan.
 */
class ItemDemandPlan extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var int
     */
    public $year;
    /**
     * @var DemandPlanMonth
     */
    public $month;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var DemandPlanCalendarType
     */
    public $demandPlanCalendarType;
    /**
     * @var DemandPlanMatrix
     */
    public $demandPlanMatrix;
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

    public static $paramtypesmap = [
        'customForm' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'location' => 'RecordRef',
        'item' => 'RecordRef',
        'units' => 'RecordRef',
        'memo' => 'string',
        'year' => 'integer',
        'month' => 'DemandPlanMonth',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'demandPlanCalendarType' => 'DemandPlanCalendarType',
        'demandPlanMatrix' => 'DemandPlanMatrix',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
