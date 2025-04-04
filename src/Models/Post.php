<?php

namespace App\Models;

use App\DB;
use DateTime;

class Post extends Model {
    protected static $table = 'posts';

    public $id;
    public $title;
    public $body;
    public $created_at;

    public function createdDate(){
        $date = new DateTime();
        $date->setTimestamp(round($this->created_at/1000));
        return $date;
    }
}