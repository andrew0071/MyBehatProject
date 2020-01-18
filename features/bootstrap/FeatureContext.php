<?php

use Behat\Behat\Context\Context;
use Page\Homepage;

class FeatureContext implements Context
{


    public function __construct(Homepage $homepage)
    {
        
    }

/**
* @Given /^(?:|I )visited (?:|the )(?P<pageName>.*?)$/
*/
    public function iVisitedThe($pageName)
    {

    }

}
