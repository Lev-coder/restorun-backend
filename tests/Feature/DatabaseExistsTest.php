<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class DatabaseExistsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_users_table_exists()
    {
        $this->assertEquals(true,Schema::hasTable("users"));
    }

    public function test_password_resets_table_resets()
    {
        $this->assertEquals(true,Schema::hasTable("password_resets"));
    }

    public function test_failed_jobs_table_exists()
    {
        $this->assertEquals(true,Schema::hasTable("failed_jobs"));
    }

    public function test_products_table_exists()
    {
        $this->assertEquals(true,Schema::hasTable("products"));
    }

    public function test_product_user_table_exists()
    {
        $this->assertEquals(true,Schema::hasTable("product_user"));
    }
}
