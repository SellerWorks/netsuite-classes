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
 * InitializeRef.
 */
class InitializeRef extends BaseRef
{
    /**
     * @var InitializeRefType
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

    public static $paramtypesmap = array(
        'type' => 'InitializeRefType',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
