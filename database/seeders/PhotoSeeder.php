<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = [
            [
                'category_id' => 1,
                'url' => 'https://placeimg.com/640/480/arch',
                'width' => 640,
                'height' => 480,
                'title' => "aliquid nihil totam",
                'description' => 'Aliquip esse irure velit consectetur ea aliquip deserunt id cupidatat mollit eu. Laboris sit culpa ex magna nisi ad et. Sunt proident nulla sit veniam tempor occaecat commodo aute enim quis in cillum veniam reprehenderit. Sunt culpa ad ipsum minim deserunt veniam eiusmod est occaecat cillum qui. Ipsum laboris nisi fugiat irure sit voluptate voluptate pariatur qui adipisicing consectetur.',
                'date' => '2020-10-10',
                'location' => 'Husugvu, Christmas Island'
            ],[
                'category_id' => 1,
                'url' => 'https://placeimg.com/640/480/arch',
                'width' => 640,
                'height' => 480,
                'title' => "consectetur ad mollitia",
                'description' => 'Proident ad amet velit minim cillum duis irure ipsum quis dolore. Aliqua ea cillum veniam incididunt pariatur nostrud laborum esse sunt. Occaecat aute anim ipsum ut cillum sint duis commodo anim qui officia ex dolor. Fugiat irure cupidatat minim tempor labore non tempor esse minim dolore qui quis nulla ipsum.',
                'date' => '2020-10-10',
                'location' => 'Vutikbil, Lebanon'
            ],[
                'category_id' => 1,
                'url' => 'https://placeimg.com/640/480/arch',
                'width' => 640,
                'height' => 480,
                'title' => "quam rerum libero",
                'description' => 'Cupidatat cupidatat adipisicing laboris sint labore nulla ipsum dolore eiusmod reprehenderit. Deserunt voluptate laboris pariatur deserunt quis nostrud nulla. Dolor pariatur pariatur mollit consectetur eu. Irure commodo quis fugiat cillum incididunt. Excepteur labore ipsum ad tempor aliqua ut duis proident voluptate. In do quis dolore exercitation enim dolor non commodo aute adipisicing et.',
                'date' => '2020-10-10',
                'location' => 'Sunozegot, Guinea-Bissau'
            ],[
                'category_id' => 1,
                'url' => 'https://placeimg.com/640/480/arch',
                'width' => 640,
                'height' => 480,
                'title' => "cum autem animi",
                'description' => 'Officia veniam dolor tempor laborum laborum et nisi excepteur ea magna do ex incididunt eu. Fugiat anim tempor aute ea est sit non mollit nostrud. Excepteur deserunt culpa nostrud amet ullamco non ullamco labore occaecat in velit magna laborum. Elit nisi laborum labore est nostrud elit ea nulla exercitation duis Lorem sit elit nulla. Proident aute commodo officia excepteur exercitation laboris ex laborum ea est. Ipsum cupidatat do cillum ut deserunt pariatur eiusmod exercitation sint nulla ex do.',
                'date' => '2020-10-10',
                'location' => 'Hulausa, Jersey'
            ],[
                'category_id' => 2,
                'url' => 'https://placeimg.com/640/480/arch',
                'width' => 640,
                'height' => 480,
                'title' => "dolores neque neque",
                'description' => 'In consectetur elit ullamco excepteur aliquip labore deserunt aliqua amet consequat sunt id labore in. Ad do cupidatat ad nostrud ullamco aute magna labore tempor ipsum quis sit aliquip. Non officia elit magna voluptate exercitation ullamco enim cillum aliquip. Tempor voluptate ea minim excepteur dolore adipisicing. Magna ea ipsum nostrud dolor ad consectetur sint tempor aute sunt eiusmod sint. Pariatur consectetur cupidatat veniam ullamco reprehenderit. Deserunt culpa culpa ut dolor.',
                'date' => '2020-10-10',
                'location' => 'Rouhguh, Singapore'
            ],
        ];

        foreach ($photos as $photo) {
            Photo::create(array(
                'category_id' => $photo['category_id'],
                'url' => $photo['url'],
                'width' => $photo['width'],
                'height' => $photo['height'],
                'title' => $photo['title'],
                'description' => $photo['description'],
                'date' => $photo['date'],
                'location' => $photo['location']
            ));
        }
    }
}
