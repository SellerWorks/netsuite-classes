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
 * CustomRecordTypeOnlineForms
 */
class CustomRecordTypeOnlineForms {
	/**
	 * @access public
	 * @var string
	 */
	public $onlineFormName;
	/**
	 * @access public
	 * @var string
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var string
	 */
	public $templateName;

	static $paramtypesmap = array(
		"onlineFormName" => "string",
		"isOnline" => "string",
		"templateName" => "string",
	);
}
