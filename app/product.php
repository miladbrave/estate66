<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function category()
    {
        return $this->belongsToMany(category::class); //change belong to many to hasmany
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attributevalue()
    {
        return $this->belongsToMany( attributevalue::class, 'attributevalue_product','product_id','attributeValue_id');
    }

    public function photos()
    {
        return $this->belongsToMany(photo::class );
    }
}
