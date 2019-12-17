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
 * RevRecTemplateRecurrence.
 */
class RevRecTemplateRecurrence
{
    /**
     * @var RecordRef
     */
    public $incomeaccount;
    /**
     * @var int
     */
    public $periodOffset;
    /**
     * @var string
     */
    public $recamount;

    public static $paramtypesmap = [
        'incomeaccount' => 'RecordRef',
        'periodOffset' => 'integer',
        'recamount' => 'string',
    ];
}
