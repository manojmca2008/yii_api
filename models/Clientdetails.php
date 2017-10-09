<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_details".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $phone_no
 * @property string $email
 * @property string $website_url
 * @property string $pan_no
 * @property string $gst_no
 */
class Clientdetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'phone_no', 'email', 'website_url', 'pan_no', 'gst_no'], 'required'],
            [['name', 'address', 'website_url', 'pan_no', 'gst_no'], 'string', 'max' => 256],
            [['phone_no'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 30],
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
            'address' => 'Address',
            'phone_no' => 'Phone No',
            'email' => 'Email',
            'website_url' => 'Website Url',
            'pan_no' => 'Pan No',
            'gst_no' => 'Gst No',
        ];
    }
}
