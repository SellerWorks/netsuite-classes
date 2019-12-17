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
 * ItemAccountMappingSearchAdvanced
 */
class ItemAccountMappingSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var ItemAccountMappingSearch
     */
    public $criteria;
    /**
     * @access public
     * @var ItemAccountMappingSearchRow
     */
    public $columns;
    /**
     * @access public
     * @var string
     */
    public $savedSearchId;
    /**
     * @access public
     * @var string
     */
    public $savedSearchScriptId;

    public static $paramtypesmap = array(
        "criteria" => "ItemAccountMappingSearch",
        "columns" => "ItemAccountMappingSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
