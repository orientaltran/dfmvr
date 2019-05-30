<?php

namespace App\Services;

use App\Services\AbstractService;

class HomeService extends AbstractService
{

	public function activeMenu ($url)
    {
        $data = [
            $url,
            $url.'/*',
        ];

        $active = '';
        
        if(request()->is($data)){
            $active = 'active';
        }
        
        return $active;    
    }

}