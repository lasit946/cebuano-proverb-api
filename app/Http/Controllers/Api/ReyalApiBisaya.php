<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ProverbController extends Controller
{
    public function random()
    {
        $proverbs = [
            [
                'proverb' => 'Bisan gamay nga bitin, makapatay gihapon.',
                'meaning' => 'Even a small snake can still kill — small things can have big impact.'
            ],
            [
                'proverb' => 'Dili tanan nga mosidlak bulawan.',
                'meaning' => 'Not everything that shines is gold — appearances can be deceiving.'
            ],
            [
                'proverb' => 'Ang wala magtan-aw sa gi-agi-an, dili makaabot sa padulngan.',
                'meaning' => 'He who does not look back at the past will not reach the destination.'
            ],
            [
                'proverb' => 'Ang tawo nga nagapaabot sa ulan, dili gayod makatanom.',
                'meaning' => 'He who waits for the rain will never plant — don’t keep waiting for the perfect time.'
            ],
            [
                'proverb' => 'Dili tanan nga kabaw adunay sungay.',
                'meaning' => 'Not all carabaos have horns — not everything is as it seems.'
            ],
            [
                'proverb' => 'Kon kinsa’y nagtanom, mao ray moputol.',
                'meaning' => 'Whoever plants is the one who should harvest — you reap what you sow.'
            ]
        ];

        return response()->json($proverbs[array_rand($proverbs)]);
    }
}
