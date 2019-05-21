<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class BlockHomeProject extends AbstractWidget
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
        $projects =  app(\App\Repositories\Eloquent\ProjectRepositoryEloquent::class);
        $data = $projects->getLimit(8);

        return view('widgets.block_home_project', [
            'config' => $this->config,
            'data' => $data,
        ]);
    }
}
