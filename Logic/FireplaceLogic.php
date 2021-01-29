<?php
require_once dirname(__FILE__) . '/../DAL/FireplaceDAL.php';


class FireplaceLogic
{
    private $fireplaceDAL;

    function __construct()
    {
        $this->fireplaceDAL = new FireplaceDAL();
    }

    //gets getAllTickets function from the DAL layer
    function GetAllFireplaces()
    {
        return $this->fireplaceDAL->GetAllFireplaces();
    }
}