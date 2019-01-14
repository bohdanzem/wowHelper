<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public const FIELD_ID = 'id';
    public const FIELD_WORD = 'word';
    public const FIELD_N1 = 'n1';
    public const FIELD_N2 = 'n2';
    public const FIELD_N3 = 'n3';
    public const FIELD_N4 = 'n4';
    public const FIELD_N5 = 'n5';
    public const FIELD_N6 = 'n6';
    public const FIELD_N7 = 'n7';
    public const FIELD_N8 = 'n8';
    public const FIELD_N9 = 'n9';
    public const FIELD_N10 = 'n10';
    public const FIELD_N11 = 'n11';
    public const FIELD_N12 = 'n12';
    public const FIELD_N13 = 'n13';
    public const FIELD_N14 = 'n14';
    public const FIELD_N15 = 'n15';
    public const FIELD_N16 = 'n16';
    public const FIELD_N17 = 'n17';
    public const FIELD_N18 = 'n18';
    public const FIELD_N19 = 'n19';
    public const FIELD_N20 = 'n20';
    public const FIELD_N21 = 'n21';
    public const FIELD_N22 = 'n22';
    public const FIELD_N23 = 'n23';
    public const FIELD_N24 = 'n24';
    public const FIELD_N25 = 'n25';
    public const FIELD_N26 = 'n26';
    public const FIELD_N27 = 'n27';
    public const FIELD_N28 = 'n28';
    public const FIELD_N29 = 'n29';
    public const FIELD_N30 = 'n30';
    public const FIELD_N31 = 'n31';
    public const FIELD_N32 = 'n32';
    public const FIELD_N33 = 'n33';

    public const FIELD_NAME_BY_CHAR = [
        'а' => 'n1',
        'б' => 'n2',
        'в' => 'n3',
        'г' => 'n4',
        'д' => 'n5',
        'е' => 'n6',
        'ё' => 'n7',
        'ж' => 'n8',
        'з' => 'n9',
        'и' => 'n10',
        'й' => 'n11',
        'к' => 'n12',
        'л' => 'n13',
        'м' => 'n14',
        'н' => 'n15',
        'о' => 'n16',
        'п' => 'n17',
        'р' => 'n18',
        'с' => 'n19',
        'т' => 'n20',
        'у' => 'n21',
        'ф' => 'n22',
        'х' => 'n23',
        'ц' => 'n24',
        'ч' => 'n25',
        'ш' => 'n26',
        'щ' => 'n27',
        'ъ' => 'n28',
        'ы' => 'n29',
        'ь' => 'n30',
        'э' => 'n31',
        'ю' => 'n32',
        'я' => 'n33',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'word'
    ];
}
