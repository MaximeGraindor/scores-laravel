
    <section class="container">
        <h2 class="mb-3 mt-3">Encodage d’un nouveau match</h2>

        <form action="/match" method="post">
            @csrf

            <div class="form-group">
                <label for="match-date">Date du match</label>
                <input type="date" id="match-date" name="match-date" class="form-control">
            </div>

            <div class="form-group">
                <label for="home-team">Équipe à domicile - <a href="/team/create">Équipe non listée&nbsp;?</a></label>
                <select name="home-team" id="home-team" class="form-control">
                    @foreach($teams as $team)
                        <option value="{{$team->slug}}">{{$team->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="home-team-goals">Goals de l’équipe à domicile</label>
                <input type="text" id="home-team-goals" name="home-team-goals" class="form-control">
            </div>

            <div class="form-group">
                <label for="away-team">Équipe visiteuse - <a href="/team/create">Équipe non listée&nbsp;?</a></label>
                <select name="away-team" id="away-team" class="form-control">
                    @foreach($teams as $team)
                        <option value="{{$team->slug}}">{{$team->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="away-team-goals">Goals de l’équipe visiteuse</label>
                <input type="text" id="away-team-goals" name="away-team-goals" class="form-control">
            </div>

            <input type="submit" value="Ajouter ce match">
        </form>
    </section>
