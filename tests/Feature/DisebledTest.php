<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisebledTest extends TestCase
{
    public function testDisebled()
    {
        $this->view('disabled', ['name' => 'Mursidin'])
             ->assertSeeText('hello')
             ->assertDontSeeText('Mursidin');
    }
}
