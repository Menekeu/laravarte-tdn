@component('mail::message')
# Hi Patricia

@component('mail::table')
    | name          | email        | msg      |
    | ------------- |:------------:| --------:|
    | {{$name}}     | {{$email}}   | {{$msg}} |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
