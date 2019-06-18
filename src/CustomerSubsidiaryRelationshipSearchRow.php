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
 * CustomerSubsidiaryRelationshipSearchRow.
 */
class CustomerSubsidiaryRelationshipSearchRow extends SearchRow
{
    /**
     * @var CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public $basic;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var SubsidiarySearchRowBasic
     */
    public $subsidiaryJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'CustomerSubsidiaryRelationshipSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'subsidiaryJoin' => 'SubsidiarySearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
