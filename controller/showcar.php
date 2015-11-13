<?php



class C_Car
{
	public $carsSelf = array();
	public $curShowCarsId = array();
	private $lastCars = '';


	function get_cars()
	{
		$this->lastCars = LastCar::first();
		$this->carsSelf = Car::find('all',array(
				'select'        => 'id,name,photo,count_visit',
				'conditions'    => 'id not in('.$this->lastCars->cars_id.')',
				'limit'         => 2,
				'order'         => 'count_visit asc, rand()'
				)
		);
	}

	function updateCars()
	{
		$carsId = implode(',',$this->curShowCarsId);
		Car::update_all(array(
			'conditions'    => 'id in('.$carsId.')',
			'set'           => 'count_visit = count_visit+1'
		));
		$this->lastCars->cars_id = $carsId;
		$this->lastCars->save();
	}
}
//weffwefwef