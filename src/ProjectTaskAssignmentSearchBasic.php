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
 * ProjectTaskAssignmentSearchBasic.
 */
class ProjectTaskAssignmentSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $actualWork;
    /**
     * @var SearchDoubleField
     */
    public $cost;
    /**
     * @var SearchDoubleField
     */
    public $costBase;
    /**
     * @var SearchDateField
     */
    public $endDate;
    /**
     * @var SearchDoubleField
     */
    public $estimatedWork;
    /**
     * @var SearchDoubleField
     */
    public $estimatedWorkBaseline;
    /**
     * @var SearchDoubleField
     */
    public $grossProfit;
    /**
     * @var SearchDoubleField
     */
    public $grossProfitBase;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchDoubleField
     */
    public $price;
    /**
     * @var SearchDoubleField
     */
    public $priceBase;
    /**
     * @var SearchMultiSelectField
     */
    public $resource;
    /**
     * @var SearchStringField
     */
    public $resourceName;
    /**
     * @var SearchStringField
     */
    public $serviceItem;
    /**
     * @var SearchStringField
     */
    public $serviceItemDesc;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchDoubleField
     */
    public $unitCost;
    /**
     * @var SearchDoubleField
     */
    public $unitCostBase;
    /**
     * @var SearchDoubleField
     */
    public $unitPrice;
    /**
     * @var SearchDoubleField
     */
    public $unitPriceBase;
    /**
     * @var SearchDoubleField
     */
    public $units;
    /**
     * @var SearchMultiSelectField
     */
    public $workCalendar;

    public static $paramtypesmap = [
        'actualWork' => 'SearchDoubleField',
        'cost' => 'SearchDoubleField',
        'costBase' => 'SearchDoubleField',
        'endDate' => 'SearchDateField',
        'estimatedWork' => 'SearchDoubleField',
        'estimatedWorkBaseline' => 'SearchDoubleField',
        'grossProfit' => 'SearchDoubleField',
        'grossProfitBase' => 'SearchDoubleField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'price' => 'SearchDoubleField',
        'priceBase' => 'SearchDoubleField',
        'resource' => 'SearchMultiSelectField',
        'resourceName' => 'SearchStringField',
        'serviceItem' => 'SearchStringField',
        'serviceItemDesc' => 'SearchStringField',
        'startDate' => 'SearchDateField',
        'unitCost' => 'SearchDoubleField',
        'unitCostBase' => 'SearchDoubleField',
        'unitPrice' => 'SearchDoubleField',
        'unitPriceBase' => 'SearchDoubleField',
        'units' => 'SearchDoubleField',
        'workCalendar' => 'SearchMultiSelectField',
    ];
}
