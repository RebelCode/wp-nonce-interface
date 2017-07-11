<?php

namespace RebelCode\WordPress\Nonce\FuncTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Nonce\NonceAwareInterface;

/**
 * Tests {@see RebelCode\WordPress\Nonce\NonceAwareInterface}.
 *
 * @since [*next-version*]
 */
class NonceAwareInterfaceTest extends TestCase
{
    /**
     * The classname of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\WordPress\\Nonce\\NonceAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return NonceAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getNonce()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject,
            'Subject is not a valid instance'
        );
    }
}
