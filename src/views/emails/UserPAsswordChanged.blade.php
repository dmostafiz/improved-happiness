@component('mail::message')
# Password Changed
Hello {{ $name }}, <br>
Recently you have changed your password.<br>
Email: {{ $email }} <br>
Password: {{ $password }} 

Thanks,<br>
{{ config('app.name') }}
@endcomponent
