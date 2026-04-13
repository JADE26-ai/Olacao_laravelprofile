<x-layout>

    <form method="POST" action="{{ route('profile.store') }}">
        @csrf

        <x-input label="Name" name="name" type="text" />
        <x-input label="Age" name="age" type="number" />
        <x-input label="Program" name="program" type="text" />
        <x-input label="Email" name="email" type="email" />

        <div>
            <label>Gender:</label>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div>
            <label>Hobbies (at least 5):</label>
            @for($i = 0; $i < 5; $i++)
                <input type="text" name="hobbies[]" required>
            @endfor
        </div>

        <div>
            <label>Biography:</label>
            <textarea name="bio" required></textarea>
        </div>

        <button class="btn" type="submit">Add Profile</button>
    </form>

    <hr>

    <h2>Saved Profiles</h2>

    @forelse($profiles as $profile)
        <x-profile-card :profile="$profile" />
    @empty
        <p>No profiles yet.</p>
    @endforelse

    @if(count($profiles) > 0)
        <form method="POST" action="{{ route('profile.clear') }}">
            @csrf
            <button class="btn" type="submit">Clear All Profiles</button>
        </form>
    @endif

</x-layout>