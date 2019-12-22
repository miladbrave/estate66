<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attributevalue extends Model
{
    protected $table = "attributevalue";

    public function attributeGroup()
    {
        return $this->belongsTo(attributeGroup::class,'attribute_id');
    }

    public function products()
    {
        return $this->belongsToMany( Product::class, 'attributevalue_product','attributeValue_id','product_id');

    }
}
