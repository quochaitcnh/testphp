<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TblmStaff extends Model
{
    use HasFactory;

    protected $table = 'tblmstaff';

    public function getDayofWeekAttribute()
    {
        $weekMap = [
            0 => '日',
            1 => '月',
            2 => '火',
            3 => '水',
            4 => '木',
            5 => '金',
            6 => '土',
        ];
        $dayOfTheWeek = Carbon::parse($this->Entry_Date)->dayOfWeek;
        $weekday = $weekMap[$dayOfTheWeek];
        return $weekday;
    }
}
