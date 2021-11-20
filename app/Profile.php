<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // モデルとは、データベースの連携をするもの
    // モデルはテーブルよ紐づいている
    // find()とは、テーブルからidを使って情報を取得する
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
        
    // 17追記
    // Profile Modelに関連付けを行う
    public function histories()
    {
        return $this->hasMany('App\ProfileHistory');
    }
}
