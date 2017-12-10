<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['firstName', 'lastname', 'email'];

    /**
     * Lookup a student by e-mail case insensitive
     *
     * tinker: 
     * App\Student::ByEmail('Me@Earth.com')->get();
     * 
     * @param [type] $query
     * @param [type] $email
     * @return void
     */
    public function scopeByEmail($query, $email) {
        return $query->where(\DB::raw('upper(email)'), strtoupper($email));
    }

    /**
     * Lookup a student by firstName case insensitive
     *
     * tinker: 
     * App\Student::ByFirstName('john')->get();
     * 
     * @param [type] $query
     * @param [type] $firstName
     * @return void
     */
    public function scopeByFirstName($query, $firstName) {
        return $query->where(\DB::raw('upper(firstName)'), strtoupper($firstName));
    }

    /**
     * Lookup a student by lastName case insensitive
     *
     * tinker: 
     * App\Student::ByLastName('doe')->get();
     * 
     * @param [type] $query
     * @param [type] $email
     * @return void
     */
    public function scopeByLastName($query, $lastName) {
        return $query->where(\DB::raw('upper(lastName)'), strtoupper($lastName));
    }
}
