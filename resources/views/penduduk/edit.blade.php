<x-app-layout>

    <div style="padding:30px; max-width:700px; margin:auto;">

        <h1 style="font-size:30px; font-weight:bold;">
            Edit Anggota Keluarga
        </h1>

        <br>

        <form action="/penduduk/update/{{ $penduduk->id }}"
              method="POST">

            @csrf

            <div style="margin-bottom:15px;">
                <label>NIK</label><br>

                <input type="text"
                       name="nik"
                       value="{{ $penduduk->nik }}"
                       maxlength="16"
                       style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom:15px;">
                <label>Nama</label><br>

                <input type="text"
                       name="nama"
                       value="{{ $penduduk->nama }}"
                       style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom:15px;">
                <label>Jenis Kelamin</label><br>

                <select name="jenis_kelamin"
                        style="width:100%; padding:10px;">

                    <option value="Laki-laki"
                        {{ $penduduk->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                        Laki-laki
                    </option>

                    <option value="Perempuan"
                        {{ $penduduk->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                        Perempuan
                    </option>

                </select>
            </div>

            <div style="margin-bottom:15px;">
                <label>Tempat Lahir</label><br>

                <input type="text"
                       name="tempat_lahir"
                       value="{{ $penduduk->tempat_lahir }}"
                       style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom:15px;">
                <label>Tanggal Lahir</label><br>

                <input type="date"
                       name="tanggal_lahir"
                       value="{{ $penduduk->tanggal_lahir }}"
                       style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom:15px;">
                <label>Hubungan Keluarga</label><br>

                <select name="hubungan_keluarga"
                        style="width:100%; padding:10px;">

                    <option value="Kepala Keluarga"
                        {{ $penduduk->hubungan_keluarga == 'Kepala Keluarga' ? 'selected' : '' }}>
                        Kepala Keluarga
                    </option>

                    <option value="Istri"
                        {{ $penduduk->hubungan_keluarga == 'Istri' ? 'selected' : '' }}>
                        Istri
                    </option>

                    <option value="Anak"
                        {{ $penduduk->hubungan_keluarga == 'Anak' ? 'selected' : '' }}>
                        Anak
                    </option>

                </select>
            </div>

            <button type="submit"
                    style="background:orange; color:white; padding:10px 20px; border:none; border-radius:5px;">

                Update

            </button>

        </form>

    </div>

</x-app-layout>