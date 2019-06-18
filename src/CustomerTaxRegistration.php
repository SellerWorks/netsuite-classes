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
 * CustomerTaxRegistration.
 */
class CustomerTaxRegistration
{
    /**
     * @var Country
     */
    public $nexusCountry;
    /**
     * @var RecordRef
     */
    public $nexus;
    /**
     * @var RecordRef
     */
    public $address;
    /**
     * @var string
     */
    public $taxRegistrationNumber;
    /**
     * @var int
     */
    public $id;

    public static $paramtypesmap = array(
        'nexusCountry' => 'Country',
        'nexus' => 'RecordRef',
        'address' => 'RecordRef',
        'taxRegistrationNumber' => 'string',
        'id' => 'integer',
    );
}
