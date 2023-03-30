<?php

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_createUser()
    {
        $res = User::create([
            'name' => 'Fernando',
            'app' => 'Duarte', 
            'apm' => 'Villavicencio',
            'fn' => '1999-01-01',
            'phone' => '222010329',
            'password' => Hash::make('Fernando13.1'),
            'email' => 'al222010329@gmail.com',
        ]);

        $res->assertStatus(200);
        $res->dd();
    }

    public function test_update_user(){
        $user = User::find(1);

        $user->update([
            'name' => 'Fernando Update'
        ]);

        $this->assertEquals('Fernando Update', $user->name, 'User update');
    }
}