<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Repositories\Contracts\ServiceRepository;
class BlockHomeService extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $data = app(ServiceRepository::class);
        $services = $data->getLimit(3);

        return view('widgets.block_home_service', [
            'config' => $this->config,
            'data' => $services
        ]);
    }
}
