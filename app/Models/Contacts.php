<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'num',
        'mail',
        'favorite',
        'user_id'
    ];
// getters

    public function getId()
    {
        return $this->attributes['id'];
    } 

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function getNum()
    {
        return $this->attributes['num'];
    }

    public function getMail()
    {
        return $this->attributes['mail'];
    }

    public function getFavorite()
    {
        return $this->attributes['favorite'];
    }


// setters
    protected function setName($name)
    {
        return $this->attributes['name'] = $name;
    }

    protected function setNum($num)
    {
        return $this->attributes['num'] = $num;
    }

    protected function setMail($mail)
    {
        return $this->attributes['mail'] = $mail;
    }

    protected function setFavorite($favorite)
    {
        return $this->attributes['favorite'] = $favorite;
    }

    protected function register()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}