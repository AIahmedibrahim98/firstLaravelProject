@component('mail::message')
# Hello {{$data->name}}

Welcome To Our Site .. Hope Enjoy Us.

@component('mail::button', ['url' => 'http://localhost:8000/home'])
Login Here
@endcomponent

Thanks,{{$data->email}}<br>
{{ config('app.name') }}
@endcomponent
