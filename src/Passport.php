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
 * Passport.
 */
class Passport
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

    public static $paramtypesmap = [
        'email' => 'string',
        'password' => 'string',
        'account' => 'string',
        'role' => 'RecordRef',
    ];
}
