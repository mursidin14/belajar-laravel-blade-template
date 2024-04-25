<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view('form', [
            'user' => [
                'premium' => true,
                'name' => 'mursidin',
                'admin' => true
            ]
        ])->assertSee('checked')
          ->assertSee('mursidin')
          ->assertDontSee('readonly');

          $this->view('form', [
            'user' => [
                'premium' => false,
                'name' => 'mursidin',
                'admin' => false
            ]
        ])->assertDontSee('checked')
          ->assertSee('mursidin')
          ->assertSee('readonly');
    }
}
