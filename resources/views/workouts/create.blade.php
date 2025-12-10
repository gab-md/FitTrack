<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA=Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('workouts.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Workout Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="type">Workout Type</label>
            <select name="type" id="type">
                <option value="Cardio" 
                {{ old('type')== 'Cardio' ? 'selected': '' }}>
                    Cardio
                </option>
                <option value="Strength Training" 
                {{ old('type')== 'Strength Training' ? 'selected': '' }}>
                    Strength Training
                </option>
                <option value="Yoga" 
                {{ old('type')== 'Yoga' ? 'selected': '' }}>
                    Yoga
                </option>
                <option value="Sports" 
                {{ old('type')== 'Sports' ? 'selected': '' }}>
                    Sports
                </option>
                <option value="Walking" 
                {{ old('type')== 'Walking' ? 'selected': '' }}>
                    Walking
                </option>
                <option value="Cycling" 
                {{ old('type')== 'Cycling' ? 'selected': '' }}>
                    Cycling
                </option>
                <option value="Swimming" 
                {{ old('type')== 'Swimming' ? 'selected': '' }}>
                    Swimming
                </option>
                <option value="Other" 
                {{ old('type')== 'Other' ? 'selected': '' }}>
                    Other
                </option>
            </select>
        </div>
        <div>
            <label for="duration">Duration (min)</label>
            <input type="number" name="duration" id="duration">
        </div>
        <div>
            <label for="calories_burned">Calories Burned</label>
            <input type="number" name="calories_burned" id="calories_burned">
        </div>
        <div>
            <a href="/workouts">Cancel</a>
        </div>
        <div>
            <button type="submit">Log Workout</button>
        </div>
    </form>
</body>
</html>