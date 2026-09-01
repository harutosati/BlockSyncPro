<?php
/**
 * Tests for BlockSyncPro
 */

use PHPUnit\Framework\TestCase;
use Blocksyncpro\Blocksyncpro;

class BlocksyncproTest extends TestCase {
    private Blocksyncpro $instance;

    protected function setUp(): void {
        $this->instance = new Blocksyncpro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocksyncpro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
