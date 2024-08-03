<?php

declare(strict_types=1);

namespace PhpDocumentor\Contracts\Common\Node;

/**
 * An interface that implements node management methods.
 */
interface NodeInterface
{
    /**
     * Returns the parent node.
     *
     * @return NodeInterface Parent node
     */
    public function getParent(): NodeInterface;

    /**
     * Returns the contents of the node or the null if the node cannot contain the contents.
     *
     * @return string|null The contents of the node
     */
    public function getContent(): ?string;

    /**
     * Returns the offset of the node relative to the main content.
     *
     * @return int Node offset
     */
    public function getOffset(): int;
}
