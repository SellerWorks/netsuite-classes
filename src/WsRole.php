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
 * WsRole.
 */
class WsRole
{
    /**
     * @var RecordRef
     */
    public $role;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $isLoggedInRole;

    public static $paramtypesmap = array(
        'role' => 'RecordRef',
        'isDefault' => 'boolean',
        'isInactive' => 'boolean',
        'isLoggedInRole' => 'boolean',
    );
}
