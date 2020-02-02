@include('partials/header')
<h2>{{$contact->name}}</h2>
<p>{{$contact->number}}</p>
<p>{{$contact->email}}</p>
<p>{{$contact->service}}</p>
<p>{{$contact->location}}</p>
<p>{{$contact->message}}</p>
<p>{{$contact->service}}</p>

<form  method="POST" action="/admin-panel/contact-request/delete">
    @method('DELETE')
    @csrf
    <input name="contact-id" type="text" value="{{$contact->id}}" hidden>

<button type="submit">Delete</button>

</form>
