<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Word as WordModel;

class Words extends Controller
{
    public function search(string $charsString)
    {
        //$charsString = $request->input('chars');
        $chars = preg_split('//u', $charsString, -1, PREG_SPLIT_NO_EMPTY);

        if (!$chars) {
            return [];
        }
        usort($chars, 'strcoll');

        $charsCounts = [];
        foreach (WordModel::FIELD_NAME_BY_CHAR as $fieldName) {
            $charsCounts[$fieldName] = 0;
        }
        foreach ($chars as $char) {
            if (!isset(WordModel::FIELD_NAME_BY_CHAR[$char])) {
                continue;
            }
            $charsCounts[WordModel::FIELD_NAME_BY_CHAR[$char]]++;
        }

        $oldLocale = setlocale(LC_COLLATE, "0");
        setlocale(LC_COLLATE, 'ru_RU.utf8');

        $query = WordModel::query();
        foreach ($charsCounts as $charFieldName => $charsCount) {
            $query = $query->where($charFieldName, '<=', $charsCount);
        }
        $query = $query->limit(100);
        //$query->toSql();
        $wordsRecords = $query->get();

        $words = $wordsRecords->map(function ($wordRecord) {
            return $wordRecord->{WordModel::FIELD_WORD};
        })->toArray();

        usort($words, 'strcoll');

        $wordsRes = [];
        foreach ($words as $word) {
            if (!isset($wordsRes[mb_strlen($word, 'UTF-8')])) {
                $wordsRes[mb_strlen($word, 'UTF-8')] = [];
            }
            $wordsRes[mb_strlen($word, 'UTF-8')][] = $word;
        }

        setlocale(LC_COLLATE, $oldLocale);

        return $wordsRes;
    }
}
