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
 * HcmJob.
 */
class HcmJob extends Record
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var RecordRef
     */
    public $employmentCategory;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $description;
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
        'title' => 'string',
        'isInactive' => 'boolean',
        'employmentCategory' => 'RecordRef',
        'jobId' => 'string',
        'description' => 'string',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
