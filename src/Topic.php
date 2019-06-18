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
 * Topic.
 */
class Topic extends Record
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var RecordRef
     */
    public $parentTopic;
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
    public $longDescription;
    /**
     * @var TopicSolutionList
     */
    public $solutionList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'title' => 'string',
        'parentTopic' => 'RecordRef',
        'description' => 'string',
        'isInactive' => 'boolean',
        'longDescription' => 'string',
        'solutionList' => 'TopicSolutionList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
