<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attributeGroup extends Model
{
    protected $table= "attributesgroup";

    public function attributevalue()
    {
        return $this->hasMany(attributevalue::class,'attribute_id');
    }

    public function category()
    {
        return $this->belongsToMany(category::class ,'attributegroup_category','attributeGroup_id','category_id');
    }

}
