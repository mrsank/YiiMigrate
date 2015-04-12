<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $avatar
 * @property integer $status
 * @property string $date
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

	public $file;

    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone','status'], 'required'],
            [['status'], 'integer'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 200],
            [['phone'], 'string', 'max' => 15],
			 [['file'], 'safe'],
			[['file'], 'file', 'extensions'=>'jpg, gif, png' ] ,
            [['avatar'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'file' => 'Avatar',
            'status' => 'Status',
            'date' => 'Date',
        ];
    }
}
