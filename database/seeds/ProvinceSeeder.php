<?php

use App\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedProvinces();
    }

    private function seedProvinces()
    {
        $provinces = $this->provinceGenerator();

        foreach ($provinces as $province) {
            Province::create($province);
        }
    }

    private function provinceGenerator()
    {
        foreach ($this->provinces() as $province) {
            yield $province;
        }
    }


    private function provinces()
    {
        return array(
            0 =>
            array(
                'name' => 'Metro Manila',
                'region' => 'NCR',
                'key' => 'MM',
            ),
            1 =>
            array(
                'name' => 'Abra',
                'region' => 'CAR',
                'key' => 'ABR',
            ),
            2 =>
            array(
                'name' => 'Apayao',
                'region' => 'CAR',
                'key' => 'APA',
            ),
            3 =>
            array(
                'name' => 'Benguet',
                'region' => 'CAR',
                'key' => 'BEN',
            ),
            4 =>
            array(
                'name' => 'Ifugao',
                'region' => 'CAR',
                'key' => 'IFU',
            ),
            5 =>
            array(
                'name' => 'Kalinga',
                'region' => 'CAR',
                'key' => 'KAL',
            ),
            6 =>
            array(
                'name' => 'Mountain Province',
                'region' => 'CAR',
                'key' => 'MOU',
            ),
            7 =>
            array(
                'name' => 'Ilocos Norte',
                'region' => 'I',
                'key' => 'ILN',
            ),
            8 =>
            array(
                'name' => 'Ilocos Sur',
                'region' => 'I',
                'key' => 'ILS',
            ),
            9 =>
            array(
                'name' => 'La Union',
                'region' => 'I',
                'key' => 'LUN',
            ),
            10 =>
            array(
                'name' => 'Pangasinan',
                'region' => 'I',
                'key' => 'PAN',
            ),
            11 =>
            array(
                'name' => 'Batanes',
                'region' => 'II',
                'key' => 'BTN',
            ),
            12 =>
            array(
                'name' => 'Cagayan',
                'region' => 'II',
                'key' => 'CAG',
            ),
            13 =>
            array(
                'name' => 'Isabela',
                'region' => 'II',
                'key' => 'ISA',
            ),
            14 =>
            array(
                'name' => 'Nueva Vizcaya',
                'region' => 'II',
                'key' => 'NUV',
            ),
            15 =>
            array(
                'name' => 'Quirino',
                'region' => 'II',
                'key' => 'QUI',
            ),
            16 =>
            array(
                'name' => 'Aurora',
                'region' => 'III',
                'key' => 'AUR',
            ),
            17 =>
            array(
                'name' => 'Bataan',
                'region' => 'III',
                'key' => 'BAN',
            ),
            18 =>
            array(
                'name' => 'Bulacan',
                'region' => 'III',
                'key' => 'BUL',
            ),
            19 =>
            array(
                'name' => 'Nueva Ecija',
                'region' => 'III',
                'key' => 'NUE',
            ),
            20 =>
            array(
                'name' => 'Pampanga',
                'region' => 'III',
                'key' => 'PAM',
            ),
            21 =>
            array(
                'name' => 'Tarlac',
                'region' => 'III',
                'key' => 'TAR',
            ),
            22 =>
            array(
                'name' => 'Zambales',
                'region' => 'III',
                'key' => 'ZMB',
            ),
            23 =>
            array(
                'name' => 'Batangas',
                'region' => 'IV-A',
                'key' => 'BTG',
            ),
            24 =>
            array(
                'name' => 'Cavite',
                'region' => 'IV-A',
                'key' => 'CAV',
            ),
            25 =>
            array(
                'name' => 'Laguna',
                'region' => 'IV-A',
                'key' => 'LAG',
            ),
            26 =>
            array(
                'name' => 'Quezon',
                'region' => 'IV-A',
                'key' => 'QUE',
            ),
            27 =>
            array(
                'name' => 'Rizal',
                'region' => 'IV-A',
                'key' => 'RIZ',
            ),
            28 =>
            array(
                'name' => 'Marinduque',
                'region' => 'IV-B',
                'key' => 'MAD',
            ),
            29 =>
            array(
                'name' => 'Occidental Mindoro',
                'region' => 'IV-B',
                'key' => 'MDC',
            ),
            30 =>
            array(
                'name' => 'Oriental Mindoro',
                'region' => 'IV-B',
                'key' => 'MDR',
            ),
            31 =>
            array(
                'name' => 'Palawan',
                'region' => 'IV-B',
                'key' => 'PLW',
            ),
            32 =>
            array(
                'name' => 'Romblon',
                'region' => 'IV-B',
                'key' => 'ROM',
            ),
            33 =>
            array(
                'name' => 'Albay',
                'region' => 'V',
                'key' => 'ALB',
            ),
            34 =>
            array(
                'name' => 'Camarines Norte',
                'region' => 'V',
                'key' => 'CAN',
            ),
            35 =>
            array(
                'name' => 'Camarines Sur',
                'region' => 'V',
                'key' => 'CAS',
            ),
            36 =>
            array(
                'name' => 'Catanduanes',
                'region' => 'V',
                'key' => 'CAT',
            ),
            37 =>
            array(
                'name' => 'Masbate',
                'region' => 'V',
                'key' => 'MAS',
            ),
            38 =>
            array(
                'name' => 'Sorsogon',
                'region' => 'V',
                'key' => 'SOR',
            ),
            39 =>
            array(
                'name' => 'Aklan',
                'region' => 'VI',
                'key' => 'AKL',
            ),
            40 =>
            array(
                'name' => 'Antique',
                'region' => 'VI',
                'key' => 'ANT',
            ),
            41 =>
            array(
                'name' => 'Capiz',
                'region' => 'VI',
                'key' => 'CAP',
            ),
            42 =>
            array(
                'name' => 'Guimaras',
                'region' => 'VI',
                'key' => 'GUI',
            ),
            43 =>
            array(
                'name' => 'Iloilo',
                'region' => 'VI',
                'key' => 'ILI',
            ),
            44 =>
            array(
                'name' => 'Negros Occidental',
                'region' => 'VI',
                'key' => 'NEC',
            ),
            45 =>
            array(
                'name' => 'Bohol',
                'region' => 'VII',
                'key' => 'BOH',
            ),
            46 =>
            array(
                'name' => 'Cebu',
                'region' => 'VII',
                'key' => 'CEB',
            ),
            47 =>
            array(
                'name' => 'Negros Oriental',
                'region' => 'VII',
                'key' => 'NER',
            ),
            48 =>
            array(
                'name' => 'Siquijor',
                'region' => 'VII',
                'key' => 'SIG',
            ),
            49 =>
            array(
                'name' => 'Biliran',
                'region' => 'VIII',
                'key' => 'BIL',
            ),
            50 =>
            array(
                'name' => 'Eastern Samar',
                'region' => 'VIII',
                'key' => 'EAS',
            ),
            51 =>
            array(
                'name' => 'Leyte',
                'region' => 'VIII',
                'key' => 'LEY',
            ),
            52 =>
            array(
                'name' => 'Northern Samar',
                'region' => 'VIII',
                'key' => 'NSA',
            ),
            53 =>
            array(
                'name' => 'Samar',
                'region' => 'VIII',
                'key' => 'WSA',
            ),
            54 =>
            array(
                'name' => 'Southern Leyte',
                'region' => 'VIII',
                'key' => 'SLE',
            ),
            55 =>
            array(
                'name' => 'Zamboanga del Norte',
                'region' => 'IX',
                'key' => 'ZAN',
            ),
            56 =>
            array(
                'name' => 'Zamboanga del Sur',
                'region' => 'IX',
                'key' => 'ZAS',
            ),
            57 =>
            array(
                'name' => 'Zamboanga Sibugay',
                'region' => 'IX',
                'key' => 'ZSI',
            ),
            58 =>
            array(
                'name' => 'Bukidnon',
                'region' => 'X',
                'key' => 'BUK',
            ),
            59 =>
            array(
                'name' => 'Camiguin',
                'region' => 'X',
                'key' => 'CAM',
            ),
            60 =>
            array(
                'name' => 'Lanao del Norte',
                'region' => 'X',
                'key' => 'LAN',
            ),
            61 =>
            array(
                'name' => 'Misamis Occidental',
                'region' => 'X',
                'key' => 'MSC',
            ),
            62 =>
            array(
                'name' => 'Misamis Oriental',
                'region' => 'X',
                'key' => 'MSR',
            ),
            63 =>
            array(
                'name' => 'Compostela Valley',
                'region' => 'XI',
                'key' => 'COM',
            ),
            64 =>
            array(
                'name' => 'Davao del Norte',
                'region' => 'XI',
                'key' => 'DAV',
            ),
            65 =>
            array(
                'name' => 'Davao del Sur',
                'region' => 'XI',
                'key' => 'DAS',
            ),
            66 =>
            array(
                'name' => 'Davao Occidental',
                'region' => 'XI',
                'key' => 'DAC',
            ),
            67 =>
            array(
                'name' => 'Davao Oriental',
                'region' => 'XI',
                'key' => 'DAO',
            ),
            68 =>
            array(
                'name' => 'Cotabato',
                'region' => 'XII',
                'key' => 'NCO',
            ),
            69 =>
            array(
                'name' => 'Sarangani',
                'region' => 'XII',
                'key' => 'SAR',
            ),
            70 =>
            array(
                'name' => 'South Cotabato',
                'region' => 'XII',
                'key' => 'SCO',
            ),
            71 =>
            array(
                'name' => 'Sultan Kudarat',
                'region' => 'XII',
                'key' => 'SUK',
            ),
            72 =>
            array(
                'name' => 'Agusan del Norte',
                'region' => 'XIII',
                'key' => 'AGN',
            ),
            73 =>
            array(
                'name' => 'Agusan del Sur',
                'region' => 'XIII',
                'key' => 'AGS',
            ),
            74 =>
            array(
                'name' => 'Dinagat Islands',
                'region' => 'XIII',
                'key' => 'DIN',
            ),
            75 =>
            array(
                'name' => 'Surigao del Norte',
                'region' => 'XIII',
                'key' => 'SUN',
            ),
            76 =>
            array(
                'name' => 'Surigao del Sur',
                'region' => 'XIII',
                'key' => 'SUR',
            ),
            77 =>
            array(
                'name' => 'Basilan',
                'region' => 'ARMM',
                'key' => 'BAS',
            ),
            78 =>
            array(
                'name' => 'Lanao del Sur',
                'region' => 'ARMM',
                'key' => 'LAS',
            ),
            79 =>
            array(
                'name' => 'Maguindanao',
                'region' => 'ARMM',
                'key' => 'MAG',
            ),
            80 =>
            array(
                'name' => 'Sulu',
                'region' => 'ARMM',
                'key' => 'SLU',
            ),
            81 =>
            array(
                'name' => 'Tawi-tawi',
                'region' => 'ARMM',
                'key' => 'TAW',
            ),
        );
    }
}
