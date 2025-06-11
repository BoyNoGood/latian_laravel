document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('userForm');
    const dataBody = document.getElementById('dataBody');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const data = {
            id: formData.get('id'),
            name: formData.get('nameInput'),
            email: formData.get('emailInput'),
            name: formData.get('passInput'),
        };

        try {
            const response = await fetch('/user', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: JSON.stringify(data)
            });

            if (!response.ok) throw new Error('Gagal menyimpan data.');

            const result = await response.json();

            // Tambahkan baris baru ke tabel
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${result.name}</td>
                <td>${result.email}</td>
                <td>${result.password}</td>
                <td><button onclick="hapus(${result.id})">Hapus</button></td>
            `;
            dataBody.appendChild(newRow);

            form.reset(); // Kosongkan form
        } catch (error) {
            console.error(error);
            alert('Terjadi kesalahan saat mengirim data.');
        }
    });
});
