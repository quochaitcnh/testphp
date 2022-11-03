<?php

namespace App\Services;

use App\Models\TblmStaff;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TblmStaffService
{
        /**
     * @param  string|null  $search
     * @param  int  $limit
     * @param  bool  $withPublishTime
     */

    public function getAll()
    {
        return TblmStaff::all();
    }

    /**
     * @param  string|null  $search
     * @param  int  $limit
     * @param  bool  $withPublishTime
     */

    public function getAllFromTo($request)
    {
        return TblmStaff::where('Entry_Date','>=', Carbon::now()->subDays($request->to))
        ->where('Entry_Date','<', Carbon::now()->subDays($request->from))
        ->orderBy('Entry_Date', 'desc')
        ->get();
    }
}
