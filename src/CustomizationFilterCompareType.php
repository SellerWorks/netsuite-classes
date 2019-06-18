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
 * CustomizationFilterCompareType.
 */
class CustomizationFilterCompareType
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _equal = '_equal';
    /**
     * @var string
     */
    const _greaterThan = '_greaterThan';
    /**
     * @var string
     */
    const _greaterThanOrEqual = '_greaterThanOrEqual';
    /**
     * @var string
     */
    const _lessThan = '_lessThan';
    /**
     * @var string
     */
    const _lessThanOrEqual = '_lessThanOrEqual';
    /**
     * @var string
     */
    const _notEqual = '_notEqual';
}
