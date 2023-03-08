<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "inquiry".
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $identification_card_number
 * @property string|null $telephone_no
 * @property string|null $email
 * @property string|null $company_name
 * @property string|null $part_to_deal
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Inquiry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inquiry';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['part_to_deal'], 'string'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['first_name', 'last_name', 'identification_card_number', 'email'], 'string', 'max' => 50],
            [['telephone_no'], 'string', 'max' => 15],
            [['company_name'], 'string', 'max' => 100],
            [['first_name', 'last_name', 'identification_card_number', 'email', 'telephone_no'], 'required'],
            ['email', 'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'identification_card_number' => Yii::t('app', 'Identification Card Number'),
            'telephone_no' => Yii::t('app', 'Telephone No'),
            'email' => Yii::t('app', 'Email'),
            'company_name' => Yii::t('app', 'Company Name'),
            'part_to_deal' => Yii::t('app', 'Part To Deal'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\InquiryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\InquiryQuery(get_called_class());
    }
}
