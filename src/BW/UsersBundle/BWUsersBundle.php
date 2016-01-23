<?php

namespace BW\UsersBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BWUsersBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
