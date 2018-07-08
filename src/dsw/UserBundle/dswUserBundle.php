<?php

namespace dsw\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class dswUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
    
}
