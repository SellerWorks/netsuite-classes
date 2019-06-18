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
 * ItemAccountingBookDetailList.
 */
class ItemAccountingBookDetailList
{
    /**
     * @var ItemAccountingBookDetail[]
     */
    public $itemAccountingBookDetail;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = array(
        'itemAccountingBookDetail' => 'ItemAccountingBookDetail[]',
        'replaceAll' => 'boolean',
    );
}
