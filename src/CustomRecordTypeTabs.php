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
 * CustomRecordTypeTabs.
 */
class CustomRecordTypeTabs
{
    /**
     * @var string
     */
    public $tabTitle;
    /**
     * @var RecordRef
     */
    public $tabParent;
    /**
     * @var LanguageValueList
     */
    public $tabTitleLanguageValueList;

    public static $paramtypesmap = array(
        'tabTitle' => 'string',
        'tabParent' => 'RecordRef',
        'tabTitleLanguageValueList' => 'LanguageValueList',
    );
}
