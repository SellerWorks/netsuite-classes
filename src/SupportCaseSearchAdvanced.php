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
 * SupportCaseSearchAdvanced.
 */
class SupportCaseSearchAdvanced extends SearchRecord
{
    /**
     * @var SupportCaseSearch
     */
    public $criteria;
    /**
     * @var SupportCaseSearchRow
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
        'criteria' => 'SupportCaseSearch',
        'columns' => 'SupportCaseSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
