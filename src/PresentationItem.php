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
 * PresentationItem.
 */
class PresentationItem
{
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var PresentationItemType
     */
    public $itemType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $onlinePrice;
    /**
     * @var float
     */
    public $basePrice;

    public static $paramtypesmap = [
        'item' => 'RecordRef',
        'itemType' => 'PresentationItemType',
        'description' => 'string',
        'onlinePrice' => 'float',
        'basePrice' => 'float',
    ];
}
