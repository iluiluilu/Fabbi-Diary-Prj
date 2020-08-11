<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DiaryRepository\DiaryRepositoryInterface;

class DiaryController extends Controller
{
    protected $_diaryRepo;

    public function __construct(DiaryRepositoryInterface $diaryRepo)
    {
        $this->_diaryRepo = $diaryRepo;
    }

    public function getAllPublicDiary()
    {
        $allPublicDiary = $this->_diaryRepo->getAllPublicDiary();

        return $allPublicDiary;
    }
}
