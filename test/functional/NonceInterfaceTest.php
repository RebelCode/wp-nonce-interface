<?php

namespace RebelCode\WordPress\Nonce\FuncTest;

use RebelCode\WordPress\Nonce\NonceInterface;
use Xpmock\TestCase;

/**
 * Tests {@see RebelCode\WordPress\Nonce\NonceInterface}.
 *
 * @since [*next-version*]
 */
class NonceInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\WordPress\\Nonce\\NonceInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return NonceInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getId()
            ->getCode()
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
            'Subject is not a valid instance.'
        );

        $this->assertInstanceOf(
            'Dhii\\Data\\IdAwareInterface', $subject,
            'Subject does not extend the expected ancestor.'
        );
    }
}
