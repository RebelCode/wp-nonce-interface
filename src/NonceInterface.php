<?php

namespace RebelCode\WordPress\Nonce;

use Dhii\Data\IdAwareInterface;

/**
 * Represents a WordPress nonce.
 *
 * A nonce is a disposable code known by the system that is intended to be provided to trusted sources, so that it may
 * later be sent back to the system, prior to expiration, for authorization and verification purposes.
 *
 * @since [*next-version*]
 */
interface NonceInterface extends IdAwareInterface
{
    /**
     * Retrieves the nonce code.
     *
     * @since [*next-version*]
     *
     * @return string|null The nonce code or null if the nonce has not yet been created.
     */
    public function getCode();
}
