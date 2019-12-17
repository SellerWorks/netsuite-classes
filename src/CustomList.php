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
 * CustomList.
 */
class CustomList extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var RecordRef
     */
    public $owner;
    /**
     * @var bool
     */
    public $isOrdered;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $isMatrixOption;
    /**
     * @var string
     */
    public $scriptId;
    /**
     * @var bool
     */
    public $convertToCustomRecord;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var CustomListCustomValueList
     */
    public $customValueList;
    /**
     * @var CustomListTranslationsList
     */
    public $translationsList;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = [
        'name' => 'string',
        'owner' => 'RecordRef',
        'isOrdered' => 'boolean',
        'description' => 'string',
        'isMatrixOption' => 'boolean',
        'scriptId' => 'string',
        'convertToCustomRecord' => 'boolean',
        'isInactive' => 'boolean',
        'customValueList' => 'CustomListCustomValueList',
        'translationsList' => 'CustomListTranslationsList',
        'internalId' => 'string',
    ];
}
