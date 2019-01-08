<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Tasks extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'tasks';

    protected $fillable = array(
        'id',
        'task_name',
        'test_id',
        'created_at',
        'updated_at'
    );


    public $timestamps = false;

   /* public function campaign() {
        return $this->hasMany('App\BudgetCampaign');
    }*/
}
