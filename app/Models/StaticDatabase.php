<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticDatabase extends Model
{
    use HasFactory;

    public static function getArts()
    {
        return collect([
            // (object)[
            //     'key' => 'not_applicable',
            //     'name' => 'Not Applicable',
            // ],
            (object)[
                'key' => 'actor',
                'name' => 'Actor',
            ],
            (object)[
                'key' => 'model',
                'name' => 'Model',
            ],
            (object)[
                'key' => 'dance',
                'name' => 'Dance',
            ],
            (object)[
                'key' => 'singing',
                'name' => 'Singing',
            ],
            (object)[
                'key' => 'magician',
                'name' => 'Magician',
            ],
            (object)[
                'key' => 'bounce',
                'name' => 'Bounce',
            ],
            (object)[
                'key' => 'fire_play',
                'name' => 'Fire-Play',
            ],
            (object)[
                'key' => 'fitness',
                'name' => 'Fitness',
            ],
            (object)[
                'key' => 'running',
                'name' => 'Running',
            ],
            (object)[
                'key' => 'cycling',
                'name' => 'Cycling',
            ],
            (object)[
                'key' => 'parachuting',
                'name' => 'Parachuting',
            ],
            (object)[
                'key' => 'dj',
                'name' => 'DJ',
            ],
            (object)[
                'key' => 'instrumental',
                'name' => 'Instrumental',
            ],
            (object)[
                'key' => 'drifting',
                'name' => 'Drifting',
            ],
            (object)[
                'key' => 'iq',
                'name' => 'IQ',
            ],
            (object)[
                'key' => 'climbing',
                'name' => 'Climbing',
            ],
            // (object)[
            //     'key' => 'other',
            //     'name' => 'Other',
            // ]
        ]);
    }

}
