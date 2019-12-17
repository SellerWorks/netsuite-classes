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
 * CustomerMessageSearchRowBasic.
 */
class CustomerMessageSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnStringField[]
     */
    public $preferred;

    public static $paramtypesmap = [
        'description' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'name' => 'SearchColumnStringField[]',
        'preferred' => 'SearchColumnStringField[]',
    ];
}
