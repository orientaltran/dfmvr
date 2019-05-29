<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Repositories\Contracts\NewsRepository;

class BlockHomeNews extends AbstractWidget
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
        $news =  app(NewsRepository::class);
        $data = $news->getLimit(4);

        return view('widgets.block_home_news', [
            'config' => $this->config,
            'data' => $data,
        ]);
    }
}
