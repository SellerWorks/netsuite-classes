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
 * EmployeeRates.
 */
class EmployeeRates
{
    /**
     * @var RecordRef
     */
    public $entityCurrency;
    /**
     * @var float
     */
    public $rate;

    public static $paramtypesmap = [
        'entityCurrency' => 'RecordRef',
        'rate' => 'float',
    ];
}
