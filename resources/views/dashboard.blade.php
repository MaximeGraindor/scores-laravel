@extends('layouts.main')

<a href="/team/create">Création d'une équipe</a>
<h1>Premier League 2020</h1>
<section>
    <h2>Standings</h2>
    <table>
        <thead>
        <tr>
            <td></td>
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
        <tr>
            <td>1</td>
            <th scope="row">Liverpool</th>
            <td>4</td>
            <td>12</td>
            <td>4</td>
            <td>0</td>
            <td>0</td>
            <td>10</td>
            <td>0</td>
            <td>10</td>
        </tr>
        <tr>
            <td>2</td>
            <th scope="row">Manchester City</th>
            <td>4</td>
            <td>10</td>
            <td>3</td>
            <td>0</td>
            <td>1</td>
            <td>12</td>
            <td>4</td>
            <td>8</td>
        </tr>
        <tr>
            <td>3</td>
            <th scope="row">Chelsea</th>
            <td>4</td>
            <td>8</td>
            <td>2</td>
            <td>0</td>
            <td>2</td>
            <td>9</td>
            <td>5</td>
            <td>4</td>
        </tr>
        <tr>
            <td>4</td>
            <th scope="row">Tottenham</th>
            <td>4</td>
            <td>7</td>
            <td>2</td>
            <td>1</td>
            <td>1</td>
            <td>7</td>
            <td>7</td>
            <td>0</td>
        </tr>
        <tr>
            <td>5</td>
            <th scope="row">Manchester United</th>
            <td>4</td>
            <td>2</td>
            <td>1</td>
            <td>2</td>
            <td>1</td>
            <td>2</td>
            <td>6</td>
            <td>-4</td>
        </tr>
        <tr>
            <td>6</td>
            <th scope="row">Arsenal</th>
            <td>4</td>
            <td>0</td>
            <td>0</td>
            <td>4</td>
            <td>0</td>
            <td>2</td>
            <td>12</td>
            <td>-10</td>
        </tr>
        </tbody>
    </table>
</section>
<section>
    <h2>Games played at {{$currentDate}}</h2>
    <table>
        <thead>
        <tr style="background: lightblue;">
            <th style=" border: 2px solid #e66465; text-align: center; font-weight: bold; font-family: Verdana">Date</th>
            <th style=" border: 2px solid #e66465; text-align: center; font-weight: bold; font-family: Verdana">Home Team</th>
            <th style=" border: 2px solid #e66465; text-align: center; font-weight: bold; font-family: Verdana">Home Team Goals</th>
            <th style=" border: 2px solid #e66465; text-align: center; font-weight: bold; font-family: Verdana">Away Team Goals</th>
            <th style=" border: 2px solid #e66465; text-align: center; font-weight: bold; font-family: Verdana">Away Team</th>
        </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
        <tr style="background: #ffe7e8;">
            <td style=" border: 2px solid #e66465; text-align: center; font-family: Verdana">{{$match->date}}</td>
            <td style=" border: 2px solid #e66465; text-align: center; font-family: Verdana">{{$match->home_team}}</td>
            <td style=" border: 2px solid #e66465; text-align: center; font-family: Verdana">{{$match->home_team_goals}}</td>
            <td style=" border: 2px solid #e66465; text-align: center; font-family: Verdana">{{$match->away_team_goals}}</td>
            <td style=" border: 2px solid #e66465; text-align: center; font-family: Verdana">{{$match->away_team}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</section>
<section>
    <h2>Encodage d’un nouveau match</h2>
    <form action="/" method="post">
        @csrf
        <label for="match-date">Date du match</label>
        <input type="date" id="match-date" name="match-date">
        <br>
        <label for="home-team">Équipe à domicile</label>
        <select name="home-team" id="home-team">
            @foreach($teams as $team)
                <option value="{{$team->name}}">{{$team->name}}</option>
            @endforeach
        </select>
        <label for="home-team-unlisted">Équipe non listée&nbsp;?</label>
        <input type="text" name="home-team-unlisted" id="home-team-unlisted">
        <br>
        <label for="home-team-goals">Goals de l’équipe à domicile</label>
        <input type="text" id="home-team-goals" name="home-team-goals">
        <br>
        <label for="away-team">Équipe visiteuse</label>
        <select name="away-team" id="away-team">
            @foreach($teams as $team)
                <option value="{{$team->name}}">{{$team->name}}</option>
            @endforeach
        </select>
        <label for="away-team-unlisted">Équipe non listée&nbsp;?</label>
        <input type="text" name="away-team-unlisted" id="away-team-unlisted">
        <br>
        <label for="away-team-goals">Goals de l’équipe visiteuse</label>
        <input type="text" id="away-team-goals" name="away-team-goals">
        <br>
        <input type="submit" value="Ajouter ce match">
    </form>
</section>
</body>
</html>

