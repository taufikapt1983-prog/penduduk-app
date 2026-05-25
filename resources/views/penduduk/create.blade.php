<x-app-layout>

    <div style="padding:30px; max-width:700px; margin:auto;">

        <h1 style="font-size:30px; font-weight:bold;">
            Tambah Anggota Keluarga
        </h1>

        <br>

        <form action="/penduduk/store" method="POST">

            @csrf

            <input type="hidden"
                   name="keluarga_id"
                   value="{{ $keluarga->id }}">

            <div style="margin-bottom:15px;">
                <label>NIK</label><br>
                <input type="text"
						name="nik"
						maxlength="16"
						pattern="[0-9]{16}"
						inputmode="numeric"
						style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom:15px;">
                <label>Nama</label><br>
                <input type="text"
                       name="nama"
                       style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom:15px;">
                <label>Jenis Kelamin</label><br>

                <select name="jenis_kelamin"
                        style="width:100%; padding:10px;">

                    <option value="Laki-laki">
                        Laki-laki
                    </option>

                    <option value="Perempuan">
                        Perempuan
                    </option>

                </select>
            </div>

            <div style="margin-bottom:15px;">
                <label>Tempat Lahir</label><br>
                <input type="text"
                       name="tempat_lahir"
                       style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom:15px;">
                <label>Tanggal Lahir</label><br>
                <input type="date"
                       name="tanggal_lahir"
                       style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom:15px;">
                <label>Hubungan Keluarga</label><br>

                <select name="hubungan_keluarga"
                        style="width:100%; padding:10px;">

                    <option value="Kepala Keluarga">
                        Kepala Keluarga
                    </option>

                    <option value="Istri">
                        Istri
                    </option>

                    <option value="Anak">
                        Anak
                    </option>

                </select>
            </div>

            <button type="submit"
                    style="background:blue; color:white; padding:10px 20px; border:none; border-radius:5px;">

                Simpan

            </button>

        </form>

    </div>

</x-app-layout>