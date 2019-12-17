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
 * AddressSearchRowBasic.
 */
class AddressSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $address;
    /**
     * @var SearchColumnStringField[]
     */
    public $address1;
    /**
     * @var SearchColumnStringField[]
     */
    public $address2;
    /**
     * @var SearchColumnStringField[]
     */
    public $address3;
    /**
     * @var SearchColumnStringField[]
     */
    public $addressee;
    /**
     * @var SearchColumnStringField[]
     */
    public $attention;
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
    public $countryCode;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $override;
    /**
     * @var SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var SearchColumnStringField[]
     */
    public $state;
    /**
     * @var SearchColumnStringField[]
     */
    public $zip;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'address' => 'SearchColumnStringField[]',
        'address1' => 'SearchColumnStringField[]',
        'address2' => 'SearchColumnStringField[]',
        'address3' => 'SearchColumnStringField[]',
        'addressee' => 'SearchColumnStringField[]',
        'attention' => 'SearchColumnStringField[]',
        'city' => 'SearchColumnStringField[]',
        'country' => 'SearchColumnEnumSelectField[]',
        'countryCode' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'override' => 'SearchColumnBooleanField[]',
        'phone' => 'SearchColumnStringField[]',
        'state' => 'SearchColumnStringField[]',
        'zip' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
