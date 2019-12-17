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
 * RevRecTemplateSearchAdvanced.
 */
class RevRecTemplateSearchAdvanced extends SearchRecord
{
    /**
     * @var RevRecTemplateSearch
     */
    public $criteria;
    /**
     * @var RevRecTemplateSearchRow
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
        'criteria' => 'RevRecTemplateSearch',
        'columns' => 'RevRecTemplateSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
