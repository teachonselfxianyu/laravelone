<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Setting::create([
            'key' => 'webname',
            'value' => 'laravelone',
            'name' => '网站名称',
            'sort' => 1,
            'comment'=>'设置网站名称,显示在相关的所有位置',

        ]);
        Setting::create([
            'key' => 'icp',
            'value' => '123456',
            'name' => '备案号',
            'sort' => 2,
            'comment'=>'请输入网站备案号，显示在网页底部',

        ]);
        Setting::create([
            'key' => 'page_resource',
            'value' => '15',
            'name' => '分页',
            'sort' => 3,
            'comment'=>'资源页，每页显示多少数据',

        ]);
        Setting::create([
            'key' => 'ali_access',
            'value' => 'LTAI4Fdw9tbgKQQ7tY7CmEXD',
            'name' => '阿里_Access',
            'sort' => 4,
            'comment'=>'视频点播时需要',

        ]);
        Setting::create([
            'key' => 'ali_secret',
            'value' => 'gcruD9mnZ6N0csZoNF2crApD56GyjG',
            'name' => '阿里_SECRET',
            'sort' => 5,
            'comment'=>'视频点播时需要',

        ]);
        Setting::create([
            'key' => 'ali_region',
            'value' => 'cn-shanghai',
            'name' => '阿里_地区ID',
            'sort' => 6,
            'comment'=>'默认 cn-shanghai 无需更改',

        ]);
    }
}
