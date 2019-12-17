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
 * VendorRoles.
 */
class VendorRoles
{
    /**
     * @var RecordRef
     */
    public $selectedRole;

    public static $paramtypesmap = [
        'selectedRole' => 'RecordRef',
    ];
}
