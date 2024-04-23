<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwithcTest extends TestCase
{
    public function testSwitch()
    {
        $this->view('swicth', [
            'value' => 'A'
        ])->assertSeeText('Memuaskan');

        $this->view('swicth', [
            'value' => 'B'
        ])->assertSeeText('Baik');

        $this->view('swicth', [
            'value' => 'C'
        ])->assertSeeText('Cukup');

        $this->view('swicth', [
            'value' => 'D'
        ])->assertSeeText('Kurang');
    }
}
