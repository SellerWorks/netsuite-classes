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
 * EmployeeEmergencyContact.
 */
class EmployeeEmergencyContact
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $contact;
    /**
     * @var string
     */
    public $relationship;
    /**
     * @var string
     */
    public $address;
    /**
     * @var string
     */
    public $phone;

    public static $paramtypesmap = [
        'id' => 'integer',
        'contact' => 'string',
        'relationship' => 'string',
        'address' => 'string',
        'phone' => 'string',
    ];
}
