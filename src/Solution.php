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
 * Solution.
 */
class Solution extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $solutionCode;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $message;
    /**
     * @var SolutionStatus
     */
    public $status;
    /**
     * @var bool
     */
    public $displayOnline;
    /**
     * @var RecordRef
     */
    public $assigned;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $longDescription;
    /**
     * @var SolutionTopicsList
     */
    public $topicsList;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var SolutionsList
     */
    public $solutionsList;
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

    public static $paramtypesmap = [
        'customForm' => 'RecordRef',
        'solutionCode' => 'string',
        'title' => 'string',
        'message' => 'string',
        'status' => 'SolutionStatus',
        'displayOnline' => 'boolean',
        'assigned' => 'RecordRef',
        'isInactive' => 'boolean',
        'longDescription' => 'string',
        'topicsList' => 'SolutionTopicsList',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'solutionsList' => 'SolutionsList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
