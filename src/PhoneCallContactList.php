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
 * PhoneCallContactList.
 */
class PhoneCallContactList
{
    /**
     * @var PhoneCallContact[]
     */
    public $contact;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = array(
        'contact' => 'PhoneCallContact[]',
        'replaceAll' => 'boolean',
    );
}
