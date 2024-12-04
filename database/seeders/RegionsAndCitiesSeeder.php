<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Region;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionsAndCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Намери ID на държавата "България"
        $bulgaria = Country::where('name', 'България')->first();

        if (!$bulgaria) {
            // Хвърли грешка, ако държавата не е намерена
            throw new Exception("Country 'България' не е намерена в таблицата countries.");
        }

        $locations = [
            'София-град' => [
                ['city' => 'София', 'postal_code' => '1000'],
                ['city' => 'Банкя', 'postal_code' => '1320'],
                ['city' => 'Нови Искър', 'postal_code' => '1280'],
            ],
            'Пловдив' => [
                ['city' => 'Пловдив', 'postal_code' => '4000'],
                ['city' => 'Асеновград', 'postal_code' => '4230'],
                ['city' => 'Карлово', 'postal_code' => '4300'],
            ],
            'Варна' => [
                ['city' => 'Варна', 'postal_code' => '9000'],
                ['city' => 'Девня', 'postal_code' => '9160'],
                ['city' => 'Белослав', 'postal_code' => '9150'],
            ],
            'Бургас' => [
                ['city' => 'Бургас', 'postal_code' => '8000'],
                ['city' => 'Созопол', 'postal_code' => '8130'],
                ['city' => 'Поморие', 'postal_code' => '8200'],
            ],
            'Русе' => [
                ['city' => 'Русе', 'postal_code' => '7000'],
                ['city' => 'Бяла', 'postal_code' => '7100'],
                ['city' => 'Мартен', 'postal_code' => '7058'],
            ],
            'Стара Загора' => [
                ['city' => 'Стара Загора', 'postal_code' => '6000'],
                ['city' => 'Казанлък', 'postal_code' => '6100'],
                ['city' => 'Раднево', 'postal_code' => '6260'],
            ],
            'Плевен' => [
                ['city' => 'Плевен', 'postal_code' => '5800'],
                ['city' => 'Левски', 'postal_code' => '5900'],
                ['city' => 'Кнежа', 'postal_code' => '5835'],
            ],
            'Благоевград' => [
                ['city' => 'Благоевград', 'postal_code' => '2700'],
                ['city' => 'Сандански', 'postal_code' => '2800'],
                ['city' => 'Петрич', 'postal_code' => '2850'],
            ],
            'Велико Търново' => [
                ['city' => 'Велико Търново', 'postal_code' => '5000'],
                ['city' => 'Горна Оряховица', 'postal_code' => '5100'],
                ['city' => 'Свищов', 'postal_code' => '5250'],
            ],
            'Враца' => [
                ['city' => 'Враца', 'postal_code' => '3000'],
                ['city' => 'Мездра', 'postal_code' => '3100'],
                ['city' => 'Оряхово', 'postal_code' => '3300'],
            ],
            'Габрово' => [
                ['city' => 'Габрово', 'postal_code' => '5300'],
                ['city' => 'Севлиево', 'postal_code' => '5400'],
                ['city' => 'Дряново', 'postal_code' => '5370'],
            ],
            'Кърджали' => [
                ['city' => 'Кърджали', 'postal_code' => '6600'],
                ['city' => 'Момчилград', 'postal_code' => '6800'],
                ['city' => 'Ардино', 'postal_code' => '6750'],
            ],
            'Кюстендил' => [
                ['city' => 'Кюстендил', 'postal_code' => '2500'],
                ['city' => 'Дупница', 'postal_code' => '2600'],
                ['city' => 'Рила', 'postal_code' => '2630'],
            ],
            'Ловеч' => [
                ['city' => 'Ловеч', 'postal_code' => '5500'],
                ['city' => 'Троян', 'postal_code' => '5600'],
                ['city' => 'Луковит', 'postal_code' => '5770'],
            ],
            'Монтана' => [
                ['city' => 'Монтана', 'postal_code' => '3400'],
                ['city' => 'Лом', 'postal_code' => '3600'],
                ['city' => 'Берковица', 'postal_code' => '3500'],
            ],
            'Пазарджик' => [
                ['city' => 'Пазарджик', 'postal_code' => '4400'],
                ['city' => 'Велинград', 'postal_code' => '4600'],
                ['city' => 'Панагюрище', 'postal_code' => '4500'],
            ],
            'Перник' => [
                ['city' => 'Перник', 'postal_code' => '2300'],
                ['city' => 'Радомир', 'postal_code' => '2400'],
                ['city' => 'Брезник', 'postal_code' => '2360'],
            ],
            'Разград' => [
                ['city' => 'Разград', 'postal_code' => '7200'],
                ['city' => 'Исперих', 'postal_code' => '7400'],
                ['city' => 'Цар Калоян', 'postal_code' => '7280'],
            ],
            'Силистра' => [
                ['city' => 'Силистра', 'postal_code' => '7500'],
                ['city' => 'Дулово', 'postal_code' => '7650'],
                ['city' => 'Алфатар', 'postal_code' => '7570'],
            ],
            'Смолян' => [
                ['city' => 'Смолян', 'postal_code' => '4700'],
                ['city' => 'Девин', 'postal_code' => '4800'],
                ['city' => 'Чепеларе', 'postal_code' => '4850'],
            ],
            'Търговище' => [
                ['city' => 'Търговище', 'postal_code' => '7700'],
                ['city' => 'Попово', 'postal_code' => '7800'],
                ['city' => 'Омуртаг', 'postal_code' => '7900'],
            ],
            'Шумен' => [
                ['city' => 'Шумен', 'postal_code' => '9700'],
                ['city' => 'Нови пазар', 'postal_code' => '9900'],
                ['city' => 'Велики Преслав', 'postal_code' => '9850'],
            ],
            'Ямбол' => [
                ['city' => 'Ямбол', 'postal_code' => '8600'],
                ['city' => 'Елхово', 'postal_code' => '8700'],
                ['city' => 'Стралджа', 'postal_code' => '8880'],
            ],
        ];


        foreach ($locations as $regionName => $cities) {
            // Създай регион и добави country_id
            $region = Region::create([
                'name' => $regionName,
                'country_id' => $bulgaria->id, // Свържи с ID на България
            ]);

            foreach ($cities as $city) {
                // Създай градове, свързани с региона
                City::create([
                    'name' => $city['city'],
                    'postal_code' => $city['postal_code'],
                    'region_id' => $region->id,
                ]);
            }
        }
    }
}
