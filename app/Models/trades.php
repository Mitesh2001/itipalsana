<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\image_trades;
class trades extends Model
{
    use HasFactory;
    protected $fillable =['name','affilated','seats','batches','eligibility','duration','benefits','image'];
    public function GetImage()
    {
        return $this->hasMany('App\Models\image_trades','trade_id')->first();
    }
   
}
