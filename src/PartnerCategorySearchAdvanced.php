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
 * PartnerCategorySearchAdvanced.
 */
class PartnerCategorySearchAdvanced extends SearchRecord
{
    /**
     * @var PartnerCategorySearch
     */
    public $criteria;
    /**
     * @var PartnerCategorySearchRow
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
        'criteria' => 'PartnerCategorySearch',
        'columns' => 'PartnerCategorySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
