<?php

namespace RebelCode\WordPress\Nonce\Factory;

use RebelCode\WordPress\Nonce\NonceInterface;

/**
 * Something that can create nonce instances.
 *
 * @since [*next-version*]
 */
interface NonceFactoryinterface
{
    /**
     * Creates a new nonce instance.
     *
     * @since [*next-version*]
     *
     * @param array $config Configuration data.
     *
     * @return NonceInterface
     */
    public function make($config = []);
}
