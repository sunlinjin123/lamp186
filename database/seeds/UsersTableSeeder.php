<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$data = [];
        for($i=0;$i<100;$i++){
        	$temp['username'] = '张三'.$i;
        	$temp['password'] = Hash::make('123');
        	$temp['phone'] = 1312233446;
        	$temp['email'] = 'zhangsan'.$i.'@qq.com';
        	$temp['remember_token'] = str_random('50');
        	$data[] = $temp;

        }
        DB::table('users')->insert($data);
    }
}
