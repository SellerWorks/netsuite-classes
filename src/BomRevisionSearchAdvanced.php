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
 * BomRevisionSearchAdvanced.
 */
class BomRevisionSearchAdvanced extends SearchRecord
{
    /**
     * @var BomRevisionSearch
     */
    public $criteria;
    /**
     * @var BomRevisionSearchRow
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
        'criteria' => 'BomRevisionSearch',
        'columns' => 'BomRevisionSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
