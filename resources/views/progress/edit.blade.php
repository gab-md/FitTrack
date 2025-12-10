<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/progress/{{ $stats->id }}/edit" method="POST">
        @csrf
        @method('PUT')
        <div>
        <label for="weight">Weight (kg)</label>
        <input type="number" name="weight" id="weight" value="{{ old('weight') }}">
    </div>
    <div>
        <label for="height">Height (cm)</label>
        <input type="number" name="height" id="height" value="{{ old('height') }}">
    </div>
    <div>
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="M" 
            {{ old('gender')=='M' ? 'selected': '' }}>
                Male
            </option>
            <option value="F" 
            {{ old('gender')=='F' ? 'selected': '' }}>
                Female
            </option>
        </select>
    </div>
    <div>
        <label for="age">Age</label>
        <input type="number" name="age" id="age" value="{{ old('age') }}">
    </div>
    <div>
        <label for="daily_calorie_goal">Daily Calorie Goal (kcal)</label>
        <input type="number" name="daily_calorie_goal" id="daily_calorie_goal" value="{{ old('daily_calorie_goal') }}">
    </div>
    <div>
        <label for="daily_protein_goal">Daily Protein Goal (g)</label>
        <input type="number" name="daily_protein_goal" id="daily_protein_goal" value="{{ old('daily_protein_goal') }}">
    </div>
    <div>
        <a href="/progress">Cancel</a>
    </div>
    <div>
        <button type="submit">Save Settings</button>
    </div>
    </form>
</body>
</html>