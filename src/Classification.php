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
 * Classification.
 */
class Classification extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var ClassTranslationList
     */
    public $classTranslationList;
    /**
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'name' => 'string',
        'includeChildren' => 'boolean',
        'parent' => 'RecordRef',
        'isInactive' => 'boolean',
        'classTranslationList' => 'ClassTranslationList',
        'subsidiaryList' => 'RecordRefList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
