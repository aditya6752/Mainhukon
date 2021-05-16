<!DOCTYPE html>
<body>
@component('mail::message')

<h2>Confirm your landlord.</h2> 

Landlord Name : {{$landlorddetails['name']}}<br>
Landlord Address : {{$landlorddetails['address']}}

<a href="http://127.0.0.1:8000/verified/{{$landlorddetails['username']}}/{{$landlorddetails['PID']}}/{{$landlorddetails['start_date']}}">
  Click Here to Confirm your Landlord
  </a>


Thanks,<br>
{{ config('app.name') }}
<br>
<br>
<br>
If the above link is not working then copy this link
http://127.0.0.1:8000/verified/{{$landlorddetails['username']}}/{{$landlorddetails['PID']}}/{{$landlorddetails['start_date']}}
and paste it into your browser.
@endcomponent
</body>
</html>