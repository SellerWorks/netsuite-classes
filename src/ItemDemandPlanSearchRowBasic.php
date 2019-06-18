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
 * ItemDemandPlanSearchRowBasic.
 */
class ItemDemandPlanSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $alternateSourceItem;
    /**
     * @var SearchColumnLongField[]
     */
    public $analysisDuration;
    /**
     * @var SearchColumnDateField[]
     */
    public $demandDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnLongField[]
     */
    public $projectionDuration;
    /**
     * @var SearchColumnStringField[]
     */
    public $projectionInterval;
    /**
     * @var SearchColumnStringField[]
     */
    public $projectionMethod;
    /**
     * @var SearchColumnDateField[]
     */
    public $projectionStartDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantity;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityUom;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnSelectField[]
     */
    public $units;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'alternateSourceItem' => 'SearchColumnSelectField[]',
        'analysisDuration' => 'SearchColumnLongField[]',
        'demandDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'item' => 'SearchColumnSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'location' => 'SearchColumnSelectField[]',
        'memo' => 'SearchColumnStringField[]',
        'projectionDuration' => 'SearchColumnLongField[]',
        'projectionInterval' => 'SearchColumnStringField[]',
        'projectionMethod' => 'SearchColumnStringField[]',
        'projectionStartDate' => 'SearchColumnDateField[]',
        'quantity' => 'SearchColumnDoubleField[]',
        'quantityUom' => 'SearchColumnDoubleField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'units' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
