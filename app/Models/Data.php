<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Data extends Model
{
    use HasFactory;
    protected $table = 'data';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public static function min()
    {
        $skor = DB::table('data')
            ->min('skor');
        return $skor;
    }

    public static function max()
    {
        $skor = DB::table('data')
            ->max('skor');
        return $skor;
    }

    public static function avg()
    {
        $skor = DB::table('data')
            ->avg('skor');
        return $skor;
    }

    public static function jangkauan()
    {
        $min = Data::min();
        $max = Data::max();
        $res = $max - $min;
        return $res;
    }

    public static function jmlKelas()
    {
        $skor = Data::all()->count();
        $res = ceil(1 + (3.3 * log($skor, 10)));
        return $res;
    }

    public static function pjgKelas()
    {
        $j = Data::jangkauan();
        $k = Data::jmlKelas();
        $res = ceil($j / $k);
        return $res;
    }

    public static function getFreqTable()
    {
        $data = Data::all('skor')->toArray();
        $arr = [];
        foreach ($data as $skor) {
            array_push($arr, $skor['skor']);
        }
        $key = array_unique($arr);
        sort($key);

        $res = [];
        foreach ($key as $k) {
            array_push($res, [
                "key" => $k,
                "value" => count(array_keys($arr, $k)),
            ]);
        }
        return $res;
    }

    public static function getDataBergolong()
    {
        $jmlKelas = Data::jmlKelas();
        $pjgKelas = Data::pjgKelas();
        $min = Data::min();

        $arr = [];
        for ($i = 0; $i < $jmlKelas; $i++) {
            array_push($arr, [
                'down' => $min + ($pjgKelas * $i),
                'up' => $min + ($pjgKelas * ($i + 1)) - 1,
            ]);
        }

        $res = [];
        foreach ($arr as $a) {
            array_push($res, [
                "down" => $a['down'],
                "up" => $a['up'],
                "freq" => DB::table('data')
                    ->where('skor', '>=', $a['down'])
                    ->where('skor', '<=', $a['up'])
                    ->count(),
            ]);
        }
        return $res;
    }
}
