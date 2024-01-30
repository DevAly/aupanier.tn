<?php

namespace App\Http\Livewire;

use App\Helpers\SanitizeInput;
use Livewire\Component;
use Modules\Attributes\Entities\Category;

class CreateMainCategory extends Component
{
    public $name;
    public $slug;
    public $description;
    public $status_id;
    public $image_id;

    public function closeModal()
    {

    }

    public function resetInput()
    {

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:191|unique:categories',
            'slug' => 'nullable|string|max:191',
            'description' => 'nullable',
            'status_id' => 'required|string|max:191',
            'image_id' => 'nullable|string|max:191',
        ];
    }

    public function saveCategory()
    {
        $data = $this->validate();
        $data['name'] = SanitizeInput::esc_html($data['name']);
        $data['description'] = SanitizeInput::esc_html($data['description']);

        $sluggable_text = $data['slug'] == null ? Str::slug(trim($data['name'])) : Str::slug($data['slug']);
        $slug = create_slug($sluggable_text, model_name: 'category',is_module: true, module_name: 'attributes');
        $data['slug'] = $slug;

        $product_category = Category::create($data);
        session()->flash('message','Student Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }


    public function render()
    {
        return view('livewire.create-main-category');
    }
}
