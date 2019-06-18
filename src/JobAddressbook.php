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
 * JobAddressbook.
 */
class JobAddressbook
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
     * @var bool
     */
    public $isResidential;
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

    public static $paramtypesmap = array(
        'defaultShipping' => 'boolean',
        'defaultBilling' => 'boolean',
        'isResidential' => 'boolean',
        'label' => 'string',
        'internalId' => 'string',
        'addressbookAddress' => 'Address',
    );
}
