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
 * StatusDetailType.
 */
class StatusDetailType
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const ERROR = 'ERROR';
    /**
     * @var string
     */
    const WARN = 'WARN';
    /**
     * @var string
     */
    const INFO = 'INFO';
}
