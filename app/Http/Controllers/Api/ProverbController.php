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
            ]
        ];

        return response()->json($proverbs[array_rand($proverbs)]);
    }
}
