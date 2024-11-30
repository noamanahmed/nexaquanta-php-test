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
		  // Find the user by username
		  $user = User::model()->findByAttributes(array('name' => $this->username));
    
		  if ($user === null) {
			  // Username not found
			  $this->errorCode = self::ERROR_USERNAME_INVALID;
		  } elseif (!CPasswordHelper::verifyPassword($this->password, $user->password)) {
			  // Password does not match (assumes password is hashed in the database)
			  $this->errorCode = self::ERROR_PASSWORD_INVALID;
		  } else {
			  // Authentication successful
			  $this->errorCode = self::ERROR_NONE;
			  // Optionally, set additional session attributes for admin
			  Yii::app()->user->setState('is_admin', $user->name === 'admin');
		  }
	  
		  return !$this->errorCode;
	}
}