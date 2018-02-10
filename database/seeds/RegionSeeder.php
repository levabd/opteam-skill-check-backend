<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('TRUNCATE regions CASCADE');

        \DB::table('regions')->insert(translate_seed_array(array (
            0 =>
                array (
                    'id' => 1,
                    'country_id' => 1,
                    'name_fr' => 'Вена',
                    'name_en' => 'Vienna',
                    
                    'regional_center_city_id' => 1,
                ),
            1 =>
                array (
                    'id' => 2,
                    'country_id' => 1,
                    'name_fr' => 'Верхняя Австрия',
                    'name_en' => 'Upper Austria',
                    
                    'regional_center_city_id' => 3,
                ),
            2 =>
                array (
                    'id' => 3,
                    'country_id' => 1,
                    'name_fr' => 'Зальцбург',
                    'name_en' => 'Salzburg',
                    
                    'regional_center_city_id' => 5,
                ),
            3 =>
                array (
                    'id' => 4,
                    'country_id' => 1,
                    'name_fr' => 'Каринтия',
                    'name_en' => 'Carinthia',
                    
                    'regional_center_city_id' => 7,
                ),
            4 =>
                array (
                    'id' => 5,
                    'country_id' => 1,
                    'name_fr' => 'Нижняя Австрия',
                    'name_en' => 'Lower Austria',
                    
                    'regional_center_city_id' => 10,
                ),
            5 =>
                array (
                    'id' => 6,
                    'country_id' => 1,
                    'name_fr' => 'Штирия',
                    'name_en' => 'Styria',
                    
                    'regional_center_city_id' => 11,
                ),
            6 =>
                array (
                    'id' => 7,
                    'country_id' => 1,
                    'name_fr' => 'Австрия',
                    'name_en' => 'Austria',
                    
                    'regional_center_city_id' => NULL,
                ),
            7 =>
                array (
                    'id' => 8,
                    'country_id' => 3,
                    'name_fr' => 'Брестская область',
                    'name_en' => 'Brest region',
                    
                    'regional_center_city_id' => 32,
                ),
            8 =>
                array (
                    'id' => 9,
                    'country_id' => 3,
                    'name_fr' => 'Витебская область',
                    'name_en' => 'Vitebsk region',
                    
                    'regional_center_city_id' => 56,
                ),
            9 =>
                array (
                    'id' => 10,
                    'country_id' => 3,
                    'name_fr' => 'Гомельская область',
                    'name_en' => 'Gomel region',
                    
                    'regional_center_city_id' => 86,
                ),
            10 =>
                array (
                    'id' => 11,
                    'country_id' => 3,
                    'name_fr' => 'Гродненская область',
                    'name_en' => 'Grodno region',
                    
                    'regional_center_city_id' => 107,
                ),
            11 =>
                array (
                    'id' => 12,
                    'country_id' => 3,
                    'name_fr' => 'Минская область',
                    'name_en' => 'Minsk region',
                    
                    'regional_center_city_id' => 123,
                ),
            12 =>
                array (
                    'id' => 13,
                    'country_id' => 3,
                    'name_fr' => 'Могилевская область',
                    'name_en' => 'Mogilev region',
                    
                    'regional_center_city_id' => 166,
                ),
            13 =>
                array (
                    'id' => 14,
                    'country_id' => 4,
                    'name_fr' => 'Антверпен',
                    'name_en' => 'Antwerpen',
                    
                    'regional_center_city_id' => 174,
                ),
            14 =>
                array (
                    'id' => 15,
                    'country_id' => 4,
                    'name_fr' => 'Брюссель',
                    'name_en' => 'Brussels',
                    
                    'regional_center_city_id' => 176,
                ),
            15 =>
                array (
                    'id' => 16,
                    'country_id' => 4,
                    'name_fr' => 'Восточная Фландрия',
                    'name_en' => 'East Flanders',
                    
                    'regional_center_city_id' => NULL,
                ),
            16 =>
                array (
                    'id' => 17,
                    'country_id' => 4,
                    'name_fr' => 'Западная Фландрия',
                    'name_en' => 'West Flanders',
                    
                    'regional_center_city_id' => NULL,
                ),
            17 =>
                array (
                    'id' => 18,
                    'country_id' => 4,
                    'name_fr' => 'Лимбург',
                    'name_en' => 'Limburg',
                    
                    'regional_center_city_id' => NULL,
                ),
            18 =>
                array (
                    'id' => 19,
                    'country_id' => 4,
                    'name_fr' => 'Льеж',
                    'name_en' => 'Liège',
                    
                    'regional_center_city_id' => 184,
                ),
            19 =>
                array (
                    'id' => 20,
                    'country_id' => 4,
                    'name_fr' => 'Эно',
                    'name_en' => 'Hainaut',
                    
                    'regional_center_city_id' => NULL,
                ),
            20 =>
                array (
                    'id' => 21,
                    'country_id' => 4,
                    'name_fr' => 'Бельгия',
                    'name_en' => 'Belgium',
                    
                    'regional_center_city_id' => NULL,
                ),
            21 =>
                array (
                    'id' => 22,
                    'country_id' => 5,
                    'name_fr' => 'Бургас',
                    'name_en' => 'Burgas',
                    
                    'regional_center_city_id' => 194,
                ),
            22 =>
                array (
                    'id' => 23,
                    'country_id' => 5,
                    'name_fr' => 'Варна',
                    'name_en' => 'Varna',
                    
                    'regional_center_city_id' => 195,
                ),
            23 =>
                array (
                    'id' => 24,
                    'country_id' => 5,
                    'name_fr' => 'Великотырново',
                    'name_en' => 'Velikotyrnovo',
                    
                    'regional_center_city_id' => 196,
                ),
            24 =>
                array (
                    'id' => 25,
                    'country_id' => 5,
                    'name_fr' => 'Видин',
                    'name_en' => 'Vidin',
                    
                    'regional_center_city_id' => 198,
                ),
            25 =>
                array (
                    'id' => 26,
                    'country_id' => 5,
                    'name_fr' => 'Габрово',
                    'name_en' => 'Gabrovo',
                    
                    'regional_center_city_id' => 199,
                ),
            26 =>
                array (
                    'id' => 27,
                    'country_id' => 5,
                    'name_fr' => 'Пазарджик',
                    'name_en' => 'Pazardzhik',
                    
                    'regional_center_city_id' => 200,
                ),
            27 =>
                array (
                    'id' => 28,
                    'country_id' => 5,
                    'name_fr' => 'Перник',
                    'name_en' => 'Pernik',
                    
                    'regional_center_city_id' => 201,
                ),
            28 =>
                array (
                    'id' => 29,
                    'country_id' => 5,
                    'name_fr' => 'Плевен',
                    'name_en' => 'Pleven',
                    
                    'regional_center_city_id' => 202,
                ),
            29 =>
                array (
                    'id' => 30,
                    'country_id' => 5,
                    'name_fr' => 'Пловдив',
                    'name_en' => 'Plovdiv',
                    
                    'regional_center_city_id' => 204,
                ),
            30 =>
                array (
                    'id' => 31,
                    'country_id' => 5,
                    'name_fr' => 'Русе',
                    'name_en' => 'Ruse',
                    
                    'regional_center_city_id' => NULL,
                ),
            31 =>
                array (
                    'id' => 32,
                    'country_id' => 5,
                    'name_fr' => 'Силистра',
                    'name_en' => 'Silistra',
                    
                    'regional_center_city_id' => 207,
                ),
            32 =>
                array (
                    'id' => 33,
                    'country_id' => 5,
                    'name_fr' => 'Сливен',
                    'name_en' => 'Sliven',
                    
                    'regional_center_city_id' => 208,
                ),
            33 =>
                array (
                    'id' => 34,
                    'country_id' => 5,
                    'name_fr' => 'София град',
                    'name_en' => 'Sofia Hailstones',
                    
                    'regional_center_city_id' => 209,
                ),
            34 =>
                array (
                    'id' => 35,
                    'country_id' => 5,
                    'name_fr' => 'Стара Загора',
                    'name_en' => 'Stara Zagora',
                    
                    'regional_center_city_id' => 211,
                ),
            35 =>
                array (
                    'id' => 36,
                    'country_id' => 5,
                    'name_fr' => 'Хасково',
                    'name_en' => 'Haskovo',
                    
                    'regional_center_city_id' => NULL,
                ),
            36 =>
                array (
                    'id' => 37,
                    'country_id' => 5,
                    'name_fr' => 'Шумен',
                    'name_en' => 'Shumen',
                    
                    'regional_center_city_id' => 214,
                ),
            37 =>
                array (
                    'id' => 38,
                    'country_id' => 5,
                    'name_fr' => 'Ямбол',
                    'name_en' => 'Yambol',
                    
                    'regional_center_city_id' => 215,
                ),
            38 =>
                array (
                    'id' => 39,
                    'country_id' => 5,
                    'name_fr' => 'Болгария',
                    'name_en' => 'Bulgaria',
                    
                    'regional_center_city_id' => NULL,
                ),
            39 =>
                array (
                    'id' => 40,
                    'country_id' => 6,
                    'name_fr' => 'Aнгилья',
                    'name_en' => 'Anguilla',
                    
                    'regional_center_city_id' => NULL,
                ),
            40 =>
                array (
                    'id' => 41,
                    'country_id' => 6,
                    'name_fr' => 'Англия',
                    'name_en' => 'England',
                    
                    'regional_center_city_id' => 359,
                ),
            41 =>
                array (
                    'id' => 42,
                    'country_id' => 6,
                    'name_fr' => 'Северная Ирландия',
                    'name_en' => 'Northern Ireland',
                    
                    'regional_center_city_id' => 505,
                ),
            42 =>
                array (
                    'id' => 43,
                    'country_id' => 6,
                    'name_fr' => 'Уэльс',
                    'name_en' => 'Wales',
                    
                    'regional_center_city_id' => 513,
                ),
            43 =>
                array (
                    'id' => 44,
                    'country_id' => 6,
                    'name_fr' => 'Шотландия',
                    'name_en' => 'Scotland',
                    
                    'regional_center_city_id' => 542,
                ),
            44 =>
                array (
                    'id' => 45,
                    'country_id' => 6,
                    'name_fr' => 'Великобритания',
                    'name_en' => 'United Kingdom',
                    
                    'regional_center_city_id' => NULL,
                ),
            45 =>
                array (
                    'id' => 46,
                    'country_id' => 7,
                    'name_fr' => 'Яс-Надькун-Сольнок',
                    'name_en' => 'Jasz-Nagykun-Szolnok',
                    
                    'regional_center_city_id' => 546,
                ),
            46 =>
                array (
                    'id' => 47,
                    'country_id' => 7,
                    'name_fr' => 'Баранья',
                    'name_en' => 'Baranya',
                    
                    'regional_center_city_id' => 548,
                ),
            47 =>
                array (
                    'id' => 48,
                    'country_id' => 7,
                    'name_fr' => 'Бач-Кишкун',
                    'name_en' => 'Bacs-Kiskun',
                    
                    'regional_center_city_id' => 550,
                ),
            48 =>
                array (
                    'id' => 49,
                    'country_id' => 7,
                    'name_fr' => 'Бекеш',
                    'name_en' => 'Békés',
                    
                    'regional_center_city_id' => 552,
                ),
            49 =>
                array (
                    'id' => 50,
                    'country_id' => 7,
                    'name_fr' => 'Боршод-Абауй-Земплен',
                    'name_en' => 'Borsod-Abaúj-Zemplén',
                    
                    'regional_center_city_id' => 553,
                ),
            50 =>
                array (
                    'id' => 51,
                    'country_id' => 7,
                    'name_fr' => 'Будапешт',
                    'name_en' => 'Budapest',
                    
                    'regional_center_city_id' => 555,
                ),
            51 =>
                array (
                    'id' => 52,
                    'country_id' => 7,
                    'name_fr' => 'Ваш',
                    'name_en' => 'Vas',
                    
                    'regional_center_city_id' => 557,
                ),
            52 =>
                array (
                    'id' => 53,
                    'country_id' => 7,
                    'name_fr' => 'Веспрем',
                    'name_en' => 'Veszprem',
                    
                    'regional_center_city_id' => 558,
                ),
            53 =>
                array (
                    'id' => 54,
                    'country_id' => 7,
                    'name_fr' => 'Дьёр-Мо́шон-Шо́прон',
                    'name_en' => 'Győr-Moson-Sopron',
                    
                    'regional_center_city_id' => 561,
                ),
            54 =>
                array (
                    'id' => 55,
                    'country_id' => 7,
                    'name_fr' => 'Зала',
                    'name_en' => 'Zala',
                    
                    'regional_center_city_id' => 564,
                ),
            55 =>
                array (
                    'id' => 56,
                    'country_id' => 7,
                    'name_fr' => 'Комаром-Эстергом',
                    'name_en' => 'Komárom-Esztergom',
                    
                    'regional_center_city_id' => 565,
                ),
            56 =>
                array (
                    'id' => 57,
                    'country_id' => 7,
                    'name_fr' => 'Ноград',
                    'name_en' => 'Nograd',
                    
                    'regional_center_city_id' => 567,
                ),
            57 =>
                array (
                    'id' => 58,
                    'country_id' => 7,
                    'name_fr' => 'Пешт',
                    'name_en' => 'Pest',
                    
                    'regional_center_city_id' => NULL,
                ),
            58 =>
                array (
                    'id' => 59,
                    'country_id' => 7,
                    'name_fr' => 'Сабольч-Сатмар',
                    'name_en' => 'Szabolcs-Szatmár',
                    
                    'regional_center_city_id' => 570,
                ),
            59 =>
                array (
                    'id' => 60,
                    'country_id' => 7,
                    'name_fr' => 'Фейер',
                    'name_en' => 'Fejer',
                    
                    'regional_center_city_id' => 573,
                ),
            60 =>
                array (
                    'id' => 61,
                    'country_id' => 7,
                    'name_fr' => 'Хайду-Бихар',
                    'name_en' => 'Hajdu-Bihar',
                    
                    'regional_center_city_id' => 574,
                ),
            61 =>
                array (
                    'id' => 62,
                    'country_id' => 7,
                    'name_fr' => 'Хевеш',
                    'name_en' => 'Heves',
                    
                    'regional_center_city_id' => 577,
                ),
            62 =>
                array (
                    'id' => 63,
                    'country_id' => 7,
                    'name_fr' => 'Чонград',
                    'name_en' => 'Csongrád',
                    
                    'regional_center_city_id' => 578,
                ),
            63 =>
                array (
                    'id' => 64,
                    'country_id' => 8,
                    'name_fr' => 'Берлин',
                    'name_en' => 'Berlin',
                    
                    'regional_center_city_id' => 581,
                ),
            64 =>
                array (
                    'id' => 65,
                    'country_id' => 8,
                    'name_fr' => 'Бра́нденбург',
                    'name_en' => 'Brandenburg',
                    
                    'regional_center_city_id' => 584,
                ),
            65 =>
                array (
                    'id' => 66,
                    'country_id' => 8,
                    'name_fr' => 'Ме́кленбург-Пере́дняя Помера́ния',
                    'name_en' => 'Mecklenburg-Vorpommern',
                    
                    'regional_center_city_id' => 591,
                ),
            66 =>
                array (
                    'id' => 67,
                    'country_id' => 8,
                    'name_fr' => 'Саксо́ния',
                    'name_en' => 'Sachsen',
                    
                    'regional_center_city_id' => 595,
                ),
            67 =>
                array (
                    'id' => 68,
                    'country_id' => 8,
                    'name_fr' => 'Саксо́ния-А́нхальт',
                    'name_en' => 'Sachsen-Anhalt',
                    
                    'regional_center_city_id' => 612,
                ),
            68 =>
                array (
                    'id' => 69,
                    'country_id' => 8,
                    'name_fr' => 'Тюрингия',
                    'name_en' => 'Thuringen',
                    
                    'regional_center_city_id' => 626,
                ),
            69 =>
                array (
                    'id' => 70,
                    'country_id' => 8,
                    'name_fr' => 'Бавария',
                    'name_en' => 'Bayern',
                    
                    'regional_center_city_id' => NULL,
                ),
            70 =>
                array (
                    'id' => 71,
                    'country_id' => 8,
                    'name_fr' => 'Баден-Вюртемберг',
                    'name_en' => 'Baden-Wurttemberg',
                    
                    'regional_center_city_id' => 667,
                ),
            71 =>
                array (
                    'id' => 72,
                    'country_id' => 8,
                    'name_fr' => 'Бремен',
                    'name_en' => 'Bremen',
                    
                    'regional_center_city_id' => 673,
                ),
            72 =>
                array (
                    'id' => 73,
                    'country_id' => 8,
                    'name_fr' => 'Гамбург',
                    'name_en' => 'Hamburg',
                    
                    'regional_center_city_id' => 675,
                ),
            73 =>
                array (
                    'id' => 74,
                    'country_id' => 8,
                    'name_fr' => 'Гессен',
                    'name_en' => 'Hessen',
                    
                    'regional_center_city_id' => 677,
                ),
            74 =>
                array (
                    'id' => 75,
                    'country_id' => 8,
                    'name_fr' => 'Нижняя Саксония',
                    'name_en' => 'Niedersachsen',
                    
                    'regional_center_city_id' => 690,
                ),
            75 =>
                array (
                    'id' => 76,
                    'country_id' => 8,
                    'name_fr' => 'Рейнланд-Пфальц',
                    'name_en' => 'Rhineland-Palatinate',
                    
                    'regional_center_city_id' => 710,
                ),
            76 =>
                array (
                    'id' => 77,
                    'country_id' => 8,
                    'name_fr' => 'Саар',
                    'name_en' => 'Saarland',
                    
                    'regional_center_city_id' => 717,
                ),
            77 =>
                array (
                    'id' => 78,
                    'country_id' => 8,
                    'name_fr' => 'Северный Рейн-Вестфалия',
                    'name_en' => 'North Rhine-Westphalia',
                    
                    'regional_center_city_id' => 738,
                ),
            78 =>
                array (
                    'id' => 79,
                    'country_id' => 8,
                    'name_fr' => 'Шлезвиг-Гольштейн',
                    'name_en' => 'Schleswig-Holstein',
                    
                    'regional_center_city_id' => 771,
                ),
            79 =>
                array (
                    'id' => 80,
                    'country_id' => 8,
                    'name_fr' => 'Германия',
                    'name_en' => 'Germany',
                    
                    'regional_center_city_id' => NULL,
                ),
            80 =>
                array (
                    'id' => 81,
                    'country_id' => 8,
                    'name_fr' => 'Саарлэнд',
                    'name_en' => 'Saarlend',
                    
                    'regional_center_city_id' => NULL,
                ),
            81 =>
                array (
                    'id' => 82,
                    'country_id' => 9,
                    'name_fr' => 'Фессалии и Центральной Греции',
                    'name_en' => 'Thessaly and Central Greece',
                    
                    'regional_center_city_id' => 797,
                ),
            82 =>
                array (
                    'id' => 83,
                    'country_id' => 9,
                    'name_fr' => 'Аттики',
                    'name_en' => 'Attiki',
                    
                    'regional_center_city_id' => 798,
                ),
            83 =>
                array (
                    'id' => 84,
                    'country_id' => 9,
                    'name_fr' => 'Эпира и Западной Македонии',
                    'name_en' => 'Epirus and Western Macedonia',
                    
                    'regional_center_city_id' => 800,
                ),
            84 =>
                array (
                    'id' => 85,
                    'country_id' => 9,
                    'name_fr' => 'Крита',
                    'name_en' => 'Crete',
                    
                    'regional_center_city_id' => 801,
                ),
            85 =>
                array (
                    'id' => 86,
                    'country_id' => 9,
                    'name_fr' => 'Македонии и Фракии',
                    'name_en' => 'Macedonia and Thrace',
                    
                    'regional_center_city_id' => 802,
                ),
            86 =>
                array (
                    'id' => 87,
                    'country_id' => 9,
                    'name_fr' => 'Корфу',
                    'name_en' => 'Corfu',
                    
                    'regional_center_city_id' => NULL,
                ),
            87 =>
                array (
                    'id' => 88,
                    'country_id' => 9,
                    'name_fr' => 'Пелопоннеса, Западной Греции и Ионии',
                    'name_en' => 'Peloponnese, Western Greece and Ionia',
                    
                    'regional_center_city_id' => 804,
                ),
            88 =>
                array (
                    'id' => 89,
                    'country_id' => 9,
                    'name_fr' => 'Эгейские острова',
                    'name_en' => 'Aegean Islands',
                    
                    'regional_center_city_id' => 805,
                ),
            89 =>
                array (
                    'id' => 90,
                    'country_id' => 10,
                    'name_fr' => 'Южная Дания',
                    'name_en' => 'Syddanmark',
                    
                    'regional_center_city_id' => 807,
                ),
            90 =>
                array (
                    'id' => 91,
                    'country_id' => 10,
                    'name_fr' => 'Ceверная Ютландия',
                    'name_en' => 'North Jutland',
                    
                    'regional_center_city_id' => 809,
                ),
            91 =>
                array (
                    'id' => 92,
                    'country_id' => 10,
                    'name_fr' => 'Хельсингор',
                    'name_en' => 'Helsingor',
                    
                    'regional_center_city_id' => NULL,
                ),
            92 =>
                array (
                    'id' => 93,
                    'country_id' => 10,
                    'name_fr' => 'Копенгаген',
                    'name_en' => 'Copenhagen',
                    
                    'regional_center_city_id' => NULL,
                ),
            93 =>
                array (
                    'id' => 94,
                    'country_id' => 10,
                    'name_fr' => 'Зеландия',
                    'name_en' => 'Zealand',
                    
                    'regional_center_city_id' => 812,
                ),
            94 =>
                array (
                    'id' => 95,
                    'country_id' => 10,
                    'name_fr' => 'Центральная Ютландия',
                    'name_en' => 'Central Jutland',
                    
                    'regional_center_city_id' => 813,
                ),
            95 =>
                array (
                    'id' => 96,
                    'country_id' => 11,
                    'name_fr' => 'Корк',
                    'name_en' => 'Cork',
                    
                    'regional_center_city_id' => 814,
                ),
            96 =>
                array (
                    'id' => 97,
                    'country_id' => 11,
                    'name_fr' => 'Дублин',
                    'name_en' => 'Dublin',
                    
                    'regional_center_city_id' => 816,
                ),
            97 =>
                array (
                    'id' => 98,
                    'country_id' => 11,
                    'name_fr' => 'Лимерик',
                    'name_en' => 'Limerick',
                    
                    'regional_center_city_id' => 817,
                ),
            98 =>
                array (
                    'id' => 99,
                    'country_id' => 11,
                    'name_fr' => 'Уотерфорд',
                    'name_en' => 'Waterford',
                    
                    'regional_center_city_id' => 819,
                ),
            99 =>
                array (
                    'id' => 100,
                    'country_id' => 12,
                    'name_fr' => 'Канта́брия',
                    'name_en' => 'Cantabria',
                    
                    'regional_center_city_id' => 820,
                ),
            100 =>
                array (
                    'id' => 101,
                    'country_id' => 12,
                    'name_fr' => 'Се́ута',
                    'name_en' => 'Ceuta',
                    
                    'regional_center_city_id' => 821,
                ),
            101 =>
                array (
                    'id' => 102,
                    'country_id' => 12,
                    'name_fr' => 'Грана́да',
                    'name_en' => 'Granada',
                    
                    'regional_center_city_id' => 822,
                ),
            102 =>
                array (
                    'id' => 103,
                    'country_id' => 12,
                    'name_fr' => 'Ла-Рио́ха',
                    'name_en' => 'La Rioja',
                    
                    'regional_center_city_id' => 824,
                ),
            103 =>
                array (
                    'id' => 104,
                    'country_id' => 12,
                    'name_fr' => 'Саламанка',
                    'name_en' => 'Salamanca',
                    
                    'regional_center_city_id' => 825,
                ),
            104 =>
                array (
                    'id' => 105,
                    'country_id' => 12,
                    'name_fr' => 'Алава',
                    'name_en' => 'Alava',
                    
                    'regional_center_city_id' => 827,
                ),
            105 =>
                array (
                    'id' => 106,
                    'country_id' => 12,
                    'name_fr' => 'Аликанте',
                    'name_en' => 'Alicante',
                    
                    'regional_center_city_id' => 828,
                ),
            106 =>
                array (
                    'id' => 107,
                    'country_id' => 12,
                    'name_fr' => 'Альбасете',
                    'name_en' => 'Albacete',
                    
                    'regional_center_city_id' => 831,
                ),
            107 =>
                array (
                    'id' => 108,
                    'country_id' => 12,
                    'name_fr' => 'Альмерия',
                    'name_en' => 'Almeria',
                    
                    'regional_center_city_id' => NULL,
                ),
            108 =>
                array (
                    'id' => 109,
                    'country_id' => 12,
                    'name_fr' => 'Астурия',
                    'name_en' => 'Asturias',
                    
                    'regional_center_city_id' => 834,
                ),
            109 =>
                array (
                    'id' => 110,
                    'country_id' => 12,
                    'name_fr' => 'Барселона',
                    'name_en' => 'Barcelona',
                    
                    'regional_center_city_id' => 836,
                ),
            110 =>
                array (
                    'id' => 111,
                    'country_id' => 12,
                    'name_fr' => 'Бискайя',
                    'name_en' => 'Vizcaya',
                    
                    'regional_center_city_id' => 841,
                ),
            111 =>
                array (
                    'id' => 112,
                    'country_id' => 12,
                    'name_fr' => 'Бургос',
                    'name_en' => 'Burgos',
                    
                    'regional_center_city_id' => 842,
                ),
            112 =>
                array (
                    'id' => 113,
                    'country_id' => 12,
                    'name_fr' => 'Валенсия',
                    'name_en' => 'Valencia',
                    
                    'regional_center_city_id' => 843,
                ),
            113 =>
                array (
                    'id' => 114,
                    'country_id' => 12,
                    'name_fr' => 'Кастилия и Леон',
                    'name_en' => 'Castile and Leon',
                    
                    'regional_center_city_id' => NULL,
                ),
            114 =>
                array (
                    'id' => 115,
                    'country_id' => 12,
                    'name_fr' => 'Кадис',
                    'name_en' => 'Кадис',
                    
                    'regional_center_city_id' => 846,
                ),
            115 =>
                array (
                    'id' => 116,
                    'country_id' => 12,
                    'name_fr' => 'Касерес',
                    'name_en' => 'Caceres',
                    
                    'regional_center_city_id' => NULL,
                ),
            116 =>
                array (
                    'id' => 117,
                    'country_id' => 12,
                    'name_fr' => 'Кордова',
                    'name_en' => 'Cordova',
                    
                    'regional_center_city_id' => 850,
                ),
            117 =>
                array (
                    'id' => 118,
                    'country_id' => 12,
                    'name_fr' => 'Лас-Пальмас',
                    'name_en' => 'Las Palmas',
                    
                    'regional_center_city_id' => 851,
                ),
            118 =>
                array (
                    'id' => 119,
                    'country_id' => 12,
                    'name_fr' => 'Леон',
                    'name_en' => 'Leon',
                    
                    'regional_center_city_id' => 852,
                ),
            119 =>
                array (
                    'id' => 120,
                    'country_id' => 12,
                    'name_fr' => 'Лерида',
                    'name_en' => 'Lleida',
                    
                    'regional_center_city_id' => 853,
                ),
            120 =>
                array (
                    'id' => 121,
                    'country_id' => 12,
                    'name_fr' => 'Луго',
                    'name_en' => 'Lugo',
                    
                    'regional_center_city_id' => 854,
                ),
            121 =>
                array (
                    'id' => 122,
                    'country_id' => 12,
                    'name_fr' => 'Мадрид',
                    'name_en' => 'Madrid',
                    
                    'regional_center_city_id' => 855,
                ),
            122 =>
                array (
                    'id' => 123,
                    'country_id' => 12,
                    'name_fr' => 'Малага',
                    'name_en' => 'Malaga',
                    
                    'regional_center_city_id' => 856,
                ),
            123 =>
                array (
                    'id' => 124,
                    'country_id' => 12,
                    'name_fr' => 'Мурсия',
                    'name_en' => 'Murcia',
                    
                    'regional_center_city_id' => 857,
                ),
            124 =>
                array (
                    'id' => 125,
                    'country_id' => 12,
                    'name_fr' => 'Острова Балеарские',
                    'name_en' => 'Balearic Islands',
                    
                    'regional_center_city_id' => 858,
                ),
            125 =>
                array (
                    'id' => 126,
                    'country_id' => 12,
                    'name_fr' => 'Паленсия',
                    'name_en' => 'Palencia',
                    
                    'regional_center_city_id' => 860,
                ),
            126 =>
                array (
                    'id' => 127,
                    'country_id' => 12,
                    'name_fr' => 'Самора',
                    'name_en' => 'Zamora',
                    
                    'regional_center_city_id' => 862,
                ),
            127 =>
                array (
                    'id' => 128,
                    'country_id' => 12,
                    'name_fr' => 'Канарские острова',
                    'name_en' => 'Canary Islands',
                    
                    'regional_center_city_id' => 863,
                ),
            128 =>
                array (
                    'id' => 129,
                    'country_id' => 12,
                    'name_fr' => 'Арагон',
                    'name_en' => 'Aragon',
                    
                    'regional_center_city_id' => 864,
                ),
            129 =>
                array (
                    'id' => 130,
                    'country_id' => 12,
                    'name_fr' => 'Андалусия',
                    'name_en' => 'Andalusia',
                    
                    'regional_center_city_id' => 865,
                ),
            130 =>
                array (
                    'id' => 131,
                    'country_id' => 12,
                    'name_fr' => 'Сьюдад-Реаль',
                    'name_en' => 'Ciudad Real',
                    
                    'regional_center_city_id' => 867,
                ),
            131 =>
                array (
                    'id' => 132,
                    'country_id' => 12,
                    'name_fr' => 'Хаэн',
                    'name_en' => 'Jaen',
                    
                    'regional_center_city_id' => NULL,
                ),
            132 =>
                array (
                    'id' => 133,
                    'country_id' => 12,
                    'name_fr' => 'Испания',
                    'name_en' => 'Spain',
                    
                    'regional_center_city_id' => NULL,
                ),
            133 =>
                array (
                    'id' => 134,
                    'country_id' => 12,
                    'name_fr' => 'Жиро́на',
                    'name_en' => 'Gerona',
                    
                    'regional_center_city_id' => NULL,
                ),
            134 =>
                array (
                    'id' => 135,
                    'country_id' => 13,
                    'name_fr' => 'Абруцци',
                    'name_en' => 'Abruzzo',
                    
                    'regional_center_city_id' => 890,
                ),
            135 =>
                array (
                    'id' => 136,
                    'country_id' => 13,
                    'name_fr' => 'Апулия',
                    'name_en' => 'Apulia',
                    
                    'regional_center_city_id' => 893,
                ),
            136 =>
                array (
                    'id' => 137,
                    'country_id' => 13,
                    'name_fr' => 'Венеция',
                    'name_en' => 'Venice',
                    
                    'regional_center_city_id' => NULL,
                ),
            137 =>
                array (
                    'id' => 138,
                    'country_id' => 13,
                    'name_fr' => 'Калабрия',
                    'name_en' => 'Calabria',
                    
                    'regional_center_city_id' => 908,
                ),
            138 =>
                array (
                    'id' => 139,
                    'country_id' => 13,
                    'name_fr' => 'Кампанья',
                    'name_en' => 'Campania',
                    
                    'regional_center_city_id' => NULL,
                ),
            139 =>
                array (
                    'id' => 140,
                    'country_id' => 13,
                    'name_fr' => 'Лацио',
                    'name_en' => 'Lazio',
                    
                    'regional_center_city_id' => 921,
                ),
            140 =>
                array (
                    'id' => 141,
                    'country_id' => 13,
                    'name_fr' => 'Лигурия',
                    'name_en' => 'Liguria',
                    
                    'regional_center_city_id' => 922,
                ),
            141 =>
                array (
                    'id' => 142,
                    'country_id' => 13,
                    'name_fr' => 'Ломбардия',
                    'name_en' => 'Lombardy',
                    
                    'regional_center_city_id' => 934,
                ),
            142 =>
                array (
                    'id' => 143,
                    'country_id' => 13,
                    'name_fr' => 'Марке',
                    'name_en' => 'Marche',
                    
                    'regional_center_city_id' => 937,
                ),
            143 =>
                array (
                    'id' => 144,
                    'country_id' => 13,
                    'name_fr' => 'Сардиния',
                    'name_en' => 'Sardinia',
                    
                    'regional_center_city_id' => 941,
                ),
            144 =>
                array (
                    'id' => 145,
                    'country_id' => 13,
                    'name_fr' => 'Сицилия',
                    'name_en' => 'Sicily',
                    
                    'regional_center_city_id' => 950,
                ),
            145 =>
                array (
                    'id' => 146,
                    'country_id' => 13,
                    'name_fr' => 'Пьемонт',
                    'name_en' => 'Piedmont',
                    
                    'regional_center_city_id' => 959,
                ),
            146 =>
                array (
                    'id' => 147,
                    'country_id' => 13,
                    'name_fr' => 'Тоскана',
                    'name_en' => 'Tuscany',
                    
                    'regional_center_city_id' => 970,
                ),
            147 =>
                array (
                    'id' => 148,
                    'country_id' => 13,
                    'name_fr' => 'Трентино-Альто-Адидже',
                    'name_en' => 'Trentino-Alto Adige',
                    
                    'regional_center_city_id' => 972,
                ),
            148 =>
                array (
                    'id' => 149,
                    'country_id' => 13,
                    'name_fr' => 'Умбрия',
                    'name_en' => 'Umbria',
                    
                    'regional_center_city_id' => 973,
                ),
            149 =>
                array (
                    'id' => 150,
                    'country_id' => 13,
                    'name_fr' => 'Фриули-Венеция-Джулия',
                    'name_en' => 'Friuli-Venezia Giulia',
                    
                    'regional_center_city_id' => 975,
                ),
            150 =>
                array (
                    'id' => 151,
                    'country_id' => 13,
                    'name_fr' => 'Эмилия-Романья',
                    'name_en' => 'Emilia-Romagna',
                    
                    'regional_center_city_id' => 977,
                ),
            151 =>
                array (
                    'id' => 152,
                    'country_id' => 13,
                    'name_fr' => 'Италия',
                    'name_en' => 'Italy',
                    
                    'regional_center_city_id' => NULL,
                ),
            152 =>
                array (
                    'id' => 153,
                    'country_id' => 13,
                    'name_fr' => 'о. Сан-Джорджо Маджоре',
                    'name_en' => 'Island of San Giorgio Maggiore',
                    
                    'regional_center_city_id' => NULL,
                ),
            153 =>
                array (
                    'id' => 154,
                    'country_id' => 14,
                    'name_fr' => 'Турецкая Республика Северного Кипра',
                    'name_en' => 'Turkish Republic of Northern Cyprus',
                    
                    'regional_center_city_id' => 1000,
                ),
            154 =>
                array (
                    'id' => 155,
                    'country_id' => 17,
                    'name_fr' => 'Люксембург',
                    'name_en' => 'Luxembourg',
                    
                    'regional_center_city_id' => 1001,
                ),
            155 =>
                array (
                    'id' => 156,
                    'country_id' => 17,
                    'name_fr' => 'Дикирх',
                    'name_en' => 'Diekirch',
                    
                    'regional_center_city_id' => 1002,
                ),
            156 =>
                array (
                    'id' => 157,
                    'country_id' => 17,
                    'name_fr' => 'Гревенмахер',
                    'name_en' => 'Grevenmacher',
                    
                    'regional_center_city_id' => 1003,
                ),
            157 =>
                array (
                    'id' => 158,
                    'country_id' => 19,
                    'name_fr' => 'Монако',
                    'name_en' => 'Monaco',
                    
                    'regional_center_city_id' => 1004,
                ),
            158 =>
                array (
                    'id' => 159,
                    'country_id' => 20,
                    'name_fr' => 'Бускеруд',
                    'name_en' => 'Buskerud',
                    
                    'regional_center_city_id' => 1006,
                ),
            159 =>
                array (
                    'id' => 160,
                    'country_id' => 20,
                    'name_fr' => 'Вестагдер',
                    'name_en' => 'Vestagder',
                    
                    'regional_center_city_id' => 1008,
                ),
            160 =>
                array (
                    'id' => 161,
                    'country_id' => 20,
                    'name_fr' => 'Нурлан',
                    'name_en' => 'Nurlan',
                    
                    'regional_center_city_id' => 1010,
                ),
            161 =>
                array (
                    'id' => 162,
                    'country_id' => 20,
                    'name_fr' => 'Осло',
                    'name_en' => 'Oslo',
                    
                    'regional_center_city_id' => 1011,
                ),
            162 =>
                array (
                    'id' => 163,
                    'country_id' => 20,
                    'name_fr' => 'Ругаланн',
                    'name_en' => 'Rogaland',
                    
                    'regional_center_city_id' => 1012,
                ),
            163 =>
                array (
                    'id' => 164,
                    'country_id' => 20,
                    'name_fr' => 'Сёр-Трённелаг',
                    'name_en' => 'Sør-Trёnnelag',
                    
                    'regional_center_city_id' => 1013,
                ),
            164 =>
                array (
                    'id' => 165,
                    'country_id' => 20,
                    'name_fr' => 'Телемарк',
                    'name_en' => 'Telemark',
                    
                    'regional_center_city_id' => 1015,
                ),
            165 =>
                array (
                    'id' => 166,
                    'country_id' => 20,
                    'name_fr' => 'Нордланд',
                    'name_en' => 'Nordland',
                    
                    'regional_center_city_id' => NULL,
                ),
            166 =>
                array (
                    'id' => 167,
                    'country_id' => 20,
                    'name_fr' => 'Ромсдал',
                    'name_en' => 'Romsdal',
                    
                    'regional_center_city_id' => NULL,
                ),
            167 =>
                array (
                    'id' => 168,
                    'country_id' => 21,
                    'name_fr' => 'Нижнесилезское',
                    'name_en' => 'Dolnoslaskie',
                    
                    'regional_center_city_id' => 1024,
                ),
            168 =>
                array (
                    'id' => 169,
                    'country_id' => 21,
                    'name_fr' => 'Куявско-Поморское',
                    'name_en' => 'Kujawsko-Pomorskie',
                    
                    'regional_center_city_id' => 1041,
                ),
            169 =>
                array (
                    'id' => 170,
                    'country_id' => 21,
                    'name_fr' => 'Любуское',
                    'name_en' => 'Lubuskie',
                    
                    'regional_center_city_id' => NULL,
                ),
            170 =>
                array (
                    'id' => 171,
                    'country_id' => 21,
                    'name_fr' => 'Малопольское',
                    'name_en' => 'Malopolskie',
                    
                    'regional_center_city_id' => 1060,
                ),
            171 =>
                array (
                    'id' => 172,
                    'country_id' => 21,
                    'name_fr' => 'Мазовецкое',
                    'name_en' => 'Mazowieckie',
                    
                    'regional_center_city_id' => 1076,
                ),
            172 =>
                array (
                    'id' => 173,
                    'country_id' => 21,
                    'name_fr' => 'Подкарпатское',
                    'name_en' => 'Podkarpackie',
                    
                    'regional_center_city_id' => 1110,
                ),
            173 =>
                array (
                    'id' => 174,
                    'country_id' => 21,
                    'name_fr' => 'Подляское',
                    'name_en' => 'Podlaskie',
                    
                    'regional_center_city_id' => 1112,
                ),
            174 =>
                array (
                    'id' => 175,
                    'country_id' => 21,
                    'name_fr' => 'Поморское',
                    'name_en' => 'Pomorskie',
                    
                    'regional_center_city_id' => 1120,
                ),
            175 =>
                array (
                    'id' => 176,
                    'country_id' => 21,
                    'name_fr' => 'Силезское',
                    'name_en' => 'Slaskie',
                    
                    'regional_center_city_id' => 1144,
                ),
            176 =>
                array (
                    'id' => 177,
                    'country_id' => 21,
                    'name_fr' => 'Свентокшиское',
                    'name_en' => 'Swietokrzyskie',
                    
                    'regional_center_city_id' => 1163,
                ),
            177 =>
                array (
                    'id' => 178,
                    'country_id' => 21,
                    'name_fr' => 'Варминьско-Мазурское',
                    'name_en' => 'Warminsko-Mazurskie',
                    
                    'regional_center_city_id' => 1175,
                ),
            178 =>
                array (
                    'id' => 179,
                    'country_id' => 21,
                    'name_fr' => 'Великопольское',
                    'name_en' => 'Wielkopolskie',
                    
                    'regional_center_city_id' => 1193,
                ),
            179 =>
                array (
                    'id' => 180,
                    'country_id' => 21,
                    'name_fr' => 'Западно-Поморское',
                    'name_en' => 'Zachodnio-Pomorskie',
                    
                    'regional_center_city_id' => 1209,
                ),
            180 =>
                array (
                    'id' => 181,
                    'country_id' => 21,
                    'name_fr' => 'Лодзинское',
                    'name_en' => 'Lodzkie',
                    
                    'regional_center_city_id' => 1218,
                ),
            181 =>
                array (
                    'id' => 182,
                    'country_id' => 21,
                    'name_fr' => 'Люблинское',
                    'name_en' => 'Lubelskie',
                    
                    'regional_center_city_id' => 1235,
                ),
            182 =>
                array (
                    'id' => 183,
                    'country_id' => 21,
                    'name_fr' => 'Опольское',
                    'name_en' => 'Opolskie',
                    
                    'regional_center_city_id' => 1245,
                ),
            183 =>
                array (
                    'id' => 184,
                    'country_id' => 21,
                    'name_fr' => 'Польша',
                    'name_en' => 'Poland',
                    
                    'regional_center_city_id' => NULL,
                ),
            184 =>
                array (
                    'id' => 185,
                    'country_id' => 22,
                    'name_fr' => 'Трнавский край',
                    'name_en' => 'Trnavsky',
                    
                    'regional_center_city_id' => 1260,
                ),
            185 =>
                array (
                    'id' => 186,
                    'country_id' => 22,
                    'name_fr' => 'Братиславский край',
                    'name_en' => 'Bratislava region',
                    
                    'regional_center_city_id' => 1261,
                ),
            186 =>
                array (
                    'id' => 187,
                    'country_id' => 22,
                    'name_fr' => 'Жилинский край',
                    'name_en' => 'Žilina region',
                    
                    'regional_center_city_id' => 1263,
                ),
            187 =>
                array (
                    'id' => 188,
                    'country_id' => 23,
                    'name_fr' => 'Словения',
                    'name_en' => 'Slovenia',
                    
                    'regional_center_city_id' => NULL,
                ),
            188 =>
                array (
                    'id' => 189,
                    'country_id' => 24,
                    'name_fr' => 'Бартын',
                    'name_en' => 'Bartin',
                    
                    'regional_center_city_id' => 1266,
                ),
            189 =>
                array (
                    'id' => 190,
                    'country_id' => 24,
                    'name_fr' => 'Байбурт',
                    'name_en' => 'Bayburt',
                    
                    'regional_center_city_id' => 1267,
                ),
            190 =>
                array (
                    'id' => 191,
                    'country_id' => 24,
                    'name_fr' => 'Карабюк',
                    'name_en' => 'Karabuk',
                    
                    'regional_center_city_id' => 1268,
                ),
            191 =>
                array (
                    'id' => 192,
                    'country_id' => 24,
                    'name_fr' => 'Адана',
                    'name_en' => 'Adana',
                    
                    'regional_center_city_id' => 1269,
                ),
            192 =>
                array (
                    'id' => 193,
                    'country_id' => 24,
                    'name_fr' => 'Айдын',
                    'name_en' => 'Aydin',
                    
                    'regional_center_city_id' => 1270,
                ),
            193 =>
                array (
                    'id' => 194,
                    'country_id' => 24,
                    'name_fr' => 'Амасья',
                    'name_en' => 'Amasya',
                    
                    'regional_center_city_id' => 1271,
                ),
            194 =>
                array (
                    'id' => 195,
                    'country_id' => 24,
                    'name_fr' => 'Анкара',
                    'name_en' => 'Ankara',
                    
                    'regional_center_city_id' => 1272,
                ),
            195 =>
                array (
                    'id' => 196,
                    'country_id' => 24,
                    'name_fr' => 'Анталья',
                    'name_en' => 'Antalya',
                    
                    'regional_center_city_id' => 1273,
                ),
            196 =>
                array (
                    'id' => 197,
                    'country_id' => 24,
                    'name_fr' => 'Артвин',
                    'name_en' => 'Artvin',
                    
                    'regional_center_city_id' => 1274,
                ),
            197 =>
                array (
                    'id' => 198,
                    'country_id' => 24,
                    'name_fr' => 'Афьон',
                    'name_en' => 'Afyon',
                    
                    'regional_center_city_id' => 1275,
                ),
            198 =>
                array (
                    'id' => 199,
                    'country_id' => 24,
                    'name_fr' => 'Балыкесир',
                    'name_en' => 'Balikesir',
                    
                    'regional_center_city_id' => 1276,
                ),
            199 =>
                array (
                    'id' => 200,
                    'country_id' => 24,
                    'name_fr' => 'Биледжик',
                    'name_en' => 'Bilecik',
                    
                    'regional_center_city_id' => 1277,
                ),
            200 =>
                array (
                    'id' => 201,
                    'country_id' => 24,
                    'name_fr' => 'Бурса',
                    'name_en' => 'Bursa',
                    
                    'regional_center_city_id' => 1278,
                ),
            201 =>
                array (
                    'id' => 202,
                    'country_id' => 24,
                    'name_fr' => 'Газиантеп',
                    'name_en' => 'Gaziantep',
                    
                    'regional_center_city_id' => 1279,
                ),
            202 =>
                array (
                    'id' => 203,
                    'country_id' => 24,
                    'name_fr' => 'Денизли',
                    'name_en' => 'Denizli',
                    
                    'regional_center_city_id' => 1280,
                ),
            203 =>
                array (
                    'id' => 204,
                    'country_id' => 24,
                    'name_fr' => 'Измир',
                    'name_en' => 'Izmir',
                    
                    'regional_center_city_id' => 1281,
                ),
            204 =>
                array (
                    'id' => 205,
                    'country_id' => 24,
                    'name_fr' => 'Испарта',
                    'name_en' => 'Isparta',
                    
                    'regional_center_city_id' => 1282,
                ),
            205 =>
                array (
                    'id' => 206,
                    'country_id' => 24,
                    'name_fr' => 'Ичель',
                    'name_en' => 'Icel',
                    
                    'regional_center_city_id' => 1283,
                ),
            206 =>
                array (
                    'id' => 207,
                    'country_id' => 24,
                    'name_fr' => 'Кайсери',
                    'name_en' => 'Kayseri',
                    
                    'regional_center_city_id' => 1285,
                ),
            207 =>
                array (
                    'id' => 208,
                    'country_id' => 24,
                    'name_fr' => 'Карс',
                    'name_en' => 'Kars',
                    
                    'regional_center_city_id' => 1286,
                ),
            208 =>
                array (
                    'id' => 209,
                    'country_id' => 24,
                    'name_fr' => 'Коджаэли',
                    'name_en' => 'Kocaeli',
                    
                    'regional_center_city_id' => 1287,
                ),
            209 =>
                array (
                    'id' => 210,
                    'country_id' => 24,
                    'name_fr' => 'Конья',
                    'name_en' => 'Konya',
                    
                    'regional_center_city_id' => 1289,
                ),
            210 =>
                array (
                    'id' => 211,
                    'country_id' => 24,
                    'name_fr' => 'Кыркларели',
                    'name_en' => 'Kirklareli',
                    
                    'regional_center_city_id' => 1291,
                ),
            211 =>
                array (
                    'id' => 212,
                    'country_id' => 24,
                    'name_fr' => 'Кютахья',
                    'name_en' => 'Kutahya',
                    
                    'regional_center_city_id' => 1292,
                ),
            212 =>
                array (
                    'id' => 213,
                    'country_id' => 24,
                    'name_fr' => 'Малатья',
                    'name_en' => 'Malatya',
                    
                    'regional_center_city_id' => 1293,
                ),
            213 =>
                array (
                    'id' => 214,
                    'country_id' => 24,
                    'name_fr' => 'Маниса',
                    'name_en' => 'Manisa',
                    
                    'regional_center_city_id' => 1294,
                ),
            214 =>
                array (
                    'id' => 215,
                    'country_id' => 24,
                    'name_fr' => 'Сакарья',
                    'name_en' => 'Sakarya',
                    
                    'regional_center_city_id' => 1295,
                ),
            215 =>
                array (
                    'id' => 216,
                    'country_id' => 24,
                    'name_fr' => 'Самсун',
                    'name_en' => 'Samsun',
                    
                    'regional_center_city_id' => 1296,
                ),
            216 =>
                array (
                    'id' => 217,
                    'country_id' => 24,
                    'name_fr' => 'Сивас',
                    'name_en' => 'Sivas',
                    
                    'regional_center_city_id' => 1297,
                ),
            217 =>
                array (
                    'id' => 218,
                    'country_id' => 24,
                    'name_fr' => 'Стамбул',
                    'name_en' => 'Istanbul',
                    
                    'regional_center_city_id' => 1298,
                ),
            218 =>
                array (
                    'id' => 219,
                    'country_id' => 24,
                    'name_fr' => 'Трабзон',
                    'name_en' => 'Trabzon',
                    
                    'regional_center_city_id' => 1299,
                ),
            219 =>
                array (
                    'id' => 220,
                    'country_id' => 24,
                    'name_fr' => 'Чорум',
                    'name_en' => 'Corum',
                    
                    'regional_center_city_id' => 1302,
                ),
            220 =>
                array (
                    'id' => 221,
                    'country_id' => 24,
                    'name_fr' => 'Эдирне',
                    'name_en' => 'Edirne',
                    
                    'regional_center_city_id' => 1303,
                ),
            221 =>
                array (
                    'id' => 222,
                    'country_id' => 24,
                    'name_fr' => 'Элязыг',
                    'name_en' => 'Elazig',
                    
                    'regional_center_city_id' => 1304,
                ),
            222 =>
                array (
                    'id' => 223,
                    'country_id' => 24,
                    'name_fr' => 'Эрзинджан',
                    'name_en' => 'Erzincan',
                    
                    'regional_center_city_id' => 1305,
                ),
            223 =>
                array (
                    'id' => 224,
                    'country_id' => 24,
                    'name_fr' => 'Эрзурум',
                    'name_en' => 'Erzurum',
                    
                    'regional_center_city_id' => 1306,
                ),
            224 =>
                array (
                    'id' => 225,
                    'country_id' => 24,
                    'name_fr' => 'Эскишехир',
                    'name_en' => 'Eskisehir',
                    
                    'regional_center_city_id' => 1308,
                ),
            225 =>
                array (
                    'id' => 226,
                    'country_id' => 25,
                    'name_fr' => 'Винницкая область',
                    'name_en' => 'Vinnytsia region',
                    
                    'regional_center_city_id' => 1315,
                ),
            226 =>
                array (
                    'id' => 227,
                    'country_id' => 25,
                    'name_fr' => 'Волынская область',
                    'name_en' => 'Volynsk region',
                    
                    'regional_center_city_id' => 1353,
                ),
            227 =>
                array (
                    'id' => 228,
                    'country_id' => 25,
                    'name_fr' => 'Днепропетровская область',
                    'name_en' => 'Dnipropetrovsk region',
                    
                    'regional_center_city_id' => 1374,
                ),
            228 =>
                array (
                    'id' => 229,
                    'country_id' => 25,
                    'name_fr' => 'Донецкая область',
                    'name_en' => 'Donetsk region',
                    
                    'regional_center_city_id' => 1426,
                ),
            229 =>
                array (
                    'id' => 230,
                    'country_id' => 25,
                    'name_fr' => 'Житомирская область',
                    'name_en' => 'Zhytomyr region',
                    
                    'regional_center_city_id' => 1473,
                ),
            230 =>
                array (
                    'id' => 231,
                    'country_id' => 25,
                    'name_fr' => 'Закарпатская область',
                    'name_en' => 'Zakarpatsk region',
                    
                    'regional_center_city_id' => 1504,
                ),
            231 =>
                array (
                    'id' => 232,
                    'country_id' => 25,
                    'name_fr' => 'Запорожская область',
                    'name_en' => 'Zaporozhye region',
                    
                    'regional_center_city_id' => 1514,
                ),
            232 =>
                array (
                    'id' => 233,
                    'country_id' => 25,
                    'name_fr' => 'Ивано-Франковская область',
                    'name_en' => 'Ivano-Frankovsk region',
                    
                    'regional_center_city_id' => 1546,
                ),
            233 =>
                array (
                    'id' => 234,
                    'country_id' => 25,
                    'name_fr' => 'Киевская область',
                    'name_en' => 'Kiev region',
                    
                    'regional_center_city_id' => 1578,
                ),
            234 =>
                array (
                    'id' => 235,
                    'country_id' => 25,
                    'name_fr' => 'Кировоградская область',
                    'name_en' => 'Kirovograd',
                    
                    'regional_center_city_id' => 1610,
                ),
            235 =>
                array (
                    'id' => 236,
                    'country_id' => 25,
                    'name_fr' => 'Крым Автономная Республика',
                    'name_en' => 'Autonomous Republic of Crimea',
                    
                    'regional_center_city_id' => 1647,
                ),
            236 =>
                array (
                    'id' => 237,
                    'country_id' => 25,
                    'name_fr' => 'Луганская область',
                    'name_en' => 'Lugansk region',
                    
                    'regional_center_city_id' => 1695,
                ),
            237 =>
                array (
                    'id' => 238,
                    'country_id' => 25,
                    'name_fr' => 'Львовская область',
                    'name_en' => 'Lviv region',
                    
                    'regional_center_city_id' => 1732,
                ),
            238 =>
                array (
                    'id' => 239,
                    'country_id' => 25,
                    'name_fr' => 'Николаевская область',
                    'name_en' => 'Mykolaiv region',
                    
                    'regional_center_city_id' => NULL,
                ),
            239 =>
                array (
                    'id' => 240,
                    'country_id' => 25,
                    'name_fr' => 'Одесская область',
                    'name_en' => 'Odessa region',
                    
                    'regional_center_city_id' => 1792,
                ),
            240 =>
                array (
                    'id' => 241,
                    'country_id' => 25,
                    'name_fr' => 'Полтавская область',
                    'name_en' => 'Poltava region',
                    
                    'regional_center_city_id' => 1824,
                ),
            241 =>
                array (
                    'id' => 242,
                    'country_id' => 25,
                    'name_fr' => 'Ровенская область',
                    'name_en' => 'Rivne region',
                    
                    'regional_center_city_id' => 1846,
                ),
            242 =>
                array (
                    'id' => 243,
                    'country_id' => 25,
                    'name_fr' => 'Сумская область',
                    'name_en' => 'Sumy region',
                    
                    'regional_center_city_id' => 1868,
                ),
            243 =>
                array (
                    'id' => 244,
                    'country_id' => 25,
                    'name_fr' => 'Тернопольская область',
                    'name_en' => 'Ternopil region',
                    
                    'regional_center_city_id' => 1893,
                ),
            244 =>
                array (
                    'id' => 245,
                    'country_id' => 25,
                    'name_fr' => 'Харьковская область',
                    'name_en' => 'Kharkiv region',
                    
                    'regional_center_city_id' => 1923,
                ),
            245 =>
                array (
                    'id' => 246,
                    'country_id' => 25,
                    'name_fr' => 'Херсонская область',
                    'name_en' => 'Kherson region',
                    
                    'regional_center_city_id' => 1948,
                ),
            246 =>
                array (
                    'id' => 247,
                    'country_id' => 25,
                    'name_fr' => 'Хмельницкая область',
                    'name_en' => 'Khmelnytsky region',
                    
                    'regional_center_city_id' => 1970,
                ),
            247 =>
                array (
                    'id' => 248,
                    'country_id' => 25,
                    'name_fr' => 'Черкасская область',
                    'name_en' => 'Cherkasy region',
                    
                    'regional_center_city_id' => 1994,
                ),
            248 =>
                array (
                    'id' => 249,
                    'country_id' => 25,
                    'name_fr' => 'Черниговская область',
                    'name_en' => 'Chernihiv region',
                    
                    'regional_center_city_id' => 2021,
                ),
            249 =>
                array (
                    'id' => 250,
                    'country_id' => 25,
                    'name_fr' => 'Черновицкая область',
                    'name_en' => 'Chernovtsy region',
                    
                    'regional_center_city_id' => 2036,
                ),
            250 =>
                array (
                    'id' => 251,
                    'country_id' => 25,
                    'name_fr' => 'Украина',
                    'name_en' => 'Ukraine',
                    
                    'regional_center_city_id' => NULL,
                ),
            251 =>
                array (
                    'id' => 252,
                    'country_id' => 26,
                    'name_fr' => 'Южная Карелия',
                    'name_en' => 'Etela-Karjala',
                    
                    'regional_center_city_id' => 2054,
                ),
            252 =>
                array (
                    'id' => 253,
                    'country_id' => 26,
                    'name_fr' => 'Пяйят-Хяме',
                    'name_en' => 'Paijat-Hame',
                    
                    'regional_center_city_id' => 2055,
                ),
            253 =>
                array (
                    'id' => 254,
                    'country_id' => 26,
                    'name_fr' => 'Остроботния',
                    'name_en' => 'Pohjanmaa',
                    
                    'regional_center_city_id' => 2056,
                ),
            254 =>
                array (
                    'id' => 255,
                    'country_id' => 26,
                    'name_fr' => 'Северная Остроботния',
                    'name_en' => 'Pohjois-Pohjanmaa',
                    
                    'regional_center_city_id' => 2057,
                ),
            255 =>
                array (
                    'id' => 256,
                    'country_id' => 26,
                    'name_fr' => 'Северное Саво',
                    'name_en' => 'Pohjois-Savo',
                    
                    'regional_center_city_id' => 2058,
                ),
            256 =>
                array (
                    'id' => 257,
                    'country_id' => 26,
                    'name_fr' => 'Сатакунта',
                    'name_en' => 'Satakunta',
                    
                    'regional_center_city_id' => 2059,
                ),
            257 =>
                array (
                    'id' => 258,
                    'country_id' => 26,
                    'name_fr' => 'Юго-Западная Финляндия',
                    'name_en' => 'Varsinais-Suomi',
                    
                    'regional_center_city_id' => 2060,
                ),
            258 =>
                array (
                    'id' => 259,
                    'country_id' => 26,
                    'name_fr' => 'Центральная Финляндия',
                    'name_en' => 'Keski-Suomi',
                    
                    'regional_center_city_id' => 2062,
                ),
            259 =>
                array (
                    'id' => 260,
                    'country_id' => 26,
                    'name_fr' => 'Уусима',
                    'name_en' => 'Uusimaa',
                    
                    'regional_center_city_id' => 2063,
                ),
            260 =>
                array (
                    'id' => 261,
                    'country_id' => 26,
                    'name_fr' => 'Финляндия',
                    'name_en' => 'Finland',
                    
                    'regional_center_city_id' => NULL,
                ),
            261 =>
                array (
                    'id' => 262,
                    'country_id' => 26,
                    'name_fr' => 'Ко́увола',
                    'name_en' => 'Kouvola',
                    
                    'regional_center_city_id' => NULL,
                ),
            262 =>
                array (
                    'id' => 263,
                    'country_id' => 26,
                    'name_fr' => 'Се́верная Каре́лия',
                    'name_en' => 'Pohjois-Karjala',
                    
                    'regional_center_city_id' => NULL,
                ),
            263 =>
                array (
                    'id' => 264,
                    'country_id' => 27,
                    'name_fr' => 'Кот-д’Армор',
                    'name_en' => 'Cotes-d`Armor',
                    'regional_center_city_id' => 2078,
                ),
            264 =>
                array (
                    'id' => 265,
                    'country_id' => 27,
                    'name_fr' => 'Алье',
                    'name_en' => 'Allier',
                    
                    'regional_center_city_id' => 2080,
                ),
            265 =>
                array (
                    'id' => 266,
                    'country_id' => 27,
                    'name_fr' => 'Альпы Верхние',
                    'name_en' => 'Hautes-Alpes',
                    
                    'regional_center_city_id' => 2081,
                ),
            266 =>
                array (
                    'id' => 267,
                    'country_id' => 27,
                    'name_fr' => 'Альпы Приморские',
                    'name_en' => 'Alpes-Maritimes',
                    
                    'regional_center_city_id' => 2084,
                ),
            267 =>
                array (
                    'id' => 268,
                    'country_id' => 27,
                    'name_fr' => 'Арденны',
                    'name_en' => 'Ardennes',
                    
                    'regional_center_city_id' => 2085,
                ),
            268 =>
                array (
                    'id' => 269,
                    'country_id' => 27,
                    'name_fr' => 'Бельфор',
                    'name_en' => 'Belfort',
                    
                    'regional_center_city_id' => 2086,
                ),
            269 =>
                array (
                    'id' => 270,
                    'country_id' => 27,
                    'name_fr' => 'Буш-дю-Рон',
                    'name_en' => 'Bouches-du-Rhône',
                    
                    'regional_center_city_id' => 2088,
                ),
            270 =>
                array (
                    'id' => 271,
                    'country_id' => 27,
                    'name_fr' => 'Валь-д` Уаз',
                    'name_en' => 'Val d`Oise d',
                    
                    'regional_center_city_id' => 2090,
                ),
            271 =>
                array (
                    'id' => 272,
                    'country_id' => 27,
                    'name_fr' => 'Валь-де-Марн',
                    'name_en' => 'Val-de-Marne',
                    
                    'regional_center_city_id' => 2095,
                ),
            272 =>
                array (
                    'id' => 273,
                    'country_id' => 27,
                    'name_fr' => 'Вар',
                    'name_en' => 'Var',
                    
                    'regional_center_city_id' => 2102,
                ),
            273 =>
                array (
                    'id' => 274,
                    'country_id' => 27,
                    'name_fr' => 'Вогезы',
                    'name_en' => 'Vosges',
                    
                    'regional_center_city_id' => 2103,
                ),
            274 =>
                array (
                    'id' => 275,
                    'country_id' => 27,
                    'name_fr' => 'Воклюз',
                    'name_en' => 'Vaucluse',
                    
                    'regional_center_city_id' => 2104,
                ),
            275 =>
                array (
                    'id' => 276,
                    'country_id' => 27,
                    'name_fr' => 'Вьенна',
                    'name_en' => 'Vienne',
                    
                    'regional_center_city_id' => 2105,
                ),
            276 =>
                array (
                    'id' => 277,
                    'country_id' => 27,
                    'name_fr' => 'Вьенна Верхняя',
                    'name_en' => 'Haute-Vienne',
                    
                    'regional_center_city_id' => 2106,
                ),
            277 =>
                array (
                    'id' => 278,
                    'country_id' => 27,
                    'name_fr' => 'Гар',
                    'name_en' => 'Gard',
                    
                    'regional_center_city_id' => 2107,
                ),
            278 =>
                array (
                    'id' => 279,
                    'country_id' => 27,
                    'name_fr' => 'Гаронна Верхняя',
                    'name_en' => 'Haute-Garonne',
                    
                    'regional_center_city_id' => 2108,
                ),
            279 =>
                array (
                    'id' => 280,
                    'country_id' => 27,
                    'name_fr' => 'Дё-Севр',
                    'name_en' => 'Deux-Sevres',
                    
                    'regional_center_city_id' => 2109,
                ),
            280 =>
                array (
                    'id' => 281,
                    'country_id' => 27,
                    'name_fr' => 'Дром',
                    'name_en' => 'Drome',
                    
                    'regional_center_city_id' => 2110,
                ),
            281 =>
                array (
                    'id' => 282,
                    'country_id' => 27,
                    'name_fr' => 'Ду',
                    'name_en' => 'Doubs',
                    
                    'regional_center_city_id' => 2112,
                ),
            282 =>
                array (
                    'id' => 283,
                    'country_id' => 27,
                    'name_fr' => 'Жиронда',
                    'name_en' => 'Gironde',
                    
                    'regional_center_city_id' => 2113,
                ),
            283 =>
                array (
                    'id' => 284,
                    'country_id' => 27,
                    'name_fr' => 'Ивелин',
                    'name_en' => 'Yvelines',
                    
                    'regional_center_city_id' => 2114,
                ),
            284 =>
                array (
                    'id' => 285,
                    'country_id' => 27,
                    'name_fr' => 'Иль и Вилен',
                    'name_en' => 'Ille-et-Vilaine',
                    
                    'regional_center_city_id' => 2117,
                ),
            285 =>
                array (
                    'id' => 286,
                    'country_id' => 27,
                    'name_fr' => 'Коррез',
                    'name_en' => 'Correze',
                    
                    'regional_center_city_id' => NULL,
                ),
            286 =>
                array (
                    'id' => 287,
                    'country_id' => 27,
                    'name_fr' => 'Корсика Верхняя',
                    'name_en' => 'Haute-Corse',
                    
                    'regional_center_city_id' => 2119,
                ),
            287 =>
                array (
                    'id' => 288,
                    'country_id' => 27,
                    'name_fr' => 'Корсика Южная',
                    'name_en' => 'Corse-du-Sud',
                    
                    'regional_center_city_id' => 2120,
                ),
            288 =>
                array (
                    'id' => 289,
                    'country_id' => 27,
                    'name_fr' => 'Кот-д`Ор',
                    'name_en' => 'Côte d`Or',
                    
                    'regional_center_city_id' => 2121,
                ),
            289 =>
                array (
                    'id' => 290,
                    'country_id' => 27,
                    'name_fr' => 'Ланды',
                    'name_en' => 'Landes',
                    
                    'regional_center_city_id' => 2122,
                ),
            290 =>
                array (
                    'id' => 291,
                    'country_id' => 27,
                    'name_fr' => 'Ло и Гаронна',
                    'name_en' => 'Lot and Garonne',
                    
                    'regional_center_city_id' => 2123,
                ),
            291 =>
                array (
                    'id' => 292,
                    'country_id' => 27,
                    'name_fr' => 'Лозер',
                    'name_en' => 'Loser',
                    
                    'regional_center_city_id' => 2124,
                ),
            292 =>
                array (
                    'id' => 293,
                    'country_id' => 27,
                    'name_fr' => 'Луар и Шер',
                    'name_en' => 'Loir-et-Cher',
                    
                    'regional_center_city_id' => 2125,
                ),
            293 =>
                array (
                    'id' => 294,
                    'country_id' => 27,
                    'name_fr' => 'Луара',
                    'name_en' => 'Loire',
                    
                    'regional_center_city_id' => 2127,
                ),
            294 =>
                array (
                    'id' => 295,
                    'country_id' => 27,
                    'name_fr' => 'Луара Атлантическая',
                    'name_en' => 'Loire-Atlantique',
                    
                    'regional_center_city_id' => 2128,
                ),
            295 =>
                array (
                    'id' => 296,
                    'country_id' => 27,
                    'name_fr' => 'Луара Верхняя',
                    'name_en' => 'Haute-Loire',
                    
                    'regional_center_city_id' => 2130,
                ),
            296 =>
                array (
                    'id' => 297,
                    'country_id' => 27,
                    'name_fr' => 'Луаре',
                    'name_en' => 'Loire',
                    
                    'regional_center_city_id' => NULL,
                ),
            297 =>
                array (
                    'id' => 298,
                    'country_id' => 27,
                    'name_fr' => 'Майенн',
                    'name_en' => 'Mayenne',
                    
                    'regional_center_city_id' => 2132,
                ),
            298 =>
                array (
                    'id' => 299,
                    'country_id' => 27,
                    'name_fr' => 'Марна',
                    'name_en' => 'Marne',
                    
                    'regional_center_city_id' => 2135,
                ),
            299 =>
                array (
                    'id' => 300,
                    'country_id' => 27,
                    'name_fr' => 'Мен и Луара',
                    'name_en' => 'Maine-et-Loire',
                    
                    'regional_center_city_id' => 2136,
                ),
            300 =>
                array (
                    'id' => 301,
                    'country_id' => 27,
                    'name_fr' => 'Мёрт и Мозель',
                    'name_en' => 'Meurthe et Moselle',
                    
                    'regional_center_city_id' => 2138,
                ),
            301 =>
                array (
                    'id' => 302,
                    'country_id' => 27,
                    'name_fr' => 'Мозель',
                    'name_en' => 'Moselle',
                    
                    'regional_center_city_id' => 2139,
                ),
            302 =>
                array (
                    'id' => 303,
                    'country_id' => 27,
                    'name_fr' => 'Морбиан',
                    'name_en' => 'Morbihan',
                    
                    'regional_center_city_id' => 2141,
                ),
            303 =>
                array (
                    'id' => 304,
                    'country_id' => 27,
                    'name_fr' => 'Нор',
                    'name_en' => 'Nor',
                    
                    'regional_center_city_id' => 2144,
                ),
            304 =>
                array (
                    'id' => 305,
                    'country_id' => 27,
                    'name_fr' => 'Ньевр',
                    'name_en' => 'Nièvre',
                    
                    'regional_center_city_id' => 2147,
                ),
            305 =>
                array (
                    'id' => 306,
                    'country_id' => 27,
                    'name_fr' => 'О-де-Сен',
                    'name_en' => 'Hauts-de-Seine',
                    
                    'regional_center_city_id' => 2160,
                ),
            306 =>
                array (
                    'id' => 307,
                    'country_id' => 27,
                    'name_fr' => 'Об',
                    'name_en' => 'Aube',
                    
                    'regional_center_city_id' => 2165,
                ),
            307 =>
                array (
                    'id' => 308,
                    'country_id' => 27,
                    'name_fr' => 'Од',
                    'name_en' => 'Aude',
                    
                    'regional_center_city_id' => 2166,
                ),
            308 =>
                array (
                    'id' => 309,
                    'country_id' => 27,
                    'name_fr' => 'Орн',
                    'name_en' => 'Orne',
                    
                    'regional_center_city_id' => 2167,
                ),
            309 =>
                array (
                    'id' => 310,
                    'country_id' => 27,
                    'name_fr' => 'Па-де-Кале',
                    'name_en' => 'Pas-de-Calais',
                    
                    'regional_center_city_id' => 2168,
                ),
            310 =>
                array (
                    'id' => 311,
                    'country_id' => 27,
                    'name_fr' => 'Париж',
                    'name_en' => 'Paris',
                    
                    'regional_center_city_id' => 2171,
                ),
            311 =>
                array (
                    'id' => 312,
                    'country_id' => 27,
                    'name_fr' => 'Пиренеи Атлантические',
                    'name_en' => 'Pyrenees-Atlantiques',
                    
                    'regional_center_city_id' => 2173,
                ),
            312 =>
                array (
                    'id' => 313,
                    'country_id' => 27,
                    'name_fr' => 'Пиренеи Верхние',
                    'name_en' => 'Hautes-Pyrénées',
                    
                    'regional_center_city_id' => 2174,
                ),
            313 =>
                array (
                    'id' => 314,
                    'country_id' => 27,
                    'name_fr' => 'Пиренеи Восточные',
                    'name_en' => 'Pyrénées-Orientales',
                    
                    'regional_center_city_id' => 2175,
                ),
            314 =>
                array (
                    'id' => 315,
                    'country_id' => 27,
                    'name_fr' => 'Рейн Верхний',
                    'name_en' => 'Haut-Rhin',
                    
                    'regional_center_city_id' => 2176,
                ),
            315 =>
                array (
                    'id' => 316,
                    'country_id' => 27,
                    'name_fr' => 'Рейн Нижний',
                    'name_en' => 'Bas-Rhin',
                    
                    'regional_center_city_id' => 2179,
                ),
            316 =>
                array (
                    'id' => 317,
                    'country_id' => 27,
                    'name_fr' => 'Рона',
                    'name_en' => 'Rhone',
                    
                    'regional_center_city_id' => 2182,
                ),
            317 =>
                array (
                    'id' => 318,
                    'country_id' => 27,
                    'name_fr' => 'Савойя',
                    'name_en' => 'Savoie',
                    
                    'regional_center_city_id' => 2183,
                ),
            318 =>
                array (
                    'id' => 319,
                    'country_id' => 27,
                    'name_fr' => 'Савойя Верхняя',
                    'name_en' => 'Haute-Savoie',
                    
                    'regional_center_city_id' => 2185,
                ),
            319 =>
                array (
                    'id' => 320,
                    'country_id' => 27,
                    'name_fr' => 'Сарта',
                    'name_en' => 'Sarthe',
                    
                    'regional_center_city_id' => 2186,
                ),
            320 =>
                array (
                    'id' => 321,
                    'country_id' => 27,
                    'name_fr' => 'Сен-Сен-Дени',
                    'name_en' => 'Seine-Saint-Denis',
                    
                    'regional_center_city_id' => 2187,
                ),
            321 =>
                array (
                    'id' => 322,
                    'country_id' => 27,
                    'name_fr' => 'Сена Приморская',
                    'name_en' => 'Seine-Maritime',
                    
                    'regional_center_city_id' => NULL,
                ),
            322 =>
                array (
                    'id' => 323,
                    'country_id' => 27,
                    'name_fr' => 'Сомма',
                    'name_en' => 'Somme',
                    
                    'regional_center_city_id' => 2200,
                ),
            323 =>
                array (
                    'id' => 324,
                    'country_id' => 27,
                    'name_fr' => 'Сона и Луара',
                    'name_en' => 'Saone-et-Loire',
                    
                    'regional_center_city_id' => 2201,
                ),
            324 =>
                array (
                    'id' => 325,
                    'country_id' => 27,
                    'name_fr' => 'Тарн',
                    'name_en' => 'Tarn',
                    
                    'regional_center_city_id' => 2203,
                ),
            325 =>
                array (
                    'id' => 326,
                    'country_id' => 27,
                    'name_fr' => 'Уаза',
                    'name_en' => 'Oise',
                    
                    'regional_center_city_id' => 2205,
                ),
            326 =>
                array (
                    'id' => 327,
                    'country_id' => 27,
                    'name_fr' => 'Финистер',
                    'name_en' => 'Finistère',
                    
                    'regional_center_city_id' => 2207,
                ),
            327 =>
                array (
                    'id' => 328,
                    'country_id' => 27,
                    'name_fr' => 'Шаранта',
                    'name_en' => 'Charente',
                    
                    'regional_center_city_id' => 2208,
                ),
            328 =>
                array (
                    'id' => 414,
                    'country_id' => 42,
                    'name_fr' => 'Тель-Авив',
                    'name_en' => 'Tel Aviv',
                    
                    'regional_center_city_id' => 2574,
                ),
            329 =>
                array (
                    'id' => 329,
                    'country_id' => 27,
                    'name_fr' => 'Шаранта Приморская',
                    'name_en' => 'Charente-Maritime',
                    
                    'regional_center_city_id' => 2209,
                ),
            330 =>
                array (
                    'id' => 330,
                    'country_id' => 27,
                    'name_fr' => 'Шер',
                    'name_en' => 'Cher',
                    
                    'regional_center_city_id' => 2210,
                ),
            331 =>
                array (
                    'id' => 331,
                    'country_id' => 27,
                    'name_fr' => 'Эна',
                    'name_en' => 'Aisne',
                    
                    'regional_center_city_id' => NULL,
                ),
            332 =>
                array (
                    'id' => 332,
                    'country_id' => 27,
                    'name_fr' => 'Эндр',
                    'name_en' => 'Indre',
                    
                    'regional_center_city_id' => NULL,
                ),
            333 =>
                array (
                    'id' => 333,
                    'country_id' => 27,
                    'name_fr' => 'Эндр и Луара',
                    'name_en' => 'Indre-et-Loire',
                    
                    'regional_center_city_id' => NULL,
                ),
            334 =>
                array (
                    'id' => 334,
                    'country_id' => 27,
                    'name_fr' => 'Эр',
                    'name_en' => 'Ayr',
                    
                    'regional_center_city_id' => NULL,
                ),
            335 =>
                array (
                    'id' => 335,
                    'country_id' => 27,
                    'name_fr' => 'Эро',
                    'name_en' => 'Herault',
                    
                    'regional_center_city_id' => NULL,
                ),
            336 =>
                array (
                    'id' => 336,
                    'country_id' => 27,
                    'name_fr' => 'Эссонн',
                    'name_en' => 'Essonne',
                    
                    'regional_center_city_id' => NULL,
                ),
            337 =>
                array (
                    'id' => 337,
                    'country_id' => 27,
                    'name_fr' => 'Франция',
                    'name_en' => 'France',
                    
                    'regional_center_city_id' => NULL,
                ),
            338 =>
                array (
                    'id' => 338,
                    'country_id' => 28,
                    'name_fr' => 'Южночешский край',
                    'name_en' => 'Jihochesky',
                    
                    'regional_center_city_id' => NULL,
                ),
            339 =>
                array (
                    'id' => 339,
                    'country_id' => 28,
                    'name_fr' => 'Южноморавский край',
                    'name_en' => 'Jihomoravsky',
                    
                    'regional_center_city_id' => NULL,
                ),
            340 =>
                array (
                    'id' => 340,
                    'country_id' => 28,
                    'name_fr' => 'Карловарский край',
                    'name_en' => 'Karlovarsky',
                    
                    'regional_center_city_id' => NULL,
                ),
            341 =>
                array (
                    'id' => 341,
                    'country_id' => 28,
                    'name_fr' => 'Краловеградецкий край',
                    'name_en' => 'Kralovehradecky',
                    
                    'regional_center_city_id' => NULL,
                ),
            342 =>
                array (
                    'id' => 342,
                    'country_id' => 28,
                    'name_fr' => 'Либерецкий край',
                    'name_en' => 'Liberecky',
                    
                    'regional_center_city_id' => NULL,
                ),
            343 =>
                array (
                    'id' => 343,
                    'country_id' => 28,
                    'name_fr' => 'Моравскосилезский край',
                    'name_en' => 'Moravskoslezsky',
                    
                    'regional_center_city_id' => NULL,
                ),
            344 =>
                array (
                    'id' => 344,
                    'country_id' => 28,
                    'name_fr' => 'Оломоуцкий край',
                    'name_en' => 'Olomoucky',
                    
                    'regional_center_city_id' => NULL,
                ),
            345 =>
                array (
                    'id' => 345,
                    'country_id' => 28,
                    'name_fr' => 'Среднечешский край',
                    'name_en' => 'Stredochesky',
                    
                    'regional_center_city_id' => NULL,
                ),
            346 =>
                array (
                    'id' => 346,
                    'country_id' => 28,
                    'name_fr' => 'Устецкий край',
                    'name_en' => 'Ustecky',
                    
                    'regional_center_city_id' => NULL,
                ),
            347 =>
                array (
                    'id' => 347,
                    'country_id' => 28,
                    'name_fr' => 'Чехия',
                    'name_en' => 'Czech Republic',
                    
                    'regional_center_city_id' => NULL,
                ),
            348 =>
                array (
                    'id' => 348,
                    'country_id' => 29,
                    'name_fr' => 'Аргау',
                    'name_en' => 'Aargau',
                    
                    'regional_center_city_id' => NULL,
                ),
            349 =>
                array (
                    'id' => 349,
                    'country_id' => 29,
                    'name_fr' => 'Базель-Штадт',
                    'name_en' => 'Basel-Stadt',
                    
                    'regional_center_city_id' => NULL,
                ),
            350 =>
                array (
                    'id' => 350,
                    'country_id' => 29,
                    'name_fr' => 'Берн',
                    'name_en' => 'Berne',
                    
                    'regional_center_city_id' => NULL,
                ),
            351 =>
                array (
                    'id' => 351,
                    'country_id' => 29,
                    'name_fr' => 'Во',
                    'name_en' => 'Vaud',
                    
                    'regional_center_city_id' => NULL,
                ),
            352 =>
                array (
                    'id' => 352,
                    'country_id' => 29,
                    'name_fr' => 'Женева',
                    'name_en' => 'Geneva',
                    
                    'regional_center_city_id' => NULL,
                ),
            353 =>
                array (
                    'id' => 353,
                    'country_id' => 29,
                    'name_fr' => 'Золотурн',
                    'name_en' => 'Solothurn',
                    
                    'regional_center_city_id' => NULL,
                ),
            354 =>
                array (
                    'id' => 354,
                    'country_id' => 29,
                    'name_fr' => 'Люцерн',
                    'name_en' => 'Lucerne',
                    
                    'regional_center_city_id' => NULL,
                ),
            355 =>
                array (
                    'id' => 355,
                    'country_id' => 29,
                    'name_fr' => 'Невшатель',
                    'name_en' => 'Neuchatel',
                    
                    'regional_center_city_id' => NULL,
                ),
            356 =>
                array (
                    'id' => 356,
                    'country_id' => 29,
                    'name_fr' => 'Тичино',
                    'name_en' => 'Ticino',
                    
                    'regional_center_city_id' => NULL,
                ),
            357 =>
                array (
                    'id' => 357,
                    'country_id' => 29,
                    'name_fr' => 'Фрибур',
                    'name_en' => 'Fribourg',
                    
                    'regional_center_city_id' => NULL,
                ),
            358 =>
                array (
                    'id' => 358,
                    'country_id' => 29,
                    'name_fr' => 'Цюрих',
                    'name_en' => 'Zurich',
                    
                    'regional_center_city_id' => NULL,
                ),
            359 =>
                array (
                    'id' => 359,
                    'country_id' => 29,
                    'name_fr' => 'Швейцария',
                    'name_en' => 'Switzerland',
                    
                    'regional_center_city_id' => NULL,
                ),
            360 =>
                array (
                    'id' => 360,
                    'country_id' => 30,
                    'name_fr' => 'Сконе',
                    'name_en' => 'Skane',
                    
                    'regional_center_city_id' => NULL,
                ),
            361 =>
                array (
                    'id' => 361,
                    'country_id' => 30,
                    'name_fr' => 'Вестра-Гёталанд',
                    'name_en' => 'Vastra Gotaland',
                    
                    'regional_center_city_id' => NULL,
                ),
            362 =>
                array (
                    'id' => 362,
                    'country_id' => 30,
                    'name_fr' => 'Вермланд',
                    'name_en' => 'Värmland',
                    
                    'regional_center_city_id' => NULL,
                ),
            363 =>
                array (
                    'id' => 363,
                    'country_id' => 30,
                    'name_fr' => 'Вестерботтен',
                    'name_en' => 'Västerbotten',
                    
                    'regional_center_city_id' => NULL,
                ),
            364 =>
                array (
                    'id' => 364,
                    'country_id' => 30,
                    'name_fr' => 'Вестернорланд',
                    'name_en' => 'Vesternorland',
                    
                    'regional_center_city_id' => NULL,
                ),
            365 =>
                array (
                    'id' => 365,
                    'country_id' => 30,
                    'name_fr' => 'Вестманланд',
                    'name_en' => 'Västmanland',
                    
                    'regional_center_city_id' => NULL,
                ),
            366 =>
                array (
                    'id' => 366,
                    'country_id' => 30,
                    'name_fr' => 'Евлеборг',
                    'name_en' => 'Gävleborg',
                    
                    'regional_center_city_id' => NULL,
                ),
            367 =>
                array (
                    'id' => 367,
                    'country_id' => 30,
                    'name_fr' => 'Емтланд',
                    'name_en' => 'Jämtland',
                    
                    'regional_center_city_id' => NULL,
                ),
            368 =>
                array (
                    'id' => 368,
                    'country_id' => 30,
                    'name_fr' => 'Йёнчёпинг',
                    'name_en' => 'Jonkoping',
                    
                    'regional_center_city_id' => NULL,
                ),
            369 =>
                array (
                    'id' => 369,
                    'country_id' => 30,
                    'name_fr' => 'Сёдерманланд',
                    'name_en' => 'Södermanland',
                    
                    'regional_center_city_id' => NULL,
                ),
            370 =>
                array (
                    'id' => 370,
                    'country_id' => 30,
                    'name_fr' => 'Стокгольм',
                    'name_en' => 'Stockholm',
                    
                    'regional_center_city_id' => NULL,
                ),
            371 =>
                array (
                    'id' => 371,
                    'country_id' => 30,
                    'name_fr' => 'Упсала',
                    'name_en' => 'Uppsala',
                    
                    'regional_center_city_id' => NULL,
                ),
            372 =>
                array (
                    'id' => 372,
                    'country_id' => 30,
                    'name_fr' => 'Халланд',
                    'name_en' => 'Halland',
                    
                    'regional_center_city_id' => NULL,
                ),
            373 =>
                array (
                    'id' => 373,
                    'country_id' => 30,
                    'name_fr' => 'Эстерйетланд',
                    'name_en' => 'Esteryetland',
                    
                    'regional_center_city_id' => NULL,
                ),
            374 =>
                array (
                    'id' => 374,
                    'country_id' => 30,
                    'name_fr' => 'Швеция',
                    'name_en' => 'Sweden',
                    
                    'regional_center_city_id' => NULL,
                ),
            375 =>
                array (
                    'id' => 375,
                    'country_id' => 30,
                    'name_fr' => 'Норрботтен',
                    'name_en' => 'Norrbotten',
                    
                    'regional_center_city_id' => NULL,
                ),
            376 =>
                array (
                    'id' => 376,
                    'country_id' => 31,
                    'name_fr' => 'Эстония',
                    'name_en' => 'Estonia',
                    
                    'regional_center_city_id' => NULL,
                ),
            377 =>
                array (
                    'id' => 377,
                    'country_id' => 32,
                    'name_fr' => 'Воеводина',
                    'name_en' => 'Vojvodina',
                    
                    'regional_center_city_id' => NULL,
                ),
            378 =>
                array (
                    'id' => 378,
                    'country_id' => 32,
                    'name_fr' => 'Косово',
                    'name_en' => 'Kosovo',
                    
                    'regional_center_city_id' => NULL,
                ),
            379 =>
                array (
                    'id' => 379,
                    'country_id' => 32,
                    'name_fr' => 'Сербия',
                    'name_en' => 'Serbia',
                    
                    'regional_center_city_id' => NULL,
                ),
            380 =>
                array (
                    'id' => 380,
                    'country_id' => 32,
                    'name_fr' => 'Югославия',
                    'name_en' => 'Yugoslavia',
                    
                    'regional_center_city_id' => NULL,
                ),
            381 =>
                array (
                    'id' => 381,
                    'country_id' => 33,
                    'name_fr' => 'Гелдерланд',
                    'name_en' => 'Gelderland',
                    
                    'regional_center_city_id' => 2356,
                ),
            382 =>
                array (
                    'id' => 382,
                    'country_id' => 33,
                    'name_fr' => 'Гронинген',
                    'name_en' => 'Groningen',
                    
                    'regional_center_city_id' => 2357,
                ),
            383 =>
                array (
                    'id' => 383,
                    'country_id' => 33,
                    'name_fr' => 'Дренте',
                    'name_en' => 'Drenthe',
                    
                    'regional_center_city_id' => 2359,
                ),
            384 =>
                array (
                    'id' => 384,
                    'country_id' => 33,
                    'name_fr' => 'Лимбург',
                    'name_en' => 'Limburg',
                    
                    'regional_center_city_id' => NULL,
                ),
            385 =>
                array (
                    'id' => 385,
                    'country_id' => 33,
                    'name_fr' => 'Оверэйсел',
                    'name_en' => 'Overijssel',
                    
                    'regional_center_city_id' => 2367,
                ),
            386 =>
                array (
                    'id' => 386,
                    'country_id' => 33,
                    'name_fr' => 'Северная Голландия',
                    'name_en' => 'North Holland',
                    
                    'regional_center_city_id' => 2374,
                ),
            387 =>
                array (
                    'id' => 387,
                    'country_id' => 33,
                    'name_fr' => 'Северный Брабант',
                    'name_en' => 'North Brabant',
                    
                    'regional_center_city_id' => 2379,
                ),
            388 =>
                array (
                    'id' => 388,
                    'country_id' => 33,
                    'name_fr' => 'Утрехт',
                    'name_en' => 'Utrecht',
                    
                    'regional_center_city_id' => NULL,
                ),
            389 =>
                array (
                    'id' => 389,
                    'country_id' => 33,
                    'name_fr' => 'Фрисландия',
                    'name_en' => 'Friesland',
                    
                    'regional_center_city_id' => 2384,
                ),
            390 =>
                array (
                    'id' => 390,
                    'country_id' => 33,
                    'name_fr' => 'Южная Голландия',
                    'name_en' => 'South Holland',
                    
                    'regional_center_city_id' => NULL,
                ),
            391 =>
                array (
                    'id' => 391,
                    'country_id' => 34,
                    'name_fr' => 'Хорватия',
                    'name_en' => 'Croatia',
                    
                    'regional_center_city_id' => NULL,
                ),
            392 =>
                array (
                    'id' => 392,
                    'country_id' => 35,
                    'name_fr' => 'Румыния',
                    'name_en' => 'Romania',
                    
                    'regional_center_city_id' => NULL,
                ),
            393 =>
                array (
                    'id' => 393,
                    'country_id' => 35,
                    'name_fr' => 'Западный',
                    'name_en' => 'West',
                    
                    'regional_center_city_id' => NULL,
                ),
            394 =>
                array (
                    'id' => 394,
                    'country_id' => 35,
                    'name_fr' => 'Юго-западный',
                    'name_en' => 'Southwestern',
                    
                    'regional_center_city_id' => NULL,
                ),
            395 =>
                array (
                    'id' => 395,
                    'country_id' => 35,
                    'name_fr' => 'Бухарестский',
                    'name_en' => 'Bucharest',
                    
                    'regional_center_city_id' => NULL,
                ),
            396 =>
                array (
                    'id' => 396,
                    'country_id' => 35,
                    'name_fr' => 'Северо-западный',
                    'name_en' => 'Northwestern',
                    
                    'regional_center_city_id' => NULL,
                ),
            397 =>
                array (
                    'id' => 397,
                    'country_id' => 36,
                    'name_fr' => 'Скопье',
                    'name_en' => 'Skopje',
                    
                    'regional_center_city_id' => NULL,
                ),
            398 =>
                array (
                    'id' => 398,
                    'country_id' => 37,
                    'name_fr' => 'Мальта',
                    'name_en' => 'Malta',
                    
                    'regional_center_city_id' => NULL,
                ),
            399 =>
                array (
                    'id' => 399,
                    'country_id' => 38,
                    'name_fr' => 'Азербайджан',
                    'name_en' => 'Azerbaijan',
                    
                    'regional_center_city_id' => 2441,
                ),
            400 =>
                array (
                    'id' => 400,
                    'country_id' => 38,
                    'name_fr' => 'Нахичеванская область',
                    'name_en' => 'Nahcivan',
                    
                    'regional_center_city_id' => 2514,
                ),
            401 =>
                array (
                    'id' => 401,
                    'country_id' => 38,
                    'name_fr' => 'Бардинский район',
                    'name_en' => 'Barda district',
                    
                    'regional_center_city_id' => 2517,
                ),
            402 =>
                array (
                    'id' => 402,
                    'country_id' => 38,
                    'name_fr' => 'Бардинский район',
                    'name_en' => 'Barda district',
                    
                    'regional_center_city_id' => NULL,
                ),
            403 =>
                array (
                    'id' => 403,
                    'country_id' => 39,
                    'name_fr' => 'Ереванская область',
                    'name_en' => 'Yerevan region',
                    
                    'regional_center_city_id' => 2518,
                ),
            404 =>
                array (
                    'id' => 404,
                    'country_id' => 39,
                    'name_fr' => 'Армения',
                    'name_en' => 'Armenia',
                    
                    'regional_center_city_id' => NULL,
                ),
            405 =>
                array (
                    'id' => 405,
                    'country_id' => 40,
                    'name_fr' => 'Де́льта Меко́нга',
                    'name_en' => 'Dong Bang Song Cuu Long',
                    
                    'regional_center_city_id' => 2524,
                ),
            406 =>
                array (
                    'id' => 406,
                    'country_id' => 40,
                    'name_fr' => 'Дельта Хонгхи',
                    'name_en' => 'Dong Bang Song Hong',
                    
                    'regional_center_city_id' => 2528,
                ),
            407 =>
                array (
                    'id' => 407,
                    'country_id' => 40,
                    'name_fr' => 'Юго-Восточный',
                    'name_en' => 'Dong Nam Bo',
                    
                    'regional_center_city_id' => 2531,
                ),
            408 =>
                array (
                    'id' => 408,
                    'country_id' => 40,
                    'name_fr' => 'Центральный Вьетнам',
                    'name_en' => 'Duyen Hai Mien Trung',
                    
                    'regional_center_city_id' => 2536,
                ),
            409 =>
                array (
                    'id' => 409,
                    'country_id' => 40,
                    'name_fr' => 'Тэйнгуе́н',
                    'name_en' => 'Thai Nguyen',
                    
                    'regional_center_city_id' => NULL,
                ),
            410 =>
                array (
                    'id' => 410,
                    'country_id' => 41,
                    'name_fr' => 'Автономная Республика Абхазия',
                    'name_en' => 'Autonomous Republic of Abkhazia',
                    
                    'regional_center_city_id' => 2547,
                ),
            411 =>
                array (
                    'id' => 411,
                    'country_id' => 41,
                    'name_fr' => 'Аджария',
                    'name_en' => 'Adjara',
                    
                    'regional_center_city_id' => 2549,
                ),
            412 =>
                array (
                    'id' => 412,
                    'country_id' => 41,
                    'name_fr' => 'Южная Осетия',
                    'name_en' => 'South Ossetia',
                    
                    'regional_center_city_id' => 2553,
                ),
            413 =>
                array (
                    'id' => 413,
                    'country_id' => 42,
                    'name_fr' => 'Центральный округ',
                    'name_en' => 'Central District',
                    
                    'regional_center_city_id' => 2561,
                ),
            414 =>
                array (
                    'id' => 415,
                    'country_id' => 42,
                    'name_fr' => 'Иерусалим',
                    'name_en' => 'Jerusalem',
                    
                    'regional_center_city_id' => 2576,
                ),
            415 =>
                array (
                    'id' => 416,
                    'country_id' => 42,
                    'name_fr' => 'Иудея и Самария',
                    'name_en' => 'Judea and Samaria',
                    
                    'regional_center_city_id' => 2578,
                ),
            416 =>
                array (
                    'id' => 417,
                    'country_id' => 42,
                    'name_fr' => 'Северный',
                    'name_en' => 'Northern',
                    
                    'regional_center_city_id' => NULL,
                ),
            417 =>
                array (
                    'id' => 418,
                    'country_id' => 42,
                    'name_fr' => 'Хайфский',
                    'name_en' => 'Haifa',
                    
                    'regional_center_city_id' => NULL,
                ),
            418 =>
                array (
                    'id' => 419,
                    'country_id' => 43,
                    'name_fr' => 'За́падная Бенга́лия',
                    'name_en' => 'West Bengal',
                    
                    'regional_center_city_id' => 2594,
                ),
            419 =>
                array (
                    'id' => 420,
                    'country_id' => 43,
                    'name_fr' => 'Чхаттисга́рх',
                    'name_en' => 'Chhattisgarh',
                    
                    'regional_center_city_id' => NULL,
                ),
            420 =>
                array (
                    'id' => 421,
                    'country_id' => 43,
                    'name_fr' => 'Карна́така',
                    'name_en' => 'Karnataka',
                    
                    'regional_center_city_id' => NULL,
                ),
            421 =>
                array (
                    'id' => 422,
                    'country_id' => 43,
                    'name_fr' => 'Уттаракха́нд',
                    'name_en' => 'Uttaranchal',
                    
                    'regional_center_city_id' => 2614,
                ),
            422 =>
                array (
                    'id' => 423,
                    'country_id' => 43,
                    'name_fr' => 'Андхра-Прадеш',
                    'name_en' => 'Andhra Pradesh',
                    
                    'regional_center_city_id' => NULL,
                ),
            423 =>
                array (
                    'id' => 424,
                    'country_id' => 43,
                    'name_fr' => 'Ассам',
                    'name_en' => 'Assam',
                    
                    'regional_center_city_id' => 2635,
                ),
            424 =>
                array (
                    'id' => 425,
                    'country_id' => 43,
                    'name_fr' => 'Бихар',
                    'name_en' => 'Bihar',
                    
                    'regional_center_city_id' => 2643,
                ),
            425 =>
                array (
                    'id' => 426,
                    'country_id' => 43,
                    'name_fr' => 'Гуджарат',
                    'name_en' => 'Гуджарат',
                    
                    'regional_center_city_id' => NULL,
                ),
            426 =>
                array (
                    'id' => 427,
                    'country_id' => 43,
                    'name_fr' => 'Джамму и Кашмир',
                    'name_en' => 'Jammu and Kashmir',
                    
                    'regional_center_city_id' => NULL,
                ),
            427 =>
                array (
                    'id' => 428,
                    'country_id' => 43,
                    'name_fr' => 'Керала',
                    'name_en' => 'Kerala',
                    
                    'regional_center_city_id' => NULL,
                ),
            428 =>
                array (
                    'id' => 429,
                    'country_id' => 43,
                    'name_fr' => 'Мадхья-Прадеш',
                    'name_en' => 'Madhya Pradesh',
                    
                    'regional_center_city_id' => 2670,
                ),
            429 =>
                array (
                    'id' => 430,
                    'country_id' => 43,
                    'name_fr' => 'Манипур',
                    'name_en' => 'Manipur',
                    
                    'regional_center_city_id' => 2681,
                ),
            430 =>
                array (
                    'id' => 431,
                    'country_id' => 43,
                    'name_fr' => 'Махараштра',
                    'name_en' => 'Maharashtra',
                    
                    'regional_center_city_id' => 2704,
                ),
            431 =>
                array (
                    'id' => 432,
                    'country_id' => 43,
                    'name_fr' => 'Мегхалая',
                    'name_en' => 'Meghalaya',
                    
                    'regional_center_city_id' => 2705,
                ),
            432 =>
                array (
                    'id' => 433,
                    'country_id' => 43,
                    'name_fr' => 'Орисса',
                    'name_en' => 'Orissa',
                    
                    'regional_center_city_id' => 2708,
                ),
            433 =>
                array (
                    'id' => 434,
                    'country_id' => 43,
                    'name_fr' => 'Пенджаб',
                    'name_en' => 'Punjab',
                    
                    'regional_center_city_id' => NULL,
                ),
            434 =>
                array (
                    'id' => 435,
                    'country_id' => 43,
                    'name_fr' => 'Пондишери',
                    'name_en' => 'Pondicherry',
                    
                    'regional_center_city_id' => 2713,
                ),
            435 =>
                array (
                    'id' => 436,
                    'country_id' => 43,
                    'name_fr' => 'Раджастхан',
                    'name_en' => 'Rajasthan',
                    
                    'regional_center_city_id' => 2727,
                ),
            436 =>
                array (
                    'id' => 437,
                    'country_id' => 43,
                    'name_fr' => 'Тамилнад',
                    'name_en' => 'Tamil Nadu',
                    
                    'regional_center_city_id' => 2744,
                ),
            437 =>
                array (
                    'id' => 438,
                    'country_id' => 43,
                    'name_fr' => 'Трипура',
                    'name_en' => 'Tripura',
                    
                    'regional_center_city_id' => 2745,
                ),
            438 =>
                array (
                    'id' => 439,
                    'country_id' => 43,
                    'name_fr' => 'Уттар-Прадеш',
                    'name_en' => 'Uttar Pradesh',
                    
                    'regional_center_city_id' => 2770,
                ),
            439 =>
                array (
                    'id' => 440,
                    'country_id' => 43,
                    'name_fr' => 'Харьяна',
                    'name_en' => 'Haryana',
                    
                    'regional_center_city_id' => NULL,
                ),
            440 =>
                array (
                    'id' => 441,
                    'country_id' => 43,
                    'name_fr' => 'Чандигарх',
                    'name_en' => 'Chandigarh',
                    
                    'regional_center_city_id' => 2775,
                ),
            441 =>
                array (
                    'id' => 442,
                    'country_id' => 43,
                    'name_fr' => 'Индия',
                    'name_en' => 'India',
                    
                    'regional_center_city_id' => NULL,
                ),
            442 =>
                array (
                    'id' => 443,
                    'country_id' => 44,
                    'name_fr' => 'Восто́чный Азербайджа́н',
                    'name_en' => 'Azarbayjan-e Sarqi',
                    
                    'regional_center_city_id' => 2784,
                ),
            443 =>
                array (
                    'id' => 444,
                    'country_id' => 44,
                    'name_fr' => 'Исфахан',
                    'name_en' => 'Esfahan',
                    
                    'regional_center_city_id' => 2786,
                ),
            444 =>
                array (
                    'id' => 445,
                    'country_id' => 44,
                    'name_fr' => 'Хамада́н',
                    'name_en' => 'Hamadan',
                    
                    'regional_center_city_id' => 2787,
                ),
            445 =>
                array (
                    'id' => 446,
                    'country_id' => 44,
                    'name_fr' => 'Курдиста́н',
                    'name_en' => 'Kordestan',
                    
                    'regional_center_city_id' => 2789,
                ),
            446 =>
                array (
                    'id' => 447,
                    'country_id' => 44,
                    'name_fr' => 'Систа́н и Белуджиста́н',
                    'name_en' => 'Sistan-e Baluches',
                    
                    'regional_center_city_id' => 2790,
                ),
            447 =>
                array (
                    'id' => 448,
                    'country_id' => 44,
                    'name_fr' => 'Йезд',
                    'name_en' => 'Yazd',
                    
                    'regional_center_city_id' => 2792,
                ),
            448 =>
                array (
                    'id' => 449,
                    'country_id' => 44,
                    'name_fr' => 'Керман',
                    'name_en' => 'Kerman',
                    
                    'regional_center_city_id' => 2793,
                ),
            449 =>
                array (
                    'id' => 450,
                    'country_id' => 44,
                    'name_fr' => 'Керманшахан',
                    'name_en' => 'Kermanshahan',
                    
                    'regional_center_city_id' => 2794,
                ),
            450 =>
                array (
                    'id' => 451,
                    'country_id' => 44,
                    'name_fr' => 'Мазендеран',
                    'name_en' => 'Mazandaran',
                    
                    'regional_center_city_id' => 2796,
                ),
            451 =>
                array (
                    'id' => 452,
                    'country_id' => 44,
                    'name_fr' => 'Тегеран',
                    'name_en' => 'Tehran',
                    
                    'regional_center_city_id' => 2797,
                ),
            452 =>
                array (
                    'id' => 453,
                    'country_id' => 44,
                    'name_fr' => 'Фарс',
                    'name_en' => 'Fārs',
                    
                    'regional_center_city_id' => 2799,
                ),
            453 =>
                array (
                    'id' => 454,
                    'country_id' => 44,
                    'name_fr' => 'Хузистан',
                    'name_en' => 'Xuzestân',
                    
                    'regional_center_city_id' => 2800,
                ),
            454 =>
                array (
                    'id' => 455,
                    'country_id' => 45,
                    'name_fr' => 'Актюбинская область',
                    'name_en' => 'Aktobe region',
                    
                    'regional_center_city_id' => 2802,
                ),
            455 =>
                array (
                    'id' => 456,
                    'country_id' => 45,
                    'name_fr' => 'Алматинская область',
                    'name_en' => 'Almaty region',
                    
                    'regional_center_city_id' => NULL,
                ),
            456 =>
                array (
                    'id' => 457,
                    'country_id' => 45,
                    'name_fr' => 'Восточно-Казахстанская область',
                    'name_en' => 'East Kazakhstan region',
                    
                    'regional_center_city_id' => 2922,
                ),
            457 =>
                array (
                    'id' => 458,
                    'country_id' => 45,
                    'name_fr' => 'Атырауская область',
                    'name_en' => 'Atyrau region',
                    
                    'regional_center_city_id' => 2968,
                ),
            458 =>
                array (
                    'id' => 459,
                    'country_id' => 45,
                    'name_fr' => 'Жамбылская область',
                    'name_en' => 'Zhambyl region',
                    
                    'regional_center_city_id' => 3010,
                ),
            459 =>
                array (
                    'id' => 460,
                    'country_id' => 45,
                    'name_fr' => 'Карагандинская область',
                    'name_en' => 'Karagandy region',
                    
                    'regional_center_city_id' => 3041,
                ),
            460 =>
                array (
                    'id' => 461,
                    'country_id' => 45,
                    'name_fr' => 'Кызылординская область',
                    'name_en' => 'Kyzylorda region',
                    
                    'regional_center_city_id' => 3068,
                ),
            461 =>
                array (
                    'id' => 462,
                    'country_id' => 45,
                    'name_fr' => 'Костанайская область',
                    'name_en' => 'Kostanai region',
                    
                    'regional_center_city_id' => 3090,
                ),
            462 =>
                array (
                    'id' => 463,
                    'country_id' => 45,
                    'name_fr' => 'Мангистауская область',
                    'name_en' => 'Mangystau region',
                    
                    'regional_center_city_id' => 3132,
                ),
            463 =>
                array (
                    'id' => 464,
                    'country_id' => 45,
                    'name_fr' => 'Павлодарская область',
                    'name_en' => 'Pavlodar region',
                    
                    'regional_center_city_id' => 3153,
                ),
            464 =>
                array (
                    'id' => 465,
                    'country_id' => 45,
                    'name_fr' => 'Северо-Казахстанская область',
                    'name_en' => 'North Kazakhstan region',
                    
                    'regional_center_city_id' => 3184,
                ),
            465 =>
                array (
                    'id' => 466,
                    'country_id' => 45,
                    'name_fr' => 'Южно-Казахстанская область',
                    'name_en' => 'South Kazakhstan region',
                    
                    'regional_center_city_id' => 3214,
                ),
            466 =>
                array (
                    'id' => 467,
                    'country_id' => 45,
                    'name_fr' => 'Западно-Казахстанская область',
                    'name_en' => 'West Kazakhstan region',
                    
                    'regional_center_city_id' => 3241,
                ),
            467 =>
                array (
                    'id' => 468,
                    'country_id' => 45,
                    'name_fr' => 'Акмолинская область',
                    'name_en' => 'Akmola region',
                    
                    'regional_center_city_id' => NULL,
                ),
            468 =>
                array (
                    'id' => 469,
                    'country_id' => 45,
                    'name_fr' => 'Астана',
                    'name_en' => 'Astana',
                    
                    'regional_center_city_id' => 3321,
                ),
            469 =>
                array (
                    'id' => 470,
                    'country_id' => 45,
                    'name_fr' => 'Алматы',
                    'name_en' => 'Almaty',
                    
                    'regional_center_city_id' => 3322,
                ),
            470 =>
                array (
                    'id' => 471,
                    'country_id' => 46,
                    'name_fr' => 'Иссык-Кульская область',
                    'name_en' => 'Issyk-Kul region',
                    
                    'regional_center_city_id' => 3335,
                ),
            471 =>
                array (
                    'id' => 472,
                    'country_id' => 46,
                    'name_fr' => 'Нарынская область',
                    'name_en' => 'Naryn region',
                    
                    'regional_center_city_id' => 3342,
                ),
            472 =>
                array (
                    'id' => 473,
                    'country_id' => 46,
                    'name_fr' => 'Ошская область',
                    'name_en' => 'Osh region',
                    
                    'regional_center_city_id' => 3364,
                ),
            473 =>
                array (
                    'id' => 474,
                    'country_id' => 46,
                    'name_fr' => 'Таласская область',
                    'name_en' => 'Talas region',
                    
                    'regional_center_city_id' => 3377,
                ),
            474 =>
                array (
                    'id' => 475,
                    'country_id' => 46,
                    'name_fr' => 'Бишкек',
                    'name_en' => 'Bishkek',
                    
                    'regional_center_city_id' => 3380,
                ),
            475 =>
                array (
                    'id' => 476,
                    'country_id' => 47,
                    'name_fr' => 'Синьцзян-Уйгурский автономный район',
                    'name_en' => 'Xinjiang',
                    
                    'regional_center_city_id' => 3382,
                ),
            476 =>
                array (
                    'id' => 477,
                    'country_id' => 47,
                    'name_fr' => 'Внутренняя Монголия',
                    'name_en' => 'Inner Mongolia',
                    
                    'regional_center_city_id' => 3387,
                ),
            477 =>
                array (
                    'id' => 478,
                    'country_id' => 47,
                    'name_fr' => 'Ганьсу',
                    'name_en' => 'Gansu',
                    
                    'regional_center_city_id' => 3388,
                ),
            478 =>
                array (
                    'id' => 479,
                    'country_id' => 47,
                    'name_fr' => 'Гуанси',
                    'name_en' => 'Guangxi',
                    
                    'regional_center_city_id' => 3391,
                ),
            479 =>
                array (
                    'id' => 480,
                    'country_id' => 47,
                    'name_fr' => 'Ляонин',
                    'name_en' => 'Liaoning',
                    
                    'regional_center_city_id' => 3395,
                ),
            480 =>
                array (
                    'id' => 481,
                    'country_id' => 47,
                    'name_fr' => 'Сычуань',
                    'name_en' => 'Sichuan',
                    
                    'regional_center_city_id' => 3398,
                ),
            481 =>
                array (
                    'id' => 482,
                    'country_id' => 47,
                    'name_fr' => 'Фуцзянь',
                    'name_en' => 'Fujian',
                    
                    'regional_center_city_id' => 3400,
                ),
            482 =>
                array (
                    'id' => 483,
                    'country_id' => 47,
                    'name_fr' => 'Хубэй',
                    'name_en' => 'Hubei',
                    
                    'regional_center_city_id' => 3401,
                ),
            483 =>
                array (
                    'id' => 484,
                    'country_id' => 47,
                    'name_fr' => 'Хунань',
                    'name_en' => 'Hunan',
                    
                    'regional_center_city_id' => 3404,
                ),
            484 =>
                array (
                    'id' => 485,
                    'country_id' => 47,
                    'name_fr' => 'Хэбэй',
                    'name_en' => 'Hebei',
                    
                    'regional_center_city_id' => 3406,
                ),
            485 =>
                array (
                    'id' => 486,
                    'country_id' => 47,
                    'name_fr' => 'Хэйлунцзян',
                    'name_en' => 'Heilongjiang',
                    
                    'regional_center_city_id' => 3407,
                ),
            486 =>
                array (
                    'id' => 487,
                    'country_id' => 47,
                    'name_fr' => 'Хэнань',
                    'name_en' => 'Хэнань',
                    
                    'regional_center_city_id' => 3410,
                ),
            487 =>
                array (
                    'id' => 488,
                    'country_id' => 47,
                    'name_fr' => 'Цзилинь',
                    'name_en' => 'Jilin',
                    
                    'regional_center_city_id' => 3413,
                ),
            488 =>
                array (
                    'id' => 489,
                    'country_id' => 47,
                    'name_fr' => 'Цзянси',
                    'name_en' => 'Jiangxi',
                    
                    'regional_center_city_id' => 3414,
                ),
            489 =>
                array (
                    'id' => 490,
                    'country_id' => 47,
                    'name_fr' => 'Цзянсу',
                    'name_en' => 'Jiangsu',
                    
                    'regional_center_city_id' => 3416,
                ),
            490 =>
                array (
                    'id' => 491,
                    'country_id' => 47,
                    'name_fr' => 'Чжэцзян',
                    'name_en' => 'Чжэцзян',
                    
                    'regional_center_city_id' => 3419,
                ),
            491 =>
                array (
                    'id' => 492,
                    'country_id' => 47,
                    'name_fr' => 'Шанхай',
                    'name_en' => 'Shanghai',
                    
                    'regional_center_city_id' => 3421,
                ),
            492 =>
                array (
                    'id' => 493,
                    'country_id' => 47,
                    'name_fr' => 'Шаньдун',
                    'name_en' => 'Shandong',
                    
                    'regional_center_city_id' => 3424,
                ),
            493 =>
                array (
                    'id' => 494,
                    'country_id' => 47,
                    'name_fr' => 'Шаньси',
                    'name_en' => 'Shanxi',
                    
                    'regional_center_city_id' => 3425,
                ),
            494 =>
                array (
                    'id' => 495,
                    'country_id' => 47,
                    'name_fr' => 'Пекин',
                    'name_en' => 'Beijing',
                    
                    'regional_center_city_id' => NULL,
                ),
            495 =>
                array (
                    'id' => 496,
                    'country_id' => 47,
                    'name_fr' => 'Гуандон',
                    'name_en' => 'Guangdong',
                    
                    'regional_center_city_id' => NULL,
                ),
            496 =>
                array (
                    'id' => 497,
                    'country_id' => 48,
                    'name_fr' => 'Горно-Бадахшанская область',
                    'name_en' => 'Mining-Badakhshan region',
                    
                    'regional_center_city_id' => 3438,
                ),
            497 =>
                array (
                    'id' => 498,
                    'country_id' => 48,
                    'name_fr' => 'Согдийская область',
                    'name_en' => 'Sughd region',
                    
                    'regional_center_city_id' => 3461,
                ),
            498 =>
                array (
                    'id' => 499,
                    'country_id' => 49,
                    'name_fr' => 'Ахалский велаят',
                    'name_en' => 'Ahal velayat',
                    
                    'regional_center_city_id' => 3478,
                ),
            499 =>
                array (
                    'id' => 500,
                    'country_id' => 49,
                    'name_fr' => 'Балканский велаят',
                    'name_en' => 'Balkan velayat',
                    
                    'regional_center_city_id' => 3489,
                ),
        )));

        \DB::table('regions')->insert(translate_seed_array(array (
            0 =>
                array (
                    'id' => 501,
                    'country_id' => 49,
                    'name_fr' => 'Дашогузский велаят',
                    'name_en' => 'Dashoguz',
                    
                    'regional_center_city_id' => 3492,
                ),
            1 =>
                array (
                    'id' => 502,
                    'country_id' => 49,
                    'name_fr' => 'Лебапский велаят',
                    'name_en' => 'Lebap province',
                    
                    'regional_center_city_id' => 3508,
                ),
            2 =>
                array (
                    'id' => 503,
                    'country_id' => 49,
                    'name_fr' => 'Марыйский велаят',
                    'name_en' => 'Mary velayat',
                    
                    'regional_center_city_id' => 3509,
                ),
            3 =>
                array (
                    'id' => 504,
                    'country_id' => 50,
                    'name_fr' => 'Андижанская область',
                    'name_en' => 'Andijan region',
                    
                    'regional_center_city_id' => 3511,
                ),
            4 =>
                array (
                    'id' => 505,
                    'country_id' => 50,
                    'name_fr' => 'Бухарская область',
                    'name_en' => 'Bukhara region',
                    
                    'regional_center_city_id' => 3518,
                ),
            5 =>
                array (
                    'id' => 506,
                    'country_id' => 50,
                    'name_fr' => 'Джизакская область',
                    'name_en' => 'Djizzak region',
                    
                    'regional_center_city_id' => 3527,
                ),
            6 =>
                array (
                    'id' => 507,
                    'country_id' => 50,
                    'name_fr' => 'Каракалпакия',
                    'name_en' => 'Karakalpakiya',
                    
                    'regional_center_city_id' => 3536,
                ),
            7 =>
                array (
                    'id' => 508,
                    'country_id' => 50,
                    'name_fr' => 'Кашкадарьинская область',
                    'name_en' => 'Kashkadarya region',
                    
                    'regional_center_city_id' => 3545,
                ),
            8 =>
                array (
                    'id' => 509,
                    'country_id' => 50,
                    'name_fr' => 'Навоийская область',
                    'name_en' => 'Navoi region',
                    
                    'regional_center_city_id' => 3549,
                ),
            9 =>
                array (
                    'id' => 510,
                    'country_id' => 50,
                    'name_fr' => 'Наманганская область',
                    'name_en' => 'Namangan region',
                    
                    'regional_center_city_id' => 3554,
                ),
            10 =>
                array (
                    'id' => 511,
                    'country_id' => 50,
                    'name_fr' => 'Самаркандская область',
                    'name_en' => 'Samarkand region',
                    
                    'regional_center_city_id' => 3564,
                ),
            11 =>
                array (
                    'id' => 512,
                    'country_id' => 50,
                    'name_fr' => 'Сурхандарьинская область',
                    'name_en' => 'Surkhandarya region',
                    
                    'regional_center_city_id' => 3569,
                ),
            12 =>
                array (
                    'id' => 513,
                    'country_id' => 50,
                    'name_fr' => 'Сырдарьинская область',
                    'name_en' => 'Syrdarya region',
                    
                    'regional_center_city_id' => 3575,
                ),
            13 =>
                array (
                    'id' => 514,
                    'country_id' => 50,
                    'name_fr' => 'Ташкентская область',
                    'name_en' => 'Tashkent region',
                    
                    'regional_center_city_id' => 3598,
                ),
            14 =>
                array (
                    'id' => 515,
                    'country_id' => 50,
                    'name_fr' => 'Ферганская область',
                    'name_en' => 'Ferghana region',
                    
                    'regional_center_city_id' => 3613,
                ),
            15 =>
                array (
                    'id' => 516,
                    'country_id' => 50,
                    'name_fr' => 'Хорезмская область',
                    'name_en' => 'Khorezm region',
                    
                    'regional_center_city_id' => 3617,
                ),
            16 =>
                array (
                    'id' => 517,
                    'country_id' => 51,
                    'name_fr' => 'Чеджу',
                    'name_en' => 'Cheju',
                    
                    'regional_center_city_id' => NULL,
                ),
            17 =>
                array (
                    'id' => 518,
                    'country_id' => 51,
                    'name_fr' => 'Чолла-Пукто',
                    'name_en' => 'Chollabuk',
                    
                    'regional_center_city_id' => NULL,
                ),
            18 =>
                array (
                    'id' => 519,
                    'country_id' => 51,
                    'name_fr' => 'Чолла-Намдо',
                    'name_en' => 'Chollanam',
                    
                    'regional_center_city_id' => NULL,
                ),
            19 =>
                array (
                    'id' => 520,
                    'country_id' => 51,
                    'name_fr' => 'Чхунчхон-Пукто',
                    'name_en' => 'Chungcheongbuk',
                    
                    'regional_center_city_id' => NULL,
                ),
            20 =>
                array (
                    'id' => 521,
                    'country_id' => 51,
                    'name_fr' => 'Чхунчхон-Намдо',
                    'name_en' => 'Chungcheongnam',
                    
                    'regional_center_city_id' => NULL,
                ),
            21 =>
                array (
                    'id' => 522,
                    'country_id' => 51,
                    'name_fr' => 'Инчхон',
                    'name_en' => 'Incheon',
                    
                    'regional_center_city_id' => NULL,
                ),
            22 =>
                array (
                    'id' => 523,
                    'country_id' => 51,
                    'name_fr' => 'Канвондо',
                    'name_en' => 'Kangweon',
                    
                    'regional_center_city_id' => NULL,
                ),
            23 =>
                array (
                    'id' => 524,
                    'country_id' => 51,
                    'name_fr' => 'Кванджу',
                    'name_en' => 'Kwangju',
                    
                    'regional_center_city_id' => NULL,
                ),
            24 =>
                array (
                    'id' => 525,
                    'country_id' => 51,
                    'name_fr' => 'Кёнгидо',
                    'name_en' => 'Kyeonggi',
                    
                    'regional_center_city_id' => NULL,
                ),
            25 =>
                array (
                    'id' => 526,
                    'country_id' => 51,
                    'name_fr' => 'Кёнсан-Пукто',
                    'name_en' => 'Kyeongsangbuk',
                    
                    'regional_center_city_id' => NULL,
                ),
            26 =>
                array (
                    'id' => 527,
                    'country_id' => 51,
                    'name_fr' => 'Кёнсан-Намдо',
                    'name_en' => 'Kyeongsangnam',
                    
                    'regional_center_city_id' => NULL,
                ),
            27 =>
                array (
                    'id' => 528,
                    'country_id' => 51,
                    'name_fr' => 'Пусан',
                    'name_en' => 'Pusan',
                    
                    'regional_center_city_id' => NULL,
                ),
            28 =>
                array (
                    'id' => 529,
                    'country_id' => 51,
                    'name_fr' => 'Сеул',
                    'name_en' => 'Seoul',
                    
                    'regional_center_city_id' => NULL,
                ),
            29 =>
                array (
                    'id' => 530,
                    'country_id' => 51,
                    'name_fr' => 'Тэгу',
                    'name_en' => 'Taegu',
                    
                    'regional_center_city_id' => NULL,
                ),
            30 =>
                array (
                    'id' => 531,
                    'country_id' => 51,
                    'name_fr' => 'Тэджон',
                    'name_en' => 'Taejeon',
                    
                    'regional_center_city_id' => NULL,
                ),
            31 =>
                array (
                    'id' => 532,
                    'country_id' => 51,
                    'name_fr' => 'Ульсан',
                    'name_en' => 'Ulsan',
                    
                    'regional_center_city_id' => NULL,
                ),
            32 =>
                array (
                    'id' => 533,
                    'country_id' => 52,
                    'name_fr' => 'Айти',
                    'name_en' => 'Aichi',
                    
                    'regional_center_city_id' => NULL,
                ),
            33 =>
                array (
                    'id' => 534,
                    'country_id' => 52,
                    'name_fr' => 'Акита',
                    'name_en' => 'Akita',
                    
                    'regional_center_city_id' => NULL,
                ),
            34 =>
                array (
                    'id' => 535,
                    'country_id' => 52,
                    'name_fr' => 'Аомори',
                    'name_en' => 'Aomori',
                    
                    'regional_center_city_id' => NULL,
                ),
            35 =>
                array (
                    'id' => 536,
                    'country_id' => 52,
                    'name_fr' => 'Вакаяма',
                    'name_en' => 'Wakayama',
                    
                    'regional_center_city_id' => NULL,
                ),
            36 =>
                array (
                    'id' => 537,
                    'country_id' => 52,
                    'name_fr' => 'Гифу',
                    'name_en' => 'Gifu',
                    
                    'regional_center_city_id' => NULL,
                ),
            37 =>
                array (
                    'id' => 538,
                    'country_id' => 52,
                    'name_fr' => 'Гумма',
                    'name_en' => 'Gunma',
                    
                    'regional_center_city_id' => NULL,
                ),
            38 =>
                array (
                    'id' => 539,
                    'country_id' => 52,
                    'name_fr' => 'Ибараки',
                    'name_en' => 'Ibaraki',
                    
                    'regional_center_city_id' => NULL,
                ),
            39 =>
                array (
                    'id' => 540,
                    'country_id' => 52,
                    'name_fr' => 'Ивате',
                    'name_en' => 'Iwate',
                    
                    'regional_center_city_id' => NULL,
                ),
            40 =>
                array (
                    'id' => 541,
                    'country_id' => 52,
                    'name_fr' => 'Исикава',
                    'name_en' => 'Ishikawa',
                    
                    'regional_center_city_id' => NULL,
                ),
            41 =>
                array (
                    'id' => 542,
                    'country_id' => 52,
                    'name_fr' => 'Кагава',
                    'name_en' => 'Kagawa',
                    
                    'regional_center_city_id' => NULL,
                ),
            42 =>
                array (
                    'id' => 543,
                    'country_id' => 52,
                    'name_fr' => 'Кагосима',
                    'name_en' => 'Kagoshima',
                    
                    'regional_center_city_id' => NULL,
                ),
            43 =>
                array (
                    'id' => 544,
                    'country_id' => 52,
                    'name_fr' => 'Канагава',
                    'name_en' => 'Kanagawa',
                    
                    'regional_center_city_id' => NULL,
                ),
            44 =>
                array (
                    'id' => 545,
                    'country_id' => 52,
                    'name_fr' => 'Киото',
                    'name_en' => 'Kyoto',
                    
                    'regional_center_city_id' => NULL,
                ),
            45 =>
                array (
                    'id' => 546,
                    'country_id' => 52,
                    'name_fr' => 'Коти',
                    'name_en' => 'Kochi',
                    
                    'regional_center_city_id' => NULL,
                ),
            46 =>
                array (
                    'id' => 547,
                    'country_id' => 52,
                    'name_fr' => 'Кумамото',
                    'name_en' => 'Kumamoto',
                    
                    'regional_center_city_id' => NULL,
                ),
            47 =>
                array (
                    'id' => 548,
                    'country_id' => 52,
                    'name_fr' => 'Миэ',
                    'name_en' => 'Mie',
                    
                    'regional_center_city_id' => NULL,
                ),
            48 =>
                array (
                    'id' => 549,
                    'country_id' => 52,
                    'name_fr' => 'Мияги',
                    'name_en' => 'Miyagi',
                    
                    'regional_center_city_id' => NULL,
                ),
            49 =>
                array (
                    'id' => 550,
                    'country_id' => 52,
                    'name_fr' => 'Миядзаки',
                    'name_en' => 'Miyazaki',
                    
                    'regional_center_city_id' => NULL,
                ),
            50 =>
                array (
                    'id' => 551,
                    'country_id' => 52,
                    'name_fr' => 'Нагано',
                    'name_en' => 'Nagano',
                    
                    'regional_center_city_id' => NULL,
                ),
            51 =>
                array (
                    'id' => 552,
                    'country_id' => 52,
                    'name_fr' => 'Нагасаки',
                    'name_en' => 'Nagasaki',
                    
                    'regional_center_city_id' => NULL,
                ),
            52 =>
                array (
                    'id' => 553,
                    'country_id' => 52,
                    'name_fr' => 'Нара',
                    'name_en' => 'Nara',
                    
                    'regional_center_city_id' => NULL,
                ),
            53 =>
                array (
                    'id' => 554,
                    'country_id' => 52,
                    'name_fr' => 'Ниигата',
                    'name_en' => 'Niigata',
                    
                    'regional_center_city_id' => NULL,
                ),
            54 =>
                array (
                    'id' => 555,
                    'country_id' => 52,
                    'name_fr' => 'Окаяма',
                    'name_en' => 'Okayama',
                    
                    'regional_center_city_id' => NULL,
                ),
            55 =>
                array (
                    'id' => 556,
                    'country_id' => 52,
                    'name_fr' => 'Окинава',
                    'name_en' => 'Okinawa',
                    
                    'regional_center_city_id' => NULL,
                ),
            56 =>
                array (
                    'id' => 557,
                    'country_id' => 52,
                    'name_fr' => 'Осака',
                    'name_en' => 'Osaka',
                    
                    'regional_center_city_id' => NULL,
                ),
            57 =>
                array (
                    'id' => 558,
                    'country_id' => 52,
                    'name_fr' => 'Сага',
                    'name_en' => 'Saga',
                    
                    'regional_center_city_id' => NULL,
                ),
            58 =>
                array (
                    'id' => 559,
                    'country_id' => 52,
                    'name_fr' => 'Сайтама',
                    'name_en' => 'Saitama',
                    
                    'regional_center_city_id' => NULL,
                ),
            59 =>
                array (
                    'id' => 560,
                    'country_id' => 52,
                    'name_fr' => 'Сига',
                    'name_en' => 'Shiga',
                    
                    'regional_center_city_id' => NULL,
                ),
            60 =>
                array (
                    'id' => 561,
                    'country_id' => 52,
                    'name_fr' => 'Сидзуока',
                    'name_en' => 'Shizuoka',
                    
                    'regional_center_city_id' => NULL,
                ),
            61 =>
                array (
                    'id' => 562,
                    'country_id' => 52,
                    'name_fr' => 'Симане',
                    'name_en' => 'Shimane',
                    
                    'regional_center_city_id' => NULL,
                ),
            62 =>
                array (
                    'id' => 563,
                    'country_id' => 52,
                    'name_fr' => 'Тиба',
                    'name_en' => 'Chiba',
                    
                    'regional_center_city_id' => NULL,
                ),
            63 =>
                array (
                    'id' => 564,
                    'country_id' => 52,
                    'name_fr' => 'Токио',
                    'name_en' => 'Tokyo',
                    
                    'regional_center_city_id' => NULL,
                ),
            64 =>
                array (
                    'id' => 565,
                    'country_id' => 52,
                    'name_fr' => 'Токусима',
                    'name_en' => 'Tokushima',
                    
                    'regional_center_city_id' => NULL,
                ),
            65 =>
                array (
                    'id' => 566,
                    'country_id' => 52,
                    'name_fr' => 'Тотиги',
                    'name_en' => 'Tochigi',
                    
                    'regional_center_city_id' => NULL,
                ),
            66 =>
                array (
                    'id' => 567,
                    'country_id' => 52,
                    'name_fr' => 'Тоттори',
                    'name_en' => 'Tottori',
                    
                    'regional_center_city_id' => NULL,
                ),
            67 =>
                array (
                    'id' => 568,
                    'country_id' => 52,
                    'name_fr' => 'Тояма',
                    'name_en' => 'Toyama',
                    
                    'regional_center_city_id' => NULL,
                ),
            68 =>
                array (
                    'id' => 569,
                    'country_id' => 52,
                    'name_fr' => 'Фукуи',
                    'name_en' => 'Fukui',
                    
                    'regional_center_city_id' => NULL,
                ),
            69 =>
                array (
                    'id' => 570,
                    'country_id' => 52,
                    'name_fr' => 'Фукуока',
                    'name_en' => 'Fukuoka',
                    
                    'regional_center_city_id' => NULL,
                ),
            70 =>
                array (
                    'id' => 571,
                    'country_id' => 52,
                    'name_fr' => 'Фукусима',
                    'name_en' => 'Fukushima',
                    
                    'regional_center_city_id' => NULL,
                ),
            71 =>
                array (
                    'id' => 572,
                    'country_id' => 52,
                    'name_fr' => 'Хиросима',
                    'name_en' => 'Hiroshima',
                    
                    'regional_center_city_id' => NULL,
                ),
            72 =>
                array (
                    'id' => 573,
                    'country_id' => 52,
                    'name_fr' => 'Хоккайдо',
                    'name_en' => 'Hokkaido',
                    
                    'regional_center_city_id' => NULL,
                ),
            73 =>
                array (
                    'id' => 574,
                    'country_id' => 52,
                    'name_fr' => 'Хпого',
                    'name_en' => 'Hpogo',
                    
                    'regional_center_city_id' => NULL,
                ),
            74 =>
                array (
                    'id' => 575,
                    'country_id' => 52,
                    'name_fr' => 'Эхиме',
                    'name_en' => 'Ehime',
                    
                    'regional_center_city_id' => NULL,
                ),
            75 =>
                array (
                    'id' => 576,
                    'country_id' => 52,
                    'name_fr' => 'Ямагата',
                    'name_en' => 'Yamagata',
                    
                    'regional_center_city_id' => NULL,
                ),
            76 =>
                array (
                    'id' => 577,
                    'country_id' => 52,
                    'name_fr' => 'Ямагути',
                    'name_en' => 'Yamaguchi',
                    
                    'regional_center_city_id' => NULL,
                ),
            77 =>
                array (
                    'id' => 578,
                    'country_id' => 52,
                    'name_fr' => 'Яманаси',
                    'name_en' => 'Yamanashi',
                    
                    'regional_center_city_id' => NULL,
                ),
            78 =>
                array (
                    'id' => 579,
                    'country_id' => 53,
                    'name_fr' => 'Гонконг',
                    'name_en' => 'Hong Kong',
                    
                    'regional_center_city_id' => NULL,
                ),
            79 =>
                array (
                    'id' => 580,
                    'country_id' => 54,
                    'name_fr' => 'Индонезия',
                    'name_en' => 'Indonesia',
                    
                    'regional_center_city_id' => NULL,
                ),
            80 =>
                array (
                    'id' => 581,
                    'country_id' => 55,
                    'name_fr' => 'Иордания',
                    'name_en' => 'Jordan',
                    
                    'regional_center_city_id' => NULL,
                ),
            81 =>
                array (
                    'id' => 582,
                    'country_id' => 56,
                    'name_fr' => 'Малайзия',
                    'name_en' => 'Malaysia',
                    
                    'regional_center_city_id' => NULL,
                ),
            82 =>
                array (
                    'id' => 583,
                    'country_id' => 57,
                    'name_fr' => 'Сингапур',
                    'name_en' => 'Singapore',
                    
                    'regional_center_city_id' => NULL,
                ),
            83 =>
                array (
                    'id' => 584,
                    'country_id' => 58,
                    'name_fr' => 'Тайвань',
                    'name_en' => 'Taiwan',
                    
                    'regional_center_city_id' => NULL,
                ),
            84 =>
                array (
                    'id' => 585,
                    'country_id' => 59,
                    'name_fr' => 'Корея',
                    'name_en' => 'Korea',
                    
                    'regional_center_city_id' => NULL,
                ),
            85 =>
                array (
                    'id' => 586,
                    'country_id' => 59,
                    'name_fr' => 'Южная Корея',
                    'name_en' => 'South Korea',
                    
                    'regional_center_city_id' => NULL,
                ),
            86 =>
                array (
                    'id' => 587,
                    'country_id' => 60,
                    'name_fr' => 'Пакистан',
                    'name_en' => 'Pakistan',
                    
                    'regional_center_city_id' => NULL,
                ),
            87 =>
                array (
                    'id' => 588,
                    'country_id' => 61,
                    'name_fr' => 'Тайланд',
                    'name_en' => 'Thailand',
                    
                    'regional_center_city_id' => NULL,
                ),
            88 =>
                array (
                    'id' => 589,
                    'country_id' => 62,
                    'name_fr' => 'Дубаи',
                    'name_en' => 'Dubai',
                    
                    'regional_center_city_id' => NULL,
                ),
            89 =>
                array (
                    'id' => 590,
                    'country_id' => 63,
                    'name_fr' => 'Бейрут',
                    'name_en' => 'Beirut',
                    
                    'regional_center_city_id' => NULL,
                ),
            90 =>
                array (
                    'id' => 591,
                    'country_id' => 64,
                    'name_fr' => 'Дамаск',
                    'name_en' => 'Damascus',
                    
                    'regional_center_city_id' => NULL,
                ),
            91 =>
                array (
                    'id' => 592,
                    'country_id' => 65,
                    'name_fr' => 'Остров Мэн',
                    'name_en' => 'Isle of Man',
                    
                    'regional_center_city_id' => NULL,
                ),
            92 =>
                array (
                    'id' => 593,
                    'country_id' => 66,
                    'name_fr' => 'Бейрут',
                    'name_en' => 'Beirut',
                    
                    'regional_center_city_id' => NULL,
                ),
            93 =>
                array (
                    'id' => 594,
                    'country_id' => 67,
                    'name_fr' => 'Улан-батор',
                    'name_en' => 'Ulaanbaatar',
                    
                    'regional_center_city_id' => NULL,
                ),
            94 =>
                array (
                    'id' => 595,
                    'country_id' => 68,
                    'name_fr' => 'Багдад',
                    'name_en' => 'Baghdad',
                    
                    'regional_center_city_id' => NULL,
                ),
            95 =>
                array (
                    'id' => 596,
                    'country_id' => 68,
                    'name_fr' => 'Басра',
                    'name_en' => 'Basra',
                    
                    'regional_center_city_id' => NULL,
                ),
            96 =>
                array (
                    'id' => 597,
                    'country_id' => 68,
                    'name_fr' => 'Мосул',
                    'name_en' => 'Mosul',
                    
                    'regional_center_city_id' => NULL,
                ),
            97 =>
                array (
                    'id' => 598,
                    'country_id' => 69,
                    'name_fr' => 'Асуан',
                    'name_en' => 'Aswan',
                    
                    'regional_center_city_id' => 3934,
                ),
            98 =>
                array (
                    'id' => 599,
                    'country_id' => 69,
                    'name_fr' => 'Асьют',
                    'name_en' => 'Assiut',
                    
                    'regional_center_city_id' => 3935,
                ),
            99 =>
                array (
                    'id' => 600,
                    'country_id' => 69,
                    'name_fr' => 'Бени-Суэйф',
                    'name_en' => 'Beni Suef',
                    
                    'regional_center_city_id' => 3936,
                ),
            100 =>
                array (
                    'id' => 601,
                    'country_id' => 69,
                    'name_fr' => 'Гарбия',
                    'name_en' => 'Gharbia',
                    
                    'regional_center_city_id' => 3937,
                ),
            101 =>
                array (
                    'id' => 602,
                    'country_id' => 69,
                    'name_fr' => 'Думьят',
                    'name_en' => 'Damietta',
                    
                    'regional_center_city_id' => 3938,
                ),
            102 =>
                array (
                    'id' => 603,
                    'country_id' => 69,
                    'name_fr' => 'Египет',
                    'name_en' => 'Egypt',
                    
                    'regional_center_city_id' => NULL,
                ),
            103 =>
                array (
                    'id' => 604,
                    'country_id' => 69,
                    'name_fr' => 'Синай',
                    'name_en' => 'Sinai',
                    
                    'regional_center_city_id' => NULL,
                ),
            104 =>
                array (
                    'id' => 605,
                    'country_id' => 70,
                    'name_fr' => 'Прибрежный регион',
                    'name_en' => 'Littoral Region',
                    
                    'regional_center_city_id' => 3942,
                ),
            105 =>
                array (
                    'id' => 606,
                    'country_id' => 70,
                    'name_fr' => 'Юго-Западный регион',
                    'name_en' => 'South-West region',
                    
                    'regional_center_city_id' => 3944,
                ),
            106 =>
                array (
                    'id' => 607,
                    'country_id' => 70,
                    'name_fr' => 'Крайнесеверный регион',
                    'name_en' => 'North Region',
                    
                    'regional_center_city_id' => 3946,
                ),
            107 =>
                array (
                    'id' => 608,
                    'country_id' => 70,
                    'name_fr' => 'Центральный регион',
                    'name_en' => 'Central Region',
                    
                    'regional_center_city_id' => 3947,
                ),
            108 =>
                array (
                    'id' => 609,
                    'country_id' => 71,
                    'name_fr' => 'Эль-Джахра',
                    'name_en' => 'al-Jahra',
                    
                    'regional_center_city_id' => 3949,
                ),
            109 =>
                array (
                    'id' => 610,
                    'country_id' => 71,
                    'name_fr' => 'Эль-Кувейт',
                    'name_en' => 'al-Kuwayt',
                    
                    'regional_center_city_id' => 3950,
                ),
            110 =>
                array (
                    'id' => 611,
                    'country_id' => 72,
                    'name_fr' => 'Три́поли',
                    'name_en' => 'Tarabulus',
                    
                    'regional_center_city_id' => 3951,
                ),
            111 =>
                array (
                    'id' => 612,
                    'country_id' => 72,
                    'name_fr' => 'Бенгази',
                    'name_en' => 'Benghazi',
                    
                    'regional_center_city_id' => 3952,
                ),
            112 =>
                array (
                    'id' => 613,
                    'country_id' => 73,
                    'name_fr' => 'Сен-Дени',
                    'name_en' => 'Saint-Denis',
                    
                    'regional_center_city_id' => 3953,
                ),
            113 =>
                array (
                    'id' => 614,
                    'country_id' => 74,
                    'name_fr' => 'Восточная',
                    'name_en' => 'East',
                    
                    'regional_center_city_id' => 3955,
                ),
            114 =>
                array (
                    'id' => 615,
                    'country_id' => 74,
                    'name_fr' => 'Центральная',
                    'name_en' => 'Central',
                    
                    'regional_center_city_id' => 3956,
                ),
            115 =>
                array (
                    'id' => 616,
                    'country_id' => 74,
                    'name_fr' => 'Северная',
                    'name_en' => 'North',
                    
                    'regional_center_city_id' => 3957,
                ),
            116 =>
                array (
                    'id' => 617,
                    'country_id' => 74,
                    'name_fr' => 'Западная',
                    'name_en' => 'West',
                    
                    'regional_center_city_id' => 3958,
                ),
            117 =>
                array (
                    'id' => 618,
                    'country_id' => 75,
                    'name_fr' => 'Пичинча',
                    'name_en' => 'Pichincha',
                    
                    'regional_center_city_id' => NULL,
                ),
            118 =>
                array (
                    'id' => 619,
                    'country_id' => 76,
                    'name_fr' => 'Морокко',
                    'name_en' => 'Morocco',
                    
                    'regional_center_city_id' => NULL,
                ),
            119 =>
                array (
                    'id' => 620,
                    'country_id' => 76,
                    'name_fr' => 'Танжер',
                    'name_en' => 'Tangier',
                    
                    'regional_center_city_id' => NULL,
                ),
            120 =>
                array (
                    'id' => 621,
                    'country_id' => 77,
                    'name_fr' => 'Мозамбик',
                    'name_en' => 'Mozambique',
                    
                    'regional_center_city_id' => NULL,
                ),
            121 =>
                array (
                    'id' => 622,
                    'country_id' => 78,
                    'name_fr' => 'Тунис',
                    'name_en' => 'Tunisia',
                    
                    'regional_center_city_id' => NULL,
                ),
            122 =>
                array (
                    'id' => 623,
                    'country_id' => 80,
                    'name_fr' => 'Белиз',
                    'name_en' => 'Belize',
                    
                    'regional_center_city_id' => 3967,
                ),
            123 =>
                array (
                    'id' => 624,
                    'country_id' => 81,
                    'name_fr' => 'Гамильтон',
                    'name_en' => 'Hamilton',
                    
                    'regional_center_city_id' => 3968,
                ),
            124 =>
                array (
                    'id' => 625,
                    'country_id' => 82,
                    'name_fr' => 'Артибони́т',
                    'name_en' => 'Artibonite',
                    
                    'regional_center_city_id' => 3969,
                ),
            125 =>
                array (
                    'id' => 626,
                    'country_id' => 82,
                    'name_fr' => 'Гранд-Анс',
                    'name_en' => 'Grand`Anse',
                    
                    'regional_center_city_id' => 3970,
                ),
            126 =>
                array (
                    'id' => 627,
                    'country_id' => 82,
                    'name_fr' => 'Северо-Западный',
                    'name_en' => 'Nord-Ouest',
                    
                    'regional_center_city_id' => 3971,
                ),
            127 =>
                array (
                    'id' => 628,
                    'country_id' => 82,
                    'name_fr' => 'Западный',
                    'name_en' => 'Ouest',
                    
                    'regional_center_city_id' => 3973,
                ),
            128 =>
                array (
                    'id' => 629,
                    'country_id' => 82,
                    'name_fr' => 'Южный',
                    'name_en' => 'Sud',
                    
                    'regional_center_city_id' => 3974,
                ),
            129 =>
                array (
                    'id' => 630,
                    'country_id' => 82,
                    'name_fr' => 'Юго-Восточный',
                    'name_en' => 'Sud-Est',
                    
                    'regional_center_city_id' => 3975,
                ),
            130 =>
                array (
                    'id' => 631,
                    'country_id' => 83,
                    'name_fr' => 'Пуэнт-а-Питр',
                    'name_en' => 'Pointe-a-Pitre',
                    
                    'regional_center_city_id' => 3976,
                ),
            131 =>
                array (
                    'id' => 632,
                    'country_id' => 83,
                    'name_fr' => 'Бас-Тер',
                    'name_en' => 'Basse-Terre',
                    
                    'regional_center_city_id' => 3977,
                ),
            132 =>
                array (
                    'id' => 633,
                    'country_id' => 84,
                    'name_fr' => 'Альберта',
                    'name_en' => 'Alberta',
                    
                    'regional_center_city_id' => 3984,
                ),
            133 =>
                array (
                    'id' => 634,
                    'country_id' => 84,
                    'name_fr' => 'Британская Колумбия',
                    'name_en' => 'British Columbia',
                    
                    'regional_center_city_id' => 4004,
                ),
            134 =>
                array (
                    'id' => 635,
                    'country_id' => 84,
                    'name_fr' => 'Квебек',
                    'name_en' => 'Quebec',
                    
                    'regional_center_city_id' => 4015,
                ),
            135 =>
                array (
                    'id' => 636,
                    'country_id' => 84,
                    'name_fr' => 'Манитоба',
                    'name_en' => 'Manitoba',
                    
                    'regional_center_city_id' => 4033,
                ),
            136 =>
                array (
                    'id' => 637,
                    'country_id' => 84,
                    'name_fr' => 'Новая Шотландия',
                    'name_en' => 'Nova Scotia',
                    
                    'regional_center_city_id' => 4034,
                ),
            137 =>
                array (
                    'id' => 638,
                    'country_id' => 84,
                    'name_fr' => 'Нью-Брунсвик',
                    'name_en' => 'New Brunswick',
                    
                    'regional_center_city_id' => 4038,
                ),
            138 =>
                array (
                    'id' => 639,
                    'country_id' => 84,
                    'name_fr' => 'Ньюфаундленд',
                    'name_en' => 'Newfoundland',
                    
                    'regional_center_city_id' => NULL,
                ),
            139 =>
                array (
                    'id' => 640,
                    'country_id' => 84,
                    'name_fr' => 'Онтарио',
                    'name_en' => 'Ontario',
                    
                    'regional_center_city_id' => 4085,
                ),
            140 =>
                array (
                    'id' => 641,
                    'country_id' => 84,
                    'name_fr' => 'Принц Эдуард',
                    'name_en' => 'Prince Edward',
                    
                    'regional_center_city_id' => 4093,
                ),
            141 =>
                array (
                    'id' => 642,
                    'country_id' => 84,
                    'name_fr' => 'Саскачеван',
                    'name_en' => 'Saskatchewan',
                    
                    'regional_center_city_id' => 4095,
                ),
            142 =>
                array (
                    'id' => 643,
                    'country_id' => 85,
                    'name_fr' => 'Алахуэла',
                    'name_en' => 'Alajuela',
                    
                    'regional_center_city_id' => 4097,
                ),
            143 =>
                array (
                    'id' => 644,
                    'country_id' => 85,
                    'name_fr' => 'Гуанакасте',
                    'name_en' => 'Guanacaste',
                    
                    'regional_center_city_id' => 4098,
                ),
            144 =>
                array (
                    'id' => 645,
                    'country_id' => 85,
                    'name_fr' => 'Эредия',
                    'name_en' => 'Heredia',
                    
                    'regional_center_city_id' => 4100,
                ),
            145 =>
                array (
                    'id' => 646,
                    'country_id' => 85,
                    'name_fr' => 'Лимон',
                    'name_en' => 'Limon',
                    
                    'regional_center_city_id' => 4101,
                ),
            146 =>
                array (
                    'id' => 647,
                    'country_id' => 85,
                    'name_fr' => 'Пунтаренас',
                    'name_en' => 'Puntarenas',
                    
                    'regional_center_city_id' => 4102,
                ),
            147 =>
                array (
                    'id' => 648,
                    'country_id' => 85,
                    'name_fr' => 'Сан-Хосе',
                    'name_en' => 'San Jose',
                    
                    'regional_center_city_id' => 4103,
                ),
            148 =>
                array (
                    'id' => 649,
                    'country_id' => 86,
                    'name_fr' => 'Агуаскальентес',
                    'name_en' => 'Aguascalientes',
                    
                    'regional_center_city_id' => 4104,
                ),
            149 =>
                array (
                    'id' => 650,
                    'country_id' => 86,
                    'name_fr' => 'Веракрус',
                    'name_en' => 'Veracruz',
                    
                    'regional_center_city_id' => 4108,
                ),
            150 =>
                array (
                    'id' => 651,
                    'country_id' => 86,
                    'name_fr' => 'Герреро',
                    'name_en' => 'Guerrero',
                    
                    'regional_center_city_id' => 4128,
                ),
            151 =>
                array (
                    'id' => 652,
                    'country_id' => 86,
                    'name_fr' => 'Гуанахуато',
                    'name_en' => 'Guanajuato',
                    
                    'regional_center_city_id' => 4131,
                ),
            152 =>
                array (
                    'id' => 653,
                    'country_id' => 86,
                    'name_fr' => 'Дуранго',
                    'name_en' => 'Durango',
                    
                    'regional_center_city_id' => 4139,
                ),
            153 =>
                array (
                    'id' => 654,
                    'country_id' => 86,
                    'name_fr' => 'Идальго',
                    'name_en' => 'Hidalgo',
                    
                    'regional_center_city_id' => 4146,
                ),
            154 =>
                array (
                    'id' => 655,
                    'country_id' => 86,
                    'name_fr' => 'Кампече',
                    'name_en' => 'Campeche',
                    
                    'regional_center_city_id' => 4148,
                ),
            155 =>
                array (
                    'id' => 656,
                    'country_id' => 86,
                    'name_fr' => 'Керетаро',
                    'name_en' => 'Queretaro',
                    
                    'regional_center_city_id' => 4150,
                ),
            156 =>
                array (
                    'id' => 657,
                    'country_id' => 86,
                    'name_fr' => 'Керетаро',
                    'name_en' => 'Queretaro',
                    
                    'regional_center_city_id' => NULL,
                ),
            157 =>
                array (
                    'id' => 658,
                    'country_id' => 86,
                    'name_fr' => 'Коауила',
                    'name_en' => 'Coahuila',
                    
                    'regional_center_city_id' => 4155,
                ),
            158 =>
                array (
                    'id' => 659,
                    'country_id' => 86,
                    'name_fr' => 'Колима',
                    'name_en' => 'Colima',
                    
                    'regional_center_city_id' => 4158,
                ),
            159 =>
                array (
                    'id' => 660,
                    'country_id' => 86,
                    'name_fr' => 'Мехико',
                    'name_en' => 'Mexico',
                    
                    'regional_center_city_id' => 4164,
                ),
            160 =>
                array (
                    'id' => 661,
                    'country_id' => 86,
                    'name_fr' => 'Мичоакан',
                    'name_en' => 'Michoacan',
                    
                    'regional_center_city_id' => 4172,
                ),
            161 =>
                array (
                    'id' => 662,
                    'country_id' => 86,
                    'name_fr' => 'Морелос',
                    'name_en' => 'Morelos',
                    
                    'regional_center_city_id' => 4177,
                ),
            162 =>
                array (
                    'id' => 663,
                    'country_id' => 86,
                    'name_fr' => 'Наярит',
                    'name_en' => 'Nayarit',
                    
                    'regional_center_city_id' => 4182,
                ),
            163 =>
                array (
                    'id' => 664,
                    'country_id' => 86,
                    'name_fr' => 'Нижняя Калифорния',
                    'name_en' => 'Baja California',
                    
                    'regional_center_city_id' => 4183,
                ),
            164 =>
                array (
                    'id' => 665,
                    'country_id' => 86,
                    'name_fr' => 'Нуэво-Леон',
                    'name_en' => 'Nuevo Leon',
                    
                    'regional_center_city_id' => 4188,
                ),
            165 =>
                array (
                    'id' => 666,
                    'country_id' => 86,
                    'name_fr' => 'Оахака',
                    'name_en' => 'Oaxaca',
                    
                    'regional_center_city_id' => 4189,
                ),
            166 =>
                array (
                    'id' => 667,
                    'country_id' => 86,
                    'name_fr' => 'Пуэбла',
                    'name_en' => 'Puebla',
                    
                    'regional_center_city_id' => 4197,
                ),
            167 =>
                array (
                    'id' => 668,
                    'country_id' => 86,
                    'name_fr' => 'Сакатекас',
                    'name_en' => 'Zacatecas',
                    
                    'regional_center_city_id' => 4200,
                ),
            168 =>
                array (
                    'id' => 669,
                    'country_id' => 86,
                    'name_fr' => 'Сан-Луис-Потоси',
                    'name_en' => 'San Luis Potosi',
                    
                    'regional_center_city_id' => 4206,
                ),
            169 =>
                array (
                    'id' => 670,
                    'country_id' => 86,
                    'name_fr' => 'Синалоа',
                    'name_en' => 'Sinaloa',
                    
                    'regional_center_city_id' => 4210,
                ),
            170 =>
                array (
                    'id' => 671,
                    'country_id' => 86,
                    'name_fr' => 'Сонора',
                    'name_en' => 'Sonora',
                    
                    'regional_center_city_id' => 4221,
                ),
            171 =>
                array (
                    'id' => 672,
                    'country_id' => 86,
                    'name_fr' => 'Табаско',
                    'name_en' => 'Tabasco',
                    
                    'regional_center_city_id' => 4222,
                ),
            172 =>
                array (
                    'id' => 673,
                    'country_id' => 86,
                    'name_fr' => 'Тамаулипас',
                    'name_en' => 'Tamaulipas',
                    
                    'regional_center_city_id' => 4231,
                ),
            173 =>
                array (
                    'id' => 763,
                    'country_id' => 95,
                    'name_fr' => 'Чако',
                    'name_en' => 'Chaco',
                    
                    'regional_center_city_id' => 8164,
                ),
            174 =>
                array (
                    'id' => 674,
                    'country_id' => 86,
                    'name_fr' => 'Федеральный округ',
                    'name_en' => 'Federal district',
                    
                    'regional_center_city_id' => 4232,
                ),
            175 =>
                array (
                    'id' => 675,
                    'country_id' => 86,
                    'name_fr' => 'Халиско',
                    'name_en' => 'Jalisco',
                    
                    'regional_center_city_id' => 4237,
                ),
            176 =>
                array (
                    'id' => 676,
                    'country_id' => 86,
                    'name_fr' => 'Чиуауа',
                    'name_en' => 'Chihuahua',
                    
                    'regional_center_city_id' => 4242,
                ),
            177 =>
                array (
                    'id' => 677,
                    'country_id' => 86,
                    'name_fr' => 'Чьяпас',
                    'name_en' => 'Chiapas',
                    
                    'regional_center_city_id' => 4248,
                ),
            178 =>
                array (
                    'id' => 678,
                    'country_id' => 86,
                    'name_fr' => 'Юкатан',
                    'name_en' => 'Yucatan',
                    
                    'regional_center_city_id' => 4249,
                ),
            179 =>
                array (
                    'id' => 679,
                    'country_id' => 87,
                    'name_fr' => 'Ауачапан',
                    'name_en' => 'Ahuachapan',
                    
                    'regional_center_city_id' => 4250,
                ),
            180 =>
                array (
                    'id' => 680,
                    'country_id' => 87,
                    'name_fr' => 'Кускатлан',
                    'name_en' => 'Cuscatlan',
                    
                    'regional_center_city_id' => 4251,
                ),
            181 =>
                array (
                    'id' => 681,
                    'country_id' => 87,
                    'name_fr' => 'Ла-Либертад',
                    'name_en' => 'La Libertad',
                    
                    'regional_center_city_id' => 4253,
                ),
            182 =>
                array (
                    'id' => 682,
                    'country_id' => 87,
                    'name_fr' => 'Ла-Пас',
                    'name_en' => 'La Paz',
                    
                    'regional_center_city_id' => 4255,
                ),
            183 =>
                array (
                    'id' => 683,
                    'country_id' => 87,
                    'name_fr' => 'Ла-Унион',
                    'name_en' => 'La Union',
                    
                    'regional_center_city_id' => 4256,
                ),
            184 =>
                array (
                    'id' => 684,
                    'country_id' => 87,
                    'name_fr' => 'Сан-Мигель',
                    'name_en' => 'San Miguel',
                    
                    'regional_center_city_id' => 4257,
                ),
            185 =>
                array (
                    'id' => 685,
                    'country_id' => 87,
                    'name_fr' => 'Сан-Сальвадор',
                    'name_en' => 'San Salvador',
                    
                    'regional_center_city_id' => 4258,
                ),
            186 =>
                array (
                    'id' => 686,
                    'country_id' => 87,
                    'name_fr' => 'Санта-Ана',
                    'name_en' => 'Santa Ana',
                    
                    'regional_center_city_id' => 4259,
                ),
            187 =>
                array (
                    'id' => 687,
                    'country_id' => 87,
                    'name_fr' => 'Сонсонате',
                    'name_en' => 'Sonsonate',
                    
                    'regional_center_city_id' => 4260,
                ),
            188 =>
                array (
                    'id' => 688,
                    'country_id' => 88,
                    'name_fr' => 'Айдахо',
                    'name_en' => 'Idaho',
                    
                    'regional_center_city_id' => 4264,
                ),
            189 =>
                array (
                    'id' => 689,
                    'country_id' => 88,
                    'name_fr' => 'Айова',
                    'name_en' => 'Iowa',
                    
                    'regional_center_city_id' => 4287,
                ),
            190 =>
                array (
                    'id' => 690,
                    'country_id' => 88,
                    'name_fr' => 'Алабама',
                    'name_en' => 'Alabama',
                    
                    'regional_center_city_id' => 4410,
                ),
            191 =>
                array (
                    'id' => 691,
                    'country_id' => 88,
                    'name_fr' => 'Аляска',
                    'name_en' => 'Alaska',
                    
                    'regional_center_city_id' => 4502,
                ),
            192 =>
                array (
                    'id' => 692,
                    'country_id' => 88,
                    'name_fr' => 'Аризона',
                    'name_en' => 'Arizona',
                    
                    'regional_center_city_id' => 4548,
                ),
            193 =>
                array (
                    'id' => 693,
                    'country_id' => 88,
                    'name_fr' => 'Арканзас',
                    'name_en' => 'Arkanzas',
                    
                    'regional_center_city_id' => 4604,
                ),
            194 =>
                array (
                    'id' => 694,
                    'country_id' => 88,
                    'name_fr' => 'Вайоминг',
                    'name_en' => 'Wyoming',
                    
                    'regional_center_city_id' => 4674,
                ),
            195 =>
                array (
                    'id' => 695,
                    'country_id' => 88,
                    'name_fr' => 'Вашингтон',
                    'name_en' => 'Washington',
                    
                    'regional_center_city_id' => 4710,
                ),
            196 =>
                array (
                    'id' => 696,
                    'country_id' => 88,
                    'name_fr' => 'Вермонт',
                    'name_en' => 'Vermont',
                    
                    'regional_center_city_id' => 4747,
                ),
            197 =>
                array (
                    'id' => 697,
                    'country_id' => 88,
                    'name_fr' => 'Виргиния',
                    'name_en' => 'Virginia',
                    
                    'regional_center_city_id' => NULL,
                ),
            198 =>
                array (
                    'id' => 698,
                    'country_id' => 88,
                    'name_fr' => 'Висконсин',
                    'name_en' => 'Wisconsin',
                    
                    'regional_center_city_id' => NULL,
                ),
            199 =>
                array (
                    'id' => 699,
                    'country_id' => 88,
                    'name_fr' => 'Гаваи',
                    'name_en' => 'Hawaii',
                    
                    'regional_center_city_id' => 4838,
                ),
            200 =>
                array (
                    'id' => 700,
                    'country_id' => 88,
                    'name_fr' => 'Делавар',
                    'name_en' => 'Delaware',
                    
                    'regional_center_city_id' => 4852,
                ),
            201 =>
                array (
                    'id' => 701,
                    'country_id' => 88,
                    'name_fr' => 'Джорджия',
                    'name_en' => 'Georgia',
                    
                    'regional_center_city_id' => 4861,
                ),
            202 =>
                array (
                    'id' => 702,
                    'country_id' => 88,
                    'name_fr' => 'Западная Виргиния',
                    'name_en' => 'West Virginia',
                    
                    'regional_center_city_id' => 4932,
                ),
            203 =>
                array (
                    'id' => 703,
                    'country_id' => 88,
                    'name_fr' => 'Иллинойс',
                    'name_en' => 'Illinois',
                    
                    'regional_center_city_id' => 5060,
                ),
            204 =>
                array (
                    'id' => 704,
                    'country_id' => 88,
                    'name_fr' => 'Индиана',
                    'name_en' => 'Indiana',
                    
                    'regional_center_city_id' => 5107,
                ),
            205 =>
                array (
                    'id' => 705,
                    'country_id' => 88,
                    'name_fr' => 'Калифорния',
                    'name_en' => 'California',
                    
                    'regional_center_city_id' => 5338,
                ),
            206 =>
                array (
                    'id' => 706,
                    'country_id' => 88,
                    'name_fr' => 'Канзас',
                    'name_en' => 'Kansas',
                    
                    'regional_center_city_id' => 5474,
                ),
            207 =>
                array (
                    'id' => 707,
                    'country_id' => 88,
                    'name_fr' => 'Кентукки',
                    'name_en' => 'Kentucky',
                    
                    'regional_center_city_id' => 5532,
                ),
            208 =>
                array (
                    'id' => 708,
                    'country_id' => 88,
                    'name_fr' => 'Колорадо',
                    'name_en' => 'Colorado',
                    
                    'regional_center_city_id' => NULL,
                ),
            209 =>
                array (
                    'id' => 709,
                    'country_id' => 88,
                    'name_fr' => 'Коннектикут',
                    'name_en' => 'Connecticut',
                    
                    'regional_center_city_id' => 5615,
                ),
            210 =>
                array (
                    'id' => 710,
                    'country_id' => 88,
                    'name_fr' => 'Луизиана',
                    'name_en' => 'Louisiana',
                    
                    'regional_center_city_id' => 5621,
                ),
            211 =>
                array (
                    'id' => 711,
                    'country_id' => 88,
                    'name_fr' => 'Массачусетс',
                    'name_en' => 'Massachusetts',
                    
                    'regional_center_city_id' => 5690,
                ),
            212 =>
                array (
                    'id' => 712,
                    'country_id' => 88,
                    'name_fr' => 'Миннесота',
                    'name_en' => 'Minnesota',
                    
                    'regional_center_city_id' => 5832,
                ),
            213 =>
                array (
                    'id' => 713,
                    'country_id' => 88,
                    'name_fr' => 'Миссисипи',
                    'name_en' => 'Mississippi',
                    
                    'regional_center_city_id' => NULL,
                ),
            214 =>
                array (
                    'id' => 714,
                    'country_id' => 88,
                    'name_fr' => 'Миссури',
                    'name_en' => 'Missouri',
                    
                    'regional_center_city_id' => 5982,
                ),
            215 =>
                array (
                    'id' => 715,
                    'country_id' => 88,
                    'name_fr' => 'Мичиган',
                    'name_en' => 'Michigan',
                    
                    'regional_center_city_id' => NULL,
                ),
            216 =>
                array (
                    'id' => 716,
                    'country_id' => 88,
                    'name_fr' => 'Монтана',
                    'name_en' => 'Montana',
                    
                    'regional_center_city_id' => NULL,
                ),
            217 =>
                array (
                    'id' => 717,
                    'country_id' => 88,
                    'name_fr' => 'Мэн',
                    'name_en' => 'Maine',
                    
                    'regional_center_city_id' => NULL,
                ),
            218 =>
                array (
                    'id' => 718,
                    'country_id' => 88,
                    'name_fr' => 'Мэриленд',
                    'name_en' => 'Maryland',
                    
                    'regional_center_city_id' => 6195,
                ),
            219 =>
                array (
                    'id' => 719,
                    'country_id' => 88,
                    'name_fr' => 'Небраска',
                    'name_en' => 'Nebraska',
                    
                    'regional_center_city_id' => 6251,
                ),
            220 =>
                array (
                    'id' => 720,
                    'country_id' => 88,
                    'name_fr' => 'Невада',
                    'name_en' => 'Nevada',
                    
                    'regional_center_city_id' => 6273,
                ),
            221 =>
                array (
                    'id' => 721,
                    'country_id' => 88,
                    'name_fr' => 'Нью-Гэмпшир',
                    'name_en' => 'New Hampshire',
                    
                    'regional_center_city_id' => NULL,
                ),
            222 =>
                array (
                    'id' => 722,
                    'country_id' => 88,
                    'name_fr' => 'Нью-Джерси',
                    'name_en' => 'New Jersey',
                    
                    'regional_center_city_id' => NULL,
                ),
            223 =>
                array (
                    'id' => 723,
                    'country_id' => 88,
                    'name_fr' => 'Нью-Йорк',
                    'name_en' => 'New York',
                    
                    'regional_center_city_id' => NULL,
                ),
            224 =>
                array (
                    'id' => 724,
                    'country_id' => 88,
                    'name_fr' => 'Нью-Мексико',
                    'name_en' => 'New Mexico',
                    
                    'regional_center_city_id' => 6673,
                ),
            225 =>
                array (
                    'id' => 725,
                    'country_id' => 88,
                    'name_fr' => 'Огайо',
                    'name_en' => 'Ohio',
                    
                    'regional_center_city_id' => NULL,
                ),
            226 =>
                array (
                    'id' => 726,
                    'country_id' => 88,
                    'name_fr' => 'Оклахома',
                    'name_en' => 'Oklahoma',
                    
                    'regional_center_city_id' => 7006,
                ),
            227 =>
                array (
                    'id' => 727,
                    'country_id' => 88,
                    'name_fr' => 'окр. Колумбия',
                    'name_en' => 'District Colombia',
                    
                    'regional_center_city_id' => NULL,
                ),
            228 =>
                array (
                    'id' => 728,
                    'country_id' => 88,
                    'name_fr' => 'Орегон',
                    'name_en' => 'Oregon',
                    
                    'regional_center_city_id' => NULL,
                ),
            229 =>
                array (
                    'id' => 729,
                    'country_id' => 88,
                    'name_fr' => 'Пенсильвания',
                    'name_en' => 'Pennsylvania',
                    
                    'regional_center_city_id' => 7123,
                ),
            230 =>
                array (
                    'id' => 730,
                    'country_id' => 88,
                    'name_fr' => 'Род-Айленд',
                    'name_en' => 'Rhode Island',
                    
                    'regional_center_city_id' => 7302,
                ),
            231 =>
                array (
                    'id' => 731,
                    'country_id' => 88,
                    'name_fr' => 'Северная Дакота',
                    'name_en' => 'North Dakota',
                    
                    'regional_center_city_id' => NULL,
                ),
            232 =>
                array (
                    'id' => 732,
                    'country_id' => 88,
                    'name_fr' => 'Северная Каролина',
                    'name_en' => 'North Carolina',
                    
                    'regional_center_city_id' => NULL,
                ),
            233 =>
                array (
                    'id' => 733,
                    'country_id' => 88,
                    'name_fr' => 'Теннесси',
                    'name_en' => 'Tennessee',
                    
                    'regional_center_city_id' => NULL,
                ),
            234 =>
                array (
                    'id' => 734,
                    'country_id' => 88,
                    'name_fr' => 'Техас',
                    'name_en' => 'Texas',
                    
                    'regional_center_city_id' => NULL,
                ),
            235 =>
                array (
                    'id' => 735,
                    'country_id' => 88,
                    'name_fr' => 'Флорида',
                    'name_en' => 'Florida',
                    
                    'regional_center_city_id' => NULL,
                ),
            236 =>
                array (
                    'id' => 736,
                    'country_id' => 88,
                    'name_fr' => 'Южная Дакота',
                    'name_en' => 'South Dakota',
                    
                    'regional_center_city_id' => NULL,
                ),
            237 =>
                array (
                    'id' => 737,
                    'country_id' => 88,
                    'name_fr' => 'Южная Каролина',
                    'name_en' => 'South Carolina',
                    
                    'regional_center_city_id' => NULL,
                ),
            238 =>
                array (
                    'id' => 738,
                    'country_id' => 88,
                    'name_fr' => 'Юта',
                    'name_en' => 'Utah',
                    
                    'regional_center_city_id' => NULL,
                ),
            239 =>
                array (
                    'id' => 739,
                    'country_id' => 89,
                    'name_fr' => 'Гранд-Тёрк',
                    'name_en' => 'Grand Turk',
                    
                    'regional_center_city_id' => 8112,
                ),
            240 =>
                array (
                    'id' => 740,
                    'country_id' => 90,
                    'name_fr' => 'Багамы',
                    'name_en' => 'the Bahamas',
                    
                    'regional_center_city_id' => NULL,
                ),
            241 =>
                array (
                    'id' => 741,
                    'country_id' => 91,
                    'name_fr' => 'Гавана',
                    'name_en' => 'Havana',
                    
                    'regional_center_city_id' => NULL,
                ),
            242 =>
                array (
                    'id' => 742,
                    'country_id' => 92,
                    'name_fr' => 'Ямайка',
                    'name_en' => 'Jamaica',
                    
                    'regional_center_city_id' => NULL,
                ),
            243 =>
                array (
                    'id' => 743,
                    'country_id' => 93,
                    'name_fr' => 'Тегусигальпа',
                    'name_en' => 'Tegucigalpa',
                    
                    'regional_center_city_id' => NULL,
                ),
            244 =>
                array (
                    'id' => 744,
                    'country_id' => 94,
                    'name_fr' => 'Санто-доминго',
                    'name_en' => 'Santo Domingo',
                    
                    'regional_center_city_id' => NULL,
                ),
            245 =>
                array (
                    'id' => 745,
                    'country_id' => 95,
                    'name_fr' => 'Буэнос-Айрес',
                    'name_en' => 'Buenos Aires',
                    
                    'regional_center_city_id' => 8120,
                ),
            246 =>
                array (
                    'id' => 746,
                    'country_id' => 95,
                    'name_fr' => 'Жужуй',
                    'name_en' => 'Jujuy',
                    
                    'regional_center_city_id' => 8134,
                ),
            247 =>
                array (
                    'id' => 747,
                    'country_id' => 95,
                    'name_fr' => 'Катамарка',
                    'name_en' => 'Catamarca',
                    
                    'regional_center_city_id' => 8136,
                ),
            248 =>
                array (
                    'id' => 748,
                    'country_id' => 95,
                    'name_fr' => 'Кордоба',
                    'name_en' => 'Cordoba',
                    
                    'regional_center_city_id' => 8139,
                ),
            249 =>
                array (
                    'id' => 749,
                    'country_id' => 95,
                    'name_fr' => 'Корриентес',
                    'name_en' => 'Corrientes',
                    
                    'regional_center_city_id' => 8143,
                ),
            250 =>
                array (
                    'id' => 750,
                    'country_id' => 95,
                    'name_fr' => 'Ла-Пампа',
                    'name_en' => 'La Pampa',
                    
                    'regional_center_city_id' => 8145,
                ),
            251 =>
                array (
                    'id' => 751,
                    'country_id' => 95,
                    'name_fr' => 'Ла-Риоха',
                    'name_en' => 'La Rioja',
                    
                    'regional_center_city_id' => NULL,
                ),
            252 =>
                array (
                    'id' => 752,
                    'country_id' => 95,
                    'name_fr' => 'Мендоса',
                    'name_en' => 'Mendoza',
                    
                    'regional_center_city_id' => 8148,
                ),
            253 =>
                array (
                    'id' => 753,
                    'country_id' => 95,
                    'name_fr' => 'Мисьонес',
                    'name_en' => 'Misiones',
                    
                    'regional_center_city_id' => 8150,
                ),
            254 =>
                array (
                    'id' => 754,
                    'country_id' => 95,
                    'name_fr' => 'Неукен',
                    'name_en' => 'Neuquen',
                    
                    'regional_center_city_id' => 8152,
                ),
            255 =>
                array (
                    'id' => 755,
                    'country_id' => 95,
                    'name_fr' => 'Сальта',
                    'name_en' => 'Salta',
                    
                    'regional_center_city_id' => 8153,
                ),
            256 =>
                array (
                    'id' => 756,
                    'country_id' => 95,
                    'name_fr' => 'Сан-Луис',
                    'name_en' => 'San Luis',
                    
                    'regional_center_city_id' => 8154,
                ),
            257 =>
                array (
                    'id' => 757,
                    'country_id' => 95,
                    'name_fr' => 'Сан-Хуан',
                    'name_en' => 'San Juan',
                    
                    'regional_center_city_id' => 8155,
                ),
            258 =>
                array (
                    'id' => 758,
                    'country_id' => 95,
                    'name_fr' => 'Санта-Крус',
                    'name_en' => 'Santa Cruz',
                    
                    'regional_center_city_id' => 8156,
                ),
            259 =>
                array (
                    'id' => 759,
                    'country_id' => 95,
                    'name_fr' => 'Санта-Фе',
                    'name_en' => 'Santa Fe',
                    
                    'regional_center_city_id' => 8158,
                ),
            260 =>
                array (
                    'id' => 760,
                    'country_id' => 95,
                    'name_fr' => 'Сантьяго-дель-Эстеро',
                    'name_en' => 'Santiago del Estero',
                    
                    'regional_center_city_id' => 8159,
                ),
            261 =>
                array (
                    'id' => 761,
                    'country_id' => 95,
                    'name_fr' => 'Тукуман',
                    'name_en' => 'Tucuman',
                    
                    'regional_center_city_id' => 8161,
                ),
            262 =>
                array (
                    'id' => 762,
                    'country_id' => 95,
                    'name_fr' => 'Формоса',
                    'name_en' => 'Formosa',
                    
                    'regional_center_city_id' => 8162,
                ),
            263 =>
                array (
                    'id' => 764,
                    'country_id' => 95,
                    'name_fr' => 'Чубут',
                    'name_en' => 'Chubut',
                    
                    'regional_center_city_id' => 8166,
                ),
            264 =>
                array (
                    'id' => 765,
                    'country_id' => 95,
                    'name_fr' => 'Энтре-Риос',
                    'name_en' => 'Entre Rios',
                    
                    'regional_center_city_id' => 8169,
                ),
            265 =>
                array (
                    'id' => 766,
                    'country_id' => 96,
                    'name_fr' => 'Акри',
                    'name_en' => 'Acre',
                    
                    'regional_center_city_id' => 8170,
                ),
            266 =>
                array (
                    'id' => 767,
                    'country_id' => 96,
                    'name_fr' => 'Алагоас',
                    'name_en' => 'Alagoas',
                    
                    'regional_center_city_id' => 8172,
                ),
            267 =>
                array (
                    'id' => 768,
                    'country_id' => 96,
                    'name_fr' => 'Амазонас',
                    'name_en' => 'Amazonas',
                    
                    'regional_center_city_id' => 8173,
                ),
            268 =>
                array (
                    'id' => 769,
                    'country_id' => 96,
                    'name_fr' => 'Амапа',
                    'name_en' => 'Amapá',
                    
                    'regional_center_city_id' => 8174,
                ),
            269 =>
                array (
                    'id' => 770,
                    'country_id' => 96,
                    'name_fr' => 'Баия',
                    'name_en' => 'Bahia',
                    
                    'regional_center_city_id' => 8184,
                ),
            270 =>
                array (
                    'id' => 771,
                    'country_id' => 96,
                    'name_fr' => 'Гояс',
                    'name_en' => 'Goias',
                    
                    'regional_center_city_id' => 8188,
                ),
            271 =>
                array (
                    'id' => 772,
                    'country_id' => 96,
                    'name_fr' => 'Мараньян',
                    'name_en' => 'Maranhao',
                    
                    'regional_center_city_id' => 8191,
                ),
            272 =>
                array (
                    'id' => 773,
                    'country_id' => 96,
                    'name_fr' => 'Мату-Гросу',
                    'name_en' => 'Mato Grosso',
                    
                    'regional_center_city_id' => 8192,
                ),
            273 =>
                array (
                    'id' => 774,
                    'country_id' => 96,
                    'name_fr' => 'Мату-Гросу-ду-Сул',
                    'name_en' => 'Mato Grosso do Sul',
                    
                    'regional_center_city_id' => 8193,
                ),
            274 =>
                array (
                    'id' => 775,
                    'country_id' => 96,
                    'name_fr' => 'Минас-Жерайс',
                    'name_en' => 'Minas Gerais',
                    
                    'regional_center_city_id' => 8198,
                ),
            275 =>
                array (
                    'id' => 776,
                    'country_id' => 96,
                    'name_fr' => 'Пара',
                    'name_en' => 'Pará',
                    
                    'regional_center_city_id' => 8213,
                ),
            276 =>
                array (
                    'id' => 777,
                    'country_id' => 96,
                    'name_fr' => 'Параиба',
                    'name_en' => 'Paraíba',
                    
                    'regional_center_city_id' => 8217,
                ),
            277 =>
                array (
                    'id' => 778,
                    'country_id' => 96,
                    'name_fr' => 'Парана',
                    'name_en' => 'Parana',
                    
                    'regional_center_city_id' => 8219,
                ),
            278 =>
                array (
                    'id' => 779,
                    'country_id' => 96,
                    'name_fr' => 'Пернамбуку',
                    'name_en' => 'Pernambuco',
                    
                    'regional_center_city_id' => 8227,
                ),
            279 =>
                array (
                    'id' => 780,
                    'country_id' => 96,
                    'name_fr' => 'Пиауи',
                    'name_en' => 'Piauí',
                    
                    'regional_center_city_id' => 8229,
                ),
            280 =>
                array (
                    'id' => 781,
                    'country_id' => 96,
                    'name_fr' => 'Рио-де-Жанейро',
                    'name_en' => 'Rio de Janeiro',
                    
                    'regional_center_city_id' => 8236,
                ),
            281 =>
                array (
                    'id' => 782,
                    'country_id' => 96,
                    'name_fr' => 'Риу-Гранди-ду-Норти',
                    'name_en' => 'Rio Grande do Norte',
                    
                    'regional_center_city_id' => 8239,
                ),
            282 =>
                array (
                    'id' => 783,
                    'country_id' => 96,
                    'name_fr' => 'Риу-Гранди-ду-Сул',
                    'name_en' => 'Rio Grande do Sul',
                    
                    'regional_center_city_id' => 8247,
                ),
            283 =>
                array (
                    'id' => 784,
                    'country_id' => 96,
                    'name_fr' => 'Рондония',
                    'name_en' => 'Rondônia',
                    
                    'regional_center_city_id' => 8253,
                ),
            284 =>
                array (
                    'id' => 785,
                    'country_id' => 96,
                    'name_fr' => 'Сан-Паулу',
                    'name_en' => 'Sao Paulo',
                    
                    'regional_center_city_id' => 8272,
                ),
            285 =>
                array (
                    'id' => 786,
                    'country_id' => 96,
                    'name_fr' => 'Санта-Катарина',
                    'name_en' => 'Santa Catarina',
                    
                    'regional_center_city_id' => 8284,
                ),
            286 =>
                array (
                    'id' => 787,
                    'country_id' => 96,
                    'name_fr' => 'Сеара',
                    'name_en' => 'Ceara',
                    
                    'regional_center_city_id' => 8289,
                ),
            287 =>
                array (
                    'id' => 788,
                    'country_id' => 96,
                    'name_fr' => 'Сержипи',
                    'name_en' => 'Sergipe',
                    
                    'regional_center_city_id' => 8290,
                ),
            288 =>
                array (
                    'id' => 789,
                    'country_id' => 96,
                    'name_fr' => 'Федеральный округ Бразилиа',
                    'name_en' => 'Federal district Brazil',
                    
                    'regional_center_city_id' => 8291,
                ),
            289 =>
                array (
                    'id' => 790,
                    'country_id' => 96,
                    'name_fr' => 'Эспириту-Санту',
                    'name_en' => 'Espirito Santo',
                    
                    'regional_center_city_id' => NULL,
                ),
            290 =>
                array (
                    'id' => 791,
                    'country_id' => 97,
                    'name_fr' => 'O-ва Мадейра',
                    'name_en' => 'Madeira',
                    
                    'regional_center_city_id' => 8294,
                ),
            291 =>
                array (
                    'id' => 792,
                    'country_id' => 97,
                    'name_fr' => 'Лисабон',
                    'name_en' => 'Lisbon',
                    
                    'regional_center_city_id' => 8296,
                ),
            292 =>
                array (
                    'id' => 793,
                    'country_id' => 97,
                    'name_fr' => 'Орта',
                    'name_en' => 'Orta',
                    
                    'regional_center_city_id' => NULL,
                ),
            293 =>
                array (
                    'id' => 794,
                    'country_id' => 97,
                    'name_fr' => 'Фаро',
                    'name_en' => 'Faro',
                    
                    'regional_center_city_id' => NULL,
                ),
            294 =>
                array (
                    'id' => 795,
                    'country_id' => 98,
                    'name_fr' => 'Парамарибо',
                    'name_en' => 'Paramaribo',
                    
                    'regional_center_city_id' => 8304,
                ),
            295 =>
                array (
                    'id' => 796,
                    'country_id' => 99,
                    'name_fr' => 'Сантьяго',
                    'name_en' => 'Santiago',
                    
                    'regional_center_city_id' => NULL,
                ),
            296 =>
                array (
                    'id' => 797,
                    'country_id' => 100,
                    'name_fr' => 'Перу',
                    'name_en' => 'Peru',
                    
                    'regional_center_city_id' => NULL,
                ),
            297 =>
                array (
                    'id' => 798,
                    'country_id' => 102,
                    'name_fr' => 'Виктория',
                    'name_en' => 'Victoria',
                    
                    'regional_center_city_id' => 8313,
                ),
            298 =>
                array (
                    'id' => 799,
                    'country_id' => 102,
                    'name_fr' => 'Западная Австралия',
                    'name_en' => 'Western Australia',
                    
                    'regional_center_city_id' => 8322,
                ),
            299 =>
                array (
                    'id' => 800,
                    'country_id' => 102,
                    'name_fr' => 'Кинсленд',
                    'name_en' => 'Kinsland',
                    
                    'regional_center_city_id' => 8323,
                ),
            300 =>
                array (
                    'id' => 801,
                    'country_id' => 102,
                    'name_fr' => 'Новый Южный Уэльс',
                    'name_en' => 'New South Wales',
                    
                    'regional_center_city_id' => 8347,
                ),
            301 =>
                array (
                    'id' => 802,
                    'country_id' => 102,
                    'name_fr' => 'Северная Территория',
                    'name_en' => 'Northern Territory',
                    
                    'regional_center_city_id' => 8350,
                ),
            302 =>
                array (
                    'id' => 803,
                    'country_id' => 102,
                    'name_fr' => 'Тасмания',
                    'name_en' => 'Tasmania',
                    
                    'regional_center_city_id' => 8353,
                ),
            303 =>
                array (
                    'id' => 804,
                    'country_id' => 102,
                    'name_fr' => 'Территория Федеральной столицы',
                    'name_en' => 'Capital Territory',
                    
                    'regional_center_city_id' => 8354,
                ),
            304 =>
                array (
                    'id' => 805,
                    'country_id' => 102,
                    'name_fr' => 'Южная Австралия',
                    'name_en' => 'South Australia',
                    
                    'regional_center_city_id' => 8355,
                ),
            305 =>
                array (
                    'id' => 806,
                    'country_id' => 102,
                    'name_fr' => 'erg',
                    'name_en' => 'erg',
                    
                    'regional_center_city_id' => NULL,
                ),
            306 =>
                array (
                    'id' => 807,
                    'country_id' => 103,
                    'name_fr' => 'О́кленд',
                    'name_en' => 'Auckland',
                    
                    'regional_center_city_id' => 8358,
                ),
            307 =>
                array (
                    'id' => 808,
                    'country_id' => 103,
                    'name_fr' => 'Бей-оф-Пленти',
                    'name_en' => 'Bay of Plenty',
                    
                    'regional_center_city_id' => 8361,
                ),
            308 =>
                array (
                    'id' => 809,
                    'country_id' => 103,
                    'name_fr' => 'Кентербери',
                    'name_en' => 'Canterbury',
                    
                    'regional_center_city_id' => 8364,
                ),
            309 =>
                array (
                    'id' => 810,
                    'country_id' => 103,
                    'name_fr' => 'Гисборн',
                    'name_en' => 'Gisborne',
                    
                    'regional_center_city_id' => 8365,
                ),
            310 =>
                array (
                    'id' => 811,
                    'country_id' => 103,
                    'name_fr' => 'Хокс-Бей',
                    'name_en' => 'Hawke`s Bay',
                    
                    'regional_center_city_id' => 8366,
                ),
            311 =>
                array (
                    'id' => 812,
                    'country_id' => 103,
                    'name_fr' => 'Манавату-Уангануи',
                    'name_en' => 'Manawatu-Wanganui',
                    
                    'regional_center_city_id' => 8368,
                ),
            312 =>
                array (
                    'id' => 813,
                    'country_id' => 103,
                    'name_fr' => 'Ма́рлборо',
                    'name_en' => 'Marlborough',
                    
                    'regional_center_city_id' => 8371,
                ),
            313 =>
                array (
                    'id' => 814,
                    'country_id' => 103,
                    'name_fr' => 'Нельсон',
                    'name_en' => 'Nelson',
                    
                    'regional_center_city_id' => 8372,
                ),
            314 =>
                array (
                    'id' => 815,
                    'country_id' => 103,
                    'name_fr' => 'Нортленд',
                    'name_en' => 'Northland',
                    
                    'regional_center_city_id' => 8373,
                ),
            315 =>
                array (
                    'id' => 816,
                    'country_id' => 103,
                    'name_fr' => 'Отаго',
                    'name_en' => 'Otago',
                    
                    'regional_center_city_id' => 8375,
                ),
            316 =>
                array (
                    'id' => 817,
                    'country_id' => 103,
                    'name_fr' => 'Саутленд',
                    'name_en' => 'Southland',
                    
                    'regional_center_city_id' => 8377,
                ),
            317 =>
                array (
                    'id' => 818,
                    'country_id' => 103,
                    'name_fr' => 'Таранаки',
                    'name_en' => 'Taranaki',
                    
                    'regional_center_city_id' => 8378,
                ),
            318 =>
                array (
                    'id' => 819,
                    'country_id' => 103,
                    'name_fr' => 'Тасман',
                    'name_en' => 'Tasman',
                    
                    'regional_center_city_id' => 8380,
                ),
            319 =>
                array (
                    'id' => 820,
                    'country_id' => 103,
                    'name_fr' => 'Уаикато',
                    'name_en' => 'Waikato',
                    
                    'regional_center_city_id' => 8381,
                ),
            320 =>
                array (
                    'id' => 821,
                    'country_id' => 103,
                    'name_fr' => 'Веллингтон',
                    'name_en' => 'Wellington',
                    
                    'regional_center_city_id' => 8383,
                ),
            321 =>
                array (
                    'id' => 822,
                    'country_id' => 103,
                    'name_fr' => 'Уэст-Кост',
                    'name_en' => 'West Coast',
                    
                    'regional_center_city_id' => 8386,
                ),
            322 =>
                array (
                    'id' => 823,
                    'country_id' => 104,
                    'name_fr' => 'Алтайский край',
                    'name_en' => 'Altai region',
                    
                    'regional_center_city_id' => 8402,
                ),
            323 =>
                array (
                    'id' => 824,
                    'country_id' => 104,
                    'name_fr' => 'Амурская область',
                    'name_en' => 'Amur region',
                    
                    'regional_center_city_id' => 8452,
                ),
            324 =>
                array (
                    'id' => 825,
                    'country_id' => 104,
                    'name_fr' => 'Архангельская область',
                    'name_en' => 'Arkhangelsk region',
                    
                    'regional_center_city_id' => 8477,
                ),
            325 =>
                array (
                    'id' => 826,
                    'country_id' => 104,
                    'name_fr' => 'Астраханская область',
                    'name_en' => 'Astrakhan region',
                    
                    'regional_center_city_id' => 8507,
                ),
            326 =>
                array (
                    'id' => 827,
                    'country_id' => 104,
                    'name_fr' => 'Башкортостан(Башкирия)',
                    'name_en' => 'Bashkortostan (Bashkiria)',
                    
                    'regional_center_city_id' => 8568,
                ),
            327 =>
                array (
                    'id' => 828,
                    'country_id' => 104,
                    'name_fr' => 'Белгородская область',
                    'name_en' => 'Belgorod region',
                    
                    'regional_center_city_id' => 8577,
                ),
            328 =>
                array (
                    'id' => 829,
                    'country_id' => 104,
                    'name_fr' => 'Брянская область',
                    'name_en' => 'Bryansk region',
                    
                    'regional_center_city_id' => 8598,
                ),
            329 =>
                array (
                    'id' => 830,
                    'country_id' => 104,
                    'name_fr' => 'Бурятия',
                    'name_en' => 'Buryatia',
                    
                    'regional_center_city_id' => 8657,
                ),
            330 =>
                array (
                    'id' => 831,
                    'country_id' => 104,
                    'name_fr' => 'Владимирская область',
                    'name_en' => 'Vladimir region',
                    
                    'regional_center_city_id' => 8669,
                ),
            331 =>
                array (
                    'id' => 832,
                    'country_id' => 104,
                    'name_fr' => 'Волгоградская область',
                    'name_en' => 'Volgograd region',
                    
                    'regional_center_city_id' => 8694,
                ),
            332 =>
                array (
                    'id' => 833,
                    'country_id' => 104,
                    'name_fr' => 'Вологодская область',
                    'name_en' => 'Vologda Region',
                    
                    'regional_center_city_id' => 8731,
                ),
            333 =>
                array (
                    'id' => 834,
                    'country_id' => 104,
                    'name_fr' => 'Воронежская область',
                    'name_en' => 'Voronezh region',
                    
                    'regional_center_city_id' => 8759,
                ),
            334 =>
                array (
                    'id' => 835,
                    'country_id' => 104,
                    'name_fr' => 'Нижегородская (Горьковская)',
                    'name_en' => 'Nizhny Novgorod (Gorky)',
                    
                    'regional_center_city_id' => 8833,
                ),
            335 =>
                array (
                    'id' => 836,
                    'country_id' => 104,
                    'name_fr' => 'Дагестан',
                    'name_en' => 'Dagestan',
                    
                    'regional_center_city_id' => 8879,
                ),
            336 =>
                array (
                    'id' => 837,
                    'country_id' => 104,
                    'name_fr' => 'Еврейская область',
                    'name_en' => 'Jewish region',
                    
                    'regional_center_city_id' => 8894,
                ),
            337 =>
                array (
                    'id' => 838,
                    'country_id' => 104,
                    'name_fr' => 'Ивановская область',
                    'name_en' => 'Ivanovo region',
                    
                    'regional_center_city_id' => 8903,
                ),
            338 =>
                array (
                    'id' => 839,
                    'country_id' => 104,
                    'name_fr' => 'Иркутская область',
                    'name_en' => 'Irkutsk region',
                    
                    'regional_center_city_id' => 8950,
                ),
            339 =>
                array (
                    'id' => 840,
                    'country_id' => 104,
                    'name_fr' => 'Кабардино-Балкария',
                    'name_en' => 'Kabardino-Balkaria',
                    
                    'regional_center_city_id' => 8975,
                ),
            340 =>
                array (
                    'id' => 841,
                    'country_id' => 104,
                    'name_fr' => 'Калининградская область',
                    'name_en' => 'Kaliningrad region',
                    
                    'regional_center_city_id' => 8990,
                ),
            341 =>
                array (
                    'id' => 842,
                    'country_id' => 104,
                    'name_fr' => 'Тверская область',
                    'name_en' => 'Tver region',
                    
                    'regional_center_city_id' => 9043,
                ),
            342 =>
                array (
                    'id' => 843,
                    'country_id' => 104,
                    'name_fr' => 'Калмыкия',
                    'name_en' => 'Kalmykia',
                    
                    'regional_center_city_id' => 9057,
                ),
            343 =>
                array (
                    'id' => 844,
                    'country_id' => 104,
                    'name_fr' => 'Калужская область',
                    'name_en' => 'Kaluga region',
                    
                    'regional_center_city_id' => 9073,
                ),
            344 =>
                array (
                    'id' => 845,
                    'country_id' => 104,
                    'name_fr' => 'Камчатская область',
                    'name_en' => 'Kamchatka region',
                    
                    'regional_center_city_id' => 9105,
                ),
            345 =>
                array (
                    'id' => 846,
                    'country_id' => 104,
                    'name_fr' => 'Карелия',
                    'name_en' => 'Karelia',
                    
                    'regional_center_city_id' => 9132,
                ),
            346 =>
                array (
                    'id' => 847,
                    'country_id' => 104,
                    'name_fr' => 'Кемеровская область',
                    'name_en' => 'Kemerovo region',
                    
                    'regional_center_city_id' => 9152,
                ),
            347 =>
                array (
                    'id' => 848,
                    'country_id' => 104,
                    'name_fr' => 'Кировская область',
                    'name_en' => 'Kirov region',
                    
                    'regional_center_city_id' => 9181,
                ),
            348 =>
                array (
                    'id' => 849,
                    'country_id' => 104,
                    'name_fr' => 'Коми',
                    'name_en' => 'Komi',
                    
                    'regional_center_city_id' => 9237,
                ),
            349 =>
                array (
                    'id' => 850,
                    'country_id' => 104,
                    'name_fr' => 'Костромская область',
                    'name_en' => 'Kostroma region',
                    
                    'regional_center_city_id' => 9253,
                ),
            350 =>
                array (
                    'id' => 851,
                    'country_id' => 104,
                    'name_fr' => 'Краснодарский край',
                    'name_en' => 'Krasnodar region',
                    
                    'regional_center_city_id' => 9295,
                ),
            351 =>
                array (
                    'id' => 852,
                    'country_id' => 104,
                    'name_fr' => 'Красноярский край',
                    'name_en' => 'Krasnoyarsk region',
                    
                    'regional_center_city_id' => 9365,
                ),
            352 =>
                array (
                    'id' => 853,
                    'country_id' => 104,
                    'name_fr' => 'Курганская область',
                    'name_en' => 'Kurgan region',
                    
                    'regional_center_city_id' => 9403,
                ),
            353 =>
                array (
                    'id' => 854,
                    'country_id' => 104,
                    'name_fr' => 'Курская область',
                    'name_en' => 'Kursk region',
                    
                    'regional_center_city_id' => 9429,
                ),
            354 =>
                array (
                    'id' => 855,
                    'country_id' => 104,
                    'name_fr' => 'Липецкая область',
                    'name_en' => 'Lipetsk region',
                    
                    'regional_center_city_id' => 9456,
                ),
            355 =>
                array (
                    'id' => 856,
                    'country_id' => 104,
                    'name_fr' => 'Магаданская область',
                    'name_en' => 'Magadan region',
                    
                    'regional_center_city_id' => 9471,
                ),
            356 =>
                array (
                    'id' => 857,
                    'country_id' => 104,
                    'name_fr' => 'Марий Эл',
                    'name_en' => 'Mari El',
                    
                    'regional_center_city_id' => 9490,
                ),
            357 =>
                array (
                    'id' => 858,
                    'country_id' => 104,
                    'name_fr' => 'Мордовия',
                    'name_en' => 'Mordovia',
                    
                    'regional_center_city_id' => 9521,
                ),
            358 =>
                array (
                    'id' => 859,
                    'country_id' => 104,
                    'name_fr' => 'Москва и Московская область',
                    'name_en' => 'Moscow and Moscow region',
                    
                    'regional_center_city_id' => 9614,
                ),
            359 =>
                array (
                    'id' => 860,
                    'country_id' => 104,
                    'name_fr' => 'Мурманская область',
                    'name_en' => 'Murmansk region',
                    
                    'regional_center_city_id' => 9713,
                ),
            360 =>
                array (
                    'id' => 861,
                    'country_id' => 104,
                    'name_fr' => 'Новгородская область',
                    'name_en' => 'Novgorod region',
                    
                    'regional_center_city_id' => 9736,
                ),
            361 =>
                array (
                    'id' => 862,
                    'country_id' => 104,
                    'name_fr' => 'Новосибирская область',
                    'name_en' => 'Novosibirsk region',
                    
                    'regional_center_city_id' => 9767,
                ),
            362 =>
                array (
                    'id' => 863,
                    'country_id' => 104,
                    'name_fr' => 'Омская область',
                    'name_en' => 'Omsk region',
                    
                    'regional_center_city_id' => 9797,
                ),
            363 =>
                array (
                    'id' => 864,
                    'country_id' => 104,
                    'name_fr' => 'Оренбургская область',
                    'name_en' => 'Orenburg region',
                    
                    'regional_center_city_id' => 9833,
                ),
            364 =>
                array (
                    'id' => 865,
                    'country_id' => 104,
                    'name_fr' => 'Орловская область',
                    'name_en' => 'Oryol region',
                    
                    'regional_center_city_id' => 9865,
                ),
            365 =>
                array (
                    'id' => 866,
                    'country_id' => 104,
                    'name_fr' => 'Пензенская область',
                    'name_en' => 'Penza region',
                    
                    'regional_center_city_id' => 9896,
                ),
            366 =>
                array (
                    'id' => 867,
                    'country_id' => 104,
                    'name_fr' => 'Пермская область',
                    'name_en' => 'Perm region',
                    
                    'regional_center_city_id' => 9933,
                ),
            367 =>
                array (
                    'id' => 868,
                    'country_id' => 104,
                    'name_fr' => 'Приморский край',
                    'name_en' => 'Primorsky region',
                    
                    'regional_center_city_id' => 9953,
                ),
            368 =>
                array (
                    'id' => 869,
                    'country_id' => 104,
                    'name_fr' => 'Псковская область',
                    'name_en' => 'Pskov region',
                    
                    'regional_center_city_id' => 10005,
                ),
            369 =>
                array (
                    'id' => 870,
                    'country_id' => 104,
                    'name_fr' => 'Ростовская область',
                    'name_en' => 'Rostov region',
                    
                    'regional_center_city_id' => 10058,
                ),
            370 =>
                array (
                    'id' => 871,
                    'country_id' => 104,
                    'name_fr' => 'Рязанская область',
                    'name_en' => 'Ryazan region',
                    
                    'regional_center_city_id' => 10089,
                ),
            371 =>
                array (
                    'id' => 872,
                    'country_id' => 104,
                    'name_fr' => 'Самарская область',
                    'name_en' => 'Samara region',
                    
                    'regional_center_city_id' => 10126,
                ),
            372 =>
                array (
                    'id' => 873,
                    'country_id' => 104,
                    'name_fr' => 'Санкт-Петербург и область',
                    'name_en' => 'St. Petersburg and the region',
                    
                    'regional_center_city_id' => 10171,
                ),
            373 =>
                array (
                    'id' => 874,
                    'country_id' => 104,
                    'name_fr' => 'Саратовская область',
                    'name_en' => 'Saratov region',
                    
                    'regional_center_city_id' => 10215,
                ),
            374 =>
                array (
                    'id' => 875,
                    'country_id' => 104,
                    'name_fr' => 'Саха (Якутия)',
                    'name_en' => 'Sakha (Yakutia)',
                    
                    'regional_center_city_id' => 10260,
                ),
            375 =>
                array (
                    'id' => 876,
                    'country_id' => 104,
                    'name_fr' => 'Сахалин',
                    'name_en' => 'Sakhalin',
                    
                    'regional_center_city_id' => 10287,
                ),
            376 =>
                array (
                    'id' => 877,
                    'country_id' => 104,
                    'name_fr' => 'Свердловская область',
                    'name_en' => 'Sverdlovsk region',
                    
                    'regional_center_city_id' => 10314,
                ),
            377 =>
                array (
                    'id' => 878,
                    'country_id' => 104,
                    'name_fr' => 'Северная Осетия',
                    'name_en' => 'North Ossetia',
                    
                    'regional_center_city_id' => 10365,
                ),
            378 =>
                array (
                    'id' => 879,
                    'country_id' => 104,
                    'name_fr' => 'Смоленская область',
                    'name_en' => 'Smolensk region',
                    
                    'regional_center_city_id' => 10392,
                ),
            379 =>
                array (
                    'id' => 880,
                    'country_id' => 104,
                    'name_fr' => 'Ставропольский край',
                    'name_en' => 'Stavropol region',
                    
                    'regional_center_city_id' => 10427,
                ),
            380 =>
                array (
                    'id' => 881,
                    'country_id' => 104,
                    'name_fr' => 'Тамбовская область',
                    'name_en' => 'Tambov region',
                    
                    'regional_center_city_id' => 10453,
                ),
            381 =>
                array (
                    'id' => 882,
                    'country_id' => 104,
                    'name_fr' => 'Татарстан',
                    'name_en' => 'Tatarstan',
                    
                    'regional_center_city_id' => 10480,
                ),
            382 =>
                array (
                    'id' => 883,
                    'country_id' => 104,
                    'name_fr' => 'Томская область',
                    'name_en' => 'Tomsk region',
                    
                    'regional_center_city_id' => 10520,
                ),
            383 =>
                array (
                    'id' => 884,
                    'country_id' => 104,
                    'name_fr' => 'Тува (Тувинская Респ.)',
                    'name_en' => 'Tuva (Republic of Tuva).',
                    
                    'regional_center_city_id' => 10525,
                ),
            384 =>
                array (
                    'id' => 885,
                    'country_id' => 104,
                    'name_fr' => 'Тульская область',
                    'name_en' => 'Tula region',
                    
                    'regional_center_city_id' => 10561,
                ),
            385 =>
                array (
                    'id' => 886,
                    'country_id' => 104,
                    'name_fr' => 'Тюменская область',
                    'name_en' => 'Tyumen region',
                    'regional_center_city_id' => 10604,
                ),
            386 =>
                array (
                    'id' => 887,
                    'country_id' => 104,
                    'name_fr' => 'Удмуртия',
                    'name_en' => 'Udmurtia',
                    
                    'regional_center_city_id' => 10630,
                ),
            387 =>
                array (
                    'id' => 888,
                    'country_id' => 104,
                    'name_fr' => 'Ульяновская область',
                    'name_en' => 'Ulyanovsk region',
                    
                    'regional_center_city_id' => 10671,
                ),
            388 =>
                array (
                    'id' => 889,
                    'country_id' => 104,
                    'name_fr' => 'Хабаровский край',
                    'name_en' => 'Khabarovsk region',
                    
                    'regional_center_city_id' => 10703,
                ),
            389 =>
                array (
                    'id' => 890,
                    'country_id' => 104,
                    'name_fr' => 'Челябинская область',
                    'name_en' => 'Chelyabinsk region',
                    
                    'regional_center_city_id' => 10737,
                ),
            390 =>
                array (
                    'id' => 891,
                    'country_id' => 104,
                    'name_fr' => 'Чечено-Ингушетия',
                    'name_en' => 'Chechen-Ingushetia',
                    
                    'regional_center_city_id' => 10745,
                ),
            391 =>
                array (
                    'id' => 892,
                    'country_id' => 104,
                    'name_fr' => 'Забайкальский край',
                    'name_en' => 'Transbaikal region',
                    
                    'regional_center_city_id' => 10796,
                ),
            392 =>
                array (
                    'id' => 893,
                    'country_id' => 104,
                    'name_fr' => 'Чувашия',
                    'name_en' => 'Chuvashia',
                    
                    'regional_center_city_id' => 10817,
                ),
            393 =>
                array (
                    'id' => 894,
                    'country_id' => 104,
                    'name_fr' => 'Ярославская область',
                    'name_en' => 'Yaroslavl region',
                    
                    'regional_center_city_id' => 10843,
                ),
            394 =>
                array (
                    'id' => 895,
                    'country_id' => 104,
                    'name_fr' => 'Адыгея',
                    'name_en' => 'Adygea',
                    
                    'regional_center_city_id' => NULL,
                ),
            395 =>
                array (
                    'id' => 896,
                    'country_id' => 104,
                    'name_fr' => 'Хакасия',
                    'name_en' => 'Khakassia',
                    
                    'regional_center_city_id' => NULL,
                ),
            396 =>
                array (
                    'id' => 897,
                    'country_id' => 104,
                    'name_fr' => 'Чукотский АО',
                    'name_en' => 'Chukotka',
                    
                    'regional_center_city_id' => NULL,
                ),
            397 =>
                array (
                    'id' => 898,
                    'country_id' => 104,
                    'name_fr' => 'Ханты-Мансийский АО',
                    'name_en' => 'the Khanty-Mansi Autonomous Area',
                    
                    'regional_center_city_id' => NULL,
                ),
            398 =>
                array (
                    'id' => 899,
                    'country_id' => 104,
                    'name_fr' => 'Ямало-Ненецкий АО',
                    'name_en' => 'Yamal-Nenets autonomous',
                    
                    'regional_center_city_id' => NULL,
                ),
        )));


        \DB::statement('ALTER SEQUENCE regions_id_seq RESTART WITH 950;');
    }
}
