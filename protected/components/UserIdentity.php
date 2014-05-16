<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		// check if login details exists in database
		$record=Usuarios::model()->findByAttributes(array('usuario'=>$this->username)); 
		
		 
		//echo Yii::trace(CVarDumper::dumpAsString($record),'vardump');
            if($record===null)
            { 
                $this->errorCode=self::ERROR_USERNAME_INVALID;
            }
	else if($record->passwd!==md5($this->password))            // here I compare db password with password field
            { 
            /*echo Yii::trace(CVarDumper::dumpAsString($this->password),'vardump');
            echo Yii::trace(CVarDumper::dumpAsString($record->passwd),'vardump');*/
                $this->errorCode=self::ERROR_PASSWORD_INVALID;
            }
            else
            {  
                $this->setState('userId',$record->folio);
                $this->setState('name', $record->nombre.' '.$record->aPaterno);
                $this->errorCode=self::ERROR_NONE;
            }
            return !$this->errorCode;


		/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;*/
	}
}
