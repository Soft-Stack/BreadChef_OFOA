<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Log;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Fields fillable by admin
     * 
     * @var array
     */
    protected $fillable = ['name'];

   
}
