<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedCities();
    }


    private function seedCities()
    {
        foreach ($this->generateCities() as $city) {
            City::firstOrCreate($city);
        }
    }

    private function generateCities()
    {
        foreach ($this->cities() as $city) {
            yield $city;
        }
    }

    private function cities()
    {
        return array(
            0 =>
            array(
                'name' => 'Caloocan',
                'province' => 'MM',
                'city' => true,
            ),
            1 =>
            array(
                'name' => 'Las Piñas',
                'province' => 'MM',
                'city' => true,
            ),
            2 =>
            array(
                'name' => 'Makati',
                'province' => 'MM',
                'city' => true,
            ),
            3 =>
            array(
                'name' => 'Malabon',
                'province' => 'MM',
                'city' => true,
            ),
            4 =>
            array(
                'name' => 'Mandaluyong',
                'province' => 'MM',
                'city' => true,
            ),
            5 =>
            array(
                'name' => 'Manila',
                'province' => 'MM',
                'city' => true,
            ),
            6 =>
            array(
                'name' => 'Marikina',
                'province' => 'MM',
                'city' => true,
            ),
            7 =>
            array(
                'name' => 'Muntinlupa',
                'province' => 'MM',
                'city' => true,
            ),
            8 =>
            array(
                'name' => 'Navotas',
                'province' => 'MM',
                'city' => true,
            ),
            9 =>
            array(
                'name' => 'Parañaque',
                'province' => 'MM',
                'city' => true,
            ),
            10 =>
            array(
                'name' => 'Pasay',
                'province' => 'MM',
                'city' => true,
            ),
            11 =>
            array(
                'name' => 'Pasig',
                'province' => 'MM',
                'city' => true,
            ),
            12 =>
            array(
                'name' => 'Pateros',
                'province' => 'MM',
            ),
            13 =>
            array(
                'name' => 'Quezon',
                'province' => 'MM',
                'city' => true,
            ),
            14 =>
            array(
                'name' => 'San Juan',
                'province' => 'MM',
                'city' => true,
            ),
            15 =>
            array(
                'name' => 'Taguig',
                'province' => 'MM',
                'city' => true,
            ),
            16 =>
            array(
                'name' => 'Valenzuela',
                'province' => 'MM',
                'city' => true,
            ),
            17 =>
            array(
                'name' => 'Bangued',
                'province' => 'ABR',
            ),
            18 =>
            array(
                'name' => 'Boliney',
                'province' => 'ABR',
            ),
            19 =>
            array(
                'name' => 'Bucay',
                'province' => 'ABR',
            ),
            20 =>
            array(
                'name' => 'Bucloc',
                'province' => 'ABR',
            ),
            21 =>
            array(
                'name' => 'Daguioman',
                'province' => 'ABR',
            ),
            22 =>
            array(
                'name' => 'Danglas',
                'province' => 'ABR',
            ),
            23 =>
            array(
                'name' => 'Dolores',
                'province' => 'ABR',
            ),
            24 =>
            array(
                'name' => 'La Paz',
                'province' => 'ABR',
            ),
            25 =>
            array(
                'name' => 'Lacub',
                'province' => 'ABR',
            ),
            26 =>
            array(
                'name' => 'Lagangilang',
                'province' => 'ABR',
            ),
            27 =>
            array(
                'name' => 'Lagayan',
                'province' => 'ABR',
            ),
            28 =>
            array(
                'name' => 'Langiden',
                'province' => 'ABR',
            ),
            29 =>
            array(
                'name' => 'Licuan-Baay',
                'province' => 'ABR',
            ),
            30 =>
            array(
                'name' => 'Luba',
                'province' => 'ABR',
            ),
            31 =>
            array(
                'name' => 'Malibcong',
                'province' => 'ABR',
            ),
            32 =>
            array(
                'name' => 'Manabo',
                'province' => 'ABR',
            ),
            33 =>
            array(
                'name' => 'Peñarrubia',
                'province' => 'ABR',
            ),
            34 =>
            array(
                'name' => 'Pidigan',
                'province' => 'ABR',
            ),
            35 =>
            array(
                'name' => 'Pilar',
                'province' => 'ABR',
            ),
            36 =>
            array(
                'name' => 'Sallapadan',
                'province' => 'ABR',
            ),
            37 =>
            array(
                'name' => 'San Isidro',
                'province' => 'ABR',
            ),
            38 =>
            array(
                'name' => 'San Juan',
                'province' => 'ABR',
            ),
            39 =>
            array(
                'name' => 'San Quintin',
                'province' => 'ABR',
            ),
            40 =>
            array(
                'name' => 'Tayum',
                'province' => 'ABR',
            ),
            41 =>
            array(
                'name' => 'Tineg',
                'province' => 'ABR',
            ),
            42 =>
            array(
                'name' => 'Tubo',
                'province' => 'ABR',
            ),
            43 =>
            array(
                'name' => 'Villaviciosa',
                'province' => 'ABR',
            ),
            44 =>
            array(
                'name' => 'Calanasan',
                'province' => 'APA',
            ),
            45 =>
            array(
                'name' => 'Conner',
                'province' => 'APA',
            ),
            46 =>
            array(
                'name' => 'Flora',
                'province' => 'APA',
            ),
            47 =>
            array(
                'name' => 'Kabugao',
                'province' => 'APA',
            ),
            48 =>
            array(
                'name' => 'Luna',
                'province' => 'APA',
            ),
            49 =>
            array(
                'name' => 'Pudtol',
                'province' => 'APA',
            ),
            50 =>
            array(
                'name' => 'Santa Marcela',
                'province' => 'APA',
            ),
            51 =>
            array(
                'name' => 'Atok',
                'province' => 'BEN',
            ),
            52 =>
            array(
                'name' => 'Baguio',
                'province' => 'BEN',
                'city' => true,
            ),
            53 =>
            array(
                'name' => 'Bakun',
                'province' => 'BEN',
            ),
            54 =>
            array(
                'name' => 'Bokod',
                'province' => 'BEN',
            ),
            55 =>
            array(
                'name' => 'Buguias',
                'province' => 'BEN',
            ),
            56 =>
            array(
                'name' => 'Itogon',
                'province' => 'BEN',
            ),
            57 =>
            array(
                'name' => 'Kabayan',
                'province' => 'BEN',
            ),
            58 =>
            array(
                'name' => 'Kapangan',
                'province' => 'BEN',
            ),
            59 =>
            array(
                'name' => 'Kibungan',
                'province' => 'BEN',
            ),
            60 =>
            array(
                'name' => 'La Trinidad',
                'province' => 'BEN',
            ),
            61 =>
            array(
                'name' => 'Mankayan',
                'province' => 'BEN',
            ),
            62 =>
            array(
                'name' => 'Sablan',
                'province' => 'BEN',
            ),
            63 =>
            array(
                'name' => 'Tuba',
                'province' => 'BEN',
            ),
            64 =>
            array(
                'name' => 'Tublay',
                'province' => 'BEN',
            ),
            65 =>
            array(
                'name' => 'Aguinaldo',
                'province' => 'IFU',
            ),
            66 =>
            array(
                'name' => 'Alfonso Lista',
                'province' => 'IFU',
            ),
            67 =>
            array(
                'name' => 'Asipulo',
                'province' => 'IFU',
            ),
            68 =>
            array(
                'name' => 'Banaue',
                'province' => 'IFU',
            ),
            69 =>
            array(
                'name' => 'Hingyon',
                'province' => 'IFU',
            ),
            70 =>
            array(
                'name' => 'Hungduan',
                'province' => 'IFU',
            ),
            71 =>
            array(
                'name' => 'Kiangan',
                'province' => 'IFU',
            ),
            72 =>
            array(
                'name' => 'Lagawe',
                'province' => 'IFU',
            ),
            73 =>
            array(
                'name' => 'Lamut',
                'province' => 'IFU',
            ),
            74 =>
            array(
                'name' => 'Mayoyao',
                'province' => 'IFU',
            ),
            75 =>
            array(
                'name' => 'Tinoc',
                'province' => 'IFU',
            ),
            76 =>
            array(
                'name' => 'Balbalan',
                'province' => 'KAL',
            ),
            77 =>
            array(
                'name' => 'Lubuagan',
                'province' => 'KAL',
            ),
            78 =>
            array(
                'name' => 'Pasil',
                'province' => 'KAL',
            ),
            79 =>
            array(
                'name' => 'Pinukpuk',
                'province' => 'KAL',
            ),
            80 =>
            array(
                'name' => 'Rizal',
                'province' => 'KAL',
            ),
            81 =>
            array(
                'name' => 'Tabuk',
                'province' => 'KAL',
                'city' => true,
            ),
            82 =>
            array(
                'name' => 'Tanudan',
                'province' => 'KAL',
            ),
            83 =>
            array(
                'name' => 'Tinglayan',
                'province' => 'KAL',
            ),
            84 =>
            array(
                'name' => 'Barlig',
                'province' => 'MOU',
            ),
            85 =>
            array(
                'name' => 'Bauko',
                'province' => 'MOU',
            ),
            86 =>
            array(
                'name' => 'Besao',
                'province' => 'MOU',
            ),
            87 =>
            array(
                'name' => 'Bontoc',
                'province' => 'MOU',
            ),
            88 =>
            array(
                'name' => 'Natonin',
                'province' => 'MOU',
            ),
            89 =>
            array(
                'name' => 'Paracelis',
                'province' => 'MOU',
            ),
            90 =>
            array(
                'name' => 'Sabangan',
                'province' => 'MOU',
            ),
            91 =>
            array(
                'name' => 'Sadanga',
                'province' => 'MOU',
            ),
            92 =>
            array(
                'name' => 'Sagada',
                'province' => 'MOU',
            ),
            93 =>
            array(
                'name' => 'Tadian',
                'province' => 'MOU',
            ),
            94 =>
            array(
                'name' => 'Adams',
                'province' => 'ILN',
            ),
            95 =>
            array(
                'name' => 'Bacarra',
                'province' => 'ILN',
            ),
            96 =>
            array(
                'name' => 'Badoc',
                'province' => 'ILN',
            ),
            97 =>
            array(
                'name' => 'Bangui',
                'province' => 'ILN',
            ),
            98 =>
            array(
                'name' => 'Banna',
                'province' => 'ILN',
            ),
            99 =>
            array(
                'name' => 'Batac',
                'province' => 'ILN',
                'city' => true,
            ),
            100 =>
            array(
                'name' => 'Burgos',
                'province' => 'ILN',
            ),
            101 =>
            array(
                'name' => 'Carasi',
                'province' => 'ILN',
            ),
            102 =>
            array(
                'name' => 'Currimao',
                'province' => 'ILN',
            ),
            103 =>
            array(
                'name' => 'Dingras',
                'province' => 'ILN',
            ),
            104 =>
            array(
                'name' => 'Dumalneg',
                'province' => 'ILN',
            ),
            105 =>
            array(
                'name' => 'Laoag',
                'province' => 'ILN',
                'city' => true,
            ),
            106 =>
            array(
                'name' => 'Marcos',
                'province' => 'ILN',
            ),
            107 =>
            array(
                'name' => 'Nueva Era',
                'province' => 'ILN',
            ),
            108 =>
            array(
                'name' => 'Pagudpud',
                'province' => 'ILN',
            ),
            109 =>
            array(
                'name' => 'Paoay',
                'province' => 'ILN',
            ),
            110 =>
            array(
                'name' => 'Pasuquin',
                'province' => 'ILN',
            ),
            111 =>
            array(
                'name' => 'Piddig',
                'province' => 'ILN',
            ),
            112 =>
            array(
                'name' => 'Pinili',
                'province' => 'ILN',
            ),
            113 =>
            array(
                'name' => 'San Nicolas',
                'province' => 'ILN',
            ),
            114 =>
            array(
                'name' => 'Sarrat',
                'province' => 'ILN',
            ),
            115 =>
            array(
                'name' => 'Solsona',
                'province' => 'ILN',
            ),
            116 =>
            array(
                'name' => 'Vintar',
                'province' => 'ILN',
            ),
            117 =>
            array(
                'name' => 'Alilem',
                'province' => 'ILS',
            ),
            118 =>
            array(
                'name' => 'Banayoyo',
                'province' => 'ILS',
            ),
            119 =>
            array(
                'name' => 'Bantay',
                'province' => 'ILS',
            ),
            120 =>
            array(
                'name' => 'Burgos',
                'province' => 'ILS',
            ),
            121 =>
            array(
                'name' => 'Cabugao',
                'province' => 'ILS',
            ),
            122 =>
            array(
                'name' => 'Candon',
                'province' => 'ILS',
                'city' => true,
            ),
            123 =>
            array(
                'name' => 'Caoayan',
                'province' => 'ILS',
            ),
            124 =>
            array(
                'name' => 'Cervantes',
                'province' => 'ILS',
            ),
            125 =>
            array(
                'name' => 'Galimuyod',
                'province' => 'ILS',
            ),
            126 =>
            array(
                'name' => 'Gregorio Del Pilar',
                'province' => 'ILS',
            ),
            127 =>
            array(
                'name' => 'Lidlidda',
                'province' => 'ILS',
            ),
            128 =>
            array(
                'name' => 'Magsingal',
                'province' => 'ILS',
            ),
            129 =>
            array(
                'name' => 'Nagbukel',
                'province' => 'ILS',
            ),
            130 =>
            array(
                'name' => 'Narvacan',
                'province' => 'ILS',
            ),
            131 =>
            array(
                'name' => 'Quirino',
                'province' => 'ILS',
            ),
            132 =>
            array(
                'name' => 'Salcedo',
                'province' => 'ILS',
            ),
            133 =>
            array(
                'name' => 'San Emilio',
                'province' => 'ILS',
            ),
            134 =>
            array(
                'name' => 'San Esteban',
                'province' => 'ILS',
            ),
            135 =>
            array(
                'name' => 'San Ildefonso',
                'province' => 'ILS',
            ),
            136 =>
            array(
                'name' => 'San Juan',
                'province' => 'ILS',
            ),
            137 =>
            array(
                'name' => 'San Vicente',
                'province' => 'ILS',
            ),
            138 =>
            array(
                'name' => 'Santa',
                'province' => 'ILS',
            ),
            139 =>
            array(
                'name' => 'Santa Catalina',
                'province' => 'ILS',
            ),
            140 =>
            array(
                'name' => 'Santa Cruz',
                'province' => 'ILS',
            ),
            141 =>
            array(
                'name' => 'Santa Lucia',
                'province' => 'ILS',
            ),
            142 =>
            array(
                'name' => 'Santa Maria',
                'province' => 'ILS',
            ),
            143 =>
            array(
                'name' => 'Santiago',
                'province' => 'ILS',
            ),
            144 =>
            array(
                'name' => 'Santo Domingo',
                'province' => 'ILS',
            ),
            145 =>
            array(
                'name' => 'Sigay',
                'province' => 'ILS',
            ),
            146 =>
            array(
                'name' => 'Sinait',
                'province' => 'ILS',
            ),
            147 =>
            array(
                'name' => 'Sugpon',
                'province' => 'ILS',
            ),
            148 =>
            array(
                'name' => 'Suyo',
                'province' => 'ILS',
            ),
            149 =>
            array(
                'name' => 'Tagudin',
                'province' => 'ILS',
            ),
            150 =>
            array(
                'name' => 'Vigan',
                'province' => 'ILS',
                'city' => true,
            ),
            151 =>
            array(
                'name' => 'Agoo',
                'province' => 'LUN',
            ),
            152 =>
            array(
                'name' => 'Aringay',
                'province' => 'LUN',
            ),
            153 =>
            array(
                'name' => 'Bacnotan',
                'province' => 'LUN',
            ),
            154 =>
            array(
                'name' => 'Bagulin',
                'province' => 'LUN',
            ),
            155 =>
            array(
                'name' => 'Balaoan',
                'province' => 'LUN',
            ),
            156 =>
            array(
                'name' => 'Bangar',
                'province' => 'LUN',
            ),
            157 =>
            array(
                'name' => 'Bauang',
                'province' => 'LUN',
            ),
            158 =>
            array(
                'name' => 'Burgos',
                'province' => 'LUN',
            ),
            159 =>
            array(
                'name' => 'Caba',
                'province' => 'LUN',
            ),
            160 =>
            array(
                'name' => 'Luna',
                'province' => 'LUN',
            ),
            161 =>
            array(
                'name' => 'Naguilian',
                'province' => 'LUN',
            ),
            162 =>
            array(
                'name' => 'Pugo',
                'province' => 'LUN',
            ),
            163 =>
            array(
                'name' => 'Rosario',
                'province' => 'LUN',
            ),
            164 =>
            array(
                'name' => 'San Fernando',
                'province' => 'LUN',
                'city' => true,
            ),
            165 =>
            array(
                'name' => 'San Gabriel',
                'province' => 'LUN',
            ),
            166 =>
            array(
                'name' => 'San Juan',
                'province' => 'LUN',
            ),
            167 =>
            array(
                'name' => 'Santo Tomas',
                'province' => 'LUN',
            ),
            168 =>
            array(
                'name' => 'Santol',
                'province' => 'LUN',
            ),
            169 =>
            array(
                'name' => 'Sudipen',
                'province' => 'LUN',
            ),
            170 =>
            array(
                'name' => 'Tubao',
                'province' => 'LUN',
            ),
            171 =>
            array(
                'name' => 'Agno',
                'province' => 'PAN',
            ),
            172 =>
            array(
                'name' => 'Aguilar',
                'province' => 'PAN',
            ),
            173 =>
            array(
                'name' => 'Alaminos',
                'province' => 'PAN',
                'city' => true,
            ),
            174 =>
            array(
                'name' => 'Alcala',
                'province' => 'PAN',
            ),
            175 =>
            array(
                'name' => 'Anda',
                'province' => 'PAN',
            ),
            176 =>
            array(
                'name' => 'Asingan',
                'province' => 'PAN',
            ),
            177 =>
            array(
                'name' => 'Balungao',
                'province' => 'PAN',
            ),
            178 =>
            array(
                'name' => 'Bani',
                'province' => 'PAN',
            ),
            179 =>
            array(
                'name' => 'Basista',
                'province' => 'PAN',
            ),
            180 =>
            array(
                'name' => 'Bautista',
                'province' => 'PAN',
            ),
            181 =>
            array(
                'name' => 'Bayambang',
                'province' => 'PAN',
            ),
            182 =>
            array(
                'name' => 'Binalonan',
                'province' => 'PAN',
            ),
            183 =>
            array(
                'name' => 'Binmaley',
                'province' => 'PAN',
            ),
            184 =>
            array(
                'name' => 'Bolinao',
                'province' => 'PAN',
            ),
            185 =>
            array(
                'name' => 'Bugallon',
                'province' => 'PAN',
            ),
            186 =>
            array(
                'name' => 'Burgos',
                'province' => 'PAN',
            ),
            187 =>
            array(
                'name' => 'Calasiao',
                'province' => 'PAN',
            ),
            188 =>
            array(
                'name' => 'Dagupan',
                'province' => 'PAN',
                'city' => true,
            ),
            189 =>
            array(
                'name' => 'Dasol',
                'province' => 'PAN',
            ),
            190 =>
            array(
                'name' => 'Infanta',
                'province' => 'PAN',
            ),
            191 =>
            array(
                'name' => 'Labrador',
                'province' => 'PAN',
            ),
            192 =>
            array(
                'name' => 'Laoac',
                'province' => 'PAN',
            ),
            193 =>
            array(
                'name' => 'Lingayen',
                'province' => 'PAN',
            ),
            194 =>
            array(
                'name' => 'Mabini',
                'province' => 'PAN',
            ),
            195 =>
            array(
                'name' => 'Malasiqui',
                'province' => 'PAN',
            ),
            196 =>
            array(
                'name' => 'Manaoag',
                'province' => 'PAN',
            ),
            197 =>
            array(
                'name' => 'Mangaldan',
                'province' => 'PAN',
            ),
            198 =>
            array(
                'name' => 'Mangatarem',
                'province' => 'PAN',
            ),
            199 =>
            array(
                'name' => 'Mapandan',
                'province' => 'PAN',
            ),
            200 =>
            array(
                'name' => 'Natividad',
                'province' => 'PAN',
            ),
            201 =>
            array(
                'name' => 'Pozzorubio',
                'province' => 'PAN',
            ),
            202 =>
            array(
                'name' => 'Rosales',
                'province' => 'PAN',
            ),
            203 =>
            array(
                'name' => 'San Carlos',
                'province' => 'PAN',
                'city' => true,
            ),
            204 =>
            array(
                'name' => 'San Fabian',
                'province' => 'PAN',
            ),
            205 =>
            array(
                'name' => 'San Jacinto',
                'province' => 'PAN',
            ),
            206 =>
            array(
                'name' => 'San Manuel',
                'province' => 'PAN',
            ),
            207 =>
            array(
                'name' => 'San Nicolas',
                'province' => 'PAN',
            ),
            208 =>
            array(
                'name' => 'San Quintin',
                'province' => 'PAN',
            ),
            209 =>
            array(
                'name' => 'Santa Barbara',
                'province' => 'PAN',
            ),
            210 =>
            array(
                'name' => 'Santa Maria',
                'province' => 'PAN',
            ),
            211 =>
            array(
                'name' => 'Santo Tomas',
                'province' => 'PAN',
            ),
            212 =>
            array(
                'name' => 'Sison',
                'province' => 'PAN',
            ),
            213 =>
            array(
                'name' => 'Sual',
                'province' => 'PAN',
            ),
            214 =>
            array(
                'name' => 'Tayug',
                'province' => 'PAN',
            ),
            215 =>
            array(
                'name' => 'Umingan',
                'province' => 'PAN',
            ),
            216 =>
            array(
                'name' => 'Urdaneta',
                'province' => 'PAN',
                'city' => true,
            ),
            217 =>
            array(
                'name' => 'Urbiztondo',
                'province' => 'PAN',
            ),
            218 =>
            array(
                'name' => 'Villasis',
                'province' => 'PAN',
            ),
            219 =>
            array(
                'name' => 'Basco',
                'province' => 'BTN',
            ),
            220 =>
            array(
                'name' => 'Itbayat',
                'province' => 'BTN',
            ),
            221 =>
            array(
                'name' => 'Ivana',
                'province' => 'BTN',
            ),
            222 =>
            array(
                'name' => 'Mahatao',
                'province' => 'BTN',
            ),
            223 =>
            array(
                'name' => 'Sabtang',
                'province' => 'BTN',
            ),
            224 =>
            array(
                'name' => 'Uyugan',
                'province' => 'BTN',
            ),
            225 =>
            array(
                'name' => 'Abulug',
                'province' => 'CAG',
            ),
            226 =>
            array(
                'name' => 'Alcala',
                'province' => 'CAG',
            ),
            227 =>
            array(
                'name' => 'Allacapan',
                'province' => 'CAG',
            ),
            228 =>
            array(
                'name' => 'Amulung',
                'province' => 'CAG',
            ),
            229 =>
            array(
                'name' => 'Aparri',
                'province' => 'CAG',
            ),
            230 =>
            array(
                'name' => 'Baggao',
                'province' => 'CAG',
            ),
            231 =>
            array(
                'name' => 'Ballesteros',
                'province' => 'CAG',
            ),
            232 =>
            array(
                'name' => 'Buguey',
                'province' => 'CAG',
            ),
            233 =>
            array(
                'name' => 'Calayan',
                'province' => 'CAG',
            ),
            234 =>
            array(
                'name' => 'Camalaniugan',
                'province' => 'CAG',
            ),
            235 =>
            array(
                'name' => 'Claveria',
                'province' => 'CAG',
            ),
            236 =>
            array(
                'name' => 'Enrile',
                'province' => 'CAG',
            ),
            237 =>
            array(
                'name' => 'Gattaran',
                'province' => 'CAG',
            ),
            238 =>
            array(
                'name' => 'Gonzaga',
                'province' => 'CAG',
            ),
            239 =>
            array(
                'name' => 'Iguig',
                'province' => 'CAG',
            ),
            240 =>
            array(
                'name' => 'Lal-lo',
                'province' => 'CAG',
            ),
            241 =>
            array(
                'name' => 'Lasam',
                'province' => 'CAG',
            ),
            242 =>
            array(
                'name' => 'Pamplona',
                'province' => 'CAG',
            ),
            243 =>
            array(
                'name' => 'Peñablanca',
                'province' => 'CAG',
            ),
            244 =>
            array(
                'name' => 'Piat',
                'province' => 'CAG',
            ),
            245 =>
            array(
                'name' => 'Rizal',
                'province' => 'CAG',
            ),
            246 =>
            array(
                'name' => 'Sanchez-Mira',
                'province' => 'CAG',
            ),
            247 =>
            array(
                'name' => 'Santa Ana',
                'province' => 'CAG',
            ),
            248 =>
            array(
                'name' => 'Santa Praxedes',
                'province' => 'CAG',
            ),
            249 =>
            array(
                'name' => 'Santa Teresita',
                'province' => 'CAG',
            ),
            250 =>
            array(
                'name' => 'Santo Niño',
                'province' => 'CAG',
            ),
            251 =>
            array(
                'name' => 'Solana',
                'province' => 'CAG',
            ),
            252 =>
            array(
                'name' => 'Tuao',
                'province' => 'CAG',
            ),
            253 =>
            array(
                'name' => 'Tuguegarao',
                'province' => 'CAG',
                'city' => true,
            ),
            254 =>
            array(
                'name' => 'Alicia',
                'province' => 'ISA',
            ),
            255 =>
            array(
                'name' => 'Angadanan',
                'province' => 'ISA',
            ),
            256 =>
            array(
                'name' => 'Aurora',
                'province' => 'ISA',
            ),
            257 =>
            array(
                'name' => 'Benito Soliven',
                'province' => 'ISA',
            ),
            258 =>
            array(
                'name' => 'Burgos',
                'province' => 'ISA',
            ),
            259 =>
            array(
                'name' => 'Cabagan',
                'province' => 'ISA',
            ),
            260 =>
            array(
                'name' => 'Cabatuan',
                'province' => 'ISA',
            ),
            261 =>
            array(
                'name' => 'Cauayan',
                'province' => 'ISA',
                'city' => true,
            ),
            262 =>
            array(
                'name' => 'Cordon',
                'province' => 'ISA',
            ),
            263 =>
            array(
                'name' => 'Delfin Albano',
                'province' => 'ISA',
            ),
            264 =>
            array(
                'name' => 'Dinapigue',
                'province' => 'ISA',
            ),
            265 =>
            array(
                'name' => 'Divilacan',
                'province' => 'ISA',
            ),
            266 =>
            array(
                'name' => 'Echague',
                'province' => 'ISA',
            ),
            267 =>
            array(
                'name' => 'Gamu',
                'province' => 'ISA',
            ),
            268 =>
            array(
                'name' => 'Ilagan',
                'province' => 'ISA',
                'city' => true,
            ),
            269 =>
            array(
                'name' => 'Jones',
                'province' => 'ISA',
            ),
            270 =>
            array(
                'name' => 'Luna',
                'province' => 'ISA',
            ),
            271 =>
            array(
                'name' => 'Maconacon',
                'province' => 'ISA',
            ),
            272 =>
            array(
                'name' => 'Mallig',
                'province' => 'ISA',
            ),
            273 =>
            array(
                'name' => 'Naguilian',
                'province' => 'ISA',
            ),
            274 =>
            array(
                'name' => 'Palanan',
                'province' => 'ISA',
            ),
            275 =>
            array(
                'name' => 'Quezon',
                'province' => 'ISA',
            ),
            276 =>
            array(
                'name' => 'Quirino',
                'province' => 'ISA',
            ),
            277 =>
            array(
                'name' => 'Ramon',
                'province' => 'ISA',
            ),
            278 =>
            array(
                'name' => 'Reina Mercedes',
                'province' => 'ISA',
            ),
            279 =>
            array(
                'name' => 'Roxas',
                'province' => 'ISA',
            ),
            280 =>
            array(
                'name' => 'San Agustin',
                'province' => 'ISA',
            ),
            281 =>
            array(
                'name' => 'San Guillermo',
                'province' => 'ISA',
            ),
            282 =>
            array(
                'name' => 'San Isidro',
                'province' => 'ISA',
            ),
            283 =>
            array(
                'name' => 'San Manuel',
                'province' => 'ISA',
            ),
            284 =>
            array(
                'name' => 'San Mariano',
                'province' => 'ISA',
            ),
            285 =>
            array(
                'name' => 'San Mateo',
                'province' => 'ISA',
            ),
            286 =>
            array(
                'name' => 'San Pablo',
                'province' => 'ISA',
            ),
            287 =>
            array(
                'name' => 'Santa Maria',
                'province' => 'ISA',
            ),
            288 =>
            array(
                'name' => 'Santiago',
                'province' => 'ISA',
                'city' => true,
            ),
            289 =>
            array(
                'name' => 'Santo Tomas',
                'province' => 'ISA',
            ),
            290 =>
            array(
                'name' => 'Tumauini',
                'province' => 'ISA',
            ),
            291 =>
            array(
                'name' => 'Alfonso Castaneda',
                'province' => 'NUV',
            ),
            292 =>
            array(
                'name' => 'Ambaguio',
                'province' => 'NUV',
            ),
            293 =>
            array(
                'name' => 'Aritao',
                'province' => 'NUV',
            ),
            294 =>
            array(
                'name' => 'Bagabag',
                'province' => 'NUV',
            ),
            295 =>
            array(
                'name' => 'Bambang',
                'province' => 'NUV',
            ),
            296 =>
            array(
                'name' => 'Bayombong',
                'province' => 'NUV',
            ),
            297 =>
            array(
                'name' => 'Diadi',
                'province' => 'NUV',
            ),
            298 =>
            array(
                'name' => 'Dupax del Norte',
                'province' => 'NUV',
            ),
            299 =>
            array(
                'name' => 'Dupax del Sur',
                'province' => 'NUV',
            ),
            300 =>
            array(
                'name' => 'Kasibu',
                'province' => 'NUV',
            ),
            301 =>
            array(
                'name' => 'Kayapa',
                'province' => 'NUV',
            ),
            302 =>
            array(
                'name' => 'Quezon',
                'province' => 'NUV',
            ),
            303 =>
            array(
                'name' => 'Santa Fe',
                'province' => 'NUV',
            ),
            304 =>
            array(
                'name' => 'Solano',
                'province' => 'NUV',
            ),
            305 =>
            array(
                'name' => 'Villaverde',
                'province' => 'NUV',
            ),
            306 =>
            array(
                'name' => 'Aglipay',
                'province' => 'QUI',
            ),
            307 =>
            array(
                'name' => 'Cabarroguis',
                'province' => 'QUI',
            ),
            308 =>
            array(
                'name' => 'Diffun',
                'province' => 'QUI',
            ),
            309 =>
            array(
                'name' => 'Maddela',
                'province' => 'QUI',
            ),
            310 =>
            array(
                'name' => 'Nagtipunan',
                'province' => 'QUI',
            ),
            311 =>
            array(
                'name' => 'Saguday',
                'province' => 'QUI',
            ),
            312 =>
            array(
                'name' => 'Baler',
                'province' => 'AUR',
            ),
            313 =>
            array(
                'name' => 'Casiguran',
                'province' => 'AUR',
            ),
            314 =>
            array(
                'name' => 'Dilasag',
                'province' => 'AUR',
            ),
            315 =>
            array(
                'name' => 'Dinalungan',
                'province' => 'AUR',
            ),
            316 =>
            array(
                'name' => 'Dingalan',
                'province' => 'AUR',
            ),
            317 =>
            array(
                'name' => 'Dipaculao',
                'province' => 'AUR',
            ),
            318 =>
            array(
                'name' => 'Maria Aurora',
                'province' => 'AUR',
            ),
            319 =>
            array(
                'name' => 'San Luis',
                'province' => 'AUR',
            ),
            320 =>
            array(
                'name' => 'Abucay',
                'province' => 'BAN',
            ),
            321 =>
            array(
                'name' => 'Bagac',
                'province' => 'BAN',
            ),
            322 =>
            array(
                'name' => 'Balanga',
                'province' => 'BAN',
                'city' => true,
            ),
            323 =>
            array(
                'name' => 'Dinalupihan',
                'province' => 'BAN',
            ),
            324 =>
            array(
                'name' => 'Hermosa',
                'province' => 'BAN',
            ),
            325 =>
            array(
                'name' => 'Limay',
                'province' => 'BAN',
            ),
            326 =>
            array(
                'name' => 'Mariveles',
                'province' => 'BAN',
            ),
            327 =>
            array(
                'name' => 'Morong',
                'province' => 'BAN',
            ),
            328 =>
            array(
                'name' => 'Orani',
                'province' => 'BAN',
            ),
            329 =>
            array(
                'name' => 'Orion',
                'province' => 'BAN',
            ),
            330 =>
            array(
                'name' => 'Pilar',
                'province' => 'BAN',
            ),
            331 =>
            array(
                'name' => 'Samal',
                'province' => 'BAN',
            ),
            332 =>
            array(
                'name' => 'Angat',
                'province' => 'BUL',
            ),
            333 =>
            array(
                'name' => 'Balagtas',
                'province' => 'BUL',
            ),
            334 =>
            array(
                'name' => 'Baliuag',
                'province' => 'BUL',
            ),
            335 =>
            array(
                'name' => 'Bocaue',
                'province' => 'BUL',
            ),
            336 =>
            array(
                'name' => 'Bulakan',
                'province' => 'BUL',
            ),
            337 =>
            array(
                'name' => 'Bustos',
                'province' => 'BUL',
            ),
            338 =>
            array(
                'name' => 'Calumpit',
                'province' => 'BUL',
            ),
            339 =>
            array(
                'name' => 'Doña Remedios Trinidad',
                'province' => 'BUL',
            ),
            340 =>
            array(
                'name' => 'Guiguinto',
                'province' => 'BUL',
            ),
            341 =>
            array(
                'name' => 'Hagonoy',
                'province' => 'BUL',
            ),
            342 =>
            array(
                'name' => 'Malolos',
                'province' => 'BUL',
                'city' => true,
            ),
            343 =>
            array(
                'name' => 'Marilao',
                'province' => 'BUL',
            ),
            344 =>
            array(
                'name' => 'Meycauayan',
                'province' => 'BUL',
                'city' => true,
            ),
            345 =>
            array(
                'name' => 'Norzagaray',
                'province' => 'BUL',
            ),
            346 =>
            array(
                'name' => 'Obando',
                'province' => 'BUL',
            ),
            347 =>
            array(
                'name' => 'Pandi',
                'province' => 'BUL',
            ),
            348 =>
            array(
                'name' => 'Paombong',
                'province' => 'BUL',
            ),
            349 =>
            array(
                'name' => 'Plaridel',
                'province' => 'BUL',
            ),
            350 =>
            array(
                'name' => 'Pulilan',
                'province' => 'BUL',
            ),
            351 =>
            array(
                'name' => 'San Ildefonso',
                'province' => 'BUL',
            ),
            352 =>
            array(
                'name' => 'San Jose del Monte',
                'province' => 'BUL',
                'city' => true,
            ),
            353 =>
            array(
                'name' => 'San Miguel',
                'province' => 'BUL',
            ),
            354 =>
            array(
                'name' => 'San Rafael',
                'province' => 'BUL',
            ),
            355 =>
            array(
                'name' => 'Santa Maria',
                'province' => 'BUL',
            ),
            356 =>
            array(
                'name' => 'Aliaga',
                'province' => 'NUE',
            ),
            357 =>
            array(
                'name' => 'Bongabon',
                'province' => 'NUE',
            ),
            358 =>
            array(
                'name' => 'Cabanatuan',
                'province' => 'NUE',
                'city' => true,
            ),
            359 =>
            array(
                'name' => 'Cabiao',
                'province' => 'NUE',
            ),
            360 =>
            array(
                'name' => 'Carranglan',
                'province' => 'NUE',
            ),
            361 =>
            array(
                'name' => 'Cuyapo',
                'province' => 'NUE',
            ),
            362 =>
            array(
                'name' => 'Gabaldon',
                'province' => 'NUE',
            ),
            363 =>
            array(
                'name' => 'Gapan',
                'province' => 'NUE',
                'city' => true,
            ),
            364 =>
            array(
                'name' => 'General Mamerto Natividad',
                'province' => 'NUE',
            ),
            365 =>
            array(
                'name' => 'General Tinio',
                'province' => 'NUE',
            ),
            366 =>
            array(
                'name' => 'Guimba',
                'province' => 'NUE',
            ),
            367 =>
            array(
                'name' => 'Jaen',
                'province' => 'NUE',
            ),
            368 =>
            array(
                'name' => 'Laur',
                'province' => 'NUE',
            ),
            369 =>
            array(
                'name' => 'Licab',
                'province' => 'NUE',
            ),
            370 =>
            array(
                'name' => 'Llanera',
                'province' => 'NUE',
            ),
            371 =>
            array(
                'name' => 'Lupao',
                'province' => 'NUE',
            ),
            372 =>
            array(
                'name' => 'Muñoz',
                'province' => 'NUE',
                'city' => true,
            ),
            373 =>
            array(
                'name' => 'Nampicuan',
                'province' => 'NUE',
            ),
            374 =>
            array(
                'name' => 'Palayan',
                'province' => 'NUE',
                'city' => true,
            ),
            375 =>
            array(
                'name' => 'Pantabangan',
                'province' => 'NUE',
            ),
            376 =>
            array(
                'name' => 'Peñaranda',
                'province' => 'NUE',
            ),
            377 =>
            array(
                'name' => 'Quezon',
                'province' => 'NUE',
            ),
            378 =>
            array(
                'name' => 'Rizal',
                'province' => 'NUE',
            ),
            379 =>
            array(
                'name' => 'San Antonio',
                'province' => 'NUE',
            ),
            380 =>
            array(
                'name' => 'San Isidro',
                'province' => 'NUE',
            ),
            381 =>
            array(
                'name' => 'San Jose',
                'province' => 'NUE',
                'city' => true,
            ),
            382 =>
            array(
                'name' => 'San Leonardo',
                'province' => 'NUE',
            ),
            383 =>
            array(
                'name' => 'Santa Rosa',
                'province' => 'NUE',
            ),
            384 =>
            array(
                'name' => 'Santo Domingo',
                'province' => 'NUE',
            ),
            385 =>
            array(
                'name' => 'Talavera',
                'province' => 'NUE',
            ),
            386 =>
            array(
                'name' => 'Talugtug',
                'province' => 'NUE',
            ),
            387 =>
            array(
                'name' => 'Zaragoza',
                'province' => 'NUE',
            ),
            388 =>
            array(
                'name' => 'Angeles',
                'province' => 'PAM',
                'city' => true,
            ),
            389 =>
            array(
                'name' => 'Apalit',
                'province' => 'PAM',
            ),
            390 =>
            array(
                'name' => 'Arayat',
                'province' => 'PAM',
            ),
            391 =>
            array(
                'name' => 'Bacolor',
                'province' => 'PAM',
            ),
            392 =>
            array(
                'name' => 'Candaba',
                'province' => 'PAM',
            ),
            393 =>
            array(
                'name' => 'Floridablanca',
                'province' => 'PAM',
            ),
            394 =>
            array(
                'name' => 'Guagua',
                'province' => 'PAM',
            ),
            395 =>
            array(
                'name' => 'Lubao',
                'province' => 'PAM',
            ),
            396 =>
            array(
                'name' => 'Mabalacat',
                'province' => 'PAM',
                'city' => true,
            ),
            397 =>
            array(
                'name' => 'Macabebe',
                'province' => 'PAM',
            ),
            398 =>
            array(
                'name' => 'Magalang',
                'province' => 'PAM',
            ),
            399 =>
            array(
                'name' => 'Masantol',
                'province' => 'PAM',
            ),
            400 =>
            array(
                'name' => 'Mexico',
                'province' => 'PAM',
            ),
            401 =>
            array(
                'name' => 'Minalin',
                'province' => 'PAM',
            ),
            402 =>
            array(
                'name' => 'Porac',
                'province' => 'PAM',
            ),
            403 =>
            array(
                'name' => 'San Fernando',
                'province' => 'PAM',
                'city' => true,
            ),
            404 =>
            array(
                'name' => 'San Luis',
                'province' => 'PAM',
            ),
            405 =>
            array(
                'name' => 'San Simon',
                'province' => 'PAM',
            ),
            406 =>
            array(
                'name' => 'Santa Ana',
                'province' => 'PAM',
            ),
            407 =>
            array(
                'name' => 'Santa Rita',
                'province' => 'PAM',
            ),
            408 =>
            array(
                'name' => 'Santo Tomas',
                'province' => 'PAM',
            ),
            409 =>
            array(
                'name' => 'Sasmuan',
                'province' => 'PAM',
            ),
            410 =>
            array(
                'name' => 'Anao',
                'province' => 'TAR',
            ),
            411 =>
            array(
                'name' => 'Bamban',
                'province' => 'TAR',
            ),
            412 =>
            array(
                'name' => 'Camiling',
                'province' => 'TAR',
            ),
            413 =>
            array(
                'name' => 'Capas',
                'province' => 'TAR',
            ),
            414 =>
            array(
                'name' => 'Concepcion',
                'province' => 'TAR',
            ),
            415 =>
            array(
                'name' => 'Gerona',
                'province' => 'TAR',
            ),
            416 =>
            array(
                'name' => 'La Paz',
                'province' => 'TAR',
            ),
            417 =>
            array(
                'name' => 'Mayantoc',
                'province' => 'TAR',
            ),
            418 =>
            array(
                'name' => 'Moncada',
                'province' => 'TAR',
            ),
            419 =>
            array(
                'name' => 'Paniqui',
                'province' => 'TAR',
            ),
            420 =>
            array(
                'name' => 'Pura',
                'province' => 'TAR',
            ),
            421 =>
            array(
                'name' => 'Ramos',
                'province' => 'TAR',
            ),
            422 =>
            array(
                'name' => 'San Clemente',
                'province' => 'TAR',
            ),
            423 =>
            array(
                'name' => 'San Jose',
                'province' => 'TAR',
            ),
            424 =>
            array(
                'name' => 'San Manuel',
                'province' => 'TAR',
            ),
            425 =>
            array(
                'name' => 'Santa Ignacia',
                'province' => 'TAR',
            ),
            426 =>
            array(
                'name' => 'Tarlac',
                'province' => 'TAR',
                'city' => true,
            ),
            427 =>
            array(
                'name' => 'Victoria',
                'province' => 'TAR',
            ),
            428 =>
            array(
                'name' => 'Botolan',
                'province' => 'ZMB',
            ),
            429 =>
            array(
                'name' => 'Cabangan',
                'province' => 'ZMB',
            ),
            430 =>
            array(
                'name' => 'Candelaria',
                'province' => 'ZMB',
            ),
            431 =>
            array(
                'name' => 'Castillejos',
                'province' => 'ZMB',
            ),
            432 =>
            array(
                'name' => 'Iba',
                'province' => 'ZMB',
            ),
            433 =>
            array(
                'name' => 'Masinloc',
                'province' => 'ZMB',
            ),
            434 =>
            array(
                'name' => 'Olongapo',
                'province' => 'ZMB',
                'city' => true,
            ),
            435 =>
            array(
                'name' => 'Palauig',
                'province' => 'ZMB',
            ),
            436 =>
            array(
                'name' => 'San Antonio',
                'province' => 'ZMB',
            ),
            437 =>
            array(
                'name' => 'San Felipe',
                'province' => 'ZMB',
            ),
            438 =>
            array(
                'name' => 'San Marcelino',
                'province' => 'ZMB',
            ),
            439 =>
            array(
                'name' => 'San Narciso',
                'province' => 'ZMB',
            ),
            440 =>
            array(
                'name' => 'Santa Cruz',
                'province' => 'ZMB',
            ),
            441 =>
            array(
                'name' => 'Subic',
                'province' => 'ZMB',
            ),
            442 =>
            array(
                'name' => 'Agoncillo',
                'province' => 'BTG',
            ),
            443 =>
            array(
                'name' => 'Alitagtag',
                'province' => 'BTG',
            ),
            444 =>
            array(
                'name' => 'Balayan',
                'province' => 'BTG',
            ),
            445 =>
            array(
                'name' => 'Balete',
                'province' => 'BTG',
            ),
            446 =>
            array(
                'name' => 'Batangas',
                'province' => 'BTG',
                'city' => true,
            ),
            447 =>
            array(
                'name' => 'Bauan',
                'province' => 'BTG',
            ),
            448 =>
            array(
                'name' => 'Calaca',
                'province' => 'BTG',
            ),
            449 =>
            array(
                'name' => 'Calatagan',
                'province' => 'BTG',
            ),
            450 =>
            array(
                'name' => 'Cuenca',
                'province' => 'BTG',
            ),
            451 =>
            array(
                'name' => 'Ibaan',
                'province' => 'BTG',
            ),
            452 =>
            array(
                'name' => 'Laurel',
                'province' => 'BTG',
            ),
            453 =>
            array(
                'name' => 'Lemery',
                'province' => 'BTG',
            ),
            454 =>
            array(
                'name' => 'Lian',
                'province' => 'BTG',
            ),
            455 =>
            array(
                'name' => 'Lipa',
                'province' => 'BTG',
                'city' => true,
            ),
            456 =>
            array(
                'name' => 'Lobo',
                'province' => 'BTG',
            ),
            457 =>
            array(
                'name' => 'Mabini',
                'province' => 'BTG',
            ),
            458 =>
            array(
                'name' => 'Malvar',
                'province' => 'BTG',
            ),
            459 =>
            array(
                'name' => 'Mataasnakahoy',
                'province' => 'BTG',
            ),
            460 =>
            array(
                'name' => 'Nasugbu',
                'province' => 'BTG',
            ),
            461 =>
            array(
                'name' => 'Padre Garcia',
                'province' => 'BTG',
            ),
            462 =>
            array(
                'name' => 'Rosario',
                'province' => 'BTG',
            ),
            463 =>
            array(
                'name' => 'San Jose',
                'province' => 'BTG',
            ),
            464 =>
            array(
                'name' => 'San Juan',
                'province' => 'BTG',
            ),
            465 =>
            array(
                'name' => 'San Luis',
                'province' => 'BTG',
            ),
            466 =>
            array(
                'name' => 'San Nicolas',
                'province' => 'BTG',
            ),
            467 =>
            array(
                'name' => 'San Pascual',
                'province' => 'BTG',
            ),
            468 =>
            array(
                'name' => 'Santa Teresita',
                'province' => 'BTG',
            ),
            469 =>
            array(
                'name' => 'Santo Tomas',
                'province' => 'BTG',
            ),
            470 =>
            array(
                'name' => 'Taal',
                'province' => 'BTG',
            ),
            471 =>
            array(
                'name' => 'Talisay',
                'province' => 'BTG',
            ),
            472 =>
            array(
                'name' => 'Tanauan',
                'province' => 'BTG',
                'city' => true,
            ),
            473 =>
            array(
                'name' => 'Taysan',
                'province' => 'BTG',
            ),
            474 =>
            array(
                'name' => 'Tingloy',
                'province' => 'BTG',
            ),
            475 =>
            array(
                'name' => 'Tuy',
                'province' => 'BTG',
            ),
            476 =>
            array(
                'name' => 'Alfonso',
                'province' => 'CAV',
            ),
            477 =>
            array(
                'name' => 'Amadeo',
                'province' => 'CAV',
            ),
            478 =>
            array(
                'name' => 'Bacoor',
                'province' => 'CAV',
                'city' => true,
            ),
            479 =>
            array(
                'name' => 'Carmona',
                'province' => 'CAV',
            ),
            480 =>
            array(
                'name' => 'Cavite',
                'province' => 'CAV',
                'city' => true,
            ),
            481 =>
            array(
                'name' => 'Dasmariñas',
                'province' => 'CAV',
                'city' => true,
            ),
            482 =>
            array(
                'name' => 'General Mariano Alvarez',
                'province' => 'CAV',
            ),
            483 =>
            array(
                'name' => 'General Emilio Aguinaldo',
                'province' => 'CAV',
            ),
            484 =>
            array(
                'name' => 'General Trias',
                'province' => 'CAV',
            ),
            485 =>
            array(
                'name' => 'Imus',
                'province' => 'CAV',
                'city' => true,
            ),
            486 =>
            array(
                'name' => 'Indang',
                'province' => 'CAV',
            ),
            487 =>
            array(
                'name' => 'Kawit',
                'province' => 'CAV',
            ),
            488 =>
            array(
                'name' => 'Magallanes',
                'province' => 'CAV',
            ),
            489 =>
            array(
                'name' => 'Maragondon',
                'province' => 'CAV',
            ),
            490 =>
            array(
                'name' => 'Mendez',
                'province' => 'CAV',
            ),
            491 =>
            array(
                'name' => 'Naic',
                'province' => 'CAV',
            ),
            492 =>
            array(
                'name' => 'Noveleta',
                'province' => 'CAV',
            ),
            493 =>
            array(
                'name' => 'Rosario',
                'province' => 'CAV',
            ),
            494 =>
            array(
                'name' => 'Silang',
                'province' => 'CAV',
            ),
            495 =>
            array(
                'name' => 'Tagaytay',
                'province' => 'CAV',
                'city' => true,
            ),
            496 =>
            array(
                'name' => 'Tanza',
                'province' => 'CAV',
            ),
            497 =>
            array(
                'name' => 'Ternate',
                'province' => 'CAV',
            ),
            498 =>
            array(
                'name' => 'Trece Martires',
                'province' => 'CAV',
                'city' => true,
            ),
            499 =>
            array(
                'name' => 'Alaminos',
                'province' => 'LAG',
            ),
            500 =>
            array(
                'name' => 'Bay',
                'province' => 'LAG',
            ),
            501 =>
            array(
                'name' => 'Biñan',
                'province' => 'LAG',
                'city' => true,
            ),
            502 =>
            array(
                'name' => 'Cabuyao',
                'province' => 'LAG',
                'city' => true,
            ),
            503 =>
            array(
                'name' => 'Calamba',
                'province' => 'LAG',
                'city' => true,
            ),
            504 =>
            array(
                'name' => 'Calauan',
                'province' => 'LAG',
            ),
            505 =>
            array(
                'name' => 'Cavinti',
                'province' => 'LAG',
            ),
            506 =>
            array(
                'name' => 'Famy',
                'province' => 'LAG',
            ),
            507 =>
            array(
                'name' => 'Kalayaan',
                'province' => 'LAG',
            ),
            508 =>
            array(
                'name' => 'Liliw',
                'province' => 'LAG',
            ),
            509 =>
            array(
                'name' => 'Los Baños',
                'province' => 'LAG',
            ),
            510 =>
            array(
                'name' => 'Luisiana',
                'province' => 'LAG',
            ),
            511 =>
            array(
                'name' => 'Lumban',
                'province' => 'LAG',
            ),
            512 =>
            array(
                'name' => 'Mabitac',
                'province' => 'LAG',
            ),
            513 =>
            array(
                'name' => 'Magdalena',
                'province' => 'LAG',
            ),
            514 =>
            array(
                'name' => 'Majayjay',
                'province' => 'LAG',
            ),
            515 =>
            array(
                'name' => 'Nagcarlan',
                'province' => 'LAG',
            ),
            516 =>
            array(
                'name' => 'Paete',
                'province' => 'LAG',
            ),
            517 =>
            array(
                'name' => 'Pagsanjan',
                'province' => 'LAG',
            ),
            518 =>
            array(
                'name' => 'Pakil',
                'province' => 'LAG',
            ),
            519 =>
            array(
                'name' => 'Pangil',
                'province' => 'LAG',
            ),
            520 =>
            array(
                'name' => 'Pila',
                'province' => 'LAG',
            ),
            521 =>
            array(
                'name' => 'Rizal',
                'province' => 'LAG',
            ),
            522 =>
            array(
                'name' => 'San Pablo',
                'province' => 'LAG',
                'city' => true,
            ),
            523 =>
            array(
                'name' => 'San Pedro',
                'province' => 'LAG',
                'city' => true,
            ),
            524 =>
            array(
                'name' => 'Santa Cruz',
                'province' => 'LAG',
            ),
            525 =>
            array(
                'name' => 'Santa Maria',
                'province' => 'LAG',
            ),
            526 =>
            array(
                'name' => 'Santa Rosa',
                'province' => 'LAG',
                'city' => true,
            ),
            527 =>
            array(
                'name' => 'Siniloan',
                'province' => 'LAG',
            ),
            528 =>
            array(
                'name' => 'Victoria',
                'province' => 'LAG',
            ),
            529 =>
            array(
                'name' => 'Agdangan',
                'province' => 'QUE',
            ),
            530 =>
            array(
                'name' => 'Alabat',
                'province' => 'QUE',
            ),
            531 =>
            array(
                'name' => 'Atimonan',
                'province' => 'QUE',
            ),
            532 =>
            array(
                'name' => 'Buenavista',
                'province' => 'QUE',
            ),
            533 =>
            array(
                'name' => 'Burdeos',
                'province' => 'QUE',
            ),
            534 =>
            array(
                'name' => 'Calauag',
                'province' => 'QUE',
            ),
            535 =>
            array(
                'name' => 'Candelaria',
                'province' => 'QUE',
            ),
            536 =>
            array(
                'name' => 'Catanauan',
                'province' => 'QUE',
            ),
            537 =>
            array(
                'name' => 'Dolores',
                'province' => 'QUE',
            ),
            538 =>
            array(
                'name' => 'General Luna',
                'province' => 'QUE',
            ),
            539 =>
            array(
                'name' => 'General Nakar',
                'province' => 'QUE',
            ),
            540 =>
            array(
                'name' => 'Guinayangan',
                'province' => 'QUE',
            ),
            541 =>
            array(
                'name' => 'Gumaca',
                'province' => 'QUE',
            ),
            542 =>
            array(
                'name' => 'Infanta',
                'province' => 'QUE',
            ),
            543 =>
            array(
                'name' => 'Jomalig',
                'province' => 'QUE',
            ),
            544 =>
            array(
                'name' => 'Lopez',
                'province' => 'QUE',
            ),
            545 =>
            array(
                'name' => 'Lucban',
                'province' => 'QUE',
            ),
            546 =>
            array(
                'name' => 'Lucena',
                'province' => 'QUE',
                'city' => true,
            ),
            547 =>
            array(
                'name' => 'Macalelon',
                'province' => 'QUE',
            ),
            548 =>
            array(
                'name' => 'Mauban',
                'province' => 'QUE',
            ),
            549 =>
            array(
                'name' => 'Mulanay',
                'province' => 'QUE',
            ),
            550 =>
            array(
                'name' => 'Padre Burgos',
                'province' => 'QUE',
            ),
            551 =>
            array(
                'name' => 'Pagbilao',
                'province' => 'QUE',
            ),
            552 =>
            array(
                'name' => 'Panukulan',
                'province' => 'QUE',
            ),
            553 =>
            array(
                'name' => 'Patnanungan',
                'province' => 'QUE',
            ),
            554 =>
            array(
                'name' => 'Perez',
                'province' => 'QUE',
            ),
            555 =>
            array(
                'name' => 'Pitogo',
                'province' => 'QUE',
            ),
            556 =>
            array(
                'name' => 'Plaridel',
                'province' => 'QUE',
            ),
            557 =>
            array(
                'name' => 'Polillo',
                'province' => 'QUE',
            ),
            558 =>
            array(
                'name' => 'Quezon',
                'province' => 'QUE',
            ),
            559 =>
            array(
                'name' => 'Real',
                'province' => 'QUE',
            ),
            560 =>
            array(
                'name' => 'Sampaloc',
                'province' => 'QUE',
            ),
            561 =>
            array(
                'name' => 'San Andres',
                'province' => 'QUE',
            ),
            562 =>
            array(
                'name' => 'San Antonio',
                'province' => 'QUE',
            ),
            563 =>
            array(
                'name' => 'San Francisco',
                'province' => 'QUE',
            ),
            564 =>
            array(
                'name' => 'San Narciso',
                'province' => 'QUE',
            ),
            565 =>
            array(
                'name' => 'Sariaya',
                'province' => 'QUE',
            ),
            566 =>
            array(
                'name' => 'Tagkawayan',
                'province' => 'QUE',
            ),
            567 =>
            array(
                'name' => 'Tayabas',
                'province' => 'QUE',
                'city' => true,
            ),
            568 =>
            array(
                'name' => 'Tiaong',
                'province' => 'QUE',
            ),
            569 =>
            array(
                'name' => 'Unisan',
                'province' => 'QUE',
            ),
            570 =>
            array(
                'name' => 'Angono',
                'province' => 'RIZ',
            ),
            571 =>
            array(
                'name' => 'Antipolo',
                'province' => 'RIZ',
                'city' => true,
            ),
            572 =>
            array(
                'name' => 'Baras',
                'province' => 'RIZ',
            ),
            573 =>
            array(
                'name' => 'Binangonan',
                'province' => 'RIZ',
            ),
            574 =>
            array(
                'name' => 'Cainta',
                'province' => 'RIZ',
            ),
            575 =>
            array(
                'name' => 'Cardona',
                'province' => 'RIZ',
            ),
            576 =>
            array(
                'name' => 'Jalajala',
                'province' => 'RIZ',
            ),
            577 =>
            array(
                'name' => 'Morong',
                'province' => 'RIZ',
            ),
            578 =>
            array(
                'name' => 'Pililla',
                'province' => 'RIZ',
            ),
            579 =>
            array(
                'name' => 'Rodriguez',
                'province' => 'RIZ',
            ),
            580 =>
            array(
                'name' => 'San Mateo',
                'province' => 'RIZ',
            ),
            581 =>
            array(
                'name' => 'Tanay',
                'province' => 'RIZ',
            ),
            582 =>
            array(
                'name' => 'Taytay',
                'province' => 'RIZ',
            ),
            583 =>
            array(
                'name' => 'Teresa',
                'province' => 'RIZ',
            ),
            584 =>
            array(
                'name' => 'Boac',
                'province' => 'MAD',
            ),
            585 =>
            array(
                'name' => 'Buenavista',
                'province' => 'MAD',
            ),
            586 =>
            array(
                'name' => 'Gasan',
                'province' => 'MAD',
            ),
            587 =>
            array(
                'name' => 'Mogpog',
                'province' => 'MAD',
            ),
            588 =>
            array(
                'name' => 'Santa Cruz',
                'province' => 'MAD',
            ),
            589 =>
            array(
                'name' => 'Torrijos',
                'province' => 'MAD',
            ),
            590 =>
            array(
                'name' => 'Abra de Ilog',
                'province' => 'MDC',
            ),
            591 =>
            array(
                'name' => 'Calintaan',
                'province' => 'MDC',
            ),
            592 =>
            array(
                'name' => 'Looc',
                'province' => 'MDC',
            ),
            593 =>
            array(
                'name' => 'Lubang',
                'province' => 'MDC',
            ),
            594 =>
            array(
                'name' => 'Magsaysay',
                'province' => 'MDC',
            ),
            595 =>
            array(
                'name' => 'Mamburao',
                'province' => 'MDC',
            ),
            596 =>
            array(
                'name' => 'Paluan',
                'province' => 'MDC',
            ),
            597 =>
            array(
                'name' => 'Rizal',
                'province' => 'MDC',
            ),
            598 =>
            array(
                'name' => 'Sablayan',
                'province' => 'MDC',
            ),
            599 =>
            array(
                'name' => 'San Jose',
                'province' => 'MDC',
            ),
            600 =>
            array(
                'name' => 'Santa Cruz',
                'province' => 'MDC',
            ),
            601 =>
            array(
                'name' => 'Baco',
                'province' => 'MDR',
            ),
            602 =>
            array(
                'name' => 'Bansud',
                'province' => 'MDR',
            ),
            603 =>
            array(
                'name' => 'Bongabong',
                'province' => 'MDR',
            ),
            604 =>
            array(
                'name' => 'Bulalacao',
                'province' => 'MDR',
            ),
            605 =>
            array(
                'name' => 'Calapan',
                'province' => 'MDR',
                'city' => true,
            ),
            606 =>
            array(
                'name' => 'Gloria',
                'province' => 'MDR',
            ),
            607 =>
            array(
                'name' => 'Mansalay',
                'province' => 'MDR',
            ),
            608 =>
            array(
                'name' => 'Naujan',
                'province' => 'MDR',
            ),
            609 =>
            array(
                'name' => 'Pinamalayan',
                'province' => 'MDR',
            ),
            610 =>
            array(
                'name' => 'Pola',
                'province' => 'MDR',
            ),
            611 =>
            array(
                'name' => 'Puerto Galera',
                'province' => 'MDR',
            ),
            612 =>
            array(
                'name' => 'Roxas',
                'province' => 'MDR',
            ),
            613 =>
            array(
                'name' => 'San Teodoro',
                'province' => 'MDR',
            ),
            614 =>
            array(
                'name' => 'Socorro',
                'province' => 'MDR',
            ),
            615 =>
            array(
                'name' => 'Victoria',
                'province' => 'MDR',
            ),
            616 =>
            array(
                'name' => 'Aborlan',
                'province' => 'PLW',
            ),
            617 =>
            array(
                'name' => 'Agutaya',
                'province' => 'PLW',
            ),
            618 =>
            array(
                'name' => 'Araceli',
                'province' => 'PLW',
            ),
            619 =>
            array(
                'name' => 'Balabac',
                'province' => 'PLW',
            ),
            620 =>
            array(
                'name' => 'Bataraza',
                'province' => 'PLW',
            ),
            621 =>
            array(
                'name' => 'Brooke\'s Point',
                'province' => 'PLW',
            ),
            622 =>
            array(
                'name' => 'Busuanga',
                'province' => 'PLW',
            ),
            623 =>
            array(
                'name' => 'Cagayancillo',
                'province' => 'PLW',
            ),
            624 =>
            array(
                'name' => 'Coron',
                'province' => 'PLW',
            ),
            625 =>
            array(
                'name' => 'Culion',
                'province' => 'PLW',
            ),
            626 =>
            array(
                'name' => 'Cuyo',
                'province' => 'PLW',
            ),
            627 =>
            array(
                'name' => 'Dumaran',
                'province' => 'PLW',
            ),
            628 =>
            array(
                'name' => 'El Nido',
                'province' => 'PLW',
            ),
            629 =>
            array(
                'name' => 'Kalayaan',
                'province' => 'PLW',
            ),
            630 =>
            array(
                'name' => 'Linapacan',
                'province' => 'PLW',
            ),
            631 =>
            array(
                'name' => 'Magsaysay',
                'province' => 'PLW',
            ),
            632 =>
            array(
                'name' => 'Narra',
                'province' => 'PLW',
            ),
            633 =>
            array(
                'name' => 'Puerto Princesa',
                'province' => 'PLW',
                'city' => true,
            ),
            634 =>
            array(
                'name' => 'Quezon',
                'province' => 'PLW',
            ),
            635 =>
            array(
                'name' => 'Rizal',
                'province' => 'PLW',
            ),
            636 =>
            array(
                'name' => 'Roxas',
                'province' => 'PLW',
            ),
            637 =>
            array(
                'name' => 'San Vicente',
                'province' => 'PLW',
            ),
            638 =>
            array(
                'name' => 'Sofronio Española',
                'province' => 'PLW',
            ),
            639 =>
            array(
                'name' => 'Taytay',
                'province' => 'PLW',
            ),
            640 =>
            array(
                'name' => 'Alcantara',
                'province' => 'ROM',
            ),
            641 =>
            array(
                'name' => 'Banton',
                'province' => 'ROM',
            ),
            642 =>
            array(
                'name' => 'Cajidiocan',
                'province' => 'ROM',
            ),
            643 =>
            array(
                'name' => 'Calatrava',
                'province' => 'ROM',
            ),
            644 =>
            array(
                'name' => 'Concepcion',
                'province' => 'ROM',
            ),
            645 =>
            array(
                'name' => 'Corcuera',
                'province' => 'ROM',
            ),
            646 =>
            array(
                'name' => 'Ferrol',
                'province' => 'ROM',
            ),
            647 =>
            array(
                'name' => 'Looc',
                'province' => 'ROM',
            ),
            648 =>
            array(
                'name' => 'Magdiwang',
                'province' => 'ROM',
            ),
            649 =>
            array(
                'name' => 'Odiongan',
                'province' => 'ROM',
            ),
            650 =>
            array(
                'name' => 'Romblon',
                'province' => 'ROM',
            ),
            651 =>
            array(
                'name' => 'San Agustin',
                'province' => 'ROM',
            ),
            652 =>
            array(
                'name' => 'San Andres',
                'province' => 'ROM',
            ),
            653 =>
            array(
                'name' => 'San Fernando',
                'province' => 'ROM',
            ),
            654 =>
            array(
                'name' => 'San Jose',
                'province' => 'ROM',
            ),
            655 =>
            array(
                'name' => 'Santa Fe',
                'province' => 'ROM',
            ),
            656 =>
            array(
                'name' => 'Santa Maria',
                'province' => 'ROM',
            ),
            657 =>
            array(
                'name' => 'Bacacay',
                'province' => 'ALB',
            ),
            658 =>
            array(
                'name' => 'Camalig',
                'province' => 'ALB',
            ),
            659 =>
            array(
                'name' => 'Daraga',
                'province' => 'ALB',
            ),
            660 =>
            array(
                'name' => 'Guinobatan',
                'province' => 'ALB',
            ),
            661 =>
            array(
                'name' => 'Jovellar',
                'province' => 'ALB',
            ),
            662 =>
            array(
                'name' => 'Legazpi',
                'province' => 'ALB',
                'city' => true,
            ),
            663 =>
            array(
                'name' => 'Libon',
                'province' => 'ALB',
            ),
            664 =>
            array(
                'name' => 'Ligao',
                'province' => 'ALB',
                'city' => true,
            ),
            665 =>
            array(
                'name' => 'Malilipot',
                'province' => 'ALB',
            ),
            666 =>
            array(
                'name' => 'Malinao',
                'province' => 'ALB',
            ),
            667 =>
            array(
                'name' => 'Manito',
                'province' => 'ALB',
            ),
            668 =>
            array(
                'name' => 'Oas',
                'province' => 'ALB',
            ),
            669 =>
            array(
                'name' => 'Pio Duran',
                'province' => 'ALB',
            ),
            670 =>
            array(
                'name' => 'Polangui',
                'province' => 'ALB',
            ),
            671 =>
            array(
                'name' => 'Rapu-Rapu',
                'province' => 'ALB',
            ),
            672 =>
            array(
                'name' => 'Santo Domingo',
                'province' => 'ALB',
            ),
            673 =>
            array(
                'name' => 'Tabaco',
                'province' => 'ALB',
                'city' => true,
            ),
            674 =>
            array(
                'name' => 'Tiwi',
                'province' => 'ALB',
            ),
            675 =>
            array(
                'name' => 'Basud',
                'province' => 'CAN',
            ),
            676 =>
            array(
                'name' => 'Capalonga',
                'province' => 'CAN',
            ),
            677 =>
            array(
                'name' => 'Daet',
                'province' => 'CAN',
            ),
            678 =>
            array(
                'name' => 'Jose Panganiban',
                'province' => 'CAN',
            ),
            679 =>
            array(
                'name' => 'Labo',
                'province' => 'CAN',
            ),
            680 =>
            array(
                'name' => 'Mercedes',
                'province' => 'CAN',
            ),
            681 =>
            array(
                'name' => 'Paracale',
                'province' => 'CAN',
            ),
            682 =>
            array(
                'name' => 'San Lorenzo Ruiz',
                'province' => 'CAN',
            ),
            683 =>
            array(
                'name' => 'San Vicente',
                'province' => 'CAN',
            ),
            684 =>
            array(
                'name' => 'Santa Elena',
                'province' => 'CAN',
            ),
            685 =>
            array(
                'name' => 'Talisay',
                'province' => 'CAN',
            ),
            686 =>
            array(
                'name' => 'Vinzons',
                'province' => 'CAN',
            ),
            687 =>
            array(
                'name' => 'Baao',
                'province' => 'CAS',
            ),
            688 =>
            array(
                'name' => 'Balatan',
                'province' => 'CAS',
            ),
            689 =>
            array(
                'name' => 'Bato',
                'province' => 'CAS',
            ),
            690 =>
            array(
                'name' => 'Bombon',
                'province' => 'CAS',
            ),
            691 =>
            array(
                'name' => 'Buhi',
                'province' => 'CAS',
            ),
            692 =>
            array(
                'name' => 'Bula',
                'province' => 'CAS',
            ),
            693 =>
            array(
                'name' => 'Cabusao',
                'province' => 'CAS',
            ),
            694 =>
            array(
                'name' => 'Calabanga',
                'province' => 'CAS',
            ),
            695 =>
            array(
                'name' => 'Camaligan',
                'province' => 'CAS',
            ),
            696 =>
            array(
                'name' => 'Canaman',
                'province' => 'CAS',
            ),
            697 =>
            array(
                'name' => 'Caramoan',
                'province' => 'CAS',
            ),
            698 =>
            array(
                'name' => 'Del Gallego',
                'province' => 'CAS',
            ),
            699 =>
            array(
                'name' => 'Gainza',
                'province' => 'CAS',
            ),
            700 =>
            array(
                'name' => 'Garchitorena',
                'province' => 'CAS',
            ),
            701 =>
            array(
                'name' => 'Goa',
                'province' => 'CAS',
            ),
            702 =>
            array(
                'name' => 'Iriga',
                'province' => 'CAS',
                'city' => true,
            ),
            703 =>
            array(
                'name' => 'Lagonoy',
                'province' => 'CAS',
            ),
            704 =>
            array(
                'name' => 'Libmanan',
                'province' => 'CAS',
            ),
            705 =>
            array(
                'name' => 'Lupi',
                'province' => 'CAS',
            ),
            706 =>
            array(
                'name' => 'Magarao',
                'province' => 'CAS',
            ),
            707 =>
            array(
                'name' => 'Milaor',
                'province' => 'CAS',
            ),
            708 =>
            array(
                'name' => 'Minalabac',
                'province' => 'CAS',
            ),
            709 =>
            array(
                'name' => 'Nabua',
                'province' => 'CAS',
            ),
            710 =>
            array(
                'name' => 'Naga',
                'province' => 'CAS',
                'city' => true,
            ),
            711 =>
            array(
                'name' => 'Ocampo',
                'province' => 'CAS',
            ),
            712 =>
            array(
                'name' => 'Pamplona',
                'province' => 'CAS',
            ),
            713 =>
            array(
                'name' => 'Pasacao',
                'province' => 'CAS',
            ),
            714 =>
            array(
                'name' => 'Pili',
                'province' => 'CAS',
            ),
            715 =>
            array(
                'name' => 'Presentacion',
                'province' => 'CAS',
            ),
            716 =>
            array(
                'name' => 'Ragay',
                'province' => 'CAS',
            ),
            717 =>
            array(
                'name' => 'Sagñay',
                'province' => 'CAS',
            ),
            718 =>
            array(
                'name' => 'San Fernando',
                'province' => 'CAS',
            ),
            719 =>
            array(
                'name' => 'San Jose',
                'province' => 'CAS',
            ),
            720 =>
            array(
                'name' => 'Sipocot',
                'province' => 'CAS',
            ),
            721 =>
            array(
                'name' => 'Siruma',
                'province' => 'CAS',
            ),
            722 =>
            array(
                'name' => 'Tigaon',
                'province' => 'CAS',
            ),
            723 =>
            array(
                'name' => 'Tinambac',
                'province' => 'CAS',
            ),
            724 =>
            array(
                'name' => 'Bagamanoc',
                'province' => 'CAT',
            ),
            725 =>
            array(
                'name' => 'Baras',
                'province' => 'CAT',
            ),
            726 =>
            array(
                'name' => 'Bato',
                'province' => 'CAT',
            ),
            727 =>
            array(
                'name' => 'Caramoran',
                'province' => 'CAT',
            ),
            728 =>
            array(
                'name' => 'Gigmoto',
                'province' => 'CAT',
            ),
            729 =>
            array(
                'name' => 'Pandan',
                'province' => 'CAT',
            ),
            730 =>
            array(
                'name' => 'Panganiban',
                'province' => 'CAT',
            ),
            731 =>
            array(
                'name' => 'San Andres',
                'province' => 'CAT',
            ),
            732 =>
            array(
                'name' => 'San Miguel',
                'province' => 'CAT',
            ),
            733 =>
            array(
                'name' => 'Viga',
                'province' => 'CAT',
            ),
            734 =>
            array(
                'name' => 'Virac',
                'province' => 'CAT',
            ),
            735 =>
            array(
                'name' => 'Aroroy',
                'province' => 'MAS',
            ),
            736 =>
            array(
                'name' => 'Baleno',
                'province' => 'MAS',
            ),
            737 =>
            array(
                'name' => 'Balud',
                'province' => 'MAS',
            ),
            738 =>
            array(
                'name' => 'Batuan',
                'province' => 'MAS',
            ),
            739 =>
            array(
                'name' => 'Cataingan',
                'province' => 'MAS',
            ),
            740 =>
            array(
                'name' => 'Cawayan',
                'province' => 'MAS',
            ),
            741 =>
            array(
                'name' => 'Claveria',
                'province' => 'MAS',
            ),
            742 =>
            array(
                'name' => 'Dimasalang',
                'province' => 'MAS',
            ),
            743 =>
            array(
                'name' => 'Esperanza',
                'province' => 'MAS',
            ),
            744 =>
            array(
                'name' => 'Mandaon',
                'province' => 'MAS',
            ),
            745 =>
            array(
                'name' => 'Masbate',
                'province' => 'MAS',
                'city' => true,
            ),
            746 =>
            array(
                'name' => 'Milagros',
                'province' => 'MAS',
            ),
            747 =>
            array(
                'name' => 'Mobo',
                'province' => 'MAS',
            ),
            748 =>
            array(
                'name' => 'Monreal',
                'province' => 'MAS',
            ),
            749 =>
            array(
                'name' => 'Palanas',
                'province' => 'MAS',
            ),
            750 =>
            array(
                'name' => 'Pio V. Corpuz',
                'province' => 'MAS',
            ),
            751 =>
            array(
                'name' => 'Placer',
                'province' => 'MAS',
            ),
            752 =>
            array(
                'name' => 'San Fernando',
                'province' => 'MAS',
            ),
            753 =>
            array(
                'name' => 'San Jacinto',
                'province' => 'MAS',
            ),
            754 =>
            array(
                'name' => 'San Pascual',
                'province' => 'MAS',
            ),
            755 =>
            array(
                'name' => 'Uson',
                'province' => 'MAS',
            ),
            756 =>
            array(
                'name' => 'Barcelona',
                'province' => 'SOR',
            ),
            757 =>
            array(
                'name' => 'Bulan',
                'province' => 'SOR',
            ),
            758 =>
            array(
                'name' => 'Bulusan',
                'province' => 'SOR',
            ),
            759 =>
            array(
                'name' => 'Casiguran',
                'province' => 'SOR',
            ),
            760 =>
            array(
                'name' => 'Castilla',
                'province' => 'SOR',
            ),
            761 =>
            array(
                'name' => 'Donsol',
                'province' => 'SOR',
            ),
            762 =>
            array(
                'name' => 'Gubat',
                'province' => 'SOR',
            ),
            763 =>
            array(
                'name' => 'Irosin',
                'province' => 'SOR',
            ),
            764 =>
            array(
                'name' => 'Juban',
                'province' => 'SOR',
            ),
            765 =>
            array(
                'name' => 'Magallanes',
                'province' => 'SOR',
            ),
            766 =>
            array(
                'name' => 'Matnog',
                'province' => 'SOR',
            ),
            767 =>
            array(
                'name' => 'Pilar',
                'province' => 'SOR',
            ),
            768 =>
            array(
                'name' => 'Prieto Diaz',
                'province' => 'SOR',
            ),
            769 =>
            array(
                'name' => 'Santa Magdalena',
                'province' => 'SOR',
            ),
            770 =>
            array(
                'name' => 'Sorsogon',
                'province' => 'SOR',
                'city' => true,
            ),
            771 =>
            array(
                'name' => 'Altavas',
                'province' => 'AKL',
            ),
            772 =>
            array(
                'name' => 'Balete',
                'province' => 'AKL',
            ),
            773 =>
            array(
                'name' => 'Banga',
                'province' => 'AKL',
            ),
            774 =>
            array(
                'name' => 'Batan',
                'province' => 'AKL',
            ),
            775 =>
            array(
                'name' => 'Buruanga',
                'province' => 'AKL',
            ),
            776 =>
            array(
                'name' => 'Ibajay',
                'province' => 'AKL',
            ),
            777 =>
            array(
                'name' => 'Kalibo',
                'province' => 'AKL',
            ),
            778 =>
            array(
                'name' => 'Lezo',
                'province' => 'AKL',
            ),
            779 =>
            array(
                'name' => 'Libacao',
                'province' => 'AKL',
            ),
            780 =>
            array(
                'name' => 'Madalag',
                'province' => 'AKL',
            ),
            781 =>
            array(
                'name' => 'Makato',
                'province' => 'AKL',
            ),
            782 =>
            array(
                'name' => 'Malay',
                'province' => 'AKL',
            ),
            783 =>
            array(
                'name' => 'Malinao',
                'province' => 'AKL',
            ),
            784 =>
            array(
                'name' => 'Nabas',
                'province' => 'AKL',
            ),
            785 =>
            array(
                'name' => 'New Washington',
                'province' => 'AKL',
            ),
            786 =>
            array(
                'name' => 'Numancia',
                'province' => 'AKL',
            ),
            787 =>
            array(
                'name' => 'Tangalan',
                'province' => 'AKL',
            ),
            788 =>
            array(
                'name' => 'Anini-y',
                'province' => 'ANT',
            ),
            789 =>
            array(
                'name' => 'Barbaza',
                'province' => 'ANT',
            ),
            790 =>
            array(
                'name' => 'Belison',
                'province' => 'ANT',
            ),
            791 =>
            array(
                'name' => 'Bugasong',
                'province' => 'ANT',
            ),
            792 =>
            array(
                'name' => 'Caluya',
                'province' => 'ANT',
            ),
            793 =>
            array(
                'name' => 'Culasi',
                'province' => 'ANT',
            ),
            794 =>
            array(
                'name' => 'Hamtic',
                'province' => 'ANT',
            ),
            795 =>
            array(
                'name' => 'Laua-an',
                'province' => 'ANT',
            ),
            796 =>
            array(
                'name' => 'Libertad',
                'province' => 'ANT',
            ),
            797 =>
            array(
                'name' => 'Pandan',
                'province' => 'ANT',
            ),
            798 =>
            array(
                'name' => 'Patnongon',
                'province' => 'ANT',
            ),
            799 =>
            array(
                'name' => 'San Jose',
                'province' => 'ANT',
            ),
            800 =>
            array(
                'name' => 'San Remigio',
                'province' => 'ANT',
            ),
            801 =>
            array(
                'name' => 'Sebaste',
                'province' => 'ANT',
            ),
            802 =>
            array(
                'name' => 'Sibalom',
                'province' => 'ANT',
            ),
            803 =>
            array(
                'name' => 'Tibiao',
                'province' => 'ANT',
            ),
            804 =>
            array(
                'name' => 'Tobias Fornier',
                'province' => 'ANT',
            ),
            805 =>
            array(
                'name' => 'Valderrama',
                'province' => 'ANT',
            ),
            806 =>
            array(
                'name' => 'Cuartero',
                'province' => 'CAP',
            ),
            807 =>
            array(
                'name' => 'Dao',
                'province' => 'CAP',
            ),
            808 =>
            array(
                'name' => 'Dumalag',
                'province' => 'CAP',
            ),
            809 =>
            array(
                'name' => 'Dumarao',
                'province' => 'CAP',
            ),
            810 =>
            array(
                'name' => 'Ivisan',
                'province' => 'CAP',
            ),
            811 =>
            array(
                'name' => 'Jamindan',
                'province' => 'CAP',
            ),
            812 =>
            array(
                'name' => 'Maayon',
                'province' => 'CAP',
            ),
            813 =>
            array(
                'name' => 'Mambusao',
                'province' => 'CAP',
            ),
            814 =>
            array(
                'name' => 'Panay',
                'province' => 'CAP',
            ),
            815 =>
            array(
                'name' => 'Panitan',
                'province' => 'CAP',
            ),
            816 =>
            array(
                'name' => 'Pilar',
                'province' => 'CAP',
            ),
            817 =>
            array(
                'name' => 'Pontevedra',
                'province' => 'CAP',
            ),
            818 =>
            array(
                'name' => 'President Roxas',
                'province' => 'CAP',
            ),
            819 =>
            array(
                'name' => 'Roxas',
                'province' => 'CAP',
                'city' => true,
            ),
            820 =>
            array(
                'name' => 'Sapian',
                'province' => 'CAP',
            ),
            821 =>
            array(
                'name' => 'Sigma',
                'province' => 'CAP',
            ),
            822 =>
            array(
                'name' => 'Tapaz',
                'province' => 'CAP',
            ),
            823 =>
            array(
                'name' => 'Buenavista',
                'province' => 'GUI',
            ),
            824 =>
            array(
                'name' => 'Jordan',
                'province' => 'GUI',
            ),
            825 =>
            array(
                'name' => 'Nueva Valencia',
                'province' => 'GUI',
            ),
            826 =>
            array(
                'name' => 'San Lorenzo',
                'province' => 'GUI',
            ),
            827 =>
            array(
                'name' => 'Sibunag',
                'province' => 'GUI',
            ),
            828 =>
            array(
                'name' => 'Ajuy',
                'province' => 'ILI',
            ),
            829 =>
            array(
                'name' => 'Alimodian',
                'province' => 'ILI',
            ),
            830 =>
            array(
                'name' => 'Anilao',
                'province' => 'ILI',
            ),
            831 =>
            array(
                'name' => 'Badiangan',
                'province' => 'ILI',
            ),
            832 =>
            array(
                'name' => 'Balasan',
                'province' => 'ILI',
            ),
            833 =>
            array(
                'name' => 'Banate',
                'province' => 'ILI',
            ),
            834 =>
            array(
                'name' => 'Barotac Nuevo',
                'province' => 'ILI',
            ),
            835 =>
            array(
                'name' => 'Barotac Viejo',
                'province' => 'ILI',
            ),
            836 =>
            array(
                'name' => 'Batad',
                'province' => 'ILI',
            ),
            837 =>
            array(
                'name' => 'Bingawan',
                'province' => 'ILI',
            ),
            838 =>
            array(
                'name' => 'Cabatuan',
                'province' => 'ILI',
            ),
            839 =>
            array(
                'name' => 'Calinog',
                'province' => 'ILI',
            ),
            840 =>
            array(
                'name' => 'Carles',
                'province' => 'ILI',
            ),
            841 =>
            array(
                'name' => 'Concepcion',
                'province' => 'ILI',
            ),
            842 =>
            array(
                'name' => 'Dingle',
                'province' => 'ILI',
            ),
            843 =>
            array(
                'name' => 'Dueñas',
                'province' => 'ILI',
            ),
            844 =>
            array(
                'name' => 'Dumangas',
                'province' => 'ILI',
            ),
            845 =>
            array(
                'name' => 'Estancia',
                'province' => 'ILI',
            ),
            846 =>
            array(
                'name' => 'Guimbal',
                'province' => 'ILI',
            ),
            847 =>
            array(
                'name' => 'Igbaras',
                'province' => 'ILI',
            ),
            848 =>
            array(
                'name' => 'Iloilo',
                'province' => 'ILI',
                'city' => true,
            ),
            849 =>
            array(
                'name' => 'Janiuay',
                'province' => 'ILI',
            ),
            850 =>
            array(
                'name' => 'Lambunao',
                'province' => 'ILI',
            ),
            851 =>
            array(
                'name' => 'Leganes',
                'province' => 'ILI',
            ),
            852 =>
            array(
                'name' => 'Lemery',
                'province' => 'ILI',
            ),
            853 =>
            array(
                'name' => 'Leon',
                'province' => 'ILI',
            ),
            854 =>
            array(
                'name' => 'Maasin',
                'province' => 'ILI',
            ),
            855 =>
            array(
                'name' => 'Miagao',
                'province' => 'ILI',
            ),
            856 =>
            array(
                'name' => 'Mina',
                'province' => 'ILI',
            ),
            857 =>
            array(
                'name' => 'New Lucena',
                'province' => 'ILI',
            ),
            858 =>
            array(
                'name' => 'Oton',
                'province' => 'ILI',
            ),
            859 =>
            array(
                'name' => 'Passi',
                'province' => 'ILI',
                'city' => true,
            ),
            860 =>
            array(
                'name' => 'Pavia',
                'province' => 'ILI',
            ),
            861 =>
            array(
                'name' => 'Pototan',
                'province' => 'ILI',
            ),
            862 =>
            array(
                'name' => 'San Dionisio',
                'province' => 'ILI',
            ),
            863 =>
            array(
                'name' => 'San Enrique',
                'province' => 'ILI',
            ),
            864 =>
            array(
                'name' => 'San Joaquin',
                'province' => 'ILI',
            ),
            865 =>
            array(
                'name' => 'San Miguel',
                'province' => 'ILI',
            ),
            866 =>
            array(
                'name' => 'San Rafael',
                'province' => 'ILI',
            ),
            867 =>
            array(
                'name' => 'Santa Barbara',
                'province' => 'ILI',
            ),
            868 =>
            array(
                'name' => 'Sara',
                'province' => 'ILI',
            ),
            869 =>
            array(
                'name' => 'Tigbauan',
                'province' => 'ILI',
            ),
            870 =>
            array(
                'name' => 'Tubungan',
                'province' => 'ILI',
            ),
            871 =>
            array(
                'name' => 'Zarraga',
                'province' => 'ILI',
            ),
            872 =>
            array(
                'name' => 'Bacolod',
                'province' => 'NEC',
                'city' => true,
            ),
            873 =>
            array(
                'name' => 'Bago',
                'province' => 'NEC',
                'city' => true,
            ),
            874 =>
            array(
                'name' => 'Binalbagan',
                'province' => 'NEC',
            ),
            875 =>
            array(
                'name' => 'Cadiz',
                'province' => 'NEC',
                'city' => true,
            ),
            876 =>
            array(
                'name' => 'Calatrava',
                'province' => 'NEC',
            ),
            877 =>
            array(
                'name' => 'Candoni',
                'province' => 'NEC',
            ),
            878 =>
            array(
                'name' => 'Cauayan',
                'province' => 'NEC',
            ),
            879 =>
            array(
                'name' => 'Enrique B. Magalona',
                'province' => 'NEC',
            ),
            880 =>
            array(
                'name' => 'Escalante',
                'province' => 'NEC',
                'city' => true,
            ),
            881 =>
            array(
                'name' => 'Himamaylan',
                'province' => 'NEC',
                'city' => true,
            ),
            882 =>
            array(
                'name' => 'Hinigaran',
                'province' => 'NEC',
            ),
            883 =>
            array(
                'name' => 'Hinoba-an',
                'province' => 'NEC',
            ),
            884 =>
            array(
                'name' => 'Ilog',
                'province' => 'NEC',
            ),
            885 =>
            array(
                'name' => 'Isabela',
                'province' => 'NEC',
            ),
            886 =>
            array(
                'name' => 'Kabankalan',
                'province' => 'NEC',
                'city' => true,
            ),
            887 =>
            array(
                'name' => 'La Carlota',
                'province' => 'NEC',
                'city' => true,
            ),
            888 =>
            array(
                'name' => 'La Castellana',
                'province' => 'NEC',
            ),
            889 =>
            array(
                'name' => 'Manapla',
                'province' => 'NEC',
            ),
            890 =>
            array(
                'name' => 'Moises Padilla',
                'province' => 'NEC',
            ),
            891 =>
            array(
                'name' => 'Murcia',
                'province' => 'NEC',
            ),
            892 =>
            array(
                'name' => 'Pontevedra',
                'province' => 'NEC',
            ),
            893 =>
            array(
                'name' => 'Pulupandan',
                'province' => 'NEC',
            ),
            894 =>
            array(
                'name' => 'Sagay',
                'province' => 'NEC',
                'city' => true,
            ),
            895 =>
            array(
                'name' => 'Salvador Benedicto',
                'province' => 'NEC',
            ),
            896 =>
            array(
                'name' => 'San Carlos',
                'province' => 'NEC',
                'city' => true,
            ),
            897 =>
            array(
                'name' => 'San Enrique',
                'province' => 'NEC',
            ),
            898 =>
            array(
                'name' => 'Silay',
                'province' => 'NEC',
                'city' => true,
            ),
            899 =>
            array(
                'name' => 'Sipalay',
                'province' => 'NEC',
                'city' => true,
            ),
            900 =>
            array(
                'name' => 'Talisay',
                'province' => 'NEC',
                'city' => true,
            ),
            901 =>
            array(
                'name' => 'Toboso',
                'province' => 'NEC',
            ),
            902 =>
            array(
                'name' => 'Valladolid',
                'province' => 'NEC',
            ),
            903 =>
            array(
                'name' => 'Victorias',
                'province' => 'NEC',
                'city' => true,
            ),
            904 =>
            array(
                'name' => 'Alburquerque',
                'province' => 'BOH',
            ),
            905 =>
            array(
                'name' => 'Alicia',
                'province' => 'BOH',
            ),
            906 =>
            array(
                'name' => 'Anda',
                'province' => 'BOH',
            ),
            907 =>
            array(
                'name' => 'Antequera',
                'province' => 'BOH',
            ),
            908 =>
            array(
                'name' => 'Baclayon',
                'province' => 'BOH',
            ),
            909 =>
            array(
                'name' => 'Balilihan',
                'province' => 'BOH',
            ),
            910 =>
            array(
                'name' => 'Batuan',
                'province' => 'BOH',
            ),
            911 =>
            array(
                'name' => 'Bien Unido',
                'province' => 'BOH',
            ),
            912 =>
            array(
                'name' => 'Bilar',
                'province' => 'BOH',
            ),
            913 =>
            array(
                'name' => 'Buenavista',
                'province' => 'BOH',
            ),
            914 =>
            array(
                'name' => 'Calape',
                'province' => 'BOH',
            ),
            915 =>
            array(
                'name' => 'Candijay',
                'province' => 'BOH',
            ),
            916 =>
            array(
                'name' => 'Carmen',
                'province' => 'BOH',
            ),
            917 =>
            array(
                'name' => 'Catigbian',
                'province' => 'BOH',
            ),
            918 =>
            array(
                'name' => 'Clarin',
                'province' => 'BOH',
            ),
            919 =>
            array(
                'name' => 'Corella',
                'province' => 'BOH',
            ),
            920 =>
            array(
                'name' => 'Cortes',
                'province' => 'BOH',
            ),
            921 =>
            array(
                'name' => 'Dagohoy',
                'province' => 'BOH',
            ),
            922 =>
            array(
                'name' => 'Danao',
                'province' => 'BOH',
            ),
            923 =>
            array(
                'name' => 'Dauis',
                'province' => 'BOH',
            ),
            924 =>
            array(
                'name' => 'Dimiao',
                'province' => 'BOH',
            ),
            925 =>
            array(
                'name' => 'Duero',
                'province' => 'BOH',
            ),
            926 =>
            array(
                'name' => 'Garcia Hernandez',
                'province' => 'BOH',
            ),
            927 =>
            array(
                'name' => 'Getafe',
                'province' => 'BOH',
            ),
            928 =>
            array(
                'name' => 'Guindulman',
                'province' => 'BOH',
            ),
            929 =>
            array(
                'name' => 'Inabanga',
                'province' => 'BOH',
            ),
            930 =>
            array(
                'name' => 'Jagna',
                'province' => 'BOH',
            ),
            931 =>
            array(
                'name' => 'Lila',
                'province' => 'BOH',
            ),
            932 =>
            array(
                'name' => 'Loay',
                'province' => 'BOH',
            ),
            933 =>
            array(
                'name' => 'Loboc',
                'province' => 'BOH',
            ),
            934 =>
            array(
                'name' => 'Loon',
                'province' => 'BOH',
            ),
            935 =>
            array(
                'name' => 'Mabini',
                'province' => 'BOH',
            ),
            936 =>
            array(
                'name' => 'Maribojoc',
                'province' => 'BOH',
            ),
            937 =>
            array(
                'name' => 'Panglao',
                'province' => 'BOH',
            ),
            938 =>
            array(
                'name' => 'Pilar',
                'province' => 'BOH',
            ),
            939 =>
            array(
                'name' => 'President Carlos P. Garcia',
                'province' => 'BOH',
            ),
            940 =>
            array(
                'name' => 'Sagbayan',
                'province' => 'BOH',
            ),
            941 =>
            array(
                'name' => 'San Isidro',
                'province' => 'BOH',
            ),
            942 =>
            array(
                'name' => 'San Miguel',
                'province' => 'BOH',
            ),
            943 =>
            array(
                'name' => 'Sevilla',
                'province' => 'BOH',
            ),
            944 =>
            array(
                'name' => 'Sierra Bullones',
                'province' => 'BOH',
            ),
            945 =>
            array(
                'name' => 'Sikatuna',
                'province' => 'BOH',
            ),
            946 =>
            array(
                'name' => 'Tagbilaran',
                'province' => 'BOH',
                'city' => true,
            ),
            947 =>
            array(
                'name' => 'Talibon',
                'province' => 'BOH',
            ),
            948 =>
            array(
                'name' => 'Trinidad',
                'province' => 'BOH',
            ),
            949 =>
            array(
                'name' => 'Tubigon',
                'province' => 'BOH',
            ),
            950 =>
            array(
                'name' => 'Ubay',
                'province' => 'BOH',
            ),
            951 =>
            array(
                'name' => 'Valencia',
                'province' => 'BOH',
            ),
            952 =>
            array(
                'name' => 'Alcantara',
                'province' => 'CEB',
            ),
            953 =>
            array(
                'name' => 'Alcoy',
                'province' => 'CEB',
            ),
            954 =>
            array(
                'name' => 'Alegria',
                'province' => 'CEB',
            ),
            955 =>
            array(
                'name' => 'Aloguinsan',
                'province' => 'CEB',
            ),
            956 =>
            array(
                'name' => 'Argao',
                'province' => 'CEB',
            ),
            957 =>
            array(
                'name' => 'Asturias',
                'province' => 'CEB',
            ),
            958 =>
            array(
                'name' => 'Badian',
                'province' => 'CEB',
            ),
            959 =>
            array(
                'name' => 'Balamban',
                'province' => 'CEB',
            ),
            960 =>
            array(
                'name' => 'Bantayan',
                'province' => 'CEB',
            ),
            961 =>
            array(
                'name' => 'Barili',
                'province' => 'CEB',
            ),
            962 =>
            array(
                'name' => 'Bogo',
                'province' => 'CEB',
                'city' => true,
            ),
            963 =>
            array(
                'name' => 'Boljoon',
                'province' => 'CEB',
            ),
            964 =>
            array(
                'name' => 'Borbon',
                'province' => 'CEB',
            ),
            965 =>
            array(
                'name' => 'Carcar',
                'province' => 'CEB',
                'city' => true,
            ),
            966 =>
            array(
                'name' => 'Carmen',
                'province' => 'CEB',
            ),
            967 =>
            array(
                'name' => 'Catmon',
                'province' => 'CEB',
            ),
            968 =>
            array(
                'name' => 'Cebu',
                'province' => 'CEB',
                'city' => true,
            ),
            969 =>
            array(
                'name' => 'Compostela',
                'province' => 'CEB',
            ),
            970 =>
            array(
                'name' => 'Consolacion',
                'province' => 'CEB',
            ),
            971 =>
            array(
                'name' => 'Cordoba',
                'province' => 'CEB',
            ),
            972 =>
            array(
                'name' => 'Daanbantayan',
                'province' => 'CEB',
            ),
            973 =>
            array(
                'name' => 'Dalaguete',
                'province' => 'CEB',
            ),
            974 =>
            array(
                'name' => 'Danao',
                'province' => 'CEB',
                'city' => true,
            ),
            975 =>
            array(
                'name' => 'Dumanjug',
                'province' => 'CEB',
            ),
            976 =>
            array(
                'name' => 'Ginatilan',
                'province' => 'CEB',
            ),
            977 =>
            array(
                'name' => 'Lapu-Lapu',
                'province' => 'CEB',
                'city' => true,
            ),
            978 =>
            array(
                'name' => 'Liloan',
                'province' => 'CEB',
            ),
            979 =>
            array(
                'name' => 'Madridejos',
                'province' => 'CEB',
            ),
            980 =>
            array(
                'name' => 'Malabuyoc',
                'province' => 'CEB',
            ),
            981 =>
            array(
                'name' => 'Mandaue',
                'province' => 'CEB',
                'city' => true,
            ),
            982 =>
            array(
                'name' => 'Medellin',
                'province' => 'CEB',
            ),
            983 =>
            array(
                'name' => 'Minglanilla',
                'province' => 'CEB',
            ),
            984 =>
            array(
                'name' => 'Moalboal',
                'province' => 'CEB',
            ),
            985 =>
            array(
                'name' => 'Naga',
                'province' => 'CEB',
                'city' => true,
            ),
            986 =>
            array(
                'name' => 'Oslob',
                'province' => 'CEB',
            ),
            987 =>
            array(
                'name' => 'Pilar',
                'province' => 'CEB',
            ),
            988 =>
            array(
                'name' => 'Pinamungajan',
                'province' => 'CEB',
            ),
            989 =>
            array(
                'name' => 'Poro',
                'province' => 'CEB',
            ),
            990 =>
            array(
                'name' => 'Ronda',
                'province' => 'CEB',
            ),
            991 =>
            array(
                'name' => 'Samboan',
                'province' => 'CEB',
            ),
            992 =>
            array(
                'name' => 'San Fernando',
                'province' => 'CEB',
            ),
            993 =>
            array(
                'name' => 'San Francisco',
                'province' => 'CEB',
            ),
            994 =>
            array(
                'name' => 'San Remigio',
                'province' => 'CEB',
            ),
            995 =>
            array(
                'name' => 'Santa Fe',
                'province' => 'CEB',
            ),
            996 =>
            array(
                'name' => 'Santander',
                'province' => 'CEB',
            ),
            997 =>
            array(
                'name' => 'Sibonga',
                'province' => 'CEB',
            ),
            998 =>
            array(
                'name' => 'Sogod',
                'province' => 'CEB',
            ),
            999 =>
            array(
                'name' => 'Tabogon',
                'province' => 'CEB',
            ),
            1000 =>
            array(
                'name' => 'Tabuelan',
                'province' => 'CEB',
            ),
            1001 =>
            array(
                'name' => 'Talisay',
                'province' => 'CEB',
                'city' => true,
            ),
            1002 =>
            array(
                'name' => 'Toledo',
                'province' => 'CEB',
                'city' => true,
            ),
            1003 =>
            array(
                'name' => 'Tuburan',
                'province' => 'CEB',
            ),
            1004 =>
            array(
                'name' => 'Tudela',
                'province' => 'CEB',
            ),
            1005 =>
            array(
                'name' => 'Amlan',
                'province' => 'NER',
            ),
            1006 =>
            array(
                'name' => 'Ayungon',
                'province' => 'NER',
            ),
            1007 =>
            array(
                'name' => 'Bacong',
                'province' => 'NER',
            ),
            1008 =>
            array(
                'name' => 'Bais',
                'province' => 'NER',
                'city' => true,
            ),
            1009 =>
            array(
                'name' => 'Basay',
                'province' => 'NER',
            ),
            1010 =>
            array(
                'name' => 'Bayawan',
                'province' => 'NER',
                'city' => true,
            ),
            1011 =>
            array(
                'name' => 'Bindoy',
                'province' => 'NER',
            ),
            1012 =>
            array(
                'name' => 'Canlaon',
                'province' => 'NER',
                'city' => true,
            ),
            1013 =>
            array(
                'name' => 'Dauin',
                'province' => 'NER',
            ),
            1014 =>
            array(
                'name' => 'Dumaguete',
                'province' => 'NER',
                'city' => true,
            ),
            1015 =>
            array(
                'name' => 'Guihulngan',
                'province' => 'NER',
                'city' => true,
            ),
            1016 =>
            array(
                'name' => 'Jimalalud',
                'province' => 'NER',
            ),
            1017 =>
            array(
                'name' => 'La Libertad',
                'province' => 'NER',
            ),
            1018 =>
            array(
                'name' => 'Mabinay',
                'province' => 'NER',
            ),
            1019 =>
            array(
                'name' => 'Manjuyod',
                'province' => 'NER',
            ),
            1020 =>
            array(
                'name' => 'Pamplona',
                'province' => 'NER',
            ),
            1021 =>
            array(
                'name' => 'San Jose',
                'province' => 'NER',
            ),
            1022 =>
            array(
                'name' => 'Santa Catalina',
                'province' => 'NER',
            ),
            1023 =>
            array(
                'name' => 'Siaton',
                'province' => 'NER',
            ),
            1024 =>
            array(
                'name' => 'Sibulan',
                'province' => 'NER',
            ),
            1025 =>
            array(
                'name' => 'Tanjay',
                'province' => 'NER',
                'city' => true,
            ),
            1026 =>
            array(
                'name' => 'Tayasan',
                'province' => 'NER',
            ),
            1027 =>
            array(
                'name' => 'Valencia',
                'province' => 'NER',
            ),
            1028 =>
            array(
                'name' => 'Vallehermoso',
                'province' => 'NER',
            ),
            1029 =>
            array(
                'name' => 'Zamboanguita',
                'province' => 'NER',
            ),
            1030 =>
            array(
                'name' => 'Enrique Villanueva',
                'province' => 'SIG',
            ),
            1031 =>
            array(
                'name' => 'Larena',
                'province' => 'SIG',
            ),
            1032 =>
            array(
                'name' => 'Lazi',
                'province' => 'SIG',
            ),
            1033 =>
            array(
                'name' => 'Maria',
                'province' => 'SIG',
            ),
            1034 =>
            array(
                'name' => 'San Juan',
                'province' => 'SIG',
            ),
            1035 =>
            array(
                'name' => 'Siquijor',
                'province' => 'SIG',
            ),
            1036 =>
            array(
                'name' => 'Almeria',
                'province' => 'BIL',
            ),
            1037 =>
            array(
                'name' => 'Biliran',
                'province' => 'BIL',
            ),
            1038 =>
            array(
                'name' => 'Cabucgayan',
                'province' => 'BIL',
            ),
            1039 =>
            array(
                'name' => 'Caibiran',
                'province' => 'BIL',
            ),
            1040 =>
            array(
                'name' => 'Culaba',
                'province' => 'BIL',
            ),
            1041 =>
            array(
                'name' => 'Kawayan',
                'province' => 'BIL',
            ),
            1042 =>
            array(
                'name' => 'Maripipi',
                'province' => 'BIL',
            ),
            1043 =>
            array(
                'name' => 'Naval',
                'province' => 'BIL',
            ),
            1044 =>
            array(
                'name' => 'Arteche',
                'province' => 'EAS',
            ),
            1045 =>
            array(
                'name' => 'Balangiga',
                'province' => 'EAS',
            ),
            1046 =>
            array(
                'name' => 'Balangkayan',
                'province' => 'EAS',
            ),
            1047 =>
            array(
                'name' => 'Borongan',
                'province' => 'EAS',
                'city' => true,
            ),
            1048 =>
            array(
                'name' => 'Can-avid',
                'province' => 'EAS',
            ),
            1049 =>
            array(
                'name' => 'Dolores',
                'province' => 'EAS',
            ),
            1050 =>
            array(
                'name' => 'General MacArthur',
                'province' => 'EAS',
            ),
            1051 =>
            array(
                'name' => 'Giporlos',
                'province' => 'EAS',
            ),
            1052 =>
            array(
                'name' => 'Guiuan',
                'province' => 'EAS',
            ),
            1053 =>
            array(
                'name' => 'Hernani',
                'province' => 'EAS',
            ),
            1054 =>
            array(
                'name' => 'Jipapad',
                'province' => 'EAS',
            ),
            1055 =>
            array(
                'name' => 'Lawaan',
                'province' => 'EAS',
            ),
            1056 =>
            array(
                'name' => 'Llorente',
                'province' => 'EAS',
            ),
            1057 =>
            array(
                'name' => 'Maslog',
                'province' => 'EAS',
            ),
            1058 =>
            array(
                'name' => 'Maydolong',
                'province' => 'EAS',
            ),
            1059 =>
            array(
                'name' => 'Mercedes',
                'province' => 'EAS',
            ),
            1060 =>
            array(
                'name' => 'Oras',
                'province' => 'EAS',
            ),
            1061 =>
            array(
                'name' => 'Quinapondan',
                'province' => 'EAS',
            ),
            1062 =>
            array(
                'name' => 'Salcedo',
                'province' => 'EAS',
            ),
            1063 =>
            array(
                'name' => 'San Julian',
                'province' => 'EAS',
            ),
            1064 =>
            array(
                'name' => 'San Policarpo',
                'province' => 'EAS',
            ),
            1065 =>
            array(
                'name' => 'Sulat',
                'province' => 'EAS',
            ),
            1066 =>
            array(
                'name' => 'Taft',
                'province' => 'EAS',
            ),
            1067 =>
            array(
                'name' => 'Abuyog',
                'province' => 'LEY',
            ),
            1068 =>
            array(
                'name' => 'Alangalang',
                'province' => 'LEY',
            ),
            1069 =>
            array(
                'name' => 'Albuera',
                'province' => 'LEY',
            ),
            1070 =>
            array(
                'name' => 'Babatngon',
                'province' => 'LEY',
            ),
            1071 =>
            array(
                'name' => 'Barugo',
                'province' => 'LEY',
            ),
            1072 =>
            array(
                'name' => 'Bato',
                'province' => 'LEY',
            ),
            1073 =>
            array(
                'name' => 'Baybay',
                'province' => 'LEY',
                'city' => true,
            ),
            1074 =>
            array(
                'name' => 'Burauen',
                'province' => 'LEY',
            ),
            1075 =>
            array(
                'name' => 'Calubian',
                'province' => 'LEY',
            ),
            1076 =>
            array(
                'name' => 'Capoocan',
                'province' => 'LEY',
            ),
            1077 =>
            array(
                'name' => 'Carigara',
                'province' => 'LEY',
            ),
            1078 =>
            array(
                'name' => 'Dagami',
                'province' => 'LEY',
            ),
            1079 =>
            array(
                'name' => 'Dulag',
                'province' => 'LEY',
            ),
            1080 =>
            array(
                'name' => 'Hilongos',
                'province' => 'LEY',
            ),
            1081 =>
            array(
                'name' => 'Hindang',
                'province' => 'LEY',
            ),
            1082 =>
            array(
                'name' => 'Inopacan',
                'province' => 'LEY',
            ),
            1083 =>
            array(
                'name' => 'Isabel',
                'province' => 'LEY',
            ),
            1084 =>
            array(
                'name' => 'Jaro',
                'province' => 'LEY',
            ),
            1085 =>
            array(
                'name' => 'Javier',
                'province' => 'LEY',
            ),
            1086 =>
            array(
                'name' => 'Julita',
                'province' => 'LEY',
            ),
            1087 =>
            array(
                'name' => 'Kananga',
                'province' => 'LEY',
            ),
            1088 =>
            array(
                'name' => 'La Paz',
                'province' => 'LEY',
            ),
            1089 =>
            array(
                'name' => 'Leyte',
                'province' => 'LEY',
            ),
            1090 =>
            array(
                'name' => 'MacArthur',
                'province' => 'LEY',
            ),
            1091 =>
            array(
                'name' => 'Mahaplag',
                'province' => 'LEY',
            ),
            1092 =>
            array(
                'name' => 'Matag-ob',
                'province' => 'LEY',
            ),
            1093 =>
            array(
                'name' => 'Matalom',
                'province' => 'LEY',
            ),
            1094 =>
            array(
                'name' => 'Mayorga',
                'province' => 'LEY',
            ),
            1095 =>
            array(
                'name' => 'Merida',
                'province' => 'LEY',
            ),
            1096 =>
            array(
                'name' => 'Ormoc',
                'province' => 'LEY',
                'city' => true,
            ),
            1097 =>
            array(
                'name' => 'Palo',
                'province' => 'LEY',
            ),
            1098 =>
            array(
                'name' => 'Palompon',
                'province' => 'LEY',
            ),
            1099 =>
            array(
                'name' => 'Pastrana',
                'province' => 'LEY',
            ),
            1100 =>
            array(
                'name' => 'San Isidro',
                'province' => 'LEY',
            ),
            1101 =>
            array(
                'name' => 'San Miguel',
                'province' => 'LEY',
            ),
            1102 =>
            array(
                'name' => 'Santa Fe',
                'province' => 'LEY',
            ),
            1103 =>
            array(
                'name' => 'Tabango',
                'province' => 'LEY',
            ),
            1104 =>
            array(
                'name' => 'Tabontabon',
                'province' => 'LEY',
            ),
            1105 =>
            array(
                'name' => 'Tacloban',
                'province' => 'LEY',
                'city' => true,
            ),
            1106 =>
            array(
                'name' => 'Tanauan',
                'province' => 'LEY',
            ),
            1107 =>
            array(
                'name' => 'Tolosa',
                'province' => 'LEY',
            ),
            1108 =>
            array(
                'name' => 'Tunga',
                'province' => 'LEY',
            ),
            1109 =>
            array(
                'name' => 'Villaba',
                'province' => 'LEY',
            ),
            1110 =>
            array(
                'name' => 'Allen',
                'province' => 'NSA',
            ),
            1111 =>
            array(
                'name' => 'Biri',
                'province' => 'NSA',
            ),
            1112 =>
            array(
                'name' => 'Bobon',
                'province' => 'NSA',
            ),
            1113 =>
            array(
                'name' => 'Capul',
                'province' => 'NSA',
            ),
            1114 =>
            array(
                'name' => 'Catarman',
                'province' => 'NSA',
            ),
            1115 =>
            array(
                'name' => 'Catubig',
                'province' => 'NSA',
            ),
            1116 =>
            array(
                'name' => 'Gamay',
                'province' => 'NSA',
            ),
            1117 =>
            array(
                'name' => 'Laoang',
                'province' => 'NSA',
            ),
            1118 =>
            array(
                'name' => 'Lapinig',
                'province' => 'NSA',
            ),
            1119 =>
            array(
                'name' => 'Las Navas',
                'province' => 'NSA',
            ),
            1120 =>
            array(
                'name' => 'Lavezares',
                'province' => 'NSA',
            ),
            1121 =>
            array(
                'name' => 'Lope de Vega',
                'province' => 'NSA',
            ),
            1122 =>
            array(
                'name' => 'Mapanas',
                'province' => 'NSA',
            ),
            1123 =>
            array(
                'name' => 'Mondragon',
                'province' => 'NSA',
            ),
            1124 =>
            array(
                'name' => 'Palapag',
                'province' => 'NSA',
            ),
            1125 =>
            array(
                'name' => 'Pambujan',
                'province' => 'NSA',
            ),
            1126 =>
            array(
                'name' => 'Rosario',
                'province' => 'NSA',
            ),
            1127 =>
            array(
                'name' => 'San Antonio',
                'province' => 'NSA',
            ),
            1128 =>
            array(
                'name' => 'San Isidro',
                'province' => 'NSA',
            ),
            1129 =>
            array(
                'name' => 'San Jose',
                'province' => 'NSA',
            ),
            1130 =>
            array(
                'name' => 'San Roque',
                'province' => 'NSA',
            ),
            1131 =>
            array(
                'name' => 'San Vicente',
                'province' => 'NSA',
            ),
            1132 =>
            array(
                'name' => 'Silvino Lobos',
                'province' => 'NSA',
            ),
            1133 =>
            array(
                'name' => 'Victoria',
                'province' => 'NSA',
            ),
            1134 =>
            array(
                'name' => 'Almagro',
                'province' => 'WSA',
            ),
            1135 =>
            array(
                'name' => 'Basey',
                'province' => 'WSA',
            ),
            1136 =>
            array(
                'name' => 'Calbayog',
                'province' => 'WSA',
                'city' => true,
            ),
            1137 =>
            array(
                'name' => 'Calbiga',
                'province' => 'WSA',
            ),
            1138 =>
            array(
                'name' => 'Catbalogan',
                'province' => 'WSA',
                'city' => true,
            ),
            1139 =>
            array(
                'name' => 'Daram',
                'province' => 'WSA',
            ),
            1140 =>
            array(
                'name' => 'Gandara',
                'province' => 'WSA',
            ),
            1141 =>
            array(
                'name' => 'Hinabangan',
                'province' => 'WSA',
            ),
            1142 =>
            array(
                'name' => 'Jiabong',
                'province' => 'WSA',
            ),
            1143 =>
            array(
                'name' => 'Marabut',
                'province' => 'WSA',
            ),
            1144 =>
            array(
                'name' => 'Matuguinao',
                'province' => 'WSA',
            ),
            1145 =>
            array(
                'name' => 'Motiong',
                'province' => 'WSA',
            ),
            1146 =>
            array(
                'name' => 'Pagsanghan',
                'province' => 'WSA',
            ),
            1147 =>
            array(
                'name' => 'Paranas',
                'province' => 'WSA',
            ),
            1148 =>
            array(
                'name' => 'Pinabacdao',
                'province' => 'WSA',
            ),
            1149 =>
            array(
                'name' => 'San Jorge',
                'province' => 'WSA',
            ),
            1150 =>
            array(
                'name' => 'San Jose de Buan',
                'province' => 'WSA',
            ),
            1151 =>
            array(
                'name' => 'San Sebastian',
                'province' => 'WSA',
            ),
            1152 =>
            array(
                'name' => 'Santa Margarita',
                'province' => 'WSA',
            ),
            1153 =>
            array(
                'name' => 'Santa Rita',
                'province' => 'WSA',
            ),
            1154 =>
            array(
                'name' => 'Santo Niño',
                'province' => 'WSA',
            ),
            1155 =>
            array(
                'name' => 'Tagapul-an',
                'province' => 'WSA',
            ),
            1156 =>
            array(
                'name' => 'Talalora',
                'province' => 'WSA',
            ),
            1157 =>
            array(
                'name' => 'Tarangnan',
                'province' => 'WSA',
            ),
            1158 =>
            array(
                'name' => 'Villareal',
                'province' => 'WSA',
            ),
            1159 =>
            array(
                'name' => 'Zumarraga',
                'province' => 'WSA',
            ),
            1160 =>
            array(
                'name' => 'Anahawan',
                'province' => 'SLE',
            ),
            1161 =>
            array(
                'name' => 'Bontoc',
                'province' => 'SLE',
            ),
            1162 =>
            array(
                'name' => 'Hinunangan',
                'province' => 'SLE',
            ),
            1163 =>
            array(
                'name' => 'Hinundayan',
                'province' => 'SLE',
            ),
            1164 =>
            array(
                'name' => 'Libagon',
                'province' => 'SLE',
            ),
            1165 =>
            array(
                'name' => 'Liloan',
                'province' => 'SLE',
            ),
            1166 =>
            array(
                'name' => 'Limasawa',
                'province' => 'SLE',
            ),
            1167 =>
            array(
                'name' => 'Maasin',
                'province' => 'SLE',
                'city' => true,
            ),
            1168 =>
            array(
                'name' => 'Macrohon',
                'province' => 'SLE',
            ),
            1169 =>
            array(
                'name' => 'Malitbog',
                'province' => 'SLE',
            ),
            1170 =>
            array(
                'name' => 'Padre Burgos',
                'province' => 'SLE',
            ),
            1171 =>
            array(
                'name' => 'Pintuyan',
                'province' => 'SLE',
            ),
            1172 =>
            array(
                'name' => 'Saint Bernard',
                'province' => 'SLE',
            ),
            1173 =>
            array(
                'name' => 'San Francisco',
                'province' => 'SLE',
            ),
            1174 =>
            array(
                'name' => 'San Juan',
                'province' => 'SLE',
            ),
            1175 =>
            array(
                'name' => 'San Ricardo',
                'province' => 'SLE',
            ),
            1176 =>
            array(
                'name' => 'Silago',
                'province' => 'SLE',
            ),
            1177 =>
            array(
                'name' => 'Sogod',
                'province' => 'SLE',
            ),
            1178 =>
            array(
                'name' => 'Tomas Oppus',
                'province' => 'SLE',
            ),
            1179 =>
            array(
                'name' => 'Baliguian',
                'province' => 'ZAN',
            ),
            1180 =>
            array(
                'name' => 'Dapitan',
                'province' => 'ZAN',
                'city' => true,
            ),
            1181 =>
            array(
                'name' => 'Dipolog',
                'province' => 'ZAN',
                'city' => true,
            ),
            1182 =>
            array(
                'name' => 'Godod',
                'province' => 'ZAN',
            ),
            1183 =>
            array(
                'name' => 'Gutalac',
                'province' => 'ZAN',
            ),
            1184 =>
            array(
                'name' => 'Jose Dalman',
                'province' => 'ZAN',
            ),
            1185 =>
            array(
                'name' => 'Kalawit',
                'province' => 'ZAN',
            ),
            1186 =>
            array(
                'name' => 'Katipunan',
                'province' => 'ZAN',
            ),
            1187 =>
            array(
                'name' => 'La Libertad',
                'province' => 'ZAN',
            ),
            1188 =>
            array(
                'name' => 'Labason',
                'province' => 'ZAN',
            ),
            1189 =>
            array(
                'name' => 'Leon B. Postigo',
                'province' => 'ZAN',
            ),
            1190 =>
            array(
                'name' => 'Liloy',
                'province' => 'ZAN',
            ),
            1191 =>
            array(
                'name' => 'Manukan',
                'province' => 'ZAN',
            ),
            1192 =>
            array(
                'name' => 'Mutia',
                'province' => 'ZAN',
            ),
            1193 =>
            array(
                'name' => 'Piñan',
                'province' => 'ZAN',
            ),
            1194 =>
            array(
                'name' => 'Polanco',
                'province' => 'ZAN',
            ),
            1195 =>
            array(
                'name' => 'President Manuel A. Roxas',
                'province' => 'ZAN',
            ),
            1196 =>
            array(
                'name' => 'Rizal',
                'province' => 'ZAN',
            ),
            1197 =>
            array(
                'name' => 'Salug',
                'province' => 'ZAN',
            ),
            1198 =>
            array(
                'name' => 'Sergio Osmeña Sr.',
                'province' => 'ZAN',
            ),
            1199 =>
            array(
                'name' => 'Siayan',
                'province' => 'ZAN',
            ),
            1200 =>
            array(
                'name' => 'Sibuco',
                'province' => 'ZAN',
            ),
            1201 =>
            array(
                'name' => 'Sibutad',
                'province' => 'ZAN',
            ),
            1202 =>
            array(
                'name' => 'Sindangan',
                'province' => 'ZAN',
            ),
            1203 =>
            array(
                'name' => 'Siocon',
                'province' => 'ZAN',
            ),
            1204 =>
            array(
                'name' => 'Sirawai',
                'province' => 'ZAN',
            ),
            1205 =>
            array(
                'name' => 'Tampilisan',
                'province' => 'ZAN',
            ),
            1206 =>
            array(
                'name' => 'Aurora',
                'province' => 'ZAS',
            ),
            1207 =>
            array(
                'name' => 'Bayog',
                'province' => 'ZAS',
            ),
            1208 =>
            array(
                'name' => 'Dimataling',
                'province' => 'ZAS',
            ),
            1209 =>
            array(
                'name' => 'Dinas',
                'province' => 'ZAS',
            ),
            1210 =>
            array(
                'name' => 'Dumalinao',
                'province' => 'ZAS',
            ),
            1211 =>
            array(
                'name' => 'Dumingag',
                'province' => 'ZAS',
            ),
            1212 =>
            array(
                'name' => 'Guipos',
                'province' => 'ZAS',
            ),
            1213 =>
            array(
                'name' => 'Josefina',
                'province' => 'ZAS',
            ),
            1214 =>
            array(
                'name' => 'Kumalarang',
                'province' => 'ZAS',
            ),
            1215 =>
            array(
                'name' => 'Labangan',
                'province' => 'ZAS',
            ),
            1216 =>
            array(
                'name' => 'Lakewood',
                'province' => 'ZAS',
            ),
            1217 =>
            array(
                'name' => 'Lapuyan',
                'province' => 'ZAS',
            ),
            1218 =>
            array(
                'name' => 'Mahayag',
                'province' => 'ZAS',
            ),
            1219 =>
            array(
                'name' => 'Margosatubig',
                'province' => 'ZAS',
            ),
            1220 =>
            array(
                'name' => 'Midsalip',
                'province' => 'ZAS',
            ),
            1221 =>
            array(
                'name' => 'Molave',
                'province' => 'ZAS',
            ),
            1222 =>
            array(
                'name' => 'Pagadian',
                'province' => 'ZAS',
                'city' => true,
            ),
            1223 =>
            array(
                'name' => 'Pitogo',
                'province' => 'ZAS',
            ),
            1224 =>
            array(
                'name' => 'Ramon Magsaysay',
                'province' => 'ZAS',
            ),
            1225 =>
            array(
                'name' => 'San Miguel',
                'province' => 'ZAS',
            ),
            1226 =>
            array(
                'name' => 'San Pablo',
                'province' => 'ZAS',
            ),
            1227 =>
            array(
                'name' => 'Sominot',
                'province' => 'ZAS',
            ),
            1228 =>
            array(
                'name' => 'Tabina',
                'province' => 'ZAS',
            ),
            1229 =>
            array(
                'name' => 'Tambulig',
                'province' => 'ZAS',
            ),
            1230 =>
            array(
                'name' => 'Tigbao',
                'province' => 'ZAS',
            ),
            1231 =>
            array(
                'name' => 'Tukuran',
                'province' => 'ZAS',
            ),
            1232 =>
            array(
                'name' => 'Vincenzo A. Sagun',
                'province' => 'ZAS',
            ),
            1233 =>
            array(
                'name' => 'Zamboanga',
                'province' => 'ZAS',
                'city' => true,
            ),
            1234 =>
            array(
                'name' => 'Alicia',
                'province' => 'ZSI',
            ),
            1235 =>
            array(
                'name' => 'Buug',
                'province' => 'ZSI',
            ),
            1236 =>
            array(
                'name' => 'Diplahan',
                'province' => 'ZSI',
            ),
            1237 =>
            array(
                'name' => 'Imelda',
                'province' => 'ZSI',
            ),
            1238 =>
            array(
                'name' => 'Ipil',
                'province' => 'ZSI',
            ),
            1239 =>
            array(
                'name' => 'Kabasalan',
                'province' => 'ZSI',
            ),
            1240 =>
            array(
                'name' => 'Mabuhay',
                'province' => 'ZSI',
            ),
            1241 =>
            array(
                'name' => 'Malangas',
                'province' => 'ZSI',
            ),
            1242 =>
            array(
                'name' => 'Naga',
                'province' => 'ZSI',
            ),
            1243 =>
            array(
                'name' => 'Olutanga',
                'province' => 'ZSI',
            ),
            1244 =>
            array(
                'name' => 'Payao',
                'province' => 'ZSI',
            ),
            1245 =>
            array(
                'name' => 'Roseller Lim',
                'province' => 'ZSI',
            ),
            1246 =>
            array(
                'name' => 'Siay',
                'province' => 'ZSI',
            ),
            1247 =>
            array(
                'name' => 'Talusan',
                'province' => 'ZSI',
            ),
            1248 =>
            array(
                'name' => 'Titay',
                'province' => 'ZSI',
            ),
            1249 =>
            array(
                'name' => 'Tungawan',
                'province' => 'ZSI',
            ),
            1250 =>
            array(
                'name' => 'Baungon',
                'province' => 'BUK',
            ),
            1251 =>
            array(
                'name' => 'Cabanglasan',
                'province' => 'BUK',
            ),
            1252 =>
            array(
                'name' => 'Damulog',
                'province' => 'BUK',
            ),
            1253 =>
            array(
                'name' => 'Dangcagan',
                'province' => 'BUK',
            ),
            1254 =>
            array(
                'name' => 'Don Carlos',
                'province' => 'BUK',
            ),
            1255 =>
            array(
                'name' => 'Impasugong',
                'province' => 'BUK',
            ),
            1256 =>
            array(
                'name' => 'Kadingilan',
                'province' => 'BUK',
            ),
            1257 =>
            array(
                'name' => 'Kalilangan',
                'province' => 'BUK',
            ),
            1258 =>
            array(
                'name' => 'Kibawe',
                'province' => 'BUK',
            ),
            1259 =>
            array(
                'name' => 'Kitaotao',
                'province' => 'BUK',
            ),
            1260 =>
            array(
                'name' => 'Lantapan',
                'province' => 'BUK',
            ),
            1261 =>
            array(
                'name' => 'Libona',
                'province' => 'BUK',
            ),
            1262 =>
            array(
                'name' => 'Malaybalay',
                'province' => 'BUK',
                'city' => true,
            ),
            1263 =>
            array(
                'name' => 'Malitbog',
                'province' => 'BUK',
            ),
            1264 =>
            array(
                'name' => 'Manolo Fortich',
                'province' => 'BUK',
            ),
            1265 =>
            array(
                'name' => 'Maramag',
                'province' => 'BUK',
            ),
            1266 =>
            array(
                'name' => 'Pangantucan',
                'province' => 'BUK',
            ),
            1267 =>
            array(
                'name' => 'Quezon',
                'province' => 'BUK',
            ),
            1268 =>
            array(
                'name' => 'San Fernando',
                'province' => 'BUK',
            ),
            1269 =>
            array(
                'name' => 'Sumilao',
                'province' => 'BUK',
            ),
            1270 =>
            array(
                'name' => 'Talakag',
                'province' => 'BUK',
            ),
            1271 =>
            array(
                'name' => 'Valencia',
                'province' => 'BUK',
                'city' => true,
            ),
            1272 =>
            array(
                'name' => 'Catarman',
                'province' => 'CAM',
            ),
            1273 =>
            array(
                'name' => 'Guinsiliban',
                'province' => 'CAM',
            ),
            1274 =>
            array(
                'name' => 'Mahinog',
                'province' => 'CAM',
            ),
            1275 =>
            array(
                'name' => 'Mambajao',
                'province' => 'CAM',
            ),
            1276 =>
            array(
                'name' => 'Sagay',
                'province' => 'CAM',
            ),
            1277 =>
            array(
                'name' => 'Bacolod',
                'province' => 'LAN',
            ),
            1278 =>
            array(
                'name' => 'Baloi',
                'province' => 'LAN',
            ),
            1279 =>
            array(
                'name' => 'Baroy',
                'province' => 'LAN',
            ),
            1280 =>
            array(
                'name' => 'Iligan',
                'province' => 'LAN',
                'city' => true,
            ),
            1281 =>
            array(
                'name' => 'Kapatagan',
                'province' => 'LAN',
            ),
            1282 =>
            array(
                'name' => 'Kauswagan',
                'province' => 'LAN',
            ),
            1283 =>
            array(
                'name' => 'Kolambugan',
                'province' => 'LAN',
            ),
            1284 =>
            array(
                'name' => 'Lala',
                'province' => 'LAN',
            ),
            1285 =>
            array(
                'name' => 'Linamon',
                'province' => 'LAN',
            ),
            1286 =>
            array(
                'name' => 'Magsaysay',
                'province' => 'LAN',
            ),
            1287 =>
            array(
                'name' => 'Maigo',
                'province' => 'LAN',
            ),
            1288 =>
            array(
                'name' => 'Matungao',
                'province' => 'LAN',
            ),
            1289 =>
            array(
                'name' => 'Munai',
                'province' => 'LAN',
            ),
            1290 =>
            array(
                'name' => 'Nunungan',
                'province' => 'LAN',
            ),
            1291 =>
            array(
                'name' => 'Pantao Ragat',
                'province' => 'LAN',
            ),
            1292 =>
            array(
                'name' => 'Pantar',
                'province' => 'LAN',
            ),
            1293 =>
            array(
                'name' => 'Poona Piagapo',
                'province' => 'LAN',
            ),
            1294 =>
            array(
                'name' => 'Salvador',
                'province' => 'LAN',
            ),
            1295 =>
            array(
                'name' => 'Sapad',
                'province' => 'LAN',
            ),
            1296 =>
            array(
                'name' => 'Sultan Naga Dimaporo',
                'province' => 'LAN',
            ),
            1297 =>
            array(
                'name' => 'Tagoloan',
                'province' => 'LAN',
            ),
            1298 =>
            array(
                'name' => 'Tangcal',
                'province' => 'LAN',
            ),
            1299 =>
            array(
                'name' => 'Tubod',
                'province' => 'LAN',
            ),
            1300 =>
            array(
                'name' => 'Aloran',
                'province' => 'MSC',
            ),
            1301 =>
            array(
                'name' => 'Baliangao',
                'province' => 'MSC',
            ),
            1302 =>
            array(
                'name' => 'Bonifacio',
                'province' => 'MSC',
            ),
            1303 =>
            array(
                'name' => 'Calamba',
                'province' => 'MSC',
            ),
            1304 =>
            array(
                'name' => 'Clarin',
                'province' => 'MSC',
            ),
            1305 =>
            array(
                'name' => 'Concepcion',
                'province' => 'MSC',
            ),
            1306 =>
            array(
                'name' => 'Don Victoriano Chiongbian',
                'province' => 'MSC',
            ),
            1307 =>
            array(
                'name' => 'Jimenez',
                'province' => 'MSC',
            ),
            1308 =>
            array(
                'name' => 'Lopez Jaena',
                'province' => 'MSC',
            ),
            1309 =>
            array(
                'name' => 'Oroquieta',
                'province' => 'MSC',
                'city' => true,
            ),
            1310 =>
            array(
                'name' => 'Ozamiz',
                'province' => 'MSC',
                'city' => true,
            ),
            1311 =>
            array(
                'name' => 'Panaon',
                'province' => 'MSC',
            ),
            1312 =>
            array(
                'name' => 'Plaridel',
                'province' => 'MSC',
            ),
            1313 =>
            array(
                'name' => 'Sapang Dalaga',
                'province' => 'MSC',
            ),
            1314 =>
            array(
                'name' => 'Sinacaban',
                'province' => 'MSC',
            ),
            1315 =>
            array(
                'name' => 'Tangub',
                'province' => 'MSC',
                'city' => true,
            ),
            1316 =>
            array(
                'name' => 'Tudela',
                'province' => 'MSC',
            ),
            1317 =>
            array(
                'name' => 'Alubijid',
                'province' => 'MSR',
            ),
            1318 =>
            array(
                'name' => 'Balingasag',
                'province' => 'MSR',
            ),
            1319 =>
            array(
                'name' => 'Balingoan',
                'province' => 'MSR',
            ),
            1320 =>
            array(
                'name' => 'Binuangan',
                'province' => 'MSR',
            ),
            1321 =>
            array(
                'name' => 'Cagayan de Oro',
                'province' => 'MSR',
                'city' => true,
            ),
            1322 =>
            array(
                'name' => 'Claveria',
                'province' => 'MSR',
            ),
            1323 =>
            array(
                'name' => 'El Salvador',
                'province' => 'MSR',
                'city' => true,
            ),
            1324 =>
            array(
                'name' => 'Gingoog',
                'province' => 'MSR',
                'city' => true,
            ),
            1325 =>
            array(
                'name' => 'Gitagum',
                'province' => 'MSR',
            ),
            1326 =>
            array(
                'name' => 'Initao',
                'province' => 'MSR',
            ),
            1327 =>
            array(
                'name' => 'Jasaan',
                'province' => 'MSR',
            ),
            1328 =>
            array(
                'name' => 'Kinoguitan',
                'province' => 'MSR',
            ),
            1329 =>
            array(
                'name' => 'Lagonglong',
                'province' => 'MSR',
            ),
            1330 =>
            array(
                'name' => 'Laguindingan',
                'province' => 'MSR',
            ),
            1331 =>
            array(
                'name' => 'Libertad',
                'province' => 'MSR',
            ),
            1332 =>
            array(
                'name' => 'Lugait',
                'province' => 'MSR',
            ),
            1333 =>
            array(
                'name' => 'Magsaysay',
                'province' => 'MSR',
            ),
            1334 =>
            array(
                'name' => 'Manticao',
                'province' => 'MSR',
            ),
            1335 =>
            array(
                'name' => 'Medina',
                'province' => 'MSR',
            ),
            1336 =>
            array(
                'name' => 'Naawan',
                'province' => 'MSR',
            ),
            1337 =>
            array(
                'name' => 'Opol',
                'province' => 'MSR',
            ),
            1338 =>
            array(
                'name' => 'Salay',
                'province' => 'MSR',
            ),
            1339 =>
            array(
                'name' => 'Sugbongcogon',
                'province' => 'MSR',
            ),
            1340 =>
            array(
                'name' => 'Tagoloan',
                'province' => 'MSR',
            ),
            1341 =>
            array(
                'name' => 'Talisayan',
                'province' => 'MSR',
            ),
            1342 =>
            array(
                'name' => 'Villanueva',
                'province' => 'MSR',
            ),
            1343 =>
            array(
                'name' => 'Compostela',
                'province' => 'COM',
            ),
            1344 =>
            array(
                'name' => 'Laak',
                'province' => 'COM',
            ),
            1345 =>
            array(
                'name' => 'Mabini',
                'province' => 'COM',
            ),
            1346 =>
            array(
                'name' => 'Maco',
                'province' => 'COM',
            ),
            1347 =>
            array(
                'name' => 'Maragusan',
                'province' => 'COM',
            ),
            1348 =>
            array(
                'name' => 'Mawab',
                'province' => 'COM',
            ),
            1349 =>
            array(
                'name' => 'Monkayo',
                'province' => 'COM',
            ),
            1350 =>
            array(
                'name' => 'Montevista',
                'province' => 'COM',
            ),
            1351 =>
            array(
                'name' => 'Nabunturan',
                'province' => 'COM',
            ),
            1352 =>
            array(
                'name' => 'New Bataan',
                'province' => 'COM',
            ),
            1353 =>
            array(
                'name' => 'Pantukan',
                'province' => 'COM',
            ),
            1354 =>
            array(
                'name' => 'Asuncion',
                'province' => 'DAV',
            ),
            1355 =>
            array(
                'name' => 'Braulio E. Dujali',
                'province' => 'DAV',
            ),
            1356 =>
            array(
                'name' => 'Carmen',
                'province' => 'DAV',
            ),
            1357 =>
            array(
                'name' => 'Kapalong',
                'province' => 'DAV',
            ),
            1358 =>
            array(
                'name' => 'New Corella',
                'province' => 'DAV',
            ),
            1359 =>
            array(
                'name' => 'Panabo',
                'province' => 'DAV',
                'city' => true,
            ),
            1360 =>
            array(
                'name' => 'Samal',
                'province' => 'DAV',
                'city' => true,
            ),
            1361 =>
            array(
                'name' => 'San Isidro',
                'province' => 'DAV',
            ),
            1362 =>
            array(
                'name' => 'Santo Tomas',
                'province' => 'DAV',
            ),
            1363 =>
            array(
                'name' => 'Tagum',
                'province' => 'DAV',
                'city' => true,
            ),
            1364 =>
            array(
                'name' => 'Talaingod',
                'province' => 'DAV',
            ),
            1365 =>
            array(
                'name' => 'Bansalan',
                'province' => 'DAS',
            ),
            1366 =>
            array(
                'name' => 'Davao',
                'province' => 'DAS',
                'city' => true,
            ),
            1367 =>
            array(
                'name' => 'Digos',
                'province' => 'DAS',
                'city' => true,
            ),
            1368 =>
            array(
                'name' => 'Hagonoy',
                'province' => 'DAS',
            ),
            1369 =>
            array(
                'name' => 'Kiblawan',
                'province' => 'DAS',
            ),
            1370 =>
            array(
                'name' => 'Magsaysay',
                'province' => 'DAS',
            ),
            1371 =>
            array(
                'name' => 'Malalag',
                'province' => 'DAS',
            ),
            1372 =>
            array(
                'name' => 'Matanao',
                'province' => 'DAS',
            ),
            1373 =>
            array(
                'name' => 'Padada',
                'province' => 'DAS',
            ),
            1374 =>
            array(
                'name' => 'Santa Cruz',
                'province' => 'DAS',
            ),
            1375 =>
            array(
                'name' => 'Sulop',
                'province' => 'DAS',
            ),
            1376 =>
            array(
                'name' => 'Don Marcelino',
                'province' => 'DAC',
            ),
            1377 =>
            array(
                'name' => 'Jose Abad Santos',
                'province' => 'DAC',
            ),
            1378 =>
            array(
                'name' => 'Malita',
                'province' => 'DAC',
            ),
            1379 =>
            array(
                'name' => 'Santa Maria',
                'province' => 'DAC',
            ),
            1380 =>
            array(
                'name' => 'Sarangani',
                'province' => 'DAC',
            ),
            1381 =>
            array(
                'name' => 'Baganga',
                'province' => 'DAO',
            ),
            1382 =>
            array(
                'name' => 'Banaybanay',
                'province' => 'DAO',
            ),
            1383 =>
            array(
                'name' => 'Boston',
                'province' => 'DAO',
            ),
            1384 =>
            array(
                'name' => 'Caraga',
                'province' => 'DAO',
            ),
            1385 =>
            array(
                'name' => 'Cateel',
                'province' => 'DAO',
            ),
            1386 =>
            array(
                'name' => 'Governor Generoso',
                'province' => 'DAO',
            ),
            1387 =>
            array(
                'name' => 'Lupon',
                'province' => 'DAO',
            ),
            1388 =>
            array(
                'name' => 'Manay',
                'province' => 'DAO',
            ),
            1389 =>
            array(
                'name' => 'Mati',
                'province' => 'DAO',
                'city' => true,
            ),
            1390 =>
            array(
                'name' => 'San Isidro',
                'province' => 'DAO',
            ),
            1391 =>
            array(
                'name' => 'Tarragona',
                'province' => 'DAO',
            ),
            1392 =>
            array(
                'name' => 'Alamada',
                'province' => 'NCO',
            ),
            1393 =>
            array(
                'name' => 'Aleosan',
                'province' => 'NCO',
            ),
            1394 =>
            array(
                'name' => 'Antipas',
                'province' => 'NCO',
            ),
            1395 =>
            array(
                'name' => 'Arakan',
                'province' => 'NCO',
            ),
            1396 =>
            array(
                'name' => 'Banisilan',
                'province' => 'NCO',
            ),
            1397 =>
            array(
                'name' => 'Carmen',
                'province' => 'NCO',
            ),
            1398 =>
            array(
                'name' => 'Kabacan',
                'province' => 'NCO',
            ),
            1399 =>
            array(
                'name' => 'Kidapawan',
                'province' => 'NCO',
                'city' => true,
            ),
            1400 =>
            array(
                'name' => 'Libungan',
                'province' => 'NCO',
            ),
            1401 =>
            array(
                'name' => 'M\'lang',
                'province' => 'NCO',
            ),
            1402 =>
            array(
                'name' => 'Magpet',
                'province' => 'NCO',
            ),
            1403 =>
            array(
                'name' => 'Makilala',
                'province' => 'NCO',
            ),
            1404 =>
            array(
                'name' => 'Matalam',
                'province' => 'NCO',
            ),
            1405 =>
            array(
                'name' => 'Midsayap',
                'province' => 'NCO',
            ),
            1406 =>
            array(
                'name' => 'Pigcawayan',
                'province' => 'NCO',
            ),
            1407 =>
            array(
                'name' => 'Pikit',
                'province' => 'NCO',
            ),
            1408 =>
            array(
                'name' => 'President Roxas',
                'province' => 'NCO',
            ),
            1409 =>
            array(
                'name' => 'Tulunan',
                'province' => 'NCO',
            ),
            1410 =>
            array(
                'name' => 'Alabel',
                'province' => 'SAR',
            ),
            1411 =>
            array(
                'name' => 'Glan',
                'province' => 'SAR',
            ),
            1412 =>
            array(
                'name' => 'Kiamba',
                'province' => 'SAR',
            ),
            1413 =>
            array(
                'name' => 'Maasim',
                'province' => 'SAR',
            ),
            1414 =>
            array(
                'name' => 'Maitum',
                'province' => 'SAR',
            ),
            1415 =>
            array(
                'name' => 'Malapatan',
                'province' => 'SAR',
            ),
            1416 =>
            array(
                'name' => 'Malungon',
                'province' => 'SAR',
            ),
            1417 =>
            array(
                'name' => 'Banga',
                'province' => 'SCO',
            ),
            1418 =>
            array(
                'name' => 'General Santos',
                'province' => 'SCO',
                'city' => true,
            ),
            1419 =>
            array(
                'name' => 'Koronadal',
                'province' => 'SCO',
                'city' => true,
            ),
            1420 =>
            array(
                'name' => 'Lake Sebu',
                'province' => 'SCO',
            ),
            1421 =>
            array(
                'name' => 'Norala',
                'province' => 'SCO',
            ),
            1422 =>
            array(
                'name' => 'Polomolok',
                'province' => 'SCO',
            ),
            1423 =>
            array(
                'name' => 'Santo Niño',
                'province' => 'SCO',
            ),
            1424 =>
            array(
                'name' => 'Surallah',
                'province' => 'SCO',
            ),
            1425 =>
            array(
                'name' => 'T\'boli',
                'province' => 'SCO',
            ),
            1426 =>
            array(
                'name' => 'Tampakan',
                'province' => 'SCO',
            ),
            1427 =>
            array(
                'name' => 'Tantangan',
                'province' => 'SCO',
            ),
            1428 =>
            array(
                'name' => 'Tupi',
                'province' => 'SCO',
            ),
            1429 =>
            array(
                'name' => 'Bagumbayan',
                'province' => 'SUK',
            ),
            1430 =>
            array(
                'name' => 'Columbio',
                'province' => 'SUK',
            ),
            1431 =>
            array(
                'name' => 'Esperanza',
                'province' => 'SUK',
            ),
            1432 =>
            array(
                'name' => 'Isulan',
                'province' => 'SUK',
            ),
            1433 =>
            array(
                'name' => 'Kalamansig',
                'province' => 'SUK',
            ),
            1434 =>
            array(
                'name' => 'Lambayong',
                'province' => 'SUK',
            ),
            1435 =>
            array(
                'name' => 'Lebak',
                'province' => 'SUK',
            ),
            1436 =>
            array(
                'name' => 'Lutayan',
                'province' => 'SUK',
            ),
            1437 =>
            array(
                'name' => 'Palimbang',
                'province' => 'SUK',
            ),
            1438 =>
            array(
                'name' => 'President Quirino',
                'province' => 'SUK',
            ),
            1439 =>
            array(
                'name' => 'Senator Ninoy Aquino',
                'province' => 'SUK',
            ),
            1440 =>
            array(
                'name' => 'Tacurong',
                'province' => 'SUK',
                'city' => true,
            ),
            1441 =>
            array(
                'name' => 'Buenavista',
                'province' => 'AGN',
            ),
            1442 =>
            array(
                'name' => 'Butuan',
                'province' => 'AGN',
                'city' => true,
            ),
            1443 =>
            array(
                'name' => 'Cabadbaran',
                'province' => 'AGN',
                'city' => true,
            ),
            1444 =>
            array(
                'name' => 'Carmen',
                'province' => 'AGN',
            ),
            1445 =>
            array(
                'name' => 'Jabonga',
                'province' => 'AGN',
            ),
            1446 =>
            array(
                'name' => 'Kitcharao',
                'province' => 'AGN',
            ),
            1447 =>
            array(
                'name' => 'Las Nieves',
                'province' => 'AGN',
            ),
            1448 =>
            array(
                'name' => 'Magallanes',
                'province' => 'AGN',
            ),
            1449 =>
            array(
                'name' => 'Nasipit',
                'province' => 'AGN',
            ),
            1450 =>
            array(
                'name' => 'Remedios T. Romualdez',
                'province' => 'AGN',
            ),
            1451 =>
            array(
                'name' => 'Santiago',
                'province' => 'AGN',
            ),
            1452 =>
            array(
                'name' => 'Tubay',
                'province' => 'AGN',
            ),
            1453 =>
            array(
                'name' => 'Bayugan',
                'province' => 'AGS',
                'city' => true,
            ),
            1454 =>
            array(
                'name' => 'Bunawan',
                'province' => 'AGS',
            ),
            1455 =>
            array(
                'name' => 'Esperanza',
                'province' => 'AGS',
            ),
            1456 =>
            array(
                'name' => 'La Paz',
                'province' => 'AGS',
            ),
            1457 =>
            array(
                'name' => 'Loreto',
                'province' => 'AGS',
            ),
            1458 =>
            array(
                'name' => 'Prosperidad',
                'province' => 'AGS',
            ),
            1459 =>
            array(
                'name' => 'Rosario',
                'province' => 'AGS',
            ),
            1460 =>
            array(
                'name' => 'San Francisco',
                'province' => 'AGS',
            ),
            1461 =>
            array(
                'name' => 'San Luis',
                'province' => 'AGS',
            ),
            1462 =>
            array(
                'name' => 'Santa Josefa',
                'province' => 'AGS',
            ),
            1463 =>
            array(
                'name' => 'Sibagat',
                'province' => 'AGS',
            ),
            1464 =>
            array(
                'name' => 'Talacogon',
                'province' => 'AGS',
            ),
            1465 =>
            array(
                'name' => 'Trento',
                'province' => 'AGS',
            ),
            1466 =>
            array(
                'name' => 'Veruela',
                'province' => 'AGS',
            ),
            1467 =>
            array(
                'name' => 'Basilisa',
                'province' => 'DIN',
            ),
            1468 =>
            array(
                'name' => 'Cagdianao',
                'province' => 'DIN',
            ),
            1469 =>
            array(
                'name' => 'Dinagat',
                'province' => 'DIN',
            ),
            1470 =>
            array(
                'name' => 'Libjo',
                'province' => 'DIN',
            ),
            1471 =>
            array(
                'name' => 'Loreto',
                'province' => 'DIN',
            ),
            1472 =>
            array(
                'name' => 'San Jose',
                'province' => 'DIN',
            ),
            1473 =>
            array(
                'name' => 'Tubajon',
                'province' => 'DIN',
            ),
            1474 =>
            array(
                'name' => 'Alegria',
                'province' => 'SUN',
            ),
            1475 =>
            array(
                'name' => 'Bacuag',
                'province' => 'SUN',
            ),
            1476 =>
            array(
                'name' => 'Burgos',
                'province' => 'SUN',
            ),
            1477 =>
            array(
                'name' => 'Claver',
                'province' => 'SUN',
            ),
            1478 =>
            array(
                'name' => 'Dapa',
                'province' => 'SUN',
            ),
            1479 =>
            array(
                'name' => 'Del Carmen',
                'province' => 'SUN',
            ),
            1480 =>
            array(
                'name' => 'General Luna',
                'province' => 'SUN',
            ),
            1481 =>
            array(
                'name' => 'Gigaquit',
                'province' => 'SUN',
            ),
            1482 =>
            array(
                'name' => 'Mainit',
                'province' => 'SUN',
            ),
            1483 =>
            array(
                'name' => 'Malimono',
                'province' => 'SUN',
            ),
            1484 =>
            array(
                'name' => 'Pilar',
                'province' => 'SUN',
            ),
            1485 =>
            array(
                'name' => 'Placer',
                'province' => 'SUN',
            ),
            1486 =>
            array(
                'name' => 'San Benito',
                'province' => 'SUN',
            ),
            1487 =>
            array(
                'name' => 'San Francisco',
                'province' => 'SUN',
            ),
            1488 =>
            array(
                'name' => 'San Isidro',
                'province' => 'SUN',
            ),
            1489 =>
            array(
                'name' => 'Santa Monica',
                'province' => 'SUN',
            ),
            1490 =>
            array(
                'name' => 'Sison',
                'province' => 'SUN',
            ),
            1491 =>
            array(
                'name' => 'Socorro',
                'province' => 'SUN',
            ),
            1492 =>
            array(
                'name' => 'Surigao',
                'province' => 'SUN',
                'city' => true,
            ),
            1493 =>
            array(
                'name' => 'Tagana-an',
                'province' => 'SUN',
            ),
            1494 =>
            array(
                'name' => 'Tubod',
                'province' => 'SUN',
            ),
            1495 =>
            array(
                'name' => 'Barobo',
                'province' => 'SUR',
            ),
            1496 =>
            array(
                'name' => 'Bayabas',
                'province' => 'SUR',
            ),
            1497 =>
            array(
                'name' => 'Bislig',
                'province' => 'SUR',
                'city' => true,
            ),
            1498 =>
            array(
                'name' => 'Cagwait',
                'province' => 'SUR',
            ),
            1499 =>
            array(
                'name' => 'Cantilan',
                'province' => 'SUR',
            ),
            1500 =>
            array(
                'name' => 'Carmen',
                'province' => 'SUR',
            ),
            1501 =>
            array(
                'name' => 'Carrascal',
                'province' => 'SUR',
            ),
            1502 =>
            array(
                'name' => 'Cortes',
                'province' => 'SUR',
            ),
            1503 =>
            array(
                'name' => 'Hinatuan',
                'province' => 'SUR',
            ),
            1504 =>
            array(
                'name' => 'Lanuza',
                'province' => 'SUR',
            ),
            1505 =>
            array(
                'name' => 'Lianga',
                'province' => 'SUR',
            ),
            1506 =>
            array(
                'name' => 'Lingig',
                'province' => 'SUR',
            ),
            1507 =>
            array(
                'name' => 'Madrid',
                'province' => 'SUR',
            ),
            1508 =>
            array(
                'name' => 'Marihatag',
                'province' => 'SUR',
            ),
            1509 =>
            array(
                'name' => 'San Agustin',
                'province' => 'SUR',
            ),
            1510 =>
            array(
                'name' => 'San Miguel',
                'province' => 'SUR',
            ),
            1511 =>
            array(
                'name' => 'Tagbina',
                'province' => 'SUR',
            ),
            1512 =>
            array(
                'name' => 'Tago',
                'province' => 'SUR',
            ),
            1513 =>
            array(
                'name' => 'Tandag',
                'province' => 'SUR',
                'city' => true,
            ),
            1514 =>
            array(
                'name' => 'Akbar',
                'province' => 'BAS',
            ),
            1515 =>
            array(
                'name' => 'Al-Barka',
                'province' => 'BAS',
            ),
            1516 =>
            array(
                'name' => 'Hadji Mohammad Ajul',
                'province' => 'BAS',
            ),
            1517 =>
            array(
                'name' => 'Hadji Muhtamad',
                'province' => 'BAS',
            ),
            1518 =>
            array(
                'name' => 'Isabela',
                'province' => 'BAS',
                'city' => true,
            ),
            1519 =>
            array(
                'name' => 'Lamitan',
                'province' => 'BAS',
                'city' => true,
            ),
            1520 =>
            array(
                'name' => 'Lantawan',
                'province' => 'BAS',
            ),
            1521 =>
            array(
                'name' => 'Maluso',
                'province' => 'BAS',
            ),
            1522 =>
            array(
                'name' => 'Sumisip',
                'province' => 'BAS',
            ),
            1523 =>
            array(
                'name' => 'Tabuan-Lasa',
                'province' => 'BAS',
            ),
            1524 =>
            array(
                'name' => 'Tipo-Tipo',
                'province' => 'BAS',
            ),
            1525 =>
            array(
                'name' => 'Tuburan',
                'province' => 'BAS',
            ),
            1526 =>
            array(
                'name' => 'Ungkaya Pukan',
                'province' => 'BAS',
            ),
            1527 =>
            array(
                'name' => 'Bacolod-Kalawi',
                'province' => 'LAS',
            ),
            1528 =>
            array(
                'name' => 'Balabagan',
                'province' => 'LAS',
            ),
            1529 =>
            array(
                'name' => 'Balindong',
                'province' => 'LAS',
            ),
            1530 =>
            array(
                'name' => 'Bayang',
                'province' => 'LAS',
            ),
            1531 =>
            array(
                'name' => 'Binidayan',
                'province' => 'LAS',
            ),
            1532 =>
            array(
                'name' => 'Buadiposo-Buntong',
                'province' => 'LAS',
            ),
            1533 =>
            array(
                'name' => 'Bubong',
                'province' => 'LAS',
            ),
            1534 =>
            array(
                'name' => 'Bumbaran',
                'province' => 'LAS',
            ),
            1535 =>
            array(
                'name' => 'Butig',
                'province' => 'LAS',
            ),
            1536 =>
            array(
                'name' => 'Calanogas',
                'province' => 'LAS',
            ),
            1537 =>
            array(
                'name' => 'Ditsaan-Ramain',
                'province' => 'LAS',
            ),
            1538 =>
            array(
                'name' => 'Ganassi',
                'province' => 'LAS',
            ),
            1539 =>
            array(
                'name' => 'Kapai',
                'province' => 'LAS',
            ),
            1540 =>
            array(
                'name' => 'Kapatagan',
                'province' => 'LAS',
            ),
            1541 =>
            array(
                'name' => 'Lumba-Bayabao',
                'province' => 'LAS',
            ),
            1542 =>
            array(
                'name' => 'Lumbaca-Unayan',
                'province' => 'LAS',
            ),
            1543 =>
            array(
                'name' => 'Lumbatan',
                'province' => 'LAS',
            ),
            1544 =>
            array(
                'name' => 'Lumbayanague',
                'province' => 'LAS',
            ),
            1545 =>
            array(
                'name' => 'Madalum',
                'province' => 'LAS',
            ),
            1546 =>
            array(
                'name' => 'Madamba',
                'province' => 'LAS',
            ),
            1547 =>
            array(
                'name' => 'Maguing',
                'province' => 'LAS',
            ),
            1548 =>
            array(
                'name' => 'Malabang',
                'province' => 'LAS',
            ),
            1549 =>
            array(
                'name' => 'Marantao',
                'province' => 'LAS',
            ),
            1550 =>
            array(
                'name' => 'Marawi',
                'province' => 'LAS',
                'city' => true,
            ),
            1551 =>
            array(
                'name' => 'Marogong',
                'province' => 'LAS',
            ),
            1552 =>
            array(
                'name' => 'Masiu',
                'province' => 'LAS',
            ),
            1553 =>
            array(
                'name' => 'Mulondo',
                'province' => 'LAS',
            ),
            1554 =>
            array(
                'name' => 'Pagayawan',
                'province' => 'LAS',
            ),
            1555 =>
            array(
                'name' => 'Piagapo',
                'province' => 'LAS',
            ),
            1556 =>
            array(
                'name' => 'Poona Bayabao',
                'province' => 'LAS',
            ),
            1557 =>
            array(
                'name' => 'Pualas',
                'province' => 'LAS',
            ),
            1558 =>
            array(
                'name' => 'Saguiaran',
                'province' => 'LAS',
            ),
            1559 =>
            array(
                'name' => 'Sultan Dumalondong',
                'province' => 'LAS',
            ),
            1560 =>
            array(
                'name' => 'Picong',
                'province' => 'LAS',
            ),
            1561 =>
            array(
                'name' => 'Tagoloan II',
                'province' => 'LAS',
            ),
            1562 =>
            array(
                'name' => 'Tamparan',
                'province' => 'LAS',
            ),
            1563 =>
            array(
                'name' => 'Taraka',
                'province' => 'LAS',
            ),
            1564 =>
            array(
                'name' => 'Tubaran',
                'province' => 'LAS',
            ),
            1565 =>
            array(
                'name' => 'Tugaya',
                'province' => 'LAS',
            ),
            1566 =>
            array(
                'name' => 'Wao',
                'province' => 'LAS',
            ),
            1567 =>
            array(
                'name' => 'Ampatuan',
                'province' => 'MAG',
            ),
            1568 =>
            array(
                'name' => 'Barira',
                'province' => 'MAG',
            ),
            1569 =>
            array(
                'name' => 'Buldon',
                'province' => 'MAG',
            ),
            1570 =>
            array(
                'name' => 'Buluan',
                'province' => 'MAG',
            ),
            1571 =>
            array(
                'name' => 'Cotabato',
                'province' => 'MAG',
                'city' => true,
            ),
            1572 =>
            array(
                'name' => 'Datu Abdullah Sangki',
                'province' => 'MAG',
            ),
            1573 =>
            array(
                'name' => 'Datu Anggal Midtimbang',
                'province' => 'MAG',
            ),
            1574 =>
            array(
                'name' => 'Datu Blah T. Sinsuat',
                'province' => 'MAG',
            ),
            1575 =>
            array(
                'name' => 'Datu Hoffer Ampatuan',
                'province' => 'MAG',
            ),
            1576 =>
            array(
                'name' => 'Datu Montawal',
                'province' => 'MAG',
            ),
            1577 =>
            array(
                'name' => 'Datu Odin Sinsuat',
                'province' => 'MAG',
            ),
            1578 =>
            array(
                'name' => 'Datu Paglas',
                'province' => 'MAG',
            ),
            1579 =>
            array(
                'name' => 'Datu Piang',
                'province' => 'MAG',
            ),
            1580 =>
            array(
                'name' => 'Datu Salibo',
                'province' => 'MAG',
            ),
            1581 =>
            array(
                'name' => 'Datu Saudi-Ampatuan',
                'province' => 'MAG',
            ),
            1582 =>
            array(
                'name' => 'Datu Unsay',
                'province' => 'MAG',
            ),
            1583 =>
            array(
                'name' => 'General Salipada K. Pendatun',
                'province' => 'MAG',
            ),
            1584 =>
            array(
                'name' => 'Guindulungan',
                'province' => 'MAG',
            ),
            1585 =>
            array(
                'name' => 'Kabuntalan',
                'province' => 'MAG',
            ),
            1586 =>
            array(
                'name' => 'Mamasapano',
                'province' => 'MAG',
            ),
            1587 =>
            array(
                'name' => 'Mangudadatu',
                'province' => 'MAG',
            ),
            1588 =>
            array(
                'name' => 'Matanog',
                'province' => 'MAG',
            ),
            1589 =>
            array(
                'name' => 'Northern Kabuntalan',
                'province' => 'MAG',
            ),
            1590 =>
            array(
                'name' => 'Pagalungan',
                'province' => 'MAG',
            ),
            1591 =>
            array(
                'name' => 'Paglat',
                'province' => 'MAG',
            ),
            1592 =>
            array(
                'name' => 'Pandag',
                'province' => 'MAG',
            ),
            1593 =>
            array(
                'name' => 'Parang',
                'province' => 'MAG',
            ),
            1594 =>
            array(
                'name' => 'Rajah Buayan',
                'province' => 'MAG',
            ),
            1595 =>
            array(
                'name' => 'Shariff Aguak',
                'province' => 'MAG',
            ),
            1596 =>
            array(
                'name' => 'Shariff Saydona Mustapha',
                'province' => 'MAG',
            ),
            1597 =>
            array(
                'name' => 'South Upi',
                'province' => 'MAG',
            ),
            1598 =>
            array(
                'name' => 'Sultan Kudarat',
                'province' => 'MAG',
            ),
            1599 =>
            array(
                'name' => 'Sultan Mastura',
                'province' => 'MAG',
            ),
            1600 =>
            array(
                'name' => 'Sultan sa Barongis',
                'province' => 'MAG',
            ),
            1601 =>
            array(
                'name' => 'Sultan Sumagka',
                'province' => 'MAG',
            ),
            1602 =>
            array(
                'name' => 'Talayan',
                'province' => 'MAG',
            ),
            1603 =>
            array(
                'name' => 'Upi',
                'province' => 'MAG',
            ),
            1604 =>
            array(
                'name' => 'Banguingui',
                'province' => 'SLU',
            ),
            1605 =>
            array(
                'name' => 'Hadji Panglima Tahil',
                'province' => 'SLU',
            ),
            1606 =>
            array(
                'name' => 'Indanan',
                'province' => 'SLU',
            ),
            1607 =>
            array(
                'name' => 'Jolo',
                'province' => 'SLU',
            ),
            1608 =>
            array(
                'name' => 'Kalingalan Caluang',
                'province' => 'SLU',
            ),
            1609 =>
            array(
                'name' => 'Lugus',
                'province' => 'SLU',
            ),
            1610 =>
            array(
                'name' => 'Luuk',
                'province' => 'SLU',
            ),
            1611 =>
            array(
                'name' => 'Maimbung',
                'province' => 'SLU',
            ),
            1612 =>
            array(
                'name' => 'Old Panamao',
                'province' => 'SLU',
            ),
            1613 =>
            array(
                'name' => 'Omar',
                'province' => 'SLU',
            ),
            1614 =>
            array(
                'name' => 'Pandami',
                'province' => 'SLU',
            ),
            1615 =>
            array(
                'name' => 'Panglima Estino',
                'province' => 'SLU',
            ),
            1616 =>
            array(
                'name' => 'Pangutaran',
                'province' => 'SLU',
            ),
            1617 =>
            array(
                'name' => 'Parang',
                'province' => 'SLU',
            ),
            1618 =>
            array(
                'name' => 'Pata',
                'province' => 'SLU',
            ),
            1619 =>
            array(
                'name' => 'Patikul',
                'province' => 'SLU',
            ),
            1620 =>
            array(
                'name' => 'Siasi',
                'province' => 'SLU',
            ),
            1621 =>
            array(
                'name' => 'Talipao',
                'province' => 'SLU',
            ),
            1622 =>
            array(
                'name' => 'Tapul',
                'province' => 'SLU',
            ),
            1623 =>
            array(
                'name' => 'Bongao',
                'province' => 'TAW',
            ),
            1624 =>
            array(
                'name' => 'Languyan',
                'province' => 'TAW',
            ),
            1625 =>
            array(
                'name' => 'Mapun',
                'province' => 'TAW',
            ),
            1626 =>
            array(
                'name' => 'Panglima Sugala',
                'province' => 'TAW',
            ),
            1627 =>
            array(
                'name' => 'Sapa-Sapa',
                'province' => 'TAW',
            ),
            1628 =>
            array(
                'name' => 'Sibutu',
                'province' => 'TAW',
            ),
            1629 =>
            array(
                'name' => 'Simunul',
                'province' => 'TAW',
            ),
            1630 =>
            array(
                'name' => 'Sitangkai',
                'province' => 'TAW',
            ),
            1631 =>
            array(
                'name' => 'South Ubian',
                'province' => 'TAW',
            ),
            1632 =>
            array(
                'name' => 'Tandubas',
                'province' => 'TAW',
            ),
            1633 =>
            array(
                'name' => 'Turtle Islands',
                'province' => 'TAW',
            ),
        );
    }
}
