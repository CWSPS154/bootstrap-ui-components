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
 * Date 09/10/22
 * */

namespace CWSPS154\BootstrapUiComponents\View\Components\Ui;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $label;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $placeholder;
    /**
     * @var string
     */
    public string $help;
    /**
     * @var string
     */
    public string $class;
    /**
     * @var bool
     */
    public bool $required;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $class
     * @param string|null $placeholder
     * @param string|null $id
     * @param string $label
     * @param string $help
     * @param bool $required
     */
    public function __construct(string $name,
                                string $class = '',
                                string $placeholder = null,
                                string $id = null,
                                string $label = '',
                                string $help = '',
                                bool   $required = false)
    {
        $this->name=$name;
        $this->id=$id ?? $name;
        $this->class=$class;
        $this->label=$label;
        $this->placeholder=$placeholder ?? $label;
        $this->help=$help;
        $this->required=$required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('bui-components::components.ui.textarea');
    }
}
