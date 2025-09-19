@extends('layouts.auth')

@section('content')
<div class="flex h-screen">
    <!-- Left: Form -->
    <div class="w-full md:w-1/2 flex items-center justify-center bg-gray-50">
        <div class="w-3/4 max-w-md">
            <div class="text-center mb-6">
                <img src="/footer-logo.png" class="mx-auto h-12 mb-4">
                <h2 class="text-xl tracking-wide">CREATE YOUR ACCOUNT</h2>
            </div>

            <!-- Kotak form -->
            <div class=" border-gray-300 rounded-lg p-6 bg-100">
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1 text-gray-700">Email</label>
                        <input type="email" name="email"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                            placeholder="Enter your email" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1 text-gray-700">Phone Number</label>
                        <input type="text" name="phone"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                            placeholder="Enter your phone number" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1 text-gray-700">Password</label>
                        <input type="password" name="password"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                            placeholder="Enter your password" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1 text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                            placeholder="Confirm your password" required>
                    </div>

                    <button type="submit" class="w-full bg-black text-white py-2 rounded">Register</button>
                </form>

                <div class="flex justify-between mt-3 text-sm">
                    <a href="/login">Already have an account? Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Right: Gambar -->
    <div class="w-1/2 h-screen hidden md:block">
        <img src="kebunraya.jpg" class="w-full h-full object-cover">
    </div>
</div>
@endsection
