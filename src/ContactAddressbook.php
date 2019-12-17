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
 * ContactAddressbook.
 */
class ContactAddressbook
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
     * @var Address
     */
    public $addressbookAddress;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = [
        'defaultShipping' => 'boolean',
        'defaultBilling' => 'boolean',
        'label' => 'string',
        'addressbookAddress' => 'Address',
        'internalId' => 'string',
    ];
}
