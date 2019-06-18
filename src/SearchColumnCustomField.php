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
 * SearchColumnCustomField.
 */
class SearchColumnCustomField
{
    /**
     * @var string
     */
    public $customLabel;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $scriptId;

    public static $paramtypesmap = array(
        'customLabel' => 'string',
        'internalId' => 'string',
        'scriptId' => 'string',
    );
}
