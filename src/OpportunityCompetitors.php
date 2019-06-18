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
 * OpportunityCompetitors.
 */
class OpportunityCompetitors
{
    /**
     * @var RecordRef
     */
    public $competitor;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $notes;
    /**
     * @var string
     */
    public $strategy;
    /**
     * @var bool
     */
    public $winner;

    public static $paramtypesmap = [
        'competitor' => 'RecordRef',
        'url' => 'string',
        'notes' => 'string',
        'strategy' => 'string',
        'winner' => 'boolean',
    ];
}
