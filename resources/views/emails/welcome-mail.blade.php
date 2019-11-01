@component('mail::message')
# Welcome to MaxwellFinancialServices


<h2>Welcome to the site:  {{$user['name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}}

Thanks,<br>
MaxwellStienberg
@endcomponent
