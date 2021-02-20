<h1> Wuenas Noshes<h1>

<form action="{{route('coins.store')}}" method="post">
@csrf

  <label >First name:</label>
  <input type="text" name = 'first'><br><br>

  <label >Last name:</label>
  <input type="text" name='last'><br><br>


  <input type="submit" value="Store">
</form>

