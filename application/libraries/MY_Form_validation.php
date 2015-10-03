<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    /**
 * Money, decimal or integer
 *
 * @access  public
 * @param   string
 * @return  bool
 */
public function is_money($str)
{
    //First check if decimal
    if(!parent::decimal($str))
    {
        //Now check if integer
		$this->set_message('is_money', 'Please enter a valid amount');
        return (bool) parent::integer($str);
    }
	
    return TRUE;
}

}