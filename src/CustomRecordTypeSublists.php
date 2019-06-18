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
 * CustomRecordTypeSublists.
 */
class CustomRecordTypeSublists
{
    /**
     * @var RecordRef
     */
    public $recordSearch;
    /**
     * @var string
     */
    public $recordDescr;
    /**
     * @var LanguageValueList
     */
    public $recordDescrLanguageValueList;
    /**
     * @var RecordRef
     */
    public $recordTab;
    /**
     * @var string
     */
    public $recordId;

    public static $paramtypesmap = array(
        'recordSearch' => 'RecordRef',
        'recordDescr' => 'string',
        'recordDescrLanguageValueList' => 'LanguageValueList',
        'recordTab' => 'RecordRef',
        'recordId' => 'string',
    );
}
