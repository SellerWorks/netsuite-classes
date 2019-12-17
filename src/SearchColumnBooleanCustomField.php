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
 * SearchColumnBooleanCustomField.
 */
class SearchColumnBooleanCustomField extends SearchColumnCustomField
{
    /**
     * @var bool
     */
    public $searchValue;

    public static $paramtypesmap = [
        'searchValue' => 'boolean',
    ];
}
