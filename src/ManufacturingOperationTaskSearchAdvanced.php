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
 * ManufacturingOperationTaskSearchAdvanced.
 */
class ManufacturingOperationTaskSearchAdvanced extends SearchRecord
{
    /**
     * @var ManufacturingOperationTaskSearch
     */
    public $criteria;
    /**
     * @var ManufacturingOperationTaskSearchRow
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
        'criteria' => 'ManufacturingOperationTaskSearch',
        'columns' => 'ManufacturingOperationTaskSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
