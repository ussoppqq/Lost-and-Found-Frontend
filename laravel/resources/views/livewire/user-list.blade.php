<div>
    <h2>Daftar Users</h2>
    <table class="table-auto border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Name</th>
                <th class="border border-gray-300 px-4 py-2">Email</th>
                <th class="border border-gray-300 px-4 py-2">Phone</th>
                <th class="border border-gray-300 px-4 py-2">Company</th>
                <th class="border border-gray-300 px-4 py-2">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $user['full_name'] }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $user['email'] }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $user['phone_number'] ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $user['company']['company_name'] ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $user['role']['role_name'] ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
