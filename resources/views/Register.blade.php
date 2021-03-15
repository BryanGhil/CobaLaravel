<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <title>Register</title>

</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form method="post" action="welcome">
        @csrf
        <p>First Name: </p>
        <input type="text" id="fname" name="fname"><br>
        <p>Last Name: </p>
        <input type="text" id="lname" name="lname"><br>
    
        <p>Gender</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
    
    <p>Nationality: </p>
    <select name="Gender" id="Gender">
        <option value="Indonesia">Indonesia</option>
    </select>
    
        <p>Language Spoken:</p>
        <input type="radio" id="Indonesia" name="language" value="Indonesia">
        <label for="Indonesia">Indonesia</label><br>
        <input type="radio" id="English" name="language" value="English">
        <label for="English">English</label><br>
        <input type="radio" id="other" name="language" value="other">
        <label for="other">Other</label>
    
    <p>Bio</p>
    <textarea id="Bio" name="Bio" rows="4" cols="50">
    
    </textarea>
    <p></p><br>
    <input type="submit" value="Submit">
    </form>
</body>

</html>