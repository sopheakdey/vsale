<?php

/**
 * This is the model class for table "tbl_product".
 *
 * The followings are the available columns in table 'tbl_product':
 * @property integer $pro_id
 * @property integer $cat_id
 * @property integer $sto_id
 *
 * The followings are the available model relations:
 * @property TblOrder[] $tblOrders
 * @property TblCategory $cat
 * @property TblStore $sto
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
			array('cat_id, sto_id', 'required'),
			array('pro_id, cat_id, sto_id', 'numerical', 'integerOnly'=>true),
                        
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pro_id, cat_id, sto_id', 'safe', 'on'=>'search'),
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
			'tblOrders' => array(self::HAS_MANY, 'Order', 'pro_id'),
			'cat' => array(self::BELONGS_TO, 'Category', 'cat_id'),
			'store' => array(self::BELONGS_TO, 'Store', 'sto_id'),
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
			'sto_id' => 'Sto',
                        'status' => 'status',
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
		$criteria->compare('sto_id',$this->sto_id);
               

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


        
}
