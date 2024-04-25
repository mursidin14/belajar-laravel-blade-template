<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheretenceTest extends TestCase
{
    public function testChild()
    {
        $this->view('child', [])
             ->assertSeeText('Halaman Utama')
             ->assertSeeText('Selamat Datang')
             ->assertSeeText('Content');
    }

    public function testChildDefault()
    {
        $this->view('child-default', [])
             ->assertSeeText('Halaman Utama')
             ->assertSeeText('Selamat Datang')
             ->assertSeeText('Content');
    }
}
