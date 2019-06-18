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
 * SupportCaseStatus.
 */
class SupportCaseStatus extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var RecordRef
     */
    public $insertBefore;
    /**
     * @var SupportCaseStatusStage
     */
    public $stage;
    /**
     * @var bool
     */
    public $caseOnHold;
    /**
     * @var bool
     */
    public $autoCloseCase;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $isInactive;
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
        'insertBefore' => 'RecordRef',
        'stage' => 'SupportCaseStatusStage',
        'caseOnHold' => 'boolean',
        'autoCloseCase' => 'boolean',
        'description' => 'string',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
