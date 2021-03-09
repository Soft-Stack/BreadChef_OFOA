<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Fields fillable by student
     * 
     * @var array
     */
    protected $fillable = ['name', 'password'];


}
