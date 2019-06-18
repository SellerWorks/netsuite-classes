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
 * InitializeAuxRef.
 */
class InitializeAuxRef extends BaseRef
{
    /**
     * @var InitializeAuxRefType
     */
    public $type;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'type' => 'InitializeAuxRefType',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
