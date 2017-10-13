<?php

namespace Kaiwh\Geo\Seeds;

use Illuminate\Database\Seeder;

class GeoProvinceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('geo_provinces')->delete();

        \DB::table('geo_provinces')->insert(array(
            0  => array(
                'id'     => 2,
                'name'   => '北京',
                'status' => 1,
            ),
            1  => array(
                'id'     => 3,
                'name'   => '安徽',
                'status' => 1,
            ),
            2  => array(
                'id'     => 4,
                'name'   => '福建',
                'status' => 1,
            ),
            3  => array(
                'id'     => 5,
                'name'   => '甘肃',
                'status' => 1,
            ),
            4  => array(
                'id'     => 6,
                'name'   => '广东',
                'status' => 1,
            ),
            5  => array(
                'id'     => 7,
                'name'   => '广西',
                'status' => 1,
            ),
            6  => array(
                'id'     => 8,
                'name'   => '贵州',
                'status' => 1,
            ),
            7  => array(
                'id'     => 9,
                'name'   => '海南',
                'status' => 1,
            ),
            8  => array(
                'id'     => 10,
                'name'   => '河北',
                'status' => 1,
            ),
            9  => array(
                'id'     => 11,
                'name'   => '河南',
                'status' => 1,
            ),
            10 => array(
                'id'     => 12,
                'name'   => '黑龙江',
                'status' => 1,
            ),
            11 => array(
                'id'     => 13,
                'name'   => '湖北',
                'status' => 1,
            ),
            12 => array(
                'id'     => 14,
                'name'   => '湖南',
                'status' => 1,
            ),
            13 => array(
                'id'     => 15,
                'name'   => '吉林',
                'status' => 1,
            ),
            14 => array(
                'id'     => 16,
                'name'   => '江苏',
                'status' => 1,
            ),
            15 => array(
                'id'     => 17,
                'name'   => '江西',
                'status' => 1,
            ),
            16 => array(
                'id'     => 18,
                'name'   => '辽宁',
                'status' => 1,
            ),
            17 => array(
                'id'     => 19,
                'name'   => '内蒙古',
                'status' => 1,
            ),
            18 => array(
                'id'     => 20,
                'name'   => '宁夏',
                'status' => 1,
            ),
            19 => array(
                'id'     => 21,
                'name'   => '青海',
                'status' => 1,
            ),
            20 => array(
                'id'     => 22,
                'name'   => '山东',
                'status' => 1,
            ),
            21 => array(
                'id'     => 23,
                'name'   => '山西',
                'status' => 1,
            ),
            22 => array(
                'id'     => 24,
                'name'   => '陕西',
                'status' => 1,
            ),
            23 => array(
                'id'     => 25,
                'name'   => '上海',
                'status' => 1,
            ),
            24 => array(
                'id'     => 26,
                'name'   => '四川',
                'status' => 1,
            ),
            25 => array(
                'id'     => 27,
                'name'   => '天津',
                'status' => 1,
            ),
            26 => array(
                'id'     => 28,
                'name'   => '西藏',
                'status' => 1,
            ),
            27 => array(
                'id'     => 29,
                'name'   => '新疆',
                'status' => 1,
            ),
            28 => array(
                'id'     => 30,
                'name'   => '云南',
                'status' => 1,
            ),
            29 => array(
                'id'     => 31,
                'name'   => '浙江',
                'status' => 1,
            ),
            30 => array(
                'id'     => 32,
                'name'   => '重庆',
                'status' => 1,
            ),
            31 => array(
                'id'     => 33,
                'name'   => '香港',
                'status' => 1,
            ),
            32 => array(
                'id'     => 34,
                'name'   => '澳门',
                'status' => 1,
            ),
            33 => array(
                'id'     => 35,
                'name'   => '台湾',
                'status' => 1,
            ),
        ));

    }
}
