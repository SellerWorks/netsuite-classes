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
 * SsoCredentials.
 */
class SsoCredentials
{
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $account;
    /**
     * @var RecordRef
     */
    public $role;
    /**
     * @var string
     */
    public $authenticationToken;
    /**
     * @var string
     */
    public $partnerId;

    public static $paramtypesmap = [
        'email' => 'string',
        'password' => 'string',
        'account' => 'string',
        'role' => 'RecordRef',
        'authenticationToken' => 'string',
        'partnerId' => 'string',
    ];
}
