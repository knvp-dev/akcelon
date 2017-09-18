@component('mail::message')
# Contactformulier akcelon.be

Naam: {{ $data['name'] }} <br>
Email: {{ $data['email'] }} <br>
Onderwerp: {{ $data['subject'] }} <br> <br>
Bericht: <br>
<p>{{ $data['message'] }}</p>

@endcomponent
