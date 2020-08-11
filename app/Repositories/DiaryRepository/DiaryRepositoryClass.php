<?php

namespace app\Repositories\DiaryRepository;

use App\Repositories\CommonRepository\BaseRepositoryClass;
use Illuminate\Support\Facades\DB;

class DiaryRepositoryClass extends BaseRepositoryClass implements DiaryRepositoryInterface
{

    public function getModel()
    {
        return \App\Models\Diary::class;
    }

    public function getAllPublicDiary()
    {
        $public = config('diary.public');
        $allPubicDiary = DB::table('diaries')->where('access_range', '=', $public)->get();

        return $allPubicDiary;
    }
}
