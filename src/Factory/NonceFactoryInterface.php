<?php

namespace RebelCode\WordPress\Nonce\Factory;

use RebelCode\WordPress\Nonce\NonceInterface;

/**
 * Something that can create nonce instances.
 *
 * @since [*next-version*]
 */
interface NonceFactoryInterface
{
    /**
     * The key of the ID in factory config data.
     *
     * @since [*next-version*]
     */
    const K_CONFIG_ID = 'id';

    /**
     * The key of the code in factory config data.
     *
     * @since [*next-version*]
     */
    const K_CONFIG_CODE = 'code';

    /**
     * Creates a new nonce instance.
     *
     * @since [*next-version*]
     *
     * @param array $config Configuration data.
     *
     * @return NonceInterface The created nonce instance.
     */
    public function make($config = array());
}
