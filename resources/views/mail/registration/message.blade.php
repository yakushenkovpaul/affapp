@component('mail::message')

# Hallo

You've got a new account!



Login: {{ $email }}

Password: {{ $password }}

Click the link below to login

@component('mail::button', ['url' => $url, 'color' => 'blue'])
    Login
@endcomponent

Vielen Dank,<br>Dmitri von {{ config('app.name') }}

@component('mail::subcopy')
    Falls der "Login" Button nicht funktioniert, kopiere diesen Link in deine Browser-Navigationsleiste: [{{ $url }}]({{ $url }})
@endcomponent

@endcomponent