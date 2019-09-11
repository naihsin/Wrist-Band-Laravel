<form action="/UploadUser" method="POST">
     <input type="text" placeholder="PersonalID" name="PersonalID">
     <br/>
     <input type="text" placeholder="Name" name="Name">
     <br/>
     <input type="password" placeholder="Password" name="Password">
     <br/>
     <input type="text" placeholder="Gender" name="Gender">
     <br/>
     <input type="text" placeholder="Age" name="Age">
     <br/>
     <input type="text" placeholder="Height" name="Height">
     <br/>
     <input type="text" placeholder="Weight" name="Weight">
     <br/>
     <input type="submit">
     @csrf
</form>
