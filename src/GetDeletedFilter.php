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
 * GetDeletedFilter.
 */
class GetDeletedFilter
{
    /**
     * @var SearchDateField
     */
    public $deletedDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var SearchStringField
     */
    public $scriptId;

    public static $paramtypesmap = array(
        'deletedDate' => 'SearchDateField',
        'type' => 'SearchEnumMultiSelectField',
        'scriptId' => 'SearchStringField',
    );
}
