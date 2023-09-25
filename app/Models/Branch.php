<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    
   use SoftDeletes;
   public $timestamps = false;
   protected $table="branch";
   protected $primarykey = "id";
   protected $dates = ['deleted_at'];
    //const DELETED_AT = 'deleted_at';
    //public const DELETED_AT = "deleted_at";

  public  function setNameAttribute($value)
  {
        $this->attributes['name'] = ucwords($value);
  }
   /**
    * Summary of getEmailAttribute
    * @param mixed $value
    * @return mixed
    */
   public function getEmailAttribute($value)
   {
        return strtolower($value);
   }

}






