<?php
/**
 * Tests for CipherAxis
 */

use PHPUnit\Framework\TestCase;
use Cipheraxis\Cipheraxis;

class CipheraxisTest extends TestCase {
    private Cipheraxis $instance;

    protected function setUp(): void {
        $this->instance = new Cipheraxis(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cipheraxis::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
