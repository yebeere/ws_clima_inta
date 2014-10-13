<?php

/**
 * This is the model class for table "emas".
 *
 * The followings are the available columns in table 'emas':
 * @property integer $idEmas
 * @property string $nombreEma
 * @property double $latitudEma
 * @property double $longitudEma
 * @property integer $altitudEma
 * @property string $urlEma
 * @property integer $dateEma
 * @property integer $timeEma
 * @property integer $temperaturaEma
 * @property integer $humedadEma
 * @property integer $dewPointEma
 * @property integer $vientoEma
 * @property integer $dirVientoEma
 * @property integer $vientoRafagasEma
 * @property integer $presionEma
 * @property integer $lluviaEma
 * @property string $codigoEma
 */
class Emas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Emas the static model class
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
		return 'emas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreEma, urlEma, dateEma, timeEma, temperaturaEma, humedadEma, dewPointEma, vientoEma, dirVientoEma, vientoRafagasEma, presionEma, lluviaEma', 'required'),
			array('altitudEma, dateEma, timeEma, temperaturaEma, humedadEma, dewPointEma, vientoEma, dirVientoEma, vientoRafagasEma, presionEma, lluviaEma', 'numerical', 'integerOnly'=>true),
			array('latitudEma, longitudEma', 'numerical'),
			array('nombreEma, codigoEma', 'length', 'max'=>45),
			array('urlEma', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idEmas, nombreEma, latitudEma, longitudEma, altitudEma, urlEma, dateEma, timeEma, temperaturaEma, humedadEma, dewPointEma, vientoEma, dirVientoEma, vientoRafagasEma, presionEma, lluviaEma, codigoEma', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEmas' => 'Id Emas',
			'nombreEma' => 'Nombre Ema',
			'latitudEma' => 'Latitud Ema',
			'longitudEma' => 'Longitud Ema',
			'altitudEma' => 'Altitud Ema',
			'urlEma' => 'Url Ema',
			'dateEma' => 'Date Ema',
			'timeEma' => 'Time Ema',
			'temperaturaEma' => 'Temperatura Ema',
			'humedadEma' => 'Humedad Ema',
			'dewPointEma' => 'Dew Point Ema',
			'vientoEma' => 'Viento Ema',
			'dirVientoEma' => 'Dir Viento Ema',
			'vientoRafagasEma' => 'Viento Rafagas Ema',
			'presionEma' => 'Presion Ema',
			'lluviaEma' => 'Lluvia Ema',
			'codigoEma' => 'Codigo Ema',
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

		$criteria->compare('idEmas',$this->idEmas);
		$criteria->compare('nombreEma',$this->nombreEma,true);
		$criteria->compare('latitudEma',$this->latitudEma);
		$criteria->compare('longitudEma',$this->longitudEma);
		$criteria->compare('altitudEma',$this->altitudEma);
		$criteria->compare('urlEma',$this->urlEma,true);
		$criteria->compare('dateEma',$this->dateEma);
		$criteria->compare('timeEma',$this->timeEma);
		$criteria->compare('temperaturaEma',$this->temperaturaEma);
		$criteria->compare('humedadEma',$this->humedadEma);
		$criteria->compare('dewPointEma',$this->dewPointEma);
		$criteria->compare('vientoEma',$this->vientoEma);
		$criteria->compare('dirVientoEma',$this->dirVientoEma);
		$criteria->compare('vientoRafagasEma',$this->vientoRafagasEma);
		$criteria->compare('presionEma',$this->presionEma);
		$criteria->compare('lluviaEma',$this->lluviaEma);
		$criteria->compare('codigoEma',$this->codigoEma,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}