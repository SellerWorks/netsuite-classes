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
 * SubsidiarySearchRow.
 */
class SubsidiarySearchRow extends SearchRow
{
    /**
     * @var SubsidiarySearchRowBasic
     */
    public $basic;
    /**
     * @var AddressSearchRowBasic
     */
    public $addressJoin;
    /**
     * @var AccountSearchRowBasic
     */
    public $defaultAdvanceToApplyAccountJoin;
    /**
     * @var AddressSearchRowBasic
     */
    public $returnAddressJoin;
    /**
     * @var AddressSearchRowBasic
     */
    public $shippingAddressJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'SubsidiarySearchRowBasic',
        'addressJoin' => 'AddressSearchRowBasic',
        'defaultAdvanceToApplyAccountJoin' => 'AccountSearchRowBasic',
        'returnAddressJoin' => 'AddressSearchRowBasic',
        'shippingAddressJoin' => 'AddressSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
