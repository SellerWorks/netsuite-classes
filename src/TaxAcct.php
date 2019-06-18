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
 * TaxAcct.
 */
class TaxAcct extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $nexus;
    /**
     * @var Country
     */
    public $country;
    /**
     * @var TaxAcctType
     */
    public $taxAcctType;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'name' => 'string',
        'description' => 'string',
        'nexus' => 'RecordRef',
        'country' => 'Country',
        'taxAcctType' => 'TaxAcctType',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
