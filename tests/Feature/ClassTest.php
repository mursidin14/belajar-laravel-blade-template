<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassTest extends TestCase
{
    public function testClassCss()
    {
        $this->view('class', [
            'hobbies' => [
                [
                    'name' => 'Coding',
                    'ganjil' => true
                ],
                [
                    'name' => 'Gaming',
                    'ganjil' => false
                ]
            ]
            
        ])->assertSee('<li class="red italic">Coding</li>', false)
          ->assertSee('<li class="red">Gaming</li>', false);
    }

}
