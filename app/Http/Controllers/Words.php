<?php

namespace App\Http\Controllers;

use App\Models\Word as WordModel;

class Words extends Controller
{
    public function import()
    {
        $words = file(storage_path('dictionary/russian_nouns.txt'));

        echo 'count: ' . count($words);

        WordModel::truncate();
        $i = 0;
        $recordCount = 1000;
        $data = [];
        $recordDataEmpty = [];
        foreach (WordModel::FIELD_NAME_BY_CHAR as $fieldName) {
            $recordDataEmpty[$fieldName] = 0;
        }
        foreach ($words as $word) {
            $word = trim($word);
            $chars = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
            $charsCounts = [];
            foreach ($chars as $char) {
                if (!isset($charsCounts[$char])) {
                    $charsCounts[$char] = 0;
                }
                $charsCounts[$char]++;
            }

            $recordData = $recordDataEmpty;
            $recordData[WordModel::FIELD_WORD] = $word;
            foreach ($charsCounts as $char => $n) {
                if (!isset(WordModel::FIELD_NAME_BY_CHAR[$char])) {
                    continue;
                }
                $recordData[WordModel::FIELD_NAME_BY_CHAR[$char]] = $n;
            }

            $data[] = $recordData;
            $i++;
            if ($i === $recordCount) {
                $i = 0;
                WordModel::insert($data);
                $data = [];
            }
        }
        if ($data) {
            WordModel::insert($data);
        }
    }
}
