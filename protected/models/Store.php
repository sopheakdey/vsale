<?php

/**
 * This is the model class for table "tbl_store".
 *
 * The followings are the available columns in table 'tbl_store':
 * @property integer $sto_id
 * @property string $item
 * @property integer $qty
 * @property double $unitprice
 *
 * The followings are the available model relations:
 * @property TblProduct[] $tblProducts
 */
class Store extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Store the static model class
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
		return 'tbl_store';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item, qty, unitprice', 'required'),
			array('sto_id, qty', 'numerical', 'integerOnly'=>true),
			array('unitprice', 'numerical'),
			array('item', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sto_id, item, qty, unitprice', 'safe', 'on'=>'search'),
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
			'tblProducts' => array(self::HAS_MANY, 'TblProduct', 'sto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sto_id' => 'Sto',
			'item' => 'Item',
			'qty' => 'Qty',
			'unitprice' => 'Unitprice',
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

		$criteria->compare('sto_id',$this->sto_id);
		$criteria->compare('item',$this->item,true);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('unitprice',$this->unitprice);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
            public function getProductname()
            {
            return CHtml::listData(Store::model()->findAll(),'sto_id','item');
            }

}