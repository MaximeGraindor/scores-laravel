<section>
    <h2>Standings</h2>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th></th>
            <th scope="col">Team</th>
            <th scope="col">Games</th>
            <th scope="col">Points</th>
            <th scope="col">Wins</th>
            <th scope="col">Losses</th>
            <th scope="col">Draws</th>
            <th scope="col">GF</th>
            <th scope="col">GA</th>
            <th scope="col">GD</th>
        </tr>
        </thead>

        <tbody>
        @foreach($teamsStats as $teamStat)
            <tr>
                <td>{{$teamStat->team_id}}</td>
                <th scope="row">{{$teamStat->name}}</th>
                <td>{{$teamStat->games}}</td>
                <td>{{$teamStat->points}}</td>
                <td>{{$teamStat->wins}}</td>
                <td>{{$teamStat->losses}}</td>
                <td>{{$teamStat->draws}}</td>
                <td>{{$teamStat->goals_for}}</td>
                <td>{{$teamStat->goals_against}}</td>
                <td>{{$teamStat->goals_difference}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>