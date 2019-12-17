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
 * ContactAccessRoles.
 */
class ContactAccessRoles
{
    /**
     * @var bool
     */
    public $giveAccess;
    /**
     * @var RecordRef
     */
    public $contact;
    /**
     * @var string
     */
    public $email;
    /**
     * @var RecordRef
     */
    public $role;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $password2;
    /**
     * @var bool
     */
    public $sendEmail;

    public static $paramtypesmap = [
        'giveAccess' => 'boolean',
        'contact' => 'RecordRef',
        'email' => 'string',
        'role' => 'RecordRef',
        'password' => 'string',
        'password2' => 'string',
        'sendEmail' => 'boolean',
    ];
}
