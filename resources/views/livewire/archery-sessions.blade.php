<div>
    <ul>
        @forelse ($sessions as $session)
        <li><a href="/sessions/{{$session->id}}">{{$session->name}}</li>
        @empty

        @endforelse
    </ul>
</div>
