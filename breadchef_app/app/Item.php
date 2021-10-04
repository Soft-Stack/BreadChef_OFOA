<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'items';
    
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
    protected $fillable = ['categoryid', 'name', 'description', 'price', 'image'];

    public function category() {
        return $this->hasOne('App\Category');
    }
}
