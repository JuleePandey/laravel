<?php 
namespace app\Services\Admin;

use App\Interfaces\Admin\ProjectformInterface;
use App\Interfaces\Admin\ProjectformServiceInterface;


class ProjectformServices implements  ProjectformServiceInterface
{

private $ProjectformInterface;

public function __construct(ProjectformInterface $ProjectformInterface) 
{
    $this->ProjectformInterface = $ProjectformInterface;
}

public function Projectform($request)
{
   return $this->ProjectformInterface->Projectform($request);
}

}

?>