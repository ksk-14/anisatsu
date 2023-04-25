<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insert_data = array(
            array(
                'anime_id'   => 9696,
                'room_title' => '黒幕は誰だと思う？',
                'episode'    => 1,
            ),
            array(
                'anime_id'   => 9696,
                'room_title' => 'アクアの名前の由来について',
                'episode'    => 1,
            ),
            array(
                'anime_id'   => 9696,
                'room_title' => 'ルビーの前世はいつ死んだのか',
                'episode'    => 1,
            ),
            array(
                'anime_id'   => 9696,
                'room_title' => '有馬かなの過去',
                'episode'    => 2,
            ),
            array(
                'anime_id'   => 9696,
                'room_title' => 'アイの旦那死んでる説',
                'episode'    => 2,
            ),
        );
        foreach($insert_data as $data){
            Room::create([
                'anime_id'   => $data['anime_id'],
                'room_title' => $data['room_title'],
                'episode'    => $data['episode'],
            ]);
        }
    }
}
