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
 * GetSelectFilterByFieldValue.
 */
class GetSelectFilterByFieldValue
{
    /**
     * @var string
     */
    public $sublist;
    /**
     * @var string
     */
    public $field;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = array(
        'sublist' => 'string',
        'field' => 'string',
        'internalId' => 'string',
    );
}
