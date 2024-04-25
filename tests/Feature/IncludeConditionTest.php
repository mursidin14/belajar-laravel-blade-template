<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
   public function testIncludeCondition()
   {
        $this->view('include-condition', [
            'user' => [
                'name' => 'mursidin',
                'Owner' => true
            ]
        ])->assertSeeText('Welcome Owner')
          ->assertSeeText('you can see financial reports')
          ->assertSeeText('selamat datang mursidin');

        $this->view('include-condition', [
            'user' => [
                'name' => 'mursidin',
                'Owner' => false
            ]
        ])->assertDontSeeText('Welcome Owner')
          ->assertDontSeeText('you can see financial reports')
          ->assertSeeText('selamat datang mursidin');
   }
}
