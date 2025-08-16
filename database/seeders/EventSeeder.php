<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = json_decode(file_get_contents(public_path('seeder/events.json')), true);
        $now = Carbon::now();
        $images = json_decode(file_get_contents(public_path('seeder/images.json')));

        foreach ($events as $event) {
            $rand = rand(0, 34);

            DB::table('events')->insert(
                [
                    'title'         => $event['title'],
                    'description'   => $event['description'],
                    'event_date'    => $event['date'],
                    'created_at'    => $now,
                    'address'       => $event['address'],
                    'contacts'      => '8 (314) 502-9782',
                    'image'         => 'https://sxodim.com' . $images[$rand][1]->content,
                    'original_link' => 'https://sxodim.com/almaty/event/simfonicheskoe-shou-pticy-16-sentyabrya',
                    'updated_at'    => $now
                ]
            );
        }
    }
}
