<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Questions extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'questions';

    protected $fillable = array(
        'id',
        'question',
        'test_id',
        'user_id',
        'created_at',
        'updated_at'
    );


    public $timestamps = false;

   /* public function campaign() {
        return $this->hasMany('App\BudgetCampaign');
    }*/
}
