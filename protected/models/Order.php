<?php

/**
 * This is the model class for table "tbl_order".
 *
 * The followings are the available columns in table 'tbl_order':
 * @property integer $ord_id
 * @property integer $pro_id
 * @property integer $cus_id
 * @property integer $ord_qty
 * @property string $ord_date
 *
 * The followings are the available model relations:
 * @property TblCustomer $cus
 * @property TblProduct $pro
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_id, cus_id, ord_qty, ord_date', 'required'),
			array('ord_id, pro_id, cus_id, ord_qty', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ord_id, pro_id, cus_id, ord_qty, ord_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cus' => array(self::BELONGS_TO, 'TblCustomer', 'cus_id'),
			'pro' => array(self::BELONGS_TO, 'TblProduct', 'pro_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ord_id' => 'Ord',
			'pro_id' => 'Pro',
			'cus_id' => 'Cus',
			'ord_qty' => 'Ord Qty',
			'ord_date' => 'Ord Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ord_id',$this->ord_id);
		$criteria->compare('pro_id',$this->pro_id);
		$criteria->compare('cus_id',$this->cus_id);
		$criteria->compare('ord_qty',$this->ord_qty);
		$criteria->compare('ord_date',$this->ord_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}