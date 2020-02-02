@include('partials/header')


<table>
<th>
    <tr>
        <td>ID</td>
        <td>Post</td>
    </tr>
</th>
<tbody>
@foreach($contacts as $contact)
<tr id="post-row-{{$contact->id}}">
    <td>{{$contact->id}}</td>
    <td><a href="{{route('view-contact', $contact)}}">{{$contact->name}}</a></td>
</tr>
@endforeach

</tbody>

</table>

