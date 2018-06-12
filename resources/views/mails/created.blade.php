@component('mail::message')
# Hi Patricia

@component('mail::table')
    | name           | email          | msg               |
    | -------------  |:------------:  | --------:         |
    | {{$msg->name}} | {{$msg->email}}| {{$msg->message}} |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
