<?php

namespace Database\Seeders;

use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $category = [
            0 =>
                array(
                    'id' => 1,
                    'name' => 'India',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
//            1 =>
//                array(
//                    'id' => 2,
//                    'short_name' => 'AL',
//                    'name' => 'Albania',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            2 =>
//                array(
//                    'id' => 3,
//                    'short_name' => 'DZ',
//                    'name' => 'Algeria',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            3 =>
//                array(
//                    'id' => 4,
//                    'short_name' => 'AS',
//                    'name' => 'American Samoa',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            4 =>
//                array(
//                    'id' => 5,
//                    'short_name' => 'AD',
//                    'name' => 'Andorra',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            5 =>
//                array(
//                    'id' => 6,
//                    'short_name' => 'AO',
//                    'name' => 'Angola',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            6 =>
//                array(
//                    'id' => 7,
//                    'short_name' => 'AI',
//                    'name' => 'Anguilla',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            7 =>
//                array(
//                    'id' => 8,
//                    'short_name' => 'AQ',
//                    'name' => 'Antarctica',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            8 =>
//                array(
//                    'id' => 9,
//                    'short_name' => 'AG',
//                    'name' => 'Antigua And Barbuda',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            9 =>
//                array(
//                    'id' => 10,
//                    'short_name' => 'AR',
//                    'name' => 'Argentina',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            10 =>
//                array(
//                    'id' => 11,
//                    'short_name' => 'AM',
//                    'name' => 'Armenia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            11 =>
//                array(
//                    'id' => 12,
//                    'short_name' => 'AW',
//                    'name' => 'Aruba',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            12 =>
//                array(
//                    'id' => 13,
//                    'short_name' => 'AU',
//                    'name' => 'Australia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            13 =>
//                array(
//                    'id' => 14,
//                    'short_name' => 'AT',
//                    'name' => 'Austria',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            14 =>
//                array(
//                    'id' => 15,
//                    'short_name' => 'AZ',
//                    'name' => 'Azerbaijan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            15 =>
//                array(
//                    'id' => 16,
//                    'short_name' => 'BS',
//                    'name' => 'Bahamas The',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            16 =>
//                array(
//                    'id' => 17,
//                    'short_name' => 'BH',
//                    'name' => 'Bahrain',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            17 =>
//                array(
//                    'id' => 18,
//                    'short_name' => 'BD',
//                    'name' => 'Bangladesh',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            18 =>
//                array(
//                    'id' => 19,
//                    'short_name' => 'BB',
//                    'name' => 'Barbados',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            19 =>
//                array(
//                    'id' => 20,
//                    'short_name' => 'BY',
//                    'name' => 'Belarus',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            20 =>
//                array(
//                    'id' => 21,
//                    'short_name' => 'BE',
//                    'name' => 'Belgium',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            21 =>
//                array(
//                    'id' => 22,
//                    'short_name' => 'BZ',
//                    'name' => 'Belize',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            22 =>
//                array(
//                    'id' => 23,
//                    'short_name' => 'BJ',
//                    'name' => 'Benin',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            23 =>
//                array(
//                    'id' => 24,
//                    'short_name' => 'BM',
//                    'name' => 'Bermuda',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            24 =>
//                array(
//                    'id' => 25,
//                    'short_name' => 'BT',
//                    'name' => 'Bhutan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            25 =>
//                array(
//                    'id' => 26,
//                    'short_name' => 'BO',
//                    'name' => 'Bolivia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            26 =>
//                array(
//                    'id' => 27,
//                    'short_name' => 'BA',
//                    'name' => 'Bosnia and Herzegovina',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            27 =>
//                array(
//                    'id' => 28,
//                    'short_name' => 'BW',
//                    'name' => 'Botswana',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            28 =>
//                array(
//                    'id' => 29,
//                    'short_name' => 'BV',
//                    'name' => 'Bouvet Island',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            29 =>
//                array(
//                    'id' => 30,
//                    'short_name' => 'BR',
//                    'name' => 'Brazil',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            30 =>
//                array(
//                    'id' => 31,
//                    'short_name' => 'IO',
//                    'name' => 'British Indian Ocean Territory',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            31 =>
//                array(
//                    'id' => 32,
//                    'short_name' => 'BN',
//                    'name' => 'Brunei',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            32 =>
//                array(
//                    'id' => 33,
//                    'short_name' => 'BG',
//                    'name' => 'Bulgaria',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            33 =>
//                array(
//                    'id' => 34,
//                    'short_name' => 'BF',
//                    'name' => 'Burkina Faso',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            34 =>
//                array(
//                    'id' => 35,
//                    'short_name' => 'BI',
//                    'name' => 'Burundi',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            35 =>
//                array(
//                    'id' => 36,
//                    'short_name' => 'KH',
//                    'name' => 'Cambodia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            36 =>
//                array(
//                    'id' => 37,
//                    'short_name' => 'CM',
//                    'name' => 'Cameroon',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            37 =>
//                array(
//                    'id' => 38,
//                    'short_name' => 'CA',
//                    'name' => 'Canada',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            38 =>
//                array(
//                    'id' => 39,
//                    'short_name' => 'CV',
//                    'name' => 'Cape Verde',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            39 =>
//                array(
//                    'id' => 40,
//                    'short_name' => 'KY',
//                    'name' => 'Cayman Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            40 =>
//                array(
//                    'id' => 41,
//                    'short_name' => 'CF',
//                    'name' => 'Central African Republic',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            41 =>
//                array(
//                    'id' => 42,
//                    'short_name' => 'TD',
//                    'name' => 'Chad',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            42 =>
//                array(
//                    'id' => 43,
//                    'short_name' => 'CL',
//                    'name' => 'Chile',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            43 =>
//                array(
//                    'id' => 44,
//                    'short_name' => 'CN',
//                    'name' => 'China',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            44 =>
//                array(
//                    'id' => 45,
//                    'short_name' => 'CX',
//                    'name' => 'Christmas Island',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            45 =>
//                array(
//                    'id' => 46,
//                    'short_name' => 'CC',
//                    'name' => 'Cocos (Keeling) Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            46 =>
//                array(
//                    'id' => 47,
//                    'short_name' => 'CO',
//                    'name' => 'Colombia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            47 =>
//                array(
//                    'id' => 48,
//                    'short_name' => 'KM',
//                    'name' => 'Comoros',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            48 =>
//                array(
//                    'id' => 49,
//                    'short_name' => 'CG',
//                    'name' => 'Republic Of The Congo',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            49 =>
//                array(
//                    'id' => 50,
//                    'short_name' => 'CD',
//                    'name' => 'Democratic Republic Of The Congo',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            50 =>
//                array(
//                    'id' => 51,
//                    'short_name' => 'CK',
//                    'name' => 'Cook Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            51 =>
//                array(
//                    'id' => 52,
//                    'short_name' => 'CR',
//                    'name' => 'Costa Rica',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            52 =>
//                array(
//                    'id' => 53,
//                    'short_name' => 'CI',
//                    'name' => 'Cote D\'Ivoire (Ivory Coast)',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            53 =>
//                array(
//                    'id' => 54,
//                    'short_name' => 'HR',
//                    'name' => 'Croatia (Hrvatska)',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            54 =>
//                array(
//                    'id' => 55,
//                    'short_name' => 'CU',
//                    'name' => 'Cuba',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            55 =>
//                array(
//                    'id' => 56,
//                    'short_name' => 'CY',
//                    'name' => 'Cyprus',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            56 =>
//                array(
//                    'id' => 57,
//                    'short_name' => 'CZ',
//                    'name' => 'Czech Republic',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            57 =>
//                array(
//                    'id' => 58,
//                    'short_name' => 'DK',
//                    'name' => 'Denmark',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            58 =>
//                array(
//                    'id' => 59,
//                    'short_name' => 'DJ',
//                    'name' => 'Djibouti',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            59 =>
//                array(
//                    'id' => 60,
//                    'short_name' => 'DM',
//                    'name' => 'Dominica',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            60 =>
//                array(
//                    'id' => 61,
//                    'short_name' => 'DO',
//                    'name' => 'Dominican Republic',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            61 =>
//                array(
//                    'id' => 62,
//                    'short_name' => 'TP',
//                    'name' => 'East Timor',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            62 =>
//                array(
//                    'id' => 63,
//                    'short_name' => 'EC',
//                    'name' => 'Ecuador',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            63 =>
//                array(
//                    'id' => 64,
//                    'short_name' => 'EG',
//                    'name' => 'Egypt',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            64 =>
//                array(
//                    'id' => 65,
//                    'short_name' => 'SV',
//                    'name' => 'El Salvador',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            65 =>
//                array(
//                    'id' => 66,
//                    'short_name' => 'GQ',
//                    'name' => 'Equatorial Guinea',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            66 =>
//                array(
//                    'id' => 67,
//                    'short_name' => 'ER',
//                    'name' => 'Eritrea',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            67 =>
//                array(
//                    'id' => 68,
//                    'short_name' => 'EE',
//                    'name' => 'Estonia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            68 =>
//                array(
//                    'id' => 69,
//                    'short_name' => 'ET',
//                    'name' => 'Ethiopia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            69 =>
//                array(
//                    'id' => 70,
//                    'short_name' => 'XA',
//                    'name' => 'External Territories of Australia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            70 =>
//                array(
//                    'id' => 71,
//                    'short_name' => 'FK',
//                    'name' => 'Falkland Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            71 =>
//                array(
//                    'id' => 72,
//                    'short_name' => 'FO',
//                    'name' => 'Faroe Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            72 =>
//                array(
//                    'id' => 73,
//                    'short_name' => 'FJ',
//                    'name' => 'Fiji Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            73 =>
//                array(
//                    'id' => 74,
//                    'short_name' => 'FI',
//                    'name' => 'Finland',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            74 =>
//                array(
//                    'id' => 75,
//                    'short_name' => 'FR',
//                    'name' => 'France',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            75 =>
//                array(
//                    'id' => 76,
//                    'short_name' => 'GF',
//                    'name' => 'French Guiana',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            76 =>
//                array(
//                    'id' => 77,
//                    'short_name' => 'PF',
//                    'name' => 'French Polynesia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            77 =>
//                array(
//                    'id' => 78,
//                    'short_name' => 'TF',
//                    'name' => 'French Southern Territories',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            78 =>
//                array(
//                    'id' => 79,
//                    'short_name' => 'GA',
//                    'name' => 'Gabon',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            79 =>
//                array(
//                    'id' => 80,
//                    'short_name' => 'GM',
//                    'name' => 'Gambia The',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            80 =>
//                array(
//                    'id' => 81,
//                    'short_name' => 'GE',
//                    'name' => 'Georgia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            81 =>
//                array(
//                    'id' => 82,
//                    'short_name' => 'DE',
//                    'name' => 'Germany',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            82 =>
//                array(
//                    'id' => 83,
//                    'short_name' => 'GH',
//                    'name' => 'Ghana',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            83 =>
//                array(
//                    'id' => 84,
//                    'short_name' => 'GI',
//                    'name' => 'Gibraltar',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            84 =>
//                array(
//                    'id' => 85,
//                    'short_name' => 'GR',
//                    'name' => 'Greece',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            85 =>
//                array(
//                    'id' => 86,
//                    'short_name' => 'GL',
//                    'name' => 'Greenland',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            86 =>
//                array(
//                    'id' => 87,
//                    'short_name' => 'GD',
//                    'name' => 'Grenada',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            87 =>
//                array(
//                    'id' => 88,
//                    'short_name' => 'GP',
//                    'name' => 'Guadeloupe',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            88 =>
//                array(
//                    'id' => 89,
//                    'short_name' => 'GU',
//                    'name' => 'Guam',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            89 =>
//                array(
//                    'id' => 90,
//                    'short_name' => 'GT',
//                    'name' => 'Guatemala',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            90 =>
//                array(
//                    'id' => 91,
//                    'short_name' => 'XU',
//                    'name' => 'Guernsey and Alderney',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            91 =>
//                array(
//                    'id' => 92,
//                    'short_name' => 'GN',
//                    'name' => 'Guinea',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            92 =>
//                array(
//                    'id' => 93,
//                    'short_name' => 'GW',
//                    'name' => 'Guinea-Bissau',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            93 =>
//                array(
//                    'id' => 94,
//                    'short_name' => 'GY',
//                    'name' => 'Guyana',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            94 =>
//                array(
//                    'id' => 95,
//                    'short_name' => 'HT',
//                    'name' => 'Haiti',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            95 =>
//                array(
//                    'id' => 96,
//                    'short_name' => 'HM',
//                    'name' => 'Heard and McDonald Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            96 =>
//                array(
//                    'id' => 97,
//                    'short_name' => 'HN',
//                    'name' => 'Honduras',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            97 =>
//                array(
//                    'id' => 98,
//                    'short_name' => 'HK',
//                    'name' => 'Hong Kong S.A.R.',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            98 =>
//                array(
//                    'id' => 99,
//                    'short_name' => 'HU',
//                    'name' => 'Hungary',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            99 =>
//                array(
//                    'id' => 100,
//                    'short_name' => 'IS',
//                    'name' => 'Iceland',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            100 =>
//                array(
//                    'id' => 101,
//                    'short_name' => 'IN',
//                    'name' => 'India',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            101 =>
//                array(
//                    'id' => 102,
//                    'short_name' => 'ID',
//                    'name' => 'Indonesia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            102 =>
//                array(
//                    'id' => 103,
//                    'short_name' => 'IR',
//                    'name' => 'Iran',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            103 =>
//                array(
//                    'id' => 104,
//                    'short_name' => 'IQ',
//                    'name' => 'Iraq',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            104 =>
//                array(
//                    'id' => 105,
//                    'short_name' => 'IE',
//                    'name' => 'Ireland',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            105 =>
//                array(
//                    'id' => 106,
//                    'short_name' => 'IL',
//                    'name' => 'Israel',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            106 =>
//                array(
//                    'id' => 107,
//                    'short_name' => 'IT',
//                    'name' => 'Italy',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            107 =>
//                array(
//                    'id' => 108,
//                    'short_name' => 'JM',
//                    'name' => 'Jamaica',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            108 =>
//                array(
//                    'id' => 109,
//                    'short_name' => 'JP',
//                    'name' => 'Japan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            109 =>
//                array(
//                    'id' => 110,
//                    'short_name' => 'XJ',
//                    'name' => 'Jersey',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            110 =>
//                array(
//                    'id' => 111,
//                    'short_name' => 'JO',
//                    'name' => 'Jordan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            111 =>
//                array(
//                    'id' => 112,
//                    'short_name' => 'KZ',
//                    'name' => 'Kazakhstan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            112 =>
//                array(
//                    'id' => 113,
//                    'short_name' => 'KE',
//                    'name' => 'Kenya',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            113 =>
//                array(
//                    'id' => 114,
//                    'short_name' => 'KI',
//                    'name' => 'Kiribati',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            114 =>
//                array(
//                    'id' => 115,
//                    'short_name' => 'KP',
//                    'name' => 'Korea North',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            115 =>
//                array(
//                    'id' => 116,
//                    'short_name' => 'KR',
//                    'name' => 'Korea South',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            116 =>
//                array(
//                    'id' => 117,
//                    'short_name' => 'KW',
//                    'name' => 'Kuwait',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            117 =>
//                array(
//                    'id' => 118,
//                    'short_name' => 'KG',
//                    'name' => 'Kyrgyzstan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            118 =>
//                array(
//                    'id' => 119,
//                    'short_name' => 'LA',
//                    'name' => 'Laos',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            119 =>
//                array(
//                    'id' => 120,
//                    'short_name' => 'LV',
//                    'name' => 'Latvia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            120 =>
//                array(
//                    'id' => 121,
//                    'short_name' => 'LB',
//                    'name' => 'Lebanon',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            121 =>
//                array(
//                    'id' => 122,
//                    'short_name' => 'LS',
//                    'name' => 'Lesotho',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            122 =>
//                array(
//                    'id' => 123,
//                    'short_name' => 'LR',
//                    'name' => 'Liberia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            123 =>
//                array(
//                    'id' => 124,
//                    'short_name' => 'LY',
//                    'name' => 'Libya',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            124 =>
//                array(
//                    'id' => 125,
//                    'short_name' => 'LI',
//                    'name' => 'Liechtenstein',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            125 =>
//                array(
//                    'id' => 126,
//                    'short_name' => 'LT',
//                    'name' => 'Lithuania',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            126 =>
//                array(
//                    'id' => 127,
//                    'short_name' => 'LU',
//                    'name' => 'Luxembourg',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            127 =>
//                array(
//                    'id' => 128,
//                    'short_name' => 'MO',
//                    'name' => 'Macau S.A.R.',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            128 =>
//                array(
//                    'id' => 129,
//                    'short_name' => 'MK',
//                    'name' => 'Macedonia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            129 =>
//                array(
//                    'id' => 130,
//                    'short_name' => 'MG',
//                    'name' => 'Madagascar',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            130 =>
//                array(
//                    'id' => 131,
//                    'short_name' => 'MW',
//                    'name' => 'Malawi',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            131 =>
//                array(
//                    'id' => 132,
//                    'short_name' => 'MY',
//                    'name' => 'Malaysia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            132 =>
//                array(
//                    'id' => 133,
//                    'short_name' => 'MV',
//                    'name' => 'Maldives',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            133 =>
//                array(
//                    'id' => 134,
//                    'short_name' => 'ML',
//                    'name' => 'Mali',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            134 =>
//                array(
//                    'id' => 135,
//                    'short_name' => 'MT',
//                    'name' => 'Malta',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            135 =>
//                array(
//                    'id' => 136,
//                    'short_name' => 'XM',
//                    'name' => 'Man (Isle of)',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            136 =>
//                array(
//                    'id' => 137,
//                    'short_name' => 'MH',
//                    'name' => 'Marshall Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            137 =>
//                array(
//                    'id' => 138,
//                    'short_name' => 'MQ',
//                    'name' => 'Martinique',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            138 =>
//                array(
//                    'id' => 139,
//                    'short_name' => 'MR',
//                    'name' => 'Mauritania',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            139 =>
//                array(
//                    'id' => 140,
//                    'short_name' => 'MU',
//                    'name' => 'Mauritius',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            140 =>
//                array(
//                    'id' => 141,
//                    'short_name' => 'YT',
//                    'name' => 'Mayotte',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            141 =>
//                array(
//                    'id' => 142,
//                    'short_name' => 'MX',
//                    'name' => 'Mexico',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            142 =>
//                array(
//                    'id' => 143,
//                    'short_name' => 'FM',
//                    'name' => 'Micronesia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            143 =>
//                array(
//                    'id' => 144,
//                    'short_name' => 'MD',
//                    'name' => 'Moldova',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            144 =>
//                array(
//                    'id' => 145,
//                    'short_name' => 'MC',
//                    'name' => 'Monaco',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            145 =>
//                array(
//                    'id' => 146,
//                    'short_name' => 'MN',
//                    'name' => 'Mongolia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            146 =>
//                array(
//                    'id' => 147,
//                    'short_name' => 'MS',
//                    'name' => 'Montserrat',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            147 =>
//                array(
//                    'id' => 148,
//                    'short_name' => 'MA',
//                    'name' => 'Morocco',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            148 =>
//                array(
//                    'id' => 149,
//                    'short_name' => 'MZ',
//                    'name' => 'Mozambique',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            149 =>
//                array(
//                    'id' => 150,
//                    'short_name' => 'MM',
//                    'name' => 'Myanmar',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            150 =>
//                array(
//                    'id' => 151,
//                    'short_name' => 'NA',
//                    'name' => 'Namibia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            151 =>
//                array(
//                    'id' => 152,
//                    'short_name' => 'NR',
//                    'name' => 'Nauru',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            152 =>
//                array(
//                    'id' => 153,
//                    'short_name' => 'NP',
//                    'name' => 'Nepal',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            153 =>
//                array(
//                    'id' => 154,
//                    'short_name' => 'AN',
//                    'name' => 'Netherlands Antilles',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            154 =>
//                array(
//                    'id' => 155,
//                    'short_name' => 'NL',
//                    'name' => 'Netherlands The',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            155 =>
//                array(
//                    'id' => 156,
//                    'short_name' => 'NC',
//                    'name' => 'New Caledonia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            156 =>
//                array(
//                    'id' => 157,
//                    'short_name' => 'NZ',
//                    'name' => 'New Zealand',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            157 =>
//                array(
//                    'id' => 158,
//                    'short_name' => 'NI',
//                    'name' => 'Nicaragua',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            158 =>
//                array(
//                    'id' => 159,
//                    'short_name' => 'NE',
//                    'name' => 'Niger',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            159 =>
//                array(
//                    'id' => 160,
//                    'short_name' => 'NG',
//                    'name' => 'Nigeria',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            160 =>
//                array(
//                    'id' => 161,
//                    'short_name' => 'NU',
//                    'name' => 'Niue',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            161 =>
//                array(
//                    'id' => 162,
//                    'short_name' => 'NF',
//                    'name' => 'Norfolk Island',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            162 =>
//                array(
//                    'id' => 163,
//                    'short_name' => 'MP',
//                    'name' => 'Northern Mariana Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            163 =>
//                array(
//                    'id' => 164,
//                    'short_name' => 'NO',
//                    'name' => 'Norway',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            164 =>
//                array(
//                    'id' => 165,
//                    'short_name' => 'OM',
//                    'name' => 'Oman',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            165 =>
//                array(
//                    'id' => 166,
//                    'short_name' => 'PK',
//                    'name' => 'Pakistan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            166 =>
//                array(
//                    'id' => 167,
//                    'short_name' => 'PW',
//                    'name' => 'Palau',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            167 =>
//                array(
//                    'id' => 168,
//                    'short_name' => 'PS',
//                    'name' => 'Palestinian Territory Occupied',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            168 =>
//                array(
//                    'id' => 169,
//                    'short_name' => 'PA',
//                    'name' => 'Panama',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            169 =>
//                array(
//                    'id' => 170,
//                    'short_name' => 'PG',
//                    'name' => 'Papua new Guinea',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            170 =>
//                array(
//                    'id' => 171,
//                    'short_name' => 'PY',
//                    'name' => 'Paraguay',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            171 =>
//                array(
//                    'id' => 172,
//                    'short_name' => 'PE',
//                    'name' => 'Peru',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            172 =>
//                array(
//                    'id' => 173,
//                    'short_name' => 'PH',
//                    'name' => 'Philippines',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            173 =>
//                array(
//                    'id' => 174,
//                    'short_name' => 'PN',
//                    'name' => 'Pitcairn Island',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            174 =>
//                array(
//                    'id' => 175,
//                    'short_name' => 'PL',
//                    'name' => 'Poland',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            175 =>
//                array(
//                    'id' => 176,
//                    'short_name' => 'PT',
//                    'name' => 'Portugal',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            176 =>
//                array(
//                    'id' => 177,
//                    'short_name' => 'PR',
//                    'name' => 'Puerto Rico',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            177 =>
//                array(
//                    'id' => 178,
//                    'short_name' => 'QA',
//                    'name' => 'Qatar',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            178 =>
//                array(
//                    'id' => 179,
//                    'short_name' => 'RE',
//                    'name' => 'Reunion',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            179 =>
//                array(
//                    'id' => 180,
//                    'short_name' => 'RO',
//                    'name' => 'Romania',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            180 =>
//                array(
//                    'id' => 181,
//                    'short_name' => 'RU',
//                    'name' => 'Russia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            181 =>
//                array(
//                    'id' => 182,
//                    'short_name' => 'RW',
//                    'name' => 'Rwanda',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            182 =>
//                array(
//                    'id' => 183,
//                    'short_name' => 'SH',
//                    'name' => 'Saint Helena',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            183 =>
//                array(
//                    'id' => 184,
//                    'short_name' => 'KN',
//                    'name' => 'Saint Kitts And Nevis',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            184 =>
//                array(
//                    'id' => 185,
//                    'short_name' => 'LC',
//                    'name' => 'Saint Lucia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            185 =>
//                array(
//                    'id' => 186,
//                    'short_name' => 'PM',
//                    'name' => 'Saint Pierre and Miquelon',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            186 =>
//                array(
//                    'id' => 187,
//                    'short_name' => 'VC',
//                    'name' => 'Saint Vincent And The Grenadines',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            187 =>
//                array(
//                    'id' => 188,
//                    'short_name' => 'WS',
//                    'name' => 'Samoa',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            188 =>
//                array(
//                    'id' => 189,
//                    'short_name' => 'SM',
//                    'name' => 'San Marino',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            189 =>
//                array(
//                    'id' => 190,
//                    'short_name' => 'ST',
//                    'name' => 'Sao Tome and Principe',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            190 =>
//                array(
//                    'id' => 191,
//                    'short_name' => 'SA',
//                    'name' => 'Saudi Arabia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            191 =>
//                array(
//                    'id' => 192,
//                    'short_name' => 'SN',
//                    'name' => 'Senegal',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            192 =>
//                array(
//                    'id' => 193,
//                    'short_name' => 'RS',
//                    'name' => 'Serbia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            193 =>
//                array(
//                    'id' => 194,
//                    'short_name' => 'SC',
//                    'name' => 'Seychelles',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            194 =>
//                array(
//                    'id' => 195,
//                    'short_name' => 'SL',
//                    'name' => 'Sierra Leone',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            195 =>
//                array(
//                    'id' => 196,
//                    'short_name' => 'SG',
//                    'name' => 'Singapore',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            196 =>
//                array(
//                    'id' => 197,
//                    'short_name' => 'SK',
//                    'name' => 'Slovakia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            197 =>
//                array(
//                    'id' => 198,
//                    'short_name' => 'SI',
//                    'name' => 'Slovenia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            198 =>
//                array(
//                    'id' => 199,
//                    'short_name' => 'XG',
//                    'name' => 'Smaller Territories of the UK',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            199 =>
//                array(
//                    'id' => 200,
//                    'short_name' => 'SB',
//                    'name' => 'Solomon Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            200 =>
//                array(
//                    'id' => 201,
//                    'short_name' => 'SO',
//                    'name' => 'Somalia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            201 =>
//                array(
//                    'id' => 202,
//                    'short_name' => 'ZA',
//                    'name' => 'South Africa',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            202 =>
//                array(
//                    'id' => 203,
//                    'short_name' => 'GS',
//                    'name' => 'South Georgia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            203 =>
//                array(
//                    'id' => 204,
//                    'short_name' => 'SS',
//                    'name' => 'South Sudan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            204 =>
//                array(
//                    'id' => 205,
//                    'short_name' => 'ES',
//                    'name' => 'Spain',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            205 =>
//                array(
//                    'id' => 206,
//                    'short_name' => 'LK',
//                    'name' => 'Sri Lanka',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            206 =>
//                array(
//                    'id' => 207,
//                    'short_name' => 'SD',
//                    'name' => 'Sudan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            207 =>
//                array(
//                    'id' => 208,
//                    'short_name' => 'SR',
//                    'name' => 'Suriname',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            208 =>
//                array(
//                    'id' => 209,
//                    'short_name' => 'SJ',
//                    'name' => 'Svalbard And Jan Mayen Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            209 =>
//                array(
//                    'id' => 210,
//                    'short_name' => 'SZ',
//                    'name' => 'Swaziland',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            210 =>
//                array(
//                    'id' => 211,
//                    'short_name' => 'SE',
//                    'name' => 'Sweden',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            211 =>
//                array(
//                    'id' => 212,
//                    'short_name' => 'CH',
//                    'name' => 'Switzerland',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            212 =>
//                array(
//                    'id' => 213,
//                    'short_name' => 'SY',
//                    'name' => 'Syria',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            213 =>
//                array(
//                    'id' => 214,
//                    'short_name' => 'TW',
//                    'name' => 'Taiwan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            214 =>
//                array(
//                    'id' => 215,
//                    'short_name' => 'TJ',
//                    'name' => 'Tajikistan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            215 =>
//                array(
//                    'id' => 216,
//                    'short_name' => 'TZ',
//                    'name' => 'Tanzania',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            216 =>
//                array(
//                    'id' => 217,
//                    'short_name' => 'TH',
//                    'name' => 'Thailand',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            217 =>
//                array(
//                    'id' => 218,
//                    'short_name' => 'TG',
//                    'name' => 'Togo',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            218 =>
//                array(
//                    'id' => 219,
//                    'short_name' => 'TK',
//                    'name' => 'Tokelau',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            219 =>
//                array(
//                    'id' => 220,
//                    'short_name' => 'TO',
//                    'name' => 'Tonga',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            220 =>
//                array(
//                    'id' => 221,
//                    'short_name' => 'TT',
//                    'name' => 'Trinidad And Tobago',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            221 =>
//                array(
//                    'id' => 222,
//                    'short_name' => 'TN',
//                    'name' => 'Tunisia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            222 =>
//                array(
//                    'id' => 223,
//                    'short_name' => 'TR',
//                    'name' => 'Turkey',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            223 =>
//                array(
//                    'id' => 224,
//                    'short_name' => 'TM',
//                    'name' => 'Turkmenistan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            224 =>
//                array(
//                    'id' => 225,
//                    'short_name' => 'TC',
//                    'name' => 'Turks And Caicos Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            225 =>
//                array(
//                    'id' => 226,
//                    'short_name' => 'TV',
//                    'name' => 'Tuvalu',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            226 =>
//                array(
//                    'id' => 227,
//                    'short_name' => 'UG',
//                    'name' => 'Uganda',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            227 =>
//                array(
//                    'id' => 228,
//                    'short_name' => 'UA',
//                    'name' => 'Ukraine',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            228 =>
//                array(
//                    'id' => 229,
//                    'short_name' => 'AE',
//                    'name' => 'United Arab Emirates',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            229 =>
//                array(
//                    'id' => 230,
//                    'short_name' => 'GB',
//                    'name' => 'United Kingdom',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            230 =>
//                array(
//                    'id' => 231,
//                    'short_name' => 'US',
//                    'name' => 'United States',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            231 =>
//                array(
//                    'id' => 232,
//                    'short_name' => 'UM',
//                    'name' => 'United States Minor Outlying Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            232 =>
//                array(
//                    'id' => 233,
//                    'short_name' => 'UY',
//                    'name' => 'Uruguay',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            233 =>
//                array(
//                    'id' => 234,
//                    'short_name' => 'UZ',
//                    'name' => 'Uzbekistan',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            234 =>
//                array(
//                    'id' => 235,
//                    'short_name' => 'VU',
//                    'name' => 'Vanuatu',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            235 =>
//                array(
//                    'id' => 236,
//                    'short_name' => 'VA',
//                    'name' => 'Vatican City State (Holy See)',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            236 =>
//                array(
//                    'id' => 237,
//                    'short_name' => 'VE',
//                    'name' => 'Venezuela',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            237 =>
//                array(
//                    'id' => 238,
//                    'short_name' => 'VN',
//                    'name' => 'Vietnam',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            238 =>
//                array(
//                    'id' => 239,
//                    'short_name' => 'VG',
//                    'name' => 'Virgin Islands (British)',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            239 =>
//                array(
//                    'id' => 240,
//                    'short_name' => 'VI',
//                    'name' => 'Virgin Islands (US)',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            240 =>
//                array(
//                    'id' => 241,
//                    'short_name' => 'WF',
//                    'name' => 'Wallis And Futuna Islands',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            241 =>
//                array(
//                    'id' => 242,
//                    'short_name' => 'EH',
//                    'name' => 'Western Sahara',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            242 =>
//                array(
//                    'id' => 243,
//                    'short_name' => 'YE',
//                    'name' => 'Yemen',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            243 =>
//                array(
//                    'id' => 244,
//                    'short_name' => 'YU',
//                    'name' => 'Yugoslavia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            244 =>
//                array(
//                    'id' => 245,
//                    'short_name' => 'ZM',
//                    'name' => 'Zambia',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
//            245 =>
//                array(
//                    'id' => 246,
//                    'short_name' => 'ZW',
//                    'name' => 'Zimbabwe',
//                    'created_at' => '2021-10-05 14:01:21',
//                    'updated_at' => '2021-10-05 14:01:21',
//                ),
        ];
        Country::insert($category);
    }
}
