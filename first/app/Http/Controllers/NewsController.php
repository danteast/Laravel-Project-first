<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    

        public function newsList(int $id) {        
        $checkedCat =  $this->newsArr[$id-1];        
        return view('task2/newsList', ['checkedCat'=>$checkedCat]);
    }

    public function checkedNew(int $cat_id, int $new_id) {
        $checkedNew = $this->newsArr[$cat_id-1]['cat_news'][$new_id-1];
        // echo $checkedNew['new_title'];
        return view('task2/checkedNew', ['checkedNew'=>$checkedNew]);
    }
}
