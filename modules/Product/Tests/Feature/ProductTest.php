<?php

namespace Modules\Product\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Product\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_it_can_create_a_product(): void
    {
        Product::factory()->create();

        $this->assertEquals(1, Product::count());
    }
}
