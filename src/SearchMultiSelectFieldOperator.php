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
 * SearchMultiSelectFieldOperator.
 */
class SearchMultiSelectFieldOperator
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const anyOf = 'anyOf';
    /**
     * @var string
     */
    const noneOf = 'noneOf';
}
