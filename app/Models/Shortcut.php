<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shortcut extends Model
{
    use HasFactory;


    protected $fillable = ['url', 'name', 'remark', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function style()
    {
        //dd($this->category->name);
        //return $this->category;
        //return 'style4';
        if ($this->category->name=='smartplugs'){
            return 'style2';
        }
        if ($this->category->name=='internal'){
            return 'style3';
        }
        if ($this->category->name=='external'){
            return 'style4';
        }
        return 'style1';
    }
    public function bgpicture()
    {
        //return $this->category;
        if ($this->category->name=='smartplugs'){
            return 'pic02.jpg';
        }
        if ($this->category->name=='internal'){
            return 'pic07.jpg';
        }
        if ($this->category->name=='external'){
            return 'pic09.jpg';
        }
        return 'pic01.jpg';
    }


}
