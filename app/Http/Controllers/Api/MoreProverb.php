<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ProverbController extends Controller
{
    public function random()
    {
        $proverbs = [
            [
                'proverb' => 'Ang hindi marunong lumingon sa pinanggalingan, hindi makararating sa paroroonan.',
                'meaning' => 'One who does not look back to where they came from will never reach their destination.'
            ],
            [
                'proverb' => 'Bisan gamay nga bitin, makapatay gihapon.',
                'meaning' => 'Even a small snake can still kill — small things can have big impact.'
            ],
            [
                'proverb' => 'Dili tanan nga mosidlak bulawan.',
                'meaning' => 'Not everything that shines is gold — appearances can be deceiving.'
            ],
            [
                'proverb' => 'Ang nagapuyo sa balili, dili makakita sa kalasangan.',
                'meaning' => 'One who lives only in the grassland cannot see the forest — perspective is limited by environment.'
            ],
            [
                'proverb' => 'Kon kinsa’y nagtanom, mao ray moputol.',
                'meaning' => 'Whoever plants is the one who should harvest — you reap what you sow.'
            ],
            [
                'proverb' => 'Ang dili mokupot sa sungkod, maluya ang lawas.',
                'meaning' => 'He who does not hold the staff will weaken — without discipline, one becomes weak.'
            ]
        ];

        return response()->json($proverbs[array_rand($proverbs)]);
    }
}
