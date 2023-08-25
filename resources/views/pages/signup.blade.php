<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}" />
</head>

<body>
    @include('componanets.navbar')
    <div class="signup-container ">
        <h1>Sign Up</h1>
        <form action="/signup" method="post" class="display-6">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required />
            @error('name')
                <p>{{ $message }}</p>
            @enderror

            <label for="email">Email</label>
            <input type="text" id="email" name="email" required />
            @error('email')
                <p>{{ $message }}</p>
            @enderror

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
            @error('password')
                <p>{{ $message }}</p>
            @enderror

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="password_confirmation" required />

            <label for="user-role">Who Are you</label>
            <select id="user-role" name="role" required>
                <option value="patient" selected>Patient</option>
                <option value="doctor">Doctor</option>
                <option value="nurse">Nurse</option>
            </select>

            <div id="doctor-nurse" hidden disabled>
                <label for="specialty">Specialization</label>
                <input type="text" id="specialty" name="specialty" class=" d-block container" />
            </div>

            <label for="age">Age</label>
            <input type="number" id="age" name="age" required />
            @error('age')
                <p>{{ $message }}</p>
            @enderror

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required />
            @error('phone')
                <p>{{ $message }}</p>
            @enderror

            <label for="profile_pic">Profile Picture</label>
            <input type="file" id="profile_pic" name="image" accept="image/*" required>
            <button type="submit">Sign Up</button>
            <button type="reset">Reset</button>

        </form>
        <p>Already have an account? <a href="/login">Login</a></p>
    </div>
</body>
@include('sweetalert::alert')

</html>


<script>
    let select = document.querySelector('#user-role');

    function user_role_change() {
        let value = select.value.toLowerCase()
        if (value == "patient") {
            let div = document.querySelector("#doctor-nurse")
            div.setAttribute("hidden", "")
            document.querySelector("#specialty").removeAttribute("required")
        } else {
            let div = document.querySelector("#doctor-nurse")
            div.removeAttribute("hidden")
            document.querySelector("#specialty").setAttribute("required")
        }
    }
    user_role_change()
    select.addEventListener("change", user_role_change);

    // Prevent resubmission the from everytime
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
