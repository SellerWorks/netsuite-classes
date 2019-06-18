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
 * ChangeEmail.
 */
class ChangeEmail
{
    /**
     * @var string
     */
    public $currentPassword;
    /**
     * @var string
     */
    public $newEmail;
    /**
     * @var string
     */
    public $newEmail2;
    /**
     * @var bool
     */
    public $justThisAccount;

    public static $paramtypesmap = [
        'currentPassword' => 'string',
        'newEmail' => 'string',
        'newEmail2' => 'string',
        'justThisAccount' => 'boolean',
    ];
}
