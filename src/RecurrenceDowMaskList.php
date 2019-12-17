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
 * RecurrenceDowMaskList.
 */
class RecurrenceDowMaskList
{
    /**
     * @var RecurrenceDow
     */
    public $recurrenceDowMask;

    public static $paramtypesmap = [
        'recurrenceDowMask' => 'RecurrenceDow',
    ];
}
