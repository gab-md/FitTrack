<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
        $totalCal = 0;
        $totalProtein = 0;
        $totalCarbs = 0;
        $totalFats = 0;
    @endphp
    <div>
        <h1>Today's Intake</h1>
    </div>
    <div>
        @foreach($calories as $cal)
        <div>
            @php
                $totalCal = $totalCal + $cal->calorie;
                $totalProtein = $totalProtein + $cal->protein;
                $totalCarbs = $totalCarbs + $cal->carbs;
                $totalFats = $totalFats + $cal->fats;
            @endphp
        </div>
        @endforeach
        <div class="row">
            <div class="col-md-1">Calories: {{$totalCal}} kcal</div>
            <div class="col-md-1">Protein: {{$totalProtein}} g</div>
            <div class="col-md-1">Carbs: {{$totalCarbs}} g</div>
            <div class="col-md-1">Fats: {{$totalFats}} g</div>
        </div>
        <br>
        <div>
            <a href="/calories/create">+ Add Meal</a>
        </div>
        <div>
            <h4>Today's Meal</h4>
        </div>
        @forelse($calories as $cal)
        <div>
            <h5>{{$cal->name}}</h5>
        </div>
        <div>
           Calories : {{$cal->calorie}} kcal | P : {{$cal->protein}} g | C : {{$cal->carbs}} g | F : {{$cal->fats}} g | <strong>{{$cal->type}}</strong>
        </div>
        <div>
            <form action="/calories/{{$cal->id}}" method="POST">
                @csrf 
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        @empty
            <div>No meals logged</div>
        @endforelse
    </div>
</body>
</html>