<?php

namespace RebelCode\WordPress\Nonce\Factory;

use Dhii\Factory\FactoryInterface;
use RebelCode\WordPress\Nonce\NonceInterface;

/**
 * Something that can create nonce instances.
 *
 * @since [*next-version*]
 */
interface NonceFactoryInterface extends FactoryInterface
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
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return NonceInterface The created nonce instance.
     */
    public function make($config = array());
}
