@component('mail::message')
# Hola

Gna sti?

@component('mail::button', ['url' => 'https://www.google.com'])
Vai al sito
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

{{-- prima parte si puó cambiare messaggio,dentro btn si puó passare link a sito  e app.name si cambia dentro file env --}}