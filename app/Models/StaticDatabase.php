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
            (object)[
                'key' => 'ai',
                'name' => 'AI',
            ],
            (object)[
                'key' => 'acting',
                'name' => 'Acting',
            ],
            (object)[
                'key' => 'action',
                'name' => 'Action',
            ],
            (object)[
                'key' => 'admin',
                'name' => 'Admin',
            ],
            (object)[
                'key' => 'bouncing',
                'name' => 'Bouncing',
            ],
            (object)[
                'key' => 'climbing',
                'name' => 'Climbing',
            ],
            (object)[
                'key' => 'cycling',
                'name' => 'Cycling',
            ],
            (object)[
                'key' => 'dancing',
                'name' => 'Dancing',
            ],
            (object)[
                'key' => 'drifting',
                'name' => 'Drifting',
            ],
            (object)[
                'key' => 'fighting',
                'name' => 'Fighting',
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
                'key' => 'gaming',
                'name' => 'Gaming',
            ],
            (object)[
                'key' => 'heavy_lifting',
                'name' => 'Heavy-Lifting',
            ],
            (object)[
                'key' => 'high_jumping',
                'name' => 'High-Jumping',
            ],
            (object)[
                'key' => 'hr',
                'name' => 'HR',
            ],
            (object)[
                'key' => 'instrumental',
                'name' => 'Instrumental',
            ],
            (object)[
                'key' => 'interviewing',
                'name' => 'Interviewing',
            ],
            (object)[
                'key' => 'iq',
                'name' => 'IQ',
            ],
            (object)[
                'key' => 'leadership',
                'name' => 'Leadership',
            ],
            (object)[
                'key' => 'magician',
                'name' => 'Magician',
            ],
            (object)[
                'key' => 'management',
                'name' => 'Management',
            ],
            (object)[
                'key' => 'marketing',
                'name' => 'Marketing',
            ],
            (object)[
                'key' => 'model',
                'name' => 'Model',
            ],
            (object)[
                'key' => 'painting',
                'name' => 'Painting',
            ],
            (object)[
                'key' => 'parenting',
                'name' => 'Parenting',
            ],
            (object)[
                'key' => 'parachuting',
                'name' => 'Parachuting',
            ],
            (object)[
                'key' => 'photographing',
                'name' => 'Photographing',
            ],
            (object)[
                'key' => 'pr',
                'name' => 'PR',
            ],
            (object)[
                'key' => 'rapping',
                'name' => 'Rapping',
            ],
            (object)[
                'key' => 'racing',
                'name' => 'Racing',
            ],
            (object)[
                'key' => 'robotic',
                'name' => 'Robotic',
            ],
            (object)[
                'key' => 'running',
                'name' => 'Running',
            ],
            (object)[
                'key' => 'singing',
                'name' => 'Singing',
            ],
            (object)[
                'key' => 'public_speaking',
                'name' => 'Public Speaking',
            ],
            (object)[
                'key' => 'b2b',
                'name' => 'B2B',
            ],
        ]);
    }
    

}
