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
        <h1 class="text-2xl font-bold mb-4 text-center text-gray-800">Tes Kesehatan Mental</h1>
        <p class="text-sm text-gray-700 mb-6 text-center">
            Bacalah petunjuk ini seluruhnya sebelum mulai mengisi. Pertanyaan berikut berhubungan dengan masalah yang mungkin mengganggu Anda selama 30 hari terakhir.
        </p>
        <form id="mentalHealthTest" action="{{ route('tes.save') }}" method="POST" class="space-y-6">
            @csrf
            <input type="hidden" id="hasilTes" name="hasil_tes">
            <input type="hidden" id="interpretasiTes" name="interpretasi">
            <input type="hidden" id="test" name="test">

            <!-- Kartu Pertanyaan -->
            <div id="cards-container">
                <div class="card" id="card-1">
                    <!-- Pertanyaan 1-3 -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <label for="q1" class="flex-1 text-gray-700">1. Apakah Anda sering menderita sakit kepala?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q1" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q1" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q2" class="flex-1 text-gray-700">2. Apakah Anda kehilangan nafsu makan?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q2" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q2" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q3" class="flex-1 text-gray-700">3. Apakah tidur Anda tidak lelap?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q3" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q3" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tambahkan kartu lainnya, misalnya card-2 untuk soal 4-6, dst. -->
                <div class="card hidden" id="card-2">
                    <!-- Pertanyaan 4-6 -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <label for="q4" class="flex-1 text-gray-700">4. Apakah Anda mudah menjadi takut?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q4" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q4" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q5" class="flex-1 text-gray-700">5.	Apakah Anda merasa cemas, tegang dan khawatir?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q5" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q5" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q6" class="flex-1 text-gray-700">6. Apakah tangan Anda gemetar?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q6" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q6" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                
                    </div>
                </div>
                <div class="card hidden" id="card-3">
                    <!-- Pertanyaan 4-6 -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <label for="q7" class="flex-1 text-gray-700">7. Apakah Anda mengalami gangguan pencernaan?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q7" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q7" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q8" class="flex-1 text-gray-700">8. Apakah Anda merasa sulit berpikir jernih?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q8" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q8" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q9" class="flex-1 text-gray-700">9. Apakah Anda merasa tidak bahagia?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q9" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q9" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card hidden" id="card-4">
                    <!-- Pertanyaan 4-6 -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <label for="q10" class="flex-1 text-gray-700">10. Apakah Anda lebih sering menangis?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q10" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q10" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q11" class="flex-1 text-gray-700">11. Apakah Anda merasa sulit untuk menikmati aktivitas sehari-hari?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q11" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q11" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q12" class="flex-1 text-gray-700">12. Apakah Anda mengalami kesulitan untuk mengambil keputusan?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q12" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q12" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card hidden" id="card-5">
                    <!-- Pertanyaan 4-6 -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <label for="q13" class="flex-1 text-gray-700">13. Apakah aktivitas/tugas sehari-hari Anda terbengkalai?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q13" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q13" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q14" class="flex-1 text-gray-700">14. Apakah Anda merasa tidak mampu berperan dalam kehidupan ini?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q14" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q14" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q15" class="flex-1 text-gray-700">15. Apakah Anda merasa tidak mampu berperan dalam kehidupan ini?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q15" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q15" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card hidden" id="card-6">
                    <!-- Pertanyaan 4-6 -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <label for="q16" class="flex-1 text-gray-700">16. Apakah Anda merasa tidak berharga?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q16" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q16" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q17" class="flex-1 text-gray-700">17. Apakah Anda mempunyai pikiran untuk mengakhiri hidup Anda?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q17" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q17" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q18" class="flex-1 text-gray-700">18. Apakah Anda merasa lelah sepanjang waktu?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q18" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q18" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card hidden" id="card-7">
                    <!-- Pertanyaan 4-6 -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <label for="q19" class="flex-1 text-gray-700">19. Apakah Anda merasa tidak enak di perut?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q19" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q19" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <label for="q20" class="flex-1 text-gray-700">20. Apakah Anda mudah lelah?</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="q20" value="1" class="form-radio text-green-500">
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="q20" value="0" class="form-radio text-red-500">
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Lanjutkan hingga semua pertanyaan terbagi ke dalam kartu -->
            </div>

            <!-- Navigasi antar kartu -->
            <div class="flex justify-between mt-4">
                <button type="button" id="prevBtn" class="bg-gray-400 text-white px-4 py-2 rounded-lg hidden">Sebelumnya</button>
                <button type="button" id="nextBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Berikutnya</button>
                <button type="button" id="submitBtn" class="bg-green-500 text-white px-6 py-2 rounded-lg hidden">Kirim Jawaban</button>
            </div>
        </form>
    </div>

    <script>
        const cards = document.querySelectorAll('.card');
        let currentCard = 0;
    
        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentCard < cards.length - 1) {
                cards[currentCard].classList.add('hidden');
                currentCard++;
                cards[currentCard].classList.remove('hidden');
            }
            updateButtons();
        });
    
        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentCard > 0) {
                cards[currentCard].classList.add('hidden');
                currentCard--;
                cards[currentCard].classList.remove('hidden');
            }
            updateButtons();
        });
    
        function updateButtons() {
            document.getElementById('prevBtn').classList.toggle('hidden', currentCard === 0);
            document.getElementById('nextBtn').classList.toggle('hidden', currentCard === cards.length - 1);
            document.getElementById('submitBtn').classList.toggle('hidden', currentCard !== cards.length - 1);
        }
    
        document.getElementById('submitBtn').addEventListener('click', function () {
            let totalScore = 0;
            let allAnswered = true; // Variable to check if all questions are answered
    
            for (let i = 1; i <= 20; i++) {
                const answer = document.querySelector(`input[name="q${i}"]:checked`);
                if (answer) {
                    totalScore += parseInt(answer.value);
                } else {
                    allAnswered = false; // If any question is not answered, set to false
                }
            }
    
            if (!allAnswered) {
                // If not all questions are answered, show an alert and stop submission
                alert('Harap isi semua pertanyaan sebelum melanjutkan.');
                return; // Prevent form submission
            }
    
            let interpretation = '';
            if (totalScore < 6) {
                interpretation = "Kondisi mental Anda baik, tidak ada masalah berarti.";
            } else {
                interpretation = "Anda memerlukan bantuan.";
            }
    
            document.getElementById('hasilTes').value = totalScore;
            document.getElementById('interpretasiTes').value = interpretation;
            document.getElementById('test').value = 'SRQ';
            document.getElementById('mentalHealthTest').submit();
        });
    
        updateButtons();
    </script>
    

</body>
</html>
