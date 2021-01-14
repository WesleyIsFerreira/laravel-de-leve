<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name'];

    //Agrupamentos na consulta
    //(id>1 and id<4) and (name='lg' or name='apple')
    /*
    Brand::where(
            function($query) {
                $query->where('id','>',1)
                    ->where('id','>',4); 
            }
        )->where(
            function($query) {
                $query->where('name','LG')
                    ->orWhere('name','Apple'); 
            }
        )->get();
    */
}
