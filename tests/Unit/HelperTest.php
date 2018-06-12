<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelperTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function testHelperPageTitleIsEmpyt()
    {
        $this->assertEquals('Laracarte - List of artisans',page_title(''));
    }

    public function testHelperPageTitleIsNotEmpyt()
    {
        $this->assertEquals('About | Laracarte - List of artisans',page_title('About'));
    }

    public function testHelperSetActive()
    {
        $this->get(route('home'));
        $this->assertEquals('active',set_active_route('home'));
        $this->assertEquals('',set_active_route('about'));
        $this->assertEquals('',set_active_route('contact'));

        $this->get(route('contact'));
        $this->assertEquals('active',set_active_route('contact'));
        $this->assertEquals('',set_active_route('about'));
        $this->assertEquals('',set_active_route('home'));
    }

}
