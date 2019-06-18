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
 * AddressSearchBasic.
 */
class AddressSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $address;
    /**
     * @var SearchStringField
     */
    public $address1;
    /**
     * @var SearchStringField
     */
    public $address2;
    /**
     * @var SearchStringField
     */
    public $address3;
    /**
     * @var SearchStringField
     */
    public $addressee;
    /**
     * @var SearchStringField
     */
    public $attention;
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
    public $countryCode;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
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
    public $override;
    /**
     * @var SearchStringField
     */
    public $phone;
    /**
     * @var SearchStringField
     */
    public $state;
    /**
     * @var SearchStringField
     */
    public $zip;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'address' => 'SearchStringField',
        'address1' => 'SearchStringField',
        'address2' => 'SearchStringField',
        'address3' => 'SearchStringField',
        'addressee' => 'SearchStringField',
        'attention' => 'SearchStringField',
        'city' => 'SearchStringField',
        'country' => 'SearchEnumMultiSelectField',
        'countryCode' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'override' => 'SearchBooleanField',
        'phone' => 'SearchStringField',
        'state' => 'SearchStringField',
        'zip' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
