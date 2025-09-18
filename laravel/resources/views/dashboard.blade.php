@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

        <div class="bg-blue-100 border border-blue-300 text-blue-800 px-4 py-3 rounded mb-6">
            Selamat datang di aplikasi Lost & Found!
        </div>

        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold mb-4">Daftar Pengguna</h2>
            <livewire:user-list />
        </div>
    </div>
@endsection
