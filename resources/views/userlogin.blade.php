<form action="/UserLogin" method="POST">
    @csrf
     <input type="text" placeholder="id" name="id">
     <br/>
     <input type="password" placeholder="password" name="password">
     <br/>
     <input type="submit">
</form>