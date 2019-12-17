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
 * ContactCategorySearchAdvanced.
 */
class ContactCategorySearchAdvanced extends SearchRecord
{
    /**
     * @var ContactCategorySearch
     */
    public $criteria;
    /**
     * @var ContactCategorySearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchId;
    /**
     * @var string
     */
    public $savedSearchScriptId;

    public static $paramtypesmap = [
        'criteria' => 'ContactCategorySearch',
        'columns' => 'ContactCategorySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
