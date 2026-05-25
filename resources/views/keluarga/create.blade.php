<x-app-layout>

    <div style="padding: 30px; max-width: 700px; margin: auto;">

        <h1 style="font-size: 28px; font-weight: bold; margin-bottom: 20px;">
            Tambah Data Keluarga
        </h1>

        <form action="/keluarga" method="POST">

            @csrf

            <div style="margin-bottom: 15px;">
                <label>No KK</label><br>
                <input type="text"
						name="no_kk"
						maxlength="16"
						pattern="[0-9]{16}"
						inputmode="numeric"
						style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Kepala Keluarga</label><br>
                <input type="text" name="kepala_keluarga"
                    style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Alamat</label><br>
                <textarea name="alamat"
                    style="width:100%; padding:10px;"></textarea>
            </div>

            <div style="margin-bottom: 15px;">
                <label>RT</label><br>
                <input type="text" name="rt"
                    style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>RW</label><br>
                <input type="text" name="rw"
                    style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Desa</label><br>
                <input type="text" name="desa"
                    style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Kecamatan</label><br>
                <input type="text" name="kecamatan"
                    style="width:100%; padding:10px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Kabupaten</label><br>
                <input type="text" name="kabupaten"
                    style="width:100%; padding:10px;">
            </div>

            <button type="submit"
                style="background: blue; color:white; padding:10px 20px; border:none; border-radius:5px;">
                Simpan
            </button>

        </form>

    </div>

</x-app-layout>