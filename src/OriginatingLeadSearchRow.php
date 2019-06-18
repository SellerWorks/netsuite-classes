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
 * OriginatingLeadSearchRow.
 */
class OriginatingLeadSearchRow extends SearchRow
{
    /**
     * @var OriginatingLeadSearchRowBasic
     */
    public $basic;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'OriginatingLeadSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
