<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generalForm extends Model
{
    use HasFactory;
    protected $fillable = ['startup_name','first_name','last_name','email','mobile_number','address','services','needs','project_phase'];

    public function setCategoryAttribute($value)
    {
        $this->attributes['services'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['services'] = json_decode($value);
    }
//مو متأكدة وش تسوي 
    public function setCategoryAttributee($value)
    {
        $this->attributes['needs'] = json_encode($value);
    }

    public function getCategoryAttributee($value)
    {
        return $this->attributes['needs'] = json_decode($value);
    }
}
