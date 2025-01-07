<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Kesehatan Mental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-white">
    <x-navbar />
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg">
        {{ session('success') }}
    </div>
    @endif
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4 text-center text-gray-800">Smartphone Addiction Scale - Short Version (SAS-SV)</h1>
        <p class="text-sm text-gray-700 mb-6 text-center">
            Bacalah setiap pernyataan berikut dan pilih opsi yang paling sesuai dengan Anda. Pilih nilai dari <strong>Sangat Tidak Setuju (1)</strong> hingga <strong>Sangat Setuju (6)</strong>.
        </p>
        <form id="sasTestForm" action="{{ route('tes.storeSAS') }}" method="POST" class="space-y-6">
            @csrf
            <input type="hidden" name="nama_lengkap" value="{{ session('namalengkap') }}">
            <input type="hidden" id="hasilTes" name="hasil_tes">
            <input type="hidden" id="interpretasiTes" name="interpretasi">
            <input type="hidden" id="test" name="test">

            <!-- Soal -->
            <div class="space-y-4">
                <!-- Soal Template -->
                <div class="space-y-2">
                    <label for="q1" class="text-gray-700">
                        1. Karena penggunaan smartphone, saya sulit melakukan pekerjaan sesuai dengan jadwal yang sudah saya tentukan sebelumnya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q1" value="1"> 1</label>
                        <label><input type="radio" name="q1" value="2"> 2</label>
                        <label><input type="radio" name="q1" value="3"> 3</label>
                        <label><input type="radio" name="q1" value="4"> 4</label>
                        <label><input type="radio" name="q1" value="5"> 5</label>
                        <label><input type="radio" name="q1" value="6"> 6</label>
                    </div>
                </div>

                <!-- Duplikat soal untuk soal 2-10 -->
                <!-- Gunakan pengulangan server-side jika mungkin -->
                <!-- Contoh soal lainnya -->
                <div class="space-y-2">
                    <label for="q2" class="text-gray-700">
                        2. Saya merasa sulit berkonsentrasi saat di kelas, mengerjakan tugas, atau bekerja disebabkan oleh penggunaan smartphone.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q2" value="1"> 1</label>
                        <label><input type="radio" name="q2" value="2"> 2</label>
                        <label><input type="radio" name="q2" value="3"> 3</label>
                        <label><input type="radio" name="q2" value="4"> 4</label>
                        <label><input type="radio" name="q2" value="5"> 5</label>
                        <label><input type="radio" name="q2" value="6"> 6</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="q3" class="text-gray-700">
                        3. Saya merasakan nyeri pada pergelangan tangan atau leher bagian belakang saat menggunakan smartphone.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q3" value="1"> 1</label>
                        <label><input type="radio" name="q3" value="2"> 2</label>
                        <label><input type="radio" name="q3" value="3"> 3</label>
                        <label><input type="radio" name="q3" value="4"> 4</label>
                        <label><input type="radio" name="q3" value="5"> 5</label>
                        <label><input type="radio" name="q3" value="6"> 6</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="q4" class="text-gray-700">
                        4. Saya tidak sanggup apabila saya diharuskan untuk tidak memiliki smartphone.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q4" value="1"> 1</label>
                        <label><input type="radio" name="q4" value="2"> 2</label>
                        <label><input type="radio" name="q4" value="3"> 3</label>
                        <label><input type="radio" name="q4" value="4"> 4</label>
                        <label><input type="radio" name="q4" value="5"> 5</label>
                        <label><input type="radio" name="q4" value="6"> 6</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="q5" class="text-gray-700">
                        5. Saya merasa tidak sabaran dan gelisah saat saya tidak memegang smartphone milik saya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q5" value="1"> 1</label>
                        <label><input type="radio" name="q5" value="2"> 2</label>
                        <label><input type="radio" name="q5" value="3"> 3</label>
                        <label><input type="radio" name="q5" value="4"> 4</label>
                        <label><input type="radio" name="q5" value="5"> 5</label>
                        <label><input type="radio" name="q5" value="6"> 6</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="q6" class="text-gray-700">
                        6. Saya berpikir tentang smartphone saya bahkan saat saya tidak menggunakannya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q6" value="1"> 1</label>
                        <label><input type="radio" name="q6" value="2"> 2</label>
                        <label><input type="radio" name="q6" value="3"> 3</label>
                        <label><input type="radio" name="q6" value="4"> 4</label>
                        <label><input type="radio" name="q6" value="5"> 5</label>
                        <label><input type="radio" name="q6" value="6"> 6</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="q7" class="text-gray-700">
                        7. Saya tidak akan pernah berhenti menggunakan smartphone meskipun saya tahu bahwa kehidupan sehari-hari saya sudah sangat terpengaruh oleh smartphone.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q7" value="1"> 1</label>
                        <label><input type="radio" name="q7" value="2"> 2</label>
                        <label><input type="radio" name="q7" value="3"> 3</label>
                        <label><input type="radio" name="q7" value="4"> 4</label>
                        <label><input type="radio" name="q7" value="5"> 5</label>
                        <label><input type="radio" name="q7" value="6"> 6</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="q8" class="text-gray-700">
                        8. Saya memeriksa smartphone saya secara berkala sehingga saya tidak akan melewatkan percakapan orang lain di media sosial.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q8" value="1"> 1</label>
                        <label><input type="radio" name="q8" value="2"> 2</label>
                        <label><input type="radio" name="q8" value="3"> 3</label>
                        <label><input type="radio" name="q8" value="4"> 4</label>
                        <label><input type="radio" name="q8" value="5"> 5</label>
                        <label><input type="radio" name="q8" value="6"> 6</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="q9" class="text-gray-700">
                        9. Saya selalu menggunakan smartphone lebih lama dari waktu yang saya rencanakan.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q9" value="1"> 1</label>
                        <label><input type="radio" name="q9" value="2"> 2</label>
                        <label><input type="radio" name="q9" value="3"> 3</label>
                        <label><input type="radio" name="q9" value="4"> 4</label>
                        <label><input type="radio" name="q9" value="5"> 5</label>
                        <label><input type="radio" name="q9" value="6"> 6</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label for="q10" class="text-gray-700">
                        10. Orang-orang di sekitar saya memberitahu saya bahwa saya menggunakan smartphone secara berlebihan.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q10" value="1"> 1</label>
                        <label><input type="radio" name="q10" value="2"> 2</label>
                        <label><input type="radio" name="q10" value="3"> 3</label>
                        <label><input type="radio" name="q10" value="4"> 4</label>
                        <label><input type="radio" name="q10" value="5"> 5</label>
                        <label><input type="radio" name="q10" value="6"> 6</label>
                    </div>
                </div>
                <!-- Tambahkan semua soal hingga soal ke-10 -->
            </div>
            <!-- Submit -->
            <button type="button" id="submitBtn" class="bg-blue-500 text-white px-6 py-2 rounded-lg w-full mt-4">
                Kirim Jawaban
            </button>
        </form>
    </div>

    <script>
        document.getElementById('submitBtn').addEventListener('click', function () {
            let totalScore = 0;
            let allAnswered = true;

            for (let i = 1; i <= 10; i++) {
                const answer = document.querySelector(`input[name="q${i}"]:checked`);
                if (answer) {
                    totalScore += parseInt(answer.value);
                } else {
                    allAnswered = false;
                }
            }

            if (!allAnswered) {
                alert('Harap isi semua pertanyaan sebelum mengirimkan.');
                return;
            }

            let interpretation = '';
            if (totalScore >= 10 && totalScore <= 20) {
                interpretation = 'Kecanduan Ringan';
            } else if (totalScore >= 21 && totalScore <= 40) {
                interpretation = 'Kecanduan Sedang';
            } else if (totalScore >= 41 && totalScore <= 60) {
                interpretation = 'Kecanduan Berat';
            }
            document.getElementById('hasilTes').value = totalScore;
            document.getElementById('interpretasiTes').value = interpretation;
            document.getElementById('test').value = 'SAS';
            document.getElementById('sasTestForm').submit();
        });
    </script>
</body>
</html>
