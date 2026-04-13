<div class="card">
    <h3>{{ $profile['name'] }}</h3>
    <p><strong>Age:</strong> {{ $profile['age'] }}</p>
    <p><strong>Program:</strong> {{ $profile['program'] }}</p>
    <p><strong>Email:</strong> {{ $profile['email'] }}</p>
    <p><strong>Gender:</strong> {{ ucfirst($profile['gender']) }}</p>

    <p><strong>Hobbies:</strong></p>
    <ul>
        @foreach($profile['hobbies'] as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>

    <p><strong>Bio:</strong> {{ $profile['bio'] }}</p>
</div>

resources/views/components/input.blade.php
<div>
    <label>{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" required>
</div>
