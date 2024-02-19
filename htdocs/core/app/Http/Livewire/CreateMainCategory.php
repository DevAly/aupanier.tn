<?php

namespace App\Http\Livewire;

use App\Helpers\SanitizeInput;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\Attributes\Entities\Category;

class CreateMainCategory extends Component
{
    public $name;
    public $slug;
    public $description;
    public $status_id;
    public $image_id;

    public function mount()
    {
        $this->status_id = '1';
    }


    public function closeModal()
    {
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function resetInput()
    {
        $this->name = null;
        $this->image_id = null;
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

    protected $listeners = ['imageIdSet'];

    public function imageIdSet($key = null, $value = null, $sectionId = null)
    {
        if($sectionId == 'add-new-category' && $key == 'image_id'){
//            $this->image_id = $value;
        }

    }

    public function saveCategory()
    {
        $this->validate();
        dd($this->image_id);
        // Use the name to generate the slug if it is not explicitly set by the user
        if (empty($this->slug)) {
            $this->slug = Str::slug($this->name);
        }

        // It looks like you have a custom slug creation method, you should ensure
        // that it is properly implemented and called here
        $this->slug = create_slug($this->slug, model_name: 'category', is_module: true, module_name: 'attributes');

        // Sanitize inputs
        $this->name = SanitizeInput::esc_html($this->name);
        $this->description = SanitizeInput::esc_html($this->description);

        // Create the category
        $product_category = Category::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'status_id' => $this->status_id,
            'image_id' => $this->image_id,
        ]);

        session()->flash('message', 'Category Added Successfully');
        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.create-main-category');
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }
}
