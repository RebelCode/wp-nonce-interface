<?php

namespace RebelCode\WordPress\Nonce\Factory\FuncTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Nonce\Factory\NonceFactoryInterface;

/**
 * Tests {@see RebelCode\WordPress\Nonce\Factory\NonceFactoryInterface}.
 *
 * @since [*next-version*]
 */
class NonceFactoryInterfaceTest extends TestCase
{
    /**
     * The classname of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\WordPress\\Nonce\\Factory\\NonceFactoryInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return NonceFactoryInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->make()
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
