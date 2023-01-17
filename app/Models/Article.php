<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function cgy()
    {
        return $this->belongsTo(Cgy::class);
    }

    public function getFirstPic()
    {
        // json_decode 將 Json 格式的字串轉換成陣列
        $pics = json_decode($this->pics, true);
        if (is_array($pics) && count($pics) > 0) {
            return $pics[0];
        } else {
            return null;
        }
    }

}