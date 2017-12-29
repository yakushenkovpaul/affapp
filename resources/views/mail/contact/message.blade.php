@component('mail::message')
# Message from contact form

<b>Name:</b> {{ $name }}<br>
<b>Email:</b> {{ $email }}<br>
<b>Subject:</b> {{ $subject }}<br>

{{ $text }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
