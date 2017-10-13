<?php

namespace Kaiwh\Geo\Seeds;

use Illuminate\Database\Seeder;

class GeoDistrictTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('geo_districts')->delete();
        
        \DB::table('geo_districts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '东城区',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '西城区',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '海淀区',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '朝阳区',
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '崇文区',
                'status' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '宣武区',
                'status' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '丰台区',
                'status' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '石景山区',
                'status' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '房山区',
                'status' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '门头沟区',
                'status' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '通州区',
                'status' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '顺义区',
                'status' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '昌平区',
                'status' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '怀柔区',
                'status' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '平谷区',
                'status' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '大兴区',
                'status' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '密云县',
                'status' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'city_id' => 1,
                'province_id' => 2,
                'name' => '延庆县',
                'status' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '迎江区',
                'status' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '大观区',
                'status' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '宜秀区',
                'status' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '桐城市',
                'status' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '怀宁县',
                'status' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '枞阳县',
                'status' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '潜山县',
                'status' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '太湖县',
                'status' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '宿松县',
                'status' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '望江县',
                'status' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'city_id' => 2,
                'province_id' => 3,
                'name' => '岳西县',
                'status' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'city_id' => 3,
                'province_id' => 3,
                'name' => '中市区',
                'status' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'city_id' => 3,
                'province_id' => 3,
                'name' => '东市区',
                'status' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'city_id' => 3,
                'province_id' => 3,
                'name' => '西市区',
                'status' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'city_id' => 3,
                'province_id' => 3,
                'name' => '郊区',
                'status' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'city_id' => 3,
                'province_id' => 3,
                'name' => '怀远县',
                'status' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'city_id' => 3,
                'province_id' => 3,
                'name' => '五河县',
                'status' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'city_id' => 3,
                'province_id' => 3,
                'name' => '固镇县',
                'status' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'city_id' => 4,
                'province_id' => 3,
                'name' => '居巢区',
                'status' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'city_id' => 4,
                'province_id' => 3,
                'name' => '庐江县',
                'status' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'city_id' => 4,
                'province_id' => 3,
                'name' => '无为县',
                'status' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'city_id' => 4,
                'province_id' => 3,
                'name' => '含山县',
                'status' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'city_id' => 4,
                'province_id' => 3,
                'name' => '和县',
                'status' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'city_id' => 5,
                'province_id' => 3,
                'name' => '贵池区',
                'status' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'city_id' => 5,
                'province_id' => 3,
                'name' => '东至县',
                'status' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'city_id' => 5,
                'province_id' => 3,
                'name' => '石台县',
                'status' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'city_id' => 5,
                'province_id' => 3,
                'name' => '青阳县',
                'status' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'city_id' => 6,
                'province_id' => 3,
                'name' => '琅琊区',
                'status' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'city_id' => 6,
                'province_id' => 3,
                'name' => '南谯区',
                'status' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'city_id' => 6,
                'province_id' => 3,
                'name' => '天长市',
                'status' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'city_id' => 6,
                'province_id' => 3,
                'name' => '明光市',
                'status' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'city_id' => 6,
                'province_id' => 3,
                'name' => '来安县',
                'status' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'city_id' => 6,
                'province_id' => 3,
                'name' => '全椒县',
                'status' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'city_id' => 6,
                'province_id' => 3,
                'name' => '定远县',
                'status' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'city_id' => 6,
                'province_id' => 3,
                'name' => '凤阳县',
                'status' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '蚌山区',
                'status' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '龙子湖区',
                'status' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '禹会区',
                'status' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '淮上区',
                'status' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '颍州区',
                'status' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '颍东区',
                'status' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '颍泉区',
                'status' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '界首市',
                'status' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '临泉县',
                'status' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '太和县',
                'status' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '阜南县',
                'status' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'city_id' => 7,
                'province_id' => 3,
                'name' => '颖上县',
                'status' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'city_id' => 8,
                'province_id' => 3,
                'name' => '相山区',
                'status' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'city_id' => 8,
                'province_id' => 3,
                'name' => '杜集区',
                'status' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'city_id' => 8,
                'province_id' => 3,
                'name' => '烈山区',
                'status' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'city_id' => 8,
                'province_id' => 3,
                'name' => '濉溪县',
                'status' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'city_id' => 9,
                'province_id' => 3,
                'name' => '田家庵区',
                'status' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'city_id' => 9,
                'province_id' => 3,
                'name' => '大通区',
                'status' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'city_id' => 9,
                'province_id' => 3,
                'name' => '谢家集区',
                'status' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'city_id' => 9,
                'province_id' => 3,
                'name' => '八公山区',
                'status' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'city_id' => 9,
                'province_id' => 3,
                'name' => '潘集区',
                'status' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'city_id' => 9,
                'province_id' => 3,
                'name' => '凤台县',
                'status' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'city_id' => 10,
                'province_id' => 3,
                'name' => '屯溪区',
                'status' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'city_id' => 10,
                'province_id' => 3,
                'name' => '黄山区',
                'status' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'city_id' => 10,
                'province_id' => 3,
                'name' => '徽州区',
                'status' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'city_id' => 10,
                'province_id' => 3,
                'name' => '歙县',
                'status' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'city_id' => 10,
                'province_id' => 3,
                'name' => '休宁县',
                'status' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'city_id' => 10,
                'province_id' => 3,
                'name' => '黟县',
                'status' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                'city_id' => 10,
                'province_id' => 3,
                'name' => '祁门县',
                'status' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'city_id' => 11,
                'province_id' => 3,
                'name' => '金安区',
                'status' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'city_id' => 11,
                'province_id' => 3,
                'name' => '裕安区',
                'status' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'city_id' => 11,
                'province_id' => 3,
                'name' => '寿县',
                'status' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'city_id' => 11,
                'province_id' => 3,
                'name' => '霍邱县',
                'status' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'city_id' => 11,
                'province_id' => 3,
                'name' => '舒城县',
                'status' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'city_id' => 11,
                'province_id' => 3,
                'name' => '金寨县',
                'status' => 1,
            ),
            88 => 
            array (
                'id' => 89,
                'city_id' => 11,
                'province_id' => 3,
                'name' => '霍山县',
                'status' => 1,
            ),
            89 => 
            array (
                'id' => 90,
                'city_id' => 12,
                'province_id' => 3,
                'name' => '雨山区',
                'status' => 1,
            ),
            90 => 
            array (
                'id' => 91,
                'city_id' => 12,
                'province_id' => 3,
                'name' => '花山区',
                'status' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'city_id' => 12,
                'province_id' => 3,
                'name' => '金家庄区',
                'status' => 1,
            ),
            92 => 
            array (
                'id' => 93,
                'city_id' => 12,
                'province_id' => 3,
                'name' => '当涂县',
                'status' => 1,
            ),
            93 => 
            array (
                'id' => 94,
                'city_id' => 13,
                'province_id' => 3,
                'name' => '埇桥区',
                'status' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'city_id' => 13,
                'province_id' => 3,
                'name' => '砀山县',
                'status' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'city_id' => 13,
                'province_id' => 3,
                'name' => '萧县',
                'status' => 1,
            ),
            96 => 
            array (
                'id' => 97,
                'city_id' => 13,
                'province_id' => 3,
                'name' => '灵璧县',
                'status' => 1,
            ),
            97 => 
            array (
                'id' => 98,
                'city_id' => 13,
                'province_id' => 3,
                'name' => '泗县',
                'status' => 1,
            ),
            98 => 
            array (
                'id' => 99,
                'city_id' => 14,
                'province_id' => 3,
                'name' => '铜官山区',
                'status' => 1,
            ),
            99 => 
            array (
                'id' => 100,
                'city_id' => 14,
                'province_id' => 3,
                'name' => '狮子山区',
                'status' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'city_id' => 14,
                'province_id' => 3,
                'name' => '郊区',
                'status' => 1,
            ),
            101 => 
            array (
                'id' => 102,
                'city_id' => 14,
                'province_id' => 3,
                'name' => '铜陵县',
                'status' => 1,
            ),
            102 => 
            array (
                'id' => 103,
                'city_id' => 15,
                'province_id' => 3,
                'name' => '镜湖区',
                'status' => 1,
            ),
            103 => 
            array (
                'id' => 104,
                'city_id' => 15,
                'province_id' => 3,
                'name' => '弋江区',
                'status' => 1,
            ),
            104 => 
            array (
                'id' => 105,
                'city_id' => 15,
                'province_id' => 3,
                'name' => '鸠江区',
                'status' => 1,
            ),
            105 => 
            array (
                'id' => 106,
                'city_id' => 15,
                'province_id' => 3,
                'name' => '三山区',
                'status' => 1,
            ),
            106 => 
            array (
                'id' => 107,
                'city_id' => 15,
                'province_id' => 3,
                'name' => '芜湖县',
                'status' => 1,
            ),
            107 => 
            array (
                'id' => 108,
                'city_id' => 15,
                'province_id' => 3,
                'name' => '繁昌县',
                'status' => 1,
            ),
            108 => 
            array (
                'id' => 109,
                'city_id' => 15,
                'province_id' => 3,
                'name' => '南陵县',
                'status' => 1,
            ),
            109 => 
            array (
                'id' => 110,
                'city_id' => 16,
                'province_id' => 3,
                'name' => '宣州区',
                'status' => 1,
            ),
            110 => 
            array (
                'id' => 111,
                'city_id' => 16,
                'province_id' => 3,
                'name' => '宁国市',
                'status' => 1,
            ),
            111 => 
            array (
                'id' => 112,
                'city_id' => 16,
                'province_id' => 3,
                'name' => '郎溪县',
                'status' => 1,
            ),
            112 => 
            array (
                'id' => 113,
                'city_id' => 16,
                'province_id' => 3,
                'name' => '广德县',
                'status' => 1,
            ),
            113 => 
            array (
                'id' => 114,
                'city_id' => 16,
                'province_id' => 3,
                'name' => '泾县',
                'status' => 1,
            ),
            114 => 
            array (
                'id' => 115,
                'city_id' => 16,
                'province_id' => 3,
                'name' => '绩溪县',
                'status' => 1,
            ),
            115 => 
            array (
                'id' => 116,
                'city_id' => 16,
                'province_id' => 3,
                'name' => '旌德县',
                'status' => 1,
            ),
            116 => 
            array (
                'id' => 117,
                'city_id' => 17,
                'province_id' => 3,
                'name' => '涡阳县',
                'status' => 1,
            ),
            117 => 
            array (
                'id' => 118,
                'city_id' => 17,
                'province_id' => 3,
                'name' => '蒙城县',
                'status' => 1,
            ),
            118 => 
            array (
                'id' => 119,
                'city_id' => 17,
                'province_id' => 3,
                'name' => '利辛县',
                'status' => 1,
            ),
            119 => 
            array (
                'id' => 120,
                'city_id' => 17,
                'province_id' => 3,
                'name' => '谯城区',
                'status' => 1,
            ),
            120 => 
            array (
                'id' => 121,
                'city_id' => 18,
                'province_id' => 3,
                'name' => '庐阳区',
                'status' => 1,
            ),
            121 => 
            array (
                'id' => 122,
                'city_id' => 18,
                'province_id' => 3,
                'name' => '瑶海区',
                'status' => 1,
            ),
            122 => 
            array (
                'id' => 123,
                'city_id' => 18,
                'province_id' => 3,
                'name' => '蜀山区',
                'status' => 1,
            ),
            123 => 
            array (
                'id' => 124,
                'city_id' => 18,
                'province_id' => 3,
                'name' => '包河区',
                'status' => 1,
            ),
            124 => 
            array (
                'id' => 125,
                'city_id' => 18,
                'province_id' => 3,
                'name' => '长丰县',
                'status' => 1,
            ),
            125 => 
            array (
                'id' => 126,
                'city_id' => 18,
                'province_id' => 3,
                'name' => '肥东县',
                'status' => 1,
            ),
            126 => 
            array (
                'id' => 127,
                'city_id' => 18,
                'province_id' => 3,
                'name' => '肥西县',
                'status' => 1,
            ),
            127 => 
            array (
                'id' => 128,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '鼓楼区',
                'status' => 1,
            ),
            128 => 
            array (
                'id' => 129,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '台江区',
                'status' => 1,
            ),
            129 => 
            array (
                'id' => 130,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '仓山区',
                'status' => 1,
            ),
            130 => 
            array (
                'id' => 131,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '马尾区',
                'status' => 1,
            ),
            131 => 
            array (
                'id' => 132,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '晋安区',
                'status' => 1,
            ),
            132 => 
            array (
                'id' => 133,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '福清市',
                'status' => 1,
            ),
            133 => 
            array (
                'id' => 134,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '长乐市',
                'status' => 1,
            ),
            134 => 
            array (
                'id' => 135,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '闽侯县',
                'status' => 1,
            ),
            135 => 
            array (
                'id' => 136,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '连江县',
                'status' => 1,
            ),
            136 => 
            array (
                'id' => 137,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '罗源县',
                'status' => 1,
            ),
            137 => 
            array (
                'id' => 138,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '闽清县',
                'status' => 1,
            ),
            138 => 
            array (
                'id' => 139,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '永泰县',
                'status' => 1,
            ),
            139 => 
            array (
                'id' => 140,
                'city_id' => 19,
                'province_id' => 4,
                'name' => '平潭县',
                'status' => 1,
            ),
            140 => 
            array (
                'id' => 141,
                'city_id' => 20,
                'province_id' => 4,
                'name' => '新罗区',
                'status' => 1,
            ),
            141 => 
            array (
                'id' => 142,
                'city_id' => 20,
                'province_id' => 4,
                'name' => '漳平市',
                'status' => 1,
            ),
            142 => 
            array (
                'id' => 143,
                'city_id' => 20,
                'province_id' => 4,
                'name' => '长汀县',
                'status' => 1,
            ),
            143 => 
            array (
                'id' => 144,
                'city_id' => 20,
                'province_id' => 4,
                'name' => '永定县',
                'status' => 1,
            ),
            144 => 
            array (
                'id' => 145,
                'city_id' => 20,
                'province_id' => 4,
                'name' => '上杭县',
                'status' => 1,
            ),
            145 => 
            array (
                'id' => 146,
                'city_id' => 20,
                'province_id' => 4,
                'name' => '武平县',
                'status' => 1,
            ),
            146 => 
            array (
                'id' => 147,
                'city_id' => 20,
                'province_id' => 4,
                'name' => '连城县',
                'status' => 1,
            ),
            147 => 
            array (
                'id' => 148,
                'city_id' => 21,
                'province_id' => 4,
                'name' => '延平区',
                'status' => 1,
            ),
            148 => 
            array (
                'id' => 149,
                'city_id' => 21,
                'province_id' => 4,
                'name' => '邵武市',
                'status' => 1,
            ),
            149 => 
            array (
                'id' => 150,
                'city_id' => 21,
                'province_id' => 4,
                'name' => '武夷山市',
                'status' => 1,
            ),
            150 => 
            array (
                'id' => 151,
                'city_id' => 21,
                'province_id' => 4,
                'name' => '建瓯市',
                'status' => 1,
            ),
            151 => 
            array (
                'id' => 152,
                'city_id' => 21,
                'province_id' => 4,
                'name' => '建阳市',
                'status' => 1,
            ),
            152 => 
            array (
                'id' => 153,
                'city_id' => 21,
                'province_id' => 4,
                'name' => '顺昌县',
                'status' => 1,
            ),
            153 => 
            array (
                'id' => 154,
                'city_id' => 21,
                'province_id' => 4,
                'name' => '浦城县',
                'status' => 1,
            ),
            154 => 
            array (
                'id' => 155,
                'city_id' => 21,
                'province_id' => 4,
                'name' => '光泽县',
                'status' => 1,
            ),
            155 => 
            array (
                'id' => 156,
                'city_id' => 21,
                'province_id' => 4,
                'name' => '松溪县',
                'status' => 1,
            ),
            156 => 
            array (
                'id' => 157,
                'city_id' => 21,
                'province_id' => 4,
                'name' => '政和县',
                'status' => 1,
            ),
            157 => 
            array (
                'id' => 158,
                'city_id' => 22,
                'province_id' => 4,
                'name' => '蕉城区',
                'status' => 1,
            ),
            158 => 
            array (
                'id' => 159,
                'city_id' => 22,
                'province_id' => 4,
                'name' => '福安市',
                'status' => 1,
            ),
            159 => 
            array (
                'id' => 160,
                'city_id' => 22,
                'province_id' => 4,
                'name' => '福鼎市',
                'status' => 1,
            ),
            160 => 
            array (
                'id' => 161,
                'city_id' => 22,
                'province_id' => 4,
                'name' => '霞浦县',
                'status' => 1,
            ),
            161 => 
            array (
                'id' => 162,
                'city_id' => 22,
                'province_id' => 4,
                'name' => '古田县',
                'status' => 1,
            ),
            162 => 
            array (
                'id' => 163,
                'city_id' => 22,
                'province_id' => 4,
                'name' => '屏南县',
                'status' => 1,
            ),
            163 => 
            array (
                'id' => 164,
                'city_id' => 22,
                'province_id' => 4,
                'name' => '寿宁县',
                'status' => 1,
            ),
            164 => 
            array (
                'id' => 165,
                'city_id' => 22,
                'province_id' => 4,
                'name' => '周宁县',
                'status' => 1,
            ),
            165 => 
            array (
                'id' => 166,
                'city_id' => 22,
                'province_id' => 4,
                'name' => '柘荣县',
                'status' => 1,
            ),
            166 => 
            array (
                'id' => 167,
                'city_id' => 23,
                'province_id' => 4,
                'name' => '城厢区',
                'status' => 1,
            ),
            167 => 
            array (
                'id' => 168,
                'city_id' => 23,
                'province_id' => 4,
                'name' => '涵江区',
                'status' => 1,
            ),
            168 => 
            array (
                'id' => 169,
                'city_id' => 23,
                'province_id' => 4,
                'name' => '荔城区',
                'status' => 1,
            ),
            169 => 
            array (
                'id' => 170,
                'city_id' => 23,
                'province_id' => 4,
                'name' => '秀屿区',
                'status' => 1,
            ),
            170 => 
            array (
                'id' => 171,
                'city_id' => 23,
                'province_id' => 4,
                'name' => '仙游县',
                'status' => 1,
            ),
            171 => 
            array (
                'id' => 172,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '鲤城区',
                'status' => 1,
            ),
            172 => 
            array (
                'id' => 173,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '丰泽区',
                'status' => 1,
            ),
            173 => 
            array (
                'id' => 174,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '洛江区',
                'status' => 1,
            ),
            174 => 
            array (
                'id' => 175,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '清濛开发区',
                'status' => 1,
            ),
            175 => 
            array (
                'id' => 176,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '泉港区',
                'status' => 1,
            ),
            176 => 
            array (
                'id' => 177,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '石狮市',
                'status' => 1,
            ),
            177 => 
            array (
                'id' => 178,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '晋江市',
                'status' => 1,
            ),
            178 => 
            array (
                'id' => 179,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '南安市',
                'status' => 1,
            ),
            179 => 
            array (
                'id' => 180,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '惠安县',
                'status' => 1,
            ),
            180 => 
            array (
                'id' => 181,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '安溪县',
                'status' => 1,
            ),
            181 => 
            array (
                'id' => 182,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '永春县',
                'status' => 1,
            ),
            182 => 
            array (
                'id' => 183,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '德化县',
                'status' => 1,
            ),
            183 => 
            array (
                'id' => 184,
                'city_id' => 24,
                'province_id' => 4,
                'name' => '金门县',
                'status' => 1,
            ),
            184 => 
            array (
                'id' => 185,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '梅列区',
                'status' => 1,
            ),
            185 => 
            array (
                'id' => 186,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '三元区',
                'status' => 1,
            ),
            186 => 
            array (
                'id' => 187,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '永安市',
                'status' => 1,
            ),
            187 => 
            array (
                'id' => 188,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '明溪县',
                'status' => 1,
            ),
            188 => 
            array (
                'id' => 189,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '清流县',
                'status' => 1,
            ),
            189 => 
            array (
                'id' => 190,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '宁化县',
                'status' => 1,
            ),
            190 => 
            array (
                'id' => 191,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '大田县',
                'status' => 1,
            ),
            191 => 
            array (
                'id' => 192,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '尤溪县',
                'status' => 1,
            ),
            192 => 
            array (
                'id' => 193,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '沙县',
                'status' => 1,
            ),
            193 => 
            array (
                'id' => 194,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '将乐县',
                'status' => 1,
            ),
            194 => 
            array (
                'id' => 195,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '泰宁县',
                'status' => 1,
            ),
            195 => 
            array (
                'id' => 196,
                'city_id' => 25,
                'province_id' => 4,
                'name' => '建宁县',
                'status' => 1,
            ),
            196 => 
            array (
                'id' => 197,
                'city_id' => 26,
                'province_id' => 4,
                'name' => '思明区',
                'status' => 1,
            ),
            197 => 
            array (
                'id' => 198,
                'city_id' => 26,
                'province_id' => 4,
                'name' => '海沧区',
                'status' => 1,
            ),
            198 => 
            array (
                'id' => 199,
                'city_id' => 26,
                'province_id' => 4,
                'name' => '湖里区',
                'status' => 1,
            ),
            199 => 
            array (
                'id' => 200,
                'city_id' => 26,
                'province_id' => 4,
                'name' => '集美区',
                'status' => 1,
            ),
            200 => 
            array (
                'id' => 201,
                'city_id' => 26,
                'province_id' => 4,
                'name' => '同安区',
                'status' => 1,
            ),
            201 => 
            array (
                'id' => 202,
                'city_id' => 26,
                'province_id' => 4,
                'name' => '翔安区',
                'status' => 1,
            ),
            202 => 
            array (
                'id' => 203,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '芗城区',
                'status' => 1,
            ),
            203 => 
            array (
                'id' => 204,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '龙文区',
                'status' => 1,
            ),
            204 => 
            array (
                'id' => 205,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '龙海市',
                'status' => 1,
            ),
            205 => 
            array (
                'id' => 206,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '云霄县',
                'status' => 1,
            ),
            206 => 
            array (
                'id' => 207,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '漳浦县',
                'status' => 1,
            ),
            207 => 
            array (
                'id' => 208,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '诏安县',
                'status' => 1,
            ),
            208 => 
            array (
                'id' => 209,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '长泰县',
                'status' => 1,
            ),
            209 => 
            array (
                'id' => 210,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '东山县',
                'status' => 1,
            ),
            210 => 
            array (
                'id' => 211,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '南靖县',
                'status' => 1,
            ),
            211 => 
            array (
                'id' => 212,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '平和县',
                'status' => 1,
            ),
            212 => 
            array (
                'id' => 213,
                'city_id' => 27,
                'province_id' => 4,
                'name' => '华安县',
                'status' => 1,
            ),
            213 => 
            array (
                'id' => 214,
                'city_id' => 28,
                'province_id' => 5,
                'name' => '皋兰县',
                'status' => 1,
            ),
            214 => 
            array (
                'id' => 215,
                'city_id' => 28,
                'province_id' => 5,
                'name' => '城关区',
                'status' => 1,
            ),
            215 => 
            array (
                'id' => 216,
                'city_id' => 28,
                'province_id' => 5,
                'name' => '七里河区',
                'status' => 1,
            ),
            216 => 
            array (
                'id' => 217,
                'city_id' => 28,
                'province_id' => 5,
                'name' => '西固区',
                'status' => 1,
            ),
            217 => 
            array (
                'id' => 218,
                'city_id' => 28,
                'province_id' => 5,
                'name' => '安宁区',
                'status' => 1,
            ),
            218 => 
            array (
                'id' => 219,
                'city_id' => 28,
                'province_id' => 5,
                'name' => '红古区',
                'status' => 1,
            ),
            219 => 
            array (
                'id' => 220,
                'city_id' => 28,
                'province_id' => 5,
                'name' => '永登县',
                'status' => 1,
            ),
            220 => 
            array (
                'id' => 221,
                'city_id' => 28,
                'province_id' => 5,
                'name' => '榆中县',
                'status' => 1,
            ),
            221 => 
            array (
                'id' => 222,
                'city_id' => 29,
                'province_id' => 5,
                'name' => '白银区',
                'status' => 1,
            ),
            222 => 
            array (
                'id' => 223,
                'city_id' => 29,
                'province_id' => 5,
                'name' => '平川区',
                'status' => 1,
            ),
            223 => 
            array (
                'id' => 224,
                'city_id' => 29,
                'province_id' => 5,
                'name' => '会宁县',
                'status' => 1,
            ),
            224 => 
            array (
                'id' => 225,
                'city_id' => 29,
                'province_id' => 5,
                'name' => '景泰县',
                'status' => 1,
            ),
            225 => 
            array (
                'id' => 226,
                'city_id' => 29,
                'province_id' => 5,
                'name' => '靖远县',
                'status' => 1,
            ),
            226 => 
            array (
                'id' => 227,
                'city_id' => 30,
                'province_id' => 5,
                'name' => '临洮县',
                'status' => 1,
            ),
            227 => 
            array (
                'id' => 228,
                'city_id' => 30,
                'province_id' => 5,
                'name' => '陇西县',
                'status' => 1,
            ),
            228 => 
            array (
                'id' => 229,
                'city_id' => 30,
                'province_id' => 5,
                'name' => '通渭县',
                'status' => 1,
            ),
            229 => 
            array (
                'id' => 230,
                'city_id' => 30,
                'province_id' => 5,
                'name' => '渭源县',
                'status' => 1,
            ),
            230 => 
            array (
                'id' => 231,
                'city_id' => 30,
                'province_id' => 5,
                'name' => '漳县',
                'status' => 1,
            ),
            231 => 
            array (
                'id' => 232,
                'city_id' => 30,
                'province_id' => 5,
                'name' => '岷县',
                'status' => 1,
            ),
            232 => 
            array (
                'id' => 233,
                'city_id' => 30,
                'province_id' => 5,
                'name' => '安定区',
                'status' => 1,
            ),
            233 => 
            array (
                'id' => 234,
                'city_id' => 30,
                'province_id' => 5,
                'name' => '安定区',
                'status' => 1,
            ),
            234 => 
            array (
                'id' => 235,
                'city_id' => 31,
                'province_id' => 5,
                'name' => '合作市',
                'status' => 1,
            ),
            235 => 
            array (
                'id' => 236,
                'city_id' => 31,
                'province_id' => 5,
                'name' => '临潭县',
                'status' => 1,
            ),
            236 => 
            array (
                'id' => 237,
                'city_id' => 31,
                'province_id' => 5,
                'name' => '卓尼县',
                'status' => 1,
            ),
            237 => 
            array (
                'id' => 238,
                'city_id' => 31,
                'province_id' => 5,
                'name' => '舟曲县',
                'status' => 1,
            ),
            238 => 
            array (
                'id' => 239,
                'city_id' => 31,
                'province_id' => 5,
                'name' => '迭部县',
                'status' => 1,
            ),
            239 => 
            array (
                'id' => 240,
                'city_id' => 31,
                'province_id' => 5,
                'name' => '玛曲县',
                'status' => 1,
            ),
            240 => 
            array (
                'id' => 241,
                'city_id' => 31,
                'province_id' => 5,
                'name' => '碌曲县',
                'status' => 1,
            ),
            241 => 
            array (
                'id' => 242,
                'city_id' => 31,
                'province_id' => 5,
                'name' => '夏河县',
                'status' => 1,
            ),
            242 => 
            array (
                'id' => 243,
                'city_id' => 32,
                'province_id' => 5,
                'name' => '嘉峪关市',
                'status' => 1,
            ),
            243 => 
            array (
                'id' => 244,
                'city_id' => 33,
                'province_id' => 5,
                'name' => '金川区',
                'status' => 1,
            ),
            244 => 
            array (
                'id' => 245,
                'city_id' => 33,
                'province_id' => 5,
                'name' => '永昌县',
                'status' => 1,
            ),
            245 => 
            array (
                'id' => 246,
                'city_id' => 34,
                'province_id' => 5,
                'name' => '肃州区',
                'status' => 1,
            ),
            246 => 
            array (
                'id' => 247,
                'city_id' => 34,
                'province_id' => 5,
                'name' => '玉门市',
                'status' => 1,
            ),
            247 => 
            array (
                'id' => 248,
                'city_id' => 34,
                'province_id' => 5,
                'name' => '敦煌市',
                'status' => 1,
            ),
            248 => 
            array (
                'id' => 249,
                'city_id' => 34,
                'province_id' => 5,
                'name' => '金塔县',
                'status' => 1,
            ),
            249 => 
            array (
                'id' => 250,
                'city_id' => 34,
                'province_id' => 5,
                'name' => '瓜州县',
                'status' => 1,
            ),
            250 => 
            array (
                'id' => 251,
                'city_id' => 34,
                'province_id' => 5,
                'name' => '肃北',
                'status' => 1,
            ),
            251 => 
            array (
                'id' => 252,
                'city_id' => 34,
                'province_id' => 5,
                'name' => '阿克塞',
                'status' => 1,
            ),
            252 => 
            array (
                'id' => 253,
                'city_id' => 35,
                'province_id' => 5,
                'name' => '临夏市',
                'status' => 1,
            ),
            253 => 
            array (
                'id' => 254,
                'city_id' => 35,
                'province_id' => 5,
                'name' => '临夏县',
                'status' => 1,
            ),
            254 => 
            array (
                'id' => 255,
                'city_id' => 35,
                'province_id' => 5,
                'name' => '康乐县',
                'status' => 1,
            ),
            255 => 
            array (
                'id' => 256,
                'city_id' => 35,
                'province_id' => 5,
                'name' => '永靖县',
                'status' => 1,
            ),
            256 => 
            array (
                'id' => 257,
                'city_id' => 35,
                'province_id' => 5,
                'name' => '广河县',
                'status' => 1,
            ),
            257 => 
            array (
                'id' => 258,
                'city_id' => 35,
                'province_id' => 5,
                'name' => '和政县',
                'status' => 1,
            ),
            258 => 
            array (
                'id' => 259,
                'city_id' => 35,
                'province_id' => 5,
                'name' => '东乡族自治县',
                'status' => 1,
            ),
            259 => 
            array (
                'id' => 260,
                'city_id' => 35,
                'province_id' => 5,
                'name' => '积石山',
                'status' => 1,
            ),
            260 => 
            array (
                'id' => 261,
                'city_id' => 36,
                'province_id' => 5,
                'name' => '成县',
                'status' => 1,
            ),
            261 => 
            array (
                'id' => 262,
                'city_id' => 36,
                'province_id' => 5,
                'name' => '徽县',
                'status' => 1,
            ),
            262 => 
            array (
                'id' => 263,
                'city_id' => 36,
                'province_id' => 5,
                'name' => '康县',
                'status' => 1,
            ),
            263 => 
            array (
                'id' => 264,
                'city_id' => 36,
                'province_id' => 5,
                'name' => '礼县',
                'status' => 1,
            ),
            264 => 
            array (
                'id' => 265,
                'city_id' => 36,
                'province_id' => 5,
                'name' => '两当县',
                'status' => 1,
            ),
            265 => 
            array (
                'id' => 266,
                'city_id' => 36,
                'province_id' => 5,
                'name' => '文县',
                'status' => 1,
            ),
            266 => 
            array (
                'id' => 267,
                'city_id' => 36,
                'province_id' => 5,
                'name' => '西和县',
                'status' => 1,
            ),
            267 => 
            array (
                'id' => 268,
                'city_id' => 36,
                'province_id' => 5,
                'name' => '宕昌县',
                'status' => 1,
            ),
            268 => 
            array (
                'id' => 269,
                'city_id' => 36,
                'province_id' => 5,
                'name' => '武都区',
                'status' => 1,
            ),
            269 => 
            array (
                'id' => 270,
                'city_id' => 37,
                'province_id' => 5,
                'name' => '崇信县',
                'status' => 1,
            ),
            270 => 
            array (
                'id' => 271,
                'city_id' => 37,
                'province_id' => 5,
                'name' => '华亭县',
                'status' => 1,
            ),
            271 => 
            array (
                'id' => 272,
                'city_id' => 37,
                'province_id' => 5,
                'name' => '静宁县',
                'status' => 1,
            ),
            272 => 
            array (
                'id' => 273,
                'city_id' => 37,
                'province_id' => 5,
                'name' => '灵台县',
                'status' => 1,
            ),
            273 => 
            array (
                'id' => 274,
                'city_id' => 37,
                'province_id' => 5,
                'name' => '崆峒区',
                'status' => 1,
            ),
            274 => 
            array (
                'id' => 275,
                'city_id' => 37,
                'province_id' => 5,
                'name' => '庄浪县',
                'status' => 1,
            ),
            275 => 
            array (
                'id' => 276,
                'city_id' => 37,
                'province_id' => 5,
                'name' => '泾川县',
                'status' => 1,
            ),
            276 => 
            array (
                'id' => 277,
                'city_id' => 38,
                'province_id' => 5,
                'name' => '合水县',
                'status' => 1,
            ),
            277 => 
            array (
                'id' => 278,
                'city_id' => 38,
                'province_id' => 5,
                'name' => '华池县',
                'status' => 1,
            ),
            278 => 
            array (
                'id' => 279,
                'city_id' => 38,
                'province_id' => 5,
                'name' => '环县',
                'status' => 1,
            ),
            279 => 
            array (
                'id' => 280,
                'city_id' => 38,
                'province_id' => 5,
                'name' => '宁县',
                'status' => 1,
            ),
            280 => 
            array (
                'id' => 281,
                'city_id' => 38,
                'province_id' => 5,
                'name' => '庆城县',
                'status' => 1,
            ),
            281 => 
            array (
                'id' => 282,
                'city_id' => 38,
                'province_id' => 5,
                'name' => '西峰区',
                'status' => 1,
            ),
            282 => 
            array (
                'id' => 283,
                'city_id' => 38,
                'province_id' => 5,
                'name' => '镇原县',
                'status' => 1,
            ),
            283 => 
            array (
                'id' => 284,
                'city_id' => 38,
                'province_id' => 5,
                'name' => '正宁县',
                'status' => 1,
            ),
            284 => 
            array (
                'id' => 285,
                'city_id' => 39,
                'province_id' => 5,
                'name' => '甘谷县',
                'status' => 1,
            ),
            285 => 
            array (
                'id' => 286,
                'city_id' => 39,
                'province_id' => 5,
                'name' => '秦安县',
                'status' => 1,
            ),
            286 => 
            array (
                'id' => 287,
                'city_id' => 39,
                'province_id' => 5,
                'name' => '清水县',
                'status' => 1,
            ),
            287 => 
            array (
                'id' => 288,
                'city_id' => 39,
                'province_id' => 5,
                'name' => '秦州区',
                'status' => 1,
            ),
            288 => 
            array (
                'id' => 289,
                'city_id' => 39,
                'province_id' => 5,
                'name' => '麦积区',
                'status' => 1,
            ),
            289 => 
            array (
                'id' => 290,
                'city_id' => 39,
                'province_id' => 5,
                'name' => '武山县',
                'status' => 1,
            ),
            290 => 
            array (
                'id' => 291,
                'city_id' => 39,
                'province_id' => 5,
                'name' => '张家川',
                'status' => 1,
            ),
            291 => 
            array (
                'id' => 292,
                'city_id' => 40,
                'province_id' => 5,
                'name' => '古浪县',
                'status' => 1,
            ),
            292 => 
            array (
                'id' => 293,
                'city_id' => 40,
                'province_id' => 5,
                'name' => '民勤县',
                'status' => 1,
            ),
            293 => 
            array (
                'id' => 294,
                'city_id' => 40,
                'province_id' => 5,
                'name' => '天祝',
                'status' => 1,
            ),
            294 => 
            array (
                'id' => 295,
                'city_id' => 40,
                'province_id' => 5,
                'name' => '凉州区',
                'status' => 1,
            ),
            295 => 
            array (
                'id' => 296,
                'city_id' => 41,
                'province_id' => 5,
                'name' => '高台县',
                'status' => 1,
            ),
            296 => 
            array (
                'id' => 297,
                'city_id' => 41,
                'province_id' => 5,
                'name' => '临泽县',
                'status' => 1,
            ),
            297 => 
            array (
                'id' => 298,
                'city_id' => 41,
                'province_id' => 5,
                'name' => '民乐县',
                'status' => 1,
            ),
            298 => 
            array (
                'id' => 299,
                'city_id' => 41,
                'province_id' => 5,
                'name' => '山丹县',
                'status' => 1,
            ),
            299 => 
            array (
                'id' => 300,
                'city_id' => 41,
                'province_id' => 5,
                'name' => '肃南',
                'status' => 1,
            ),
            300 => 
            array (
                'id' => 301,
                'city_id' => 41,
                'province_id' => 5,
                'name' => '甘州区',
                'status' => 1,
            ),
            301 => 
            array (
                'id' => 302,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '从化市',
                'status' => 1,
            ),
            302 => 
            array (
                'id' => 303,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '天河区',
                'status' => 1,
            ),
            303 => 
            array (
                'id' => 304,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '东山区',
                'status' => 1,
            ),
            304 => 
            array (
                'id' => 305,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '白云区',
                'status' => 1,
            ),
            305 => 
            array (
                'id' => 306,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '海珠区',
                'status' => 1,
            ),
            306 => 
            array (
                'id' => 307,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '荔湾区',
                'status' => 1,
            ),
            307 => 
            array (
                'id' => 308,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '越秀区',
                'status' => 1,
            ),
            308 => 
            array (
                'id' => 309,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '黄埔区',
                'status' => 1,
            ),
            309 => 
            array (
                'id' => 310,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '番禺区',
                'status' => 1,
            ),
            310 => 
            array (
                'id' => 311,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '花都区',
                'status' => 1,
            ),
            311 => 
            array (
                'id' => 312,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '增城区',
                'status' => 1,
            ),
            312 => 
            array (
                'id' => 313,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '从化区',
                'status' => 1,
            ),
            313 => 
            array (
                'id' => 314,
                'city_id' => 42,
                'province_id' => 6,
                'name' => '市郊',
                'status' => 1,
            ),
            314 => 
            array (
                'id' => 315,
                'city_id' => 43,
                'province_id' => 6,
                'name' => '福田区',
                'status' => 1,
            ),
            315 => 
            array (
                'id' => 316,
                'city_id' => 43,
                'province_id' => 6,
                'name' => '罗湖区',
                'status' => 1,
            ),
            316 => 
            array (
                'id' => 317,
                'city_id' => 43,
                'province_id' => 6,
                'name' => '南山区',
                'status' => 1,
            ),
            317 => 
            array (
                'id' => 318,
                'city_id' => 43,
                'province_id' => 6,
                'name' => '宝安区',
                'status' => 1,
            ),
            318 => 
            array (
                'id' => 319,
                'city_id' => 43,
                'province_id' => 6,
                'name' => '龙岗区',
                'status' => 1,
            ),
            319 => 
            array (
                'id' => 320,
                'city_id' => 43,
                'province_id' => 6,
                'name' => '盐田区',
                'status' => 1,
            ),
            320 => 
            array (
                'id' => 321,
                'city_id' => 44,
                'province_id' => 6,
                'name' => '湘桥区',
                'status' => 1,
            ),
            321 => 
            array (
                'id' => 322,
                'city_id' => 44,
                'province_id' => 6,
                'name' => '潮安县',
                'status' => 1,
            ),
            322 => 
            array (
                'id' => 323,
                'city_id' => 44,
                'province_id' => 6,
                'name' => '饶平县',
                'status' => 1,
            ),
            323 => 
            array (
                'id' => 324,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '南城区',
                'status' => 1,
            ),
            324 => 
            array (
                'id' => 325,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '东城区',
                'status' => 1,
            ),
            325 => 
            array (
                'id' => 326,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '万江区',
                'status' => 1,
            ),
            326 => 
            array (
                'id' => 327,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '莞城区',
                'status' => 1,
            ),
            327 => 
            array (
                'id' => 328,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '石龙镇',
                'status' => 1,
            ),
            328 => 
            array (
                'id' => 329,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '虎门镇',
                'status' => 1,
            ),
            329 => 
            array (
                'id' => 330,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '麻涌镇',
                'status' => 1,
            ),
            330 => 
            array (
                'id' => 331,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '道滘镇',
                'status' => 1,
            ),
            331 => 
            array (
                'id' => 332,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '石碣镇',
                'status' => 1,
            ),
            332 => 
            array (
                'id' => 333,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '沙田镇',
                'status' => 1,
            ),
            333 => 
            array (
                'id' => 334,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '望牛墩镇',
                'status' => 1,
            ),
            334 => 
            array (
                'id' => 335,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '洪梅镇',
                'status' => 1,
            ),
            335 => 
            array (
                'id' => 336,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '茶山镇',
                'status' => 1,
            ),
            336 => 
            array (
                'id' => 337,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '寮步镇',
                'status' => 1,
            ),
            337 => 
            array (
                'id' => 338,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '大岭山镇',
                'status' => 1,
            ),
            338 => 
            array (
                'id' => 339,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '大朗镇',
                'status' => 1,
            ),
            339 => 
            array (
                'id' => 340,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '黄江镇',
                'status' => 1,
            ),
            340 => 
            array (
                'id' => 341,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '樟木头',
                'status' => 1,
            ),
            341 => 
            array (
                'id' => 342,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '凤岗镇',
                'status' => 1,
            ),
            342 => 
            array (
                'id' => 343,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '塘厦镇',
                'status' => 1,
            ),
            343 => 
            array (
                'id' => 344,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '谢岗镇',
                'status' => 1,
            ),
            344 => 
            array (
                'id' => 345,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '厚街镇',
                'status' => 1,
            ),
            345 => 
            array (
                'id' => 346,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '清溪镇',
                'status' => 1,
            ),
            346 => 
            array (
                'id' => 347,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '常平镇',
                'status' => 1,
            ),
            347 => 
            array (
                'id' => 348,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '桥头镇',
                'status' => 1,
            ),
            348 => 
            array (
                'id' => 349,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '横沥镇',
                'status' => 1,
            ),
            349 => 
            array (
                'id' => 350,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '东坑镇',
                'status' => 1,
            ),
            350 => 
            array (
                'id' => 351,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '企石镇',
                'status' => 1,
            ),
            351 => 
            array (
                'id' => 352,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '石排镇',
                'status' => 1,
            ),
            352 => 
            array (
                'id' => 353,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '长安镇',
                'status' => 1,
            ),
            353 => 
            array (
                'id' => 354,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '中堂镇',
                'status' => 1,
            ),
            354 => 
            array (
                'id' => 355,
                'city_id' => 45,
                'province_id' => 6,
                'name' => '高埗镇',
                'status' => 1,
            ),
            355 => 
            array (
                'id' => 356,
                'city_id' => 46,
                'province_id' => 6,
                'name' => '禅城区',
                'status' => 1,
            ),
            356 => 
            array (
                'id' => 357,
                'city_id' => 46,
                'province_id' => 6,
                'name' => '南海区',
                'status' => 1,
            ),
            357 => 
            array (
                'id' => 358,
                'city_id' => 46,
                'province_id' => 6,
                'name' => '顺德区',
                'status' => 1,
            ),
            358 => 
            array (
                'id' => 359,
                'city_id' => 46,
                'province_id' => 6,
                'name' => '三水区',
                'status' => 1,
            ),
            359 => 
            array (
                'id' => 360,
                'city_id' => 46,
                'province_id' => 6,
                'name' => '高明区',
                'status' => 1,
            ),
            360 => 
            array (
                'id' => 361,
                'city_id' => 47,
                'province_id' => 6,
                'name' => '东源县',
                'status' => 1,
            ),
            361 => 
            array (
                'id' => 362,
                'city_id' => 47,
                'province_id' => 6,
                'name' => '和平县',
                'status' => 1,
            ),
            362 => 
            array (
                'id' => 363,
                'city_id' => 47,
                'province_id' => 6,
                'name' => '源城区',
                'status' => 1,
            ),
            363 => 
            array (
                'id' => 364,
                'city_id' => 47,
                'province_id' => 6,
                'name' => '连平县',
                'status' => 1,
            ),
            364 => 
            array (
                'id' => 365,
                'city_id' => 47,
                'province_id' => 6,
                'name' => '龙川县',
                'status' => 1,
            ),
            365 => 
            array (
                'id' => 366,
                'city_id' => 47,
                'province_id' => 6,
                'name' => '紫金县',
                'status' => 1,
            ),
            366 => 
            array (
                'id' => 367,
                'city_id' => 48,
                'province_id' => 6,
                'name' => '惠阳区',
                'status' => 1,
            ),
            367 => 
            array (
                'id' => 368,
                'city_id' => 48,
                'province_id' => 6,
                'name' => '惠城区',
                'status' => 1,
            ),
            368 => 
            array (
                'id' => 369,
                'city_id' => 48,
                'province_id' => 6,
                'name' => '大亚湾',
                'status' => 1,
            ),
            369 => 
            array (
                'id' => 370,
                'city_id' => 48,
                'province_id' => 6,
                'name' => '博罗县',
                'status' => 1,
            ),
            370 => 
            array (
                'id' => 371,
                'city_id' => 48,
                'province_id' => 6,
                'name' => '惠东县',
                'status' => 1,
            ),
            371 => 
            array (
                'id' => 372,
                'city_id' => 48,
                'province_id' => 6,
                'name' => '龙门县',
                'status' => 1,
            ),
            372 => 
            array (
                'id' => 373,
                'city_id' => 49,
                'province_id' => 6,
                'name' => '江海区',
                'status' => 1,
            ),
            373 => 
            array (
                'id' => 374,
                'city_id' => 49,
                'province_id' => 6,
                'name' => '蓬江区',
                'status' => 1,
            ),
            374 => 
            array (
                'id' => 375,
                'city_id' => 49,
                'province_id' => 6,
                'name' => '新会区',
                'status' => 1,
            ),
            375 => 
            array (
                'id' => 376,
                'city_id' => 49,
                'province_id' => 6,
                'name' => '台山市',
                'status' => 1,
            ),
            376 => 
            array (
                'id' => 377,
                'city_id' => 49,
                'province_id' => 6,
                'name' => '开平市',
                'status' => 1,
            ),
            377 => 
            array (
                'id' => 378,
                'city_id' => 49,
                'province_id' => 6,
                'name' => '鹤山市',
                'status' => 1,
            ),
            378 => 
            array (
                'id' => 379,
                'city_id' => 49,
                'province_id' => 6,
                'name' => '恩平市',
                'status' => 1,
            ),
            379 => 
            array (
                'id' => 380,
                'city_id' => 50,
                'province_id' => 6,
                'name' => '榕城区',
                'status' => 1,
            ),
            380 => 
            array (
                'id' => 381,
                'city_id' => 50,
                'province_id' => 6,
                'name' => '普宁市',
                'status' => 1,
            ),
            381 => 
            array (
                'id' => 382,
                'city_id' => 50,
                'province_id' => 6,
                'name' => '揭东县',
                'status' => 1,
            ),
            382 => 
            array (
                'id' => 383,
                'city_id' => 50,
                'province_id' => 6,
                'name' => '揭西县',
                'status' => 1,
            ),
            383 => 
            array (
                'id' => 384,
                'city_id' => 50,
                'province_id' => 6,
                'name' => '惠来县',
                'status' => 1,
            ),
            384 => 
            array (
                'id' => 385,
                'city_id' => 51,
                'province_id' => 6,
                'name' => '茂南区',
                'status' => 1,
            ),
            385 => 
            array (
                'id' => 386,
                'city_id' => 51,
                'province_id' => 6,
                'name' => '茂港区',
                'status' => 1,
            ),
            386 => 
            array (
                'id' => 387,
                'city_id' => 51,
                'province_id' => 6,
                'name' => '高州市',
                'status' => 1,
            ),
            387 => 
            array (
                'id' => 388,
                'city_id' => 51,
                'province_id' => 6,
                'name' => '化州市',
                'status' => 1,
            ),
            388 => 
            array (
                'id' => 389,
                'city_id' => 51,
                'province_id' => 6,
                'name' => '信宜市',
                'status' => 1,
            ),
            389 => 
            array (
                'id' => 390,
                'city_id' => 51,
                'province_id' => 6,
                'name' => '电白县',
                'status' => 1,
            ),
            390 => 
            array (
                'id' => 391,
                'city_id' => 52,
                'province_id' => 6,
                'name' => '梅县',
                'status' => 1,
            ),
            391 => 
            array (
                'id' => 392,
                'city_id' => 52,
                'province_id' => 6,
                'name' => '梅江区',
                'status' => 1,
            ),
            392 => 
            array (
                'id' => 393,
                'city_id' => 52,
                'province_id' => 6,
                'name' => '兴宁市',
                'status' => 1,
            ),
            393 => 
            array (
                'id' => 394,
                'city_id' => 52,
                'province_id' => 6,
                'name' => '大埔县',
                'status' => 1,
            ),
            394 => 
            array (
                'id' => 395,
                'city_id' => 52,
                'province_id' => 6,
                'name' => '丰顺县',
                'status' => 1,
            ),
            395 => 
            array (
                'id' => 396,
                'city_id' => 52,
                'province_id' => 6,
                'name' => '五华县',
                'status' => 1,
            ),
            396 => 
            array (
                'id' => 397,
                'city_id' => 52,
                'province_id' => 6,
                'name' => '平远县',
                'status' => 1,
            ),
            397 => 
            array (
                'id' => 398,
                'city_id' => 52,
                'province_id' => 6,
                'name' => '蕉岭县',
                'status' => 1,
            ),
            398 => 
            array (
                'id' => 399,
                'city_id' => 53,
                'province_id' => 6,
                'name' => '清城区',
                'status' => 1,
            ),
            399 => 
            array (
                'id' => 400,
                'city_id' => 53,
                'province_id' => 6,
                'name' => '英德市',
                'status' => 1,
            ),
            400 => 
            array (
                'id' => 401,
                'city_id' => 53,
                'province_id' => 6,
                'name' => '连州市',
                'status' => 1,
            ),
            401 => 
            array (
                'id' => 402,
                'city_id' => 53,
                'province_id' => 6,
                'name' => '佛冈县',
                'status' => 1,
            ),
            402 => 
            array (
                'id' => 403,
                'city_id' => 53,
                'province_id' => 6,
                'name' => '阳山县',
                'status' => 1,
            ),
            403 => 
            array (
                'id' => 404,
                'city_id' => 53,
                'province_id' => 6,
                'name' => '清新县',
                'status' => 1,
            ),
            404 => 
            array (
                'id' => 405,
                'city_id' => 53,
                'province_id' => 6,
                'name' => '连山',
                'status' => 1,
            ),
            405 => 
            array (
                'id' => 406,
                'city_id' => 53,
                'province_id' => 6,
                'name' => '连南',
                'status' => 1,
            ),
            406 => 
            array (
                'id' => 407,
                'city_id' => 54,
                'province_id' => 6,
                'name' => '南澳县',
                'status' => 1,
            ),
            407 => 
            array (
                'id' => 408,
                'city_id' => 54,
                'province_id' => 6,
                'name' => '潮阳区',
                'status' => 1,
            ),
            408 => 
            array (
                'id' => 409,
                'city_id' => 54,
                'province_id' => 6,
                'name' => '澄海区',
                'status' => 1,
            ),
            409 => 
            array (
                'id' => 410,
                'city_id' => 54,
                'province_id' => 6,
                'name' => '龙湖区',
                'status' => 1,
            ),
            410 => 
            array (
                'id' => 411,
                'city_id' => 54,
                'province_id' => 6,
                'name' => '金平区',
                'status' => 1,
            ),
            411 => 
            array (
                'id' => 412,
                'city_id' => 54,
                'province_id' => 6,
                'name' => '濠江区',
                'status' => 1,
            ),
            412 => 
            array (
                'id' => 413,
                'city_id' => 54,
                'province_id' => 6,
                'name' => '潮南区',
                'status' => 1,
            ),
            413 => 
            array (
                'id' => 414,
                'city_id' => 55,
                'province_id' => 6,
                'name' => '城区',
                'status' => 1,
            ),
            414 => 
            array (
                'id' => 415,
                'city_id' => 55,
                'province_id' => 6,
                'name' => '陆丰市',
                'status' => 1,
            ),
            415 => 
            array (
                'id' => 416,
                'city_id' => 55,
                'province_id' => 6,
                'name' => '海丰县',
                'status' => 1,
            ),
            416 => 
            array (
                'id' => 417,
                'city_id' => 55,
                'province_id' => 6,
                'name' => '陆河县',
                'status' => 1,
            ),
            417 => 
            array (
                'id' => 418,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '曲江县',
                'status' => 1,
            ),
            418 => 
            array (
                'id' => 419,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '浈江区',
                'status' => 1,
            ),
            419 => 
            array (
                'id' => 420,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '武江区',
                'status' => 1,
            ),
            420 => 
            array (
                'id' => 421,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '曲江区',
                'status' => 1,
            ),
            421 => 
            array (
                'id' => 422,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '乐昌市',
                'status' => 1,
            ),
            422 => 
            array (
                'id' => 423,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '南雄市',
                'status' => 1,
            ),
            423 => 
            array (
                'id' => 424,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '始兴县',
                'status' => 1,
            ),
            424 => 
            array (
                'id' => 425,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '仁化县',
                'status' => 1,
            ),
            425 => 
            array (
                'id' => 426,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '翁源县',
                'status' => 1,
            ),
            426 => 
            array (
                'id' => 427,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '新丰县',
                'status' => 1,
            ),
            427 => 
            array (
                'id' => 428,
                'city_id' => 56,
                'province_id' => 6,
                'name' => '乳源',
                'status' => 1,
            ),
            428 => 
            array (
                'id' => 429,
                'city_id' => 57,
                'province_id' => 6,
                'name' => '江城区',
                'status' => 1,
            ),
            429 => 
            array (
                'id' => 430,
                'city_id' => 57,
                'province_id' => 6,
                'name' => '阳春市',
                'status' => 1,
            ),
            430 => 
            array (
                'id' => 431,
                'city_id' => 57,
                'province_id' => 6,
                'name' => '阳西县',
                'status' => 1,
            ),
            431 => 
            array (
                'id' => 432,
                'city_id' => 57,
                'province_id' => 6,
                'name' => '阳东县',
                'status' => 1,
            ),
            432 => 
            array (
                'id' => 433,
                'city_id' => 58,
                'province_id' => 6,
                'name' => '云城区',
                'status' => 1,
            ),
            433 => 
            array (
                'id' => 434,
                'city_id' => 58,
                'province_id' => 6,
                'name' => '罗定市',
                'status' => 1,
            ),
            434 => 
            array (
                'id' => 435,
                'city_id' => 58,
                'province_id' => 6,
                'name' => '新兴县',
                'status' => 1,
            ),
            435 => 
            array (
                'id' => 436,
                'city_id' => 58,
                'province_id' => 6,
                'name' => '郁南县',
                'status' => 1,
            ),
            436 => 
            array (
                'id' => 437,
                'city_id' => 58,
                'province_id' => 6,
                'name' => '云安县',
                'status' => 1,
            ),
            437 => 
            array (
                'id' => 438,
                'city_id' => 59,
                'province_id' => 6,
                'name' => '赤坎区',
                'status' => 1,
            ),
            438 => 
            array (
                'id' => 439,
                'city_id' => 59,
                'province_id' => 6,
                'name' => '霞山区',
                'status' => 1,
            ),
            439 => 
            array (
                'id' => 440,
                'city_id' => 59,
                'province_id' => 6,
                'name' => '坡头区',
                'status' => 1,
            ),
            440 => 
            array (
                'id' => 441,
                'city_id' => 59,
                'province_id' => 6,
                'name' => '麻章区',
                'status' => 1,
            ),
            441 => 
            array (
                'id' => 442,
                'city_id' => 59,
                'province_id' => 6,
                'name' => '廉江市',
                'status' => 1,
            ),
            442 => 
            array (
                'id' => 443,
                'city_id' => 59,
                'province_id' => 6,
                'name' => '雷州市',
                'status' => 1,
            ),
            443 => 
            array (
                'id' => 444,
                'city_id' => 59,
                'province_id' => 6,
                'name' => '吴川市',
                'status' => 1,
            ),
            444 => 
            array (
                'id' => 445,
                'city_id' => 59,
                'province_id' => 6,
                'name' => '遂溪县',
                'status' => 1,
            ),
            445 => 
            array (
                'id' => 446,
                'city_id' => 59,
                'province_id' => 6,
                'name' => '徐闻县',
                'status' => 1,
            ),
            446 => 
            array (
                'id' => 447,
                'city_id' => 60,
                'province_id' => 6,
                'name' => '肇庆市',
                'status' => 1,
            ),
            447 => 
            array (
                'id' => 448,
                'city_id' => 60,
                'province_id' => 6,
                'name' => '高要市',
                'status' => 1,
            ),
            448 => 
            array (
                'id' => 449,
                'city_id' => 60,
                'province_id' => 6,
                'name' => '四会市',
                'status' => 1,
            ),
            449 => 
            array (
                'id' => 450,
                'city_id' => 60,
                'province_id' => 6,
                'name' => '广宁县',
                'status' => 1,
            ),
            450 => 
            array (
                'id' => 451,
                'city_id' => 60,
                'province_id' => 6,
                'name' => '怀集县',
                'status' => 1,
            ),
            451 => 
            array (
                'id' => 452,
                'city_id' => 60,
                'province_id' => 6,
                'name' => '封开县',
                'status' => 1,
            ),
            452 => 
            array (
                'id' => 453,
                'city_id' => 60,
                'province_id' => 6,
                'name' => '德庆县',
                'status' => 1,
            ),
            453 => 
            array (
                'id' => 454,
                'city_id' => 61,
                'province_id' => 6,
                'name' => '石岐街道',
                'status' => 1,
            ),
            454 => 
            array (
                'id' => 455,
                'city_id' => 61,
                'province_id' => 6,
                'name' => '东区街道',
                'status' => 1,
            ),
            455 => 
            array (
                'id' => 456,
                'city_id' => 61,
                'province_id' => 6,
                'name' => '西区街道',
                'status' => 1,
            ),
            456 => 
            array (
                'id' => 457,
                'city_id' => 61,
                'province_id' => 6,
                'name' => '环城街道',
                'status' => 1,
            ),
            457 => 
            array (
                'id' => 458,
                'city_id' => 61,
                'province_id' => 6,
                'name' => '中山港街道',
                'status' => 1,
            ),
            458 => 
            array (
                'id' => 459,
                'city_id' => 61,
                'province_id' => 6,
                'name' => '五桂山街道',
                'status' => 1,
            ),
            459 => 
            array (
                'id' => 460,
                'city_id' => 62,
                'province_id' => 6,
                'name' => '香洲区',
                'status' => 1,
            ),
            460 => 
            array (
                'id' => 461,
                'city_id' => 62,
                'province_id' => 6,
                'name' => '斗门区',
                'status' => 1,
            ),
            461 => 
            array (
                'id' => 462,
                'city_id' => 62,
                'province_id' => 6,
                'name' => '金湾区',
                'status' => 1,
            ),
            462 => 
            array (
                'id' => 463,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '邕宁区',
                'status' => 1,
            ),
            463 => 
            array (
                'id' => 464,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '青秀区',
                'status' => 1,
            ),
            464 => 
            array (
                'id' => 465,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '兴宁区',
                'status' => 1,
            ),
            465 => 
            array (
                'id' => 466,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '良庆区',
                'status' => 1,
            ),
            466 => 
            array (
                'id' => 467,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '西乡塘区',
                'status' => 1,
            ),
            467 => 
            array (
                'id' => 468,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '江南区',
                'status' => 1,
            ),
            468 => 
            array (
                'id' => 469,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '武鸣县',
                'status' => 1,
            ),
            469 => 
            array (
                'id' => 470,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '隆安县',
                'status' => 1,
            ),
            470 => 
            array (
                'id' => 471,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '马山县',
                'status' => 1,
            ),
            471 => 
            array (
                'id' => 472,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '上林县',
                'status' => 1,
            ),
            472 => 
            array (
                'id' => 473,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '宾阳县',
                'status' => 1,
            ),
            473 => 
            array (
                'id' => 474,
                'city_id' => 63,
                'province_id' => 7,
                'name' => '横县',
                'status' => 1,
            ),
            474 => 
            array (
                'id' => 475,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '秀峰区',
                'status' => 1,
            ),
            475 => 
            array (
                'id' => 476,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '叠彩区',
                'status' => 1,
            ),
            476 => 
            array (
                'id' => 477,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '象山区',
                'status' => 1,
            ),
            477 => 
            array (
                'id' => 478,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '七星区',
                'status' => 1,
            ),
            478 => 
            array (
                'id' => 479,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '雁山区',
                'status' => 1,
            ),
            479 => 
            array (
                'id' => 480,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '阳朔县',
                'status' => 1,
            ),
            480 => 
            array (
                'id' => 481,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '临桂县',
                'status' => 1,
            ),
            481 => 
            array (
                'id' => 482,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '灵川县',
                'status' => 1,
            ),
            482 => 
            array (
                'id' => 483,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '全州县',
                'status' => 1,
            ),
            483 => 
            array (
                'id' => 484,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '平乐县',
                'status' => 1,
            ),
            484 => 
            array (
                'id' => 485,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '兴安县',
                'status' => 1,
            ),
            485 => 
            array (
                'id' => 486,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '灌阳县',
                'status' => 1,
            ),
            486 => 
            array (
                'id' => 487,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '荔浦县',
                'status' => 1,
            ),
            487 => 
            array (
                'id' => 488,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '资源县',
                'status' => 1,
            ),
            488 => 
            array (
                'id' => 489,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '永福县',
                'status' => 1,
            ),
            489 => 
            array (
                'id' => 490,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '龙胜',
                'status' => 1,
            ),
            490 => 
            array (
                'id' => 491,
                'city_id' => 64,
                'province_id' => 7,
                'name' => '恭城',
                'status' => 1,
            ),
            491 => 
            array (
                'id' => 492,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '右江区',
                'status' => 1,
            ),
            492 => 
            array (
                'id' => 493,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '凌云县',
                'status' => 1,
            ),
            493 => 
            array (
                'id' => 494,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '平果县',
                'status' => 1,
            ),
            494 => 
            array (
                'id' => 495,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '西林县',
                'status' => 1,
            ),
            495 => 
            array (
                'id' => 496,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '乐业县',
                'status' => 1,
            ),
            496 => 
            array (
                'id' => 497,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '德保县',
                'status' => 1,
            ),
            497 => 
            array (
                'id' => 498,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '田林县',
                'status' => 1,
            ),
            498 => 
            array (
                'id' => 499,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '田阳县',
                'status' => 1,
            ),
            499 => 
            array (
                'id' => 500,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '靖西县',
                'status' => 1,
            ),
        ));
        \DB::table('geo_districts')->insert(array (
            0 => 
            array (
                'id' => 501,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '田东县',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 502,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '那坡县',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 503,
                'city_id' => 65,
                'province_id' => 7,
                'name' => '隆林',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 504,
                'city_id' => 66,
                'province_id' => 7,
                'name' => '海城区',
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 505,
                'city_id' => 66,
                'province_id' => 7,
                'name' => '银海区',
                'status' => 1,
            ),
            5 => 
            array (
                'id' => 506,
                'city_id' => 66,
                'province_id' => 7,
                'name' => '铁山港区',
                'status' => 1,
            ),
            6 => 
            array (
                'id' => 507,
                'city_id' => 66,
                'province_id' => 7,
                'name' => '合浦县',
                'status' => 1,
            ),
            7 => 
            array (
                'id' => 508,
                'city_id' => 67,
                'province_id' => 7,
                'name' => '江州区',
                'status' => 1,
            ),
            8 => 
            array (
                'id' => 509,
                'city_id' => 67,
                'province_id' => 7,
                'name' => '凭祥市',
                'status' => 1,
            ),
            9 => 
            array (
                'id' => 510,
                'city_id' => 67,
                'province_id' => 7,
                'name' => '宁明县',
                'status' => 1,
            ),
            10 => 
            array (
                'id' => 511,
                'city_id' => 67,
                'province_id' => 7,
                'name' => '扶绥县',
                'status' => 1,
            ),
            11 => 
            array (
                'id' => 512,
                'city_id' => 67,
                'province_id' => 7,
                'name' => '龙州县',
                'status' => 1,
            ),
            12 => 
            array (
                'id' => 513,
                'city_id' => 67,
                'province_id' => 7,
                'name' => '大新县',
                'status' => 1,
            ),
            13 => 
            array (
                'id' => 514,
                'city_id' => 67,
                'province_id' => 7,
                'name' => '天等县',
                'status' => 1,
            ),
            14 => 
            array (
                'id' => 515,
                'city_id' => 68,
                'province_id' => 7,
                'name' => '港口区',
                'status' => 1,
            ),
            15 => 
            array (
                'id' => 516,
                'city_id' => 68,
                'province_id' => 7,
                'name' => '防城区',
                'status' => 1,
            ),
            16 => 
            array (
                'id' => 517,
                'city_id' => 68,
                'province_id' => 7,
                'name' => '东兴市',
                'status' => 1,
            ),
            17 => 
            array (
                'id' => 518,
                'city_id' => 68,
                'province_id' => 7,
                'name' => '上思县',
                'status' => 1,
            ),
            18 => 
            array (
                'id' => 519,
                'city_id' => 69,
                'province_id' => 7,
                'name' => '港北区',
                'status' => 1,
            ),
            19 => 
            array (
                'id' => 520,
                'city_id' => 69,
                'province_id' => 7,
                'name' => '港南区',
                'status' => 1,
            ),
            20 => 
            array (
                'id' => 521,
                'city_id' => 69,
                'province_id' => 7,
                'name' => '覃塘区',
                'status' => 1,
            ),
            21 => 
            array (
                'id' => 522,
                'city_id' => 69,
                'province_id' => 7,
                'name' => '桂平市',
                'status' => 1,
            ),
            22 => 
            array (
                'id' => 523,
                'city_id' => 69,
                'province_id' => 7,
                'name' => '平南县',
                'status' => 1,
            ),
            23 => 
            array (
                'id' => 524,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '金城江区',
                'status' => 1,
            ),
            24 => 
            array (
                'id' => 525,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '宜州市',
                'status' => 1,
            ),
            25 => 
            array (
                'id' => 526,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '天峨县',
                'status' => 1,
            ),
            26 => 
            array (
                'id' => 527,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '凤山县',
                'status' => 1,
            ),
            27 => 
            array (
                'id' => 528,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '南丹县',
                'status' => 1,
            ),
            28 => 
            array (
                'id' => 529,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '东兰县',
                'status' => 1,
            ),
            29 => 
            array (
                'id' => 530,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '都安',
                'status' => 1,
            ),
            30 => 
            array (
                'id' => 531,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '罗城',
                'status' => 1,
            ),
            31 => 
            array (
                'id' => 532,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '巴马',
                'status' => 1,
            ),
            32 => 
            array (
                'id' => 533,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '环江',
                'status' => 1,
            ),
            33 => 
            array (
                'id' => 534,
                'city_id' => 70,
                'province_id' => 7,
                'name' => '大化',
                'status' => 1,
            ),
            34 => 
            array (
                'id' => 535,
                'city_id' => 71,
                'province_id' => 7,
                'name' => '八步区',
                'status' => 1,
            ),
            35 => 
            array (
                'id' => 536,
                'city_id' => 71,
                'province_id' => 7,
                'name' => '钟山县',
                'status' => 1,
            ),
            36 => 
            array (
                'id' => 537,
                'city_id' => 71,
                'province_id' => 7,
                'name' => '昭平县',
                'status' => 1,
            ),
            37 => 
            array (
                'id' => 538,
                'city_id' => 71,
                'province_id' => 7,
                'name' => '富川',
                'status' => 1,
            ),
            38 => 
            array (
                'id' => 539,
                'city_id' => 72,
                'province_id' => 7,
                'name' => '兴宾区',
                'status' => 1,
            ),
            39 => 
            array (
                'id' => 540,
                'city_id' => 72,
                'province_id' => 7,
                'name' => '合山市',
                'status' => 1,
            ),
            40 => 
            array (
                'id' => 541,
                'city_id' => 72,
                'province_id' => 7,
                'name' => '象州县',
                'status' => 1,
            ),
            41 => 
            array (
                'id' => 542,
                'city_id' => 72,
                'province_id' => 7,
                'name' => '武宣县',
                'status' => 1,
            ),
            42 => 
            array (
                'id' => 543,
                'city_id' => 72,
                'province_id' => 7,
                'name' => '忻城县',
                'status' => 1,
            ),
            43 => 
            array (
                'id' => 544,
                'city_id' => 72,
                'province_id' => 7,
                'name' => '金秀',
                'status' => 1,
            ),
            44 => 
            array (
                'id' => 545,
                'city_id' => 73,
                'province_id' => 7,
                'name' => '城中区',
                'status' => 1,
            ),
            45 => 
            array (
                'id' => 546,
                'city_id' => 73,
                'province_id' => 7,
                'name' => '鱼峰区',
                'status' => 1,
            ),
            46 => 
            array (
                'id' => 547,
                'city_id' => 73,
                'province_id' => 7,
                'name' => '柳北区',
                'status' => 1,
            ),
            47 => 
            array (
                'id' => 548,
                'city_id' => 73,
                'province_id' => 7,
                'name' => '柳南区',
                'status' => 1,
            ),
            48 => 
            array (
                'id' => 549,
                'city_id' => 73,
                'province_id' => 7,
                'name' => '柳江县',
                'status' => 1,
            ),
            49 => 
            array (
                'id' => 550,
                'city_id' => 73,
                'province_id' => 7,
                'name' => '柳城县',
                'status' => 1,
            ),
            50 => 
            array (
                'id' => 551,
                'city_id' => 73,
                'province_id' => 7,
                'name' => '鹿寨县',
                'status' => 1,
            ),
            51 => 
            array (
                'id' => 552,
                'city_id' => 73,
                'province_id' => 7,
                'name' => '融安县',
                'status' => 1,
            ),
            52 => 
            array (
                'id' => 553,
                'city_id' => 73,
                'province_id' => 7,
                'name' => '融水',
                'status' => 1,
            ),
            53 => 
            array (
                'id' => 554,
                'city_id' => 73,
                'province_id' => 7,
                'name' => '三江',
                'status' => 1,
            ),
            54 => 
            array (
                'id' => 555,
                'city_id' => 74,
                'province_id' => 7,
                'name' => '钦南区',
                'status' => 1,
            ),
            55 => 
            array (
                'id' => 556,
                'city_id' => 74,
                'province_id' => 7,
                'name' => '钦北区',
                'status' => 1,
            ),
            56 => 
            array (
                'id' => 557,
                'city_id' => 74,
                'province_id' => 7,
                'name' => '灵山县',
                'status' => 1,
            ),
            57 => 
            array (
                'id' => 558,
                'city_id' => 74,
                'province_id' => 7,
                'name' => '浦北县',
                'status' => 1,
            ),
            58 => 
            array (
                'id' => 559,
                'city_id' => 75,
                'province_id' => 7,
                'name' => '万秀区',
                'status' => 1,
            ),
            59 => 
            array (
                'id' => 560,
                'city_id' => 75,
                'province_id' => 7,
                'name' => '蝶山区',
                'status' => 1,
            ),
            60 => 
            array (
                'id' => 561,
                'city_id' => 75,
                'province_id' => 7,
                'name' => '长洲区',
                'status' => 1,
            ),
            61 => 
            array (
                'id' => 562,
                'city_id' => 75,
                'province_id' => 7,
                'name' => '岑溪市',
                'status' => 1,
            ),
            62 => 
            array (
                'id' => 563,
                'city_id' => 75,
                'province_id' => 7,
                'name' => '苍梧县',
                'status' => 1,
            ),
            63 => 
            array (
                'id' => 564,
                'city_id' => 75,
                'province_id' => 7,
                'name' => '藤县',
                'status' => 1,
            ),
            64 => 
            array (
                'id' => 565,
                'city_id' => 75,
                'province_id' => 7,
                'name' => '蒙山县',
                'status' => 1,
            ),
            65 => 
            array (
                'id' => 566,
                'city_id' => 76,
                'province_id' => 7,
                'name' => '玉州区',
                'status' => 1,
            ),
            66 => 
            array (
                'id' => 567,
                'city_id' => 76,
                'province_id' => 7,
                'name' => '北流市',
                'status' => 1,
            ),
            67 => 
            array (
                'id' => 568,
                'city_id' => 76,
                'province_id' => 7,
                'name' => '容县',
                'status' => 1,
            ),
            68 => 
            array (
                'id' => 569,
                'city_id' => 76,
                'province_id' => 7,
                'name' => '陆川县',
                'status' => 1,
            ),
            69 => 
            array (
                'id' => 570,
                'city_id' => 76,
                'province_id' => 7,
                'name' => '博白县',
                'status' => 1,
            ),
            70 => 
            array (
                'id' => 571,
                'city_id' => 76,
                'province_id' => 7,
                'name' => '兴业县',
                'status' => 1,
            ),
            71 => 
            array (
                'id' => 572,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '南明区',
                'status' => 1,
            ),
            72 => 
            array (
                'id' => 573,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '云岩区',
                'status' => 1,
            ),
            73 => 
            array (
                'id' => 574,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '花溪区',
                'status' => 1,
            ),
            74 => 
            array (
                'id' => 575,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '乌当区',
                'status' => 1,
            ),
            75 => 
            array (
                'id' => 576,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '白云区',
                'status' => 1,
            ),
            76 => 
            array (
                'id' => 577,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '小河区',
                'status' => 1,
            ),
            77 => 
            array (
                'id' => 578,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '金阳新区',
                'status' => 1,
            ),
            78 => 
            array (
                'id' => 579,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '新天园区',
                'status' => 1,
            ),
            79 => 
            array (
                'id' => 580,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '清镇市',
                'status' => 1,
            ),
            80 => 
            array (
                'id' => 581,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '开阳县',
                'status' => 1,
            ),
            81 => 
            array (
                'id' => 582,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '修文县',
                'status' => 1,
            ),
            82 => 
            array (
                'id' => 583,
                'city_id' => 77,
                'province_id' => 8,
                'name' => '息烽县',
                'status' => 1,
            ),
            83 => 
            array (
                'id' => 584,
                'city_id' => 78,
                'province_id' => 8,
                'name' => '西秀区',
                'status' => 1,
            ),
            84 => 
            array (
                'id' => 585,
                'city_id' => 78,
                'province_id' => 8,
                'name' => '关岭',
                'status' => 1,
            ),
            85 => 
            array (
                'id' => 586,
                'city_id' => 78,
                'province_id' => 8,
                'name' => '镇宁',
                'status' => 1,
            ),
            86 => 
            array (
                'id' => 587,
                'city_id' => 78,
                'province_id' => 8,
                'name' => '紫云',
                'status' => 1,
            ),
            87 => 
            array (
                'id' => 588,
                'city_id' => 78,
                'province_id' => 8,
                'name' => '平坝县',
                'status' => 1,
            ),
            88 => 
            array (
                'id' => 589,
                'city_id' => 78,
                'province_id' => 8,
                'name' => '普定县',
                'status' => 1,
            ),
            89 => 
            array (
                'id' => 590,
                'city_id' => 79,
                'province_id' => 8,
                'name' => '毕节市',
                'status' => 1,
            ),
            90 => 
            array (
                'id' => 591,
                'city_id' => 79,
                'province_id' => 8,
                'name' => '大方县',
                'status' => 1,
            ),
            91 => 
            array (
                'id' => 592,
                'city_id' => 79,
                'province_id' => 8,
                'name' => '黔西县',
                'status' => 1,
            ),
            92 => 
            array (
                'id' => 593,
                'city_id' => 79,
                'province_id' => 8,
                'name' => '金沙县',
                'status' => 1,
            ),
            93 => 
            array (
                'id' => 594,
                'city_id' => 79,
                'province_id' => 8,
                'name' => '织金县',
                'status' => 1,
            ),
            94 => 
            array (
                'id' => 595,
                'city_id' => 79,
                'province_id' => 8,
                'name' => '纳雍县',
                'status' => 1,
            ),
            95 => 
            array (
                'id' => 596,
                'city_id' => 79,
                'province_id' => 8,
                'name' => '赫章县',
                'status' => 1,
            ),
            96 => 
            array (
                'id' => 597,
                'city_id' => 79,
                'province_id' => 8,
                'name' => '威宁',
                'status' => 1,
            ),
            97 => 
            array (
                'id' => 598,
                'city_id' => 80,
                'province_id' => 8,
                'name' => '钟山区',
                'status' => 1,
            ),
            98 => 
            array (
                'id' => 599,
                'city_id' => 80,
                'province_id' => 8,
                'name' => '六枝特区',
                'status' => 1,
            ),
            99 => 
            array (
                'id' => 600,
                'city_id' => 80,
                'province_id' => 8,
                'name' => '水城县',
                'status' => 1,
            ),
            100 => 
            array (
                'id' => 601,
                'city_id' => 80,
                'province_id' => 8,
                'name' => '盘县',
                'status' => 1,
            ),
            101 => 
            array (
                'id' => 602,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '凯里市',
                'status' => 1,
            ),
            102 => 
            array (
                'id' => 603,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '黄平县',
                'status' => 1,
            ),
            103 => 
            array (
                'id' => 604,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '施秉县',
                'status' => 1,
            ),
            104 => 
            array (
                'id' => 605,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '三穗县',
                'status' => 1,
            ),
            105 => 
            array (
                'id' => 606,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '镇远县',
                'status' => 1,
            ),
            106 => 
            array (
                'id' => 607,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '岑巩县',
                'status' => 1,
            ),
            107 => 
            array (
                'id' => 608,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '天柱县',
                'status' => 1,
            ),
            108 => 
            array (
                'id' => 609,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '锦屏县',
                'status' => 1,
            ),
            109 => 
            array (
                'id' => 610,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '剑河县',
                'status' => 1,
            ),
            110 => 
            array (
                'id' => 611,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '台江县',
                'status' => 1,
            ),
            111 => 
            array (
                'id' => 612,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '黎平县',
                'status' => 1,
            ),
            112 => 
            array (
                'id' => 613,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '榕江县',
                'status' => 1,
            ),
            113 => 
            array (
                'id' => 614,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '从江县',
                'status' => 1,
            ),
            114 => 
            array (
                'id' => 615,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '雷山县',
                'status' => 1,
            ),
            115 => 
            array (
                'id' => 616,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '麻江县',
                'status' => 1,
            ),
            116 => 
            array (
                'id' => 617,
                'city_id' => 81,
                'province_id' => 8,
                'name' => '丹寨县',
                'status' => 1,
            ),
            117 => 
            array (
                'id' => 618,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '都匀市',
                'status' => 1,
            ),
            118 => 
            array (
                'id' => 619,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '福泉市',
                'status' => 1,
            ),
            119 => 
            array (
                'id' => 620,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '荔波县',
                'status' => 1,
            ),
            120 => 
            array (
                'id' => 621,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '贵定县',
                'status' => 1,
            ),
            121 => 
            array (
                'id' => 622,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '瓮安县',
                'status' => 1,
            ),
            122 => 
            array (
                'id' => 623,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '独山县',
                'status' => 1,
            ),
            123 => 
            array (
                'id' => 624,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '平塘县',
                'status' => 1,
            ),
            124 => 
            array (
                'id' => 625,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '罗甸县',
                'status' => 1,
            ),
            125 => 
            array (
                'id' => 626,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '长顺县',
                'status' => 1,
            ),
            126 => 
            array (
                'id' => 627,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '龙里县',
                'status' => 1,
            ),
            127 => 
            array (
                'id' => 628,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '惠水县',
                'status' => 1,
            ),
            128 => 
            array (
                'id' => 629,
                'city_id' => 82,
                'province_id' => 8,
                'name' => '三都',
                'status' => 1,
            ),
            129 => 
            array (
                'id' => 630,
                'city_id' => 83,
                'province_id' => 8,
                'name' => '兴义市',
                'status' => 1,
            ),
            130 => 
            array (
                'id' => 631,
                'city_id' => 83,
                'province_id' => 8,
                'name' => '兴仁县',
                'status' => 1,
            ),
            131 => 
            array (
                'id' => 632,
                'city_id' => 83,
                'province_id' => 8,
                'name' => '普安县',
                'status' => 1,
            ),
            132 => 
            array (
                'id' => 633,
                'city_id' => 83,
                'province_id' => 8,
                'name' => '晴隆县',
                'status' => 1,
            ),
            133 => 
            array (
                'id' => 634,
                'city_id' => 83,
                'province_id' => 8,
                'name' => '贞丰县',
                'status' => 1,
            ),
            134 => 
            array (
                'id' => 635,
                'city_id' => 83,
                'province_id' => 8,
                'name' => '望谟县',
                'status' => 1,
            ),
            135 => 
            array (
                'id' => 636,
                'city_id' => 83,
                'province_id' => 8,
                'name' => '册亨县',
                'status' => 1,
            ),
            136 => 
            array (
                'id' => 637,
                'city_id' => 83,
                'province_id' => 8,
                'name' => '安龙县',
                'status' => 1,
            ),
            137 => 
            array (
                'id' => 638,
                'city_id' => 84,
                'province_id' => 8,
                'name' => '铜仁市',
                'status' => 1,
            ),
            138 => 
            array (
                'id' => 639,
                'city_id' => 84,
                'province_id' => 8,
                'name' => '江口县',
                'status' => 1,
            ),
            139 => 
            array (
                'id' => 640,
                'city_id' => 84,
                'province_id' => 8,
                'name' => '石阡县',
                'status' => 1,
            ),
            140 => 
            array (
                'id' => 641,
                'city_id' => 84,
                'province_id' => 8,
                'name' => '思南县',
                'status' => 1,
            ),
            141 => 
            array (
                'id' => 642,
                'city_id' => 84,
                'province_id' => 8,
                'name' => '德江县',
                'status' => 1,
            ),
            142 => 
            array (
                'id' => 643,
                'city_id' => 84,
                'province_id' => 8,
                'name' => '玉屏',
                'status' => 1,
            ),
            143 => 
            array (
                'id' => 644,
                'city_id' => 84,
                'province_id' => 8,
                'name' => '印江',
                'status' => 1,
            ),
            144 => 
            array (
                'id' => 645,
                'city_id' => 84,
                'province_id' => 8,
                'name' => '沿河',
                'status' => 1,
            ),
            145 => 
            array (
                'id' => 646,
                'city_id' => 84,
                'province_id' => 8,
                'name' => '松桃',
                'status' => 1,
            ),
            146 => 
            array (
                'id' => 647,
                'city_id' => 84,
                'province_id' => 8,
                'name' => '万山特区',
                'status' => 1,
            ),
            147 => 
            array (
                'id' => 648,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '红花岗区',
                'status' => 1,
            ),
            148 => 
            array (
                'id' => 649,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '务川县',
                'status' => 1,
            ),
            149 => 
            array (
                'id' => 650,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '道真县',
                'status' => 1,
            ),
            150 => 
            array (
                'id' => 651,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '汇川区',
                'status' => 1,
            ),
            151 => 
            array (
                'id' => 652,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '赤水市',
                'status' => 1,
            ),
            152 => 
            array (
                'id' => 653,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '仁怀市',
                'status' => 1,
            ),
            153 => 
            array (
                'id' => 654,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '遵义县',
                'status' => 1,
            ),
            154 => 
            array (
                'id' => 655,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '桐梓县',
                'status' => 1,
            ),
            155 => 
            array (
                'id' => 656,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '绥阳县',
                'status' => 1,
            ),
            156 => 
            array (
                'id' => 657,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '正安县',
                'status' => 1,
            ),
            157 => 
            array (
                'id' => 658,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '凤冈县',
                'status' => 1,
            ),
            158 => 
            array (
                'id' => 659,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '湄潭县',
                'status' => 1,
            ),
            159 => 
            array (
                'id' => 660,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '余庆县',
                'status' => 1,
            ),
            160 => 
            array (
                'id' => 661,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '习水县',
                'status' => 1,
            ),
            161 => 
            array (
                'id' => 662,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '道真',
                'status' => 1,
            ),
            162 => 
            array (
                'id' => 663,
                'city_id' => 85,
                'province_id' => 8,
                'name' => '务川',
                'status' => 1,
            ),
            163 => 
            array (
                'id' => 664,
                'city_id' => 86,
                'province_id' => 9,
                'name' => '秀英区',
                'status' => 1,
            ),
            164 => 
            array (
                'id' => 665,
                'city_id' => 86,
                'province_id' => 9,
                'name' => '龙华区',
                'status' => 1,
            ),
            165 => 
            array (
                'id' => 666,
                'city_id' => 86,
                'province_id' => 9,
                'name' => '琼山区',
                'status' => 1,
            ),
            166 => 
            array (
                'id' => 667,
                'city_id' => 86,
                'province_id' => 9,
                'name' => '美兰区',
                'status' => 1,
            ),
            167 => 
            array (
                'id' => 668,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '市区',
                'status' => 1,
            ),
            168 => 
            array (
                'id' => 669,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '洋浦开发区',
                'status' => 1,
            ),
            169 => 
            array (
                'id' => 670,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '那大镇',
                'status' => 1,
            ),
            170 => 
            array (
                'id' => 671,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '王五镇',
                'status' => 1,
            ),
            171 => 
            array (
                'id' => 672,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '雅星镇',
                'status' => 1,
            ),
            172 => 
            array (
                'id' => 673,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '大成镇',
                'status' => 1,
            ),
            173 => 
            array (
                'id' => 674,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '中和镇',
                'status' => 1,
            ),
            174 => 
            array (
                'id' => 675,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '峨蔓镇',
                'status' => 1,
            ),
            175 => 
            array (
                'id' => 676,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '南丰镇',
                'status' => 1,
            ),
            176 => 
            array (
                'id' => 677,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '白马井镇',
                'status' => 1,
            ),
            177 => 
            array (
                'id' => 678,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '兰洋镇',
                'status' => 1,
            ),
            178 => 
            array (
                'id' => 679,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '和庆镇',
                'status' => 1,
            ),
            179 => 
            array (
                'id' => 680,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '海头镇',
                'status' => 1,
            ),
            180 => 
            array (
                'id' => 681,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '排浦镇',
                'status' => 1,
            ),
            181 => 
            array (
                'id' => 682,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '东成镇',
                'status' => 1,
            ),
            182 => 
            array (
                'id' => 683,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '光村镇',
                'status' => 1,
            ),
            183 => 
            array (
                'id' => 684,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '木棠镇',
                'status' => 1,
            ),
            184 => 
            array (
                'id' => 685,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '新州镇',
                'status' => 1,
            ),
            185 => 
            array (
                'id' => 686,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '三都镇',
                'status' => 1,
            ),
            186 => 
            array (
                'id' => 687,
                'city_id' => 103,
                'province_id' => 9,
                'name' => '其他',
                'status' => 1,
            ),
            187 => 
            array (
                'id' => 688,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '长安区',
                'status' => 1,
            ),
            188 => 
            array (
                'id' => 689,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '桥东区',
                'status' => 1,
            ),
            189 => 
            array (
                'id' => 690,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '桥西区',
                'status' => 1,
            ),
            190 => 
            array (
                'id' => 691,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '新华区',
                'status' => 1,
            ),
            191 => 
            array (
                'id' => 692,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '裕华区',
                'status' => 1,
            ),
            192 => 
            array (
                'id' => 693,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '井陉矿区',
                'status' => 1,
            ),
            193 => 
            array (
                'id' => 694,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '高新区',
                'status' => 1,
            ),
            194 => 
            array (
                'id' => 695,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '辛集市',
                'status' => 1,
            ),
            195 => 
            array (
                'id' => 696,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '藁城市',
                'status' => 1,
            ),
            196 => 
            array (
                'id' => 697,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '晋州市',
                'status' => 1,
            ),
            197 => 
            array (
                'id' => 698,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '新乐市',
                'status' => 1,
            ),
            198 => 
            array (
                'id' => 699,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '鹿泉市',
                'status' => 1,
            ),
            199 => 
            array (
                'id' => 700,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '井陉县',
                'status' => 1,
            ),
            200 => 
            array (
                'id' => 701,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '正定县',
                'status' => 1,
            ),
            201 => 
            array (
                'id' => 702,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '栾城县',
                'status' => 1,
            ),
            202 => 
            array (
                'id' => 703,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '行唐县',
                'status' => 1,
            ),
            203 => 
            array (
                'id' => 704,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '灵寿县',
                'status' => 1,
            ),
            204 => 
            array (
                'id' => 705,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '高邑县',
                'status' => 1,
            ),
            205 => 
            array (
                'id' => 706,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '深泽县',
                'status' => 1,
            ),
            206 => 
            array (
                'id' => 707,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '赞皇县',
                'status' => 1,
            ),
            207 => 
            array (
                'id' => 708,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '无极县',
                'status' => 1,
            ),
            208 => 
            array (
                'id' => 709,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '平山县',
                'status' => 1,
            ),
            209 => 
            array (
                'id' => 710,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '元氏县',
                'status' => 1,
            ),
            210 => 
            array (
                'id' => 711,
                'city_id' => 104,
                'province_id' => 10,
                'name' => '赵县',
                'status' => 1,
            ),
            211 => 
            array (
                'id' => 712,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '新市区',
                'status' => 1,
            ),
            212 => 
            array (
                'id' => 713,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '南市区',
                'status' => 1,
            ),
            213 => 
            array (
                'id' => 714,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '北市区',
                'status' => 1,
            ),
            214 => 
            array (
                'id' => 715,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '涿州市',
                'status' => 1,
            ),
            215 => 
            array (
                'id' => 716,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '定州市',
                'status' => 1,
            ),
            216 => 
            array (
                'id' => 717,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '安国市',
                'status' => 1,
            ),
            217 => 
            array (
                'id' => 718,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '高碑店市',
                'status' => 1,
            ),
            218 => 
            array (
                'id' => 719,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '满城县',
                'status' => 1,
            ),
            219 => 
            array (
                'id' => 720,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '清苑县',
                'status' => 1,
            ),
            220 => 
            array (
                'id' => 721,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '涞水县',
                'status' => 1,
            ),
            221 => 
            array (
                'id' => 722,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '阜平县',
                'status' => 1,
            ),
            222 => 
            array (
                'id' => 723,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '徐水县',
                'status' => 1,
            ),
            223 => 
            array (
                'id' => 724,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '定兴县',
                'status' => 1,
            ),
            224 => 
            array (
                'id' => 725,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '唐县',
                'status' => 1,
            ),
            225 => 
            array (
                'id' => 726,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '高阳县',
                'status' => 1,
            ),
            226 => 
            array (
                'id' => 727,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '容城县',
                'status' => 1,
            ),
            227 => 
            array (
                'id' => 728,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '涞源县',
                'status' => 1,
            ),
            228 => 
            array (
                'id' => 729,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '望都县',
                'status' => 1,
            ),
            229 => 
            array (
                'id' => 730,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '安新县',
                'status' => 1,
            ),
            230 => 
            array (
                'id' => 731,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '易县',
                'status' => 1,
            ),
            231 => 
            array (
                'id' => 732,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '曲阳县',
                'status' => 1,
            ),
            232 => 
            array (
                'id' => 733,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '蠡县',
                'status' => 1,
            ),
            233 => 
            array (
                'id' => 734,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '顺平县',
                'status' => 1,
            ),
            234 => 
            array (
                'id' => 735,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '博野县',
                'status' => 1,
            ),
            235 => 
            array (
                'id' => 736,
                'city_id' => 105,
                'province_id' => 10,
                'name' => '雄县',
                'status' => 1,
            ),
            236 => 
            array (
                'id' => 737,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '运河区',
                'status' => 1,
            ),
            237 => 
            array (
                'id' => 738,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '新华区',
                'status' => 1,
            ),
            238 => 
            array (
                'id' => 739,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '泊头市',
                'status' => 1,
            ),
            239 => 
            array (
                'id' => 740,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '任丘市',
                'status' => 1,
            ),
            240 => 
            array (
                'id' => 741,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '黄骅市',
                'status' => 1,
            ),
            241 => 
            array (
                'id' => 742,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '河间市',
                'status' => 1,
            ),
            242 => 
            array (
                'id' => 743,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '沧县',
                'status' => 1,
            ),
            243 => 
            array (
                'id' => 744,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '青县',
                'status' => 1,
            ),
            244 => 
            array (
                'id' => 745,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '东光县',
                'status' => 1,
            ),
            245 => 
            array (
                'id' => 746,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '海兴县',
                'status' => 1,
            ),
            246 => 
            array (
                'id' => 747,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '盐山县',
                'status' => 1,
            ),
            247 => 
            array (
                'id' => 748,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '肃宁县',
                'status' => 1,
            ),
            248 => 
            array (
                'id' => 749,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '南皮县',
                'status' => 1,
            ),
            249 => 
            array (
                'id' => 750,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '吴桥县',
                'status' => 1,
            ),
            250 => 
            array (
                'id' => 751,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '献县',
                'status' => 1,
            ),
            251 => 
            array (
                'id' => 752,
                'city_id' => 106,
                'province_id' => 10,
                'name' => '孟村',
                'status' => 1,
            ),
            252 => 
            array (
                'id' => 753,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '双桥区',
                'status' => 1,
            ),
            253 => 
            array (
                'id' => 754,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '双滦区',
                'status' => 1,
            ),
            254 => 
            array (
                'id' => 755,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '鹰手营子矿区',
                'status' => 1,
            ),
            255 => 
            array (
                'id' => 756,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '承德县',
                'status' => 1,
            ),
            256 => 
            array (
                'id' => 757,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '兴隆县',
                'status' => 1,
            ),
            257 => 
            array (
                'id' => 758,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '平泉县',
                'status' => 1,
            ),
            258 => 
            array (
                'id' => 759,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '滦平县',
                'status' => 1,
            ),
            259 => 
            array (
                'id' => 760,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '隆化县',
                'status' => 1,
            ),
            260 => 
            array (
                'id' => 761,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '丰宁',
                'status' => 1,
            ),
            261 => 
            array (
                'id' => 762,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '宽城',
                'status' => 1,
            ),
            262 => 
            array (
                'id' => 763,
                'city_id' => 107,
                'province_id' => 10,
                'name' => '围场',
                'status' => 1,
            ),
            263 => 
            array (
                'id' => 764,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '从台区',
                'status' => 1,
            ),
            264 => 
            array (
                'id' => 765,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '复兴区',
                'status' => 1,
            ),
            265 => 
            array (
                'id' => 766,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '邯山区',
                'status' => 1,
            ),
            266 => 
            array (
                'id' => 767,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '峰峰矿区',
                'status' => 1,
            ),
            267 => 
            array (
                'id' => 768,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '武安市',
                'status' => 1,
            ),
            268 => 
            array (
                'id' => 769,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '邯郸县',
                'status' => 1,
            ),
            269 => 
            array (
                'id' => 770,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '临漳县',
                'status' => 1,
            ),
            270 => 
            array (
                'id' => 771,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '成安县',
                'status' => 1,
            ),
            271 => 
            array (
                'id' => 772,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '大名县',
                'status' => 1,
            ),
            272 => 
            array (
                'id' => 773,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '涉县',
                'status' => 1,
            ),
            273 => 
            array (
                'id' => 774,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '磁县',
                'status' => 1,
            ),
            274 => 
            array (
                'id' => 775,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '肥乡县',
                'status' => 1,
            ),
            275 => 
            array (
                'id' => 776,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '永年县',
                'status' => 1,
            ),
            276 => 
            array (
                'id' => 777,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '邱县',
                'status' => 1,
            ),
            277 => 
            array (
                'id' => 778,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '鸡泽县',
                'status' => 1,
            ),
            278 => 
            array (
                'id' => 779,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '广平县',
                'status' => 1,
            ),
            279 => 
            array (
                'id' => 780,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '馆陶县',
                'status' => 1,
            ),
            280 => 
            array (
                'id' => 781,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '魏县',
                'status' => 1,
            ),
            281 => 
            array (
                'id' => 782,
                'city_id' => 108,
                'province_id' => 10,
                'name' => '曲周县',
                'status' => 1,
            ),
            282 => 
            array (
                'id' => 783,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '桃城区',
                'status' => 1,
            ),
            283 => 
            array (
                'id' => 784,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '冀州市',
                'status' => 1,
            ),
            284 => 
            array (
                'id' => 785,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '深州市',
                'status' => 1,
            ),
            285 => 
            array (
                'id' => 786,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '枣强县',
                'status' => 1,
            ),
            286 => 
            array (
                'id' => 787,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '武邑县',
                'status' => 1,
            ),
            287 => 
            array (
                'id' => 788,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '武强县',
                'status' => 1,
            ),
            288 => 
            array (
                'id' => 789,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '饶阳县',
                'status' => 1,
            ),
            289 => 
            array (
                'id' => 790,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '安平县',
                'status' => 1,
            ),
            290 => 
            array (
                'id' => 791,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '故城县',
                'status' => 1,
            ),
            291 => 
            array (
                'id' => 792,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '景县',
                'status' => 1,
            ),
            292 => 
            array (
                'id' => 793,
                'city_id' => 109,
                'province_id' => 10,
                'name' => '阜城县',
                'status' => 1,
            ),
            293 => 
            array (
                'id' => 794,
                'city_id' => 110,
                'province_id' => 10,
                'name' => '安次区',
                'status' => 1,
            ),
            294 => 
            array (
                'id' => 795,
                'city_id' => 110,
                'province_id' => 10,
                'name' => '广阳区',
                'status' => 1,
            ),
            295 => 
            array (
                'id' => 796,
                'city_id' => 110,
                'province_id' => 10,
                'name' => '霸州市',
                'status' => 1,
            ),
            296 => 
            array (
                'id' => 797,
                'city_id' => 110,
                'province_id' => 10,
                'name' => '三河市',
                'status' => 1,
            ),
            297 => 
            array (
                'id' => 798,
                'city_id' => 110,
                'province_id' => 10,
                'name' => '固安县',
                'status' => 1,
            ),
            298 => 
            array (
                'id' => 799,
                'city_id' => 110,
                'province_id' => 10,
                'name' => '永清县',
                'status' => 1,
            ),
            299 => 
            array (
                'id' => 800,
                'city_id' => 110,
                'province_id' => 10,
                'name' => '香河县',
                'status' => 1,
            ),
            300 => 
            array (
                'id' => 801,
                'city_id' => 110,
                'province_id' => 10,
                'name' => '大城县',
                'status' => 1,
            ),
            301 => 
            array (
                'id' => 802,
                'city_id' => 110,
                'province_id' => 10,
                'name' => '文安县',
                'status' => 1,
            ),
            302 => 
            array (
                'id' => 803,
                'city_id' => 110,
                'province_id' => 10,
                'name' => '大厂',
                'status' => 1,
            ),
            303 => 
            array (
                'id' => 804,
                'city_id' => 111,
                'province_id' => 10,
                'name' => '海港区',
                'status' => 1,
            ),
            304 => 
            array (
                'id' => 805,
                'city_id' => 111,
                'province_id' => 10,
                'name' => '山海关区',
                'status' => 1,
            ),
            305 => 
            array (
                'id' => 806,
                'city_id' => 111,
                'province_id' => 10,
                'name' => '北戴河区',
                'status' => 1,
            ),
            306 => 
            array (
                'id' => 807,
                'city_id' => 111,
                'province_id' => 10,
                'name' => '昌黎县',
                'status' => 1,
            ),
            307 => 
            array (
                'id' => 808,
                'city_id' => 111,
                'province_id' => 10,
                'name' => '抚宁县',
                'status' => 1,
            ),
            308 => 
            array (
                'id' => 809,
                'city_id' => 111,
                'province_id' => 10,
                'name' => '卢龙县',
                'status' => 1,
            ),
            309 => 
            array (
                'id' => 810,
                'city_id' => 111,
                'province_id' => 10,
                'name' => '青龙',
                'status' => 1,
            ),
            310 => 
            array (
                'id' => 811,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '路北区',
                'status' => 1,
            ),
            311 => 
            array (
                'id' => 812,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '路南区',
                'status' => 1,
            ),
            312 => 
            array (
                'id' => 813,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '古冶区',
                'status' => 1,
            ),
            313 => 
            array (
                'id' => 814,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '开平区',
                'status' => 1,
            ),
            314 => 
            array (
                'id' => 815,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '丰南区',
                'status' => 1,
            ),
            315 => 
            array (
                'id' => 816,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '丰润区',
                'status' => 1,
            ),
            316 => 
            array (
                'id' => 817,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '遵化市',
                'status' => 1,
            ),
            317 => 
            array (
                'id' => 818,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '迁安市',
                'status' => 1,
            ),
            318 => 
            array (
                'id' => 819,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '滦县',
                'status' => 1,
            ),
            319 => 
            array (
                'id' => 820,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '滦南县',
                'status' => 1,
            ),
            320 => 
            array (
                'id' => 821,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '乐亭县',
                'status' => 1,
            ),
            321 => 
            array (
                'id' => 822,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '迁西县',
                'status' => 1,
            ),
            322 => 
            array (
                'id' => 823,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '玉田县',
                'status' => 1,
            ),
            323 => 
            array (
                'id' => 824,
                'city_id' => 112,
                'province_id' => 10,
                'name' => '唐海县',
                'status' => 1,
            ),
            324 => 
            array (
                'id' => 825,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '桥东区',
                'status' => 1,
            ),
            325 => 
            array (
                'id' => 826,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '桥西区',
                'status' => 1,
            ),
            326 => 
            array (
                'id' => 827,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '南宫市',
                'status' => 1,
            ),
            327 => 
            array (
                'id' => 828,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '沙河市',
                'status' => 1,
            ),
            328 => 
            array (
                'id' => 829,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '邢台县',
                'status' => 1,
            ),
            329 => 
            array (
                'id' => 830,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '临城县',
                'status' => 1,
            ),
            330 => 
            array (
                'id' => 831,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '内丘县',
                'status' => 1,
            ),
            331 => 
            array (
                'id' => 832,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '柏乡县',
                'status' => 1,
            ),
            332 => 
            array (
                'id' => 833,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '隆尧县',
                'status' => 1,
            ),
            333 => 
            array (
                'id' => 834,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '任县',
                'status' => 1,
            ),
            334 => 
            array (
                'id' => 835,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '南和县',
                'status' => 1,
            ),
            335 => 
            array (
                'id' => 836,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '宁晋县',
                'status' => 1,
            ),
            336 => 
            array (
                'id' => 837,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '巨鹿县',
                'status' => 1,
            ),
            337 => 
            array (
                'id' => 838,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '新河县',
                'status' => 1,
            ),
            338 => 
            array (
                'id' => 839,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '广宗县',
                'status' => 1,
            ),
            339 => 
            array (
                'id' => 840,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '平乡县',
                'status' => 1,
            ),
            340 => 
            array (
                'id' => 841,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '威县',
                'status' => 1,
            ),
            341 => 
            array (
                'id' => 842,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '清河县',
                'status' => 1,
            ),
            342 => 
            array (
                'id' => 843,
                'city_id' => 113,
                'province_id' => 10,
                'name' => '临西县',
                'status' => 1,
            ),
            343 => 
            array (
                'id' => 844,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '桥西区',
                'status' => 1,
            ),
            344 => 
            array (
                'id' => 845,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '桥东区',
                'status' => 1,
            ),
            345 => 
            array (
                'id' => 846,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '宣化区',
                'status' => 1,
            ),
            346 => 
            array (
                'id' => 847,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '下花园区',
                'status' => 1,
            ),
            347 => 
            array (
                'id' => 848,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '宣化县',
                'status' => 1,
            ),
            348 => 
            array (
                'id' => 849,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '张北县',
                'status' => 1,
            ),
            349 => 
            array (
                'id' => 850,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '康保县',
                'status' => 1,
            ),
            350 => 
            array (
                'id' => 851,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '沽源县',
                'status' => 1,
            ),
            351 => 
            array (
                'id' => 852,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '尚义县',
                'status' => 1,
            ),
            352 => 
            array (
                'id' => 853,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '蔚县',
                'status' => 1,
            ),
            353 => 
            array (
                'id' => 854,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '阳原县',
                'status' => 1,
            ),
            354 => 
            array (
                'id' => 855,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '怀安县',
                'status' => 1,
            ),
            355 => 
            array (
                'id' => 856,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '万全县',
                'status' => 1,
            ),
            356 => 
            array (
                'id' => 857,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '怀来县',
                'status' => 1,
            ),
            357 => 
            array (
                'id' => 858,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '涿鹿县',
                'status' => 1,
            ),
            358 => 
            array (
                'id' => 859,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '赤城县',
                'status' => 1,
            ),
            359 => 
            array (
                'id' => 860,
                'city_id' => 114,
                'province_id' => 10,
                'name' => '崇礼县',
                'status' => 1,
            ),
            360 => 
            array (
                'id' => 861,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '金水区',
                'status' => 1,
            ),
            361 => 
            array (
                'id' => 862,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '邙山区',
                'status' => 1,
            ),
            362 => 
            array (
                'id' => 863,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '二七区',
                'status' => 1,
            ),
            363 => 
            array (
                'id' => 864,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '管城区',
                'status' => 1,
            ),
            364 => 
            array (
                'id' => 865,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '中原区',
                'status' => 1,
            ),
            365 => 
            array (
                'id' => 866,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '上街区',
                'status' => 1,
            ),
            366 => 
            array (
                'id' => 867,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '惠济区',
                'status' => 1,
            ),
            367 => 
            array (
                'id' => 868,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '郑东新区',
                'status' => 1,
            ),
            368 => 
            array (
                'id' => 869,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '经济技术开发区',
                'status' => 1,
            ),
            369 => 
            array (
                'id' => 870,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '高新开发区',
                'status' => 1,
            ),
            370 => 
            array (
                'id' => 871,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '出口加工区',
                'status' => 1,
            ),
            371 => 
            array (
                'id' => 872,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '巩义市',
                'status' => 1,
            ),
            372 => 
            array (
                'id' => 873,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '荥阳市',
                'status' => 1,
            ),
            373 => 
            array (
                'id' => 874,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '新密市',
                'status' => 1,
            ),
            374 => 
            array (
                'id' => 875,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '新郑市',
                'status' => 1,
            ),
            375 => 
            array (
                'id' => 876,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '登封市',
                'status' => 1,
            ),
            376 => 
            array (
                'id' => 877,
                'city_id' => 115,
                'province_id' => 11,
                'name' => '中牟县',
                'status' => 1,
            ),
            377 => 
            array (
                'id' => 878,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '西工区',
                'status' => 1,
            ),
            378 => 
            array (
                'id' => 879,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '老城区',
                'status' => 1,
            ),
            379 => 
            array (
                'id' => 880,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '涧西区',
                'status' => 1,
            ),
            380 => 
            array (
                'id' => 881,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '瀍河回族区',
                'status' => 1,
            ),
            381 => 
            array (
                'id' => 882,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '洛龙区',
                'status' => 1,
            ),
            382 => 
            array (
                'id' => 883,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '吉利区',
                'status' => 1,
            ),
            383 => 
            array (
                'id' => 884,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '偃师市',
                'status' => 1,
            ),
            384 => 
            array (
                'id' => 885,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '孟津县',
                'status' => 1,
            ),
            385 => 
            array (
                'id' => 886,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '新安县',
                'status' => 1,
            ),
            386 => 
            array (
                'id' => 887,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '栾川县',
                'status' => 1,
            ),
            387 => 
            array (
                'id' => 888,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '嵩县',
                'status' => 1,
            ),
            388 => 
            array (
                'id' => 889,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '汝阳县',
                'status' => 1,
            ),
            389 => 
            array (
                'id' => 890,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '宜阳县',
                'status' => 1,
            ),
            390 => 
            array (
                'id' => 891,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '洛宁县',
                'status' => 1,
            ),
            391 => 
            array (
                'id' => 892,
                'city_id' => 116,
                'province_id' => 11,
                'name' => '伊川县',
                'status' => 1,
            ),
            392 => 
            array (
                'id' => 893,
                'city_id' => 117,
                'province_id' => 11,
                'name' => '鼓楼区',
                'status' => 1,
            ),
            393 => 
            array (
                'id' => 894,
                'city_id' => 117,
                'province_id' => 11,
                'name' => '龙亭区',
                'status' => 1,
            ),
            394 => 
            array (
                'id' => 895,
                'city_id' => 117,
                'province_id' => 11,
                'name' => '顺河回族区',
                'status' => 1,
            ),
            395 => 
            array (
                'id' => 896,
                'city_id' => 117,
                'province_id' => 11,
                'name' => '金明区',
                'status' => 1,
            ),
            396 => 
            array (
                'id' => 897,
                'city_id' => 117,
                'province_id' => 11,
                'name' => '禹王台区',
                'status' => 1,
            ),
            397 => 
            array (
                'id' => 898,
                'city_id' => 117,
                'province_id' => 11,
                'name' => '杞县',
                'status' => 1,
            ),
            398 => 
            array (
                'id' => 899,
                'city_id' => 117,
                'province_id' => 11,
                'name' => '通许县',
                'status' => 1,
            ),
            399 => 
            array (
                'id' => 900,
                'city_id' => 117,
                'province_id' => 11,
                'name' => '尉氏县',
                'status' => 1,
            ),
            400 => 
            array (
                'id' => 901,
                'city_id' => 117,
                'province_id' => 11,
                'name' => '开封县',
                'status' => 1,
            ),
            401 => 
            array (
                'id' => 902,
                'city_id' => 117,
                'province_id' => 11,
                'name' => '兰考县',
                'status' => 1,
            ),
            402 => 
            array (
                'id' => 903,
                'city_id' => 118,
                'province_id' => 11,
                'name' => '北关区',
                'status' => 1,
            ),
            403 => 
            array (
                'id' => 904,
                'city_id' => 118,
                'province_id' => 11,
                'name' => '文峰区',
                'status' => 1,
            ),
            404 => 
            array (
                'id' => 905,
                'city_id' => 118,
                'province_id' => 11,
                'name' => '殷都区',
                'status' => 1,
            ),
            405 => 
            array (
                'id' => 906,
                'city_id' => 118,
                'province_id' => 11,
                'name' => '龙安区',
                'status' => 1,
            ),
            406 => 
            array (
                'id' => 907,
                'city_id' => 118,
                'province_id' => 11,
                'name' => '林州市',
                'status' => 1,
            ),
            407 => 
            array (
                'id' => 908,
                'city_id' => 118,
                'province_id' => 11,
                'name' => '安阳县',
                'status' => 1,
            ),
            408 => 
            array (
                'id' => 909,
                'city_id' => 118,
                'province_id' => 11,
                'name' => '汤阴县',
                'status' => 1,
            ),
            409 => 
            array (
                'id' => 910,
                'city_id' => 118,
                'province_id' => 11,
                'name' => '滑县',
                'status' => 1,
            ),
            410 => 
            array (
                'id' => 911,
                'city_id' => 118,
                'province_id' => 11,
                'name' => '内黄县',
                'status' => 1,
            ),
            411 => 
            array (
                'id' => 912,
                'city_id' => 119,
                'province_id' => 11,
                'name' => '淇滨区',
                'status' => 1,
            ),
            412 => 
            array (
                'id' => 913,
                'city_id' => 119,
                'province_id' => 11,
                'name' => '山城区',
                'status' => 1,
            ),
            413 => 
            array (
                'id' => 914,
                'city_id' => 119,
                'province_id' => 11,
                'name' => '鹤山区',
                'status' => 1,
            ),
            414 => 
            array (
                'id' => 915,
                'city_id' => 119,
                'province_id' => 11,
                'name' => '浚县',
                'status' => 1,
            ),
            415 => 
            array (
                'id' => 916,
                'city_id' => 119,
                'province_id' => 11,
                'name' => '淇县',
                'status' => 1,
            ),
            416 => 
            array (
                'id' => 917,
                'city_id' => 120,
                'province_id' => 11,
                'name' => '济源市',
                'status' => 1,
            ),
            417 => 
            array (
                'id' => 918,
                'city_id' => 121,
                'province_id' => 11,
                'name' => '解放区',
                'status' => 1,
            ),
            418 => 
            array (
                'id' => 919,
                'city_id' => 121,
                'province_id' => 11,
                'name' => '中站区',
                'status' => 1,
            ),
            419 => 
            array (
                'id' => 920,
                'city_id' => 121,
                'province_id' => 11,
                'name' => '马村区',
                'status' => 1,
            ),
            420 => 
            array (
                'id' => 921,
                'city_id' => 121,
                'province_id' => 11,
                'name' => '山阳区',
                'status' => 1,
            ),
            421 => 
            array (
                'id' => 922,
                'city_id' => 121,
                'province_id' => 11,
                'name' => '沁阳市',
                'status' => 1,
            ),
            422 => 
            array (
                'id' => 923,
                'city_id' => 121,
                'province_id' => 11,
                'name' => '孟州市',
                'status' => 1,
            ),
            423 => 
            array (
                'id' => 924,
                'city_id' => 121,
                'province_id' => 11,
                'name' => '修武县',
                'status' => 1,
            ),
            424 => 
            array (
                'id' => 925,
                'city_id' => 121,
                'province_id' => 11,
                'name' => '博爱县',
                'status' => 1,
            ),
            425 => 
            array (
                'id' => 926,
                'city_id' => 121,
                'province_id' => 11,
                'name' => '武陟县',
                'status' => 1,
            ),
            426 => 
            array (
                'id' => 927,
                'city_id' => 121,
                'province_id' => 11,
                'name' => '温县',
                'status' => 1,
            ),
            427 => 
            array (
                'id' => 928,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '卧龙区',
                'status' => 1,
            ),
            428 => 
            array (
                'id' => 929,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '宛城区',
                'status' => 1,
            ),
            429 => 
            array (
                'id' => 930,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '邓州市',
                'status' => 1,
            ),
            430 => 
            array (
                'id' => 931,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '南召县',
                'status' => 1,
            ),
            431 => 
            array (
                'id' => 932,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '方城县',
                'status' => 1,
            ),
            432 => 
            array (
                'id' => 933,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '西峡县',
                'status' => 1,
            ),
            433 => 
            array (
                'id' => 934,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '镇平县',
                'status' => 1,
            ),
            434 => 
            array (
                'id' => 935,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '内乡县',
                'status' => 1,
            ),
            435 => 
            array (
                'id' => 936,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '淅川县',
                'status' => 1,
            ),
            436 => 
            array (
                'id' => 937,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '社旗县',
                'status' => 1,
            ),
            437 => 
            array (
                'id' => 938,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '唐河县',
                'status' => 1,
            ),
            438 => 
            array (
                'id' => 939,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '新野县',
                'status' => 1,
            ),
            439 => 
            array (
                'id' => 940,
                'city_id' => 122,
                'province_id' => 11,
                'name' => '桐柏县',
                'status' => 1,
            ),
            440 => 
            array (
                'id' => 941,
                'city_id' => 123,
                'province_id' => 11,
                'name' => '新华区',
                'status' => 1,
            ),
            441 => 
            array (
                'id' => 942,
                'city_id' => 123,
                'province_id' => 11,
                'name' => '卫东区',
                'status' => 1,
            ),
            442 => 
            array (
                'id' => 943,
                'city_id' => 123,
                'province_id' => 11,
                'name' => '湛河区',
                'status' => 1,
            ),
            443 => 
            array (
                'id' => 944,
                'city_id' => 123,
                'province_id' => 11,
                'name' => '石龙区',
                'status' => 1,
            ),
            444 => 
            array (
                'id' => 945,
                'city_id' => 123,
                'province_id' => 11,
                'name' => '舞钢市',
                'status' => 1,
            ),
            445 => 
            array (
                'id' => 946,
                'city_id' => 123,
                'province_id' => 11,
                'name' => '汝州市',
                'status' => 1,
            ),
            446 => 
            array (
                'id' => 947,
                'city_id' => 123,
                'province_id' => 11,
                'name' => '宝丰县',
                'status' => 1,
            ),
            447 => 
            array (
                'id' => 948,
                'city_id' => 123,
                'province_id' => 11,
                'name' => '叶县',
                'status' => 1,
            ),
            448 => 
            array (
                'id' => 949,
                'city_id' => 123,
                'province_id' => 11,
                'name' => '鲁山县',
                'status' => 1,
            ),
            449 => 
            array (
                'id' => 950,
                'city_id' => 123,
                'province_id' => 11,
                'name' => '郏县',
                'status' => 1,
            ),
            450 => 
            array (
                'id' => 951,
                'city_id' => 124,
                'province_id' => 11,
                'name' => '湖滨区',
                'status' => 1,
            ),
            451 => 
            array (
                'id' => 952,
                'city_id' => 124,
                'province_id' => 11,
                'name' => '义马市',
                'status' => 1,
            ),
            452 => 
            array (
                'id' => 953,
                'city_id' => 124,
                'province_id' => 11,
                'name' => '灵宝市',
                'status' => 1,
            ),
            453 => 
            array (
                'id' => 954,
                'city_id' => 124,
                'province_id' => 11,
                'name' => '渑池县',
                'status' => 1,
            ),
            454 => 
            array (
                'id' => 955,
                'city_id' => 124,
                'province_id' => 11,
                'name' => '陕县',
                'status' => 1,
            ),
            455 => 
            array (
                'id' => 956,
                'city_id' => 124,
                'province_id' => 11,
                'name' => '卢氏县',
                'status' => 1,
            ),
            456 => 
            array (
                'id' => 957,
                'city_id' => 125,
                'province_id' => 11,
                'name' => '梁园区',
                'status' => 1,
            ),
            457 => 
            array (
                'id' => 958,
                'city_id' => 125,
                'province_id' => 11,
                'name' => '睢阳区',
                'status' => 1,
            ),
            458 => 
            array (
                'id' => 959,
                'city_id' => 125,
                'province_id' => 11,
                'name' => '永城市',
                'status' => 1,
            ),
            459 => 
            array (
                'id' => 960,
                'city_id' => 125,
                'province_id' => 11,
                'name' => '民权县',
                'status' => 1,
            ),
            460 => 
            array (
                'id' => 961,
                'city_id' => 125,
                'province_id' => 11,
                'name' => '睢县',
                'status' => 1,
            ),
            461 => 
            array (
                'id' => 962,
                'city_id' => 125,
                'province_id' => 11,
                'name' => '宁陵县',
                'status' => 1,
            ),
            462 => 
            array (
                'id' => 963,
                'city_id' => 125,
                'province_id' => 11,
                'name' => '虞城县',
                'status' => 1,
            ),
            463 => 
            array (
                'id' => 964,
                'city_id' => 125,
                'province_id' => 11,
                'name' => '柘城县',
                'status' => 1,
            ),
            464 => 
            array (
                'id' => 965,
                'city_id' => 125,
                'province_id' => 11,
                'name' => '夏邑县',
                'status' => 1,
            ),
            465 => 
            array (
                'id' => 966,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '卫滨区',
                'status' => 1,
            ),
            466 => 
            array (
                'id' => 967,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '红旗区',
                'status' => 1,
            ),
            467 => 
            array (
                'id' => 968,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '凤泉区',
                'status' => 1,
            ),
            468 => 
            array (
                'id' => 969,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '牧野区',
                'status' => 1,
            ),
            469 => 
            array (
                'id' => 970,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '卫辉市',
                'status' => 1,
            ),
            470 => 
            array (
                'id' => 971,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '辉县市',
                'status' => 1,
            ),
            471 => 
            array (
                'id' => 972,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '新乡县',
                'status' => 1,
            ),
            472 => 
            array (
                'id' => 973,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '获嘉县',
                'status' => 1,
            ),
            473 => 
            array (
                'id' => 974,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '原阳县',
                'status' => 1,
            ),
            474 => 
            array (
                'id' => 975,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '延津县',
                'status' => 1,
            ),
            475 => 
            array (
                'id' => 976,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '封丘县',
                'status' => 1,
            ),
            476 => 
            array (
                'id' => 977,
                'city_id' => 126,
                'province_id' => 11,
                'name' => '长垣县',
                'status' => 1,
            ),
            477 => 
            array (
                'id' => 978,
                'city_id' => 127,
                'province_id' => 11,
                'name' => '浉河区',
                'status' => 1,
            ),
            478 => 
            array (
                'id' => 979,
                'city_id' => 127,
                'province_id' => 11,
                'name' => '平桥区',
                'status' => 1,
            ),
            479 => 
            array (
                'id' => 980,
                'city_id' => 127,
                'province_id' => 11,
                'name' => '罗山县',
                'status' => 1,
            ),
            480 => 
            array (
                'id' => 981,
                'city_id' => 127,
                'province_id' => 11,
                'name' => '光山县',
                'status' => 1,
            ),
            481 => 
            array (
                'id' => 982,
                'city_id' => 127,
                'province_id' => 11,
                'name' => '新县',
                'status' => 1,
            ),
            482 => 
            array (
                'id' => 983,
                'city_id' => 127,
                'province_id' => 11,
                'name' => '商城县',
                'status' => 1,
            ),
            483 => 
            array (
                'id' => 984,
                'city_id' => 127,
                'province_id' => 11,
                'name' => '固始县',
                'status' => 1,
            ),
            484 => 
            array (
                'id' => 985,
                'city_id' => 127,
                'province_id' => 11,
                'name' => '潢川县',
                'status' => 1,
            ),
            485 => 
            array (
                'id' => 986,
                'city_id' => 127,
                'province_id' => 11,
                'name' => '淮滨县',
                'status' => 1,
            ),
            486 => 
            array (
                'id' => 987,
                'city_id' => 127,
                'province_id' => 11,
                'name' => '息县',
                'status' => 1,
            ),
            487 => 
            array (
                'id' => 988,
                'city_id' => 128,
                'province_id' => 11,
                'name' => '魏都区',
                'status' => 1,
            ),
            488 => 
            array (
                'id' => 989,
                'city_id' => 128,
                'province_id' => 11,
                'name' => '禹州市',
                'status' => 1,
            ),
            489 => 
            array (
                'id' => 990,
                'city_id' => 128,
                'province_id' => 11,
                'name' => '长葛市',
                'status' => 1,
            ),
            490 => 
            array (
                'id' => 991,
                'city_id' => 128,
                'province_id' => 11,
                'name' => '许昌县',
                'status' => 1,
            ),
            491 => 
            array (
                'id' => 992,
                'city_id' => 128,
                'province_id' => 11,
                'name' => '鄢陵县',
                'status' => 1,
            ),
            492 => 
            array (
                'id' => 993,
                'city_id' => 128,
                'province_id' => 11,
                'name' => '襄城县',
                'status' => 1,
            ),
            493 => 
            array (
                'id' => 994,
                'city_id' => 129,
                'province_id' => 11,
                'name' => '川汇区',
                'status' => 1,
            ),
            494 => 
            array (
                'id' => 995,
                'city_id' => 129,
                'province_id' => 11,
                'name' => '项城市',
                'status' => 1,
            ),
            495 => 
            array (
                'id' => 996,
                'city_id' => 129,
                'province_id' => 11,
                'name' => '扶沟县',
                'status' => 1,
            ),
            496 => 
            array (
                'id' => 997,
                'city_id' => 129,
                'province_id' => 11,
                'name' => '西华县',
                'status' => 1,
            ),
            497 => 
            array (
                'id' => 998,
                'city_id' => 129,
                'province_id' => 11,
                'name' => '商水县',
                'status' => 1,
            ),
            498 => 
            array (
                'id' => 999,
                'city_id' => 129,
                'province_id' => 11,
                'name' => '沈丘县',
                'status' => 1,
            ),
            499 => 
            array (
                'id' => 1000,
                'city_id' => 129,
                'province_id' => 11,
                'name' => '郸城县',
                'status' => 1,
            ),
        ));
        \DB::table('geo_districts')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'city_id' => 129,
                'province_id' => 11,
                'name' => '淮阳县',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 1002,
                'city_id' => 129,
                'province_id' => 11,
                'name' => '太康县',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 1003,
                'city_id' => 129,
                'province_id' => 11,
                'name' => '鹿邑县',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 1004,
                'city_id' => 130,
                'province_id' => 11,
                'name' => '驿城区',
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 1005,
                'city_id' => 130,
                'province_id' => 11,
                'name' => '西平县',
                'status' => 1,
            ),
            5 => 
            array (
                'id' => 1006,
                'city_id' => 130,
                'province_id' => 11,
                'name' => '上蔡县',
                'status' => 1,
            ),
            6 => 
            array (
                'id' => 1007,
                'city_id' => 130,
                'province_id' => 11,
                'name' => '平舆县',
                'status' => 1,
            ),
            7 => 
            array (
                'id' => 1008,
                'city_id' => 130,
                'province_id' => 11,
                'name' => '正阳县',
                'status' => 1,
            ),
            8 => 
            array (
                'id' => 1009,
                'city_id' => 130,
                'province_id' => 11,
                'name' => '确山县',
                'status' => 1,
            ),
            9 => 
            array (
                'id' => 1010,
                'city_id' => 130,
                'province_id' => 11,
                'name' => '泌阳县',
                'status' => 1,
            ),
            10 => 
            array (
                'id' => 1011,
                'city_id' => 130,
                'province_id' => 11,
                'name' => '汝南县',
                'status' => 1,
            ),
            11 => 
            array (
                'id' => 1012,
                'city_id' => 130,
                'province_id' => 11,
                'name' => '遂平县',
                'status' => 1,
            ),
            12 => 
            array (
                'id' => 1013,
                'city_id' => 130,
                'province_id' => 11,
                'name' => '新蔡县',
                'status' => 1,
            ),
            13 => 
            array (
                'id' => 1014,
                'city_id' => 131,
                'province_id' => 11,
                'name' => '郾城区',
                'status' => 1,
            ),
            14 => 
            array (
                'id' => 1015,
                'city_id' => 131,
                'province_id' => 11,
                'name' => '源汇区',
                'status' => 1,
            ),
            15 => 
            array (
                'id' => 1016,
                'city_id' => 131,
                'province_id' => 11,
                'name' => '召陵区',
                'status' => 1,
            ),
            16 => 
            array (
                'id' => 1017,
                'city_id' => 131,
                'province_id' => 11,
                'name' => '舞阳县',
                'status' => 1,
            ),
            17 => 
            array (
                'id' => 1018,
                'city_id' => 131,
                'province_id' => 11,
                'name' => '临颍县',
                'status' => 1,
            ),
            18 => 
            array (
                'id' => 1019,
                'city_id' => 132,
                'province_id' => 11,
                'name' => '华龙区',
                'status' => 1,
            ),
            19 => 
            array (
                'id' => 1020,
                'city_id' => 132,
                'province_id' => 11,
                'name' => '清丰县',
                'status' => 1,
            ),
            20 => 
            array (
                'id' => 1021,
                'city_id' => 132,
                'province_id' => 11,
                'name' => '南乐县',
                'status' => 1,
            ),
            21 => 
            array (
                'id' => 1022,
                'city_id' => 132,
                'province_id' => 11,
                'name' => '范县',
                'status' => 1,
            ),
            22 => 
            array (
                'id' => 1023,
                'city_id' => 132,
                'province_id' => 11,
                'name' => '台前县',
                'status' => 1,
            ),
            23 => 
            array (
                'id' => 1024,
                'city_id' => 132,
                'province_id' => 11,
                'name' => '濮阳县',
                'status' => 1,
            ),
            24 => 
            array (
                'id' => 1025,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '道里区',
                'status' => 1,
            ),
            25 => 
            array (
                'id' => 1026,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '南岗区',
                'status' => 1,
            ),
            26 => 
            array (
                'id' => 1027,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '动力区',
                'status' => 1,
            ),
            27 => 
            array (
                'id' => 1028,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '平房区',
                'status' => 1,
            ),
            28 => 
            array (
                'id' => 1029,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '香坊区',
                'status' => 1,
            ),
            29 => 
            array (
                'id' => 1030,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '太平区',
                'status' => 1,
            ),
            30 => 
            array (
                'id' => 1031,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '道外区',
                'status' => 1,
            ),
            31 => 
            array (
                'id' => 1032,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '阿城区',
                'status' => 1,
            ),
            32 => 
            array (
                'id' => 1033,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '呼兰区',
                'status' => 1,
            ),
            33 => 
            array (
                'id' => 1034,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '松北区',
                'status' => 1,
            ),
            34 => 
            array (
                'id' => 1035,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '尚志市',
                'status' => 1,
            ),
            35 => 
            array (
                'id' => 1036,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '双城市',
                'status' => 1,
            ),
            36 => 
            array (
                'id' => 1037,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '五常市',
                'status' => 1,
            ),
            37 => 
            array (
                'id' => 1038,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '方正县',
                'status' => 1,
            ),
            38 => 
            array (
                'id' => 1039,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '宾县',
                'status' => 1,
            ),
            39 => 
            array (
                'id' => 1040,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '依兰县',
                'status' => 1,
            ),
            40 => 
            array (
                'id' => 1041,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '巴彦县',
                'status' => 1,
            ),
            41 => 
            array (
                'id' => 1042,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '通河县',
                'status' => 1,
            ),
            42 => 
            array (
                'id' => 1043,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '木兰县',
                'status' => 1,
            ),
            43 => 
            array (
                'id' => 1044,
                'city_id' => 133,
                'province_id' => 12,
                'name' => '延寿县',
                'status' => 1,
            ),
            44 => 
            array (
                'id' => 1045,
                'city_id' => 134,
                'province_id' => 12,
                'name' => '萨尔图区',
                'status' => 1,
            ),
            45 => 
            array (
                'id' => 1046,
                'city_id' => 134,
                'province_id' => 12,
                'name' => '红岗区',
                'status' => 1,
            ),
            46 => 
            array (
                'id' => 1047,
                'city_id' => 134,
                'province_id' => 12,
                'name' => '龙凤区',
                'status' => 1,
            ),
            47 => 
            array (
                'id' => 1048,
                'city_id' => 134,
                'province_id' => 12,
                'name' => '让胡路区',
                'status' => 1,
            ),
            48 => 
            array (
                'id' => 1049,
                'city_id' => 134,
                'province_id' => 12,
                'name' => '大同区',
                'status' => 1,
            ),
            49 => 
            array (
                'id' => 1050,
                'city_id' => 134,
                'province_id' => 12,
                'name' => '肇州县',
                'status' => 1,
            ),
            50 => 
            array (
                'id' => 1051,
                'city_id' => 134,
                'province_id' => 12,
                'name' => '肇源县',
                'status' => 1,
            ),
            51 => 
            array (
                'id' => 1052,
                'city_id' => 134,
                'province_id' => 12,
                'name' => '林甸县',
                'status' => 1,
            ),
            52 => 
            array (
                'id' => 1053,
                'city_id' => 134,
                'province_id' => 12,
                'name' => '杜尔伯特',
                'status' => 1,
            ),
            53 => 
            array (
                'id' => 1054,
                'city_id' => 135,
                'province_id' => 12,
                'name' => '呼玛县',
                'status' => 1,
            ),
            54 => 
            array (
                'id' => 1055,
                'city_id' => 135,
                'province_id' => 12,
                'name' => '漠河县',
                'status' => 1,
            ),
            55 => 
            array (
                'id' => 1056,
                'city_id' => 135,
                'province_id' => 12,
                'name' => '塔河县',
                'status' => 1,
            ),
            56 => 
            array (
                'id' => 1057,
                'city_id' => 136,
                'province_id' => 12,
                'name' => '兴山区',
                'status' => 1,
            ),
            57 => 
            array (
                'id' => 1058,
                'city_id' => 136,
                'province_id' => 12,
                'name' => '工农区',
                'status' => 1,
            ),
            58 => 
            array (
                'id' => 1059,
                'city_id' => 136,
                'province_id' => 12,
                'name' => '南山区',
                'status' => 1,
            ),
            59 => 
            array (
                'id' => 1060,
                'city_id' => 136,
                'province_id' => 12,
                'name' => '兴安区',
                'status' => 1,
            ),
            60 => 
            array (
                'id' => 1061,
                'city_id' => 136,
                'province_id' => 12,
                'name' => '向阳区',
                'status' => 1,
            ),
            61 => 
            array (
                'id' => 1062,
                'city_id' => 136,
                'province_id' => 12,
                'name' => '东山区',
                'status' => 1,
            ),
            62 => 
            array (
                'id' => 1063,
                'city_id' => 136,
                'province_id' => 12,
                'name' => '萝北县',
                'status' => 1,
            ),
            63 => 
            array (
                'id' => 1064,
                'city_id' => 136,
                'province_id' => 12,
                'name' => '绥滨县',
                'status' => 1,
            ),
            64 => 
            array (
                'id' => 1065,
                'city_id' => 137,
                'province_id' => 12,
                'name' => '爱辉区',
                'status' => 1,
            ),
            65 => 
            array (
                'id' => 1066,
                'city_id' => 137,
                'province_id' => 12,
                'name' => '五大连池市',
                'status' => 1,
            ),
            66 => 
            array (
                'id' => 1067,
                'city_id' => 137,
                'province_id' => 12,
                'name' => '北安市',
                'status' => 1,
            ),
            67 => 
            array (
                'id' => 1068,
                'city_id' => 137,
                'province_id' => 12,
                'name' => '嫩江县',
                'status' => 1,
            ),
            68 => 
            array (
                'id' => 1069,
                'city_id' => 137,
                'province_id' => 12,
                'name' => '逊克县',
                'status' => 1,
            ),
            69 => 
            array (
                'id' => 1070,
                'city_id' => 137,
                'province_id' => 12,
                'name' => '孙吴县',
                'status' => 1,
            ),
            70 => 
            array (
                'id' => 1071,
                'city_id' => 138,
                'province_id' => 12,
                'name' => '鸡冠区',
                'status' => 1,
            ),
            71 => 
            array (
                'id' => 1072,
                'city_id' => 138,
                'province_id' => 12,
                'name' => '恒山区',
                'status' => 1,
            ),
            72 => 
            array (
                'id' => 1073,
                'city_id' => 138,
                'province_id' => 12,
                'name' => '城子河区',
                'status' => 1,
            ),
            73 => 
            array (
                'id' => 1074,
                'city_id' => 138,
                'province_id' => 12,
                'name' => '滴道区',
                'status' => 1,
            ),
            74 => 
            array (
                'id' => 1075,
                'city_id' => 138,
                'province_id' => 12,
                'name' => '梨树区',
                'status' => 1,
            ),
            75 => 
            array (
                'id' => 1076,
                'city_id' => 138,
                'province_id' => 12,
                'name' => '虎林市',
                'status' => 1,
            ),
            76 => 
            array (
                'id' => 1077,
                'city_id' => 138,
                'province_id' => 12,
                'name' => '密山市',
                'status' => 1,
            ),
            77 => 
            array (
                'id' => 1078,
                'city_id' => 138,
                'province_id' => 12,
                'name' => '鸡东县',
                'status' => 1,
            ),
            78 => 
            array (
                'id' => 1079,
                'city_id' => 139,
                'province_id' => 12,
                'name' => '前进区',
                'status' => 1,
            ),
            79 => 
            array (
                'id' => 1080,
                'city_id' => 139,
                'province_id' => 12,
                'name' => '郊区',
                'status' => 1,
            ),
            80 => 
            array (
                'id' => 1081,
                'city_id' => 139,
                'province_id' => 12,
                'name' => '向阳区',
                'status' => 1,
            ),
            81 => 
            array (
                'id' => 1082,
                'city_id' => 139,
                'province_id' => 12,
                'name' => '东风区',
                'status' => 1,
            ),
            82 => 
            array (
                'id' => 1083,
                'city_id' => 139,
                'province_id' => 12,
                'name' => '同江市',
                'status' => 1,
            ),
            83 => 
            array (
                'id' => 1084,
                'city_id' => 139,
                'province_id' => 12,
                'name' => '富锦市',
                'status' => 1,
            ),
            84 => 
            array (
                'id' => 1085,
                'city_id' => 139,
                'province_id' => 12,
                'name' => '桦南县',
                'status' => 1,
            ),
            85 => 
            array (
                'id' => 1086,
                'city_id' => 139,
                'province_id' => 12,
                'name' => '桦川县',
                'status' => 1,
            ),
            86 => 
            array (
                'id' => 1087,
                'city_id' => 139,
                'province_id' => 12,
                'name' => '汤原县',
                'status' => 1,
            ),
            87 => 
            array (
                'id' => 1088,
                'city_id' => 139,
                'province_id' => 12,
                'name' => '抚远县',
                'status' => 1,
            ),
            88 => 
            array (
                'id' => 1089,
                'city_id' => 140,
                'province_id' => 12,
                'name' => '爱民区',
                'status' => 1,
            ),
            89 => 
            array (
                'id' => 1090,
                'city_id' => 140,
                'province_id' => 12,
                'name' => '东安区',
                'status' => 1,
            ),
            90 => 
            array (
                'id' => 1091,
                'city_id' => 140,
                'province_id' => 12,
                'name' => '阳明区',
                'status' => 1,
            ),
            91 => 
            array (
                'id' => 1092,
                'city_id' => 140,
                'province_id' => 12,
                'name' => '西安区',
                'status' => 1,
            ),
            92 => 
            array (
                'id' => 1093,
                'city_id' => 140,
                'province_id' => 12,
                'name' => '绥芬河市',
                'status' => 1,
            ),
            93 => 
            array (
                'id' => 1094,
                'city_id' => 140,
                'province_id' => 12,
                'name' => '海林市',
                'status' => 1,
            ),
            94 => 
            array (
                'id' => 1095,
                'city_id' => 140,
                'province_id' => 12,
                'name' => '宁安市',
                'status' => 1,
            ),
            95 => 
            array (
                'id' => 1096,
                'city_id' => 140,
                'province_id' => 12,
                'name' => '穆棱市',
                'status' => 1,
            ),
            96 => 
            array (
                'id' => 1097,
                'city_id' => 140,
                'province_id' => 12,
                'name' => '东宁县',
                'status' => 1,
            ),
            97 => 
            array (
                'id' => 1098,
                'city_id' => 140,
                'province_id' => 12,
                'name' => '林口县',
                'status' => 1,
            ),
            98 => 
            array (
                'id' => 1099,
                'city_id' => 141,
                'province_id' => 12,
                'name' => '桃山区',
                'status' => 1,
            ),
            99 => 
            array (
                'id' => 1100,
                'city_id' => 141,
                'province_id' => 12,
                'name' => '新兴区',
                'status' => 1,
            ),
            100 => 
            array (
                'id' => 1101,
                'city_id' => 141,
                'province_id' => 12,
                'name' => '茄子河区',
                'status' => 1,
            ),
            101 => 
            array (
                'id' => 1102,
                'city_id' => 141,
                'province_id' => 12,
                'name' => '勃利县',
                'status' => 1,
            ),
            102 => 
            array (
                'id' => 1103,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '龙沙区',
                'status' => 1,
            ),
            103 => 
            array (
                'id' => 1104,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '昂昂溪区',
                'status' => 1,
            ),
            104 => 
            array (
                'id' => 1105,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '铁峰区',
                'status' => 1,
            ),
            105 => 
            array (
                'id' => 1106,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '建华区',
                'status' => 1,
            ),
            106 => 
            array (
                'id' => 1107,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '富拉尔基区',
                'status' => 1,
            ),
            107 => 
            array (
                'id' => 1108,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '碾子山区',
                'status' => 1,
            ),
            108 => 
            array (
                'id' => 1109,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '梅里斯达斡尔区',
                'status' => 1,
            ),
            109 => 
            array (
                'id' => 1110,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '讷河市',
                'status' => 1,
            ),
            110 => 
            array (
                'id' => 1111,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '龙江县',
                'status' => 1,
            ),
            111 => 
            array (
                'id' => 1112,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '依安县',
                'status' => 1,
            ),
            112 => 
            array (
                'id' => 1113,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '泰来县',
                'status' => 1,
            ),
            113 => 
            array (
                'id' => 1114,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '甘南县',
                'status' => 1,
            ),
            114 => 
            array (
                'id' => 1115,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '富裕县',
                'status' => 1,
            ),
            115 => 
            array (
                'id' => 1116,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '克山县',
                'status' => 1,
            ),
            116 => 
            array (
                'id' => 1117,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '克东县',
                'status' => 1,
            ),
            117 => 
            array (
                'id' => 1118,
                'city_id' => 142,
                'province_id' => 12,
                'name' => '拜泉县',
                'status' => 1,
            ),
            118 => 
            array (
                'id' => 1119,
                'city_id' => 143,
                'province_id' => 12,
                'name' => '尖山区',
                'status' => 1,
            ),
            119 => 
            array (
                'id' => 1120,
                'city_id' => 143,
                'province_id' => 12,
                'name' => '岭东区',
                'status' => 1,
            ),
            120 => 
            array (
                'id' => 1121,
                'city_id' => 143,
                'province_id' => 12,
                'name' => '四方台区',
                'status' => 1,
            ),
            121 => 
            array (
                'id' => 1122,
                'city_id' => 143,
                'province_id' => 12,
                'name' => '宝山区',
                'status' => 1,
            ),
            122 => 
            array (
                'id' => 1123,
                'city_id' => 143,
                'province_id' => 12,
                'name' => '集贤县',
                'status' => 1,
            ),
            123 => 
            array (
                'id' => 1124,
                'city_id' => 143,
                'province_id' => 12,
                'name' => '友谊县',
                'status' => 1,
            ),
            124 => 
            array (
                'id' => 1125,
                'city_id' => 143,
                'province_id' => 12,
                'name' => '宝清县',
                'status' => 1,
            ),
            125 => 
            array (
                'id' => 1126,
                'city_id' => 143,
                'province_id' => 12,
                'name' => '饶河县',
                'status' => 1,
            ),
            126 => 
            array (
                'id' => 1127,
                'city_id' => 144,
                'province_id' => 12,
                'name' => '北林区',
                'status' => 1,
            ),
            127 => 
            array (
                'id' => 1128,
                'city_id' => 144,
                'province_id' => 12,
                'name' => '安达市',
                'status' => 1,
            ),
            128 => 
            array (
                'id' => 1129,
                'city_id' => 144,
                'province_id' => 12,
                'name' => '肇东市',
                'status' => 1,
            ),
            129 => 
            array (
                'id' => 1130,
                'city_id' => 144,
                'province_id' => 12,
                'name' => '海伦市',
                'status' => 1,
            ),
            130 => 
            array (
                'id' => 1131,
                'city_id' => 144,
                'province_id' => 12,
                'name' => '望奎县',
                'status' => 1,
            ),
            131 => 
            array (
                'id' => 1132,
                'city_id' => 144,
                'province_id' => 12,
                'name' => '兰西县',
                'status' => 1,
            ),
            132 => 
            array (
                'id' => 1133,
                'city_id' => 144,
                'province_id' => 12,
                'name' => '青冈县',
                'status' => 1,
            ),
            133 => 
            array (
                'id' => 1134,
                'city_id' => 144,
                'province_id' => 12,
                'name' => '庆安县',
                'status' => 1,
            ),
            134 => 
            array (
                'id' => 1135,
                'city_id' => 144,
                'province_id' => 12,
                'name' => '明水县',
                'status' => 1,
            ),
            135 => 
            array (
                'id' => 1136,
                'city_id' => 144,
                'province_id' => 12,
                'name' => '绥棱县',
                'status' => 1,
            ),
            136 => 
            array (
                'id' => 1137,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '伊春区',
                'status' => 1,
            ),
            137 => 
            array (
                'id' => 1138,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '带岭区',
                'status' => 1,
            ),
            138 => 
            array (
                'id' => 1139,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '南岔区',
                'status' => 1,
            ),
            139 => 
            array (
                'id' => 1140,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '金山屯区',
                'status' => 1,
            ),
            140 => 
            array (
                'id' => 1141,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '西林区',
                'status' => 1,
            ),
            141 => 
            array (
                'id' => 1142,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '美溪区',
                'status' => 1,
            ),
            142 => 
            array (
                'id' => 1143,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '乌马河区',
                'status' => 1,
            ),
            143 => 
            array (
                'id' => 1144,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '翠峦区',
                'status' => 1,
            ),
            144 => 
            array (
                'id' => 1145,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '友好区',
                'status' => 1,
            ),
            145 => 
            array (
                'id' => 1146,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '上甘岭区',
                'status' => 1,
            ),
            146 => 
            array (
                'id' => 1147,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '五营区',
                'status' => 1,
            ),
            147 => 
            array (
                'id' => 1148,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '红星区',
                'status' => 1,
            ),
            148 => 
            array (
                'id' => 1149,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '新青区',
                'status' => 1,
            ),
            149 => 
            array (
                'id' => 1150,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '汤旺河区',
                'status' => 1,
            ),
            150 => 
            array (
                'id' => 1151,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '乌伊岭区',
                'status' => 1,
            ),
            151 => 
            array (
                'id' => 1152,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '铁力市',
                'status' => 1,
            ),
            152 => 
            array (
                'id' => 1153,
                'city_id' => 145,
                'province_id' => 12,
                'name' => '嘉荫县',
                'status' => 1,
            ),
            153 => 
            array (
                'id' => 1154,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '江岸区',
                'status' => 1,
            ),
            154 => 
            array (
                'id' => 1155,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '武昌区',
                'status' => 1,
            ),
            155 => 
            array (
                'id' => 1156,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '江汉区',
                'status' => 1,
            ),
            156 => 
            array (
                'id' => 1157,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '硚口区',
                'status' => 1,
            ),
            157 => 
            array (
                'id' => 1158,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '汉阳区',
                'status' => 1,
            ),
            158 => 
            array (
                'id' => 1159,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '青山区',
                'status' => 1,
            ),
            159 => 
            array (
                'id' => 1160,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '洪山区',
                'status' => 1,
            ),
            160 => 
            array (
                'id' => 1161,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '东西湖区',
                'status' => 1,
            ),
            161 => 
            array (
                'id' => 1162,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '汉南区',
                'status' => 1,
            ),
            162 => 
            array (
                'id' => 1163,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '蔡甸区',
                'status' => 1,
            ),
            163 => 
            array (
                'id' => 1164,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '江夏区',
                'status' => 1,
            ),
            164 => 
            array (
                'id' => 1165,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '黄陂区',
                'status' => 1,
            ),
            165 => 
            array (
                'id' => 1166,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '新洲区',
                'status' => 1,
            ),
            166 => 
            array (
                'id' => 1167,
                'city_id' => 146,
                'province_id' => 13,
                'name' => '经济开发区',
                'status' => 1,
            ),
            167 => 
            array (
                'id' => 1168,
                'city_id' => 147,
                'province_id' => 13,
                'name' => '仙桃市',
                'status' => 1,
            ),
            168 => 
            array (
                'id' => 1169,
                'city_id' => 148,
                'province_id' => 13,
                'name' => '鄂城区',
                'status' => 1,
            ),
            169 => 
            array (
                'id' => 1170,
                'city_id' => 148,
                'province_id' => 13,
                'name' => '华容区',
                'status' => 1,
            ),
            170 => 
            array (
                'id' => 1171,
                'city_id' => 148,
                'province_id' => 13,
                'name' => '梁子湖区',
                'status' => 1,
            ),
            171 => 
            array (
                'id' => 1172,
                'city_id' => 149,
                'province_id' => 13,
                'name' => '黄州区',
                'status' => 1,
            ),
            172 => 
            array (
                'id' => 1173,
                'city_id' => 149,
                'province_id' => 13,
                'name' => '麻城市',
                'status' => 1,
            ),
            173 => 
            array (
                'id' => 1174,
                'city_id' => 149,
                'province_id' => 13,
                'name' => '武穴市',
                'status' => 1,
            ),
            174 => 
            array (
                'id' => 1175,
                'city_id' => 149,
                'province_id' => 13,
                'name' => '团风县',
                'status' => 1,
            ),
            175 => 
            array (
                'id' => 1176,
                'city_id' => 149,
                'province_id' => 13,
                'name' => '红安县',
                'status' => 1,
            ),
            176 => 
            array (
                'id' => 1177,
                'city_id' => 149,
                'province_id' => 13,
                'name' => '罗田县',
                'status' => 1,
            ),
            177 => 
            array (
                'id' => 1178,
                'city_id' => 149,
                'province_id' => 13,
                'name' => '英山县',
                'status' => 1,
            ),
            178 => 
            array (
                'id' => 1179,
                'city_id' => 149,
                'province_id' => 13,
                'name' => '浠水县',
                'status' => 1,
            ),
            179 => 
            array (
                'id' => 1180,
                'city_id' => 149,
                'province_id' => 13,
                'name' => '蕲春县',
                'status' => 1,
            ),
            180 => 
            array (
                'id' => 1181,
                'city_id' => 149,
                'province_id' => 13,
                'name' => '黄梅县',
                'status' => 1,
            ),
            181 => 
            array (
                'id' => 1182,
                'city_id' => 150,
                'province_id' => 13,
                'name' => '黄石港区',
                'status' => 1,
            ),
            182 => 
            array (
                'id' => 1183,
                'city_id' => 150,
                'province_id' => 13,
                'name' => '西塞山区',
                'status' => 1,
            ),
            183 => 
            array (
                'id' => 1184,
                'city_id' => 150,
                'province_id' => 13,
                'name' => '下陆区',
                'status' => 1,
            ),
            184 => 
            array (
                'id' => 1185,
                'city_id' => 150,
                'province_id' => 13,
                'name' => '铁山区',
                'status' => 1,
            ),
            185 => 
            array (
                'id' => 1186,
                'city_id' => 150,
                'province_id' => 13,
                'name' => '大冶市',
                'status' => 1,
            ),
            186 => 
            array (
                'id' => 1187,
                'city_id' => 150,
                'province_id' => 13,
                'name' => '阳新县',
                'status' => 1,
            ),
            187 => 
            array (
                'id' => 1188,
                'city_id' => 151,
                'province_id' => 13,
                'name' => '东宝区',
                'status' => 1,
            ),
            188 => 
            array (
                'id' => 1189,
                'city_id' => 151,
                'province_id' => 13,
                'name' => '掇刀区',
                'status' => 1,
            ),
            189 => 
            array (
                'id' => 1190,
                'city_id' => 151,
                'province_id' => 13,
                'name' => '钟祥市',
                'status' => 1,
            ),
            190 => 
            array (
                'id' => 1191,
                'city_id' => 151,
                'province_id' => 13,
                'name' => '京山县',
                'status' => 1,
            ),
            191 => 
            array (
                'id' => 1192,
                'city_id' => 151,
                'province_id' => 13,
                'name' => '沙洋县',
                'status' => 1,
            ),
            192 => 
            array (
                'id' => 1193,
                'city_id' => 152,
                'province_id' => 13,
                'name' => '沙市区',
                'status' => 1,
            ),
            193 => 
            array (
                'id' => 1194,
                'city_id' => 152,
                'province_id' => 13,
                'name' => '荆州区',
                'status' => 1,
            ),
            194 => 
            array (
                'id' => 1195,
                'city_id' => 152,
                'province_id' => 13,
                'name' => '石首市',
                'status' => 1,
            ),
            195 => 
            array (
                'id' => 1196,
                'city_id' => 152,
                'province_id' => 13,
                'name' => '洪湖市',
                'status' => 1,
            ),
            196 => 
            array (
                'id' => 1197,
                'city_id' => 152,
                'province_id' => 13,
                'name' => '松滋市',
                'status' => 1,
            ),
            197 => 
            array (
                'id' => 1198,
                'city_id' => 152,
                'province_id' => 13,
                'name' => '公安县',
                'status' => 1,
            ),
            198 => 
            array (
                'id' => 1199,
                'city_id' => 152,
                'province_id' => 13,
                'name' => '监利县',
                'status' => 1,
            ),
            199 => 
            array (
                'id' => 1200,
                'city_id' => 152,
                'province_id' => 13,
                'name' => '江陵县',
                'status' => 1,
            ),
            200 => 
            array (
                'id' => 1201,
                'city_id' => 153,
                'province_id' => 13,
                'name' => '潜江市',
                'status' => 1,
            ),
            201 => 
            array (
                'id' => 1202,
                'city_id' => 154,
                'province_id' => 13,
                'name' => '神农架林区',
                'status' => 1,
            ),
            202 => 
            array (
                'id' => 1203,
                'city_id' => 155,
                'province_id' => 13,
                'name' => '张湾区',
                'status' => 1,
            ),
            203 => 
            array (
                'id' => 1204,
                'city_id' => 155,
                'province_id' => 13,
                'name' => '茅箭区',
                'status' => 1,
            ),
            204 => 
            array (
                'id' => 1205,
                'city_id' => 155,
                'province_id' => 13,
                'name' => '丹江口市',
                'status' => 1,
            ),
            205 => 
            array (
                'id' => 1206,
                'city_id' => 155,
                'province_id' => 13,
                'name' => '郧县',
                'status' => 1,
            ),
            206 => 
            array (
                'id' => 1207,
                'city_id' => 155,
                'province_id' => 13,
                'name' => '郧西县',
                'status' => 1,
            ),
            207 => 
            array (
                'id' => 1208,
                'city_id' => 155,
                'province_id' => 13,
                'name' => '竹山县',
                'status' => 1,
            ),
            208 => 
            array (
                'id' => 1209,
                'city_id' => 155,
                'province_id' => 13,
                'name' => '竹溪县',
                'status' => 1,
            ),
            209 => 
            array (
                'id' => 1210,
                'city_id' => 155,
                'province_id' => 13,
                'name' => '房县',
                'status' => 1,
            ),
            210 => 
            array (
                'id' => 1211,
                'city_id' => 156,
                'province_id' => 13,
                'name' => '曾都区',
                'status' => 1,
            ),
            211 => 
            array (
                'id' => 1212,
                'city_id' => 156,
                'province_id' => 13,
                'name' => '广水市',
                'status' => 1,
            ),
            212 => 
            array (
                'id' => 1213,
                'city_id' => 157,
                'province_id' => 13,
                'name' => '天门市',
                'status' => 1,
            ),
            213 => 
            array (
                'id' => 1214,
                'city_id' => 158,
                'province_id' => 13,
                'name' => '咸安区',
                'status' => 1,
            ),
            214 => 
            array (
                'id' => 1215,
                'city_id' => 158,
                'province_id' => 13,
                'name' => '赤壁市',
                'status' => 1,
            ),
            215 => 
            array (
                'id' => 1216,
                'city_id' => 158,
                'province_id' => 13,
                'name' => '嘉鱼县',
                'status' => 1,
            ),
            216 => 
            array (
                'id' => 1217,
                'city_id' => 158,
                'province_id' => 13,
                'name' => '通城县',
                'status' => 1,
            ),
            217 => 
            array (
                'id' => 1218,
                'city_id' => 158,
                'province_id' => 13,
                'name' => '崇阳县',
                'status' => 1,
            ),
            218 => 
            array (
                'id' => 1219,
                'city_id' => 158,
                'province_id' => 13,
                'name' => '通山县',
                'status' => 1,
            ),
            219 => 
            array (
                'id' => 1220,
                'city_id' => 159,
                'province_id' => 13,
                'name' => '襄城区',
                'status' => 1,
            ),
            220 => 
            array (
                'id' => 1221,
                'city_id' => 159,
                'province_id' => 13,
                'name' => '樊城区',
                'status' => 1,
            ),
            221 => 
            array (
                'id' => 1222,
                'city_id' => 159,
                'province_id' => 13,
                'name' => '襄阳区',
                'status' => 1,
            ),
            222 => 
            array (
                'id' => 1223,
                'city_id' => 159,
                'province_id' => 13,
                'name' => '老河口市',
                'status' => 1,
            ),
            223 => 
            array (
                'id' => 1224,
                'city_id' => 159,
                'province_id' => 13,
                'name' => '枣阳市',
                'status' => 1,
            ),
            224 => 
            array (
                'id' => 1225,
                'city_id' => 159,
                'province_id' => 13,
                'name' => '宜城市',
                'status' => 1,
            ),
            225 => 
            array (
                'id' => 1226,
                'city_id' => 159,
                'province_id' => 13,
                'name' => '南漳县',
                'status' => 1,
            ),
            226 => 
            array (
                'id' => 1227,
                'city_id' => 159,
                'province_id' => 13,
                'name' => '谷城县',
                'status' => 1,
            ),
            227 => 
            array (
                'id' => 1228,
                'city_id' => 159,
                'province_id' => 13,
                'name' => '保康县',
                'status' => 1,
            ),
            228 => 
            array (
                'id' => 1229,
                'city_id' => 160,
                'province_id' => 13,
                'name' => '孝南区',
                'status' => 1,
            ),
            229 => 
            array (
                'id' => 1230,
                'city_id' => 160,
                'province_id' => 13,
                'name' => '应城市',
                'status' => 1,
            ),
            230 => 
            array (
                'id' => 1231,
                'city_id' => 160,
                'province_id' => 13,
                'name' => '安陆市',
                'status' => 1,
            ),
            231 => 
            array (
                'id' => 1232,
                'city_id' => 160,
                'province_id' => 13,
                'name' => '汉川市',
                'status' => 1,
            ),
            232 => 
            array (
                'id' => 1233,
                'city_id' => 160,
                'province_id' => 13,
                'name' => '孝昌县',
                'status' => 1,
            ),
            233 => 
            array (
                'id' => 1234,
                'city_id' => 160,
                'province_id' => 13,
                'name' => '大悟县',
                'status' => 1,
            ),
            234 => 
            array (
                'id' => 1235,
                'city_id' => 160,
                'province_id' => 13,
                'name' => '云梦县',
                'status' => 1,
            ),
            235 => 
            array (
                'id' => 1236,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '长阳',
                'status' => 1,
            ),
            236 => 
            array (
                'id' => 1237,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '五峰',
                'status' => 1,
            ),
            237 => 
            array (
                'id' => 1238,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '西陵区',
                'status' => 1,
            ),
            238 => 
            array (
                'id' => 1239,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '伍家岗区',
                'status' => 1,
            ),
            239 => 
            array (
                'id' => 1240,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '点军区',
                'status' => 1,
            ),
            240 => 
            array (
                'id' => 1241,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '猇亭区',
                'status' => 1,
            ),
            241 => 
            array (
                'id' => 1242,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '夷陵区',
                'status' => 1,
            ),
            242 => 
            array (
                'id' => 1243,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '宜都市',
                'status' => 1,
            ),
            243 => 
            array (
                'id' => 1244,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '当阳市',
                'status' => 1,
            ),
            244 => 
            array (
                'id' => 1245,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '枝江市',
                'status' => 1,
            ),
            245 => 
            array (
                'id' => 1246,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '远安县',
                'status' => 1,
            ),
            246 => 
            array (
                'id' => 1247,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '兴山县',
                'status' => 1,
            ),
            247 => 
            array (
                'id' => 1248,
                'city_id' => 161,
                'province_id' => 13,
                'name' => '秭归县',
                'status' => 1,
            ),
            248 => 
            array (
                'id' => 1249,
                'city_id' => 162,
                'province_id' => 13,
                'name' => '恩施市',
                'status' => 1,
            ),
            249 => 
            array (
                'id' => 1250,
                'city_id' => 162,
                'province_id' => 13,
                'name' => '利川市',
                'status' => 1,
            ),
            250 => 
            array (
                'id' => 1251,
                'city_id' => 162,
                'province_id' => 13,
                'name' => '建始县',
                'status' => 1,
            ),
            251 => 
            array (
                'id' => 1252,
                'city_id' => 162,
                'province_id' => 13,
                'name' => '巴东县',
                'status' => 1,
            ),
            252 => 
            array (
                'id' => 1253,
                'city_id' => 162,
                'province_id' => 13,
                'name' => '宣恩县',
                'status' => 1,
            ),
            253 => 
            array (
                'id' => 1254,
                'city_id' => 162,
                'province_id' => 13,
                'name' => '咸丰县',
                'status' => 1,
            ),
            254 => 
            array (
                'id' => 1255,
                'city_id' => 162,
                'province_id' => 13,
                'name' => '来凤县',
                'status' => 1,
            ),
            255 => 
            array (
                'id' => 1256,
                'city_id' => 162,
                'province_id' => 13,
                'name' => '鹤峰县',
                'status' => 1,
            ),
            256 => 
            array (
                'id' => 1257,
                'city_id' => 163,
                'province_id' => 14,
                'name' => '岳麓区',
                'status' => 1,
            ),
            257 => 
            array (
                'id' => 1258,
                'city_id' => 163,
                'province_id' => 14,
                'name' => '芙蓉区',
                'status' => 1,
            ),
            258 => 
            array (
                'id' => 1259,
                'city_id' => 163,
                'province_id' => 14,
                'name' => '天心区',
                'status' => 1,
            ),
            259 => 
            array (
                'id' => 1260,
                'city_id' => 163,
                'province_id' => 14,
                'name' => '开福区',
                'status' => 1,
            ),
            260 => 
            array (
                'id' => 1261,
                'city_id' => 163,
                'province_id' => 14,
                'name' => '雨花区',
                'status' => 1,
            ),
            261 => 
            array (
                'id' => 1262,
                'city_id' => 163,
                'province_id' => 14,
                'name' => '开发区',
                'status' => 1,
            ),
            262 => 
            array (
                'id' => 1263,
                'city_id' => 163,
                'province_id' => 14,
                'name' => '浏阳市',
                'status' => 1,
            ),
            263 => 
            array (
                'id' => 1264,
                'city_id' => 163,
                'province_id' => 14,
                'name' => '长沙县',
                'status' => 1,
            ),
            264 => 
            array (
                'id' => 1265,
                'city_id' => 163,
                'province_id' => 14,
                'name' => '望城县',
                'status' => 1,
            ),
            265 => 
            array (
                'id' => 1266,
                'city_id' => 163,
                'province_id' => 14,
                'name' => '宁乡县',
                'status' => 1,
            ),
            266 => 
            array (
                'id' => 1267,
                'city_id' => 164,
                'province_id' => 14,
                'name' => '永定区',
                'status' => 1,
            ),
            267 => 
            array (
                'id' => 1268,
                'city_id' => 164,
                'province_id' => 14,
                'name' => '武陵源区',
                'status' => 1,
            ),
            268 => 
            array (
                'id' => 1269,
                'city_id' => 164,
                'province_id' => 14,
                'name' => '慈利县',
                'status' => 1,
            ),
            269 => 
            array (
                'id' => 1270,
                'city_id' => 164,
                'province_id' => 14,
                'name' => '桑植县',
                'status' => 1,
            ),
            270 => 
            array (
                'id' => 1271,
                'city_id' => 165,
                'province_id' => 14,
                'name' => '武陵区',
                'status' => 1,
            ),
            271 => 
            array (
                'id' => 1272,
                'city_id' => 165,
                'province_id' => 14,
                'name' => '鼎城区',
                'status' => 1,
            ),
            272 => 
            array (
                'id' => 1273,
                'city_id' => 165,
                'province_id' => 14,
                'name' => '津市市',
                'status' => 1,
            ),
            273 => 
            array (
                'id' => 1274,
                'city_id' => 165,
                'province_id' => 14,
                'name' => '安乡县',
                'status' => 1,
            ),
            274 => 
            array (
                'id' => 1275,
                'city_id' => 165,
                'province_id' => 14,
                'name' => '汉寿县',
                'status' => 1,
            ),
            275 => 
            array (
                'id' => 1276,
                'city_id' => 165,
                'province_id' => 14,
                'name' => '澧县',
                'status' => 1,
            ),
            276 => 
            array (
                'id' => 1277,
                'city_id' => 165,
                'province_id' => 14,
                'name' => '临澧县',
                'status' => 1,
            ),
            277 => 
            array (
                'id' => 1278,
                'city_id' => 165,
                'province_id' => 14,
                'name' => '桃源县',
                'status' => 1,
            ),
            278 => 
            array (
                'id' => 1279,
                'city_id' => 165,
                'province_id' => 14,
                'name' => '石门县',
                'status' => 1,
            ),
            279 => 
            array (
                'id' => 1280,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '北湖区',
                'status' => 1,
            ),
            280 => 
            array (
                'id' => 1281,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '苏仙区',
                'status' => 1,
            ),
            281 => 
            array (
                'id' => 1282,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '资兴市',
                'status' => 1,
            ),
            282 => 
            array (
                'id' => 1283,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '桂阳县',
                'status' => 1,
            ),
            283 => 
            array (
                'id' => 1284,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '宜章县',
                'status' => 1,
            ),
            284 => 
            array (
                'id' => 1285,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '永兴县',
                'status' => 1,
            ),
            285 => 
            array (
                'id' => 1286,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '嘉禾县',
                'status' => 1,
            ),
            286 => 
            array (
                'id' => 1287,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '临武县',
                'status' => 1,
            ),
            287 => 
            array (
                'id' => 1288,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '汝城县',
                'status' => 1,
            ),
            288 => 
            array (
                'id' => 1289,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '桂东县',
                'status' => 1,
            ),
            289 => 
            array (
                'id' => 1290,
                'city_id' => 166,
                'province_id' => 14,
                'name' => '安仁县',
                'status' => 1,
            ),
            290 => 
            array (
                'id' => 1291,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '雁峰区',
                'status' => 1,
            ),
            291 => 
            array (
                'id' => 1292,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '珠晖区',
                'status' => 1,
            ),
            292 => 
            array (
                'id' => 1293,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '石鼓区',
                'status' => 1,
            ),
            293 => 
            array (
                'id' => 1294,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '蒸湘区',
                'status' => 1,
            ),
            294 => 
            array (
                'id' => 1295,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '南岳区',
                'status' => 1,
            ),
            295 => 
            array (
                'id' => 1296,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '耒阳市',
                'status' => 1,
            ),
            296 => 
            array (
                'id' => 1297,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '常宁市',
                'status' => 1,
            ),
            297 => 
            array (
                'id' => 1298,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '衡阳县',
                'status' => 1,
            ),
            298 => 
            array (
                'id' => 1299,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '衡南县',
                'status' => 1,
            ),
            299 => 
            array (
                'id' => 1300,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '衡山县',
                'status' => 1,
            ),
            300 => 
            array (
                'id' => 1301,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '衡东县',
                'status' => 1,
            ),
            301 => 
            array (
                'id' => 1302,
                'city_id' => 167,
                'province_id' => 14,
                'name' => '祁东县',
                'status' => 1,
            ),
            302 => 
            array (
                'id' => 1303,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '鹤城区',
                'status' => 1,
            ),
            303 => 
            array (
                'id' => 1304,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '靖州',
                'status' => 1,
            ),
            304 => 
            array (
                'id' => 1305,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '麻阳',
                'status' => 1,
            ),
            305 => 
            array (
                'id' => 1306,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '通道',
                'status' => 1,
            ),
            306 => 
            array (
                'id' => 1307,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '新晃',
                'status' => 1,
            ),
            307 => 
            array (
                'id' => 1308,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '芷江',
                'status' => 1,
            ),
            308 => 
            array (
                'id' => 1309,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '沅陵县',
                'status' => 1,
            ),
            309 => 
            array (
                'id' => 1310,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '辰溪县',
                'status' => 1,
            ),
            310 => 
            array (
                'id' => 1311,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '溆浦县',
                'status' => 1,
            ),
            311 => 
            array (
                'id' => 1312,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '中方县',
                'status' => 1,
            ),
            312 => 
            array (
                'id' => 1313,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '会同县',
                'status' => 1,
            ),
            313 => 
            array (
                'id' => 1314,
                'city_id' => 168,
                'province_id' => 14,
                'name' => '洪江市',
                'status' => 1,
            ),
            314 => 
            array (
                'id' => 1315,
                'city_id' => 169,
                'province_id' => 14,
                'name' => '娄星区',
                'status' => 1,
            ),
            315 => 
            array (
                'id' => 1316,
                'city_id' => 169,
                'province_id' => 14,
                'name' => '冷水江市',
                'status' => 1,
            ),
            316 => 
            array (
                'id' => 1317,
                'city_id' => 169,
                'province_id' => 14,
                'name' => '涟源市',
                'status' => 1,
            ),
            317 => 
            array (
                'id' => 1318,
                'city_id' => 169,
                'province_id' => 14,
                'name' => '双峰县',
                'status' => 1,
            ),
            318 => 
            array (
                'id' => 1319,
                'city_id' => 169,
                'province_id' => 14,
                'name' => '新化县',
                'status' => 1,
            ),
            319 => 
            array (
                'id' => 1320,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '城步',
                'status' => 1,
            ),
            320 => 
            array (
                'id' => 1321,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '双清区',
                'status' => 1,
            ),
            321 => 
            array (
                'id' => 1322,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '大祥区',
                'status' => 1,
            ),
            322 => 
            array (
                'id' => 1323,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '北塔区',
                'status' => 1,
            ),
            323 => 
            array (
                'id' => 1324,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '武冈市',
                'status' => 1,
            ),
            324 => 
            array (
                'id' => 1325,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '邵东县',
                'status' => 1,
            ),
            325 => 
            array (
                'id' => 1326,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '新邵县',
                'status' => 1,
            ),
            326 => 
            array (
                'id' => 1327,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '邵阳县',
                'status' => 1,
            ),
            327 => 
            array (
                'id' => 1328,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '隆回县',
                'status' => 1,
            ),
            328 => 
            array (
                'id' => 1329,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '洞口县',
                'status' => 1,
            ),
            329 => 
            array (
                'id' => 1330,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '绥宁县',
                'status' => 1,
            ),
            330 => 
            array (
                'id' => 1331,
                'city_id' => 170,
                'province_id' => 14,
                'name' => '新宁县',
                'status' => 1,
            ),
            331 => 
            array (
                'id' => 1332,
                'city_id' => 171,
                'province_id' => 14,
                'name' => '岳塘区',
                'status' => 1,
            ),
            332 => 
            array (
                'id' => 1333,
                'city_id' => 171,
                'province_id' => 14,
                'name' => '雨湖区',
                'status' => 1,
            ),
            333 => 
            array (
                'id' => 1334,
                'city_id' => 171,
                'province_id' => 14,
                'name' => '湘乡市',
                'status' => 1,
            ),
            334 => 
            array (
                'id' => 1335,
                'city_id' => 171,
                'province_id' => 14,
                'name' => '韶山市',
                'status' => 1,
            ),
            335 => 
            array (
                'id' => 1336,
                'city_id' => 171,
                'province_id' => 14,
                'name' => '湘潭县',
                'status' => 1,
            ),
            336 => 
            array (
                'id' => 1337,
                'city_id' => 172,
                'province_id' => 14,
                'name' => '吉首市',
                'status' => 1,
            ),
            337 => 
            array (
                'id' => 1338,
                'city_id' => 172,
                'province_id' => 14,
                'name' => '泸溪县',
                'status' => 1,
            ),
            338 => 
            array (
                'id' => 1339,
                'city_id' => 172,
                'province_id' => 14,
                'name' => '凤凰县',
                'status' => 1,
            ),
            339 => 
            array (
                'id' => 1340,
                'city_id' => 172,
                'province_id' => 14,
                'name' => '花垣县',
                'status' => 1,
            ),
            340 => 
            array (
                'id' => 1341,
                'city_id' => 172,
                'province_id' => 14,
                'name' => '保靖县',
                'status' => 1,
            ),
            341 => 
            array (
                'id' => 1342,
                'city_id' => 172,
                'province_id' => 14,
                'name' => '古丈县',
                'status' => 1,
            ),
            342 => 
            array (
                'id' => 1343,
                'city_id' => 172,
                'province_id' => 14,
                'name' => '永顺县',
                'status' => 1,
            ),
            343 => 
            array (
                'id' => 1344,
                'city_id' => 172,
                'province_id' => 14,
                'name' => '龙山县',
                'status' => 1,
            ),
            344 => 
            array (
                'id' => 1345,
                'city_id' => 173,
                'province_id' => 14,
                'name' => '赫山区',
                'status' => 1,
            ),
            345 => 
            array (
                'id' => 1346,
                'city_id' => 173,
                'province_id' => 14,
                'name' => '资阳区',
                'status' => 1,
            ),
            346 => 
            array (
                'id' => 1347,
                'city_id' => 173,
                'province_id' => 14,
                'name' => '沅江市',
                'status' => 1,
            ),
            347 => 
            array (
                'id' => 1348,
                'city_id' => 173,
                'province_id' => 14,
                'name' => '南县',
                'status' => 1,
            ),
            348 => 
            array (
                'id' => 1349,
                'city_id' => 173,
                'province_id' => 14,
                'name' => '桃江县',
                'status' => 1,
            ),
            349 => 
            array (
                'id' => 1350,
                'city_id' => 173,
                'province_id' => 14,
                'name' => '安化县',
                'status' => 1,
            ),
            350 => 
            array (
                'id' => 1351,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '江华',
                'status' => 1,
            ),
            351 => 
            array (
                'id' => 1352,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '冷水滩区',
                'status' => 1,
            ),
            352 => 
            array (
                'id' => 1353,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '零陵区',
                'status' => 1,
            ),
            353 => 
            array (
                'id' => 1354,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '祁阳县',
                'status' => 1,
            ),
            354 => 
            array (
                'id' => 1355,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '东安县',
                'status' => 1,
            ),
            355 => 
            array (
                'id' => 1356,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '双牌县',
                'status' => 1,
            ),
            356 => 
            array (
                'id' => 1357,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '道县',
                'status' => 1,
            ),
            357 => 
            array (
                'id' => 1358,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '江永县',
                'status' => 1,
            ),
            358 => 
            array (
                'id' => 1359,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '宁远县',
                'status' => 1,
            ),
            359 => 
            array (
                'id' => 1360,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '蓝山县',
                'status' => 1,
            ),
            360 => 
            array (
                'id' => 1361,
                'city_id' => 174,
                'province_id' => 14,
                'name' => '新田县',
                'status' => 1,
            ),
            361 => 
            array (
                'id' => 1362,
                'city_id' => 175,
                'province_id' => 14,
                'name' => '岳阳楼区',
                'status' => 1,
            ),
            362 => 
            array (
                'id' => 1363,
                'city_id' => 175,
                'province_id' => 14,
                'name' => '君山区',
                'status' => 1,
            ),
            363 => 
            array (
                'id' => 1364,
                'city_id' => 175,
                'province_id' => 14,
                'name' => '云溪区',
                'status' => 1,
            ),
            364 => 
            array (
                'id' => 1365,
                'city_id' => 175,
                'province_id' => 14,
                'name' => '汨罗市',
                'status' => 1,
            ),
            365 => 
            array (
                'id' => 1366,
                'city_id' => 175,
                'province_id' => 14,
                'name' => '临湘市',
                'status' => 1,
            ),
            366 => 
            array (
                'id' => 1367,
                'city_id' => 175,
                'province_id' => 14,
                'name' => '岳阳县',
                'status' => 1,
            ),
            367 => 
            array (
                'id' => 1368,
                'city_id' => 175,
                'province_id' => 14,
                'name' => '华容县',
                'status' => 1,
            ),
            368 => 
            array (
                'id' => 1369,
                'city_id' => 175,
                'province_id' => 14,
                'name' => '湘阴县',
                'status' => 1,
            ),
            369 => 
            array (
                'id' => 1370,
                'city_id' => 175,
                'province_id' => 14,
                'name' => '平江县',
                'status' => 1,
            ),
            370 => 
            array (
                'id' => 1371,
                'city_id' => 176,
                'province_id' => 14,
                'name' => '天元区',
                'status' => 1,
            ),
            371 => 
            array (
                'id' => 1372,
                'city_id' => 176,
                'province_id' => 14,
                'name' => '荷塘区',
                'status' => 1,
            ),
            372 => 
            array (
                'id' => 1373,
                'city_id' => 176,
                'province_id' => 14,
                'name' => '芦淞区',
                'status' => 1,
            ),
            373 => 
            array (
                'id' => 1374,
                'city_id' => 176,
                'province_id' => 14,
                'name' => '石峰区',
                'status' => 1,
            ),
            374 => 
            array (
                'id' => 1375,
                'city_id' => 176,
                'province_id' => 14,
                'name' => '醴陵市',
                'status' => 1,
            ),
            375 => 
            array (
                'id' => 1376,
                'city_id' => 176,
                'province_id' => 14,
                'name' => '株洲县',
                'status' => 1,
            ),
            376 => 
            array (
                'id' => 1377,
                'city_id' => 176,
                'province_id' => 14,
                'name' => '攸县',
                'status' => 1,
            ),
            377 => 
            array (
                'id' => 1378,
                'city_id' => 176,
                'province_id' => 14,
                'name' => '茶陵县',
                'status' => 1,
            ),
            378 => 
            array (
                'id' => 1379,
                'city_id' => 176,
                'province_id' => 14,
                'name' => '炎陵县',
                'status' => 1,
            ),
            379 => 
            array (
                'id' => 1380,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '朝阳区',
                'status' => 1,
            ),
            380 => 
            array (
                'id' => 1381,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '宽城区',
                'status' => 1,
            ),
            381 => 
            array (
                'id' => 1382,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '二道区',
                'status' => 1,
            ),
            382 => 
            array (
                'id' => 1383,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '南关区',
                'status' => 1,
            ),
            383 => 
            array (
                'id' => 1384,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '绿园区',
                'status' => 1,
            ),
            384 => 
            array (
                'id' => 1385,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '双阳区',
                'status' => 1,
            ),
            385 => 
            array (
                'id' => 1386,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '净月潭开发区',
                'status' => 1,
            ),
            386 => 
            array (
                'id' => 1387,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '高新技术开发区',
                'status' => 1,
            ),
            387 => 
            array (
                'id' => 1388,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '经济技术开发区',
                'status' => 1,
            ),
            388 => 
            array (
                'id' => 1389,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '汽车产业开发区',
                'status' => 1,
            ),
            389 => 
            array (
                'id' => 1390,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '德惠市',
                'status' => 1,
            ),
            390 => 
            array (
                'id' => 1391,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '九台市',
                'status' => 1,
            ),
            391 => 
            array (
                'id' => 1392,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '榆树市',
                'status' => 1,
            ),
            392 => 
            array (
                'id' => 1393,
                'city_id' => 177,
                'province_id' => 15,
                'name' => '农安县',
                'status' => 1,
            ),
            393 => 
            array (
                'id' => 1394,
                'city_id' => 178,
                'province_id' => 15,
                'name' => '船营区',
                'status' => 1,
            ),
            394 => 
            array (
                'id' => 1395,
                'city_id' => 178,
                'province_id' => 15,
                'name' => '昌邑区',
                'status' => 1,
            ),
            395 => 
            array (
                'id' => 1396,
                'city_id' => 178,
                'province_id' => 15,
                'name' => '龙潭区',
                'status' => 1,
            ),
            396 => 
            array (
                'id' => 1397,
                'city_id' => 178,
                'province_id' => 15,
                'name' => '丰满区',
                'status' => 1,
            ),
            397 => 
            array (
                'id' => 1398,
                'city_id' => 178,
                'province_id' => 15,
                'name' => '蛟河市',
                'status' => 1,
            ),
            398 => 
            array (
                'id' => 1399,
                'city_id' => 178,
                'province_id' => 15,
                'name' => '桦甸市',
                'status' => 1,
            ),
            399 => 
            array (
                'id' => 1400,
                'city_id' => 178,
                'province_id' => 15,
                'name' => '舒兰市',
                'status' => 1,
            ),
            400 => 
            array (
                'id' => 1401,
                'city_id' => 178,
                'province_id' => 15,
                'name' => '磐石市',
                'status' => 1,
            ),
            401 => 
            array (
                'id' => 1402,
                'city_id' => 178,
                'province_id' => 15,
                'name' => '永吉县',
                'status' => 1,
            ),
            402 => 
            array (
                'id' => 1403,
                'city_id' => 179,
                'province_id' => 15,
                'name' => '洮北区',
                'status' => 1,
            ),
            403 => 
            array (
                'id' => 1404,
                'city_id' => 179,
                'province_id' => 15,
                'name' => '洮南市',
                'status' => 1,
            ),
            404 => 
            array (
                'id' => 1405,
                'city_id' => 179,
                'province_id' => 15,
                'name' => '大安市',
                'status' => 1,
            ),
            405 => 
            array (
                'id' => 1406,
                'city_id' => 179,
                'province_id' => 15,
                'name' => '镇赉县',
                'status' => 1,
            ),
            406 => 
            array (
                'id' => 1407,
                'city_id' => 179,
                'province_id' => 15,
                'name' => '通榆县',
                'status' => 1,
            ),
            407 => 
            array (
                'id' => 1408,
                'city_id' => 180,
                'province_id' => 15,
                'name' => '江源区',
                'status' => 1,
            ),
            408 => 
            array (
                'id' => 1409,
                'city_id' => 180,
                'province_id' => 15,
                'name' => '八道江区',
                'status' => 1,
            ),
            409 => 
            array (
                'id' => 1410,
                'city_id' => 180,
                'province_id' => 15,
                'name' => '长白',
                'status' => 1,
            ),
            410 => 
            array (
                'id' => 1411,
                'city_id' => 180,
                'province_id' => 15,
                'name' => '临江市',
                'status' => 1,
            ),
            411 => 
            array (
                'id' => 1412,
                'city_id' => 180,
                'province_id' => 15,
                'name' => '抚松县',
                'status' => 1,
            ),
            412 => 
            array (
                'id' => 1413,
                'city_id' => 180,
                'province_id' => 15,
                'name' => '靖宇县',
                'status' => 1,
            ),
            413 => 
            array (
                'id' => 1414,
                'city_id' => 181,
                'province_id' => 15,
                'name' => '龙山区',
                'status' => 1,
            ),
            414 => 
            array (
                'id' => 1415,
                'city_id' => 181,
                'province_id' => 15,
                'name' => '西安区',
                'status' => 1,
            ),
            415 => 
            array (
                'id' => 1416,
                'city_id' => 181,
                'province_id' => 15,
                'name' => '东丰县',
                'status' => 1,
            ),
            416 => 
            array (
                'id' => 1417,
                'city_id' => 181,
                'province_id' => 15,
                'name' => '东辽县',
                'status' => 1,
            ),
            417 => 
            array (
                'id' => 1418,
                'city_id' => 182,
                'province_id' => 15,
                'name' => '铁西区',
                'status' => 1,
            ),
            418 => 
            array (
                'id' => 1419,
                'city_id' => 182,
                'province_id' => 15,
                'name' => '铁东区',
                'status' => 1,
            ),
            419 => 
            array (
                'id' => 1420,
                'city_id' => 182,
                'province_id' => 15,
                'name' => '伊通',
                'status' => 1,
            ),
            420 => 
            array (
                'id' => 1421,
                'city_id' => 182,
                'province_id' => 15,
                'name' => '公主岭市',
                'status' => 1,
            ),
            421 => 
            array (
                'id' => 1422,
                'city_id' => 182,
                'province_id' => 15,
                'name' => '双辽市',
                'status' => 1,
            ),
            422 => 
            array (
                'id' => 1423,
                'city_id' => 182,
                'province_id' => 15,
                'name' => '梨树县',
                'status' => 1,
            ),
            423 => 
            array (
                'id' => 1424,
                'city_id' => 183,
                'province_id' => 15,
                'name' => '前郭尔罗斯',
                'status' => 1,
            ),
            424 => 
            array (
                'id' => 1425,
                'city_id' => 183,
                'province_id' => 15,
                'name' => '宁江区',
                'status' => 1,
            ),
            425 => 
            array (
                'id' => 1426,
                'city_id' => 183,
                'province_id' => 15,
                'name' => '长岭县',
                'status' => 1,
            ),
            426 => 
            array (
                'id' => 1427,
                'city_id' => 183,
                'province_id' => 15,
                'name' => '乾安县',
                'status' => 1,
            ),
            427 => 
            array (
                'id' => 1428,
                'city_id' => 183,
                'province_id' => 15,
                'name' => '扶余县',
                'status' => 1,
            ),
            428 => 
            array (
                'id' => 1429,
                'city_id' => 184,
                'province_id' => 15,
                'name' => '东昌区',
                'status' => 1,
            ),
            429 => 
            array (
                'id' => 1430,
                'city_id' => 184,
                'province_id' => 15,
                'name' => '二道江区',
                'status' => 1,
            ),
            430 => 
            array (
                'id' => 1431,
                'city_id' => 184,
                'province_id' => 15,
                'name' => '梅河口市',
                'status' => 1,
            ),
            431 => 
            array (
                'id' => 1432,
                'city_id' => 184,
                'province_id' => 15,
                'name' => '集安市',
                'status' => 1,
            ),
            432 => 
            array (
                'id' => 1433,
                'city_id' => 184,
                'province_id' => 15,
                'name' => '通化县',
                'status' => 1,
            ),
            433 => 
            array (
                'id' => 1434,
                'city_id' => 184,
                'province_id' => 15,
                'name' => '辉南县',
                'status' => 1,
            ),
            434 => 
            array (
                'id' => 1435,
                'city_id' => 184,
                'province_id' => 15,
                'name' => '柳河县',
                'status' => 1,
            ),
            435 => 
            array (
                'id' => 1436,
                'city_id' => 185,
                'province_id' => 15,
                'name' => '延吉市',
                'status' => 1,
            ),
            436 => 
            array (
                'id' => 1437,
                'city_id' => 185,
                'province_id' => 15,
                'name' => '图们市',
                'status' => 1,
            ),
            437 => 
            array (
                'id' => 1438,
                'city_id' => 185,
                'province_id' => 15,
                'name' => '敦化市',
                'status' => 1,
            ),
            438 => 
            array (
                'id' => 1439,
                'city_id' => 185,
                'province_id' => 15,
                'name' => '珲春市',
                'status' => 1,
            ),
            439 => 
            array (
                'id' => 1440,
                'city_id' => 185,
                'province_id' => 15,
                'name' => '龙井市',
                'status' => 1,
            ),
            440 => 
            array (
                'id' => 1441,
                'city_id' => 185,
                'province_id' => 15,
                'name' => '和龙市',
                'status' => 1,
            ),
            441 => 
            array (
                'id' => 1442,
                'city_id' => 185,
                'province_id' => 15,
                'name' => '安图县',
                'status' => 1,
            ),
            442 => 
            array (
                'id' => 1443,
                'city_id' => 185,
                'province_id' => 15,
                'name' => '汪清县',
                'status' => 1,
            ),
            443 => 
            array (
                'id' => 1444,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '玄武区',
                'status' => 1,
            ),
            444 => 
            array (
                'id' => 1445,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '鼓楼区',
                'status' => 1,
            ),
            445 => 
            array (
                'id' => 1446,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '白下区',
                'status' => 1,
            ),
            446 => 
            array (
                'id' => 1447,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '建邺区',
                'status' => 1,
            ),
            447 => 
            array (
                'id' => 1448,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '秦淮区',
                'status' => 1,
            ),
            448 => 
            array (
                'id' => 1449,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '雨花台区',
                'status' => 1,
            ),
            449 => 
            array (
                'id' => 1450,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '下关区',
                'status' => 1,
            ),
            450 => 
            array (
                'id' => 1451,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '栖霞区',
                'status' => 1,
            ),
            451 => 
            array (
                'id' => 1452,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '浦口区',
                'status' => 1,
            ),
            452 => 
            array (
                'id' => 1453,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '江宁区',
                'status' => 1,
            ),
            453 => 
            array (
                'id' => 1454,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '六合区',
                'status' => 1,
            ),
            454 => 
            array (
                'id' => 1455,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '溧水县',
                'status' => 1,
            ),
            455 => 
            array (
                'id' => 1456,
                'city_id' => 186,
                'province_id' => 16,
                'name' => '高淳县',
                'status' => 1,
            ),
            456 => 
            array (
                'id' => 1457,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '沧浪区',
                'status' => 1,
            ),
            457 => 
            array (
                'id' => 1458,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '金阊区',
                'status' => 1,
            ),
            458 => 
            array (
                'id' => 1459,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '平江区',
                'status' => 1,
            ),
            459 => 
            array (
                'id' => 1460,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '虎丘区',
                'status' => 1,
            ),
            460 => 
            array (
                'id' => 1461,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '吴中区',
                'status' => 1,
            ),
            461 => 
            array (
                'id' => 1462,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '相城区',
                'status' => 1,
            ),
            462 => 
            array (
                'id' => 1463,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '园区',
                'status' => 1,
            ),
            463 => 
            array (
                'id' => 1464,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '新区',
                'status' => 1,
            ),
            464 => 
            array (
                'id' => 1465,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '常熟市',
                'status' => 1,
            ),
            465 => 
            array (
                'id' => 1466,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '张家港市',
                'status' => 1,
            ),
            466 => 
            array (
                'id' => 1467,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '玉山镇',
                'status' => 1,
            ),
            467 => 
            array (
                'id' => 1468,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '巴城镇',
                'status' => 1,
            ),
            468 => 
            array (
                'id' => 1469,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '周市镇',
                'status' => 1,
            ),
            469 => 
            array (
                'id' => 1470,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '陆家镇',
                'status' => 1,
            ),
            470 => 
            array (
                'id' => 1471,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '花桥镇',
                'status' => 1,
            ),
            471 => 
            array (
                'id' => 1472,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '淀山湖镇',
                'status' => 1,
            ),
            472 => 
            array (
                'id' => 1473,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '张浦镇',
                'status' => 1,
            ),
            473 => 
            array (
                'id' => 1474,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '周庄镇',
                'status' => 1,
            ),
            474 => 
            array (
                'id' => 1475,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '千灯镇',
                'status' => 1,
            ),
            475 => 
            array (
                'id' => 1476,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '锦溪镇',
                'status' => 1,
            ),
            476 => 
            array (
                'id' => 1477,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '开发区',
                'status' => 1,
            ),
            477 => 
            array (
                'id' => 1478,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '吴江市',
                'status' => 1,
            ),
            478 => 
            array (
                'id' => 1479,
                'city_id' => 187,
                'province_id' => 16,
                'name' => '太仓市',
                'status' => 1,
            ),
            479 => 
            array (
                'id' => 1480,
                'city_id' => 188,
                'province_id' => 16,
                'name' => '崇安区',
                'status' => 1,
            ),
            480 => 
            array (
                'id' => 1481,
                'city_id' => 188,
                'province_id' => 16,
                'name' => '北塘区',
                'status' => 1,
            ),
            481 => 
            array (
                'id' => 1482,
                'city_id' => 188,
                'province_id' => 16,
                'name' => '南长区',
                'status' => 1,
            ),
            482 => 
            array (
                'id' => 1483,
                'city_id' => 188,
                'province_id' => 16,
                'name' => '锡山区',
                'status' => 1,
            ),
            483 => 
            array (
                'id' => 1484,
                'city_id' => 188,
                'province_id' => 16,
                'name' => '惠山区',
                'status' => 1,
            ),
            484 => 
            array (
                'id' => 1485,
                'city_id' => 188,
                'province_id' => 16,
                'name' => '滨湖区',
                'status' => 1,
            ),
            485 => 
            array (
                'id' => 1486,
                'city_id' => 188,
                'province_id' => 16,
                'name' => '新区',
                'status' => 1,
            ),
            486 => 
            array (
                'id' => 1487,
                'city_id' => 188,
                'province_id' => 16,
                'name' => '江阴市',
                'status' => 1,
            ),
            487 => 
            array (
                'id' => 1488,
                'city_id' => 188,
                'province_id' => 16,
                'name' => '宜兴市',
                'status' => 1,
            ),
            488 => 
            array (
                'id' => 1489,
                'city_id' => 189,
                'province_id' => 16,
                'name' => '天宁区',
                'status' => 1,
            ),
            489 => 
            array (
                'id' => 1490,
                'city_id' => 189,
                'province_id' => 16,
                'name' => '钟楼区',
                'status' => 1,
            ),
            490 => 
            array (
                'id' => 1491,
                'city_id' => 189,
                'province_id' => 16,
                'name' => '戚墅堰区',
                'status' => 1,
            ),
            491 => 
            array (
                'id' => 1492,
                'city_id' => 189,
                'province_id' => 16,
                'name' => '郊区',
                'status' => 1,
            ),
            492 => 
            array (
                'id' => 1493,
                'city_id' => 189,
                'province_id' => 16,
                'name' => '新北区',
                'status' => 1,
            ),
            493 => 
            array (
                'id' => 1494,
                'city_id' => 189,
                'province_id' => 16,
                'name' => '武进区',
                'status' => 1,
            ),
            494 => 
            array (
                'id' => 1495,
                'city_id' => 189,
                'province_id' => 16,
                'name' => '溧阳市',
                'status' => 1,
            ),
            495 => 
            array (
                'id' => 1496,
                'city_id' => 189,
                'province_id' => 16,
                'name' => '金坛市',
                'status' => 1,
            ),
            496 => 
            array (
                'id' => 1497,
                'city_id' => 190,
                'province_id' => 16,
                'name' => '清河区',
                'status' => 1,
            ),
            497 => 
            array (
                'id' => 1498,
                'city_id' => 190,
                'province_id' => 16,
                'name' => '清浦区',
                'status' => 1,
            ),
            498 => 
            array (
                'id' => 1499,
                'city_id' => 190,
                'province_id' => 16,
                'name' => '楚州区',
                'status' => 1,
            ),
            499 => 
            array (
                'id' => 1500,
                'city_id' => 190,
                'province_id' => 16,
                'name' => '淮阴区',
                'status' => 1,
            ),
        ));
        \DB::table('geo_districts')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'city_id' => 190,
                'province_id' => 16,
                'name' => '涟水县',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 1502,
                'city_id' => 190,
                'province_id' => 16,
                'name' => '洪泽县',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 1503,
                'city_id' => 190,
                'province_id' => 16,
                'name' => '盱眙县',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 1504,
                'city_id' => 190,
                'province_id' => 16,
                'name' => '金湖县',
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 1505,
                'city_id' => 191,
                'province_id' => 16,
                'name' => '新浦区',
                'status' => 1,
            ),
            5 => 
            array (
                'id' => 1506,
                'city_id' => 191,
                'province_id' => 16,
                'name' => '连云区',
                'status' => 1,
            ),
            6 => 
            array (
                'id' => 1507,
                'city_id' => 191,
                'province_id' => 16,
                'name' => '海州区',
                'status' => 1,
            ),
            7 => 
            array (
                'id' => 1508,
                'city_id' => 191,
                'province_id' => 16,
                'name' => '赣榆县',
                'status' => 1,
            ),
            8 => 
            array (
                'id' => 1509,
                'city_id' => 191,
                'province_id' => 16,
                'name' => '东海县',
                'status' => 1,
            ),
            9 => 
            array (
                'id' => 1510,
                'city_id' => 191,
                'province_id' => 16,
                'name' => '灌云县',
                'status' => 1,
            ),
            10 => 
            array (
                'id' => 1511,
                'city_id' => 191,
                'province_id' => 16,
                'name' => '灌南县',
                'status' => 1,
            ),
            11 => 
            array (
                'id' => 1512,
                'city_id' => 192,
                'province_id' => 16,
                'name' => '崇川区',
                'status' => 1,
            ),
            12 => 
            array (
                'id' => 1513,
                'city_id' => 192,
                'province_id' => 16,
                'name' => '港闸区',
                'status' => 1,
            ),
            13 => 
            array (
                'id' => 1514,
                'city_id' => 192,
                'province_id' => 16,
                'name' => '经济开发区',
                'status' => 1,
            ),
            14 => 
            array (
                'id' => 1515,
                'city_id' => 192,
                'province_id' => 16,
                'name' => '启东市',
                'status' => 1,
            ),
            15 => 
            array (
                'id' => 1516,
                'city_id' => 192,
                'province_id' => 16,
                'name' => '如皋市',
                'status' => 1,
            ),
            16 => 
            array (
                'id' => 1517,
                'city_id' => 192,
                'province_id' => 16,
                'name' => '通州市',
                'status' => 1,
            ),
            17 => 
            array (
                'id' => 1518,
                'city_id' => 192,
                'province_id' => 16,
                'name' => '海门市',
                'status' => 1,
            ),
            18 => 
            array (
                'id' => 1519,
                'city_id' => 192,
                'province_id' => 16,
                'name' => '海安县',
                'status' => 1,
            ),
            19 => 
            array (
                'id' => 1520,
                'city_id' => 192,
                'province_id' => 16,
                'name' => '如东县',
                'status' => 1,
            ),
            20 => 
            array (
                'id' => 1521,
                'city_id' => 193,
                'province_id' => 16,
                'name' => '宿城区',
                'status' => 1,
            ),
            21 => 
            array (
                'id' => 1522,
                'city_id' => 193,
                'province_id' => 16,
                'name' => '宿豫区',
                'status' => 1,
            ),
            22 => 
            array (
                'id' => 1523,
                'city_id' => 193,
                'province_id' => 16,
                'name' => '宿豫县',
                'status' => 1,
            ),
            23 => 
            array (
                'id' => 1524,
                'city_id' => 193,
                'province_id' => 16,
                'name' => '沭阳县',
                'status' => 1,
            ),
            24 => 
            array (
                'id' => 1525,
                'city_id' => 193,
                'province_id' => 16,
                'name' => '泗阳县',
                'status' => 1,
            ),
            25 => 
            array (
                'id' => 1526,
                'city_id' => 193,
                'province_id' => 16,
                'name' => '泗洪县',
                'status' => 1,
            ),
            26 => 
            array (
                'id' => 1527,
                'city_id' => 194,
                'province_id' => 16,
                'name' => '海陵区',
                'status' => 1,
            ),
            27 => 
            array (
                'id' => 1528,
                'city_id' => 194,
                'province_id' => 16,
                'name' => '高港区',
                'status' => 1,
            ),
            28 => 
            array (
                'id' => 1529,
                'city_id' => 194,
                'province_id' => 16,
                'name' => '兴化市',
                'status' => 1,
            ),
            29 => 
            array (
                'id' => 1530,
                'city_id' => 194,
                'province_id' => 16,
                'name' => '靖江市',
                'status' => 1,
            ),
            30 => 
            array (
                'id' => 1531,
                'city_id' => 194,
                'province_id' => 16,
                'name' => '泰兴市',
                'status' => 1,
            ),
            31 => 
            array (
                'id' => 1532,
                'city_id' => 194,
                'province_id' => 16,
                'name' => '姜堰市',
                'status' => 1,
            ),
            32 => 
            array (
                'id' => 1533,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '云龙区',
                'status' => 1,
            ),
            33 => 
            array (
                'id' => 1534,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '鼓楼区',
                'status' => 1,
            ),
            34 => 
            array (
                'id' => 1535,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '九里区',
                'status' => 1,
            ),
            35 => 
            array (
                'id' => 1536,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '贾汪区',
                'status' => 1,
            ),
            36 => 
            array (
                'id' => 1537,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '泉山区',
                'status' => 1,
            ),
            37 => 
            array (
                'id' => 1538,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '新沂市',
                'status' => 1,
            ),
            38 => 
            array (
                'id' => 1539,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '邳州市',
                'status' => 1,
            ),
            39 => 
            array (
                'id' => 1540,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '丰县',
                'status' => 1,
            ),
            40 => 
            array (
                'id' => 1541,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '沛县',
                'status' => 1,
            ),
            41 => 
            array (
                'id' => 1542,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '铜山县',
                'status' => 1,
            ),
            42 => 
            array (
                'id' => 1543,
                'city_id' => 195,
                'province_id' => 16,
                'name' => '睢宁县',
                'status' => 1,
            ),
            43 => 
            array (
                'id' => 1544,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '城区',
                'status' => 1,
            ),
            44 => 
            array (
                'id' => 1545,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '亭湖区',
                'status' => 1,
            ),
            45 => 
            array (
                'id' => 1546,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '盐都区',
                'status' => 1,
            ),
            46 => 
            array (
                'id' => 1547,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '盐都县',
                'status' => 1,
            ),
            47 => 
            array (
                'id' => 1548,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '东台市',
                'status' => 1,
            ),
            48 => 
            array (
                'id' => 1549,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '大丰市',
                'status' => 1,
            ),
            49 => 
            array (
                'id' => 1550,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '响水县',
                'status' => 1,
            ),
            50 => 
            array (
                'id' => 1551,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '滨海县',
                'status' => 1,
            ),
            51 => 
            array (
                'id' => 1552,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '阜宁县',
                'status' => 1,
            ),
            52 => 
            array (
                'id' => 1553,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '射阳县',
                'status' => 1,
            ),
            53 => 
            array (
                'id' => 1554,
                'city_id' => 196,
                'province_id' => 16,
                'name' => '建湖县',
                'status' => 1,
            ),
            54 => 
            array (
                'id' => 1555,
                'city_id' => 197,
                'province_id' => 16,
                'name' => '广陵区',
                'status' => 1,
            ),
            55 => 
            array (
                'id' => 1556,
                'city_id' => 197,
                'province_id' => 16,
                'name' => '维扬区',
                'status' => 1,
            ),
            56 => 
            array (
                'id' => 1557,
                'city_id' => 197,
                'province_id' => 16,
                'name' => '邗江区',
                'status' => 1,
            ),
            57 => 
            array (
                'id' => 1558,
                'city_id' => 197,
                'province_id' => 16,
                'name' => '仪征市',
                'status' => 1,
            ),
            58 => 
            array (
                'id' => 1559,
                'city_id' => 197,
                'province_id' => 16,
                'name' => '高邮市',
                'status' => 1,
            ),
            59 => 
            array (
                'id' => 1560,
                'city_id' => 197,
                'province_id' => 16,
                'name' => '江都市',
                'status' => 1,
            ),
            60 => 
            array (
                'id' => 1561,
                'city_id' => 197,
                'province_id' => 16,
                'name' => '宝应县',
                'status' => 1,
            ),
            61 => 
            array (
                'id' => 1562,
                'city_id' => 198,
                'province_id' => 16,
                'name' => '京口区',
                'status' => 1,
            ),
            62 => 
            array (
                'id' => 1563,
                'city_id' => 198,
                'province_id' => 16,
                'name' => '润州区',
                'status' => 1,
            ),
            63 => 
            array (
                'id' => 1564,
                'city_id' => 198,
                'province_id' => 16,
                'name' => '丹徒区',
                'status' => 1,
            ),
            64 => 
            array (
                'id' => 1565,
                'city_id' => 198,
                'province_id' => 16,
                'name' => '丹阳市',
                'status' => 1,
            ),
            65 => 
            array (
                'id' => 1566,
                'city_id' => 198,
                'province_id' => 16,
                'name' => '扬中市',
                'status' => 1,
            ),
            66 => 
            array (
                'id' => 1567,
                'city_id' => 198,
                'province_id' => 16,
                'name' => '句容市',
                'status' => 1,
            ),
            67 => 
            array (
                'id' => 1568,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '东湖区',
                'status' => 1,
            ),
            68 => 
            array (
                'id' => 1569,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '西湖区',
                'status' => 1,
            ),
            69 => 
            array (
                'id' => 1570,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '青云谱区',
                'status' => 1,
            ),
            70 => 
            array (
                'id' => 1571,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '湾里区',
                'status' => 1,
            ),
            71 => 
            array (
                'id' => 1572,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '青山湖区',
                'status' => 1,
            ),
            72 => 
            array (
                'id' => 1573,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '红谷滩新区',
                'status' => 1,
            ),
            73 => 
            array (
                'id' => 1574,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '昌北区',
                'status' => 1,
            ),
            74 => 
            array (
                'id' => 1575,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '高新区',
                'status' => 1,
            ),
            75 => 
            array (
                'id' => 1576,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '南昌县',
                'status' => 1,
            ),
            76 => 
            array (
                'id' => 1577,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '新建县',
                'status' => 1,
            ),
            77 => 
            array (
                'id' => 1578,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '安义县',
                'status' => 1,
            ),
            78 => 
            array (
                'id' => 1579,
                'city_id' => 199,
                'province_id' => 17,
                'name' => '进贤县',
                'status' => 1,
            ),
            79 => 
            array (
                'id' => 1580,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '临川区',
                'status' => 1,
            ),
            80 => 
            array (
                'id' => 1581,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '南城县',
                'status' => 1,
            ),
            81 => 
            array (
                'id' => 1582,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '黎川县',
                'status' => 1,
            ),
            82 => 
            array (
                'id' => 1583,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '南丰县',
                'status' => 1,
            ),
            83 => 
            array (
                'id' => 1584,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '崇仁县',
                'status' => 1,
            ),
            84 => 
            array (
                'id' => 1585,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '乐安县',
                'status' => 1,
            ),
            85 => 
            array (
                'id' => 1586,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '宜黄县',
                'status' => 1,
            ),
            86 => 
            array (
                'id' => 1587,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '金溪县',
                'status' => 1,
            ),
            87 => 
            array (
                'id' => 1588,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '资溪县',
                'status' => 1,
            ),
            88 => 
            array (
                'id' => 1589,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '东乡县',
                'status' => 1,
            ),
            89 => 
            array (
                'id' => 1590,
                'city_id' => 200,
                'province_id' => 17,
                'name' => '广昌县',
                'status' => 1,
            ),
            90 => 
            array (
                'id' => 1591,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '章贡区',
                'status' => 1,
            ),
            91 => 
            array (
                'id' => 1592,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '于都县',
                'status' => 1,
            ),
            92 => 
            array (
                'id' => 1593,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '瑞金市',
                'status' => 1,
            ),
            93 => 
            array (
                'id' => 1594,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '南康市',
                'status' => 1,
            ),
            94 => 
            array (
                'id' => 1595,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '赣县',
                'status' => 1,
            ),
            95 => 
            array (
                'id' => 1596,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '信丰县',
                'status' => 1,
            ),
            96 => 
            array (
                'id' => 1597,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '大余县',
                'status' => 1,
            ),
            97 => 
            array (
                'id' => 1598,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '上犹县',
                'status' => 1,
            ),
            98 => 
            array (
                'id' => 1599,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '崇义县',
                'status' => 1,
            ),
            99 => 
            array (
                'id' => 1600,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '安远县',
                'status' => 1,
            ),
            100 => 
            array (
                'id' => 1601,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '龙南县',
                'status' => 1,
            ),
            101 => 
            array (
                'id' => 1602,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '定南县',
                'status' => 1,
            ),
            102 => 
            array (
                'id' => 1603,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '全南县',
                'status' => 1,
            ),
            103 => 
            array (
                'id' => 1604,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '宁都县',
                'status' => 1,
            ),
            104 => 
            array (
                'id' => 1605,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '兴国县',
                'status' => 1,
            ),
            105 => 
            array (
                'id' => 1606,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '会昌县',
                'status' => 1,
            ),
            106 => 
            array (
                'id' => 1607,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '寻乌县',
                'status' => 1,
            ),
            107 => 
            array (
                'id' => 1608,
                'city_id' => 201,
                'province_id' => 17,
                'name' => '石城县',
                'status' => 1,
            ),
            108 => 
            array (
                'id' => 1609,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '安福县',
                'status' => 1,
            ),
            109 => 
            array (
                'id' => 1610,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '吉州区',
                'status' => 1,
            ),
            110 => 
            array (
                'id' => 1611,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '青原区',
                'status' => 1,
            ),
            111 => 
            array (
                'id' => 1612,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '井冈山市',
                'status' => 1,
            ),
            112 => 
            array (
                'id' => 1613,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '吉安县',
                'status' => 1,
            ),
            113 => 
            array (
                'id' => 1614,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '吉水县',
                'status' => 1,
            ),
            114 => 
            array (
                'id' => 1615,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '峡江县',
                'status' => 1,
            ),
            115 => 
            array (
                'id' => 1616,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '新干县',
                'status' => 1,
            ),
            116 => 
            array (
                'id' => 1617,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '永丰县',
                'status' => 1,
            ),
            117 => 
            array (
                'id' => 1618,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '泰和县',
                'status' => 1,
            ),
            118 => 
            array (
                'id' => 1619,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '遂川县',
                'status' => 1,
            ),
            119 => 
            array (
                'id' => 1620,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '万安县',
                'status' => 1,
            ),
            120 => 
            array (
                'id' => 1621,
                'city_id' => 202,
                'province_id' => 17,
                'name' => '永新县',
                'status' => 1,
            ),
            121 => 
            array (
                'id' => 1622,
                'city_id' => 203,
                'province_id' => 17,
                'name' => '珠山区',
                'status' => 1,
            ),
            122 => 
            array (
                'id' => 1623,
                'city_id' => 203,
                'province_id' => 17,
                'name' => '昌江区',
                'status' => 1,
            ),
            123 => 
            array (
                'id' => 1624,
                'city_id' => 203,
                'province_id' => 17,
                'name' => '乐平市',
                'status' => 1,
            ),
            124 => 
            array (
                'id' => 1625,
                'city_id' => 203,
                'province_id' => 17,
                'name' => '浮梁县',
                'status' => 1,
            ),
            125 => 
            array (
                'id' => 1626,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '浔阳区',
                'status' => 1,
            ),
            126 => 
            array (
                'id' => 1627,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '庐山区',
                'status' => 1,
            ),
            127 => 
            array (
                'id' => 1628,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '瑞昌市',
                'status' => 1,
            ),
            128 => 
            array (
                'id' => 1629,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '九江县',
                'status' => 1,
            ),
            129 => 
            array (
                'id' => 1630,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '武宁县',
                'status' => 1,
            ),
            130 => 
            array (
                'id' => 1631,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '修水县',
                'status' => 1,
            ),
            131 => 
            array (
                'id' => 1632,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '永修县',
                'status' => 1,
            ),
            132 => 
            array (
                'id' => 1633,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '德安县',
                'status' => 1,
            ),
            133 => 
            array (
                'id' => 1634,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '星子县',
                'status' => 1,
            ),
            134 => 
            array (
                'id' => 1635,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '都昌县',
                'status' => 1,
            ),
            135 => 
            array (
                'id' => 1636,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '湖口县',
                'status' => 1,
            ),
            136 => 
            array (
                'id' => 1637,
                'city_id' => 204,
                'province_id' => 17,
                'name' => '彭泽县',
                'status' => 1,
            ),
            137 => 
            array (
                'id' => 1638,
                'city_id' => 205,
                'province_id' => 17,
                'name' => '安源区',
                'status' => 1,
            ),
            138 => 
            array (
                'id' => 1639,
                'city_id' => 205,
                'province_id' => 17,
                'name' => '湘东区',
                'status' => 1,
            ),
            139 => 
            array (
                'id' => 1640,
                'city_id' => 205,
                'province_id' => 17,
                'name' => '莲花县',
                'status' => 1,
            ),
            140 => 
            array (
                'id' => 1641,
                'city_id' => 205,
                'province_id' => 17,
                'name' => '芦溪县',
                'status' => 1,
            ),
            141 => 
            array (
                'id' => 1642,
                'city_id' => 205,
                'province_id' => 17,
                'name' => '上栗县',
                'status' => 1,
            ),
            142 => 
            array (
                'id' => 1643,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '信州区',
                'status' => 1,
            ),
            143 => 
            array (
                'id' => 1644,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '德兴市',
                'status' => 1,
            ),
            144 => 
            array (
                'id' => 1645,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '上饶县',
                'status' => 1,
            ),
            145 => 
            array (
                'id' => 1646,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '广丰县',
                'status' => 1,
            ),
            146 => 
            array (
                'id' => 1647,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '玉山县',
                'status' => 1,
            ),
            147 => 
            array (
                'id' => 1648,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '铅山县',
                'status' => 1,
            ),
            148 => 
            array (
                'id' => 1649,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '横峰县',
                'status' => 1,
            ),
            149 => 
            array (
                'id' => 1650,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '弋阳县',
                'status' => 1,
            ),
            150 => 
            array (
                'id' => 1651,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '余干县',
                'status' => 1,
            ),
            151 => 
            array (
                'id' => 1652,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '波阳县',
                'status' => 1,
            ),
            152 => 
            array (
                'id' => 1653,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '万年县',
                'status' => 1,
            ),
            153 => 
            array (
                'id' => 1654,
                'city_id' => 206,
                'province_id' => 17,
                'name' => '婺源县',
                'status' => 1,
            ),
            154 => 
            array (
                'id' => 1655,
                'city_id' => 207,
                'province_id' => 17,
                'name' => '渝水区',
                'status' => 1,
            ),
            155 => 
            array (
                'id' => 1656,
                'city_id' => 207,
                'province_id' => 17,
                'name' => '分宜县',
                'status' => 1,
            ),
            156 => 
            array (
                'id' => 1657,
                'city_id' => 208,
                'province_id' => 17,
                'name' => '袁州区',
                'status' => 1,
            ),
            157 => 
            array (
                'id' => 1658,
                'city_id' => 208,
                'province_id' => 17,
                'name' => '丰城市',
                'status' => 1,
            ),
            158 => 
            array (
                'id' => 1659,
                'city_id' => 208,
                'province_id' => 17,
                'name' => '樟树市',
                'status' => 1,
            ),
            159 => 
            array (
                'id' => 1660,
                'city_id' => 208,
                'province_id' => 17,
                'name' => '高安市',
                'status' => 1,
            ),
            160 => 
            array (
                'id' => 1661,
                'city_id' => 208,
                'province_id' => 17,
                'name' => '奉新县',
                'status' => 1,
            ),
            161 => 
            array (
                'id' => 1662,
                'city_id' => 208,
                'province_id' => 17,
                'name' => '万载县',
                'status' => 1,
            ),
            162 => 
            array (
                'id' => 1663,
                'city_id' => 208,
                'province_id' => 17,
                'name' => '上高县',
                'status' => 1,
            ),
            163 => 
            array (
                'id' => 1664,
                'city_id' => 208,
                'province_id' => 17,
                'name' => '宜丰县',
                'status' => 1,
            ),
            164 => 
            array (
                'id' => 1665,
                'city_id' => 208,
                'province_id' => 17,
                'name' => '靖安县',
                'status' => 1,
            ),
            165 => 
            array (
                'id' => 1666,
                'city_id' => 208,
                'province_id' => 17,
                'name' => '铜鼓县',
                'status' => 1,
            ),
            166 => 
            array (
                'id' => 1667,
                'city_id' => 209,
                'province_id' => 17,
                'name' => '月湖区',
                'status' => 1,
            ),
            167 => 
            array (
                'id' => 1668,
                'city_id' => 209,
                'province_id' => 17,
                'name' => '贵溪市',
                'status' => 1,
            ),
            168 => 
            array (
                'id' => 1669,
                'city_id' => 209,
                'province_id' => 17,
                'name' => '余江县',
                'status' => 1,
            ),
            169 => 
            array (
                'id' => 1670,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '沈河区',
                'status' => 1,
            ),
            170 => 
            array (
                'id' => 1671,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '皇姑区',
                'status' => 1,
            ),
            171 => 
            array (
                'id' => 1672,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '和平区',
                'status' => 1,
            ),
            172 => 
            array (
                'id' => 1673,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '大东区',
                'status' => 1,
            ),
            173 => 
            array (
                'id' => 1674,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '铁西区',
                'status' => 1,
            ),
            174 => 
            array (
                'id' => 1675,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '苏家屯区',
                'status' => 1,
            ),
            175 => 
            array (
                'id' => 1676,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '东陵区',
                'status' => 1,
            ),
            176 => 
            array (
                'id' => 1677,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '沈北新区',
                'status' => 1,
            ),
            177 => 
            array (
                'id' => 1678,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '于洪区',
                'status' => 1,
            ),
            178 => 
            array (
                'id' => 1679,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '浑南新区',
                'status' => 1,
            ),
            179 => 
            array (
                'id' => 1680,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '新民市',
                'status' => 1,
            ),
            180 => 
            array (
                'id' => 1681,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '辽中县',
                'status' => 1,
            ),
            181 => 
            array (
                'id' => 1682,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '康平县',
                'status' => 1,
            ),
            182 => 
            array (
                'id' => 1683,
                'city_id' => 210,
                'province_id' => 18,
                'name' => '法库县',
                'status' => 1,
            ),
            183 => 
            array (
                'id' => 1684,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '西岗区',
                'status' => 1,
            ),
            184 => 
            array (
                'id' => 1685,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '中山区',
                'status' => 1,
            ),
            185 => 
            array (
                'id' => 1686,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '沙河口区',
                'status' => 1,
            ),
            186 => 
            array (
                'id' => 1687,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '甘井子区',
                'status' => 1,
            ),
            187 => 
            array (
                'id' => 1688,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '旅顺口区',
                'status' => 1,
            ),
            188 => 
            array (
                'id' => 1689,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '金州区',
                'status' => 1,
            ),
            189 => 
            array (
                'id' => 1690,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '开发区',
                'status' => 1,
            ),
            190 => 
            array (
                'id' => 1691,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '瓦房店市',
                'status' => 1,
            ),
            191 => 
            array (
                'id' => 1692,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '普兰店市',
                'status' => 1,
            ),
            192 => 
            array (
                'id' => 1693,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '庄河市',
                'status' => 1,
            ),
            193 => 
            array (
                'id' => 1694,
                'city_id' => 211,
                'province_id' => 18,
                'name' => '长海县',
                'status' => 1,
            ),
            194 => 
            array (
                'id' => 1695,
                'city_id' => 212,
                'province_id' => 18,
                'name' => '铁东区',
                'status' => 1,
            ),
            195 => 
            array (
                'id' => 1696,
                'city_id' => 212,
                'province_id' => 18,
                'name' => '铁西区',
                'status' => 1,
            ),
            196 => 
            array (
                'id' => 1697,
                'city_id' => 212,
                'province_id' => 18,
                'name' => '立山区',
                'status' => 1,
            ),
            197 => 
            array (
                'id' => 1698,
                'city_id' => 212,
                'province_id' => 18,
                'name' => '千山区',
                'status' => 1,
            ),
            198 => 
            array (
                'id' => 1699,
                'city_id' => 212,
                'province_id' => 18,
                'name' => '岫岩',
                'status' => 1,
            ),
            199 => 
            array (
                'id' => 1700,
                'city_id' => 212,
                'province_id' => 18,
                'name' => '海城市',
                'status' => 1,
            ),
            200 => 
            array (
                'id' => 1701,
                'city_id' => 212,
                'province_id' => 18,
                'name' => '台安县',
                'status' => 1,
            ),
            201 => 
            array (
                'id' => 1702,
                'city_id' => 213,
                'province_id' => 18,
                'name' => '本溪',
                'status' => 1,
            ),
            202 => 
            array (
                'id' => 1703,
                'city_id' => 213,
                'province_id' => 18,
                'name' => '平山区',
                'status' => 1,
            ),
            203 => 
            array (
                'id' => 1704,
                'city_id' => 213,
                'province_id' => 18,
                'name' => '明山区',
                'status' => 1,
            ),
            204 => 
            array (
                'id' => 1705,
                'city_id' => 213,
                'province_id' => 18,
                'name' => '溪湖区',
                'status' => 1,
            ),
            205 => 
            array (
                'id' => 1706,
                'city_id' => 213,
                'province_id' => 18,
                'name' => '南芬区',
                'status' => 1,
            ),
            206 => 
            array (
                'id' => 1707,
                'city_id' => 213,
                'province_id' => 18,
                'name' => '桓仁',
                'status' => 1,
            ),
            207 => 
            array (
                'id' => 1708,
                'city_id' => 214,
                'province_id' => 18,
                'name' => '双塔区',
                'status' => 1,
            ),
            208 => 
            array (
                'id' => 1709,
                'city_id' => 214,
                'province_id' => 18,
                'name' => '龙城区',
                'status' => 1,
            ),
            209 => 
            array (
                'id' => 1710,
                'city_id' => 214,
                'province_id' => 18,
                'name' => '喀喇沁左翼蒙古族自治县',
                'status' => 1,
            ),
            210 => 
            array (
                'id' => 1711,
                'city_id' => 214,
                'province_id' => 18,
                'name' => '北票市',
                'status' => 1,
            ),
            211 => 
            array (
                'id' => 1712,
                'city_id' => 214,
                'province_id' => 18,
                'name' => '凌源市',
                'status' => 1,
            ),
            212 => 
            array (
                'id' => 1713,
                'city_id' => 214,
                'province_id' => 18,
                'name' => '朝阳县',
                'status' => 1,
            ),
            213 => 
            array (
                'id' => 1714,
                'city_id' => 214,
                'province_id' => 18,
                'name' => '建平县',
                'status' => 1,
            ),
            214 => 
            array (
                'id' => 1715,
                'city_id' => 215,
                'province_id' => 18,
                'name' => '振兴区',
                'status' => 1,
            ),
            215 => 
            array (
                'id' => 1716,
                'city_id' => 215,
                'province_id' => 18,
                'name' => '元宝区',
                'status' => 1,
            ),
            216 => 
            array (
                'id' => 1717,
                'city_id' => 215,
                'province_id' => 18,
                'name' => '振安区',
                'status' => 1,
            ),
            217 => 
            array (
                'id' => 1718,
                'city_id' => 215,
                'province_id' => 18,
                'name' => '宽甸',
                'status' => 1,
            ),
            218 => 
            array (
                'id' => 1719,
                'city_id' => 215,
                'province_id' => 18,
                'name' => '东港市',
                'status' => 1,
            ),
            219 => 
            array (
                'id' => 1720,
                'city_id' => 215,
                'province_id' => 18,
                'name' => '凤城市',
                'status' => 1,
            ),
            220 => 
            array (
                'id' => 1721,
                'city_id' => 216,
                'province_id' => 18,
                'name' => '顺城区',
                'status' => 1,
            ),
            221 => 
            array (
                'id' => 1722,
                'city_id' => 216,
                'province_id' => 18,
                'name' => '新抚区',
                'status' => 1,
            ),
            222 => 
            array (
                'id' => 1723,
                'city_id' => 216,
                'province_id' => 18,
                'name' => '东洲区',
                'status' => 1,
            ),
            223 => 
            array (
                'id' => 1724,
                'city_id' => 216,
                'province_id' => 18,
                'name' => '望花区',
                'status' => 1,
            ),
            224 => 
            array (
                'id' => 1725,
                'city_id' => 216,
                'province_id' => 18,
                'name' => '清原',
                'status' => 1,
            ),
            225 => 
            array (
                'id' => 1726,
                'city_id' => 216,
                'province_id' => 18,
                'name' => '新宾',
                'status' => 1,
            ),
            226 => 
            array (
                'id' => 1727,
                'city_id' => 216,
                'province_id' => 18,
                'name' => '抚顺县',
                'status' => 1,
            ),
            227 => 
            array (
                'id' => 1728,
                'city_id' => 217,
                'province_id' => 18,
                'name' => '阜新',
                'status' => 1,
            ),
            228 => 
            array (
                'id' => 1729,
                'city_id' => 217,
                'province_id' => 18,
                'name' => '海州区',
                'status' => 1,
            ),
            229 => 
            array (
                'id' => 1730,
                'city_id' => 217,
                'province_id' => 18,
                'name' => '新邱区',
                'status' => 1,
            ),
            230 => 
            array (
                'id' => 1731,
                'city_id' => 217,
                'province_id' => 18,
                'name' => '太平区',
                'status' => 1,
            ),
            231 => 
            array (
                'id' => 1732,
                'city_id' => 217,
                'province_id' => 18,
                'name' => '清河门区',
                'status' => 1,
            ),
            232 => 
            array (
                'id' => 1733,
                'city_id' => 217,
                'province_id' => 18,
                'name' => '细河区',
                'status' => 1,
            ),
            233 => 
            array (
                'id' => 1734,
                'city_id' => 217,
                'province_id' => 18,
                'name' => '彰武县',
                'status' => 1,
            ),
            234 => 
            array (
                'id' => 1735,
                'city_id' => 218,
                'province_id' => 18,
                'name' => '龙港区',
                'status' => 1,
            ),
            235 => 
            array (
                'id' => 1736,
                'city_id' => 218,
                'province_id' => 18,
                'name' => '南票区',
                'status' => 1,
            ),
            236 => 
            array (
                'id' => 1737,
                'city_id' => 218,
                'province_id' => 18,
                'name' => '连山区',
                'status' => 1,
            ),
            237 => 
            array (
                'id' => 1738,
                'city_id' => 218,
                'province_id' => 18,
                'name' => '兴城市',
                'status' => 1,
            ),
            238 => 
            array (
                'id' => 1739,
                'city_id' => 218,
                'province_id' => 18,
                'name' => '绥中县',
                'status' => 1,
            ),
            239 => 
            array (
                'id' => 1740,
                'city_id' => 218,
                'province_id' => 18,
                'name' => '建昌县',
                'status' => 1,
            ),
            240 => 
            array (
                'id' => 1741,
                'city_id' => 219,
                'province_id' => 18,
                'name' => '太和区',
                'status' => 1,
            ),
            241 => 
            array (
                'id' => 1742,
                'city_id' => 219,
                'province_id' => 18,
                'name' => '古塔区',
                'status' => 1,
            ),
            242 => 
            array (
                'id' => 1743,
                'city_id' => 219,
                'province_id' => 18,
                'name' => '凌河区',
                'status' => 1,
            ),
            243 => 
            array (
                'id' => 1744,
                'city_id' => 219,
                'province_id' => 18,
                'name' => '凌海市',
                'status' => 1,
            ),
            244 => 
            array (
                'id' => 1745,
                'city_id' => 219,
                'province_id' => 18,
                'name' => '北镇市',
                'status' => 1,
            ),
            245 => 
            array (
                'id' => 1746,
                'city_id' => 219,
                'province_id' => 18,
                'name' => '黑山县',
                'status' => 1,
            ),
            246 => 
            array (
                'id' => 1747,
                'city_id' => 219,
                'province_id' => 18,
                'name' => '义县',
                'status' => 1,
            ),
            247 => 
            array (
                'id' => 1748,
                'city_id' => 220,
                'province_id' => 18,
                'name' => '白塔区',
                'status' => 1,
            ),
            248 => 
            array (
                'id' => 1749,
                'city_id' => 220,
                'province_id' => 18,
                'name' => '文圣区',
                'status' => 1,
            ),
            249 => 
            array (
                'id' => 1750,
                'city_id' => 220,
                'province_id' => 18,
                'name' => '宏伟区',
                'status' => 1,
            ),
            250 => 
            array (
                'id' => 1751,
                'city_id' => 220,
                'province_id' => 18,
                'name' => '太子河区',
                'status' => 1,
            ),
            251 => 
            array (
                'id' => 1752,
                'city_id' => 220,
                'province_id' => 18,
                'name' => '弓长岭区',
                'status' => 1,
            ),
            252 => 
            array (
                'id' => 1753,
                'city_id' => 220,
                'province_id' => 18,
                'name' => '灯塔市',
                'status' => 1,
            ),
            253 => 
            array (
                'id' => 1754,
                'city_id' => 220,
                'province_id' => 18,
                'name' => '辽阳县',
                'status' => 1,
            ),
            254 => 
            array (
                'id' => 1755,
                'city_id' => 221,
                'province_id' => 18,
                'name' => '双台子区',
                'status' => 1,
            ),
            255 => 
            array (
                'id' => 1756,
                'city_id' => 221,
                'province_id' => 18,
                'name' => '兴隆台区',
                'status' => 1,
            ),
            256 => 
            array (
                'id' => 1757,
                'city_id' => 221,
                'province_id' => 18,
                'name' => '大洼县',
                'status' => 1,
            ),
            257 => 
            array (
                'id' => 1758,
                'city_id' => 221,
                'province_id' => 18,
                'name' => '盘山县',
                'status' => 1,
            ),
            258 => 
            array (
                'id' => 1759,
                'city_id' => 222,
                'province_id' => 18,
                'name' => '银州区',
                'status' => 1,
            ),
            259 => 
            array (
                'id' => 1760,
                'city_id' => 222,
                'province_id' => 18,
                'name' => '清河区',
                'status' => 1,
            ),
            260 => 
            array (
                'id' => 1761,
                'city_id' => 222,
                'province_id' => 18,
                'name' => '调兵山市',
                'status' => 1,
            ),
            261 => 
            array (
                'id' => 1762,
                'city_id' => 222,
                'province_id' => 18,
                'name' => '开原市',
                'status' => 1,
            ),
            262 => 
            array (
                'id' => 1763,
                'city_id' => 222,
                'province_id' => 18,
                'name' => '铁岭县',
                'status' => 1,
            ),
            263 => 
            array (
                'id' => 1764,
                'city_id' => 222,
                'province_id' => 18,
                'name' => '西丰县',
                'status' => 1,
            ),
            264 => 
            array (
                'id' => 1765,
                'city_id' => 222,
                'province_id' => 18,
                'name' => '昌图县',
                'status' => 1,
            ),
            265 => 
            array (
                'id' => 1766,
                'city_id' => 223,
                'province_id' => 18,
                'name' => '站前区',
                'status' => 1,
            ),
            266 => 
            array (
                'id' => 1767,
                'city_id' => 223,
                'province_id' => 18,
                'name' => '西市区',
                'status' => 1,
            ),
            267 => 
            array (
                'id' => 1768,
                'city_id' => 223,
                'province_id' => 18,
                'name' => '鲅鱼圈区',
                'status' => 1,
            ),
            268 => 
            array (
                'id' => 1769,
                'city_id' => 223,
                'province_id' => 18,
                'name' => '老边区',
                'status' => 1,
            ),
            269 => 
            array (
                'id' => 1770,
                'city_id' => 223,
                'province_id' => 18,
                'name' => '盖州市',
                'status' => 1,
            ),
            270 => 
            array (
                'id' => 1771,
                'city_id' => 223,
                'province_id' => 18,
                'name' => '大石桥市',
                'status' => 1,
            ),
            271 => 
            array (
                'id' => 1772,
                'city_id' => 224,
                'province_id' => 19,
                'name' => '回民区',
                'status' => 1,
            ),
            272 => 
            array (
                'id' => 1773,
                'city_id' => 224,
                'province_id' => 19,
                'name' => '玉泉区',
                'status' => 1,
            ),
            273 => 
            array (
                'id' => 1774,
                'city_id' => 224,
                'province_id' => 19,
                'name' => '新城区',
                'status' => 1,
            ),
            274 => 
            array (
                'id' => 1775,
                'city_id' => 224,
                'province_id' => 19,
                'name' => '赛罕区',
                'status' => 1,
            ),
            275 => 
            array (
                'id' => 1776,
                'city_id' => 224,
                'province_id' => 19,
                'name' => '清水河县',
                'status' => 1,
            ),
            276 => 
            array (
                'id' => 1777,
                'city_id' => 224,
                'province_id' => 19,
                'name' => '土默特左旗',
                'status' => 1,
            ),
            277 => 
            array (
                'id' => 1778,
                'city_id' => 224,
                'province_id' => 19,
                'name' => '托克托县',
                'status' => 1,
            ),
            278 => 
            array (
                'id' => 1779,
                'city_id' => 224,
                'province_id' => 19,
                'name' => '和林格尔县',
                'status' => 1,
            ),
            279 => 
            array (
                'id' => 1780,
                'city_id' => 224,
                'province_id' => 19,
                'name' => '武川县',
                'status' => 1,
            ),
            280 => 
            array (
                'id' => 1781,
                'city_id' => 225,
                'province_id' => 19,
                'name' => '阿拉善左旗',
                'status' => 1,
            ),
            281 => 
            array (
                'id' => 1782,
                'city_id' => 225,
                'province_id' => 19,
                'name' => '阿拉善右旗',
                'status' => 1,
            ),
            282 => 
            array (
                'id' => 1783,
                'city_id' => 225,
                'province_id' => 19,
                'name' => '额济纳旗',
                'status' => 1,
            ),
            283 => 
            array (
                'id' => 1784,
                'city_id' => 226,
                'province_id' => 19,
                'name' => '临河区',
                'status' => 1,
            ),
            284 => 
            array (
                'id' => 1785,
                'city_id' => 226,
                'province_id' => 19,
                'name' => '五原县',
                'status' => 1,
            ),
            285 => 
            array (
                'id' => 1786,
                'city_id' => 226,
                'province_id' => 19,
                'name' => '磴口县',
                'status' => 1,
            ),
            286 => 
            array (
                'id' => 1787,
                'city_id' => 226,
                'province_id' => 19,
                'name' => '乌拉特前旗',
                'status' => 1,
            ),
            287 => 
            array (
                'id' => 1788,
                'city_id' => 226,
                'province_id' => 19,
                'name' => '乌拉特中旗',
                'status' => 1,
            ),
            288 => 
            array (
                'id' => 1789,
                'city_id' => 226,
                'province_id' => 19,
                'name' => '乌拉特后旗',
                'status' => 1,
            ),
            289 => 
            array (
                'id' => 1790,
                'city_id' => 226,
                'province_id' => 19,
                'name' => '杭锦后旗',
                'status' => 1,
            ),
            290 => 
            array (
                'id' => 1791,
                'city_id' => 227,
                'province_id' => 19,
                'name' => '昆都仑区',
                'status' => 1,
            ),
            291 => 
            array (
                'id' => 1792,
                'city_id' => 227,
                'province_id' => 19,
                'name' => '青山区',
                'status' => 1,
            ),
            292 => 
            array (
                'id' => 1793,
                'city_id' => 227,
                'province_id' => 19,
                'name' => '东河区',
                'status' => 1,
            ),
            293 => 
            array (
                'id' => 1794,
                'city_id' => 227,
                'province_id' => 19,
                'name' => '九原区',
                'status' => 1,
            ),
            294 => 
            array (
                'id' => 1795,
                'city_id' => 227,
                'province_id' => 19,
                'name' => '石拐区',
                'status' => 1,
            ),
            295 => 
            array (
                'id' => 1796,
                'city_id' => 227,
                'province_id' => 19,
                'name' => '白云矿区',
                'status' => 1,
            ),
            296 => 
            array (
                'id' => 1797,
                'city_id' => 227,
                'province_id' => 19,
                'name' => '土默特右旗',
                'status' => 1,
            ),
            297 => 
            array (
                'id' => 1798,
                'city_id' => 227,
                'province_id' => 19,
                'name' => '固阳县',
                'status' => 1,
            ),
            298 => 
            array (
                'id' => 1799,
                'city_id' => 227,
                'province_id' => 19,
                'name' => '达尔罕茂明安联合旗',
                'status' => 1,
            ),
            299 => 
            array (
                'id' => 1800,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '红山区',
                'status' => 1,
            ),
            300 => 
            array (
                'id' => 1801,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '元宝山区',
                'status' => 1,
            ),
            301 => 
            array (
                'id' => 1802,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '松山区',
                'status' => 1,
            ),
            302 => 
            array (
                'id' => 1803,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '阿鲁科尔沁旗',
                'status' => 1,
            ),
            303 => 
            array (
                'id' => 1804,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '巴林左旗',
                'status' => 1,
            ),
            304 => 
            array (
                'id' => 1805,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '巴林右旗',
                'status' => 1,
            ),
            305 => 
            array (
                'id' => 1806,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '林西县',
                'status' => 1,
            ),
            306 => 
            array (
                'id' => 1807,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '克什克腾旗',
                'status' => 1,
            ),
            307 => 
            array (
                'id' => 1808,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '翁牛特旗',
                'status' => 1,
            ),
            308 => 
            array (
                'id' => 1809,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '喀喇沁旗',
                'status' => 1,
            ),
            309 => 
            array (
                'id' => 1810,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '宁城县',
                'status' => 1,
            ),
            310 => 
            array (
                'id' => 1811,
                'city_id' => 228,
                'province_id' => 19,
                'name' => '敖汉旗',
                'status' => 1,
            ),
            311 => 
            array (
                'id' => 1812,
                'city_id' => 229,
                'province_id' => 19,
                'name' => '东胜区',
                'status' => 1,
            ),
            312 => 
            array (
                'id' => 1813,
                'city_id' => 229,
                'province_id' => 19,
                'name' => '达拉特旗',
                'status' => 1,
            ),
            313 => 
            array (
                'id' => 1814,
                'city_id' => 229,
                'province_id' => 19,
                'name' => '准格尔旗',
                'status' => 1,
            ),
            314 => 
            array (
                'id' => 1815,
                'city_id' => 229,
                'province_id' => 19,
                'name' => '鄂托克前旗',
                'status' => 1,
            ),
            315 => 
            array (
                'id' => 1816,
                'city_id' => 229,
                'province_id' => 19,
                'name' => '鄂托克旗',
                'status' => 1,
            ),
            316 => 
            array (
                'id' => 1817,
                'city_id' => 229,
                'province_id' => 19,
                'name' => '杭锦旗',
                'status' => 1,
            ),
            317 => 
            array (
                'id' => 1818,
                'city_id' => 229,
                'province_id' => 19,
                'name' => '乌审旗',
                'status' => 1,
            ),
            318 => 
            array (
                'id' => 1819,
                'city_id' => 229,
                'province_id' => 19,
                'name' => '伊金霍洛旗',
                'status' => 1,
            ),
            319 => 
            array (
                'id' => 1820,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '海拉尔区',
                'status' => 1,
            ),
            320 => 
            array (
                'id' => 1821,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '莫力达瓦',
                'status' => 1,
            ),
            321 => 
            array (
                'id' => 1822,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '满洲里市',
                'status' => 1,
            ),
            322 => 
            array (
                'id' => 1823,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '牙克石市',
                'status' => 1,
            ),
            323 => 
            array (
                'id' => 1824,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '扎兰屯市',
                'status' => 1,
            ),
            324 => 
            array (
                'id' => 1825,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '额尔古纳市',
                'status' => 1,
            ),
            325 => 
            array (
                'id' => 1826,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '根河市',
                'status' => 1,
            ),
            326 => 
            array (
                'id' => 1827,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '阿荣旗',
                'status' => 1,
            ),
            327 => 
            array (
                'id' => 1828,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '鄂伦春自治旗',
                'status' => 1,
            ),
            328 => 
            array (
                'id' => 1829,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '鄂温克族自治旗',
                'status' => 1,
            ),
            329 => 
            array (
                'id' => 1830,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '陈巴尔虎旗',
                'status' => 1,
            ),
            330 => 
            array (
                'id' => 1831,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '新巴尔虎左旗',
                'status' => 1,
            ),
            331 => 
            array (
                'id' => 1832,
                'city_id' => 230,
                'province_id' => 19,
                'name' => '新巴尔虎右旗',
                'status' => 1,
            ),
            332 => 
            array (
                'id' => 1833,
                'city_id' => 231,
                'province_id' => 19,
                'name' => '科尔沁区',
                'status' => 1,
            ),
            333 => 
            array (
                'id' => 1834,
                'city_id' => 231,
                'province_id' => 19,
                'name' => '霍林郭勒市',
                'status' => 1,
            ),
            334 => 
            array (
                'id' => 1835,
                'city_id' => 231,
                'province_id' => 19,
                'name' => '科尔沁左翼中旗',
                'status' => 1,
            ),
            335 => 
            array (
                'id' => 1836,
                'city_id' => 231,
                'province_id' => 19,
                'name' => '科尔沁左翼后旗',
                'status' => 1,
            ),
            336 => 
            array (
                'id' => 1837,
                'city_id' => 231,
                'province_id' => 19,
                'name' => '开鲁县',
                'status' => 1,
            ),
            337 => 
            array (
                'id' => 1838,
                'city_id' => 231,
                'province_id' => 19,
                'name' => '库伦旗',
                'status' => 1,
            ),
            338 => 
            array (
                'id' => 1839,
                'city_id' => 231,
                'province_id' => 19,
                'name' => '奈曼旗',
                'status' => 1,
            ),
            339 => 
            array (
                'id' => 1840,
                'city_id' => 231,
                'province_id' => 19,
                'name' => '扎鲁特旗',
                'status' => 1,
            ),
            340 => 
            array (
                'id' => 1841,
                'city_id' => 232,
                'province_id' => 19,
                'name' => '海勃湾区',
                'status' => 1,
            ),
            341 => 
            array (
                'id' => 1842,
                'city_id' => 232,
                'province_id' => 19,
                'name' => '乌达区',
                'status' => 1,
            ),
            342 => 
            array (
                'id' => 1843,
                'city_id' => 232,
                'province_id' => 19,
                'name' => '海南区',
                'status' => 1,
            ),
            343 => 
            array (
                'id' => 1844,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '化德县',
                'status' => 1,
            ),
            344 => 
            array (
                'id' => 1845,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '集宁区',
                'status' => 1,
            ),
            345 => 
            array (
                'id' => 1846,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '丰镇市',
                'status' => 1,
            ),
            346 => 
            array (
                'id' => 1847,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '卓资县',
                'status' => 1,
            ),
            347 => 
            array (
                'id' => 1848,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '商都县',
                'status' => 1,
            ),
            348 => 
            array (
                'id' => 1849,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '兴和县',
                'status' => 1,
            ),
            349 => 
            array (
                'id' => 1850,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '凉城县',
                'status' => 1,
            ),
            350 => 
            array (
                'id' => 1851,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '察哈尔右翼前旗',
                'status' => 1,
            ),
            351 => 
            array (
                'id' => 1852,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '察哈尔右翼中旗',
                'status' => 1,
            ),
            352 => 
            array (
                'id' => 1853,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '察哈尔右翼后旗',
                'status' => 1,
            ),
            353 => 
            array (
                'id' => 1854,
                'city_id' => 233,
                'province_id' => 19,
                'name' => '四子王旗',
                'status' => 1,
            ),
            354 => 
            array (
                'id' => 1855,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '二连浩特市',
                'status' => 1,
            ),
            355 => 
            array (
                'id' => 1856,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '锡林浩特市',
                'status' => 1,
            ),
            356 => 
            array (
                'id' => 1857,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '阿巴嘎旗',
                'status' => 1,
            ),
            357 => 
            array (
                'id' => 1858,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '苏尼特左旗',
                'status' => 1,
            ),
            358 => 
            array (
                'id' => 1859,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '苏尼特右旗',
                'status' => 1,
            ),
            359 => 
            array (
                'id' => 1860,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '东乌珠穆沁旗',
                'status' => 1,
            ),
            360 => 
            array (
                'id' => 1861,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '西乌珠穆沁旗',
                'status' => 1,
            ),
            361 => 
            array (
                'id' => 1862,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '太仆寺旗',
                'status' => 1,
            ),
            362 => 
            array (
                'id' => 1863,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '镶黄旗',
                'status' => 1,
            ),
            363 => 
            array (
                'id' => 1864,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '正镶白旗',
                'status' => 1,
            ),
            364 => 
            array (
                'id' => 1865,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '正蓝旗',
                'status' => 1,
            ),
            365 => 
            array (
                'id' => 1866,
                'city_id' => 234,
                'province_id' => 19,
                'name' => '多伦县',
                'status' => 1,
            ),
            366 => 
            array (
                'id' => 1867,
                'city_id' => 235,
                'province_id' => 19,
                'name' => '乌兰浩特市',
                'status' => 1,
            ),
            367 => 
            array (
                'id' => 1868,
                'city_id' => 235,
                'province_id' => 19,
                'name' => '阿尔山市',
                'status' => 1,
            ),
            368 => 
            array (
                'id' => 1869,
                'city_id' => 235,
                'province_id' => 19,
                'name' => '科尔沁右翼前旗',
                'status' => 1,
            ),
            369 => 
            array (
                'id' => 1870,
                'city_id' => 235,
                'province_id' => 19,
                'name' => '科尔沁右翼中旗',
                'status' => 1,
            ),
            370 => 
            array (
                'id' => 1871,
                'city_id' => 235,
                'province_id' => 19,
                'name' => '扎赉特旗',
                'status' => 1,
            ),
            371 => 
            array (
                'id' => 1872,
                'city_id' => 235,
                'province_id' => 19,
                'name' => '突泉县',
                'status' => 1,
            ),
            372 => 
            array (
                'id' => 1873,
                'city_id' => 236,
                'province_id' => 20,
                'name' => '西夏区',
                'status' => 1,
            ),
            373 => 
            array (
                'id' => 1874,
                'city_id' => 236,
                'province_id' => 20,
                'name' => '金凤区',
                'status' => 1,
            ),
            374 => 
            array (
                'id' => 1875,
                'city_id' => 236,
                'province_id' => 20,
                'name' => '兴庆区',
                'status' => 1,
            ),
            375 => 
            array (
                'id' => 1876,
                'city_id' => 236,
                'province_id' => 20,
                'name' => '灵武市',
                'status' => 1,
            ),
            376 => 
            array (
                'id' => 1877,
                'city_id' => 236,
                'province_id' => 20,
                'name' => '永宁县',
                'status' => 1,
            ),
            377 => 
            array (
                'id' => 1878,
                'city_id' => 236,
                'province_id' => 20,
                'name' => '贺兰县',
                'status' => 1,
            ),
            378 => 
            array (
                'id' => 1879,
                'city_id' => 237,
                'province_id' => 20,
                'name' => '原州区',
                'status' => 1,
            ),
            379 => 
            array (
                'id' => 1880,
                'city_id' => 237,
                'province_id' => 20,
                'name' => '海原县',
                'status' => 1,
            ),
            380 => 
            array (
                'id' => 1881,
                'city_id' => 237,
                'province_id' => 20,
                'name' => '西吉县',
                'status' => 1,
            ),
            381 => 
            array (
                'id' => 1882,
                'city_id' => 237,
                'province_id' => 20,
                'name' => '隆德县',
                'status' => 1,
            ),
            382 => 
            array (
                'id' => 1883,
                'city_id' => 237,
                'province_id' => 20,
                'name' => '泾源县',
                'status' => 1,
            ),
            383 => 
            array (
                'id' => 1884,
                'city_id' => 237,
                'province_id' => 20,
                'name' => '彭阳县',
                'status' => 1,
            ),
            384 => 
            array (
                'id' => 1885,
                'city_id' => 238,
                'province_id' => 20,
                'name' => '惠农县',
                'status' => 1,
            ),
            385 => 
            array (
                'id' => 1886,
                'city_id' => 238,
                'province_id' => 20,
                'name' => '大武口区',
                'status' => 1,
            ),
            386 => 
            array (
                'id' => 1887,
                'city_id' => 238,
                'province_id' => 20,
                'name' => '惠农区',
                'status' => 1,
            ),
            387 => 
            array (
                'id' => 1888,
                'city_id' => 238,
                'province_id' => 20,
                'name' => '陶乐县',
                'status' => 1,
            ),
            388 => 
            array (
                'id' => 1889,
                'city_id' => 238,
                'province_id' => 20,
                'name' => '平罗县',
                'status' => 1,
            ),
            389 => 
            array (
                'id' => 1890,
                'city_id' => 239,
                'province_id' => 20,
                'name' => '利通区',
                'status' => 1,
            ),
            390 => 
            array (
                'id' => 1891,
                'city_id' => 239,
                'province_id' => 20,
                'name' => '中卫县',
                'status' => 1,
            ),
            391 => 
            array (
                'id' => 1892,
                'city_id' => 239,
                'province_id' => 20,
                'name' => '青铜峡市',
                'status' => 1,
            ),
            392 => 
            array (
                'id' => 1893,
                'city_id' => 239,
                'province_id' => 20,
                'name' => '中宁县',
                'status' => 1,
            ),
            393 => 
            array (
                'id' => 1894,
                'city_id' => 239,
                'province_id' => 20,
                'name' => '盐池县',
                'status' => 1,
            ),
            394 => 
            array (
                'id' => 1895,
                'city_id' => 239,
                'province_id' => 20,
                'name' => '同心县',
                'status' => 1,
            ),
            395 => 
            array (
                'id' => 1896,
                'city_id' => 240,
                'province_id' => 20,
                'name' => '沙坡头区',
                'status' => 1,
            ),
            396 => 
            array (
                'id' => 1897,
                'city_id' => 240,
                'province_id' => 20,
                'name' => '海原县',
                'status' => 1,
            ),
            397 => 
            array (
                'id' => 1898,
                'city_id' => 240,
                'province_id' => 20,
                'name' => '中宁县',
                'status' => 1,
            ),
            398 => 
            array (
                'id' => 1899,
                'city_id' => 241,
                'province_id' => 21,
                'name' => '城中区',
                'status' => 1,
            ),
            399 => 
            array (
                'id' => 1900,
                'city_id' => 241,
                'province_id' => 21,
                'name' => '城东区',
                'status' => 1,
            ),
            400 => 
            array (
                'id' => 1901,
                'city_id' => 241,
                'province_id' => 21,
                'name' => '城西区',
                'status' => 1,
            ),
            401 => 
            array (
                'id' => 1902,
                'city_id' => 241,
                'province_id' => 21,
                'name' => '城北区',
                'status' => 1,
            ),
            402 => 
            array (
                'id' => 1903,
                'city_id' => 241,
                'province_id' => 21,
                'name' => '湟中县',
                'status' => 1,
            ),
            403 => 
            array (
                'id' => 1904,
                'city_id' => 241,
                'province_id' => 21,
                'name' => '湟源县',
                'status' => 1,
            ),
            404 => 
            array (
                'id' => 1905,
                'city_id' => 241,
                'province_id' => 21,
                'name' => '大通',
                'status' => 1,
            ),
            405 => 
            array (
                'id' => 1906,
                'city_id' => 242,
                'province_id' => 21,
                'name' => '玛沁县',
                'status' => 1,
            ),
            406 => 
            array (
                'id' => 1907,
                'city_id' => 242,
                'province_id' => 21,
                'name' => '班玛县',
                'status' => 1,
            ),
            407 => 
            array (
                'id' => 1908,
                'city_id' => 242,
                'province_id' => 21,
                'name' => '甘德县',
                'status' => 1,
            ),
            408 => 
            array (
                'id' => 1909,
                'city_id' => 242,
                'province_id' => 21,
                'name' => '达日县',
                'status' => 1,
            ),
            409 => 
            array (
                'id' => 1910,
                'city_id' => 242,
                'province_id' => 21,
                'name' => '久治县',
                'status' => 1,
            ),
            410 => 
            array (
                'id' => 1911,
                'city_id' => 242,
                'province_id' => 21,
                'name' => '玛多县',
                'status' => 1,
            ),
            411 => 
            array (
                'id' => 1912,
                'city_id' => 243,
                'province_id' => 21,
                'name' => '海晏县',
                'status' => 1,
            ),
            412 => 
            array (
                'id' => 1913,
                'city_id' => 243,
                'province_id' => 21,
                'name' => '祁连县',
                'status' => 1,
            ),
            413 => 
            array (
                'id' => 1914,
                'city_id' => 243,
                'province_id' => 21,
                'name' => '刚察县',
                'status' => 1,
            ),
            414 => 
            array (
                'id' => 1915,
                'city_id' => 243,
                'province_id' => 21,
                'name' => '门源',
                'status' => 1,
            ),
            415 => 
            array (
                'id' => 1916,
                'city_id' => 244,
                'province_id' => 21,
                'name' => '平安县',
                'status' => 1,
            ),
            416 => 
            array (
                'id' => 1917,
                'city_id' => 244,
                'province_id' => 21,
                'name' => '乐都县',
                'status' => 1,
            ),
            417 => 
            array (
                'id' => 1918,
                'city_id' => 244,
                'province_id' => 21,
                'name' => '民和',
                'status' => 1,
            ),
            418 => 
            array (
                'id' => 1919,
                'city_id' => 244,
                'province_id' => 21,
                'name' => '互助',
                'status' => 1,
            ),
            419 => 
            array (
                'id' => 1920,
                'city_id' => 244,
                'province_id' => 21,
                'name' => '化隆',
                'status' => 1,
            ),
            420 => 
            array (
                'id' => 1921,
                'city_id' => 244,
                'province_id' => 21,
                'name' => '循化',
                'status' => 1,
            ),
            421 => 
            array (
                'id' => 1922,
                'city_id' => 245,
                'province_id' => 21,
                'name' => '共和县',
                'status' => 1,
            ),
            422 => 
            array (
                'id' => 1923,
                'city_id' => 245,
                'province_id' => 21,
                'name' => '同德县',
                'status' => 1,
            ),
            423 => 
            array (
                'id' => 1924,
                'city_id' => 245,
                'province_id' => 21,
                'name' => '贵德县',
                'status' => 1,
            ),
            424 => 
            array (
                'id' => 1925,
                'city_id' => 245,
                'province_id' => 21,
                'name' => '兴海县',
                'status' => 1,
            ),
            425 => 
            array (
                'id' => 1926,
                'city_id' => 245,
                'province_id' => 21,
                'name' => '贵南县',
                'status' => 1,
            ),
            426 => 
            array (
                'id' => 1927,
                'city_id' => 246,
                'province_id' => 21,
                'name' => '德令哈市',
                'status' => 1,
            ),
            427 => 
            array (
                'id' => 1928,
                'city_id' => 246,
                'province_id' => 21,
                'name' => '格尔木市',
                'status' => 1,
            ),
            428 => 
            array (
                'id' => 1929,
                'city_id' => 246,
                'province_id' => 21,
                'name' => '乌兰县',
                'status' => 1,
            ),
            429 => 
            array (
                'id' => 1930,
                'city_id' => 246,
                'province_id' => 21,
                'name' => '都兰县',
                'status' => 1,
            ),
            430 => 
            array (
                'id' => 1931,
                'city_id' => 246,
                'province_id' => 21,
                'name' => '天峻县',
                'status' => 1,
            ),
            431 => 
            array (
                'id' => 1932,
                'city_id' => 247,
                'province_id' => 21,
                'name' => '同仁县',
                'status' => 1,
            ),
            432 => 
            array (
                'id' => 1933,
                'city_id' => 247,
                'province_id' => 21,
                'name' => '尖扎县',
                'status' => 1,
            ),
            433 => 
            array (
                'id' => 1934,
                'city_id' => 247,
                'province_id' => 21,
                'name' => '泽库县',
                'status' => 1,
            ),
            434 => 
            array (
                'id' => 1935,
                'city_id' => 247,
                'province_id' => 21,
                'name' => '河南蒙古族自治县',
                'status' => 1,
            ),
            435 => 
            array (
                'id' => 1936,
                'city_id' => 248,
                'province_id' => 21,
                'name' => '玉树县',
                'status' => 1,
            ),
            436 => 
            array (
                'id' => 1937,
                'city_id' => 248,
                'province_id' => 21,
                'name' => '杂多县',
                'status' => 1,
            ),
            437 => 
            array (
                'id' => 1938,
                'city_id' => 248,
                'province_id' => 21,
                'name' => '称多县',
                'status' => 1,
            ),
            438 => 
            array (
                'id' => 1939,
                'city_id' => 248,
                'province_id' => 21,
                'name' => '治多县',
                'status' => 1,
            ),
            439 => 
            array (
                'id' => 1940,
                'city_id' => 248,
                'province_id' => 21,
                'name' => '囊谦县',
                'status' => 1,
            ),
            440 => 
            array (
                'id' => 1941,
                'city_id' => 248,
                'province_id' => 21,
                'name' => '曲麻莱县',
                'status' => 1,
            ),
            441 => 
            array (
                'id' => 1942,
                'city_id' => 249,
                'province_id' => 22,
                'name' => '市中区',
                'status' => 1,
            ),
            442 => 
            array (
                'id' => 1943,
                'city_id' => 249,
                'province_id' => 22,
                'name' => '历下区',
                'status' => 1,
            ),
            443 => 
            array (
                'id' => 1944,
                'city_id' => 249,
                'province_id' => 22,
                'name' => '天桥区',
                'status' => 1,
            ),
            444 => 
            array (
                'id' => 1945,
                'city_id' => 249,
                'province_id' => 22,
                'name' => '槐荫区',
                'status' => 1,
            ),
            445 => 
            array (
                'id' => 1946,
                'city_id' => 249,
                'province_id' => 22,
                'name' => '历城区',
                'status' => 1,
            ),
            446 => 
            array (
                'id' => 1947,
                'city_id' => 249,
                'province_id' => 22,
                'name' => '长清区',
                'status' => 1,
            ),
            447 => 
            array (
                'id' => 1948,
                'city_id' => 249,
                'province_id' => 22,
                'name' => '章丘市',
                'status' => 1,
            ),
            448 => 
            array (
                'id' => 1949,
                'city_id' => 249,
                'province_id' => 22,
                'name' => '平阴县',
                'status' => 1,
            ),
            449 => 
            array (
                'id' => 1950,
                'city_id' => 249,
                'province_id' => 22,
                'name' => '济阳县',
                'status' => 1,
            ),
            450 => 
            array (
                'id' => 1951,
                'city_id' => 249,
                'province_id' => 22,
                'name' => '商河县',
                'status' => 1,
            ),
            451 => 
            array (
                'id' => 1952,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '市南区',
                'status' => 1,
            ),
            452 => 
            array (
                'id' => 1953,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '市北区',
                'status' => 1,
            ),
            453 => 
            array (
                'id' => 1954,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '城阳区',
                'status' => 1,
            ),
            454 => 
            array (
                'id' => 1955,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '四方区',
                'status' => 1,
            ),
            455 => 
            array (
                'id' => 1956,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '李沧区',
                'status' => 1,
            ),
            456 => 
            array (
                'id' => 1957,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '黄岛区',
                'status' => 1,
            ),
            457 => 
            array (
                'id' => 1958,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '崂山区',
                'status' => 1,
            ),
            458 => 
            array (
                'id' => 1959,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '胶州市',
                'status' => 1,
            ),
            459 => 
            array (
                'id' => 1960,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '即墨市',
                'status' => 1,
            ),
            460 => 
            array (
                'id' => 1961,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '平度市',
                'status' => 1,
            ),
            461 => 
            array (
                'id' => 1962,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '胶南市',
                'status' => 1,
            ),
            462 => 
            array (
                'id' => 1963,
                'city_id' => 250,
                'province_id' => 22,
                'name' => '莱西市',
                'status' => 1,
            ),
            463 => 
            array (
                'id' => 1964,
                'city_id' => 251,
                'province_id' => 22,
                'name' => '滨城区',
                'status' => 1,
            ),
            464 => 
            array (
                'id' => 1965,
                'city_id' => 251,
                'province_id' => 22,
                'name' => '惠民县',
                'status' => 1,
            ),
            465 => 
            array (
                'id' => 1966,
                'city_id' => 251,
                'province_id' => 22,
                'name' => '阳信县',
                'status' => 1,
            ),
            466 => 
            array (
                'id' => 1967,
                'city_id' => 251,
                'province_id' => 22,
                'name' => '无棣县',
                'status' => 1,
            ),
            467 => 
            array (
                'id' => 1968,
                'city_id' => 251,
                'province_id' => 22,
                'name' => '沾化县',
                'status' => 1,
            ),
            468 => 
            array (
                'id' => 1969,
                'city_id' => 251,
                'province_id' => 22,
                'name' => '博兴县',
                'status' => 1,
            ),
            469 => 
            array (
                'id' => 1970,
                'city_id' => 251,
                'province_id' => 22,
                'name' => '邹平县',
                'status' => 1,
            ),
            470 => 
            array (
                'id' => 1971,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '德城区',
                'status' => 1,
            ),
            471 => 
            array (
                'id' => 1972,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '陵县',
                'status' => 1,
            ),
            472 => 
            array (
                'id' => 1973,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '乐陵市',
                'status' => 1,
            ),
            473 => 
            array (
                'id' => 1974,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '禹城市',
                'status' => 1,
            ),
            474 => 
            array (
                'id' => 1975,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '宁津县',
                'status' => 1,
            ),
            475 => 
            array (
                'id' => 1976,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '庆云县',
                'status' => 1,
            ),
            476 => 
            array (
                'id' => 1977,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '临邑县',
                'status' => 1,
            ),
            477 => 
            array (
                'id' => 1978,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '齐河县',
                'status' => 1,
            ),
            478 => 
            array (
                'id' => 1979,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '平原县',
                'status' => 1,
            ),
            479 => 
            array (
                'id' => 1980,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '夏津县',
                'status' => 1,
            ),
            480 => 
            array (
                'id' => 1981,
                'city_id' => 252,
                'province_id' => 22,
                'name' => '武城县',
                'status' => 1,
            ),
            481 => 
            array (
                'id' => 1982,
                'city_id' => 253,
                'province_id' => 22,
                'name' => '东营区',
                'status' => 1,
            ),
            482 => 
            array (
                'id' => 1983,
                'city_id' => 253,
                'province_id' => 22,
                'name' => '河口区',
                'status' => 1,
            ),
            483 => 
            array (
                'id' => 1984,
                'city_id' => 253,
                'province_id' => 22,
                'name' => '垦利县',
                'status' => 1,
            ),
            484 => 
            array (
                'id' => 1985,
                'city_id' => 253,
                'province_id' => 22,
                'name' => '利津县',
                'status' => 1,
            ),
            485 => 
            array (
                'id' => 1986,
                'city_id' => 253,
                'province_id' => 22,
                'name' => '广饶县',
                'status' => 1,
            ),
            486 => 
            array (
                'id' => 1987,
                'city_id' => 254,
                'province_id' => 22,
                'name' => '牡丹区',
                'status' => 1,
            ),
            487 => 
            array (
                'id' => 1988,
                'city_id' => 254,
                'province_id' => 22,
                'name' => '曹县',
                'status' => 1,
            ),
            488 => 
            array (
                'id' => 1989,
                'city_id' => 254,
                'province_id' => 22,
                'name' => '单县',
                'status' => 1,
            ),
            489 => 
            array (
                'id' => 1990,
                'city_id' => 254,
                'province_id' => 22,
                'name' => '成武县',
                'status' => 1,
            ),
            490 => 
            array (
                'id' => 1991,
                'city_id' => 254,
                'province_id' => 22,
                'name' => '巨野县',
                'status' => 1,
            ),
            491 => 
            array (
                'id' => 1992,
                'city_id' => 254,
                'province_id' => 22,
                'name' => '郓城县',
                'status' => 1,
            ),
            492 => 
            array (
                'id' => 1993,
                'city_id' => 254,
                'province_id' => 22,
                'name' => '鄄城县',
                'status' => 1,
            ),
            493 => 
            array (
                'id' => 1994,
                'city_id' => 254,
                'province_id' => 22,
                'name' => '定陶县',
                'status' => 1,
            ),
            494 => 
            array (
                'id' => 1995,
                'city_id' => 254,
                'province_id' => 22,
                'name' => '东明县',
                'status' => 1,
            ),
            495 => 
            array (
                'id' => 1996,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '市中区',
                'status' => 1,
            ),
            496 => 
            array (
                'id' => 1997,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '任城区',
                'status' => 1,
            ),
            497 => 
            array (
                'id' => 1998,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '曲阜市',
                'status' => 1,
            ),
            498 => 
            array (
                'id' => 1999,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '兖州市',
                'status' => 1,
            ),
            499 => 
            array (
                'id' => 2000,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '邹城市',
                'status' => 1,
            ),
        ));
        \DB::table('geo_districts')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '微山县',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 2002,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '鱼台县',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 2003,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '金乡县',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 2004,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '嘉祥县',
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 2005,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '汶上县',
                'status' => 1,
            ),
            5 => 
            array (
                'id' => 2006,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '泗水县',
                'status' => 1,
            ),
            6 => 
            array (
                'id' => 2007,
                'city_id' => 255,
                'province_id' => 22,
                'name' => '梁山县',
                'status' => 1,
            ),
            7 => 
            array (
                'id' => 2008,
                'city_id' => 256,
                'province_id' => 22,
                'name' => '莱城区',
                'status' => 1,
            ),
            8 => 
            array (
                'id' => 2009,
                'city_id' => 256,
                'province_id' => 22,
                'name' => '钢城区',
                'status' => 1,
            ),
            9 => 
            array (
                'id' => 2010,
                'city_id' => 257,
                'province_id' => 22,
                'name' => '东昌府区',
                'status' => 1,
            ),
            10 => 
            array (
                'id' => 2011,
                'city_id' => 257,
                'province_id' => 22,
                'name' => '临清市',
                'status' => 1,
            ),
            11 => 
            array (
                'id' => 2012,
                'city_id' => 257,
                'province_id' => 22,
                'name' => '阳谷县',
                'status' => 1,
            ),
            12 => 
            array (
                'id' => 2013,
                'city_id' => 257,
                'province_id' => 22,
                'name' => '莘县',
                'status' => 1,
            ),
            13 => 
            array (
                'id' => 2014,
                'city_id' => 257,
                'province_id' => 22,
                'name' => '茌平县',
                'status' => 1,
            ),
            14 => 
            array (
                'id' => 2015,
                'city_id' => 257,
                'province_id' => 22,
                'name' => '东阿县',
                'status' => 1,
            ),
            15 => 
            array (
                'id' => 2016,
                'city_id' => 257,
                'province_id' => 22,
                'name' => '冠县',
                'status' => 1,
            ),
            16 => 
            array (
                'id' => 2017,
                'city_id' => 257,
                'province_id' => 22,
                'name' => '高唐县',
                'status' => 1,
            ),
            17 => 
            array (
                'id' => 2018,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '兰山区',
                'status' => 1,
            ),
            18 => 
            array (
                'id' => 2019,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '罗庄区',
                'status' => 1,
            ),
            19 => 
            array (
                'id' => 2020,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '河东区',
                'status' => 1,
            ),
            20 => 
            array (
                'id' => 2021,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '沂南县',
                'status' => 1,
            ),
            21 => 
            array (
                'id' => 2022,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '郯城县',
                'status' => 1,
            ),
            22 => 
            array (
                'id' => 2023,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '沂水县',
                'status' => 1,
            ),
            23 => 
            array (
                'id' => 2024,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '苍山县',
                'status' => 1,
            ),
            24 => 
            array (
                'id' => 2025,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '费县',
                'status' => 1,
            ),
            25 => 
            array (
                'id' => 2026,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '平邑县',
                'status' => 1,
            ),
            26 => 
            array (
                'id' => 2027,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '莒南县',
                'status' => 1,
            ),
            27 => 
            array (
                'id' => 2028,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '蒙阴县',
                'status' => 1,
            ),
            28 => 
            array (
                'id' => 2029,
                'city_id' => 258,
                'province_id' => 22,
                'name' => '临沭县',
                'status' => 1,
            ),
            29 => 
            array (
                'id' => 2030,
                'city_id' => 259,
                'province_id' => 22,
                'name' => '东港区',
                'status' => 1,
            ),
            30 => 
            array (
                'id' => 2031,
                'city_id' => 259,
                'province_id' => 22,
                'name' => '岚山区',
                'status' => 1,
            ),
            31 => 
            array (
                'id' => 2032,
                'city_id' => 259,
                'province_id' => 22,
                'name' => '五莲县',
                'status' => 1,
            ),
            32 => 
            array (
                'id' => 2033,
                'city_id' => 259,
                'province_id' => 22,
                'name' => '莒县',
                'status' => 1,
            ),
            33 => 
            array (
                'id' => 2034,
                'city_id' => 260,
                'province_id' => 22,
                'name' => '泰山区',
                'status' => 1,
            ),
            34 => 
            array (
                'id' => 2035,
                'city_id' => 260,
                'province_id' => 22,
                'name' => '岱岳区',
                'status' => 1,
            ),
            35 => 
            array (
                'id' => 2036,
                'city_id' => 260,
                'province_id' => 22,
                'name' => '新泰市',
                'status' => 1,
            ),
            36 => 
            array (
                'id' => 2037,
                'city_id' => 260,
                'province_id' => 22,
                'name' => '肥城市',
                'status' => 1,
            ),
            37 => 
            array (
                'id' => 2038,
                'city_id' => 260,
                'province_id' => 22,
                'name' => '宁阳县',
                'status' => 1,
            ),
            38 => 
            array (
                'id' => 2039,
                'city_id' => 260,
                'province_id' => 22,
                'name' => '东平县',
                'status' => 1,
            ),
            39 => 
            array (
                'id' => 2040,
                'city_id' => 261,
                'province_id' => 22,
                'name' => '荣成市',
                'status' => 1,
            ),
            40 => 
            array (
                'id' => 2041,
                'city_id' => 261,
                'province_id' => 22,
                'name' => '乳山市',
                'status' => 1,
            ),
            41 => 
            array (
                'id' => 2042,
                'city_id' => 261,
                'province_id' => 22,
                'name' => '环翠区',
                'status' => 1,
            ),
            42 => 
            array (
                'id' => 2043,
                'city_id' => 261,
                'province_id' => 22,
                'name' => '文登市',
                'status' => 1,
            ),
            43 => 
            array (
                'id' => 2044,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '潍城区',
                'status' => 1,
            ),
            44 => 
            array (
                'id' => 2045,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '寒亭区',
                'status' => 1,
            ),
            45 => 
            array (
                'id' => 2046,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '坊子区',
                'status' => 1,
            ),
            46 => 
            array (
                'id' => 2047,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '奎文区',
                'status' => 1,
            ),
            47 => 
            array (
                'id' => 2048,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '青州市',
                'status' => 1,
            ),
            48 => 
            array (
                'id' => 2049,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '诸城市',
                'status' => 1,
            ),
            49 => 
            array (
                'id' => 2050,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '寿光市',
                'status' => 1,
            ),
            50 => 
            array (
                'id' => 2051,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '安丘市',
                'status' => 1,
            ),
            51 => 
            array (
                'id' => 2052,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '高密市',
                'status' => 1,
            ),
            52 => 
            array (
                'id' => 2053,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '昌邑市',
                'status' => 1,
            ),
            53 => 
            array (
                'id' => 2054,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '临朐县',
                'status' => 1,
            ),
            54 => 
            array (
                'id' => 2055,
                'city_id' => 262,
                'province_id' => 22,
                'name' => '昌乐县',
                'status' => 1,
            ),
            55 => 
            array (
                'id' => 2056,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '芝罘区',
                'status' => 1,
            ),
            56 => 
            array (
                'id' => 2057,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '福山区',
                'status' => 1,
            ),
            57 => 
            array (
                'id' => 2058,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '牟平区',
                'status' => 1,
            ),
            58 => 
            array (
                'id' => 2059,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '莱山区',
                'status' => 1,
            ),
            59 => 
            array (
                'id' => 2060,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '开发区',
                'status' => 1,
            ),
            60 => 
            array (
                'id' => 2061,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '龙口市',
                'status' => 1,
            ),
            61 => 
            array (
                'id' => 2062,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '莱阳市',
                'status' => 1,
            ),
            62 => 
            array (
                'id' => 2063,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '莱州市',
                'status' => 1,
            ),
            63 => 
            array (
                'id' => 2064,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '蓬莱市',
                'status' => 1,
            ),
            64 => 
            array (
                'id' => 2065,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '招远市',
                'status' => 1,
            ),
            65 => 
            array (
                'id' => 2066,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '栖霞市',
                'status' => 1,
            ),
            66 => 
            array (
                'id' => 2067,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '海阳市',
                'status' => 1,
            ),
            67 => 
            array (
                'id' => 2068,
                'city_id' => 263,
                'province_id' => 22,
                'name' => '长岛县',
                'status' => 1,
            ),
            68 => 
            array (
                'id' => 2069,
                'city_id' => 264,
                'province_id' => 22,
                'name' => '市中区',
                'status' => 1,
            ),
            69 => 
            array (
                'id' => 2070,
                'city_id' => 264,
                'province_id' => 22,
                'name' => '山亭区',
                'status' => 1,
            ),
            70 => 
            array (
                'id' => 2071,
                'city_id' => 264,
                'province_id' => 22,
                'name' => '峄城区',
                'status' => 1,
            ),
            71 => 
            array (
                'id' => 2072,
                'city_id' => 264,
                'province_id' => 22,
                'name' => '台儿庄区',
                'status' => 1,
            ),
            72 => 
            array (
                'id' => 2073,
                'city_id' => 264,
                'province_id' => 22,
                'name' => '薛城区',
                'status' => 1,
            ),
            73 => 
            array (
                'id' => 2074,
                'city_id' => 264,
                'province_id' => 22,
                'name' => '滕州市',
                'status' => 1,
            ),
            74 => 
            array (
                'id' => 2075,
                'city_id' => 265,
                'province_id' => 22,
                'name' => '张店区',
                'status' => 1,
            ),
            75 => 
            array (
                'id' => 2076,
                'city_id' => 265,
                'province_id' => 22,
                'name' => '临淄区',
                'status' => 1,
            ),
            76 => 
            array (
                'id' => 2077,
                'city_id' => 265,
                'province_id' => 22,
                'name' => '淄川区',
                'status' => 1,
            ),
            77 => 
            array (
                'id' => 2078,
                'city_id' => 265,
                'province_id' => 22,
                'name' => '博山区',
                'status' => 1,
            ),
            78 => 
            array (
                'id' => 2079,
                'city_id' => 265,
                'province_id' => 22,
                'name' => '周村区',
                'status' => 1,
            ),
            79 => 
            array (
                'id' => 2080,
                'city_id' => 265,
                'province_id' => 22,
                'name' => '桓台县',
                'status' => 1,
            ),
            80 => 
            array (
                'id' => 2081,
                'city_id' => 265,
                'province_id' => 22,
                'name' => '高青县',
                'status' => 1,
            ),
            81 => 
            array (
                'id' => 2082,
                'city_id' => 265,
                'province_id' => 22,
                'name' => '沂源县',
                'status' => 1,
            ),
            82 => 
            array (
                'id' => 2083,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '杏花岭区',
                'status' => 1,
            ),
            83 => 
            array (
                'id' => 2084,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '小店区',
                'status' => 1,
            ),
            84 => 
            array (
                'id' => 2085,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '迎泽区',
                'status' => 1,
            ),
            85 => 
            array (
                'id' => 2086,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '尖草坪区',
                'status' => 1,
            ),
            86 => 
            array (
                'id' => 2087,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '万柏林区',
                'status' => 1,
            ),
            87 => 
            array (
                'id' => 2088,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '晋源区',
                'status' => 1,
            ),
            88 => 
            array (
                'id' => 2089,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '高新开发区',
                'status' => 1,
            ),
            89 => 
            array (
                'id' => 2090,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '民营经济开发区',
                'status' => 1,
            ),
            90 => 
            array (
                'id' => 2091,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '经济技术开发区',
                'status' => 1,
            ),
            91 => 
            array (
                'id' => 2092,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '清徐县',
                'status' => 1,
            ),
            92 => 
            array (
                'id' => 2093,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '阳曲县',
                'status' => 1,
            ),
            93 => 
            array (
                'id' => 2094,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '娄烦县',
                'status' => 1,
            ),
            94 => 
            array (
                'id' => 2095,
                'city_id' => 266,
                'province_id' => 23,
                'name' => '古交市',
                'status' => 1,
            ),
            95 => 
            array (
                'id' => 2096,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '城区',
                'status' => 1,
            ),
            96 => 
            array (
                'id' => 2097,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '郊区',
                'status' => 1,
            ),
            97 => 
            array (
                'id' => 2098,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '沁县',
                'status' => 1,
            ),
            98 => 
            array (
                'id' => 2099,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '潞城市',
                'status' => 1,
            ),
            99 => 
            array (
                'id' => 2100,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '长治县',
                'status' => 1,
            ),
            100 => 
            array (
                'id' => 2101,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '襄垣县',
                'status' => 1,
            ),
            101 => 
            array (
                'id' => 2102,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '屯留县',
                'status' => 1,
            ),
            102 => 
            array (
                'id' => 2103,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '平顺县',
                'status' => 1,
            ),
            103 => 
            array (
                'id' => 2104,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '黎城县',
                'status' => 1,
            ),
            104 => 
            array (
                'id' => 2105,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '壶关县',
                'status' => 1,
            ),
            105 => 
            array (
                'id' => 2106,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '长子县',
                'status' => 1,
            ),
            106 => 
            array (
                'id' => 2107,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '武乡县',
                'status' => 1,
            ),
            107 => 
            array (
                'id' => 2108,
                'city_id' => 267,
                'province_id' => 23,
                'name' => '沁源县',
                'status' => 1,
            ),
            108 => 
            array (
                'id' => 2109,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '城区',
                'status' => 1,
            ),
            109 => 
            array (
                'id' => 2110,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '矿区',
                'status' => 1,
            ),
            110 => 
            array (
                'id' => 2111,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '南郊区',
                'status' => 1,
            ),
            111 => 
            array (
                'id' => 2112,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '新荣区',
                'status' => 1,
            ),
            112 => 
            array (
                'id' => 2113,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '阳高县',
                'status' => 1,
            ),
            113 => 
            array (
                'id' => 2114,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '天镇县',
                'status' => 1,
            ),
            114 => 
            array (
                'id' => 2115,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '广灵县',
                'status' => 1,
            ),
            115 => 
            array (
                'id' => 2116,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '灵丘县',
                'status' => 1,
            ),
            116 => 
            array (
                'id' => 2117,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '浑源县',
                'status' => 1,
            ),
            117 => 
            array (
                'id' => 2118,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '左云县',
                'status' => 1,
            ),
            118 => 
            array (
                'id' => 2119,
                'city_id' => 268,
                'province_id' => 23,
                'name' => '大同县',
                'status' => 1,
            ),
            119 => 
            array (
                'id' => 2120,
                'city_id' => 269,
                'province_id' => 23,
                'name' => '城区',
                'status' => 1,
            ),
            120 => 
            array (
                'id' => 2121,
                'city_id' => 269,
                'province_id' => 23,
                'name' => '高平市',
                'status' => 1,
            ),
            121 => 
            array (
                'id' => 2122,
                'city_id' => 269,
                'province_id' => 23,
                'name' => '沁水县',
                'status' => 1,
            ),
            122 => 
            array (
                'id' => 2123,
                'city_id' => 269,
                'province_id' => 23,
                'name' => '阳城县',
                'status' => 1,
            ),
            123 => 
            array (
                'id' => 2124,
                'city_id' => 269,
                'province_id' => 23,
                'name' => '陵川县',
                'status' => 1,
            ),
            124 => 
            array (
                'id' => 2125,
                'city_id' => 269,
                'province_id' => 23,
                'name' => '泽州县',
                'status' => 1,
            ),
            125 => 
            array (
                'id' => 2126,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '榆次区',
                'status' => 1,
            ),
            126 => 
            array (
                'id' => 2127,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '介休市',
                'status' => 1,
            ),
            127 => 
            array (
                'id' => 2128,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '榆社县',
                'status' => 1,
            ),
            128 => 
            array (
                'id' => 2129,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '左权县',
                'status' => 1,
            ),
            129 => 
            array (
                'id' => 2130,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '和顺县',
                'status' => 1,
            ),
            130 => 
            array (
                'id' => 2131,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '昔阳县',
                'status' => 1,
            ),
            131 => 
            array (
                'id' => 2132,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '寿阳县',
                'status' => 1,
            ),
            132 => 
            array (
                'id' => 2133,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '太谷县',
                'status' => 1,
            ),
            133 => 
            array (
                'id' => 2134,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '祁县',
                'status' => 1,
            ),
            134 => 
            array (
                'id' => 2135,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '平遥县',
                'status' => 1,
            ),
            135 => 
            array (
                'id' => 2136,
                'city_id' => 270,
                'province_id' => 23,
                'name' => '灵石县',
                'status' => 1,
            ),
            136 => 
            array (
                'id' => 2137,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '尧都区',
                'status' => 1,
            ),
            137 => 
            array (
                'id' => 2138,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '侯马市',
                'status' => 1,
            ),
            138 => 
            array (
                'id' => 2139,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '霍州市',
                'status' => 1,
            ),
            139 => 
            array (
                'id' => 2140,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '曲沃县',
                'status' => 1,
            ),
            140 => 
            array (
                'id' => 2141,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '翼城县',
                'status' => 1,
            ),
            141 => 
            array (
                'id' => 2142,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '襄汾县',
                'status' => 1,
            ),
            142 => 
            array (
                'id' => 2143,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '洪洞县',
                'status' => 1,
            ),
            143 => 
            array (
                'id' => 2144,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '吉县',
                'status' => 1,
            ),
            144 => 
            array (
                'id' => 2145,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '安泽县',
                'status' => 1,
            ),
            145 => 
            array (
                'id' => 2146,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '浮山县',
                'status' => 1,
            ),
            146 => 
            array (
                'id' => 2147,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '古县',
                'status' => 1,
            ),
            147 => 
            array (
                'id' => 2148,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '乡宁县',
                'status' => 1,
            ),
            148 => 
            array (
                'id' => 2149,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '大宁县',
                'status' => 1,
            ),
            149 => 
            array (
                'id' => 2150,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '隰县',
                'status' => 1,
            ),
            150 => 
            array (
                'id' => 2151,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '永和县',
                'status' => 1,
            ),
            151 => 
            array (
                'id' => 2152,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '蒲县',
                'status' => 1,
            ),
            152 => 
            array (
                'id' => 2153,
                'city_id' => 271,
                'province_id' => 23,
                'name' => '汾西县',
                'status' => 1,
            ),
            153 => 
            array (
                'id' => 2154,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '离石市',
                'status' => 1,
            ),
            154 => 
            array (
                'id' => 2155,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '离石区',
                'status' => 1,
            ),
            155 => 
            array (
                'id' => 2156,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '孝义市',
                'status' => 1,
            ),
            156 => 
            array (
                'id' => 2157,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '汾阳市',
                'status' => 1,
            ),
            157 => 
            array (
                'id' => 2158,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '文水县',
                'status' => 1,
            ),
            158 => 
            array (
                'id' => 2159,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '交城县',
                'status' => 1,
            ),
            159 => 
            array (
                'id' => 2160,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '兴县',
                'status' => 1,
            ),
            160 => 
            array (
                'id' => 2161,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '临县',
                'status' => 1,
            ),
            161 => 
            array (
                'id' => 2162,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '柳林县',
                'status' => 1,
            ),
            162 => 
            array (
                'id' => 2163,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '石楼县',
                'status' => 1,
            ),
            163 => 
            array (
                'id' => 2164,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '岚县',
                'status' => 1,
            ),
            164 => 
            array (
                'id' => 2165,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '方山县',
                'status' => 1,
            ),
            165 => 
            array (
                'id' => 2166,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '中阳县',
                'status' => 1,
            ),
            166 => 
            array (
                'id' => 2167,
                'city_id' => 272,
                'province_id' => 23,
                'name' => '交口县',
                'status' => 1,
            ),
            167 => 
            array (
                'id' => 2168,
                'city_id' => 273,
                'province_id' => 23,
                'name' => '朔城区',
                'status' => 1,
            ),
            168 => 
            array (
                'id' => 2169,
                'city_id' => 273,
                'province_id' => 23,
                'name' => '平鲁区',
                'status' => 1,
            ),
            169 => 
            array (
                'id' => 2170,
                'city_id' => 273,
                'province_id' => 23,
                'name' => '山阴县',
                'status' => 1,
            ),
            170 => 
            array (
                'id' => 2171,
                'city_id' => 273,
                'province_id' => 23,
                'name' => '应县',
                'status' => 1,
            ),
            171 => 
            array (
                'id' => 2172,
                'city_id' => 273,
                'province_id' => 23,
                'name' => '右玉县',
                'status' => 1,
            ),
            172 => 
            array (
                'id' => 2173,
                'city_id' => 273,
                'province_id' => 23,
                'name' => '怀仁县',
                'status' => 1,
            ),
            173 => 
            array (
                'id' => 2174,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '忻府区',
                'status' => 1,
            ),
            174 => 
            array (
                'id' => 2175,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '原平市',
                'status' => 1,
            ),
            175 => 
            array (
                'id' => 2176,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '定襄县',
                'status' => 1,
            ),
            176 => 
            array (
                'id' => 2177,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '五台县',
                'status' => 1,
            ),
            177 => 
            array (
                'id' => 2178,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '代县',
                'status' => 1,
            ),
            178 => 
            array (
                'id' => 2179,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '繁峙县',
                'status' => 1,
            ),
            179 => 
            array (
                'id' => 2180,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '宁武县',
                'status' => 1,
            ),
            180 => 
            array (
                'id' => 2181,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '静乐县',
                'status' => 1,
            ),
            181 => 
            array (
                'id' => 2182,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '神池县',
                'status' => 1,
            ),
            182 => 
            array (
                'id' => 2183,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '五寨县',
                'status' => 1,
            ),
            183 => 
            array (
                'id' => 2184,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '岢岚县',
                'status' => 1,
            ),
            184 => 
            array (
                'id' => 2185,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '河曲县',
                'status' => 1,
            ),
            185 => 
            array (
                'id' => 2186,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '保德县',
                'status' => 1,
            ),
            186 => 
            array (
                'id' => 2187,
                'city_id' => 274,
                'province_id' => 23,
                'name' => '偏关县',
                'status' => 1,
            ),
            187 => 
            array (
                'id' => 2188,
                'city_id' => 275,
                'province_id' => 23,
                'name' => '城区',
                'status' => 1,
            ),
            188 => 
            array (
                'id' => 2189,
                'city_id' => 275,
                'province_id' => 23,
                'name' => '矿区',
                'status' => 1,
            ),
            189 => 
            array (
                'id' => 2190,
                'city_id' => 275,
                'province_id' => 23,
                'name' => '郊区',
                'status' => 1,
            ),
            190 => 
            array (
                'id' => 2191,
                'city_id' => 275,
                'province_id' => 23,
                'name' => '平定县',
                'status' => 1,
            ),
            191 => 
            array (
                'id' => 2192,
                'city_id' => 275,
                'province_id' => 23,
                'name' => '盂县',
                'status' => 1,
            ),
            192 => 
            array (
                'id' => 2193,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '盐湖区',
                'status' => 1,
            ),
            193 => 
            array (
                'id' => 2194,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '永济市',
                'status' => 1,
            ),
            194 => 
            array (
                'id' => 2195,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '河津市',
                'status' => 1,
            ),
            195 => 
            array (
                'id' => 2196,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '临猗县',
                'status' => 1,
            ),
            196 => 
            array (
                'id' => 2197,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '万荣县',
                'status' => 1,
            ),
            197 => 
            array (
                'id' => 2198,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '闻喜县',
                'status' => 1,
            ),
            198 => 
            array (
                'id' => 2199,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '稷山县',
                'status' => 1,
            ),
            199 => 
            array (
                'id' => 2200,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '新绛县',
                'status' => 1,
            ),
            200 => 
            array (
                'id' => 2201,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '绛县',
                'status' => 1,
            ),
            201 => 
            array (
                'id' => 2202,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '垣曲县',
                'status' => 1,
            ),
            202 => 
            array (
                'id' => 2203,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '夏县',
                'status' => 1,
            ),
            203 => 
            array (
                'id' => 2204,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '平陆县',
                'status' => 1,
            ),
            204 => 
            array (
                'id' => 2205,
                'city_id' => 276,
                'province_id' => 23,
                'name' => '芮城县',
                'status' => 1,
            ),
            205 => 
            array (
                'id' => 2206,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '莲湖区',
                'status' => 1,
            ),
            206 => 
            array (
                'id' => 2207,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '新城区',
                'status' => 1,
            ),
            207 => 
            array (
                'id' => 2208,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '碑林区',
                'status' => 1,
            ),
            208 => 
            array (
                'id' => 2209,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '雁塔区',
                'status' => 1,
            ),
            209 => 
            array (
                'id' => 2210,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '灞桥区',
                'status' => 1,
            ),
            210 => 
            array (
                'id' => 2211,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '未央区',
                'status' => 1,
            ),
            211 => 
            array (
                'id' => 2212,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '阎良区',
                'status' => 1,
            ),
            212 => 
            array (
                'id' => 2213,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '临潼区',
                'status' => 1,
            ),
            213 => 
            array (
                'id' => 2214,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '长安区',
                'status' => 1,
            ),
            214 => 
            array (
                'id' => 2215,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '蓝田县',
                'status' => 1,
            ),
            215 => 
            array (
                'id' => 2216,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '周至县',
                'status' => 1,
            ),
            216 => 
            array (
                'id' => 2217,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '户县',
                'status' => 1,
            ),
            217 => 
            array (
                'id' => 2218,
                'city_id' => 277,
                'province_id' => 24,
                'name' => '高陵县',
                'status' => 1,
            ),
            218 => 
            array (
                'id' => 2219,
                'city_id' => 278,
                'province_id' => 24,
                'name' => '汉滨区',
                'status' => 1,
            ),
            219 => 
            array (
                'id' => 2220,
                'city_id' => 278,
                'province_id' => 24,
                'name' => '汉阴县',
                'status' => 1,
            ),
            220 => 
            array (
                'id' => 2221,
                'city_id' => 278,
                'province_id' => 24,
                'name' => '石泉县',
                'status' => 1,
            ),
            221 => 
            array (
                'id' => 2222,
                'city_id' => 278,
                'province_id' => 24,
                'name' => '宁陕县',
                'status' => 1,
            ),
            222 => 
            array (
                'id' => 2223,
                'city_id' => 278,
                'province_id' => 24,
                'name' => '紫阳县',
                'status' => 1,
            ),
            223 => 
            array (
                'id' => 2224,
                'city_id' => 278,
                'province_id' => 24,
                'name' => '岚皋县',
                'status' => 1,
            ),
            224 => 
            array (
                'id' => 2225,
                'city_id' => 278,
                'province_id' => 24,
                'name' => '平利县',
                'status' => 1,
            ),
            225 => 
            array (
                'id' => 2226,
                'city_id' => 278,
                'province_id' => 24,
                'name' => '镇坪县',
                'status' => 1,
            ),
            226 => 
            array (
                'id' => 2227,
                'city_id' => 278,
                'province_id' => 24,
                'name' => '旬阳县',
                'status' => 1,
            ),
            227 => 
            array (
                'id' => 2228,
                'city_id' => 278,
                'province_id' => 24,
                'name' => '白河县',
                'status' => 1,
            ),
            228 => 
            array (
                'id' => 2229,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '陈仓区',
                'status' => 1,
            ),
            229 => 
            array (
                'id' => 2230,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '渭滨区',
                'status' => 1,
            ),
            230 => 
            array (
                'id' => 2231,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '金台区',
                'status' => 1,
            ),
            231 => 
            array (
                'id' => 2232,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '凤翔县',
                'status' => 1,
            ),
            232 => 
            array (
                'id' => 2233,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '岐山县',
                'status' => 1,
            ),
            233 => 
            array (
                'id' => 2234,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '扶风县',
                'status' => 1,
            ),
            234 => 
            array (
                'id' => 2235,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '眉县',
                'status' => 1,
            ),
            235 => 
            array (
                'id' => 2236,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '陇县',
                'status' => 1,
            ),
            236 => 
            array (
                'id' => 2237,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '千阳县',
                'status' => 1,
            ),
            237 => 
            array (
                'id' => 2238,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '麟游县',
                'status' => 1,
            ),
            238 => 
            array (
                'id' => 2239,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '凤县',
                'status' => 1,
            ),
            239 => 
            array (
                'id' => 2240,
                'city_id' => 279,
                'province_id' => 24,
                'name' => '太白县',
                'status' => 1,
            ),
            240 => 
            array (
                'id' => 2241,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '汉台区',
                'status' => 1,
            ),
            241 => 
            array (
                'id' => 2242,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '南郑县',
                'status' => 1,
            ),
            242 => 
            array (
                'id' => 2243,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '城固县',
                'status' => 1,
            ),
            243 => 
            array (
                'id' => 2244,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '洋县',
                'status' => 1,
            ),
            244 => 
            array (
                'id' => 2245,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '西乡县',
                'status' => 1,
            ),
            245 => 
            array (
                'id' => 2246,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '勉县',
                'status' => 1,
            ),
            246 => 
            array (
                'id' => 2247,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '宁强县',
                'status' => 1,
            ),
            247 => 
            array (
                'id' => 2248,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '略阳县',
                'status' => 1,
            ),
            248 => 
            array (
                'id' => 2249,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '镇巴县',
                'status' => 1,
            ),
            249 => 
            array (
                'id' => 2250,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '留坝县',
                'status' => 1,
            ),
            250 => 
            array (
                'id' => 2251,
                'city_id' => 280,
                'province_id' => 24,
                'name' => '佛坪县',
                'status' => 1,
            ),
            251 => 
            array (
                'id' => 2252,
                'city_id' => 281,
                'province_id' => 24,
                'name' => '商州区',
                'status' => 1,
            ),
            252 => 
            array (
                'id' => 2253,
                'city_id' => 281,
                'province_id' => 24,
                'name' => '洛南县',
                'status' => 1,
            ),
            253 => 
            array (
                'id' => 2254,
                'city_id' => 281,
                'province_id' => 24,
                'name' => '丹凤县',
                'status' => 1,
            ),
            254 => 
            array (
                'id' => 2255,
                'city_id' => 281,
                'province_id' => 24,
                'name' => '商南县',
                'status' => 1,
            ),
            255 => 
            array (
                'id' => 2256,
                'city_id' => 281,
                'province_id' => 24,
                'name' => '山阳县',
                'status' => 1,
            ),
            256 => 
            array (
                'id' => 2257,
                'city_id' => 281,
                'province_id' => 24,
                'name' => '镇安县',
                'status' => 1,
            ),
            257 => 
            array (
                'id' => 2258,
                'city_id' => 281,
                'province_id' => 24,
                'name' => '柞水县',
                'status' => 1,
            ),
            258 => 
            array (
                'id' => 2259,
                'city_id' => 282,
                'province_id' => 24,
                'name' => '耀州区',
                'status' => 1,
            ),
            259 => 
            array (
                'id' => 2260,
                'city_id' => 282,
                'province_id' => 24,
                'name' => '王益区',
                'status' => 1,
            ),
            260 => 
            array (
                'id' => 2261,
                'city_id' => 282,
                'province_id' => 24,
                'name' => '印台区',
                'status' => 1,
            ),
            261 => 
            array (
                'id' => 2262,
                'city_id' => 282,
                'province_id' => 24,
                'name' => '宜君县',
                'status' => 1,
            ),
            262 => 
            array (
                'id' => 2263,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '临渭区',
                'status' => 1,
            ),
            263 => 
            array (
                'id' => 2264,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '韩城市',
                'status' => 1,
            ),
            264 => 
            array (
                'id' => 2265,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '华阴市',
                'status' => 1,
            ),
            265 => 
            array (
                'id' => 2266,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '华县',
                'status' => 1,
            ),
            266 => 
            array (
                'id' => 2267,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '潼关县',
                'status' => 1,
            ),
            267 => 
            array (
                'id' => 2268,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '大荔县',
                'status' => 1,
            ),
            268 => 
            array (
                'id' => 2269,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '合阳县',
                'status' => 1,
            ),
            269 => 
            array (
                'id' => 2270,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '澄城县',
                'status' => 1,
            ),
            270 => 
            array (
                'id' => 2271,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '蒲城县',
                'status' => 1,
            ),
            271 => 
            array (
                'id' => 2272,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '白水县',
                'status' => 1,
            ),
            272 => 
            array (
                'id' => 2273,
                'city_id' => 283,
                'province_id' => 24,
                'name' => '富平县',
                'status' => 1,
            ),
            273 => 
            array (
                'id' => 2274,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '秦都区',
                'status' => 1,
            ),
            274 => 
            array (
                'id' => 2275,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '渭城区',
                'status' => 1,
            ),
            275 => 
            array (
                'id' => 2276,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '杨陵区',
                'status' => 1,
            ),
            276 => 
            array (
                'id' => 2277,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '兴平市',
                'status' => 1,
            ),
            277 => 
            array (
                'id' => 2278,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '三原县',
                'status' => 1,
            ),
            278 => 
            array (
                'id' => 2279,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '泾阳县',
                'status' => 1,
            ),
            279 => 
            array (
                'id' => 2280,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '乾县',
                'status' => 1,
            ),
            280 => 
            array (
                'id' => 2281,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '礼泉县',
                'status' => 1,
            ),
            281 => 
            array (
                'id' => 2282,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '永寿县',
                'status' => 1,
            ),
            282 => 
            array (
                'id' => 2283,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '彬县',
                'status' => 1,
            ),
            283 => 
            array (
                'id' => 2284,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '长武县',
                'status' => 1,
            ),
            284 => 
            array (
                'id' => 2285,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '旬邑县',
                'status' => 1,
            ),
            285 => 
            array (
                'id' => 2286,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '淳化县',
                'status' => 1,
            ),
            286 => 
            array (
                'id' => 2287,
                'city_id' => 284,
                'province_id' => 24,
                'name' => '武功县',
                'status' => 1,
            ),
            287 => 
            array (
                'id' => 2288,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '吴起县',
                'status' => 1,
            ),
            288 => 
            array (
                'id' => 2289,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '宝塔区',
                'status' => 1,
            ),
            289 => 
            array (
                'id' => 2290,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '延长县',
                'status' => 1,
            ),
            290 => 
            array (
                'id' => 2291,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '延川县',
                'status' => 1,
            ),
            291 => 
            array (
                'id' => 2292,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '子长县',
                'status' => 1,
            ),
            292 => 
            array (
                'id' => 2293,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '安塞县',
                'status' => 1,
            ),
            293 => 
            array (
                'id' => 2294,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '志丹县',
                'status' => 1,
            ),
            294 => 
            array (
                'id' => 2295,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '甘泉县',
                'status' => 1,
            ),
            295 => 
            array (
                'id' => 2296,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '富县',
                'status' => 1,
            ),
            296 => 
            array (
                'id' => 2297,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '洛川县',
                'status' => 1,
            ),
            297 => 
            array (
                'id' => 2298,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '宜川县',
                'status' => 1,
            ),
            298 => 
            array (
                'id' => 2299,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '黄龙县',
                'status' => 1,
            ),
            299 => 
            array (
                'id' => 2300,
                'city_id' => 285,
                'province_id' => 24,
                'name' => '黄陵县',
                'status' => 1,
            ),
            300 => 
            array (
                'id' => 2301,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '榆阳区',
                'status' => 1,
            ),
            301 => 
            array (
                'id' => 2302,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '神木县',
                'status' => 1,
            ),
            302 => 
            array (
                'id' => 2303,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '府谷县',
                'status' => 1,
            ),
            303 => 
            array (
                'id' => 2304,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '横山县',
                'status' => 1,
            ),
            304 => 
            array (
                'id' => 2305,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '靖边县',
                'status' => 1,
            ),
            305 => 
            array (
                'id' => 2306,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '定边县',
                'status' => 1,
            ),
            306 => 
            array (
                'id' => 2307,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '绥德县',
                'status' => 1,
            ),
            307 => 
            array (
                'id' => 2308,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '米脂县',
                'status' => 1,
            ),
            308 => 
            array (
                'id' => 2309,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '佳县',
                'status' => 1,
            ),
            309 => 
            array (
                'id' => 2310,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '吴堡县',
                'status' => 1,
            ),
            310 => 
            array (
                'id' => 2311,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '清涧县',
                'status' => 1,
            ),
            311 => 
            array (
                'id' => 2312,
                'city_id' => 286,
                'province_id' => 24,
                'name' => '子洲县',
                'status' => 1,
            ),
            312 => 
            array (
                'id' => 2313,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '长宁区',
                'status' => 1,
            ),
            313 => 
            array (
                'id' => 2314,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '闸北区',
                'status' => 1,
            ),
            314 => 
            array (
                'id' => 2315,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '闵行区',
                'status' => 1,
            ),
            315 => 
            array (
                'id' => 2316,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '徐汇区',
                'status' => 1,
            ),
            316 => 
            array (
                'id' => 2317,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '浦东新区',
                'status' => 1,
            ),
            317 => 
            array (
                'id' => 2318,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '杨浦区',
                'status' => 1,
            ),
            318 => 
            array (
                'id' => 2319,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '普陀区',
                'status' => 1,
            ),
            319 => 
            array (
                'id' => 2320,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '静安区',
                'status' => 1,
            ),
            320 => 
            array (
                'id' => 2321,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '卢湾区',
                'status' => 1,
            ),
            321 => 
            array (
                'id' => 2322,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '虹口区',
                'status' => 1,
            ),
            322 => 
            array (
                'id' => 2323,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '黄浦区',
                'status' => 1,
            ),
            323 => 
            array (
                'id' => 2324,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '南汇区',
                'status' => 1,
            ),
            324 => 
            array (
                'id' => 2325,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '松江区',
                'status' => 1,
            ),
            325 => 
            array (
                'id' => 2326,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '嘉定区',
                'status' => 1,
            ),
            326 => 
            array (
                'id' => 2327,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '宝山区',
                'status' => 1,
            ),
            327 => 
            array (
                'id' => 2328,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '青浦区',
                'status' => 1,
            ),
            328 => 
            array (
                'id' => 2329,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '金山区',
                'status' => 1,
            ),
            329 => 
            array (
                'id' => 2330,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '奉贤区',
                'status' => 1,
            ),
            330 => 
            array (
                'id' => 2331,
                'city_id' => 287,
                'province_id' => 25,
                'name' => '崇明县',
                'status' => 1,
            ),
            331 => 
            array (
                'id' => 2332,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '青羊区',
                'status' => 1,
            ),
            332 => 
            array (
                'id' => 2333,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '锦江区',
                'status' => 1,
            ),
            333 => 
            array (
                'id' => 2334,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '金牛区',
                'status' => 1,
            ),
            334 => 
            array (
                'id' => 2335,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '武侯区',
                'status' => 1,
            ),
            335 => 
            array (
                'id' => 2336,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '成华区',
                'status' => 1,
            ),
            336 => 
            array (
                'id' => 2337,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '龙泉驿区',
                'status' => 1,
            ),
            337 => 
            array (
                'id' => 2338,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '青白江区',
                'status' => 1,
            ),
            338 => 
            array (
                'id' => 2339,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '新都区',
                'status' => 1,
            ),
            339 => 
            array (
                'id' => 2340,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '温江区',
                'status' => 1,
            ),
            340 => 
            array (
                'id' => 2341,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '高新区',
                'status' => 1,
            ),
            341 => 
            array (
                'id' => 2342,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '高新西区',
                'status' => 1,
            ),
            342 => 
            array (
                'id' => 2343,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '都江堰市',
                'status' => 1,
            ),
            343 => 
            array (
                'id' => 2344,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '彭州市',
                'status' => 1,
            ),
            344 => 
            array (
                'id' => 2345,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '邛崃市',
                'status' => 1,
            ),
            345 => 
            array (
                'id' => 2346,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '崇州市',
                'status' => 1,
            ),
            346 => 
            array (
                'id' => 2347,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '金堂县',
                'status' => 1,
            ),
            347 => 
            array (
                'id' => 2348,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '双流县',
                'status' => 1,
            ),
            348 => 
            array (
                'id' => 2349,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '郫县',
                'status' => 1,
            ),
            349 => 
            array (
                'id' => 2350,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '大邑县',
                'status' => 1,
            ),
            350 => 
            array (
                'id' => 2351,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '蒲江县',
                'status' => 1,
            ),
            351 => 
            array (
                'id' => 2352,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '新津县',
                'status' => 1,
            ),
            352 => 
            array (
                'id' => 2353,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '都江堰市',
                'status' => 1,
            ),
            353 => 
            array (
                'id' => 2354,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '彭州市',
                'status' => 1,
            ),
            354 => 
            array (
                'id' => 2355,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '邛崃市',
                'status' => 1,
            ),
            355 => 
            array (
                'id' => 2356,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '崇州市',
                'status' => 1,
            ),
            356 => 
            array (
                'id' => 2357,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '金堂县',
                'status' => 1,
            ),
            357 => 
            array (
                'id' => 2358,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '双流县',
                'status' => 1,
            ),
            358 => 
            array (
                'id' => 2359,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '郫县',
                'status' => 1,
            ),
            359 => 
            array (
                'id' => 2360,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '大邑县',
                'status' => 1,
            ),
            360 => 
            array (
                'id' => 2361,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '蒲江县',
                'status' => 1,
            ),
            361 => 
            array (
                'id' => 2362,
                'city_id' => 288,
                'province_id' => 26,
                'name' => '新津县',
                'status' => 1,
            ),
            362 => 
            array (
                'id' => 2363,
                'city_id' => 289,
                'province_id' => 26,
                'name' => '涪城区',
                'status' => 1,
            ),
            363 => 
            array (
                'id' => 2364,
                'city_id' => 289,
                'province_id' => 26,
                'name' => '游仙区',
                'status' => 1,
            ),
            364 => 
            array (
                'id' => 2365,
                'city_id' => 289,
                'province_id' => 26,
                'name' => '江油市',
                'status' => 1,
            ),
            365 => 
            array (
                'id' => 2366,
                'city_id' => 289,
                'province_id' => 26,
                'name' => '盐亭县',
                'status' => 1,
            ),
            366 => 
            array (
                'id' => 2367,
                'city_id' => 289,
                'province_id' => 26,
                'name' => '三台县',
                'status' => 1,
            ),
            367 => 
            array (
                'id' => 2368,
                'city_id' => 289,
                'province_id' => 26,
                'name' => '平武县',
                'status' => 1,
            ),
            368 => 
            array (
                'id' => 2369,
                'city_id' => 289,
                'province_id' => 26,
                'name' => '安县',
                'status' => 1,
            ),
            369 => 
            array (
                'id' => 2370,
                'city_id' => 289,
                'province_id' => 26,
                'name' => '梓潼县',
                'status' => 1,
            ),
            370 => 
            array (
                'id' => 2371,
                'city_id' => 289,
                'province_id' => 26,
                'name' => '北川县',
                'status' => 1,
            ),
            371 => 
            array (
                'id' => 2372,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '马尔康县',
                'status' => 1,
            ),
            372 => 
            array (
                'id' => 2373,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '汶川县',
                'status' => 1,
            ),
            373 => 
            array (
                'id' => 2374,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '理县',
                'status' => 1,
            ),
            374 => 
            array (
                'id' => 2375,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '茂县',
                'status' => 1,
            ),
            375 => 
            array (
                'id' => 2376,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '松潘县',
                'status' => 1,
            ),
            376 => 
            array (
                'id' => 2377,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '九寨沟县',
                'status' => 1,
            ),
            377 => 
            array (
                'id' => 2378,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '金川县',
                'status' => 1,
            ),
            378 => 
            array (
                'id' => 2379,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '小金县',
                'status' => 1,
            ),
            379 => 
            array (
                'id' => 2380,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '黑水县',
                'status' => 1,
            ),
            380 => 
            array (
                'id' => 2381,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '壤塘县',
                'status' => 1,
            ),
            381 => 
            array (
                'id' => 2382,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '阿坝县',
                'status' => 1,
            ),
            382 => 
            array (
                'id' => 2383,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '若尔盖县',
                'status' => 1,
            ),
            383 => 
            array (
                'id' => 2384,
                'city_id' => 290,
                'province_id' => 26,
                'name' => '红原县',
                'status' => 1,
            ),
            384 => 
            array (
                'id' => 2385,
                'city_id' => 291,
                'province_id' => 26,
                'name' => '巴州区',
                'status' => 1,
            ),
            385 => 
            array (
                'id' => 2386,
                'city_id' => 291,
                'province_id' => 26,
                'name' => '通江县',
                'status' => 1,
            ),
            386 => 
            array (
                'id' => 2387,
                'city_id' => 291,
                'province_id' => 26,
                'name' => '南江县',
                'status' => 1,
            ),
            387 => 
            array (
                'id' => 2388,
                'city_id' => 291,
                'province_id' => 26,
                'name' => '平昌县',
                'status' => 1,
            ),
            388 => 
            array (
                'id' => 2389,
                'city_id' => 292,
                'province_id' => 26,
                'name' => '通川区',
                'status' => 1,
            ),
            389 => 
            array (
                'id' => 2390,
                'city_id' => 292,
                'province_id' => 26,
                'name' => '万源市',
                'status' => 1,
            ),
            390 => 
            array (
                'id' => 2391,
                'city_id' => 292,
                'province_id' => 26,
                'name' => '达县',
                'status' => 1,
            ),
            391 => 
            array (
                'id' => 2392,
                'city_id' => 292,
                'province_id' => 26,
                'name' => '宣汉县',
                'status' => 1,
            ),
            392 => 
            array (
                'id' => 2393,
                'city_id' => 292,
                'province_id' => 26,
                'name' => '开江县',
                'status' => 1,
            ),
            393 => 
            array (
                'id' => 2394,
                'city_id' => 292,
                'province_id' => 26,
                'name' => '大竹县',
                'status' => 1,
            ),
            394 => 
            array (
                'id' => 2395,
                'city_id' => 292,
                'province_id' => 26,
                'name' => '渠县',
                'status' => 1,
            ),
            395 => 
            array (
                'id' => 2396,
                'city_id' => 293,
                'province_id' => 26,
                'name' => '旌阳区',
                'status' => 1,
            ),
            396 => 
            array (
                'id' => 2397,
                'city_id' => 293,
                'province_id' => 26,
                'name' => '广汉市',
                'status' => 1,
            ),
            397 => 
            array (
                'id' => 2398,
                'city_id' => 293,
                'province_id' => 26,
                'name' => '什邡市',
                'status' => 1,
            ),
            398 => 
            array (
                'id' => 2399,
                'city_id' => 293,
                'province_id' => 26,
                'name' => '绵竹市',
                'status' => 1,
            ),
            399 => 
            array (
                'id' => 2400,
                'city_id' => 293,
                'province_id' => 26,
                'name' => '罗江县',
                'status' => 1,
            ),
            400 => 
            array (
                'id' => 2401,
                'city_id' => 293,
                'province_id' => 26,
                'name' => '中江县',
                'status' => 1,
            ),
            401 => 
            array (
                'id' => 2402,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '康定县',
                'status' => 1,
            ),
            402 => 
            array (
                'id' => 2403,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '丹巴县',
                'status' => 1,
            ),
            403 => 
            array (
                'id' => 2404,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '泸定县',
                'status' => 1,
            ),
            404 => 
            array (
                'id' => 2405,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '炉霍县',
                'status' => 1,
            ),
            405 => 
            array (
                'id' => 2406,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '九龙县',
                'status' => 1,
            ),
            406 => 
            array (
                'id' => 2407,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '甘孜县',
                'status' => 1,
            ),
            407 => 
            array (
                'id' => 2408,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '雅江县',
                'status' => 1,
            ),
            408 => 
            array (
                'id' => 2409,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '新龙县',
                'status' => 1,
            ),
            409 => 
            array (
                'id' => 2410,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '道孚县',
                'status' => 1,
            ),
            410 => 
            array (
                'id' => 2411,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '白玉县',
                'status' => 1,
            ),
            411 => 
            array (
                'id' => 2412,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '理塘县',
                'status' => 1,
            ),
            412 => 
            array (
                'id' => 2413,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '德格县',
                'status' => 1,
            ),
            413 => 
            array (
                'id' => 2414,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '乡城县',
                'status' => 1,
            ),
            414 => 
            array (
                'id' => 2415,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '石渠县',
                'status' => 1,
            ),
            415 => 
            array (
                'id' => 2416,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '稻城县',
                'status' => 1,
            ),
            416 => 
            array (
                'id' => 2417,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '色达县',
                'status' => 1,
            ),
            417 => 
            array (
                'id' => 2418,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '巴塘县',
                'status' => 1,
            ),
            418 => 
            array (
                'id' => 2419,
                'city_id' => 294,
                'province_id' => 26,
                'name' => '得荣县',
                'status' => 1,
            ),
            419 => 
            array (
                'id' => 2420,
                'city_id' => 295,
                'province_id' => 26,
                'name' => '广安区',
                'status' => 1,
            ),
            420 => 
            array (
                'id' => 2421,
                'city_id' => 295,
                'province_id' => 26,
                'name' => '华蓥市',
                'status' => 1,
            ),
            421 => 
            array (
                'id' => 2422,
                'city_id' => 295,
                'province_id' => 26,
                'name' => '岳池县',
                'status' => 1,
            ),
            422 => 
            array (
                'id' => 2423,
                'city_id' => 295,
                'province_id' => 26,
                'name' => '武胜县',
                'status' => 1,
            ),
            423 => 
            array (
                'id' => 2424,
                'city_id' => 295,
                'province_id' => 26,
                'name' => '邻水县',
                'status' => 1,
            ),
            424 => 
            array (
                'id' => 2425,
                'city_id' => 296,
                'province_id' => 26,
                'name' => '利州区',
                'status' => 1,
            ),
            425 => 
            array (
                'id' => 2426,
                'city_id' => 296,
                'province_id' => 26,
                'name' => '元坝区',
                'status' => 1,
            ),
            426 => 
            array (
                'id' => 2427,
                'city_id' => 296,
                'province_id' => 26,
                'name' => '朝天区',
                'status' => 1,
            ),
            427 => 
            array (
                'id' => 2428,
                'city_id' => 296,
                'province_id' => 26,
                'name' => '旺苍县',
                'status' => 1,
            ),
            428 => 
            array (
                'id' => 2429,
                'city_id' => 296,
                'province_id' => 26,
                'name' => '青川县',
                'status' => 1,
            ),
            429 => 
            array (
                'id' => 2430,
                'city_id' => 296,
                'province_id' => 26,
                'name' => '剑阁县',
                'status' => 1,
            ),
            430 => 
            array (
                'id' => 2431,
                'city_id' => 296,
                'province_id' => 26,
                'name' => '苍溪县',
                'status' => 1,
            ),
            431 => 
            array (
                'id' => 2432,
                'city_id' => 297,
                'province_id' => 26,
                'name' => '峨眉山市',
                'status' => 1,
            ),
            432 => 
            array (
                'id' => 2433,
                'city_id' => 297,
                'province_id' => 26,
                'name' => '乐山市',
                'status' => 1,
            ),
            433 => 
            array (
                'id' => 2434,
                'city_id' => 297,
                'province_id' => 26,
                'name' => '犍为县',
                'status' => 1,
            ),
            434 => 
            array (
                'id' => 2435,
                'city_id' => 297,
                'province_id' => 26,
                'name' => '井研县',
                'status' => 1,
            ),
            435 => 
            array (
                'id' => 2436,
                'city_id' => 297,
                'province_id' => 26,
                'name' => '夹江县',
                'status' => 1,
            ),
            436 => 
            array (
                'id' => 2437,
                'city_id' => 297,
                'province_id' => 26,
                'name' => '沐川县',
                'status' => 1,
            ),
            437 => 
            array (
                'id' => 2438,
                'city_id' => 297,
                'province_id' => 26,
                'name' => '峨边',
                'status' => 1,
            ),
            438 => 
            array (
                'id' => 2439,
                'city_id' => 297,
                'province_id' => 26,
                'name' => '马边',
                'status' => 1,
            ),
            439 => 
            array (
                'id' => 2440,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '西昌市',
                'status' => 1,
            ),
            440 => 
            array (
                'id' => 2441,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '盐源县',
                'status' => 1,
            ),
            441 => 
            array (
                'id' => 2442,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '德昌县',
                'status' => 1,
            ),
            442 => 
            array (
                'id' => 2443,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '会理县',
                'status' => 1,
            ),
            443 => 
            array (
                'id' => 2444,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '会东县',
                'status' => 1,
            ),
            444 => 
            array (
                'id' => 2445,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '宁南县',
                'status' => 1,
            ),
            445 => 
            array (
                'id' => 2446,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '普格县',
                'status' => 1,
            ),
            446 => 
            array (
                'id' => 2447,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '布拖县',
                'status' => 1,
            ),
            447 => 
            array (
                'id' => 2448,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '金阳县',
                'status' => 1,
            ),
            448 => 
            array (
                'id' => 2449,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '昭觉县',
                'status' => 1,
            ),
            449 => 
            array (
                'id' => 2450,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '喜德县',
                'status' => 1,
            ),
            450 => 
            array (
                'id' => 2451,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '冕宁县',
                'status' => 1,
            ),
            451 => 
            array (
                'id' => 2452,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '越西县',
                'status' => 1,
            ),
            452 => 
            array (
                'id' => 2453,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '甘洛县',
                'status' => 1,
            ),
            453 => 
            array (
                'id' => 2454,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '美姑县',
                'status' => 1,
            ),
            454 => 
            array (
                'id' => 2455,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '雷波县',
                'status' => 1,
            ),
            455 => 
            array (
                'id' => 2456,
                'city_id' => 298,
                'province_id' => 26,
                'name' => '木里',
                'status' => 1,
            ),
            456 => 
            array (
                'id' => 2457,
                'city_id' => 299,
                'province_id' => 26,
                'name' => '东坡区',
                'status' => 1,
            ),
            457 => 
            array (
                'id' => 2458,
                'city_id' => 299,
                'province_id' => 26,
                'name' => '仁寿县',
                'status' => 1,
            ),
            458 => 
            array (
                'id' => 2459,
                'city_id' => 299,
                'province_id' => 26,
                'name' => '彭山县',
                'status' => 1,
            ),
            459 => 
            array (
                'id' => 2460,
                'city_id' => 299,
                'province_id' => 26,
                'name' => '洪雅县',
                'status' => 1,
            ),
            460 => 
            array (
                'id' => 2461,
                'city_id' => 299,
                'province_id' => 26,
                'name' => '丹棱县',
                'status' => 1,
            ),
            461 => 
            array (
                'id' => 2462,
                'city_id' => 299,
                'province_id' => 26,
                'name' => '青神县',
                'status' => 1,
            ),
            462 => 
            array (
                'id' => 2463,
                'city_id' => 300,
                'province_id' => 26,
                'name' => '阆中市',
                'status' => 1,
            ),
            463 => 
            array (
                'id' => 2464,
                'city_id' => 300,
                'province_id' => 26,
                'name' => '南部县',
                'status' => 1,
            ),
            464 => 
            array (
                'id' => 2465,
                'city_id' => 300,
                'province_id' => 26,
                'name' => '营山县',
                'status' => 1,
            ),
            465 => 
            array (
                'id' => 2466,
                'city_id' => 300,
                'province_id' => 26,
                'name' => '蓬安县',
                'status' => 1,
            ),
            466 => 
            array (
                'id' => 2467,
                'city_id' => 300,
                'province_id' => 26,
                'name' => '仪陇县',
                'status' => 1,
            ),
            467 => 
            array (
                'id' => 2468,
                'city_id' => 300,
                'province_id' => 26,
                'name' => '顺庆区',
                'status' => 1,
            ),
            468 => 
            array (
                'id' => 2469,
                'city_id' => 300,
                'province_id' => 26,
                'name' => '高坪区',
                'status' => 1,
            ),
            469 => 
            array (
                'id' => 2470,
                'city_id' => 300,
                'province_id' => 26,
                'name' => '嘉陵区',
                'status' => 1,
            ),
            470 => 
            array (
                'id' => 2471,
                'city_id' => 300,
                'province_id' => 26,
                'name' => '西充县',
                'status' => 1,
            ),
            471 => 
            array (
                'id' => 2472,
                'city_id' => 301,
                'province_id' => 26,
                'name' => '市中区',
                'status' => 1,
            ),
            472 => 
            array (
                'id' => 2473,
                'city_id' => 301,
                'province_id' => 26,
                'name' => '东兴区',
                'status' => 1,
            ),
            473 => 
            array (
                'id' => 2474,
                'city_id' => 301,
                'province_id' => 26,
                'name' => '威远县',
                'status' => 1,
            ),
            474 => 
            array (
                'id' => 2475,
                'city_id' => 301,
                'province_id' => 26,
                'name' => '资中县',
                'status' => 1,
            ),
            475 => 
            array (
                'id' => 2476,
                'city_id' => 301,
                'province_id' => 26,
                'name' => '隆昌县',
                'status' => 1,
            ),
            476 => 
            array (
                'id' => 2477,
                'city_id' => 302,
                'province_id' => 26,
                'name' => '东  区',
                'status' => 1,
            ),
            477 => 
            array (
                'id' => 2478,
                'city_id' => 302,
                'province_id' => 26,
                'name' => '西  区',
                'status' => 1,
            ),
            478 => 
            array (
                'id' => 2479,
                'city_id' => 302,
                'province_id' => 26,
                'name' => '仁和区',
                'status' => 1,
            ),
            479 => 
            array (
                'id' => 2480,
                'city_id' => 302,
                'province_id' => 26,
                'name' => '米易县',
                'status' => 1,
            ),
            480 => 
            array (
                'id' => 2481,
                'city_id' => 302,
                'province_id' => 26,
                'name' => '盐边县',
                'status' => 1,
            ),
            481 => 
            array (
                'id' => 2482,
                'city_id' => 303,
                'province_id' => 26,
                'name' => '船山区',
                'status' => 1,
            ),
            482 => 
            array (
                'id' => 2483,
                'city_id' => 303,
                'province_id' => 26,
                'name' => '安居区',
                'status' => 1,
            ),
            483 => 
            array (
                'id' => 2484,
                'city_id' => 303,
                'province_id' => 26,
                'name' => '蓬溪县',
                'status' => 1,
            ),
            484 => 
            array (
                'id' => 2485,
                'city_id' => 303,
                'province_id' => 26,
                'name' => '射洪县',
                'status' => 1,
            ),
            485 => 
            array (
                'id' => 2486,
                'city_id' => 303,
                'province_id' => 26,
                'name' => '大英县',
                'status' => 1,
            ),
            486 => 
            array (
                'id' => 2487,
                'city_id' => 304,
                'province_id' => 26,
                'name' => '雨城区',
                'status' => 1,
            ),
            487 => 
            array (
                'id' => 2488,
                'city_id' => 304,
                'province_id' => 26,
                'name' => '名山县',
                'status' => 1,
            ),
            488 => 
            array (
                'id' => 2489,
                'city_id' => 304,
                'province_id' => 26,
                'name' => '荥经县',
                'status' => 1,
            ),
            489 => 
            array (
                'id' => 2490,
                'city_id' => 304,
                'province_id' => 26,
                'name' => '汉源县',
                'status' => 1,
            ),
            490 => 
            array (
                'id' => 2491,
                'city_id' => 304,
                'province_id' => 26,
                'name' => '石棉县',
                'status' => 1,
            ),
            491 => 
            array (
                'id' => 2492,
                'city_id' => 304,
                'province_id' => 26,
                'name' => '天全县',
                'status' => 1,
            ),
            492 => 
            array (
                'id' => 2493,
                'city_id' => 304,
                'province_id' => 26,
                'name' => '芦山县',
                'status' => 1,
            ),
            493 => 
            array (
                'id' => 2494,
                'city_id' => 304,
                'province_id' => 26,
                'name' => '宝兴县',
                'status' => 1,
            ),
            494 => 
            array (
                'id' => 2495,
                'city_id' => 305,
                'province_id' => 26,
                'name' => '翠屏区',
                'status' => 1,
            ),
            495 => 
            array (
                'id' => 2496,
                'city_id' => 305,
                'province_id' => 26,
                'name' => '宜宾县',
                'status' => 1,
            ),
            496 => 
            array (
                'id' => 2497,
                'city_id' => 305,
                'province_id' => 26,
                'name' => '南溪县',
                'status' => 1,
            ),
            497 => 
            array (
                'id' => 2498,
                'city_id' => 305,
                'province_id' => 26,
                'name' => '江安县',
                'status' => 1,
            ),
            498 => 
            array (
                'id' => 2499,
                'city_id' => 305,
                'province_id' => 26,
                'name' => '长宁县',
                'status' => 1,
            ),
            499 => 
            array (
                'id' => 2500,
                'city_id' => 305,
                'province_id' => 26,
                'name' => '高县',
                'status' => 1,
            ),
        ));
        \DB::table('geo_districts')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'city_id' => 305,
                'province_id' => 26,
                'name' => '珙县',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 2502,
                'city_id' => 305,
                'province_id' => 26,
                'name' => '筠连县',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 2503,
                'city_id' => 305,
                'province_id' => 26,
                'name' => '兴文县',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 2504,
                'city_id' => 305,
                'province_id' => 26,
                'name' => '屏山县',
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 2505,
                'city_id' => 306,
                'province_id' => 26,
                'name' => '雁江区',
                'status' => 1,
            ),
            5 => 
            array (
                'id' => 2506,
                'city_id' => 306,
                'province_id' => 26,
                'name' => '简阳市',
                'status' => 1,
            ),
            6 => 
            array (
                'id' => 2507,
                'city_id' => 306,
                'province_id' => 26,
                'name' => '安岳县',
                'status' => 1,
            ),
            7 => 
            array (
                'id' => 2508,
                'city_id' => 306,
                'province_id' => 26,
                'name' => '乐至县',
                'status' => 1,
            ),
            8 => 
            array (
                'id' => 2509,
                'city_id' => 307,
                'province_id' => 26,
                'name' => '大安区',
                'status' => 1,
            ),
            9 => 
            array (
                'id' => 2510,
                'city_id' => 307,
                'province_id' => 26,
                'name' => '自流井区',
                'status' => 1,
            ),
            10 => 
            array (
                'id' => 2511,
                'city_id' => 307,
                'province_id' => 26,
                'name' => '贡井区',
                'status' => 1,
            ),
            11 => 
            array (
                'id' => 2512,
                'city_id' => 307,
                'province_id' => 26,
                'name' => '沿滩区',
                'status' => 1,
            ),
            12 => 
            array (
                'id' => 2513,
                'city_id' => 307,
                'province_id' => 26,
                'name' => '荣县',
                'status' => 1,
            ),
            13 => 
            array (
                'id' => 2514,
                'city_id' => 307,
                'province_id' => 26,
                'name' => '富顺县',
                'status' => 1,
            ),
            14 => 
            array (
                'id' => 2515,
                'city_id' => 308,
                'province_id' => 26,
                'name' => '江阳区',
                'status' => 1,
            ),
            15 => 
            array (
                'id' => 2516,
                'city_id' => 308,
                'province_id' => 26,
                'name' => '纳溪区',
                'status' => 1,
            ),
            16 => 
            array (
                'id' => 2517,
                'city_id' => 308,
                'province_id' => 26,
                'name' => '龙马潭区',
                'status' => 1,
            ),
            17 => 
            array (
                'id' => 2518,
                'city_id' => 308,
                'province_id' => 26,
                'name' => '泸县',
                'status' => 1,
            ),
            18 => 
            array (
                'id' => 2519,
                'city_id' => 308,
                'province_id' => 26,
                'name' => '合江县',
                'status' => 1,
            ),
            19 => 
            array (
                'id' => 2520,
                'city_id' => 308,
                'province_id' => 26,
                'name' => '叙永县',
                'status' => 1,
            ),
            20 => 
            array (
                'id' => 2521,
                'city_id' => 308,
                'province_id' => 26,
                'name' => '古蔺县',
                'status' => 1,
            ),
            21 => 
            array (
                'id' => 2522,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '和平区',
                'status' => 1,
            ),
            22 => 
            array (
                'id' => 2523,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '河西区',
                'status' => 1,
            ),
            23 => 
            array (
                'id' => 2524,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '南开区',
                'status' => 1,
            ),
            24 => 
            array (
                'id' => 2525,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '河北区',
                'status' => 1,
            ),
            25 => 
            array (
                'id' => 2526,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '河东区',
                'status' => 1,
            ),
            26 => 
            array (
                'id' => 2527,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '红桥区',
                'status' => 1,
            ),
            27 => 
            array (
                'id' => 2528,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '东丽区',
                'status' => 1,
            ),
            28 => 
            array (
                'id' => 2529,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '津南区',
                'status' => 1,
            ),
            29 => 
            array (
                'id' => 2530,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '西青区',
                'status' => 1,
            ),
            30 => 
            array (
                'id' => 2531,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '北辰区',
                'status' => 1,
            ),
            31 => 
            array (
                'id' => 2532,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '塘沽区',
                'status' => 1,
            ),
            32 => 
            array (
                'id' => 2533,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '汉沽区',
                'status' => 1,
            ),
            33 => 
            array (
                'id' => 2534,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '大港区',
                'status' => 1,
            ),
            34 => 
            array (
                'id' => 2535,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '武清区',
                'status' => 1,
            ),
            35 => 
            array (
                'id' => 2536,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '宝坻区',
                'status' => 1,
            ),
            36 => 
            array (
                'id' => 2537,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '经济开发区',
                'status' => 1,
            ),
            37 => 
            array (
                'id' => 2538,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '宁河县',
                'status' => 1,
            ),
            38 => 
            array (
                'id' => 2539,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '静海县',
                'status' => 1,
            ),
            39 => 
            array (
                'id' => 2540,
                'city_id' => 309,
                'province_id' => 27,
                'name' => '蓟县',
                'status' => 1,
            ),
            40 => 
            array (
                'id' => 2541,
                'city_id' => 310,
                'province_id' => 28,
                'name' => '城关区',
                'status' => 1,
            ),
            41 => 
            array (
                'id' => 2542,
                'city_id' => 310,
                'province_id' => 28,
                'name' => '林周县',
                'status' => 1,
            ),
            42 => 
            array (
                'id' => 2543,
                'city_id' => 310,
                'province_id' => 28,
                'name' => '当雄县',
                'status' => 1,
            ),
            43 => 
            array (
                'id' => 2544,
                'city_id' => 310,
                'province_id' => 28,
                'name' => '尼木县',
                'status' => 1,
            ),
            44 => 
            array (
                'id' => 2545,
                'city_id' => 310,
                'province_id' => 28,
                'name' => '曲水县',
                'status' => 1,
            ),
            45 => 
            array (
                'id' => 2546,
                'city_id' => 310,
                'province_id' => 28,
                'name' => '堆龙德庆县',
                'status' => 1,
            ),
            46 => 
            array (
                'id' => 2547,
                'city_id' => 310,
                'province_id' => 28,
                'name' => '达孜县',
                'status' => 1,
            ),
            47 => 
            array (
                'id' => 2548,
                'city_id' => 310,
                'province_id' => 28,
                'name' => '墨竹工卡县',
                'status' => 1,
            ),
            48 => 
            array (
                'id' => 2549,
                'city_id' => 311,
                'province_id' => 28,
                'name' => '噶尔县',
                'status' => 1,
            ),
            49 => 
            array (
                'id' => 2550,
                'city_id' => 311,
                'province_id' => 28,
                'name' => '普兰县',
                'status' => 1,
            ),
            50 => 
            array (
                'id' => 2551,
                'city_id' => 311,
                'province_id' => 28,
                'name' => '札达县',
                'status' => 1,
            ),
            51 => 
            array (
                'id' => 2552,
                'city_id' => 311,
                'province_id' => 28,
                'name' => '日土县',
                'status' => 1,
            ),
            52 => 
            array (
                'id' => 2553,
                'city_id' => 311,
                'province_id' => 28,
                'name' => '革吉县',
                'status' => 1,
            ),
            53 => 
            array (
                'id' => 2554,
                'city_id' => 311,
                'province_id' => 28,
                'name' => '改则县',
                'status' => 1,
            ),
            54 => 
            array (
                'id' => 2555,
                'city_id' => 311,
                'province_id' => 28,
                'name' => '措勤县',
                'status' => 1,
            ),
            55 => 
            array (
                'id' => 2556,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '昌都县',
                'status' => 1,
            ),
            56 => 
            array (
                'id' => 2557,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '江达县',
                'status' => 1,
            ),
            57 => 
            array (
                'id' => 2558,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '贡觉县',
                'status' => 1,
            ),
            58 => 
            array (
                'id' => 2559,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '类乌齐县',
                'status' => 1,
            ),
            59 => 
            array (
                'id' => 2560,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '丁青县',
                'status' => 1,
            ),
            60 => 
            array (
                'id' => 2561,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '察雅县',
                'status' => 1,
            ),
            61 => 
            array (
                'id' => 2562,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '八宿县',
                'status' => 1,
            ),
            62 => 
            array (
                'id' => 2563,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '左贡县',
                'status' => 1,
            ),
            63 => 
            array (
                'id' => 2564,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '芒康县',
                'status' => 1,
            ),
            64 => 
            array (
                'id' => 2565,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '洛隆县',
                'status' => 1,
            ),
            65 => 
            array (
                'id' => 2566,
                'city_id' => 312,
                'province_id' => 28,
                'name' => '边坝县',
                'status' => 1,
            ),
            66 => 
            array (
                'id' => 2567,
                'city_id' => 313,
                'province_id' => 28,
                'name' => '林芝县',
                'status' => 1,
            ),
            67 => 
            array (
                'id' => 2568,
                'city_id' => 313,
                'province_id' => 28,
                'name' => '工布江达县',
                'status' => 1,
            ),
            68 => 
            array (
                'id' => 2569,
                'city_id' => 313,
                'province_id' => 28,
                'name' => '米林县',
                'status' => 1,
            ),
            69 => 
            array (
                'id' => 2570,
                'city_id' => 313,
                'province_id' => 28,
                'name' => '墨脱县',
                'status' => 1,
            ),
            70 => 
            array (
                'id' => 2571,
                'city_id' => 313,
                'province_id' => 28,
                'name' => '波密县',
                'status' => 1,
            ),
            71 => 
            array (
                'id' => 2572,
                'city_id' => 313,
                'province_id' => 28,
                'name' => '察隅县',
                'status' => 1,
            ),
            72 => 
            array (
                'id' => 2573,
                'city_id' => 313,
                'province_id' => 28,
                'name' => '朗县',
                'status' => 1,
            ),
            73 => 
            array (
                'id' => 2574,
                'city_id' => 314,
                'province_id' => 28,
                'name' => '那曲县',
                'status' => 1,
            ),
            74 => 
            array (
                'id' => 2575,
                'city_id' => 314,
                'province_id' => 28,
                'name' => '嘉黎县',
                'status' => 1,
            ),
            75 => 
            array (
                'id' => 2576,
                'city_id' => 314,
                'province_id' => 28,
                'name' => '比如县',
                'status' => 1,
            ),
            76 => 
            array (
                'id' => 2577,
                'city_id' => 314,
                'province_id' => 28,
                'name' => '聂荣县',
                'status' => 1,
            ),
            77 => 
            array (
                'id' => 2578,
                'city_id' => 314,
                'province_id' => 28,
                'name' => '安多县',
                'status' => 1,
            ),
            78 => 
            array (
                'id' => 2579,
                'city_id' => 314,
                'province_id' => 28,
                'name' => '申扎县',
                'status' => 1,
            ),
            79 => 
            array (
                'id' => 2580,
                'city_id' => 314,
                'province_id' => 28,
                'name' => '索县',
                'status' => 1,
            ),
            80 => 
            array (
                'id' => 2581,
                'city_id' => 314,
                'province_id' => 28,
                'name' => '班戈县',
                'status' => 1,
            ),
            81 => 
            array (
                'id' => 2582,
                'city_id' => 314,
                'province_id' => 28,
                'name' => '巴青县',
                'status' => 1,
            ),
            82 => 
            array (
                'id' => 2583,
                'city_id' => 314,
                'province_id' => 28,
                'name' => '尼玛县',
                'status' => 1,
            ),
            83 => 
            array (
                'id' => 2584,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '日喀则市',
                'status' => 1,
            ),
            84 => 
            array (
                'id' => 2585,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '南木林县',
                'status' => 1,
            ),
            85 => 
            array (
                'id' => 2586,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '江孜县',
                'status' => 1,
            ),
            86 => 
            array (
                'id' => 2587,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '定日县',
                'status' => 1,
            ),
            87 => 
            array (
                'id' => 2588,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '萨迦县',
                'status' => 1,
            ),
            88 => 
            array (
                'id' => 2589,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '拉孜县',
                'status' => 1,
            ),
            89 => 
            array (
                'id' => 2590,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '昂仁县',
                'status' => 1,
            ),
            90 => 
            array (
                'id' => 2591,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '谢通门县',
                'status' => 1,
            ),
            91 => 
            array (
                'id' => 2592,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '白朗县',
                'status' => 1,
            ),
            92 => 
            array (
                'id' => 2593,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '仁布县',
                'status' => 1,
            ),
            93 => 
            array (
                'id' => 2594,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '康马县',
                'status' => 1,
            ),
            94 => 
            array (
                'id' => 2595,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '定结县',
                'status' => 1,
            ),
            95 => 
            array (
                'id' => 2596,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '仲巴县',
                'status' => 1,
            ),
            96 => 
            array (
                'id' => 2597,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '亚东县',
                'status' => 1,
            ),
            97 => 
            array (
                'id' => 2598,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '吉隆县',
                'status' => 1,
            ),
            98 => 
            array (
                'id' => 2599,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '聂拉木县',
                'status' => 1,
            ),
            99 => 
            array (
                'id' => 2600,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '萨嘎县',
                'status' => 1,
            ),
            100 => 
            array (
                'id' => 2601,
                'city_id' => 315,
                'province_id' => 28,
                'name' => '岗巴县',
                'status' => 1,
            ),
            101 => 
            array (
                'id' => 2602,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '乃东县',
                'status' => 1,
            ),
            102 => 
            array (
                'id' => 2603,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '扎囊县',
                'status' => 1,
            ),
            103 => 
            array (
                'id' => 2604,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '贡嘎县',
                'status' => 1,
            ),
            104 => 
            array (
                'id' => 2605,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '桑日县',
                'status' => 1,
            ),
            105 => 
            array (
                'id' => 2606,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '琼结县',
                'status' => 1,
            ),
            106 => 
            array (
                'id' => 2607,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '曲松县',
                'status' => 1,
            ),
            107 => 
            array (
                'id' => 2608,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '措美县',
                'status' => 1,
            ),
            108 => 
            array (
                'id' => 2609,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '洛扎县',
                'status' => 1,
            ),
            109 => 
            array (
                'id' => 2610,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '加查县',
                'status' => 1,
            ),
            110 => 
            array (
                'id' => 2611,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '隆子县',
                'status' => 1,
            ),
            111 => 
            array (
                'id' => 2612,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '错那县',
                'status' => 1,
            ),
            112 => 
            array (
                'id' => 2613,
                'city_id' => 316,
                'province_id' => 28,
                'name' => '浪卡子县',
                'status' => 1,
            ),
            113 => 
            array (
                'id' => 2614,
                'city_id' => 317,
                'province_id' => 29,
                'name' => '天山区',
                'status' => 1,
            ),
            114 => 
            array (
                'id' => 2615,
                'city_id' => 317,
                'province_id' => 29,
                'name' => '沙依巴克区',
                'status' => 1,
            ),
            115 => 
            array (
                'id' => 2616,
                'city_id' => 317,
                'province_id' => 29,
                'name' => '新市区',
                'status' => 1,
            ),
            116 => 
            array (
                'id' => 2617,
                'city_id' => 317,
                'province_id' => 29,
                'name' => '水磨沟区',
                'status' => 1,
            ),
            117 => 
            array (
                'id' => 2618,
                'city_id' => 317,
                'province_id' => 29,
                'name' => '头屯河区',
                'status' => 1,
            ),
            118 => 
            array (
                'id' => 2619,
                'city_id' => 317,
                'province_id' => 29,
                'name' => '达坂城区',
                'status' => 1,
            ),
            119 => 
            array (
                'id' => 2620,
                'city_id' => 317,
                'province_id' => 29,
                'name' => '米东区',
                'status' => 1,
            ),
            120 => 
            array (
                'id' => 2621,
                'city_id' => 317,
                'province_id' => 29,
                'name' => '乌鲁木齐县',
                'status' => 1,
            ),
            121 => 
            array (
                'id' => 2622,
                'city_id' => 318,
                'province_id' => 29,
                'name' => '阿克苏市',
                'status' => 1,
            ),
            122 => 
            array (
                'id' => 2623,
                'city_id' => 318,
                'province_id' => 29,
                'name' => '温宿县',
                'status' => 1,
            ),
            123 => 
            array (
                'id' => 2624,
                'city_id' => 318,
                'province_id' => 29,
                'name' => '库车县',
                'status' => 1,
            ),
            124 => 
            array (
                'id' => 2625,
                'city_id' => 318,
                'province_id' => 29,
                'name' => '沙雅县',
                'status' => 1,
            ),
            125 => 
            array (
                'id' => 2626,
                'city_id' => 318,
                'province_id' => 29,
                'name' => '新和县',
                'status' => 1,
            ),
            126 => 
            array (
                'id' => 2627,
                'city_id' => 318,
                'province_id' => 29,
                'name' => '拜城县',
                'status' => 1,
            ),
            127 => 
            array (
                'id' => 2628,
                'city_id' => 318,
                'province_id' => 29,
                'name' => '乌什县',
                'status' => 1,
            ),
            128 => 
            array (
                'id' => 2629,
                'city_id' => 318,
                'province_id' => 29,
                'name' => '阿瓦提县',
                'status' => 1,
            ),
            129 => 
            array (
                'id' => 2630,
                'city_id' => 318,
                'province_id' => 29,
                'name' => '柯坪县',
                'status' => 1,
            ),
            130 => 
            array (
                'id' => 2631,
                'city_id' => 319,
                'province_id' => 29,
                'name' => '阿拉尔市',
                'status' => 1,
            ),
            131 => 
            array (
                'id' => 2632,
                'city_id' => 320,
                'province_id' => 29,
                'name' => '库尔勒市',
                'status' => 1,
            ),
            132 => 
            array (
                'id' => 2633,
                'city_id' => 320,
                'province_id' => 29,
                'name' => '轮台县',
                'status' => 1,
            ),
            133 => 
            array (
                'id' => 2634,
                'city_id' => 320,
                'province_id' => 29,
                'name' => '尉犁县',
                'status' => 1,
            ),
            134 => 
            array (
                'id' => 2635,
                'city_id' => 320,
                'province_id' => 29,
                'name' => '若羌县',
                'status' => 1,
            ),
            135 => 
            array (
                'id' => 2636,
                'city_id' => 320,
                'province_id' => 29,
                'name' => '且末县',
                'status' => 1,
            ),
            136 => 
            array (
                'id' => 2637,
                'city_id' => 320,
                'province_id' => 29,
                'name' => '焉耆',
                'status' => 1,
            ),
            137 => 
            array (
                'id' => 2638,
                'city_id' => 320,
                'province_id' => 29,
                'name' => '和静县',
                'status' => 1,
            ),
            138 => 
            array (
                'id' => 2639,
                'city_id' => 320,
                'province_id' => 29,
                'name' => '和硕县',
                'status' => 1,
            ),
            139 => 
            array (
                'id' => 2640,
                'city_id' => 320,
                'province_id' => 29,
                'name' => '博湖县',
                'status' => 1,
            ),
            140 => 
            array (
                'id' => 2641,
                'city_id' => 321,
                'province_id' => 29,
                'name' => '博乐市',
                'status' => 1,
            ),
            141 => 
            array (
                'id' => 2642,
                'city_id' => 321,
                'province_id' => 29,
                'name' => '精河县',
                'status' => 1,
            ),
            142 => 
            array (
                'id' => 2643,
                'city_id' => 321,
                'province_id' => 29,
                'name' => '温泉县',
                'status' => 1,
            ),
            143 => 
            array (
                'id' => 2644,
                'city_id' => 322,
                'province_id' => 29,
                'name' => '呼图壁县',
                'status' => 1,
            ),
            144 => 
            array (
                'id' => 2645,
                'city_id' => 322,
                'province_id' => 29,
                'name' => '米泉市',
                'status' => 1,
            ),
            145 => 
            array (
                'id' => 2646,
                'city_id' => 322,
                'province_id' => 29,
                'name' => '昌吉市',
                'status' => 1,
            ),
            146 => 
            array (
                'id' => 2647,
                'city_id' => 322,
                'province_id' => 29,
                'name' => '阜康市',
                'status' => 1,
            ),
            147 => 
            array (
                'id' => 2648,
                'city_id' => 322,
                'province_id' => 29,
                'name' => '玛纳斯县',
                'status' => 1,
            ),
            148 => 
            array (
                'id' => 2649,
                'city_id' => 322,
                'province_id' => 29,
                'name' => '奇台县',
                'status' => 1,
            ),
            149 => 
            array (
                'id' => 2650,
                'city_id' => 322,
                'province_id' => 29,
                'name' => '吉木萨尔县',
                'status' => 1,
            ),
            150 => 
            array (
                'id' => 2651,
                'city_id' => 322,
                'province_id' => 29,
                'name' => '木垒',
                'status' => 1,
            ),
            151 => 
            array (
                'id' => 2652,
                'city_id' => 323,
                'province_id' => 29,
                'name' => '哈密市',
                'status' => 1,
            ),
            152 => 
            array (
                'id' => 2653,
                'city_id' => 323,
                'province_id' => 29,
                'name' => '伊吾县',
                'status' => 1,
            ),
            153 => 
            array (
                'id' => 2654,
                'city_id' => 323,
                'province_id' => 29,
                'name' => '巴里坤',
                'status' => 1,
            ),
            154 => 
            array (
                'id' => 2655,
                'city_id' => 324,
                'province_id' => 29,
                'name' => '和田市',
                'status' => 1,
            ),
            155 => 
            array (
                'id' => 2656,
                'city_id' => 324,
                'province_id' => 29,
                'name' => '和田县',
                'status' => 1,
            ),
            156 => 
            array (
                'id' => 2657,
                'city_id' => 324,
                'province_id' => 29,
                'name' => '墨玉县',
                'status' => 1,
            ),
            157 => 
            array (
                'id' => 2658,
                'city_id' => 324,
                'province_id' => 29,
                'name' => '皮山县',
                'status' => 1,
            ),
            158 => 
            array (
                'id' => 2659,
                'city_id' => 324,
                'province_id' => 29,
                'name' => '洛浦县',
                'status' => 1,
            ),
            159 => 
            array (
                'id' => 2660,
                'city_id' => 324,
                'province_id' => 29,
                'name' => '策勒县',
                'status' => 1,
            ),
            160 => 
            array (
                'id' => 2661,
                'city_id' => 324,
                'province_id' => 29,
                'name' => '于田县',
                'status' => 1,
            ),
            161 => 
            array (
                'id' => 2662,
                'city_id' => 324,
                'province_id' => 29,
                'name' => '民丰县',
                'status' => 1,
            ),
            162 => 
            array (
                'id' => 2663,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '喀什市',
                'status' => 1,
            ),
            163 => 
            array (
                'id' => 2664,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '疏附县',
                'status' => 1,
            ),
            164 => 
            array (
                'id' => 2665,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '疏勒县',
                'status' => 1,
            ),
            165 => 
            array (
                'id' => 2666,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '英吉沙县',
                'status' => 1,
            ),
            166 => 
            array (
                'id' => 2667,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '泽普县',
                'status' => 1,
            ),
            167 => 
            array (
                'id' => 2668,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '莎车县',
                'status' => 1,
            ),
            168 => 
            array (
                'id' => 2669,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '叶城县',
                'status' => 1,
            ),
            169 => 
            array (
                'id' => 2670,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '麦盖提县',
                'status' => 1,
            ),
            170 => 
            array (
                'id' => 2671,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '岳普湖县',
                'status' => 1,
            ),
            171 => 
            array (
                'id' => 2672,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '伽师县',
                'status' => 1,
            ),
            172 => 
            array (
                'id' => 2673,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '巴楚县',
                'status' => 1,
            ),
            173 => 
            array (
                'id' => 2674,
                'city_id' => 325,
                'province_id' => 29,
                'name' => '塔什库尔干',
                'status' => 1,
            ),
            174 => 
            array (
                'id' => 2675,
                'city_id' => 326,
                'province_id' => 29,
                'name' => '克拉玛依市',
                'status' => 1,
            ),
            175 => 
            array (
                'id' => 2676,
                'city_id' => 327,
                'province_id' => 29,
                'name' => '阿图什市',
                'status' => 1,
            ),
            176 => 
            array (
                'id' => 2677,
                'city_id' => 327,
                'province_id' => 29,
                'name' => '阿克陶县',
                'status' => 1,
            ),
            177 => 
            array (
                'id' => 2678,
                'city_id' => 327,
                'province_id' => 29,
                'name' => '阿合奇县',
                'status' => 1,
            ),
            178 => 
            array (
                'id' => 2679,
                'city_id' => 327,
                'province_id' => 29,
                'name' => '乌恰县',
                'status' => 1,
            ),
            179 => 
            array (
                'id' => 2680,
                'city_id' => 328,
                'province_id' => 29,
                'name' => '石河子市',
                'status' => 1,
            ),
            180 => 
            array (
                'id' => 2681,
                'city_id' => 329,
                'province_id' => 29,
                'name' => '图木舒克市',
                'status' => 1,
            ),
            181 => 
            array (
                'id' => 2682,
                'city_id' => 330,
                'province_id' => 29,
                'name' => '吐鲁番市',
                'status' => 1,
            ),
            182 => 
            array (
                'id' => 2683,
                'city_id' => 330,
                'province_id' => 29,
                'name' => '鄯善县',
                'status' => 1,
            ),
            183 => 
            array (
                'id' => 2684,
                'city_id' => 330,
                'province_id' => 29,
                'name' => '托克逊县',
                'status' => 1,
            ),
            184 => 
            array (
                'id' => 2685,
                'city_id' => 331,
                'province_id' => 29,
                'name' => '五家渠市',
                'status' => 1,
            ),
            185 => 
            array (
                'id' => 2686,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '阿勒泰市',
                'status' => 1,
            ),
            186 => 
            array (
                'id' => 2687,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '布克赛尔',
                'status' => 1,
            ),
            187 => 
            array (
                'id' => 2688,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '伊宁市',
                'status' => 1,
            ),
            188 => 
            array (
                'id' => 2689,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '布尔津县',
                'status' => 1,
            ),
            189 => 
            array (
                'id' => 2690,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '奎屯市',
                'status' => 1,
            ),
            190 => 
            array (
                'id' => 2691,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '乌苏市',
                'status' => 1,
            ),
            191 => 
            array (
                'id' => 2692,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '额敏县',
                'status' => 1,
            ),
            192 => 
            array (
                'id' => 2693,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '富蕴县',
                'status' => 1,
            ),
            193 => 
            array (
                'id' => 2694,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '伊宁县',
                'status' => 1,
            ),
            194 => 
            array (
                'id' => 2695,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '福海县',
                'status' => 1,
            ),
            195 => 
            array (
                'id' => 2696,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '霍城县',
                'status' => 1,
            ),
            196 => 
            array (
                'id' => 2697,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '沙湾县',
                'status' => 1,
            ),
            197 => 
            array (
                'id' => 2698,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '巩留县',
                'status' => 1,
            ),
            198 => 
            array (
                'id' => 2699,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '哈巴河县',
                'status' => 1,
            ),
            199 => 
            array (
                'id' => 2700,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '托里县',
                'status' => 1,
            ),
            200 => 
            array (
                'id' => 2701,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '青河县',
                'status' => 1,
            ),
            201 => 
            array (
                'id' => 2702,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '新源县',
                'status' => 1,
            ),
            202 => 
            array (
                'id' => 2703,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '裕民县',
                'status' => 1,
            ),
            203 => 
            array (
                'id' => 2704,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '和布克赛尔',
                'status' => 1,
            ),
            204 => 
            array (
                'id' => 2705,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '吉木乃县',
                'status' => 1,
            ),
            205 => 
            array (
                'id' => 2706,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '昭苏县',
                'status' => 1,
            ),
            206 => 
            array (
                'id' => 2707,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '特克斯县',
                'status' => 1,
            ),
            207 => 
            array (
                'id' => 2708,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '尼勒克县',
                'status' => 1,
            ),
            208 => 
            array (
                'id' => 2709,
                'city_id' => 332,
                'province_id' => 29,
                'name' => '察布查尔',
                'status' => 1,
            ),
            209 => 
            array (
                'id' => 2710,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '盘龙区',
                'status' => 1,
            ),
            210 => 
            array (
                'id' => 2711,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '五华区',
                'status' => 1,
            ),
            211 => 
            array (
                'id' => 2712,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '官渡区',
                'status' => 1,
            ),
            212 => 
            array (
                'id' => 2713,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '西山区',
                'status' => 1,
            ),
            213 => 
            array (
                'id' => 2714,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '东川区',
                'status' => 1,
            ),
            214 => 
            array (
                'id' => 2715,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '安宁市',
                'status' => 1,
            ),
            215 => 
            array (
                'id' => 2716,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '呈贡县',
                'status' => 1,
            ),
            216 => 
            array (
                'id' => 2717,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '晋宁县',
                'status' => 1,
            ),
            217 => 
            array (
                'id' => 2718,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '富民县',
                'status' => 1,
            ),
            218 => 
            array (
                'id' => 2719,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '宜良县',
                'status' => 1,
            ),
            219 => 
            array (
                'id' => 2720,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '嵩明县',
                'status' => 1,
            ),
            220 => 
            array (
                'id' => 2721,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '石林县',
                'status' => 1,
            ),
            221 => 
            array (
                'id' => 2722,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '禄劝',
                'status' => 1,
            ),
            222 => 
            array (
                'id' => 2723,
                'city_id' => 333,
                'province_id' => 30,
                'name' => '寻甸',
                'status' => 1,
            ),
            223 => 
            array (
                'id' => 2724,
                'city_id' => 334,
                'province_id' => 30,
                'name' => '兰坪',
                'status' => 1,
            ),
            224 => 
            array (
                'id' => 2725,
                'city_id' => 334,
                'province_id' => 30,
                'name' => '泸水县',
                'status' => 1,
            ),
            225 => 
            array (
                'id' => 2726,
                'city_id' => 334,
                'province_id' => 30,
                'name' => '福贡县',
                'status' => 1,
            ),
            226 => 
            array (
                'id' => 2727,
                'city_id' => 334,
                'province_id' => 30,
                'name' => '贡山',
                'status' => 1,
            ),
            227 => 
            array (
                'id' => 2728,
                'city_id' => 335,
                'province_id' => 30,
                'name' => '宁洱',
                'status' => 1,
            ),
            228 => 
            array (
                'id' => 2729,
                'city_id' => 335,
                'province_id' => 30,
                'name' => '思茅区',
                'status' => 1,
            ),
            229 => 
            array (
                'id' => 2730,
                'city_id' => 335,
                'province_id' => 30,
                'name' => '墨江',
                'status' => 1,
            ),
            230 => 
            array (
                'id' => 2731,
                'city_id' => 335,
                'province_id' => 30,
                'name' => '景东',
                'status' => 1,
            ),
            231 => 
            array (
                'id' => 2732,
                'city_id' => 335,
                'province_id' => 30,
                'name' => '景谷',
                'status' => 1,
            ),
            232 => 
            array (
                'id' => 2733,
                'city_id' => 335,
                'province_id' => 30,
                'name' => '镇沅',
                'status' => 1,
            ),
            233 => 
            array (
                'id' => 2734,
                'city_id' => 335,
                'province_id' => 30,
                'name' => '江城',
                'status' => 1,
            ),
            234 => 
            array (
                'id' => 2735,
                'city_id' => 335,
                'province_id' => 30,
                'name' => '孟连',
                'status' => 1,
            ),
            235 => 
            array (
                'id' => 2736,
                'city_id' => 335,
                'province_id' => 30,
                'name' => '澜沧',
                'status' => 1,
            ),
            236 => 
            array (
                'id' => 2737,
                'city_id' => 335,
                'province_id' => 30,
                'name' => '西盟',
                'status' => 1,
            ),
            237 => 
            array (
                'id' => 2738,
                'city_id' => 336,
                'province_id' => 30,
                'name' => '古城区',
                'status' => 1,
            ),
            238 => 
            array (
                'id' => 2739,
                'city_id' => 336,
                'province_id' => 30,
                'name' => '宁蒗',
                'status' => 1,
            ),
            239 => 
            array (
                'id' => 2740,
                'city_id' => 336,
                'province_id' => 30,
                'name' => '玉龙',
                'status' => 1,
            ),
            240 => 
            array (
                'id' => 2741,
                'city_id' => 336,
                'province_id' => 30,
                'name' => '永胜县',
                'status' => 1,
            ),
            241 => 
            array (
                'id' => 2742,
                'city_id' => 336,
                'province_id' => 30,
                'name' => '华坪县',
                'status' => 1,
            ),
            242 => 
            array (
                'id' => 2743,
                'city_id' => 337,
                'province_id' => 30,
                'name' => '隆阳区',
                'status' => 1,
            ),
            243 => 
            array (
                'id' => 2744,
                'city_id' => 337,
                'province_id' => 30,
                'name' => '施甸县',
                'status' => 1,
            ),
            244 => 
            array (
                'id' => 2745,
                'city_id' => 337,
                'province_id' => 30,
                'name' => '腾冲县',
                'status' => 1,
            ),
            245 => 
            array (
                'id' => 2746,
                'city_id' => 337,
                'province_id' => 30,
                'name' => '龙陵县',
                'status' => 1,
            ),
            246 => 
            array (
                'id' => 2747,
                'city_id' => 337,
                'province_id' => 30,
                'name' => '昌宁县',
                'status' => 1,
            ),
            247 => 
            array (
                'id' => 2748,
                'city_id' => 338,
                'province_id' => 30,
                'name' => '楚雄市',
                'status' => 1,
            ),
            248 => 
            array (
                'id' => 2749,
                'city_id' => 338,
                'province_id' => 30,
                'name' => '双柏县',
                'status' => 1,
            ),
            249 => 
            array (
                'id' => 2750,
                'city_id' => 338,
                'province_id' => 30,
                'name' => '牟定县',
                'status' => 1,
            ),
            250 => 
            array (
                'id' => 2751,
                'city_id' => 338,
                'province_id' => 30,
                'name' => '南华县',
                'status' => 1,
            ),
            251 => 
            array (
                'id' => 2752,
                'city_id' => 338,
                'province_id' => 30,
                'name' => '姚安县',
                'status' => 1,
            ),
            252 => 
            array (
                'id' => 2753,
                'city_id' => 338,
                'province_id' => 30,
                'name' => '大姚县',
                'status' => 1,
            ),
            253 => 
            array (
                'id' => 2754,
                'city_id' => 338,
                'province_id' => 30,
                'name' => '永仁县',
                'status' => 1,
            ),
            254 => 
            array (
                'id' => 2755,
                'city_id' => 338,
                'province_id' => 30,
                'name' => '元谋县',
                'status' => 1,
            ),
            255 => 
            array (
                'id' => 2756,
                'city_id' => 338,
                'province_id' => 30,
                'name' => '武定县',
                'status' => 1,
            ),
            256 => 
            array (
                'id' => 2757,
                'city_id' => 338,
                'province_id' => 30,
                'name' => '禄丰县',
                'status' => 1,
            ),
            257 => 
            array (
                'id' => 2758,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '大理市',
                'status' => 1,
            ),
            258 => 
            array (
                'id' => 2759,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '祥云县',
                'status' => 1,
            ),
            259 => 
            array (
                'id' => 2760,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '宾川县',
                'status' => 1,
            ),
            260 => 
            array (
                'id' => 2761,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '弥渡县',
                'status' => 1,
            ),
            261 => 
            array (
                'id' => 2762,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '永平县',
                'status' => 1,
            ),
            262 => 
            array (
                'id' => 2763,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '云龙县',
                'status' => 1,
            ),
            263 => 
            array (
                'id' => 2764,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '洱源县',
                'status' => 1,
            ),
            264 => 
            array (
                'id' => 2765,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '剑川县',
                'status' => 1,
            ),
            265 => 
            array (
                'id' => 2766,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '鹤庆县',
                'status' => 1,
            ),
            266 => 
            array (
                'id' => 2767,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '漾濞',
                'status' => 1,
            ),
            267 => 
            array (
                'id' => 2768,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '南涧',
                'status' => 1,
            ),
            268 => 
            array (
                'id' => 2769,
                'city_id' => 339,
                'province_id' => 30,
                'name' => '巍山',
                'status' => 1,
            ),
            269 => 
            array (
                'id' => 2770,
                'city_id' => 340,
                'province_id' => 30,
                'name' => '潞西市',
                'status' => 1,
            ),
            270 => 
            array (
                'id' => 2771,
                'city_id' => 340,
                'province_id' => 30,
                'name' => '瑞丽市',
                'status' => 1,
            ),
            271 => 
            array (
                'id' => 2772,
                'city_id' => 340,
                'province_id' => 30,
                'name' => '梁河县',
                'status' => 1,
            ),
            272 => 
            array (
                'id' => 2773,
                'city_id' => 340,
                'province_id' => 30,
                'name' => '盈江县',
                'status' => 1,
            ),
            273 => 
            array (
                'id' => 2774,
                'city_id' => 340,
                'province_id' => 30,
                'name' => '陇川县',
                'status' => 1,
            ),
            274 => 
            array (
                'id' => 2775,
                'city_id' => 341,
                'province_id' => 30,
                'name' => '香格里拉县',
                'status' => 1,
            ),
            275 => 
            array (
                'id' => 2776,
                'city_id' => 341,
                'province_id' => 30,
                'name' => '德钦县',
                'status' => 1,
            ),
            276 => 
            array (
                'id' => 2777,
                'city_id' => 341,
                'province_id' => 30,
                'name' => '维西',
                'status' => 1,
            ),
            277 => 
            array (
                'id' => 2778,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '泸西县',
                'status' => 1,
            ),
            278 => 
            array (
                'id' => 2779,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '蒙自县',
                'status' => 1,
            ),
            279 => 
            array (
                'id' => 2780,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '个旧市',
                'status' => 1,
            ),
            280 => 
            array (
                'id' => 2781,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '开远市',
                'status' => 1,
            ),
            281 => 
            array (
                'id' => 2782,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '绿春县',
                'status' => 1,
            ),
            282 => 
            array (
                'id' => 2783,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '建水县',
                'status' => 1,
            ),
            283 => 
            array (
                'id' => 2784,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '石屏县',
                'status' => 1,
            ),
            284 => 
            array (
                'id' => 2785,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '弥勒县',
                'status' => 1,
            ),
            285 => 
            array (
                'id' => 2786,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '元阳县',
                'status' => 1,
            ),
            286 => 
            array (
                'id' => 2787,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '红河县',
                'status' => 1,
            ),
            287 => 
            array (
                'id' => 2788,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '金平',
                'status' => 1,
            ),
            288 => 
            array (
                'id' => 2789,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '河口',
                'status' => 1,
            ),
            289 => 
            array (
                'id' => 2790,
                'city_id' => 342,
                'province_id' => 30,
                'name' => '屏边',
                'status' => 1,
            ),
            290 => 
            array (
                'id' => 2791,
                'city_id' => 343,
                'province_id' => 30,
                'name' => '临翔区',
                'status' => 1,
            ),
            291 => 
            array (
                'id' => 2792,
                'city_id' => 343,
                'province_id' => 30,
                'name' => '凤庆县',
                'status' => 1,
            ),
            292 => 
            array (
                'id' => 2793,
                'city_id' => 343,
                'province_id' => 30,
                'name' => '云县',
                'status' => 1,
            ),
            293 => 
            array (
                'id' => 2794,
                'city_id' => 343,
                'province_id' => 30,
                'name' => '永德县',
                'status' => 1,
            ),
            294 => 
            array (
                'id' => 2795,
                'city_id' => 343,
                'province_id' => 30,
                'name' => '镇康县',
                'status' => 1,
            ),
            295 => 
            array (
                'id' => 2796,
                'city_id' => 343,
                'province_id' => 30,
                'name' => '双江',
                'status' => 1,
            ),
            296 => 
            array (
                'id' => 2797,
                'city_id' => 343,
                'province_id' => 30,
                'name' => '耿马',
                'status' => 1,
            ),
            297 => 
            array (
                'id' => 2798,
                'city_id' => 343,
                'province_id' => 30,
                'name' => '沧源',
                'status' => 1,
            ),
            298 => 
            array (
                'id' => 2799,
                'city_id' => 344,
                'province_id' => 30,
                'name' => '麒麟区',
                'status' => 1,
            ),
            299 => 
            array (
                'id' => 2800,
                'city_id' => 344,
                'province_id' => 30,
                'name' => '宣威市',
                'status' => 1,
            ),
            300 => 
            array (
                'id' => 2801,
                'city_id' => 344,
                'province_id' => 30,
                'name' => '马龙县',
                'status' => 1,
            ),
            301 => 
            array (
                'id' => 2802,
                'city_id' => 344,
                'province_id' => 30,
                'name' => '陆良县',
                'status' => 1,
            ),
            302 => 
            array (
                'id' => 2803,
                'city_id' => 344,
                'province_id' => 30,
                'name' => '师宗县',
                'status' => 1,
            ),
            303 => 
            array (
                'id' => 2804,
                'city_id' => 344,
                'province_id' => 30,
                'name' => '罗平县',
                'status' => 1,
            ),
            304 => 
            array (
                'id' => 2805,
                'city_id' => 344,
                'province_id' => 30,
                'name' => '富源县',
                'status' => 1,
            ),
            305 => 
            array (
                'id' => 2806,
                'city_id' => 344,
                'province_id' => 30,
                'name' => '会泽县',
                'status' => 1,
            ),
            306 => 
            array (
                'id' => 2807,
                'city_id' => 344,
                'province_id' => 30,
                'name' => '沾益县',
                'status' => 1,
            ),
            307 => 
            array (
                'id' => 2808,
                'city_id' => 345,
                'province_id' => 30,
                'name' => '文山县',
                'status' => 1,
            ),
            308 => 
            array (
                'id' => 2809,
                'city_id' => 345,
                'province_id' => 30,
                'name' => '砚山县',
                'status' => 1,
            ),
            309 => 
            array (
                'id' => 2810,
                'city_id' => 345,
                'province_id' => 30,
                'name' => '西畴县',
                'status' => 1,
            ),
            310 => 
            array (
                'id' => 2811,
                'city_id' => 345,
                'province_id' => 30,
                'name' => '麻栗坡县',
                'status' => 1,
            ),
            311 => 
            array (
                'id' => 2812,
                'city_id' => 345,
                'province_id' => 30,
                'name' => '马关县',
                'status' => 1,
            ),
            312 => 
            array (
                'id' => 2813,
                'city_id' => 345,
                'province_id' => 30,
                'name' => '丘北县',
                'status' => 1,
            ),
            313 => 
            array (
                'id' => 2814,
                'city_id' => 345,
                'province_id' => 30,
                'name' => '广南县',
                'status' => 1,
            ),
            314 => 
            array (
                'id' => 2815,
                'city_id' => 345,
                'province_id' => 30,
                'name' => '富宁县',
                'status' => 1,
            ),
            315 => 
            array (
                'id' => 2816,
                'city_id' => 346,
                'province_id' => 30,
                'name' => '景洪市',
                'status' => 1,
            ),
            316 => 
            array (
                'id' => 2817,
                'city_id' => 346,
                'province_id' => 30,
                'name' => '勐海县',
                'status' => 1,
            ),
            317 => 
            array (
                'id' => 2818,
                'city_id' => 346,
                'province_id' => 30,
                'name' => '勐腊县',
                'status' => 1,
            ),
            318 => 
            array (
                'id' => 2819,
                'city_id' => 347,
                'province_id' => 30,
                'name' => '红塔区',
                'status' => 1,
            ),
            319 => 
            array (
                'id' => 2820,
                'city_id' => 347,
                'province_id' => 30,
                'name' => '江川县',
                'status' => 1,
            ),
            320 => 
            array (
                'id' => 2821,
                'city_id' => 347,
                'province_id' => 30,
                'name' => '澄江县',
                'status' => 1,
            ),
            321 => 
            array (
                'id' => 2822,
                'city_id' => 347,
                'province_id' => 30,
                'name' => '通海县',
                'status' => 1,
            ),
            322 => 
            array (
                'id' => 2823,
                'city_id' => 347,
                'province_id' => 30,
                'name' => '华宁县',
                'status' => 1,
            ),
            323 => 
            array (
                'id' => 2824,
                'city_id' => 347,
                'province_id' => 30,
                'name' => '易门县',
                'status' => 1,
            ),
            324 => 
            array (
                'id' => 2825,
                'city_id' => 347,
                'province_id' => 30,
                'name' => '峨山',
                'status' => 1,
            ),
            325 => 
            array (
                'id' => 2826,
                'city_id' => 347,
                'province_id' => 30,
                'name' => '新平',
                'status' => 1,
            ),
            326 => 
            array (
                'id' => 2827,
                'city_id' => 347,
                'province_id' => 30,
                'name' => '元江',
                'status' => 1,
            ),
            327 => 
            array (
                'id' => 2828,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '昭阳区',
                'status' => 1,
            ),
            328 => 
            array (
                'id' => 2829,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '鲁甸县',
                'status' => 1,
            ),
            329 => 
            array (
                'id' => 2830,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '巧家县',
                'status' => 1,
            ),
            330 => 
            array (
                'id' => 2831,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '盐津县',
                'status' => 1,
            ),
            331 => 
            array (
                'id' => 2832,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '大关县',
                'status' => 1,
            ),
            332 => 
            array (
                'id' => 2833,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '永善县',
                'status' => 1,
            ),
            333 => 
            array (
                'id' => 2834,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '绥江县',
                'status' => 1,
            ),
            334 => 
            array (
                'id' => 2835,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '镇雄县',
                'status' => 1,
            ),
            335 => 
            array (
                'id' => 2836,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '彝良县',
                'status' => 1,
            ),
            336 => 
            array (
                'id' => 2837,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '威信县',
                'status' => 1,
            ),
            337 => 
            array (
                'id' => 2838,
                'city_id' => 348,
                'province_id' => 30,
                'name' => '水富县',
                'status' => 1,
            ),
            338 => 
            array (
                'id' => 2839,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '西湖区',
                'status' => 1,
            ),
            339 => 
            array (
                'id' => 2840,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '上城区',
                'status' => 1,
            ),
            340 => 
            array (
                'id' => 2841,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '下城区',
                'status' => 1,
            ),
            341 => 
            array (
                'id' => 2842,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '拱墅区',
                'status' => 1,
            ),
            342 => 
            array (
                'id' => 2843,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '滨江区',
                'status' => 1,
            ),
            343 => 
            array (
                'id' => 2844,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '江干区',
                'status' => 1,
            ),
            344 => 
            array (
                'id' => 2845,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '萧山区',
                'status' => 1,
            ),
            345 => 
            array (
                'id' => 2846,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '余杭区',
                'status' => 1,
            ),
            346 => 
            array (
                'id' => 2847,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '市郊',
                'status' => 1,
            ),
            347 => 
            array (
                'id' => 2848,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '建德市',
                'status' => 1,
            ),
            348 => 
            array (
                'id' => 2849,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '富阳市',
                'status' => 1,
            ),
            349 => 
            array (
                'id' => 2850,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '临安市',
                'status' => 1,
            ),
            350 => 
            array (
                'id' => 2851,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '桐庐县',
                'status' => 1,
            ),
            351 => 
            array (
                'id' => 2852,
                'city_id' => 349,
                'province_id' => 31,
                'name' => '淳安县',
                'status' => 1,
            ),
            352 => 
            array (
                'id' => 2853,
                'city_id' => 350,
                'province_id' => 31,
                'name' => '吴兴区',
                'status' => 1,
            ),
            353 => 
            array (
                'id' => 2854,
                'city_id' => 350,
                'province_id' => 31,
                'name' => '南浔区',
                'status' => 1,
            ),
            354 => 
            array (
                'id' => 2855,
                'city_id' => 350,
                'province_id' => 31,
                'name' => '德清县',
                'status' => 1,
            ),
            355 => 
            array (
                'id' => 2856,
                'city_id' => 350,
                'province_id' => 31,
                'name' => '长兴县',
                'status' => 1,
            ),
            356 => 
            array (
                'id' => 2857,
                'city_id' => 350,
                'province_id' => 31,
                'name' => '安吉县',
                'status' => 1,
            ),
            357 => 
            array (
                'id' => 2858,
                'city_id' => 351,
                'province_id' => 31,
                'name' => '南湖区',
                'status' => 1,
            ),
            358 => 
            array (
                'id' => 2859,
                'city_id' => 351,
                'province_id' => 31,
                'name' => '秀洲区',
                'status' => 1,
            ),
            359 => 
            array (
                'id' => 2860,
                'city_id' => 351,
                'province_id' => 31,
                'name' => '海宁市',
                'status' => 1,
            ),
            360 => 
            array (
                'id' => 2861,
                'city_id' => 351,
                'province_id' => 31,
                'name' => '嘉善县',
                'status' => 1,
            ),
            361 => 
            array (
                'id' => 2862,
                'city_id' => 351,
                'province_id' => 31,
                'name' => '平湖市',
                'status' => 1,
            ),
            362 => 
            array (
                'id' => 2863,
                'city_id' => 351,
                'province_id' => 31,
                'name' => '桐乡市',
                'status' => 1,
            ),
            363 => 
            array (
                'id' => 2864,
                'city_id' => 351,
                'province_id' => 31,
                'name' => '海盐县',
                'status' => 1,
            ),
            364 => 
            array (
                'id' => 2865,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '婺城区',
                'status' => 1,
            ),
            365 => 
            array (
                'id' => 2866,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '金东区',
                'status' => 1,
            ),
            366 => 
            array (
                'id' => 2867,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '兰溪市',
                'status' => 1,
            ),
            367 => 
            array (
                'id' => 2868,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '市区',
                'status' => 1,
            ),
            368 => 
            array (
                'id' => 2869,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '佛堂镇',
                'status' => 1,
            ),
            369 => 
            array (
                'id' => 2870,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '上溪镇',
                'status' => 1,
            ),
            370 => 
            array (
                'id' => 2871,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '义亭镇',
                'status' => 1,
            ),
            371 => 
            array (
                'id' => 2872,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '大陈镇',
                'status' => 1,
            ),
            372 => 
            array (
                'id' => 2873,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '苏溪镇',
                'status' => 1,
            ),
            373 => 
            array (
                'id' => 2874,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '赤岸镇',
                'status' => 1,
            ),
            374 => 
            array (
                'id' => 2875,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '东阳市',
                'status' => 1,
            ),
            375 => 
            array (
                'id' => 2876,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '永康市',
                'status' => 1,
            ),
            376 => 
            array (
                'id' => 2877,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '武义县',
                'status' => 1,
            ),
            377 => 
            array (
                'id' => 2878,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '浦江县',
                'status' => 1,
            ),
            378 => 
            array (
                'id' => 2879,
                'city_id' => 352,
                'province_id' => 31,
                'name' => '磐安县',
                'status' => 1,
            ),
            379 => 
            array (
                'id' => 2880,
                'city_id' => 353,
                'province_id' => 31,
                'name' => '莲都区',
                'status' => 1,
            ),
            380 => 
            array (
                'id' => 2881,
                'city_id' => 353,
                'province_id' => 31,
                'name' => '龙泉市',
                'status' => 1,
            ),
            381 => 
            array (
                'id' => 2882,
                'city_id' => 353,
                'province_id' => 31,
                'name' => '青田县',
                'status' => 1,
            ),
            382 => 
            array (
                'id' => 2883,
                'city_id' => 353,
                'province_id' => 31,
                'name' => '缙云县',
                'status' => 1,
            ),
            383 => 
            array (
                'id' => 2884,
                'city_id' => 353,
                'province_id' => 31,
                'name' => '遂昌县',
                'status' => 1,
            ),
            384 => 
            array (
                'id' => 2885,
                'city_id' => 353,
                'province_id' => 31,
                'name' => '松阳县',
                'status' => 1,
            ),
            385 => 
            array (
                'id' => 2886,
                'city_id' => 353,
                'province_id' => 31,
                'name' => '云和县',
                'status' => 1,
            ),
            386 => 
            array (
                'id' => 2887,
                'city_id' => 353,
                'province_id' => 31,
                'name' => '庆元县',
                'status' => 1,
            ),
            387 => 
            array (
                'id' => 2888,
                'city_id' => 353,
                'province_id' => 31,
                'name' => '景宁',
                'status' => 1,
            ),
            388 => 
            array (
                'id' => 2889,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '海曙区',
                'status' => 1,
            ),
            389 => 
            array (
                'id' => 2890,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '江东区',
                'status' => 1,
            ),
            390 => 
            array (
                'id' => 2891,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '江北区',
                'status' => 1,
            ),
            391 => 
            array (
                'id' => 2892,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '镇海区',
                'status' => 1,
            ),
            392 => 
            array (
                'id' => 2893,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '北仑区',
                'status' => 1,
            ),
            393 => 
            array (
                'id' => 2894,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '鄞州区',
                'status' => 1,
            ),
            394 => 
            array (
                'id' => 2895,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '余姚市',
                'status' => 1,
            ),
            395 => 
            array (
                'id' => 2896,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '慈溪市',
                'status' => 1,
            ),
            396 => 
            array (
                'id' => 2897,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '奉化市',
                'status' => 1,
            ),
            397 => 
            array (
                'id' => 2898,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '象山县',
                'status' => 1,
            ),
            398 => 
            array (
                'id' => 2899,
                'city_id' => 354,
                'province_id' => 31,
                'name' => '宁海县',
                'status' => 1,
            ),
            399 => 
            array (
                'id' => 2900,
                'city_id' => 355,
                'province_id' => 31,
                'name' => '越城区',
                'status' => 1,
            ),
            400 => 
            array (
                'id' => 2901,
                'city_id' => 355,
                'province_id' => 31,
                'name' => '上虞市',
                'status' => 1,
            ),
            401 => 
            array (
                'id' => 2902,
                'city_id' => 355,
                'province_id' => 31,
                'name' => '嵊州市',
                'status' => 1,
            ),
            402 => 
            array (
                'id' => 2903,
                'city_id' => 355,
                'province_id' => 31,
                'name' => '绍兴县',
                'status' => 1,
            ),
            403 => 
            array (
                'id' => 2904,
                'city_id' => 355,
                'province_id' => 31,
                'name' => '新昌县',
                'status' => 1,
            ),
            404 => 
            array (
                'id' => 2905,
                'city_id' => 355,
                'province_id' => 31,
                'name' => '诸暨市',
                'status' => 1,
            ),
            405 => 
            array (
                'id' => 2906,
                'city_id' => 356,
                'province_id' => 31,
                'name' => '椒江区',
                'status' => 1,
            ),
            406 => 
            array (
                'id' => 2907,
                'city_id' => 356,
                'province_id' => 31,
                'name' => '黄岩区',
                'status' => 1,
            ),
            407 => 
            array (
                'id' => 2908,
                'city_id' => 356,
                'province_id' => 31,
                'name' => '路桥区',
                'status' => 1,
            ),
            408 => 
            array (
                'id' => 2909,
                'city_id' => 356,
                'province_id' => 31,
                'name' => '温岭市',
                'status' => 1,
            ),
            409 => 
            array (
                'id' => 2910,
                'city_id' => 356,
                'province_id' => 31,
                'name' => '临海市',
                'status' => 1,
            ),
            410 => 
            array (
                'id' => 2911,
                'city_id' => 356,
                'province_id' => 31,
                'name' => '玉环县',
                'status' => 1,
            ),
            411 => 
            array (
                'id' => 2912,
                'city_id' => 356,
                'province_id' => 31,
                'name' => '三门县',
                'status' => 1,
            ),
            412 => 
            array (
                'id' => 2913,
                'city_id' => 356,
                'province_id' => 31,
                'name' => '天台县',
                'status' => 1,
            ),
            413 => 
            array (
                'id' => 2914,
                'city_id' => 356,
                'province_id' => 31,
                'name' => '仙居县',
                'status' => 1,
            ),
            414 => 
            array (
                'id' => 2915,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '鹿城区',
                'status' => 1,
            ),
            415 => 
            array (
                'id' => 2916,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '龙湾区',
                'status' => 1,
            ),
            416 => 
            array (
                'id' => 2917,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '瓯海区',
                'status' => 1,
            ),
            417 => 
            array (
                'id' => 2918,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '瑞安市',
                'status' => 1,
            ),
            418 => 
            array (
                'id' => 2919,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '乐清市',
                'status' => 1,
            ),
            419 => 
            array (
                'id' => 2920,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '洞头县',
                'status' => 1,
            ),
            420 => 
            array (
                'id' => 2921,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '永嘉县',
                'status' => 1,
            ),
            421 => 
            array (
                'id' => 2922,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '平阳县',
                'status' => 1,
            ),
            422 => 
            array (
                'id' => 2923,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '苍南县',
                'status' => 1,
            ),
            423 => 
            array (
                'id' => 2924,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '文成县',
                'status' => 1,
            ),
            424 => 
            array (
                'id' => 2925,
                'city_id' => 357,
                'province_id' => 31,
                'name' => '泰顺县',
                'status' => 1,
            ),
            425 => 
            array (
                'id' => 2926,
                'city_id' => 358,
                'province_id' => 31,
                'name' => '定海区',
                'status' => 1,
            ),
            426 => 
            array (
                'id' => 2927,
                'city_id' => 358,
                'province_id' => 31,
                'name' => '普陀区',
                'status' => 1,
            ),
            427 => 
            array (
                'id' => 2928,
                'city_id' => 358,
                'province_id' => 31,
                'name' => '岱山县',
                'status' => 1,
            ),
            428 => 
            array (
                'id' => 2929,
                'city_id' => 358,
                'province_id' => 31,
                'name' => '嵊泗县',
                'status' => 1,
            ),
            429 => 
            array (
                'id' => 2930,
                'city_id' => 359,
                'province_id' => 31,
                'name' => '衢州市',
                'status' => 1,
            ),
            430 => 
            array (
                'id' => 2931,
                'city_id' => 359,
                'province_id' => 31,
                'name' => '江山市',
                'status' => 1,
            ),
            431 => 
            array (
                'id' => 2932,
                'city_id' => 359,
                'province_id' => 31,
                'name' => '常山县',
                'status' => 1,
            ),
            432 => 
            array (
                'id' => 2933,
                'city_id' => 359,
                'province_id' => 31,
                'name' => '开化县',
                'status' => 1,
            ),
            433 => 
            array (
                'id' => 2934,
                'city_id' => 359,
                'province_id' => 31,
                'name' => '龙游县',
                'status' => 1,
            ),
            434 => 
            array (
                'id' => 2935,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '合川区',
                'status' => 1,
            ),
            435 => 
            array (
                'id' => 2936,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '江津区',
                'status' => 1,
            ),
            436 => 
            array (
                'id' => 2937,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '南川区',
                'status' => 1,
            ),
            437 => 
            array (
                'id' => 2938,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '永川区',
                'status' => 1,
            ),
            438 => 
            array (
                'id' => 2939,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '南岸区',
                'status' => 1,
            ),
            439 => 
            array (
                'id' => 2940,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '渝北区',
                'status' => 1,
            ),
            440 => 
            array (
                'id' => 2941,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '万盛区',
                'status' => 1,
            ),
            441 => 
            array (
                'id' => 2942,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '大渡口区',
                'status' => 1,
            ),
            442 => 
            array (
                'id' => 2943,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '万州区',
                'status' => 1,
            ),
            443 => 
            array (
                'id' => 2944,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '北碚区',
                'status' => 1,
            ),
            444 => 
            array (
                'id' => 2945,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '沙坪坝区',
                'status' => 1,
            ),
            445 => 
            array (
                'id' => 2946,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '巴南区',
                'status' => 1,
            ),
            446 => 
            array (
                'id' => 2947,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '涪陵区',
                'status' => 1,
            ),
            447 => 
            array (
                'id' => 2948,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '江北区',
                'status' => 1,
            ),
            448 => 
            array (
                'id' => 2949,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '九龙坡区',
                'status' => 1,
            ),
            449 => 
            array (
                'id' => 2950,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '渝中区',
                'status' => 1,
            ),
            450 => 
            array (
                'id' => 2951,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '黔江开发区',
                'status' => 1,
            ),
            451 => 
            array (
                'id' => 2952,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '长寿区',
                'status' => 1,
            ),
            452 => 
            array (
                'id' => 2953,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '双桥区',
                'status' => 1,
            ),
            453 => 
            array (
                'id' => 2954,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '綦江县',
                'status' => 1,
            ),
            454 => 
            array (
                'id' => 2955,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '潼南县',
                'status' => 1,
            ),
            455 => 
            array (
                'id' => 2956,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '铜梁县',
                'status' => 1,
            ),
            456 => 
            array (
                'id' => 2957,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '大足县',
                'status' => 1,
            ),
            457 => 
            array (
                'id' => 2958,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '荣昌县',
                'status' => 1,
            ),
            458 => 
            array (
                'id' => 2959,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '璧山县',
                'status' => 1,
            ),
            459 => 
            array (
                'id' => 2960,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '垫江县',
                'status' => 1,
            ),
            460 => 
            array (
                'id' => 2961,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '武隆县',
                'status' => 1,
            ),
            461 => 
            array (
                'id' => 2962,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '丰都县',
                'status' => 1,
            ),
            462 => 
            array (
                'id' => 2963,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '城口县',
                'status' => 1,
            ),
            463 => 
            array (
                'id' => 2964,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '梁平县',
                'status' => 1,
            ),
            464 => 
            array (
                'id' => 2965,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '开县',
                'status' => 1,
            ),
            465 => 
            array (
                'id' => 2966,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '巫溪县',
                'status' => 1,
            ),
            466 => 
            array (
                'id' => 2967,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '巫山县',
                'status' => 1,
            ),
            467 => 
            array (
                'id' => 2968,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '奉节县',
                'status' => 1,
            ),
            468 => 
            array (
                'id' => 2969,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '云阳县',
                'status' => 1,
            ),
            469 => 
            array (
                'id' => 2970,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '忠县',
                'status' => 1,
            ),
            470 => 
            array (
                'id' => 2971,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '石柱',
                'status' => 1,
            ),
            471 => 
            array (
                'id' => 2972,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '彭水',
                'status' => 1,
            ),
            472 => 
            array (
                'id' => 2973,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '酉阳',
                'status' => 1,
            ),
            473 => 
            array (
                'id' => 2974,
                'city_id' => 360,
                'province_id' => 32,
                'name' => '秀山',
                'status' => 1,
            ),
            474 => 
            array (
                'id' => 2975,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '沙田区',
                'status' => 1,
            ),
            475 => 
            array (
                'id' => 2976,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '东区',
                'status' => 1,
            ),
            476 => 
            array (
                'id' => 2977,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '观塘区',
                'status' => 1,
            ),
            477 => 
            array (
                'id' => 2978,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '黄大仙区',
                'status' => 1,
            ),
            478 => 
            array (
                'id' => 2979,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '九龙城区',
                'status' => 1,
            ),
            479 => 
            array (
                'id' => 2980,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '屯门区',
                'status' => 1,
            ),
            480 => 
            array (
                'id' => 2981,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '葵青区',
                'status' => 1,
            ),
            481 => 
            array (
                'id' => 2982,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '元朗区',
                'status' => 1,
            ),
            482 => 
            array (
                'id' => 2983,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '深水埗区',
                'status' => 1,
            ),
            483 => 
            array (
                'id' => 2984,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '西贡区',
                'status' => 1,
            ),
            484 => 
            array (
                'id' => 2985,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '大埔区',
                'status' => 1,
            ),
            485 => 
            array (
                'id' => 2986,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '湾仔区',
                'status' => 1,
            ),
            486 => 
            array (
                'id' => 2987,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '油尖旺区',
                'status' => 1,
            ),
            487 => 
            array (
                'id' => 2988,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '北区',
                'status' => 1,
            ),
            488 => 
            array (
                'id' => 2989,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '南区',
                'status' => 1,
            ),
            489 => 
            array (
                'id' => 2990,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '荃湾区',
                'status' => 1,
            ),
            490 => 
            array (
                'id' => 2991,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '中西区',
                'status' => 1,
            ),
            491 => 
            array (
                'id' => 2992,
                'city_id' => 361,
                'province_id' => 33,
                'name' => '离岛区',
                'status' => 1,
            ),
            492 => 
            array (
                'id' => 2993,
                'city_id' => 362,
                'province_id' => 34,
                'name' => '澳门',
                'status' => 1,
            ),
            493 => 
            array (
                'id' => 2994,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '台北',
                'status' => 1,
            ),
            494 => 
            array (
                'id' => 2995,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '高雄',
                'status' => 1,
            ),
            495 => 
            array (
                'id' => 2996,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '基隆',
                'status' => 1,
            ),
            496 => 
            array (
                'id' => 2997,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '台中',
                'status' => 1,
            ),
            497 => 
            array (
                'id' => 2998,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '台南',
                'status' => 1,
            ),
            498 => 
            array (
                'id' => 2999,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '新竹',
                'status' => 1,
            ),
            499 => 
            array (
                'id' => 3000,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '嘉义',
                'status' => 1,
            ),
        ));
        \DB::table('geo_districts')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '宜兰县',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 3002,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '桃园县',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 3003,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '苗栗县',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 3004,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '彰化县',
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 3005,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '南投县',
                'status' => 1,
            ),
            5 => 
            array (
                'id' => 3006,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '云林县',
                'status' => 1,
            ),
            6 => 
            array (
                'id' => 3007,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '屏东县',
                'status' => 1,
            ),
            7 => 
            array (
                'id' => 3008,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '台东县',
                'status' => 1,
            ),
            8 => 
            array (
                'id' => 3009,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '花莲县',
                'status' => 1,
            ),
            9 => 
            array (
                'id' => 3010,
                'city_id' => 363,
                'province_id' => 35,
                'name' => '澎湖县',
                'status' => 1,
            ),
        ));
        
        
    }
}