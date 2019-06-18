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
 * WinLossReason.
 */
class WinLossReason extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'name' => 'string',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
