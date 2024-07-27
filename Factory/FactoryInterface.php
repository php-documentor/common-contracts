<?php

declare(strict_types=1);

namespace PhpDocumentor\Contracts\Common\Factory;

/**
 * The factory is necessary for the automatic creation of objects.
 */
interface FactoryInterface
{
    /**
     * @param string $source Data for creating an object
     *
     * @return object The object being created
     */
    public function create(string $source): object;
}
