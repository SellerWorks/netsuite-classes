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
 * LocationSearch.
 */
class LocationSearch extends SearchRecord
{
    /**
     * @var LocationSearchBasic
     */
    public $basic;
    /**
     * @var AddressSearchBasic
     */
    public $addressJoin;
    /**
     * @var AddressSearchBasic
     */
    public $returnAddressJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'LocationSearchBasic',
        'addressJoin' => 'AddressSearchBasic',
        'returnAddressJoin' => 'AddressSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
