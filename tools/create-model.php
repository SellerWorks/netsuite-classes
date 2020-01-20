<?php
/**
 * (c) Steve Nebes <steve@nebes.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$serviceFile = __DIR__ . '/NetSuiteService.php';

if (!\is_readable($serviceFile)) {
    return;
}

$classmap = [];
$serviceFile = \file_get_contents(__DIR__ . '/NetSuiteService.php');
$modelDir = __DIR__ . '/../src/';

if (false !== \preg_match_all('@if \(!class_exists\("(.*?)"\)\) {(.*?})}@si', $serviceFile, $classes)) {
    foreach ($classes[1] as $index => $className) {
        if ('NetSuiteService' === $className) {
            continue;
        }

        $file = \sprintf('%s%s.php', $modelDir, $className);
        $class = \trim($classes[2][$index]);
        $content = <<<PHP
<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

{$class}

PHP;

        \file_put_contents($file, $content);
        $classmap[] = \sprintf("'%s' => 'SellerWorks\\NetSuite\\Model\\%s'", $className, $className);
    }
}

\sort($classmap);
$classmap = \implode(",\n        ", $classmap);
$content = <<<PHP
<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

function classmap(): array
{
    return [
        {$classmap}
    ];
}

PHP;

\file_put_contents(\sprintf('%sclassmap.php', $modelDir), $content);
