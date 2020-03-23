<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	// protected $fillable = [
 //        'name', 'phone', 'ip', 'url', 'note','on_off',
 //    ];
    protected $guarded=[];
    
    public function users(){
      return $this->belongsTo(User::class);
    }
}
