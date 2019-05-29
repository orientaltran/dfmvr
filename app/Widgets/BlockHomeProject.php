<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Repositories\Contracts\ProjectRepository;
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
        $projects = app(ProjectRepository::class);
        $data     = $projects->getLimit(3);

        return view('widgets.block_home_project', [
            'config' => $this->config,
            'data'   => $data,
        ]);
    }
}
