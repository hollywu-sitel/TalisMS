<?php namespace Api;
use Talis\Logger as L;

/**
 * Responsebility: Parses the user input to identify the API class to instantiate
 * @author Itay Moav
 * @Date  2017-05-19
 */
class TestDependencyCreate extends \Talis\Chain\aFilteredValidatedChainLink{

	protected $filters                  = [],
			  $dependencies 			= [
			  		[\Talis\Chain\Dependencies\GetFieldExist::class,['field'=>'user']],
			  		[\Talis\Chain\Dependencies\GetFieldExist::class,['field'=>'baba']],
			  ]
	;
			  
	/**
	 * a default way to finish a chain.
	 * Mostly for debug purposes
	 * 
	 * @see \Talis\Chain\AFilteredValidatedChainLink::get_next_bl()
	 */
	protected function get_next_bl():array{
		return [[\Talis\Chain\DoneSuccessfull::class,[]]];
	}
}