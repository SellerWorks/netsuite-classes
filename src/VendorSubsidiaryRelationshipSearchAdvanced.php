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
 * VendorSubsidiaryRelationshipSearchAdvanced.
 */
class VendorSubsidiaryRelationshipSearchAdvanced extends SearchRecord
{
    /**
     * @var VendorSubsidiaryRelationshipSearch
     */
    public $criteria;
    /**
     * @var VendorSubsidiaryRelationshipSearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchId;
    /**
     * @var string
     */
    public $savedSearchScriptId;

    public static $paramtypesmap = array(
        'criteria' => 'VendorSubsidiaryRelationshipSearch',
        'columns' => 'VendorSubsidiaryRelationshipSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
