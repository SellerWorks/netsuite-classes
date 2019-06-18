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
 * PhoneCallSearchAdvanced.
 */
class PhoneCallSearchAdvanced extends SearchRecord
{
    /**
     * @var PhoneCallSearch
     */
    public $criteria;
    /**
     * @var PhoneCallSearchRow
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

    public static $paramtypesmap = array(
        'criteria' => 'PhoneCallSearch',
        'columns' => 'PhoneCallSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
