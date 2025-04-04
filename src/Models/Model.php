<?php

namespace App\Models;

use App\DB;

abstract class Model {
    private static $table;

    public static function all() {
        $db = new DB();
        return $db->all(static::$table, static::class);
    }

    public static function find($id) {
        $db = new DB();
        return $db->find(static::$table, static::class, $id);
    }

    public function save(){
        $db = new DB();
        $fields = get_object_vars($this);
        $id = $fields['id'];
        unset($fields['id']);
        if($id) {
            $db->update(static::$table, $fields, $id);
        } else {
            $db->insert(static::$table, $fields);
        }      
    }

    public function delete() {
        $db = new DB();
        $fields = get_object_vars($this);
        $id = $fields['id'];
        $db->delete(static::$table, $id);
    }
}