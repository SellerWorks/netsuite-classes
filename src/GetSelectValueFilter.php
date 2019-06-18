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
 * GetSelectValueFilter.
 */
class GetSelectValueFilter
{
    /**
     * @var string
     */
    public $filterValue;
    /**
     * @var GetSelectValueFilterOperator
     */
    public $operator;

    public static $paramtypesmap = [
        'filterValue' => 'string',
        'operator' => 'GetSelectValueFilterOperator',
    ];
}
