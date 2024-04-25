<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view('each', [
            'users' => [
                [
                    'name' => 'mursidin',
                    'hobbies' => ['Coding', 'Gaming']
                ],
                [
                    'name' => 'anton',
                    'hobbies' => ['Watching']
                ]
            ]
        ])->assertSeeInOrder(['.red', 'mursidin', 'Coding', 'Gaming', 'anton', 'Watching']);
    }
}
