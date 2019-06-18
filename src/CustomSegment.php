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
 * CustomSegment.
 */
class CustomSegment extends Record
{
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $scriptId;
    /**
     * @var string
     */
    public $recordScriptId;
    /**
     * @var RecordRef
     */
    public $recordType;
    /**
     * @var CustomizationFieldType
     */
    public $fieldType;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $showInList;
    /**
     * @var RecordRefList
     */
    public $filteredByList;
    /**
     * @var bool
     */
    public $hasGLImpact;
    /**
     * @var string
     */
    public $help;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $isMandatory;
    /**
     * @var RecordRef
     */
    public $defaultSelection;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = array(
        'label' => 'string',
        'scriptId' => 'string',
        'recordScriptId' => 'string',
        'recordType' => 'RecordRef',
        'fieldType' => 'CustomizationFieldType',
        'isInactive' => 'boolean',
        'showInList' => 'boolean',
        'filteredByList' => 'RecordRefList',
        'hasGLImpact' => 'boolean',
        'help' => 'string',
        'description' => 'string',
        'isMandatory' => 'boolean',
        'defaultSelection' => 'RecordRef',
        'internalId' => 'string',
    );
}
