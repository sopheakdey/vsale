<?php

/**
 * This is the model class for table "tbl_product".
 *
 * The followings are the available columns in table 'tbl_product':
 * @property integer $pro_id
 * @property integer $cat_id
 * @property string $item
 * @property double $qty
 * @property double $unit_price
 * @property string $photo
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property TblOrder[] $tblOrders
 * @property TblCategory $cat
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return 'tbl_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cat_id, item, qty, unit_price, photo', 'required'),
			array('pro_id, cat_id, status', 'numerical', 'integerOnly'=>true),
			array('qty, unit_price', 'numerical'),
			array('item, photo', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pro_id, cat_id, item, qty, unit_price, photo, status', 'safe', 'on'=>'search'),
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
			'tblOrders' => array(self::HAS_MANY, 'TblOrder', 'pro_id'),
			'cat' => array(self::BELONGS_TO, 'TblCategory', 'cat_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pro_id' => 'Pro',
			'cat_id' => 'Cat',
			'item' => 'Item',
			'qty' => 'Qty',
			'unit_price' => 'Unit Price',
			'photo' => 'Photo',
			'status' => 'Status',
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

		$criteria->compare('pro_id',$this->pro_id);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('item',$this->item,true);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('unit_price',$this->unit_price);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}