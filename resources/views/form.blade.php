<!DOCTYPE html>
<html>
<body>

<h2>Information</h2>

<form action="{{Route('store')}}" Method="post">
    @csrf
    @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="address">Address</label><br>
  <input type="text" id="address" name="address"><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
