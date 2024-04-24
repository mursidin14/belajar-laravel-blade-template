<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view('include', [])
             ->assertSeeText('Welcome anyone')
             ->assertSeeText('selamat berkunjung')
             ->assertSeeText('Terimakasih');

        $this->view('include', [
            'title' => 'mursidin'
        ])->assertSeeText('Welcome mursidin')
          ->assertSeeText('selamat berkunjung')
          ->assertSeeText('Terimakasih');
    }
}
