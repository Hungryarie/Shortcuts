<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shortcut extends Model
{
    use HasFactory;


    protected $fillable = ['url', 'name', 'remark', 'category', 'catagory_id'];

    public function categoryname()
    {
        return $this->belongsTo(Category::class);
    }

    public function style()
    {
        //return $this->category;
        //return 'style4';
        if ($this->category=='SmartPlugs'){
            return 'style2';
        }
        if ($this->category=='Intern'){
            return 'style3';
        }
        if ($this->category=='Extern'){
            return 'style4';
        }
        return 'style1';
    }
    public function bgpicture()
    {
        //return $this->category;
        if ($this->category=='SmartPlugs'){
            return 'pic02.jpg';
        }
        if ($this->category=='Intern'){
            return 'pic07.jpg';
        }
        if ($this->category=='Extern'){
            return 'pic09.jpg';
        }
        return 'pic01.jpg';
    }


}
