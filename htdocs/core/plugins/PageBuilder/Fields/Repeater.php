<?php


namespace Plugins\PageBuilder\Fields;


use App\Facades\GlobalLanguage;
use App\Helpers\LanguageHelper;
use Plugins\PageBuilder\Helpers\RepeaterField;
use Plugins\PageBuilder\Helpers\Traits\FieldInstanceHelper;
use Plugins\PageBuilder\Helpers\Traits\LanguageTabs;
use Plugins\PageBuilder\PageBuilderField;

class Repeater extends PageBuilderField
{
    use FieldInstanceHelper;

    /**
     * render field markup
     * */
    public function render()
    {
        $output = '<div class="iconbox-repeater-wrapper">';
        $all_settings = $this->args['settings'];
        $this->args['settings'] = RepeaterField::remove_default_fields($all_settings);
        $repeater_id = $this->args['settings'][$this->args['id']] ?? [];
        $last_field = array_key_last($repeater_id);
        $last_field = !empty($last_field) ? $repeater_id[$last_field] : [];
        if (!empty($last_field) && is_array($last_field) && count($last_field) > 0) {
            foreach ($last_field as $index => $value) {
                $output .= $this->render_repeater_fields($index);
            }
        } else {
            $output .= $this->render_repeater_fields();
        }

        $output .= '</div>';

        return $output;
    }

    private function render_fields($fields, $settings, $index = '', $lang = null): string
    {
        $output = '';
        foreach ($fields as $field) {
            $class = 'Plugins\PageBuilder\Fields\\' . $field['type'];
            $field_name = $field['name'] . '_' . $lang;
            $value = '';

            if (isset($settings[$this->args['id']][$field_name]) && is_array($settings[$this->args['id']][$field_name])){
                $value = $settings[$this->args['id']][$field_name][$index];
            }elseif (isset($settings[$this->args['id']][$field_name])){
                $value = $settings[$this->args['id']][$field_name];
            }

            $instance = new $class(array_merge($field,[
                'name' => $this->args['id'].'['.$field_name . '][]',
                'value' => $value,
                'class' => ["text-var-field","form-control"]
                ]));
            $instance->field_after();
            $output .= $instance->render();
        }

        return $output;
    }

    public function render_repeater_fields( $index = null): string
    {
        $myArray = array(
        '{settings.general.shop_phone}' => __('Shop Phone Number'),
        '{settings.general.shop_email}' => __('Shop Email'),
        '{settings.general.shop_address}' => __('Shop Address'),
        '{settings.general.site_title}' => __('Site Title'),
        '{settings.general.site_tag_line}' => __('Site Tag Line'),
        '{settings.general.lien_facebook}' => __('facebook link'),
        '{settings.general.lien_twitter}' => __('twitter link'),
        '{settings.general.lien_instagram}' => __('instagram link'),
        '{settings.general.lien_youtube}' => __('youtube link'),
        '{settings.general.lien_pinterest}' => __('pinterest link'),
        '{settings.general.TIN}' => __('TIN'),
        '{settings.general.tva_code}' => __('TVA code'),
    );

        $output = '<div class="all-field-wrap">';
        $output .= '<div style="display: flex; overflow-x: auto;">';
        foreach ($myArray as $key => $value) {
            if (changeInformation($key)) {
                $output .= ' <button class="btn-sm btn btn-info " style="margin-left: 5px;margin-right: 5px; white-space: nowrap;" type="button">';
                $output .= ' <div style="display: flex;align-items: center;">';

                $output .= $value;
                $output .= '</div></button>';
            }
        }

        $output .= '</div>';
        $output .= '<div class="action-wrap">  <span class="add"><i class="las la-plus"></i></span> <span class="remove"><i class="las la-trash"></i></span></div>';

        $language_tab_init = LanguageTabs::init();
        if (isset($this->args['multi_lang']) && $this->args['multi_lang']) {
            $output .= $language_tab_init->language_tab();
            $output .= $language_tab_init->language_tab_start();

            $all_languages = GlobalLanguage::all_languages();

            foreach ($all_languages as $key => $lang) {
                $output .= $language_tab_init->language_tab_content_start([
                    'class' => $key == 0 ? 'tab-pane fade show active' : 'tab-pane fade',
                    'id' => "nav-home-" . $lang->slug
                ]);
                $output .= $this->render_fields($this->args['fields'], $this->args['settings'], $index, $lang->slug);
                $output .= $language_tab_init->language_tab_content_end();
            }

            $output .= $language_tab_init->language_tab_end();
        } else {
            $output .= $this->render_fields($this->args['fields'], $this->args['settings'],$index);
        }
        $output .= '</div>';

        return $output;
    }
}
