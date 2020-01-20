<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * JobPercentCompleteOverride
 */
class JobPercentCompleteOverride {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $period;
	/**
	 * @access public
	 * @var float
	 */
	public $percent;
	/**
	 * @access public
	 * @var string
	 */
	public $comments;

	static $paramtypesmap = array(
		"period" => "RecordRef",
		"percent" => "float",
		"comments" => "string",
	);
}
