<?php

declare(strict_types=1);

namespace PhpDocumentor\Contracts\Common\Token;

/**
 * An interface that implements methods for token.
 */
interface TokenInterface
{
    /**
     * Returns the content of the token.
     *
     * @return string The content of the token
     */
    public function content(): string;

    /**
     * Returns the token processing flag
     *
     * @return bool Token processing flag
     */
    public function isProcessed(): bool;
}
