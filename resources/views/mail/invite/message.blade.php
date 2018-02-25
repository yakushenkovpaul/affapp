@component('mail::message')

# Herzlichen Glückwunsch! Du bist eingeladen!


Deine Teamkollegen haben Dich nicht vergessen und haben Dich zum Donatiq eingeladen.

Donatiq ist eine neue Art, gemeinsam Geld zu sammeln

Kopiere Deinen persönlichen Einladungscode und klicke auf den Button unten, um Dich anzumelden

Dein persönlicher Code ist: {{ $code }}

You has been referred by : {{ $user->name }} {{ $user->email }}

Click the link below to sign up:

@component('mail::button', ['url' => $url, 'color' => 'blue'])
    Sign up
@endcomponent

Vielen Dank,<br>Dmitri von {{ config('app.name') }}

@component('mail::subcopy')
    Falls der "Sign up" Button nicht funktioniert, kopiere diesen Link in deine Browser-Navigationsleiste: [{{ $url }}]({{ $url }})
@endcomponent

@endcomponent