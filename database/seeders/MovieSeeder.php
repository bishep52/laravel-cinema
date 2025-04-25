<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run()
    {
        $movies = [
            [
                'title' => 'Начало',
                'description' => 'Вор, крадущий корпоративные секреты через использование технологии погружения в сны...',
                'duration' => 148,
                'country' => 'США',
                'release_date' => '2010-07-16',
                'rating' => 8.8,
                'poster' => 'posters/nachalo.png',
            ],
            [
                'title' => 'Побег из Шоушенка',
                'description' => 'История дружбы двух заключенных, которые находят утешение в надежде...',
                'duration' => 142,
                'country' => 'США',
                'release_date' => '1994-09-23',
                'rating' => 9.3,
                'poster' => 'posters/pobeg.webp',
            ],
            [
                'title' => 'Крёстный отец',
                'description' => 'История семьи мафиози под руководством Вито Корлеоне...',
                'duration' => 175,
                'country' => 'США',
                'release_date' => '1972-03-24',
                'rating' => 9.2,
                'poster' => 'posters/godfather.webp',
            ],
            [
                'title' => 'Тёмный рыцарь',
                'description' => 'Бэтмен против Джокера в борьбе за будущее Готэма...',
                'duration' => 152,
                'country' => 'США',
                'release_date' => '2008-07-18',
                'rating' => 9.0,
                'poster' => 'posters/ricar.jpg',
            ],
            [
                'title' => 'Форрест Гамп',
                'description' => 'История жизни простого человека, который невольно становится частью великих событий...',
                'duration' => 142,
                'country' => 'США',
                'release_date' => '1994-06-23',
                'rating' => 8.8,
                'poster' => 'posters/forest.jpg',
            ],
            [
                'title' => 'Матрица',
                'description' => 'Программист узнаёт, что реальность — это симуляция, созданная машинами...',
                'duration' => 136,
                'country' => 'США',
                'release_date' => '1999-03-31',
                'rating' => 8.7,
                'poster' => 'posters/matrica.webp',
            ],
            [
                'title' => 'Гладиатор',
                'description' => 'Римский генерал, превращённый в раба, стремится отомстить за свою семью...',
                'duration' => 155,
                'country' => 'США',
                'release_date' => '2000-05-01',
                'rating' => 8.5,
                'poster' => 'posters/gladiator.jpg',
            ],
            [
                'title' => 'Джентльмены',
                'description' => 'Приключения криминального авторитета, пытающегося продать свой бизнес...',
                'duration' => 113,
                'country' => 'Великобритания',
                'release_date' => '2019-12-03',
                'rating' => 8.0,
                'poster' => 'posters/grennmile.webp',
            ],
            [
                'title' => 'Зелёная миля',
                'description' => 'История надзирателя тюрьмы и необычного заключённого с удивительными способностями...',
                'duration' => 189,
                'country' => 'США',
                'release_date' => '1999-12-10',
                'rating' => 9.0,
                'poster' => 'posters/grennmile.webp',
            ],
            [
                'title' => 'Хороший, плохой, злой',
                'description' => 'Три охотника за головами в поисках украденного золота во время Гражданской войны...',
                'duration' => 178,
                'country' => 'Италия',
                'release_date' => '1966-12-23',
                'rating' => 8.8,
                'poster' => 'posters/goodbad.jpg',
            ],
            [
                'title' => 'Список Шиндлера',
                'description' => 'История немецкого бизнесмена, спасшего более тысячи евреев во время Холокоста...',
                'duration' => 195,
                'country' => 'США',
                'release_date' => '1993-11-30',
                'rating' => 8.9,
                'poster' => 'https://example.com/poster11.jpg',
            ],
            [
                'title' => '1+1',
                'description' => 'История дружбы между миллионером-инвалидом и его помощником...',
                'duration' => 112,
                'country' => 'Франция',
                'release_date' => '2011-09-23',
                'rating' => 8.5,
                'poster' => 'https://example.com/poster12.jpg',
            ],
            [
                'title' => 'Бойцовский клуб',
                'description' => 'История человека, создающего подпольный клуб для борьбы с рутиной жизни...',
                'duration' => 139,
                'country' => 'США',
                'release_date' => '1999-10-15',
                'rating' => 8.8,
                'poster' => 'https://example.com/poster13.jpg',
            ],
            [
                'title' => 'Криминальное чтиво',
                'description' => 'История двух наёмных убийц и их приключений в Лос-Анджелесе...',
                'duration' => 154,
                'country' => 'США',
                'release_date' => '1994-05-21',
                'rating' => 8.9,
                'poster' => 'https://example.com/poster14.jpg',
            ],
            [
                'title' => 'Жизнь прекрасна',
                'description' => 'История отца, который защищает сына от ужасов концлагеря...',
                'duration' => 116,
                'country' => 'Италия',
                'release_date' => '1997-12-20',
                'rating' => 8.6,
                'poster' => 'https://example.com/poster15.jpg',
            ],
            [
                'title' => 'Интерстеллар',
                'description' => 'Группа исследователей отправляется в путешествие через червоточину...',
                'duration' => 169,
                'country' => 'США',
                'release_date' => '2014-11-07',
                'rating' => 8.6,
                'poster' => 'https://example.com/poster16.jpg',
            ],
            [
                'title' => 'Леон',
                'description' => 'История наёмного убийцы и девочки, которая хочет отомстить за семью...',
                'duration' => 110,
                'country' => 'Франция',
                'release_date' => '1994-09-14',
                'rating' => 8.5,
                'poster' => 'https://example.com/poster17.jpg',
            ],
            [
                'title' => 'Стражи Галактики',
                'description' => 'Группа космических авантюристов объединяется для защиты вселенной...',
                'duration' => 121,
                'country' => 'США',
                'release_date' => '2014-07-31',
                'rating' => 8.0,
                'poster' => 'https://example.com/poster18.jpg',
            ],
            [
                'title' => 'Омерзительная восьмёрка',
                'description' => 'Группа незнакомцев оказывается в ловушке в хижине во время метели...',
                'duration' => 168,
                'country' => 'США',
                'release_date' => '2015-12-25',
                'rating' => 7.8,
                'poster' => 'https://example.com/poster19.jpg',
            ],
            [
                'title' => 'Довод',
                'description' => 'Шпионская история с элементами перемещения во времени...',
                'duration' => 150,
                'country' => 'США',
                'release_date' => '2020-09-03',
                'rating' => 7.3,
                'poster' => 'https://example.com/poster20.jpg',
            ],
        ];

        foreach ($movies as $movieData) {
            Movie::create($movieData);
        }
    }
}
