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
 * Address.
 */
class Address extends Record
{
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var Country
     */
    public $country;
    /**
     * @var string
     */
    public $attention;
    /**
     * @var string
     */
    public $addressee;
    /**
     * @var string
     */
    public $addrPhone;
    /**
     * @var string
     */
    public $addr1;
    /**
     * @var string
     */
    public $addr2;
    /**
     * @var string
     */
    public $addr3;
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
     * @var string
     */
    public $addrText;
    /**
     * @var bool
     */
    public $override;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'internalId' => 'string',
        'country' => 'Country',
        'attention' => 'string',
        'addressee' => 'string',
        'addrPhone' => 'string',
        'addr1' => 'string',
        'addr2' => 'string',
        'addr3' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'addrText' => 'string',
        'override' => 'boolean',
        'customFieldList' => 'CustomFieldList',
    ];
}
