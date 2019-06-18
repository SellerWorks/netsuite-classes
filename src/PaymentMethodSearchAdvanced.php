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
 * PaymentMethodSearchAdvanced.
 */
class PaymentMethodSearchAdvanced extends SearchRecord
{
    /**
     * @var PaymentMethodSearch
     */
    public $criteria;
    /**
     * @var PaymentMethodSearchRow
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
        'criteria' => 'PaymentMethodSearch',
        'columns' => 'PaymentMethodSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
