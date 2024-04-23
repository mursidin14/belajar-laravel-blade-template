<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function testWhileLoop()
    {
        $this->view('while', [
            'x' => 0
        ])->assertSeeText('the current value is 0')
          ->assertSeeText('the current value is 1')
          ->assertSeeText('the current value is 2')
          ->assertSeeText('the current value is 3');
    }
}
