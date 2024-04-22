<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view('isset-empty', [])
          ->assertDontSeeText('hello')
          ->assertSeeText('I dont have any hobbies!');

        $this->view('isset-empty', [
            'name' => 'mursidin'
        ])->assertSeeText('hello my name is mursidin')
          ->assertSeeText('I dont have any hobbies!');

        $this->view('isset-empty', [
            'name' => 'mursidin',
            'hobbies' => 'coding'
        ])->assertSeeText('hello my name is mursidin')
          ->assertDontSeeText('I dont have any hobbies!');
    }
}
