<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForLoopTest extends TestCase
{
    public function testFor()
    {
        $this->view('for', ['limit' => 3]
        )->assertSeeText('angka 1')
         ->assertSeeText('angka 2')
         ->assertSeeText('angka 3');
    }

    public function testForeach()
    {
        $this->view('foreach', [
            'collection' => ['PS5', 'Nike', 'Macbook']
        ])->assertSeeText('my collections PS5')
          ->assertSeeText('my collections Nike')
          ->assertSeeText('my collections Macbook');
    }

    public function testForelse()
    {
        $this->view('forelse', [
            'collection' => []
        ])->assertDontSeeText('my collections PS5')
          ->assertDontSeeText('my collections PC')
          ->assertDontSeeText('my collections Laptop')
          ->assertSeeText('I dont have any collections');

        $this->view('forelse', [
            'collection' => ['PS5', 'PC', 'Laptop']
        ])->assertSeeText('my collections PS5')
          ->assertSeeText('my collections PC')
          ->assertSeeText('my collections Laptop')
          ->assertDontSeeText('I dont have any collections');
    }
}
