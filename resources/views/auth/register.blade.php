<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone_no">Phone No.:</label>
        <input type="text" id="phone_no" name="phone_no" required><br>

        <label for="phone_no">Country</label>
        <input type="text" id="country" name="country" required><br>

        <label for="phone_no">State</label>
        <input type="text" id="state" name="state" required><br>

        <label for="phone_no">City</label>
        <input type="text" id="city" name="city" required><br>



        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br>

        <label for="profile_image">Profile Image:</label>
        <input type="file" id="profile_image" name="profile_image"><br>

        <button type="submit">Register</button>
    </form>


</body>
</html>
