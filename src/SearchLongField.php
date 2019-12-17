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
 * SearchLongField.
 */
class SearchLongField
{
    /**
     * @var int
     */
    public $searchValue;
    /**
     * @var int
     */
    public $searchValue2;
    /**
     * @var SearchLongFieldOperator
     */
    public $operator;

    public static $paramtypesmap = [
        'searchValue' => 'integer',
        'searchValue2' => 'integer',
        'operator' => 'SearchLongFieldOperator',
    ];
}
