<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariabelTest extends TestCase
{
    public function testLoopVariabel()
    {
        $this->view('loop-variabel', [
            'hobbies' => ['Diving', 'Thour']
        ])->assertSeeText('1. Diving')
          ->assertSeeText('2. Thour');
    }
}
