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
 * AccountingTransactionSearchAdvanced.
 */
class AccountingTransactionSearchAdvanced extends SearchRecord
{
    /**
     * @var AccountingTransactionSearch
     */
    public $criteria;
    /**
     * @var AccountingTransactionSearchRow
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
        'criteria' => 'AccountingTransactionSearch',
        'columns' => 'AccountingTransactionSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
