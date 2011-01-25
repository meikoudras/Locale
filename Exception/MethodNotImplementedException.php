<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Locale\Exception;

/**
 * @author Eriksen Costa <eriksen.costa@infranology.com.br>
 */
class MethodNotImplementedException extends NotImplementedException
{
    /**
     * Constructor
     *
     * @param string $message  The exception message. A note to install the intl extension is appended to this string
     */
    public function __construct($methodName)
    {
        parent::__construct(sprintf('The %s() is not implemented.', $methodName));
    }
}
