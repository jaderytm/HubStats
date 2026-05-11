<?php
/**
 * Tests for HubStats
 */

use PHPUnit\Framework\TestCase;
use Hubstats\Hubstats;

class HubstatsTest extends TestCase {
    private Hubstats $instance;

    protected function setUp(): void {
        $this->instance = new Hubstats(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hubstats::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
