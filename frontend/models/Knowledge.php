<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "knowledge".
 *
 * @property int $id
 * @property string $name
 * @property string $knowledge
 */
class Knowledge extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'knowledge';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
      //ใช้ในการกำหนดความยาวของตัวอักษรให้ยาวขนาดเท่าไหร่
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name', 'knowledge'], 'string', 'max' => 1000000000000],//ความยาวจำนวนตัวหนังสือ
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ลำดับ',
            'name' => 'ใส่คำค้นหาที่นี้',
            'knowledge' => 'เนื้อหา',
        ];
    }
}
