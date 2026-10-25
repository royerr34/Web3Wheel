<?php
/**
 * Tests for Web3Wheel
 */

use PHPUnit\Framework\TestCase;
use Web3wheel\Web3wheel;

class Web3wheelTest extends TestCase {
    private Web3wheel $instance;

    protected function setUp(): void {
        $this->instance = new Web3wheel(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3wheel::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
