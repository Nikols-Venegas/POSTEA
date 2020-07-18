@component('mail::message')
# Introduction

Bienvenido {{$user->name }} a la Aplicación POSTEA!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
