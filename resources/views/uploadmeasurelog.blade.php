<form action="/UploadMeasureLog" method="POST">
    <input type="text" placeholder="SerialID" name="SerialID">
    <br/>
    <input type="text" placeholder="PersonalID" name="PersonalID">
    <br/>
    <input type="text" placeholder="BandID" name="BandID">
    <br/>
    <input type="text" placeholder="Steps" name="Steps">
    <br/>
    <input type="text" placeholder="Distance" name="Distance">
    <br/>
    <input type="text" placeholder="ExerciseCalories" name="ExerciseCalories">
    <br/>
    <input type="text" placeholder="RestCalories" name="RestCalories">
    <br/>
    <input type="text" placeholder="Heartrate" name="Heartrate">
    <br/>
    <input type="text" placeholder="StartTime" name="StartTime">
    <br/>
    <input type="text" placeholder="StopTime" name="StopTime">
    <br/>
    <input type="submit">
    @csrf
</form>
