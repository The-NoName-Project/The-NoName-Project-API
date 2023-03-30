<?php

use Tests\TestCase;

class ProductsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example(): void
    {
        $res = $this->get('/api/products');
        $res->assertStatus(200);
        $res->dd();
    }

    public function test_insert() {
        $product = [
            'name' => 'Producto',
            'precio_sale' => 400,
            'existencias' => 10,
            'stock' => 12,
            'category_id' => 1,
        ];

        $res = $this->post('/api/products/store', $product);
        $res->assertStatus(201);
        $res->dd();
    }

    public function test_show()
    {
        $res = $this->get('/api/products/8');
        $res->assertStatus(200);
        $res->dd();
    }

    public function test_delete_product(){
        $res = $this->delete('/api/products/delete/1');
        $res->assertStatus(200);
    }
}
