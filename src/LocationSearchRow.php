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
 * LocationSearchRow.
 */
class LocationSearchRow extends SearchRow
{
    /**
     * @var LocationSearchRowBasic
     */
    public $basic;
    /**
     * @var AddressSearchRowBasic
     */
    public $addressJoin;
    /**
     * @var AddressSearchRowBasic
     */
    public $returnAddressJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'LocationSearchRowBasic',
        'addressJoin' => 'AddressSearchRowBasic',
        'returnAddressJoin' => 'AddressSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
