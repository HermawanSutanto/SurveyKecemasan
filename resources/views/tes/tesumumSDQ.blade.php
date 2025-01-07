<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Kesehatan Mental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-white">
    <x-navbar />
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg">
        {{ session('success') }}
    </div>
    @endif
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-8">
        <h1 class="text-2xl font-bold mb-4 text-center text-gray-800">Strengths and Difficulties Questionnaire (SDQ)</h1>
        <p class="text-sm text-gray-700 mb-6 text-center">
            Bacalah setiap pernyataan berikut dan pilih opsi yang paling sesuai sebagaimana sesuatu telah terjadi pada dirimu selama enam bulan terakhir.
        </p>
        <form id="sdqForm" action="{{ route('tes.save') }}" method="POST" class="space-y-6">
            @csrf 
            <input type="hidden" id="test" name="test">
            <input type="hidden" id="totalDifficultyScore" name="total_difficulty_score">
            <input type="hidden" id="totalStrengthScore" name="total_strength_score">
            <input type="hidden" id="interpretasiDifficulty" name="interpretasi_difficulty">
            <input type="hidden" id="interpretasiStrength" name="interpretasi_strength">
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Input Umur -->
            <div class="space-y-2">
                <label for="age" class="text-gray-700">Usia:</label>
                <input type="number" id="age" name="age" class="border border-gray-300 p-2 rounded-lg w-full" required>
            </div>

            <!-- Soal -->
            <div class="space-y-4">
                <div class="space-y-2">
                    <label class="text-gray-700">
                        1. Saya berusaha baik kepada orang lain. Saya peduli dengan perasaan mereka.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q1" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q1" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q1" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        2. Saya gelisah. Saya tidak dapat diam untuk waktu lama.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q2" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q2" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q2" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        3. Saya sering sakit kepala, sakit perut, atau sakit lainnya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q3" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q3" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q3" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        4. Kalau saya memiliki mainan, CD, atau makanan, saya biasanya berbagi dengan orang lain.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q4" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q4" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q4" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        5. Saya sering marah dan tidak dapat mengendalikan kemarahan saya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q5" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q5" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q5" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        6. Saya lebih suka sendiri daripada bersama dengan orang yang seusia saya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q6" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q6" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q6" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        7. Saya biasanya melakukan apa yang diperintahkan oleh orang lain.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q7" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q7" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q7" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        8. Saya sering merasa cemas atau khawatir terhadap apa pun.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q8" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q8" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q8" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        9. Saya selalu siap menolong jika seseorang terluka, kecewa, atau merasa sakit.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q9" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q9" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q9" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        10. Bila sedang gelisah atau cemas, badan saya sering bergerak tanpa saya sadari.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q10" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q10" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q10" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        11. Saya mempunyai satu teman baik atau lebih.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q11" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q11" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q11" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        12. Saya sering bertengkar dengan orang lain atau memaksa mereka melakukan apa yang saya inginkan.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q12" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q12" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q12" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        13. Saya sering merasa tidak bahagia, sedih, atau menangis.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q13" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q13" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q13" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        14. Orang lain seusia saya umumnya menyukai saya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q14" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q14" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q14" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        15. Perhatian saya mudah teralih. Saya sulit memusatkan perhatian pada apa pun.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q15" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q15" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q15" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        16. Saya merasa gugup dalam situasi baru atau mudah kehilangan rasa percaya diri.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q16" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q16" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q16" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        17. Saya bersikap baik kepada anak-anak yang lebih muda dari saya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q17" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q17" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q17" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        18. Saya bersikap baik kepada anak-anak yang lebih muda dari saya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q18" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q18" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q18" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        19. Saya sering diganggu atau dipermainkan oleh anak-anak atau remaja lainnya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q19" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q19" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q19" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        20. Saya sering menawarkan diri untuk membantu orang lain (orang tua, guru, anak-anak).
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q20" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q20" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q20" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        21. Saya berpikir terlebih dulu akibat yang akan terjadi sebelum melakukan sesuatu.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q21" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q21" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q21" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        22. Saya berpikir terlebih dulu akibat yang akan terjadi sebelum melakukan sesuatu.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q22" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q22" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q22" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        23. Saya lebih mudah berteman dengan orang dewasa daripada dengan orang seusia saya.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q23" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q23" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q23" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        24. Banyak yang saya takuti, dan saya mudah menjadi takut.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q24" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q24" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q24" value="2"> Selalu Benar</label>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-gray-700">
                        25. Saya mampu menyelesaikan pekerjaan yang sedang saya lakukan dan memiliki perhatian yang baik.
                    </label>
                    <div class="flex space-x-4">
                        <label><input type="radio" name="q25" value="0"> Tidak Benar</label>
                        <label><input type="radio" name="q25" value="1"> Agak Benar</label>
                        <label><input type="radio" name="q25" value="2"> Selalu Benar</label>
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <button type="button" id="submitBtn" class="bg-blue-500 text-white px-6 py-2 rounded-lg w-full mt-4">
                Kirim Jawaban
            </button>
        </form>
    </div>

    <script>
        document.getElementById('submitBtn').addEventListener('click', function () {
            let totalDifficultyScore = 0;
            let totalStrengthScore = 0;
            let allAnswered = true;

            const strengthQuestions = [1, 4, 9, 17, 20];

            for (let i = 1; i <= 25; i++) {
                const answer = document.querySelector(`input[name="q${i}"]:checked`);
                if (answer) {
                    if (strengthQuestions.includes(i)) {
                        totalStrengthScore += parseInt(answer.value);
                    } else {
                        totalDifficultyScore += parseInt(answer.value);
                    }
                } else {
                    allAnswered = false;
                }
            }

            const age = parseInt(document.getElementById('age').value);
            if (!age || age <= 0) {
                alert('Harap masukkan usia yang valid.');
                return;
            }

            if (!allAnswered) {
                alert('Harap isi semua pertanyaan sebelum mengirimkan.');
                return;
            }

            let difficultyInterpretation = '';
            let strengthInterpretation = '';

            if (age < 11) {
                // Interpretasi Kesulitan
                if (totalDifficultyScore <= 13) {
                    difficultyInterpretation = 'Normal';
                } else if (totalDifficultyScore <= 15) {
                    difficultyInterpretation = 'Ambang/Borderline';
                } else {
                    difficultyInterpretation = 'Abnormal';
                }

                // Interpretasi Kekuatan
                if (totalStrengthScore >= 5 && totalStrengthScore <= 10) {
                    strengthInterpretation = 'Normal';
                } else if (totalStrengthScore === 5) {
                    strengthInterpretation = 'Ambang/Borderline';
                } else {
                    strengthInterpretation = 'Abnormal';
                }
            } else if (age >= 11 && age <= 18) {
                // Interpretasi Kesulitan
                if (totalDifficultyScore <= 15) {
                    difficultyInterpretation = 'Normal';
                } else if (totalDifficultyScore <= 19) {
                    difficultyInterpretation = 'Ambang/Borderline';
                } else {
                    difficultyInterpretation = 'Abnormal';
                }

                // Interpretasi Kekuatan
                if (totalStrengthScore >= 5 && totalStrengthScore <= 10) {
                    strengthInterpretation = 'Normal';
                } else if (totalStrengthScore === 5) {
                    strengthInterpretation = 'Ambang/Borderline';
                } else {
                    strengthInterpretation = 'Abnormal';
                }
            }

            // alert(`Skor Kesulitan: ${totalDifficultyScore} (${difficultyInterpretation})\nSkor Kekuatan: ${totalStrengthScore} (${strengthInterpretation})`);

            document.getElementById('totalDifficultyScore').value = totalDifficultyScore;
            document.getElementById('totalStrengthScore').value = totalStrengthScore;
            document.getElementById('interpretasiDifficulty').value = difficultyInterpretation;
            document.getElementById('interpretasiStrength').value = strengthInterpretation;
            document.getElementById('test').value = 'SDQ';
            document.getElementById('sdqForm').submit();
        });
    </script>
</body>
</html>
