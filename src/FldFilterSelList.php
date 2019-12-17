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
 * FldFilterSelList.
 */
class FldFilterSelList
{
    /**
     * @var RecordRef[]
     */
    public $fldFilterSel;

    public static $paramtypesmap = [
        'fldFilterSel' => 'RecordRef[]',
    ];
}
