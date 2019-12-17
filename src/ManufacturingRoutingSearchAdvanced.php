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
 * ManufacturingRoutingSearchAdvanced.
 */
class ManufacturingRoutingSearchAdvanced extends SearchRecord
{
    /**
     * @var ManufacturingRoutingSearch
     */
    public $criteria;
    /**
     * @var ManufacturingRoutingSearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchId;
    /**
     * @var string
     */
    public $savedSearchScriptId;

    public static $paramtypesmap = [
        'criteria' => 'ManufacturingRoutingSearch',
        'columns' => 'ManufacturingRoutingSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
