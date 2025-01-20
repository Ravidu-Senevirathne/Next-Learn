<x-guest-layout>
    <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-md">
        <div class="mb-6 flex flex-col items-center">
            <img src="{{ asset('images/logo1.jpeg') }}" alt="Next Learn Logo" class="w-24 h-24 object-contain">
            <h2 class="text-2xl font-bold text-text-primary mt-4">Create Your Account</h2>
        </div>
        
        <form method="POST" action="{{ route('register') }}" class="w-full max-w-2xl">
            @csrf  <!-- Make sure this line is present -->

            <!-- Role Selection -->
            <div class="mb-6">
                <x-input-label for="role" :value="__('I am a')" />
                <select id="role" name="role" class="w-full rounded-lg border-gray-300 focus:border-primary-blue focus:ring-primary-blue" required>
                    <option value="">Select your role</option>
                    <option value="student">Student</option>
                    <option value="lecturer">Lecturer</option>
                </select>
                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>

            <div class="grid grid-cols-2 gap-4">
                <!-- First Name -->
                <div>
                    <x-input-label for="first_name" :value="__('First Name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div>
                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Mobile Number -->
            <div class="mt-4">
                <x-input-label for="mobile" :value="__('Mobile Number')" />
                <x-text-input id="mobile" class="block mt-1 w-full" type="tel" name="mobile" :value="old('mobile')" required />
                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
            </div>

            <!-- Date of Birth -->
            <div class="mt-4">
                <x-input-label for="dob" :value="__('Date of Birth')" />
                <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required />
                <x-input-error :messages="$errors->get('dob')" class="mt-2" />
            </div>

            <!-- Additional Fields for Students -->
            <div id="student-fields" class="mt-4 hidden">
                <div class="mt-4">
                    <x-input-label for="education_level" :value="__('Current Education Level')" />
                    <select id="education_level" name="education_level" class="w-full rounded-lg border-gray-300">
                        <option value="">Select education level</option>
                        <option value="high_school">High School</option>
                        <option value="bachelors">Bachelor's Degree</option>
                        <option value="masters">Master's Degree</option>
                        <option value="phd">PhD</option>
                    </select>
                </div>
            </div>

            <!-- Additional Fields for Lecturers -->
            <div id="lecturer-fields" class="mt-4 hidden">
                <div class="mt-4">
                    <x-input-label for="specialization" :value="__('Specialization')" />
                    <x-text-input id="specialization" class="block mt-1 w-full" type="text" name="specialization" :value="old('specialization')" />
                </div>
                <div class="mt-4">
                    <x-input-label for="experience" :value="__('Years of Experience')" />
                    <x-text-input id="experience" class="block mt-1 w-full" type="number" name="experience" :value="old('experience')" />
                </div>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-6">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4 bg-primary-blue">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <script>
        const roleSelect = document.getElementById('role');
        const studentFields = document.getElementById('student-fields');
        const lecturerFields = document.getElementById('lecturer-fields');

        roleSelect.addEventListener('change', function() {
            if (this.value === 'student') {
                studentFields.classList.remove('hidden');
                lecturerFields.classList.add('hidden');
            } else if (this.value === 'lecturer') {
                lecturerFields.classList.remove('hidden');
                studentFields.classList.add('hidden');
            } else {
                studentFields.classList.add('hidden');
                lecturerFields.classList.add('hidden');
            }
        });
    </script>
</x-guest-layout>
