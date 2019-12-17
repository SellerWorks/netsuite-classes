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
 * ProjectTaskAssignmentSearchRowBasic.
 */
class ProjectTaskAssignmentSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDoubleField[]
     */
    public $actualWork;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $cost;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $costBase;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWork;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWorkBaseline;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $grossProfit;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $grossProfitBase;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $price;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $priceBase;
    /**
     * @var SearchColumnSelectField[]
     */
    public $resource;
    /**
     * @var SearchColumnStringField[]
     */
    public $resourceName;
    /**
     * @var SearchColumnStringField[]
     */
    public $serviceItem;
    /**
     * @var SearchColumnStringField[]
     */
    public $serviceItemDesc;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unitCost;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unitCostBase;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unitPrice;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unitPriceBase;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $units;
    /**
     * @var SearchColumnSelectField[]
     */
    public $workCalendar;

    public static $paramtypesmap = [
        'actualWork' => 'SearchColumnDoubleField[]',
        'cost' => 'SearchColumnDoubleField[]',
        'costBase' => 'SearchColumnDoubleField[]',
        'endDate' => 'SearchColumnDateField[]',
        'estimatedWork' => 'SearchColumnDoubleField[]',
        'estimatedWorkBaseline' => 'SearchColumnDoubleField[]',
        'grossProfit' => 'SearchColumnDoubleField[]',
        'grossProfitBase' => 'SearchColumnDoubleField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'price' => 'SearchColumnDoubleField[]',
        'priceBase' => 'SearchColumnDoubleField[]',
        'resource' => 'SearchColumnSelectField[]',
        'resourceName' => 'SearchColumnStringField[]',
        'serviceItem' => 'SearchColumnStringField[]',
        'serviceItemDesc' => 'SearchColumnStringField[]',
        'startDate' => 'SearchColumnDateField[]',
        'unitCost' => 'SearchColumnDoubleField[]',
        'unitCostBase' => 'SearchColumnDoubleField[]',
        'unitPrice' => 'SearchColumnDoubleField[]',
        'unitPriceBase' => 'SearchColumnDoubleField[]',
        'units' => 'SearchColumnDoubleField[]',
        'workCalendar' => 'SearchColumnSelectField[]',
    ];
}
