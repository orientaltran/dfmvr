<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class BlockHomeAbout extends AbstractWidget
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
        //

        return view('widgets.block_home_about', [
            'config' => $this->config,
        ]);
    }
}
