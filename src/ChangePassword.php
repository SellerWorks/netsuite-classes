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
 * ChangePassword.
 */
class ChangePassword
{
    /**
     * @var string
     */
    public $currentPassword;
    /**
     * @var string
     */
    public $newPassword;
    /**
     * @var string
     */
    public $newPassword2;

    public static $paramtypesmap = [
        'currentPassword' => 'string',
        'newPassword' => 'string',
        'newPassword2' => 'string',
    ];
}
