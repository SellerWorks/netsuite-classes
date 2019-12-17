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
 * CustomRecordTypeForms
 */
class CustomRecordTypeForms {
	/**
	 * @access public
	 * @var string
	 */
	public $formEdit;
	/**
	 * @access public
	 * @var string
	 */
	public $formName;
	/**
	 * @access public
	 * @var boolean
	 */
	public $formPref;

	static $paramtypesmap = array(
		"formEdit" => "string",
		"formName" => "string",
		"formPref" => "boolean",
	);
}
