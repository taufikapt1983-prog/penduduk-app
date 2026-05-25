<x-app-layout>

<div style="padding:30px; max-width:700px; margin:auto;">

    <h1 style="font-size:30px; font-weight:bold;">
        Edit Keluarga
    </h1>

    <br>

    <form action="/keluarga/update/{{ $keluarga->id }}"
          method="POST">

        @csrf

        <div style="margin-bottom:15px;">
            <label>No KK</label><br>

            <input type="text"
                   name="no_kk"
                   value="{{ $keluarga->no_kk }}"
                   maxlength="16"
                   style="width:100%; padding:10px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Kepala Keluarga</label><br>

            <input type="text"
                   name="kepala_keluarga"
                   value="{{ $keluarga->kepala_keluarga }}"
                   style="width:100%; padding:10px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Alamat</label><br>

            <input type="text"
                   name="alamat"
                   value="{{ $keluarga->alamat }}"
                   style="width:100%; padding:10px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>RT</label><br>

            <input type="text"
                   name="rt"
                   value="{{ $keluarga->rt }}"
                   style="width:100%; padding:10px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>RW</label><br>

            <input type="text"
                   name="rw"
                   value="{{ $keluarga->rw }}"
                   style="width:100%; padding:10px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Desa</label><br>

            <input type="text"
                   name="desa"
                   value="{{ $keluarga->desa }}"
                   style="width:100%; padding:10px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Kecamatan</label><br>

            <input type="text"
                   name="kecamatan"
                   value="{{ $keluarga->kecamatan }}"
                   style="width:100%; padding:10px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Kabupaten</label><br>

            <input type="text"
                   name="kabupaten"
                   value="{{ $keluarga->kabupaten }}"
                   style="width:100%; padding:10px;">
        </div>

        <button type="submit"
                style="background:orange; color:white; padding:10px 20px; border:none; border-radius:5px;">

            Update

        </button>

    </form>

</div>

</x-app-layout>