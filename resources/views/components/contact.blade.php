<section id="contact" class="py-16 bg-neutral-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-fade-in-left">
            <h2 class="text-4xl font-bold text-text-primary mb-4">Get in Touch</h2>
            <p class="text-text-secondary">We'd love to hear from you. Send us a message!</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="animate-fade-in-left space-y-6">
                <div class="flex items-center space-x-4 hover:transform hover:translate-x-2 transition-transform">
                    <div class="bg-primary-blue p-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-text-primary font-semibold">Phone</h3>
                        <p class="text-text-secondary">+94 72 018 1875</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4 hover:transform hover:translate-x-2 transition-transform">
                    <div class="bg-secondary-green p-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-text-primary font-semibold">Email</h3>
                        <p class="text-text-secondary">ravidu.dilruk@gmail.com</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4 hover:transform hover:translate-x-2 transition-transform">
                    <div class="bg-secondary-yellow p-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-text-primary font-semibold">Location</h3>
                        <p class="text-text-secondary">123 Education Street, Learning City</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <form action="{{ route('contact.submit') }}" method="POST" class="animate-fade-in-right space-y-6 bg-white p-8 rounded-lg shadow-lg">
                @csrf
                
                @if(session('success'))
                    <div class="bg-secondary-green text-white p-4 rounded-lg mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <div>
                    <label class="block text-text-primary mb-2" for="name">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-neutral-lightGray rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue" required>
                    @error('name')
                        <p class="text-accent-red text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-text-primary mb-2" for="email">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-neutral-lightGray rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue" required>
                    @error('email')
                        <p class="text-accent-red text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-text-primary mb-2" for="message">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-neutral-lightGray rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-blue" required></textarea>
                    @error('message')
                        <p class="text-accent-red text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <button type="submit" class="w-full bg-primary-blue hover:bg-primary-lightBlue text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-300 transform hover:scale-105">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
