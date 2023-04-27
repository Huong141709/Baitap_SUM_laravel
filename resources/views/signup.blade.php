<form method="POST" action="">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
    </div>

    <div>
        <label for="date">Date:</label>
        <input type="date" name="date" id="date">
    </div>

    <div>
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone">
    </div>

    <div>
        <label for="web">Web:</label>
        <input type="url" name="web" id="web">
    </div>

    <div>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
    </div>
    <div>
        @include 'error'
    </div>
    <button type="submit">OK</button>
    <div class = "display-infor">
        @if (isset ($user))
        <p> Name: {{ $user['name']}}</p>
        <p> Age: {{ $user['age']}}</p>
        <p> Date: {{ $user['date']}}</p>
        <p> Phone: {{ $user['phone']}}</p>
        <p> Website : {{ $user['web']}}</p>
        <p> Address: {{ $user['address']}}</p>
        @endif
    </div>
</form>
