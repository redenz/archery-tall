<div>
    <div>{{ $this->archerySession->name }}</div>
    <div>
        Targets
    </div>
    <table>
        @foreach($this->archerySession->scores as $score)
        <tr>
            <td> Target {{$score->target}} </td>
            <td>{{ $score->distance}} yds</td>
            <td>{{ $score->score }}</td>
        </tr>
        @endforeach
    </table>


</div>
