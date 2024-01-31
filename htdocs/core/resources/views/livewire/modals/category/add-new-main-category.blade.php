@php
    $all_status = \App\Models\Status::all();
@endphp
<div wire:ignore.self class="modal fade" id="category_create_modal_new" tabindex="-1" aria-labelledby="category_create_modal_newLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="max-height: unset">
            <div class="modal-header">
                <h5 class="modal-title">{{__('Create Category')}}</h5>
                <button type="button" class="close" data-bs-dismiss="modal"><span>×</span></button>
            </div>
            <div class="modal-body">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <form wire:submit.prevent="saveCategory">
                    <div class="form-group">
                        <label for="name">{{__('Name')}}</label>
                        <input type="text" class="form-control" id="create-name" wire:model="name"
                               placeholder="{{__('Name')}}">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="slug">{{__('Slug')}}</label>
                        <input type="text" class="form-control" id="create-slug" wire:model="slug"
                               placeholder="{{__('Slug')}}">
                        @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">{{__('Description')}}</label>
                        <textarea type="text" class="form-control" id="description" wire:model="description"
                                  placeholder="{{__('Description')}}"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <x-fields.media-upload :title="__('Image')" :name="'image_id'" wire:model="image_id" :dimentions="'120x120'"/>


                    <div class="form-group">
                        <label for="status">{{__('Status')}}</label>
                        <select wire:model="status_id" class="form-control" id="status">
                            @foreach($all_status as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                        @error('status_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Add New')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('close-modal', event => {
        setTimeout(() => {
            $('#category_create_modal_new').modal('hide');
        }, 3000);

    });
</script>
