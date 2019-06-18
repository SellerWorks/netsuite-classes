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
 * CustomListSearchRowBasic.
 */
class CustomListSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isOrdered;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var SearchColumnStringField[]
     */
    public $scriptId;

    public static $paramtypesmap = array(
        'description' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isOrdered' => 'SearchColumnBooleanField[]',
        'name' => 'SearchColumnStringField[]',
        'owner' => 'SearchColumnSelectField[]',
        'scriptId' => 'SearchColumnStringField[]',
    );
}
