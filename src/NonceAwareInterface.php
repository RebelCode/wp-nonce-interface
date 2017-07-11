<?php

namespace RebelCode\WordPress\Nonce;

/**
 * Something that is aware of a nonce.
 *
 * @since [*next-version*]
 */
interface NonceAwareInterface
{
    /**
     * Retrieves the nonce.
     *
     * @since [*next-version*]
     *
     * @return NonceInterface
     */
    public function getNonce();
}
