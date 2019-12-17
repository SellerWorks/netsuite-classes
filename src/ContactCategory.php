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
 * ContactCategory.
 */
class ContactCategory extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $private;
    /**
     * @var bool
     */
    public $sync;
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

    public static $paramtypesmap = [
        'name' => 'string',
        'private' => 'boolean',
        'sync' => 'boolean',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
