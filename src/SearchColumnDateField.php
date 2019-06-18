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
 * SearchColumnDateField.
 */
class SearchColumnDateField extends SearchColumnField
{
    /**
     * @var dateTime
     */
    public $searchValue;

    public static $paramtypesmap = [
        'searchValue' => 'dateTime',
    ];
}