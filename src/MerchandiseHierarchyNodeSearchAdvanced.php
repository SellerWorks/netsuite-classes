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
 * MerchandiseHierarchyNodeSearchAdvanced.
 */
class MerchandiseHierarchyNodeSearchAdvanced extends SearchRecord
{
    /**
     * @var MerchandiseHierarchyNodeSearch
     */
    public $criteria;
    /**
     * @var MerchandiseHierarchyNodeSearchRow
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

    public static $paramtypesmap = [
        'criteria' => 'MerchandiseHierarchyNodeSearch',
        'columns' => 'MerchandiseHierarchyNodeSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
