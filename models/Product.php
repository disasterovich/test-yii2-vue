<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii;

class Product extends ActiveRecord
{ 
    public static function tableName()
    {
        return '{{products}}';
    }

    public function rules()
        {
        return [
            ['title', 'string', 'max'=>255],
            [['price','qt'], 'integer', 'min'=>0],

            ['title','filter','filter'=>'strip_tags'],
            ['title','filter','filter'=>'trim'],
            ];
        }
}