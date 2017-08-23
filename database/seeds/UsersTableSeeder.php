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
        $arr = [];
        for ($i=0; $i < 51; $i++) { 
        	$temp['uname'] ='百度'.$i;
    		$temp['upassword'] = '五道口'.$i;
    		$temp['email'] = 'baidu'.$i.'@baidu.com';
    		$temp['phone'] = '135132224'.$i;
    		$temp['static'] = '1';
    		$arr[] = $temp;
        }
        DB::table('users') -> insert($arr);
    }
}
