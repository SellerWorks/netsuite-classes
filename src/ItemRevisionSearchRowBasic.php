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
 * ItemRevisionSearchRowBasic.
 */
class ItemRevisionSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDateField[]
     */
    public $effectiveDate;
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
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnDateField[]
     */
    public $obsoleteDate;

    public static $paramtypesmap = array(
        'effectiveDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'item' => 'SearchColumnSelectField[]',
        'memo' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'obsoleteDate' => 'SearchColumnDateField[]',
    );
}
