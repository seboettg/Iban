<?php

namespace IBAN\Rule\DE;

class Rule003900 extends \IBAN\Rule\DE\Rule000000
{    
	public function __construct($localeCode, $instituteIdentification, $bankAccountNumber) {
	    parent::__construct($localeCode, "28020050", $bankAccountNumber);
    }

}