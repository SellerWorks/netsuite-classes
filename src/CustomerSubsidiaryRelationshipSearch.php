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
 * CustomerSubsidiaryRelationshipSearch.
 */
class CustomerSubsidiaryRelationshipSearch extends SearchRecord
{
    /**
     * @var CustomerSubsidiaryRelationshipSearchBasic
     */
    public $basic;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var SubsidiarySearchBasic
     */
    public $subsidiaryJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'CustomerSubsidiaryRelationshipSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'subsidiaryJoin' => 'SubsidiarySearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
