<h1>All emails</h1>
@foreach ($emails as $email)    
<div style="border: solid black 3px; padding: 10px; margin-bottom: 10px;">
    <h1>{{$email->subjects->subject}}</h1>
    <h5>from <span style="color: blue">{{$email->name}}</span> ({{$email->email}})</h5>
    <p>"{{$email->message}}"</p>
</div>
@endforeach