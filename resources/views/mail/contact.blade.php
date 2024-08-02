@component('mail::message')
    **{{ $mailData['subject'] }}**

    Hi, {{ env('APP_NAME') }}

    I am {{ $mailData['name'] }}
    {{$mailData['email'] }}**
    {{ $mailData['message'] }}

    Thanks,
    {{ $mailData['name'] }}
@endcomponent

