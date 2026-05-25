<x-app-layout>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-6 rounded shadow">

                <h1 class="text-2xl font-bold mb-4">
                    Import Data Penduduk
                </h1>

                @if(session('success'))

                    <div style="
                        background:#d1fae5;
                        color:#065f46;
                        padding:12px;
                        border-radius:6px;
                        margin-bottom:20px;
                    ">
                        {{ session('success') }}
                    </div>

                @endif

                <form
                    action="/import-penduduk"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf

                    <input
                        type="file"
                        name="file_excel"
                        required>

                    <br><br>

                    <button
                        type="submit"
                        style="
                            background:blue;
                            color:white;
                            padding:10px 20px;
                            border-radius:6px;
                        ">

                        Import Excel

                    </button>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>