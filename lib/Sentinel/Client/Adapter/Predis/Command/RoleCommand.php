<?php


namespace Sentinel\Client\Adapter\Predis\Command;


use Predis\Command\AbstractCommand;

class RoleCommand
    extends AbstractCommand
{
    public function getId()
    {
        return 'ROLE';
    }
} 