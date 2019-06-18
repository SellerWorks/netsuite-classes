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
 * SubsidiarySearch.
 */
class SubsidiarySearch extends SearchRecord
{
    /**
     * @var SubsidiarySearchBasic
     */
    public $basic;
    /**
     * @var AddressSearchBasic
     */
    public $addressJoin;
    /**
     * @var AccountSearchBasic
     */
    public $defaultAdvanceToApplyAccountJoin;
    /**
     * @var AddressSearchBasic
     */
    public $returnAddressJoin;
    /**
     * @var AddressSearchBasic
     */
    public $shippingAddressJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'SubsidiarySearchBasic',
        'addressJoin' => 'AddressSearchBasic',
        'defaultAdvanceToApplyAccountJoin' => 'AccountSearchBasic',
        'returnAddressJoin' => 'AddressSearchBasic',
        'shippingAddressJoin' => 'AddressSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
