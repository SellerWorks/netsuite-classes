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
 * SalesTaxItemSearchRowBasic.
 */
class SalesTaxItemSearchRowBasic extends SearchRowBasic
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
    public $itemId;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxType;

    public static $paramtypesmap = [
        'description' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'itemId' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'taxType' => 'SearchColumnSelectField[]',
    ];
}
