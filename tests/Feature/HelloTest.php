<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/hello')
            ->assertSeeText('Hello Mursidin');
    }

    public function testWorldNested()
    {
        $this->get('/world')
             ->assertSeeText('Hello World');
    }
}
