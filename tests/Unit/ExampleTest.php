<?php

namespace Tests\Unit;


use Faker\Generator;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    public function testUserRegister()
    {
        $factor = \Faker\Factory::create();
        dd([
            'username' => $factor->firstName
        ]);
        $d = $this->post('api/login', [
            'email' => 'asdasd'
        ]);
        dd($d->decodeResponseJson());
    }
}
