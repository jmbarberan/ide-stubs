<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Str;

/**
 * Converts a string to uppercase using mbstring
 */
class Upper extends \Phalcon\Support\Helper\Str\AbstractStr
{
    /**
     * @param string $text
     * @param string $encoding
     *
     * @return string
     */
    public function __invoke(string $text, string $encoding = 'UTF-8'): string
    {
    }
}
