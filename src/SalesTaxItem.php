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
 * SalesTaxItem.
 */
class SalesTaxItem extends Record
{
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var RecordRef
     */
    public $taxType;
    /**
     * @var RecordRef
     */
    public $taxAgency;
    /**
     * @var RecordRef
     */
    public $purchaseAccount;
    /**
     * @var RecordRef
     */
    public $saleAccount;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var dateTime
     */
    public $effectiveFrom;
    /**
     * @var dateTime
     */
    public $validUntil;
    /**
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var bool
     */
    public $eccode;
    /**
     * @var bool
     */
    public $reverseCharge;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var bool
     */
    public $service;
    /**
     * @var bool
     */
    public $exempt;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var bool
     */
    public $excludeFromTaxReports;
    /**
     * @var SalesTaxItemAvailable
     */
    public $available;
    /**
     * @var bool
     */
    public $export;
    /**
     * @var RecordRef
     */
    public $taxAccount;
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
    public $state;
    /**
     * @var string
     */
    public $zip;
    /**
     * @var RecordRef
     */
    public $nexusCountry;
    /**
     * @var string
     */
    public $name;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
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
        'displayName' => 'string',
        'description' => 'string',
        'rate' => 'string',
        'taxType' => 'RecordRef',
        'taxAgency' => 'RecordRef',
        'purchaseAccount' => 'RecordRef',
        'saleAccount' => 'RecordRef',
        'isInactive' => 'boolean',
        'effectiveFrom' => 'dateTime',
        'validUntil' => 'dateTime',
        'subsidiaryList' => 'RecordRefList',
        'includeChildren' => 'boolean',
        'eccode' => 'boolean',
        'reverseCharge' => 'boolean',
        'parent' => 'RecordRef',
        'service' => 'boolean',
        'exempt' => 'boolean',
        'isDefault' => 'boolean',
        'excludeFromTaxReports' => 'boolean',
        'available' => 'SalesTaxItemAvailable',
        'export' => 'boolean',
        'taxAccount' => 'RecordRef',
        'county' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'nexusCountry' => 'RecordRef',
        'name' => 'string',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
