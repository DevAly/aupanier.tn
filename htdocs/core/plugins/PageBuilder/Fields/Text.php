<?php


namespace Plugins\PageBuilder\Fields;


use Plugins\PageBuilder\Helpers\Traits\FieldInstanceHelper;
use Plugins\PageBuilder\PageBuilderField;

class Text extends PageBuilderField
{
    use FieldInstanceHelper;

    /**
     * render field markup
     * */
    public function render()
    {
        // TODO: Implement render() method.
        $output = '';
        $output .= $this->field_before();
        $output .= $this->label();
        $output .= '<input type="text" value="'.$this->value().'" name="'.$this->name().'" placeholder="'.$this->placeholder().'"  class="text-var-field '.$this->field_class().'"/>';
        $output .= $this->field_after();

        return $output;
    }
}
