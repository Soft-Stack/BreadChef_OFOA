<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Log;

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


    /**
     * Check if Admin is logged in
     * @return bool
     */
    public static function isLoggedIn() {
        return session('admin-name', false);
    }


    /**
     * Validate user and log in
     * @param string name
     * @param string password
     * @return bool
     */
    public static function login($name, $pass) {
        
        // get admin from db
        $admin = Admin::where('name', '=', $name)->where('password', '=', $pass)->first() != null;
        
        if(!$admin) {
            // if admin is null, return false
            return false;
        } else {
            // else store user in session, and return true
            session(['admin-name' => $name]);
            return true;
        }
    }


    /**
     * Returns name of admin
     */
    public static function name() {
        return session('admin-name');
    }
}
