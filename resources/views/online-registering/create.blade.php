<x-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow">
            <h2 class="text-2xl font-bold text-center mb-8">Online Registration</h2>

            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-6">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="programme">Programme</label>
                        <select name="programme" id="programme" class="w-full px-3 py-2 border rounded-lg" required>
                            <option value="">Select Programme</option>
                            <option value="undergraduate">Undergraduate</option>
                            <option value="postgraduate">Postgraduate</option>
                            <option value="diploma">Diploma</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
                        <select name="title" id="title" class="w-full px-3 py-2 border rounded-lg" required>
                            <option value="">Select Title</option>
                            <option value="Mr">Mr.</option>
                            <option value="Mrs">Mrs.</option>
                            <option value="Miss">Miss</option>
                            <option value="Dr">Dr.</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Good Name</label>
                        <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="full_name">Full Name</label>
                        <input type="text" name="full_name" id="full_name" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="country">Country</label>
                        <input type="text" name="country" id="country" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nic">NIC</label>
                        <input type="text" name="nic" id="nic" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="mobile">Mobile</label>
                        <input type="tel" name="mobile" id="mobile" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="telephone">Telephone</label>
                        <input type="tel" name="telephone" id="telephone" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>

                    <div class="col-span-2 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address</label>
                        <textarea name="address" id="address" rows="3" class="w-full px-3 py-2 border rounded-lg" required></textarea>
                    </div>

                    <div class="col-span-2 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">How Did You Find Next Learn</label>
                        <textarea name="description" id="description" rows="4" class="w-full px-3 py-2 border rounded-lg" required></textarea>
                    </div>
                </div>

                <div class="text-center mt-6">
                    <button type="submit" class="bg-primary-blue hover:bg-primary-lightBlue text-white font-bold py-2 px-8 rounded-lg transition-colors">
                        Submit Registration
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
