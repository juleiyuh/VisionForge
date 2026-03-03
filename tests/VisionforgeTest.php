<?php
/**
 * Tests for VisionForge
 */

use PHPUnit\Framework\TestCase;
use Visionforge\Visionforge;

class VisionforgeTest extends TestCase {
    private Visionforge $instance;

    protected function setUp(): void {
        $this->instance = new Visionforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Visionforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
