<?php

declare(strict_types=1);

namespace PhpDocumentor\Contracts\Common\Parser;

use PhpDocumentor\Contracts\Common\Token\TokenInterface;

/**
 * An interface that implements methods for parsing incoming source.
 */
interface ParserInterface
{
    /**
     * Parses the source into a list of tokens.
     *
     * @return list<TokenInterface> List of tokens
     *
     * @throws ParserExceptionInterface Any parser error
     */
    public function parse(): iterable;
}
