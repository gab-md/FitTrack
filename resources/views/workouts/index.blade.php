<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
        $totalWorkouts = 0;
        $totalDuration = 0;
        $totalCalBurned = 0;
    @endphp
    <div>
        <h1>Today's Workouts</h1>
    </div>
    <div>
        @foreach($workouts as $w)
        <div>
            @php
                $totalWorkouts++;
                $totalDuration = $totalDuration + $w->duration;
                $totalCalBurned = $totalCalBurned + $w->calories_burned;
            @endphp
        </div>
        @endforeach
        <div class="row">
            <div class="col-md-1">Workouts: {{$totalWorkouts}}</div>
            <div class="col-md-1">Duration: {{$totalDuration}} min</div>
            <div class="col-md-1">Calories Burned: {{$totalCalBurned}} kcal</div>
        </div>
        <div>
            <h4>Today's Activity</h4>
        </div>
        @forelse($workouts as $w)
        <div>
            <h5>{{$w->name}}</h5>
        </div>
        <div>
           Duration : {{$w->duration}} | Calories Burned : {{$w->calories_burned}} | {{$w->type}}
        </div>
        @empty
            <div>No workouts logged yet. Start tracking your fitness journey!</div>
        @endforelse
    </div>
</body>
</html>