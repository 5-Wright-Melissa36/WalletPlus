<?php
/**
 * Tests for WalletPlus
 */

use PHPUnit\Framework\TestCase;
use Walletplus\Walletplus;

class WalletplusTest extends TestCase {
    private Walletplus $instance;

    protected function setUp(): void {
        $this->instance = new Walletplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Walletplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
