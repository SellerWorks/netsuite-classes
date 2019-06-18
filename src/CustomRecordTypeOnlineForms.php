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
 * CustomRecordTypeOnlineForms.
 */
class CustomRecordTypeOnlineForms
{
    /**
     * @var string
     */
    public $onlineFormName;
    /**
     * @var string
     */
    public $isOnline;
    /**
     * @var string
     */
    public $templateName;

    public static $paramtypesmap = array(
        'onlineFormName' => 'string',
        'isOnline' => 'string',
        'templateName' => 'string',
    );
}
