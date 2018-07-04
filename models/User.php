<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
    {
    const STATUS_INACTIVE=0; //пользователь еще не активировал свой аккаунт
    const STATUS_ACTIVE=1; //пользователь активен
    const STATUS_BLOCKED=2; //пользователь блокирован админом

    public static function tableName()
    {
        return '{{users}}';
    }

    public function getId()
        {
        return $this->id;
        }

    public function validateAuthKey($authKey)
        {
        }

    public static function findIdentityByAccessToken($token, $type = null)
        {
        return static::findOne(['access_token' => $token]);
        }

    public static function findIdentity($id)
        {
        }

    public function getAuthKey()
        {
        }

    }