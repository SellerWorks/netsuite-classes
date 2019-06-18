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
 * VendorAddressbook.
 */
class VendorAddressbook
{
    /**
     * @var bool
     */
    public $defaultShipping;
    /**
     * @var bool
     */
    public $defaultBilling;
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var Address
     */
    public $addressbookAddress;

    public static $paramtypesmap = [
        'defaultShipping' => 'boolean',
        'defaultBilling' => 'boolean',
        'label' => 'string',
        'internalId' => 'string',
        'addressbookAddress' => 'Address',
    ];
}
