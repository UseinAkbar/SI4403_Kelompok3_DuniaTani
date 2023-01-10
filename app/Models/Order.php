<?php

namespace App\Models;

use App\Models\Gurutani;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $table = "order";

    protected $fillable =[
        'id','user_id','guruTani_id', 'course_id','ktp', 'status','evidence','cover','title','price','type','created_at'
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
    public function course () {
        return $this->hasMany(Course::class, 'course_id', 'id');
    }
}