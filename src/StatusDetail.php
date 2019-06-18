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
 * StatusDetail.
 */
class StatusDetail
{
    /**
     * @var StatusDetailCodeType
     */
    public $code;
    /**
     * @var string
     */
    public $message;
    /**
     * @var bool
     */
    public $afterSubmitFailed;
    /**
     * @var StatusDetailType
     */
    public $type;

    public static $paramtypesmap = array(
        'code' => 'StatusDetailCodeType',
        'message' => 'string',
        'afterSubmitFailed' => 'boolean',
        'type' => 'StatusDetailType',
    );
}
