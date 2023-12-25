@extends(route_prefix().'admin.admin-master')
@section('title') {{__('Mylerz Settings')}} @endsection
@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">{{__('Mylerz Settings')}}</h4>
                <x-error-msg/>
                <x-flash-msg/>
                <form class="forms-sample" method="post" action="{{route(route_prefix().'admin.general.mylerz.settings')}}">
                    @csrf
                    <x-fields.switcher value="{{get_static_option('is_mylerz_enabled')}}" name="is_mylerz_enabled" label="{{__('Disable/Enable Mylerz')}}"/>
                    <x-fields.input type="text" value="{{get_static_option('mylerz_user_name')}}" name="mylerz_user_name" label="{{__('Username')}}"/>
                    <x-fields.input type="password" value="{{get_static_option('mylerz_password')}}" name="mylerz_password" label="{{__('Password')}}"/>

                    <button type="submit" class="btn btn-gradient-primary mt-5 me-2">{{__('Save Changes')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
