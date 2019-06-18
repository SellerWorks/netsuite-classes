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
 * PhoneCallContact.
 */
class PhoneCallContact
{
    /**
     * @var RecordRef
     */
    public $company;
    /**
     * @var RecordRef
     */
    public $contact;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $email;

    public static $paramtypesmap = array(
        'company' => 'RecordRef',
        'contact' => 'RecordRef',
        'phone' => 'string',
        'email' => 'string',
    );
}
