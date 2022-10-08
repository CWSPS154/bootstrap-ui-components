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

class Checkbox extends Component
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string|null
     */
    public ?string $class;
    /**
     * @var string|null
     */
    public ?string $value;
    /**
     * @var bool
     */
    public bool $required;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $id
     * @param string|null $class
     * @param string|null $value
     * @param bool $required
     */
    public function __construct(string $name,
                                string $id = null,
                                string $class = null,
                                string $value = null,
                                bool   $required = false)
    {
        $this->name=$name;
        $this->id=$id ?? $name;
        $this->class=$class;
        $this->value=$value;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('bui-components::components.ui.checkbox');
    }
}
