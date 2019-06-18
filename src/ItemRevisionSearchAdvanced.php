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
 * ItemRevisionSearchAdvanced.
 */
class ItemRevisionSearchAdvanced extends SearchRecord
{
    /**
     * @var ItemRevisionSearch
     */
    public $criteria;
    /**
     * @var ItemRevisionSearchRow
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
        'criteria' => 'ItemRevisionSearch',
        'columns' => 'ItemRevisionSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
