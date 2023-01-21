<h1>Hello!</h1>
<p>
    <p>
		You got a new message. Here's the details:<br>
        <br>
		Name: {{ $lead->name }}<br>
        Surname: {{ $lead->surname }}<br>
		Email: {{ $lead->email }}<br>
		Message:<br>
		{{ $lead->message }}
    </p>
</p>