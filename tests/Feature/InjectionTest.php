<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InjectionTest extends TestCase
{
   public function testInjection()
   {
    $this->view('injection', [
        'name' => 'mursidin'
    ])->assertSeeText('Hello mursidin');
   }

   public function testExtending()
   {
    $this->view('extending', [
        'name' => 'mursidin'
    ])->assertSeeText('mursidin');
   }
}
