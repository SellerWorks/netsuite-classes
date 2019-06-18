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
 * PaycheckPayEarnList.
 */
class PaycheckPayEarnList
{
    /**
     * @var PaycheckPayEarn[]
     */
    public $paycheckPayEarn;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = [
        'paycheckPayEarn' => 'PaycheckPayEarn[]',
        'replaceAll' => 'boolean',
    ];
}
