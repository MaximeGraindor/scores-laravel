<section>
    <h2 class="mt-5 mb-2">Games played at {{$currentDate}}</h2>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th><a href="/?m=date">Date</a></th>
            <th><a href="/?m=home_team_name">Home Team</a></th>
            <th><a href="/?m=home_team_goals">Home Team Goals</a></th>
            <th><a href="/?m=away_team_goals">Away Team Goals</a></th>
            <th><a href="/?m=away_team_name">Away Team</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
            <tr>
                <td>{{$match->date}}</td>
                <td>{{$match->home_team_name}}</td>
                <td>{{$match->home_team_goals}}</td>
                <td>{{$match->away_team_goals}}</td>
                <td>{{$match->away_team_name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>