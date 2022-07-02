<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz;

class Quiz extends Model
{
    use HasFactory;

    /**
     * このクイズを所有するタイトルを取得
     */
    public function title()    {
        return $this->belongsTo('App\Models\Title');
    }
}
