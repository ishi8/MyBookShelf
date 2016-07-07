<?php

namespace Mitsubachi\BookShelf;

class Faker
{
    public static function isbn()
    {
        //ISBNはISBN000-0-0000-0000-0の形
        return 'ISBN' . self::number(3) . '-' . self::number(1) . '-' . self::number(4) . '-' . self::number(4) . '-' . self::number(1);
    }

    public static function number($length)
    {
        //０〜「(10 * 指定された桁数) -1」の間で乱数を発生させる。
        //桁数を合わせるために、指定された桁数に満たない場合は左側に0を付加する
        return str_pad(rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
    }

    public static function title()
    {
        $language = ['PHP', 'Java', 'Ruby', 'Python'];

        $purpose = ['プログラミング', 'によるオブジェクト指向開発', 'で始めるプログラミング', 'で作るWEBアプリケーション'];

        $suffix = ['概論', '入門', 'の絵本', 'の基礎', '応用編'];

        return $language[array_rand($language)] . $purpose[array_rand($purpose)] . $suffix[array_rand($suffix)];
    }

    public static function author()
    {
        $firstName = ['Philip', 'Carolyn', 'Brian', 'Kevin', 'Pamela'];

        $lastName = ['Hill', 'Gonzalez', 'Williams', 'Powell', 'Garcia'];

        return $firstName[array_rand($firstName)] . ' ' . $lastName[array_rand($lastName)];
    }

}