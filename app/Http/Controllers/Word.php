<?php

namespace App\Http\Controllers;

use App\Models\Word as WordModel;

class Word extends Controller
{
    public function import()
    {
        $words = file(storage_path('dictionary/russian_nouns.txt'));

        echo 'count: ' . count($words);

        $i = 0;
        $n = 1000;
        $data = [];
        foreach ($words as $word) {
            $data[] = [WordModel::FIELD_WORD => $word];
            $i++;
            if ($i === $n) {
                WordModel::insert($data);
                $data = [];
            }
        }
    }
}
