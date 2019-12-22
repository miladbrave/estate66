<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function child()
    {
        return $this->hasMany(category::class,'parent_id'); //self
    }

    public function childRecursive()
    {
        return $this->child()->with('childRecursive');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function AttributeGroups()
    {
        return $this->belongsToMany( attributeGroup::class, 'attributegroup_category','category_id','attributeGroup_id');
    }
}
