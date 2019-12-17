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
 * ManufacturingCostTemplateSearchAdvanced.
 */
class ManufacturingCostTemplateSearchAdvanced extends SearchRecord
{
    /**
     * @var ManufacturingCostTemplateSearch
     */
    public $criteria;
    /**
     * @var ManufacturingCostTemplateSearchRow
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
        'criteria' => 'ManufacturingCostTemplateSearch',
        'columns' => 'ManufacturingCostTemplateSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
