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
 * getSelectValueRequest.
 */
class getSelectValueRequest
{
    /**
     * @var GetSelectValueFieldDescription
     */
    public $fieldDescription;
    /**
     * @var int
     */
    public $pageIndex;

    public static $paramtypesmap = array(
        'fieldDescription' => 'GetSelectValueFieldDescription',
        'pageIndex' => 'integer',
    );
}
