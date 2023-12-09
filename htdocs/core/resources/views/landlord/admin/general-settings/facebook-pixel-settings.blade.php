@extends(route_prefix().'admin.admin-master')
@section('title') {{__('Facebook Pixel Settings')}} @endsection
@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">{{__('Facebook Pixel Settings')}}</h4>
                <x-error-msg/>
                <x-flash-msg/>
                <form class="forms-sample" method="post" action="{{route(route_prefix().'admin.general.facebook_pixel.settings')}}">
                    @csrf
                    <x-fields.switcher value="{{get_static_option('is_facebook_pixel_enabled')}}" name="is_facebook_pixel_enabled" label="{{__('Disable/Enable Facebook Pixel')}}"/>
                    <x-fields.input type="text" value="{{get_static_option('facebook_pixel_id')}}" name="facebook_pixel_id" label="{{__('Facebook Pixel Id')}}"/>

                    <button type="submit" class="btn btn-gradient-primary mt-5 me-2">{{__('Save Changes')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
