<form action="/UploadSleepSummary" method="POST">
    <input type="text" placeholder="SerialID" name="SerialID">
    <br/>
    <input type="text" placeholder="PersonalID" name="PersonalID">
    <br/>
    <input type="text" placeholder="BandID" name="BandID">
    <br/>
    <input type="text" placeholder="SleepStartTime" name="SleepStartTime">
    <br/>
    <input type="text" placeholder="SleepStopTime" name="SleepStopTime">
    <br/>
    <input type="text" placeholder="DeepSleepStartTime" name="DeepSleepStartTime">
    <br/>
    <input type="text" placeholder="LightSleepStartTime" name="LightSleepStartTime">
    <br/>
    <input type="text" placeholder="OtherSleepStartTime" name="OtherSleepStartTime">
    <br/>
    <input type="submit">
    @csrf
</form>
