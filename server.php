<?php declare(strict_types=1);

/*
 * This file is part of the Syncore package.
 *
 * (c) Bartosz Zwski   <duwless@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$uri = urldecode(
    parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH )
);


if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}


require_once  __DIR__ . '/web' . '/app_dev.php';
