<div class="column is-one-quarter" style="margin-top:107px">
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
            </figure>
        </div>

        <div class="card-content">
            <nav class="panel">
                <div class="panel-block">
                    name: <b>{{$user->name}}</b>
                </div>
                <div class="panel-block">
                    Affiliation: <b>{{ $user->houseRole->house->name }}</b>
                </div>
                <div class="panel-block">
                    Points: <p style="font-size: 8em" class="profile_sidebar_points">{{$user->getPoints()}}</p>
                </div>
            </nav>

            @if ($user->id === \Auth::user()->id)
                <nav class="panel user-only">
                    <div class="panel-content">
                        <div class="panel-block">
                            <a href="">Change password</a>
                        </div>
                    </div>
                </nav>
            @endif
        </div>




    </div>
</div>
