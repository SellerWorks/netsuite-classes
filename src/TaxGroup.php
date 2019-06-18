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
 * TaxGroup.
 */
class TaxGroup extends Record
{
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $state;
    /**
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var RecordRef
     */
    public $taxitem1;
    /**
     * @var string
     */
    public $unitprice1;
    /**
     * @var RecordRef
     */
    public $taxitem2;
    /**
     * @var string
     */
    public $unitprice2;
    /**
     * @var bool
     */
    public $piggyback;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var RecordRef
     */
    public $taxType;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var string
     */
    public $county;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $zip;
    /**
     * @var RecordRef
     */
    public $nexusCountry;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var TaxGroupTaxItemList
     */
    public $taxItemList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'itemId' => 'string',
        'description' => 'string',
        'state' => 'string',
        'subsidiaryList' => 'RecordRefList',
        'taxitem1' => 'RecordRef',
        'unitprice1' => 'string',
        'taxitem2' => 'RecordRef',
        'unitprice2' => 'string',
        'piggyback' => 'boolean',
        'isInactive' => 'boolean',
        'rate' => 'float',
        'taxType' => 'RecordRef',
        'includeChildren' => 'boolean',
        'county' => 'string',
        'city' => 'string',
        'zip' => 'string',
        'nexusCountry' => 'RecordRef',
        'isDefault' => 'boolean',
        'taxItemList' => 'TaxGroupTaxItemList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
