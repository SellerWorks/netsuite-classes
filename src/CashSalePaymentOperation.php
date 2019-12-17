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
 * CashSalePaymentOperation.
 */
class CashSalePaymentOperation
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const _authorization = '_authorization';
    /**
     * @var string
     */
    const _capture = '_capture';
    /**
     * @var string
     */
    const _sale = '_sale';
    /**
     * @var string
     */
    const _refund = '_refund';
    /**
     * @var string
     */
    const _credit = '_credit';
    /**
     * @var string
     */
    const _refresh = '_refresh';
    /**
     * @var string
     */
    const _void = '_void';
}
