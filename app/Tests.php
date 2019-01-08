<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Tests extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'tests';

    protected $fillable = array(
        'id',
        'test_name',
        'prototype_url',
        'user_id',
        'random_url',
        'created_at',
        'updated_at'
    );


    public $timestamps = false;

   /* public function campaign() {
        return $this->hasMany('App\BudgetCampaign');
    }*/
}
