@component('mail::message')
# Introduction

Thank You...

@component('mail::button', ['url' => 'http://laravelbasic.com'])
Start Page
@endcomponent
@component('mail::panel')
    Something
@endcomponent
@component('mail::table')
    | User       | Password         | Example  |
    | ------------- |:-------------:| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
