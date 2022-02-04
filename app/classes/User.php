<?php


namespace App\classes;


class User
{
    protected $user = [];
    public function getAllUser()
    {
        $this->user = [
            0=> [
                'name'      => 'Fardin',
                'mobile'    => '1234',
                'location'  =>'Panthapath'
                ],
            0=> [
                'name'      => 'Shuvo',
                'mobile'    => '1235',
                'location'  =>'Dhanmondi'
                ]
        ];
         return $this->user;
    }
}