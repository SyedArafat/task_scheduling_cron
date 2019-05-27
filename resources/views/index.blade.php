<ul style="text-align: left">
    @foreach($ms as $m)
        <li>{{$m->body}}</li>
    @endforeach
</ul>