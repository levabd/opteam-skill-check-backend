<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('TRUNCATE countries CASCADE');
        \DB::table('countries')->insert(translate_seed_array(array (
            0 =>
                array (
                    'id' => 1,
                    'continent_id' => 1,
                    'name_fr' => 'Австрия',
                    'name_en' => 'Austria',
                    'code' => 'AT',
                ),
            1 =>
                array (
                    'id' => 2,
                    'continent_id' => 1,
                    'name_fr' => 'Англия',
                    'name_en' => 'England',
                    'code' => 'AI',
                ),
            2 =>
                array (
                    'id' => 3,
                    'continent_id' => 1,
                    'name_fr' => 'Беларусь',
                    'name_en' => 'Belarus',
                    'code' => 'BY',
                ),
            3 =>
                array (
                    'id' => 4,
                    'continent_id' => 1,
                    'name_fr' => 'Бельгия',
                    'name_en' => 'Belgium',
                    
                    'code' => 'BE',
                ),
            4 =>
                array (
                    'id' => 5,
                    'continent_id' => 1,
                    'name_fr' => 'Болгария',
                    'name_en' => 'Bulgaria',
                    
                    'code' => 'BG',
                ),
            5 =>
                array (
                    'id' => 6,
                    'continent_id' => 1,
                    'name_fr' => 'Великобритания',
                    'name_en' => 'United Kingdom',
                    
                    'code' => 'GB',
                ),
            6 =>
                array (
                    'id' => 7,
                    'continent_id' => 1,
                    'name_fr' => 'Венгрия',
                    'name_en' => 'Hungary',
                    
                    'code' => 'HU',
                ),
            7 =>
                array (
                    'id' => 8,
                    'continent_id' => 1,
                    'name_fr' => 'Германия',
                    'name_en' => 'Germany',
                    
                    'code' => 'DE',
                ),
            8 =>
                array (
                    'id' => 9,
                    'continent_id' => 1,
                    'name_fr' => 'Греция',
                    'name_en' => 'Greece',
                    
                    'code' => 'GR',
                ),
            9 =>
                array (
                    'id' => 10,
                    'continent_id' => 1,
                    'name_fr' => 'Дания',
                    'name_en' => 'Denmark',
                    
                    'code' => 'DK',
                ),
            10 =>
                array (
                    'id' => 11,
                    'continent_id' => 1,
                    'name_fr' => 'Ирландия',
                    'name_en' => 'Ireland',
                    
                    'code' => 'IE',
                ),
            11 =>
                array (
                    'id' => 12,
                    'continent_id' => 1,
                    'name_fr' => 'Испания',
                    'name_en' => 'Spain',
                    
                    'code' => 'ES',
                ),
            12 =>
                array (
                    'id' => 13,
                    'continent_id' => 1,
                    'name_fr' => 'Италия',
                    'name_en' => 'Italy',
                    
                    'code' => 'IT',
                ),
            13 =>
                array (
                    'id' => 14,
                    'continent_id' => 1,
                    'name_fr' => 'Кипр',
                    'name_en' => 'Cyprus',
                    
                    'code' => 'CY',
                ),
            14 =>
                array (
                    'id' => 15,
                    'continent_id' => 1,
                    'name_fr' => 'Латвия',
                    'name_en' => 'Latvia',
                    
                    'code' => 'LV',
                ),
            15 =>
                array (
                    'id' => 16,
                    'continent_id' => 1,
                    'name_fr' => 'Литва',
                    'name_en' => 'Lithuania',
                    
                    'code' => 'LT',
                ),
            16 =>
                array (
                    'id' => 17,
                    'continent_id' => 1,
                    'name_fr' => 'Люксембург',
                    'name_en' => 'Luxembourg',
                    
                    'code' => 'LU',
                ),
            17 =>
                array (
                    'id' => 18,
                    'continent_id' => 1,
                    'name_fr' => 'Молдова',
                    'name_en' => 'Moldova',
                    
                    'code' => 'MD',
                ),
            18 =>
                array (
                    'id' => 19,
                    'continent_id' => 1,
                    'name_fr' => 'Монако',
                    'name_en' => 'Monaco',
                    
                    'code' => 'MC',
                ),
            19 =>
                array (
                    'id' => 20,
                    'continent_id' => 1,
                    'name_fr' => 'Норвегия',
                    'name_en' => 'Norway',
                    
                    'code' => 'NO',
                ),
            20 =>
                array (
                    'id' => 21,
                    'continent_id' => 1,
                    'name_fr' => 'Польша',
                    'name_en' => 'Poland',
                    
                    'code' => 'PL',
                ),
            21 =>
                array (
                    'id' => 22,
                    'continent_id' => 1,
                    'name_fr' => 'Словакия',
                    'name_en' => 'Slovakia',
                    
                    'code' => 'SK',
                ),
            22 =>
                array (
                    'id' => 23,
                    'continent_id' => 1,
                    'name_fr' => 'Словения',
                    'name_en' => 'Slovenia',
                    
                    'code' => 'SI',
                ),
            23 =>
                array (
                    'id' => 24,
                    'continent_id' => 1,
                    'name_fr' => 'Турция',
                    'name_en' => 'Turkey',
                    
                    'code' => 'TR',
                ),
            24 =>
                array (
                    'id' => 25,
                    'continent_id' => 1,
                    'name_fr' => 'Украина',
                    'name_en' => 'Ukraine',
                    
                    'code' => 'UA',
                ),
            25 =>
                array (
                    'id' => 26,
                    'continent_id' => 1,
                    'name_fr' => 'Финляндия',
                    'name_en' => 'Finland',
                    
                    'code' => 'FI',
                ),
            26 =>
                array (
                    'id' => 27,
                    'continent_id' => 1,
                    'name_fr' => 'Франция',
                    'name_en' => 'France',
                    
                    'code' => 'FR',
                ),
            27 =>
                array (
                    'id' => 28,
                    'continent_id' => 1,
                    'name_fr' => 'Чехия',
                    'name_en' => 'Czech Republic',
                    
                    'code' => 'CZ',
                ),
            28 =>
                array (
                    'id' => 29,
                    'continent_id' => 1,
                    'name_fr' => 'Швейцария',
                    'name_en' => 'Switzerland',
                    
                    'code' => 'CH',
                ),
            29 =>
                array (
                    'id' => 30,
                    'continent_id' => 1,
                    'name_fr' => 'Швеция',
                    'name_en' => 'Sweden',
                    
                    'code' => 'SE',
                ),
            30 =>
                array (
                    'id' => 31,
                    'continent_id' => 1,
                    'name_fr' => 'Эстония',
                    'name_en' => 'Estonia',
                    
                    'code' => 'EE',
                ),
            31 =>
                array (
                    'id' => 32,
                    'continent_id' => 1,
                    'name_fr' => 'Черногория',
                    'name_en' => 'Montenegro',
                    
                    'code' => 'ME',
                ),
            32 =>
                array (
                    'id' => 33,
                    'continent_id' => 1,
                    'name_fr' => 'Нидерланды',
                    'name_en' => 'Netherlands',
                    
                    'code' => 'NL',
                ),
            33 =>
                array (
                    'id' => 34,
                    'continent_id' => 1,
                    'name_fr' => 'Хорватия',
                    'name_en' => 'Croatia',
                    
                    'code' => 'HR',
                ),
            34 =>
                array (
                    'id' => 35,
                    'continent_id' => 1,
                    'name_fr' => 'Румыния',
                    'name_en' => 'Romania',
                    
                    'code' => 'RO',
                ),
            35 =>
                array (
                    'id' => 36,
                    'continent_id' => 1,
                    'name_fr' => 'Македония',
                    'name_en' => 'Macedonia',
                    
                    'code' => 'MK',
                ),
            36 =>
                array (
                    'id' => 37,
                    'continent_id' => 1,
                    'name_fr' => 'Мальта',
                    'name_en' => 'Malta',
                    
                    'code' => 'MT',
                ),
            37 =>
                array (
                    'id' => 38,
                    'continent_id' => 2,
                    'name_fr' => 'Азербайджан',
                    'name_en' => 'Azerbaijan',
                    
                    'code' => 'AZ',
                ),
            38 =>
                array (
                    'id' => 39,
                    'continent_id' => 2,
                    'name_fr' => 'Армения',
                    'name_en' => 'Armenia',
                    
                    'code' => 'AM',
                ),
            39 =>
                array (
                    'id' => 40,
                    'continent_id' => 2,
                    'name_fr' => 'Вьетнам',
                    'name_en' => 'Vietnam',
                    
                    'code' => 'VN',
                ),
            40 =>
                array (
                    'id' => 41,
                    'continent_id' => 2,
                    'name_fr' => 'Грузия',
                    'name_en' => 'Georgia',
                    
                    'code' => 'GE',
                ),
            41 =>
                array (
                    'id' => 42,
                    'continent_id' => 2,
                    'name_fr' => 'Израиль',
                    'name_en' => 'Israel',
                    
                    'code' => 'IL',
                ),
            42 =>
                array (
                    'id' => 43,
                    'continent_id' => 2,
                    'name_fr' => 'Индия',
                    'name_en' => 'India',
                    
                    'code' => 'IN',
                ),
            43 =>
                array (
                    'id' => 44,
                    'continent_id' => 2,
                    'name_fr' => 'Иран',
                    'name_en' => 'Iran',
                    
                    'code' => 'IR',
                ),
            44 =>
                array (
                    'id' => 45,
                    'continent_id' => 2,
                    'name_fr' => 'Казахстан',
                    'name_en' => 'Kazakhstan',
                    
                    'code' => 'KZ',
                ),
            45 =>
                array (
                    'id' => 46,
                    'continent_id' => 2,
                    'name_fr' => 'Кыргызстан',
                    'name_en' => 'Kyrgyzstan',
                    
                    'code' => 'KG',
                ),
            46 =>
                array (
                    'id' => 47,
                    'continent_id' => 2,
                    'name_fr' => 'Китай',
                    'name_en' => 'China',
                    
                    'code' => 'CN',
                ),
            47 =>
                array (
                    'id' => 48,
                    'continent_id' => 2,
                    'name_fr' => 'Таджикистан',
                    'name_en' => 'Tajikistan',
                    
                    'code' => 'TJ',
                ),
            48 =>
                array (
                    'id' => 49,
                    'continent_id' => 2,
                    'name_fr' => 'Туркменистан',
                    'name_en' => 'Turkmenistan',
                    
                    'code' => 'TM',
                ),
            49 =>
                array (
                    'id' => 50,
                    'continent_id' => 2,
                    'name_fr' => 'Узбекистан',
                    'name_en' => 'Uzbekistan',
                    
                    'code' => 'UZ',
                ),
            50 =>
                array (
                    'id' => 51,
                    'continent_id' => 2,
                    'name_fr' => 'Южная Корея',
                    'name_en' => 'South Korea',
                    
                    'code' => 'KR',
                ),
            51 =>
                array (
                    'id' => 52,
                    'continent_id' => 2,
                    'name_fr' => 'Япония',
                    'name_en' => 'Japan',
                    
                    'code' => 'JP',
                ),
            52 =>
                array (
                    'id' => 53,
                    'continent_id' => 2,
                    'name_fr' => 'Гонконг',
                    'name_en' => 'Hong Kong',
                    
                    'code' => 'HK',
                ),
            53 =>
                array (
                    'id' => 54,
                    'continent_id' => 2,
                    'name_fr' => 'Индонезия',
                    'name_en' => 'Indonesia',
                    
                    'code' => 'ID',
                ),
            54 =>
                array (
                    'id' => 55,
                    'continent_id' => 2,
                    'name_fr' => 'Иордания',
                    'name_en' => 'Jordan',
                    
                    'code' => 'JO',
                ),
            55 =>
                array (
                    'id' => 56,
                    'continent_id' => 2,
                    'name_fr' => 'Малайзия',
                    'name_en' => 'Malaysia',
                    
                    'code' => 'MY',
                ),
            56 =>
                array (
                    'id' => 57,
                    'continent_id' => 2,
                    'name_fr' => 'Сингапур',
                    'name_en' => 'Singapore',
                    
                    'code' => 'SG',
                ),
            57 =>
                array (
                    'id' => 58,
                    'continent_id' => 2,
                    'name_fr' => 'Тайвань',
                    'name_en' => 'Taiwan',
                    
                    'code' => 'TW',
                ),
            58 =>
                array (
                    'id' => 59,
                    'continent_id' => 2,
                    'name_fr' => 'Северная Корея',
                    'name_en' => 'North Korea',
                    
                    'code' => 'KP',
                ),
            59 =>
                array (
                    'id' => 60,
                    'continent_id' => 2,
                    'name_fr' => 'Пакистан',
                    'name_en' => 'Pakistan',
                    
                    'code' => 'PK',
                ),
            60 =>
                array (
                    'id' => 61,
                    'continent_id' => 2,
                    'name_fr' => 'Тайланд',
                    'name_en' => 'Thailand',
                    
                    'code' => 'TH',
                ),
            61 =>
                array (
                    'id' => 62,
                    'continent_id' => 2,
                    'name_fr' => 'О.А.Э.(Объединённые Арабские Эмираты)',
                    'name_en' => 'U.A.E.',
                    
                    'code' => 'AE',
                ),
            62 =>
                array (
                    'id' => 63,
                    'continent_id' => 2,
                    'name_fr' => 'Ливан',
                    'name_en' => 'Lebanon',
                    
                    'code' => 'LB',
                ),
            63 =>
                array (
                    'id' => 64,
                    'continent_id' => 2,
                    'name_fr' => 'Сирия',
                    'name_en' => 'Syria',
                    
                    'code' => 'SY',
                ),
            64 =>
                array (
                    'id' => 65,
                    'continent_id' => 2,
                    'name_fr' => 'Остров Мэн',
                    'name_en' => 'Isle of Man',
                    
                    'code' => 'IM',
                ),
            65 =>
                array (
                    'id' => 66,
                    'continent_id' => 2,
                    'name_fr' => 'Ливан',
                    'name_en' => 'Lebanon',
                    
                    'code' => 'LB',
                ),
            66 =>
                array (
                    'id' => 67,
                    'continent_id' => 2,
                    'name_fr' => 'Монголия',
                    'name_en' => 'Mongolia',
                    
                    'code' => 'MN',
                ),
            67 =>
                array (
                    'id' => 68,
                    'continent_id' => 2,
                    'name_fr' => 'Ирак',
                    'name_en' => 'Iraq',
                    
                    'code' => 'IQ',
                ),
            68 =>
                array (
                    'id' => 69,
                    'continent_id' => 3,
                    'name_fr' => 'Египет',
                    'name_en' => 'Egypt',
                    
                    'code' => 'EG',
                ),
            69 =>
                array (
                    'id' => 70,
                    'continent_id' => 3,
                    'name_fr' => 'Камерун',
                    'name_en' => 'Cameroon',
                    
                    'code' => 'CM',
                ),
            70 =>
                array (
                    'id' => 71,
                    'continent_id' => 3,
                    'name_fr' => 'Кувейт',
                    'name_en' => 'Kuwait',
                    
                    'code' => 'KW',
                ),
            71 =>
                array (
                    'id' => 72,
                    'continent_id' => 3,
                    'name_fr' => 'Ливия',
                    'name_en' => 'Libya',
                    
                    'code' => 'LY',
                ),
            72 =>
                array (
                    'id' => 73,
                    'continent_id' => 3,
                    'name_fr' => 'Реюньон',
                    'name_en' => 'Reunion',
                    
                    'code' => 'RE',
                ),
            73 =>
                array (
                    'id' => 74,
                    'continent_id' => 3,
                    'name_fr' => 'Уганда',
                    'name_en' => 'Uganda',
                    
                    'code' => 'UG',
                ),
            74 =>
                array (
                    'id' => 75,
                    'continent_id' => 3,
                    'name_fr' => 'Эквадор',
                    'name_en' => 'Ecuador',
                    
                    'code' => 'EC',
                ),
            75 =>
                array (
                    'id' => 76,
                    'continent_id' => 3,
                    'name_fr' => 'Марокко',
                    'name_en' => 'Morocco',
                    
                    'code' => 'MA',
                ),
            76 =>
                array (
                    'id' => 77,
                    'continent_id' => 3,
                    'name_fr' => 'Мозамбик',
                    'name_en' => 'Mozambique',
                    
                    'code' => 'MZ',
                ),
            77 =>
                array (
                    'id' => 78,
                    'continent_id' => 3,
                    'name_fr' => 'Тунис',
                    'name_en' => 'Tunisia',
                    
                    'code' => 'TN',
                ),
            78 =>
                array (
                    'id' => 79,
                    'continent_id' => 3,
                    'name_fr' => 'ЮАР (Южно-Африканская Республика)',
                    'name_en' => 'South Africa',
                    
                    'code' => 'ZA',
                ),
            79 =>
                array (
                    'id' => 80,
                    'continent_id' => 4,
                    'name_fr' => 'Белиз',
                    'name_en' => 'Belize',
                    
                    'code' => 'BZ',
                ),
            80 =>
                array (
                    'id' => 81,
                    'continent_id' => 4,
                    'name_fr' => 'Бермуды',
                    'name_en' => 'Bermudas',
                    
                    'code' => 'BM',
                ),
            81 =>
                array (
                    'id' => 82,
                    'continent_id' => 4,
                    'name_fr' => 'Гаити',
                    'name_en' => 'Haiti',
                    
                    'code' => 'HT',
                ),
            82 =>
                array (
                    'id' => 83,
                    'continent_id' => 4,
                    'name_fr' => 'Гваделупа',
                    'name_en' => 'Guadeloupe',
                    
                    'code' => 'GP',
                ),
            83 =>
                array (
                    'id' => 84,
                    'continent_id' => 4,
                    'name_fr' => 'Канада',
                    'name_en' => 'Canada',
                    
                    'code' => 'CA',
                ),
            84 =>
                array (
                    'id' => 85,
                    'continent_id' => 4,
                    'name_fr' => 'Коста-Рика',
                    'name_en' => 'Costa Rica',
                    
                    'code' => 'CR',
                ),
            85 =>
                array (
                    'id' => 86,
                    'continent_id' => 4,
                    'name_fr' => 'Мексика',
                    'name_en' => 'Mexico',
                    
                    'code' => 'MX',
                ),
            86 =>
                array (
                    'id' => 87,
                    'continent_id' => 4,
                    'name_fr' => 'Сальвадор',
                    'name_en' => 'Salvador',
                    
                    'code' => 'SV',
                ),
            87 =>
                array (
                    'id' => 88,
                    'continent_id' => 4,
                    'name_fr' => 'США',
                    'name_en' => 'USA',
                    
                    'code' => 'US',
                ),
            88 =>
                array (
                    'id' => 89,
                    'continent_id' => 4,
                    'name_fr' => 'Туркс и Кейкос',
                    'name_en' => 'Turks and Caicos Islands',
                    
                    'code' => '0',
                ),
            89 =>
                array (
                    'id' => 90,
                    'continent_id' => 4,
                    'name_fr' => 'Карибы',
                    'name_en' => 'Caribs',
                    
                    'code' => '0',
                ),
            90 =>
                array (
                    'id' => 91,
                    'continent_id' => 4,
                    'name_fr' => 'Куба',
                    'name_en' => 'Cuba',
                    
                    'code' => 'CU',
                ),
            91 =>
                array (
                    'id' => 92,
                    'continent_id' => 4,
                    'name_fr' => 'Ямайка',
                    'name_en' => 'Jamaica',
                    
                    'code' => 'JM',
                ),
            92 =>
                array (
                    'id' => 93,
                    'continent_id' => 4,
                    'name_fr' => 'Гондурас',
                    'name_en' => 'Honduras',
                    
                    'code' => 'HN',
                ),
            93 =>
                array (
                    'id' => 94,
                    'continent_id' => 4,
                    'name_fr' => 'Доминиканская республика',
                    'name_en' => 'Dominican Republic',
                    
                    'code' => 'DO',
                ),
            94 =>
                array (
                    'id' => 95,
                    'continent_id' => 5,
                    'name_fr' => 'Аргентина',
                    'name_en' => 'Argentina',
                    
                    'code' => 'AR',
                ),
            95 =>
                array (
                    'id' => 96,
                    'continent_id' => 5,
                    'name_fr' => 'Бразилия',
                    'name_en' => 'Brazil',
                    
                    'code' => 'BR',
                ),
            96 =>
                array (
                    'id' => 97,
                    'continent_id' => 5,
                    'name_fr' => 'Португалия',
                    'name_en' => 'Portugal',
                    
                    'code' => 'PT',
                ),
            97 =>
                array (
                    'id' => 98,
                    'continent_id' => 5,
                    'name_fr' => 'Суринам',
                    'name_en' => 'Surinam',
                    
                    'code' => 'SR',
                ),
            98 =>
                array (
                    'id' => 99,
                    'continent_id' => 5,
                    'name_fr' => 'Чили',
                    'name_en' => 'Chile',
                    
                    'code' => 'CL',
                ),
            99 =>
                array (
                    'id' => 100,
                    'continent_id' => 5,
                    'name_fr' => 'Перу',
                    'name_en' => 'Peru',
                    
                    'code' => 'PE',
                ),
            100 =>
                array (
                    'id' => 101,
                    'continent_id' => 5,
                    'name_fr' => 'Венесуэлла',
                    'name_en' => 'Venezuela',
                    
                    'code' => 'VE',
                ),
            101 =>
                array (
                    'id' => 102,
                    'continent_id' => 6,
                    'name_fr' => 'Австралия',
                    'name_en' => 'Australia',
                    
                    'code' => 'AU',
                ),
            102 =>
                array (
                    'id' => 103,
                    'continent_id' => 7,
                    'name_fr' => 'Новая Зеландия',
                    'name_en' => 'New Zealand',
                    
                    'code' => 'NZ',
                ),
            103 =>
                array (
                    'id' => 104,
                    'continent_id' => 8,
                    'name_fr' => 'Россия',
                    'name_en' => 'Russia',
                    
                    'code' => 'RU',
                ),
        )));
        \DB::statement('ALTER SEQUENCE countries_id_seq RESTART WITH 110;');
    }
}
