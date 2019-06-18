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
 * ContactCategorySearchRowBasic.
 */
class ContactCategorySearchRowBasic extends SearchRowBasic
{
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
     * @var SearchColumnBooleanField[]
     */
    public $private;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $sync;

    public static $paramtypesmap = array(
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'name' => 'SearchColumnStringField[]',
        'private' => 'SearchColumnBooleanField[]',
        'sync' => 'SearchColumnBooleanField[]',
    );
}
