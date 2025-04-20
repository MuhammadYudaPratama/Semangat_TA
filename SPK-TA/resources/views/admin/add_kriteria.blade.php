@extends('layouts.layout')

@section('breadcrumb')
    Add Kriteria
@endsection

@section('container')
    <div class="p-7 bg-white shadow rounded-lg">
        <div class="flex justify-between mb-5">
            <div>
                <h1 class="text-3xl text-slate-900 font-medium mb-1">Tambah Kriteria</h1>
                <h5 class="text-base text-slate-700 mb-5">Dashboard/Tambah Kriteria</h5>
            </div>
        </div>
        <div class="relative overflow-x-auto px-1 sm:rounded-lg">
        <form action="{{ route('dashboard.kriteria.insert') }}" method="POST">
        @csrf
                <label>Nama Kriteria:</label>
                <input type="text" name="nama_kriteria" required>
                
                <label>Kode Kriteria:</label>
                <input type="text" name="kode_kriteria" required>

                <h3>Sub Kriteria</h3>
                <div id="subkriteria-container">
                    <div class="subkriteria-item">
                        <input type="text" name="sub_kriteria[]" placeholder="Label Sub Kriteria" required>
                        <input type="text" name="keterangan[]" placeholder="Keterangan Sub Kriteria" required>
                        <input type="number" step="0.01" name="bobot[]" placeholder="Bobot" required>
                        <button type="button" class="remove-subkriteria">Hapus</button>
                    </div>
                </div>
                <button type="button" id="add-subkriteria">+ Tambah Sub Kriteria</button>

                <button type="submit">Simpan</button>
            </form>

            <script>
            document.getElementById('add-subkriteria').addEventListener('click', function() {
                let container = document.getElementById('subkriteria-container');
                let newSubKriteria = document.createElement('div');
                newSubKriteria.classList.add('subkriteria-item');
                newSubKriteria.innerHTML = `
                    <input type="text" name="sub_kriteria[]" placeholder="Label Sub Kriteria" required>
                    <input type="text" name="keterangan[]" placeholder="Keterangan Sub Kriteria" required>
                    <input type="number" step="0.01" name="bobot[]" placeholder="Bobot" required>
                    <button type="button" class="remove-subkriteria">Hapus</button>
                `;
                container.appendChild(newSubKriteria);
            });

            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-subkriteria')) {
                    e.target.parentElement.remove();
                }
            });
            </script>

        </div>
    </div>
@endsection