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
 * TaxGroupSearchRowBasic.
 */
class TaxGroupSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $city;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var SearchColumnStringField[]
     */
    public $county;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $includeChildren;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isDefault;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnStringField[]
     */
    public $itemId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $piggyBack;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $rate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $state;
    /**
     * @var SearchColumnStringField[]
     */
    public $stateDisplayName;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiaryNoHierarchy;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxItem1;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxItem2;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unitPrice1;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unitPrice2;
    /**
     * @var SearchColumnStringField[]
     */
    public $zip;

    public static $paramtypesmap = array(
        'city' => 'SearchColumnStringField[]',
        'country' => 'SearchColumnEnumSelectField[]',
        'county' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'includeChildren' => 'SearchColumnBooleanField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isDefault' => 'SearchColumnBooleanField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'itemId' => 'SearchColumnStringField[]',
        'piggyBack' => 'SearchColumnBooleanField[]',
        'rate' => 'SearchColumnDoubleField[]',
        'state' => 'SearchColumnSelectField[]',
        'stateDisplayName' => 'SearchColumnStringField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'subsidiaryNoHierarchy' => 'SearchColumnSelectField[]',
        'taxItem1' => 'SearchColumnSelectField[]',
        'taxItem2' => 'SearchColumnSelectField[]',
        'taxType' => 'SearchColumnSelectField[]',
        'unitPrice1' => 'SearchColumnDoubleField[]',
        'unitPrice2' => 'SearchColumnDoubleField[]',
        'zip' => 'SearchColumnStringField[]',
    );
}
