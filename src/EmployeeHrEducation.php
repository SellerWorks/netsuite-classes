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
 * EmployeeHrEducation.
 */
class EmployeeHrEducation
{
    /**
     * @var RecordRef
     */
    public $education;
    /**
     * @var string
     */
    public $degree;
    /**
     * @var dateTime
     */
    public $degreeDate;

    public static $paramtypesmap = array(
        'education' => 'RecordRef',
        'degree' => 'string',
        'degreeDate' => 'dateTime',
    );
}
