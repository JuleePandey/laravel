<?php 
namespace app\Services\Admin;

use App\Interfaces\Admin\ProjectInterface;
use App\Interfaces\Admin\ProjectServiceInterface;


class ProjectServices implements  ProjectServiceInterface
{

private $ProjectInterface;

public function __construct(ProjectInterface $ProjectInterface) 
{
    $this->ProjectInterface = $ProjectInterface;
}

public function storeProject($request)
{
   return $this->ProjectInterface->storeProject($request);
}




}

?>