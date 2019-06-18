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
 * VendorSubsidiaryRelationshipSearchRow.
 */
class VendorSubsidiaryRelationshipSearchRow extends SearchRow
{
    /**
     * @var VendorSubsidiaryRelationshipSearchRowBasic
     */
    public $basic;
    /**
     * @var SubsidiarySearchRowBasic
     */
    public $subsidiaryJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'VendorSubsidiaryRelationshipSearchRowBasic',
        'subsidiaryJoin' => 'SubsidiarySearchRowBasic',
        'vendorJoin' => 'VendorSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
