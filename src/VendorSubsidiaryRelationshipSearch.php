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
 * VendorSubsidiaryRelationshipSearch.
 */
class VendorSubsidiaryRelationshipSearch extends SearchRecord
{
    /**
     * @var VendorSubsidiaryRelationshipSearchBasic
     */
    public $basic;
    /**
     * @var SubsidiarySearchBasic
     */
    public $subsidiaryJoin;
    /**
     * @var VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'VendorSubsidiaryRelationshipSearchBasic',
        'subsidiaryJoin' => 'SubsidiarySearchBasic',
        'vendorJoin' => 'VendorSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
