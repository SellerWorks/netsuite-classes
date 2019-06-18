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
 * GlobalAccountMappingSearchAdvanced.
 */
class GlobalAccountMappingSearchAdvanced extends SearchRecord
{
    /**
     * @var GlobalAccountMappingSearch
     */
    public $criteria;
    /**
     * @var GlobalAccountMappingSearchRow
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
        'criteria' => 'GlobalAccountMappingSearch',
        'columns' => 'GlobalAccountMappingSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
