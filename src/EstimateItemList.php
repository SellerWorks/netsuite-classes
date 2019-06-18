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
 * EstimateItemList.
 */
class EstimateItemList
{
    /**
     * @var EstimateItem[]
     */
    public $item;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = array(
        'item' => 'EstimateItem[]',
        'replaceAll' => 'boolean',
    );
}
