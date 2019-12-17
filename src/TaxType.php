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
 * TaxType.
 */
class TaxType extends Record
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
     * @var bool
     */
    public $doesNotAddToTotal;
    /**
     * @var bool
     */
    public $postToItemCost;
    /**
     * @var bool
     */
    public $taxInNetAmount;
    /**
     * @var bool
     */
    public $reverseCharge;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var TaxTypeNexusAccountsList
     */
    public $nexusAccountsList;
    /**
     * @var TaxTypeNexusesTaxList
     */
    public $nexusesTaxList;
    /**
     * @var Country
     */
    public $country;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'name' => 'string',
        'description' => 'string',
        'doesNotAddToTotal' => 'boolean',
        'postToItemCost' => 'boolean',
        'taxInNetAmount' => 'boolean',
        'reverseCharge' => 'boolean',
        'isInactive' => 'boolean',
        'nexusAccountsList' => 'TaxTypeNexusAccountsList',
        'nexusesTaxList' => 'TaxTypeNexusesTaxList',
        'country' => 'Country',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
