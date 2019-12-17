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
 * TaxGroupSearchBasic.
 */
class TaxGroupSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $city;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var SearchStringField
     */
    public $county;
    /**
     * @var SearchStringField
     */
    public $description;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchBooleanField
     */
    public $includeChildren;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isDefault;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchStringField
     */
    public $itemId;
    /**
     * @var SearchBooleanField
     */
    public $piggyBack;
    /**
     * @var SearchDoubleField
     */
    public $rate;
    /**
     * @var SearchMultiSelectField
     */
    public $state;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $taxItem1;
    /**
     * @var SearchMultiSelectField
     */
    public $taxItem2;
    /**
     * @var SearchMultiSelectField
     */
    public $taxType;
    /**
     * @var SearchDoubleField
     */
    public $unitPrice1;
    /**
     * @var SearchDoubleField
     */
    public $unitPrice2;
    /**
     * @var SearchStringField
     */
    public $zip;

    public static $paramtypesmap = [
        'city' => 'SearchStringField',
        'country' => 'SearchEnumMultiSelectField',
        'county' => 'SearchStringField',
        'description' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'includeChildren' => 'SearchBooleanField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isDefault' => 'SearchBooleanField',
        'isInactive' => 'SearchBooleanField',
        'itemId' => 'SearchStringField',
        'piggyBack' => 'SearchBooleanField',
        'rate' => 'SearchDoubleField',
        'state' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'taxItem1' => 'SearchMultiSelectField',
        'taxItem2' => 'SearchMultiSelectField',
        'taxType' => 'SearchMultiSelectField',
        'unitPrice1' => 'SearchDoubleField',
        'unitPrice2' => 'SearchDoubleField',
        'zip' => 'SearchStringField',
    ];
}
