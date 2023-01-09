<?php

namespace App\Models;

use App\Models\Gurutani;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    
    protected $table = "courses";

    protected $fillable =[
        'id','title','guruTani_id', 'skillLevel','video', 'description','rating','price','created_at' ,'thumbnail'
    ];


    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    public function gurutani () {
        return $this->belongsTo(Gurutani::class, 'guruTani_id', 'id');
    }
}