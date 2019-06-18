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
 * InboundShipmentSearchAdvanced.
 */
class InboundShipmentSearchAdvanced extends SearchRecord
{
    /**
     * @var InboundShipmentSearch
     */
    public $criteria;
    /**
     * @var InboundShipmentSearchRow
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
        'criteria' => 'InboundShipmentSearch',
        'columns' => 'InboundShipmentSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
