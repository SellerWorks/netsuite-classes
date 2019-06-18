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
 * PaycheckPaySummary.
 */
class PaycheckPaySummary
{
    /**
     * @var string
     */
    public $payItem;
    /**
     * @var string
     */
    public $payItemType;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var float
     */
    public $ytdAmount;

    public static $paramtypesmap = [
        'payItem' => 'string',
        'payItemType' => 'string',
        'amount' => 'float',
        'ytdAmount' => 'float',
    ];
}
