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
    <form action="{{ route('calories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Meal Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="type">Meal Type</label>
            <select name="type" id="type">
                <option value="Breakfast" 
                {{ old('type')== 'Breakfast' ? 'selected': '' }}>
                    Breakfast
                </option>
                <option value="Lunch" 
                {{ old('type')== 'Lunch' ? 'selected': '' }}>
                    Lunch
                </option>
                <option value="Dinner" 
                {{ old('type')== 'Dinner' ? 'selected': '' }}>
                    Dinner
                </option>
                <option value="Snack" 
                {{ old('type')== 'Snack' ? 'selected': '' }}>
                    Snack
                </option>
            </select>
        </div>
        <div>
            <label for="calorie">Calories (kcal)</label>
            <input type="number" name="calorie" id="calorie">
        </div>
        <div>
            <label for="protein">Protein (g)</label>
            <input type="number" name="protein" id="protein">
        </div>
        <div>
            <label for="carbs">Carbs (g)</label>
            <input type="number" name="carbs" id="carbs">
        </div>
        <div>
            <label for="fats">Fats (g)</label>
            <input type="number" name="fats" id="fats">
        </div>
        <div>
            <a href="/calories">Cancel</a>
        </div>
        <div>
            <button type="submit">Add Meal</button>
        </div>
    </form>
</body>
</html>