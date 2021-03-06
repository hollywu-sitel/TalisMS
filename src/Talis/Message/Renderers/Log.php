<?php namespace Talis\Message\Renderers;
/**
 * This is what we know as VIEW, it does the actual echo.
 * This one is for Cli responses (aka emit text + exit(status)
 * 
 * @author Itay Moav
 * @date 2017-06-07
 */
class Log implements \Talis\commons\iEmitter{
	/**
	 * Formats and echoes the results headers and then body
	 */
	public function emit(\Talis\Message\Response $message):void{
		$body = json_encode($message->getBody());
		if($message->getResponseType() != \Talis\Message\Response::RESPONSE_TYPE__RESPONSE){
			\fatal("CHAIN BROKE {$body}");
		} else {
		    \dbgr('END OF PROCESS',$body);
		}
	}
}
