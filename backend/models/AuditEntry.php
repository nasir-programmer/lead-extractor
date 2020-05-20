<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "UserActivityLog".
 *
 * @property int $audit_entry_id
 * @property string $audit_entry_timestamp
 * @property string $audit_entry_model_name
 * @property string $audit_entry_operation
 * @property string $audit_entry_field_name
 * @property string $audit_entry_old_value
 * @property string $audit_entry_new_value
 * @property string $audit_entry_user_id
 * @property string $audit_entry_ip
 */
class AuditEntry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'UserActivityLog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['audit_entry_timestamp', 'audit_entry_model_name', 'audit_entry_operation', 'audit_entry_field_name', 'audit_entry_old_value', 'audit_entry_new_value', 'audit_entry_user_id', 'audit_entry_ip'], 'required'],
            [['audit_entry_old_value', 'audit_entry_new_value'], 'string'],
            [['audit_entry_timestamp', 'audit_entry_model_name', 'audit_entry_operation', 'audit_entry_field_name', 'audit_entry_user_id', 'audit_entry_ip'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'audit_entry_id' => 'Audit Entry ID',
            'audit_entry_timestamp' => 'Audit Entry Timestamp',
            'audit_entry_model_name' => 'Audit Entry Model Name',
            'audit_entry_operation' => 'Audit Entry Operation',
            'audit_entry_field_name' => 'Audit Entry Field Name',
            'audit_entry_old_value' => 'Audit Entry Old Value',
            'audit_entry_new_value' => 'Audit Entry New Value',
            'audit_entry_user_id' => 'Audit Entry User ID',
            'audit_entry_ip' => 'Audit Entry Ip',
        ];
    }
}
