    @extends('layouts.main')
    @section('body')
        <h2>LATIHAN LARAVEL</h2>
        <form id="userForm" method="post" action="/user">
            @csrf
            <input type="text" name="nameInput" placeholder="Nama">
            <input type="email" name="emailInput" placeholder="Email">
            <input type="text" name="passInput" placeholder="Password">
            <button type="submit">Tambah</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="dataBody"></tbody>
        </table>

        @push('js')
            <script src="/assets/js/user/script.js"></script>
        @endpush
    @endsection
