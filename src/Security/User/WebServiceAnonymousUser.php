<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 09/10/2018
 * Time: 9:02 AM
 */

namespace App\Security\User;


class WebServiceAnonymousUser extends WebServiceUser
{
    public function __construct()
    {
        parent::__construct(null, array('IS_AUTHENTICATED_ANONYMOUSLY'));
    }

    public function getUsername()
    {
        return null;
    }
}