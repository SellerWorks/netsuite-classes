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
 * ListOrRecordRef.
 */
class ListOrRecordRef
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    /**
     * @var string
     */
    public $typeId;

    public static $paramtypesmap = [
        'name' => 'string',
        'internalId' => 'string',
        'externalId' => 'string',
        'typeId' => 'string',
    ];
}
