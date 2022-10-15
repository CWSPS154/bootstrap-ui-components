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

class Select extends Component
{
    /**
     * @var string
     */
    public string $label;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string|array|null
     */
    public string|array|null $options;
    /**
     * @var string|null
     */
    public ?string $class;
    /**
     * @var bool
     */
    public bool $required;
    /**
     * @var bool
     */
    public bool $multiple;
    /**
     * @var string|null
     */
    public ?string $value;
    /**
     * @var bool
     */
    public string|bool $default;

    /**
     * Create a new component instance.
     *
     * @param string $label
     * @param string $name
     * @param string $id
     * @param array|string|null $options
     * @param string|null $class
     * @param bool $multiple
     * @param string|null $value
     * @param string $default
     */
    public function __construct(
        string       $label,
        string       $name,
        string       $id,
        array|string $options = null,
        string       $class = null,
        bool         $required = false,
        bool         $multiple = false,
        string       $value = null,
        string       $default = '-- select --'
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
        $this->options = $options;
        $this->class = $class;
        $this->required = $required;
        $this->multiple = $multiple;
        $this->value = $value;
        $this->default = $default;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('bootstrap-ui-components::components.ui.select');
    }
}
