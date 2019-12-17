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
 * VendorBillInstallmentList.
 */
class VendorBillInstallmentList
{
    /**
     * @var VendorBillInstallment[]
     */
    public $vendorBillInstallment;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = [
        'vendorBillInstallment' => 'VendorBillInstallment[]',
        'replaceAll' => 'boolean',
    ];
}
