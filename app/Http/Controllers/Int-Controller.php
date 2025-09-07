<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ProverbController extends Controller
{
    public function random()
    {
        $proverbs = [
            [
                'proverb' => 'Ang tubig nga nagatin-aw, mao ray lalum.',
                'meaning' => 'Clear water is often deep — appearances can hide depth.'
            ],
            [
                'proverb' => 'Ang dili kahibalo molingkod, dili kahibalo motindog.',
                'meaning' => 'He who doesn’t know how to sit properly won’t know how to stand — small habits reflect character.'
            ],
            [
                'proverb' => 'Kon mag-ulan og kusog, mosunod ang bahandi sa yuta.',
                'meaning' => 'After heavy rain comes the earth’s wealth — struggles bring blessings.'
            ],
            [
                'proverb' => 'Ang langgam nga sayo mobangon, sayo makakaplag og pagkaon.',
                'meaning' => 'The bird that wakes early finds food first — diligence leads to success.'
            ],
            [
                'proverb' => 'Ang tawo nga walay pasensya, dali ra mawad-an.',
                'meaning' => 'A man without patience easily loses everything.'
            ],
            [
                'proverb' => 'Dili nato masukod ang kadagatan sa usa ka tabo.',
                'meaning' => 'The sea cannot be measured with a dipper — some things are greater than we imagine.'
            ]
        ];

        return response()->json($proverbs[array_rand($proverbs)]);
    }
}
