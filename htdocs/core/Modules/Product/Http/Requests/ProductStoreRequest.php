<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            "name" => "required|max:255",
            "slug" => "required|unique:products,id," . $this->id ?? 0,
            "summery" => "nullable|max:500",
            "description" => "nullable|max:500",
            "brand" => "nullable",
            "cost" => "required|numeric",
            "price" => "nullable|numeric",
            "sale_price" => "required|numeric",
            "sku" => ["nullable", ($this->id ?? null) ? Rule::unique("product_inventories")->ignore($this->id,"product_id") :  Rule::unique("product_inventories")],
            "quantity" => "nullable",
            "unit_id" => "nullable",
            "uom" => "nullable",
            "image_id" => "nullable",
            "product_gallery" => "nullable",
            "tags" => "nullable",
            "badge_id" => "nullable",
            "item_size" => "nullable",
            "item_color" => "nullable",
            "item_image" => "nullable",
            "item_additional_price" => "nullable",
            "item_extra_price" => "nullable",
            "item_stock_count" => "nullable",
            "item_extra_cost" => "nullable",
            "item_attribute_id" => "nullable",
            "item_attribute_name" => "nullable",
            "item_attribute_value" => "nullable",
            "category_id" => "nullable",
            "sub_category" => "nullable",
            "child_category" => "nullable",
            "delivery_option" => "nullable",
            "general_title" => "nullable",
            "general_description" => "nullable",
            "general_image" => "nullable",
            "facebook_title" => "nullable|max:255",
            "facebook_description" => "nullable|max:255",
            "facebook_image" => "nullable|max:255",
            "twitter_title" => "nullable|max:255",
            "twitter_description" => "nullable|max:255",
            "twitter_image" => "nullable|max:255",
            "min_purchase" => "nullable",
            "max_purchase" => "nullable",
            "is_refundable" => "nullable",
            "is_inventory_warn_able" => "nullable",
            "policy_description" => "nullable"
         ];
    }

    protected function prepareForValidation()
    {
        return $this->merge([
            "is_inventory_warn_able" => $this->is_inventory_warning
        ]);
    }

    public function messages(): array
    {
        return [
            "name.required" => __('Product name field is required'),
            "cost.required" => __("Cost filed is required for your accounting..."),
            "price.required" => __("Regular price is required."),
            "sale_price.required" => __("The field Sale price is required"),
            "sku.required" => __("SKU Stock Kipping Unit is required"),
            "uni.required" => __("Please Select a unit type"),
            "uom.required" => __("UOM Unit of measurement field is required.")
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
