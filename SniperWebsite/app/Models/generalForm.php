<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generalForm extends Model
{
    use HasFactory;
    protected $fillable = ['startup_name','first_name','last_name','email','mobile_number','Address','Services','Needs','project_phase'];

    public function setCategoryAttribute($value)
    {
        $this->attributes['Services'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['Services'] = json_decode($value);
    }
//مو متأكدة وش تسوي 
    public function setCategoryAttributee($value)
    {
        $this->attributes['Needs'] = json_encode($value);
    }

    public function getCategoryAttributee($value)
    {
        return $this->attributes['Needs'] = json_decode($value);
    }
}
