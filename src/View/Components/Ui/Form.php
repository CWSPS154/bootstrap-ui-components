<?php

/**
 * PHP Version 8.1.11
 * Laravel Framework 9.34.0
 *
 * @category Component
 *
 * @package Laravel
 *
 * @author CWSPS154 <codewithsps154@gmail.com>
 *
 * @license MIT License https://opensource.org/licenses/MIT
 *
 * @link https://github.com/CWSPS154
 *
 * Date 08/10/22
 * */

namespace CWSPS154\BootstrapUiComponents\View\Components\Ui;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * @var string
     */
    public string $method;
    /**
     * @var bool
     */
    public bool $update;

    /**
     * Create a new component instance.
     *
     * @param string $method
     * @param bool $update
     */
    public function __construct(string $method = 'GET',bool $update=false)
    {
        $this->method=$method;
        $this->update=$update;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('bootstrap-ui-components::components.ui.form');
    }
}
