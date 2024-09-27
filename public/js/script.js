
// Mengambil value kelurahan dari JavaScript dan menggabungkan sebelum dikirim ke server
document.getElementById('pilarForm').addEventListener('submit', function (event) {
    var kelurahan1 = document.getElementById('kelurahan_1').value;
    var kelurahan2 = document.getElementById('kelurahan_2').value;

    // Gabungkan kelurahan dengan tanda '/'
    if (kelurahan2) {
        var kelurahan = kelurahan1 + '/' + kelurahan2;
    } else {
        var kelurahan = kelurahan1;
    }

    // Masukkan nilai gabungan ke dalam input hidden sebelum mengirim form
    var hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.name = 'kelurahan';
    hiddenInput.value = kelurahan;
    this.appendChild(hiddenInput);
});

// Ambil kelurahan dari JavaScript sesuai kecamatan yang dipilih
document.getElementById('kecamatan').addEventListener('change', function () {
    var kecamatan = this.value;

    // Memuat kelurahan yang relevan menggunakan JavaScript
    var kelurahanOptions = {
        "Blimbing": [
            "Arjosari", "Balearjosari", "Blimbing", "Bunulrejo", "Jodipan", "Kesatrian",
            "Pandanwangi", "Polehan", "Polowijen", "Purwantoro", "Purwodadi"
        ],
        "Kedungkandang": [
            "Arjowinangun", "Bumiayu", "Buring", "Cemorokandang", "Kedungkandang",
            "Kotalama", "Lesanpuro", "Madyopuro", "Mergosono", "Sawojajar", "Tlogowaru", "Wonokoyo"
        ],
        "Klojen": [
            "Bareng", "Gadingasri", "Kasin", "Kauman", "Kiduldalem", "Klojen",
            "Oro-Oro Dowo", "Penanggungan", "Rampal Celaket", "Samaan", "Sukoharjo"
        ],
        "Lowokwaru": [
            "Dinoyo", "Jatimulyo", "Ketawanggede", "Lowokwaru", "Merjosari",
            "Mojolangu", "Sumbersari", "Tasikmadu", "Tlogomas", "Tulusrejo", "Tunggulwulung", "Tunjungsekar"
        ],
        "Sukun": [
            "Bakalankrajan", "Bandulan", "Bandungrejosari", "Ciptomulyo", "Gadang",
            "Karangbesuki", "Kebonsari", "Mulyorejo", "Pisangcandi", "Sukun", "Tanjungrejo"
        ]
    };

    var kelurahanSelect1 = document.getElementById('kelurahan_1');
    var kelurahanSelect2 = document.getElementById('kelurahan_2');

    // Hapus opsi lama
    kelurahanSelect1.innerHTML = '<option value="">Pilih Kelurahan</option>';
    kelurahanSelect2.innerHTML = '<option value="">Pilih Kelurahan (Optional)</option>';

    // Tambahkan opsi baru sesuai kecamatan yang dipilih
    if (kecamatan && kelurahanOptions[kecamatan]) {
        kelurahanOptions[kecamatan].forEach(function (kelurahan) {
            var option1 = document.createElement('option');
            option1.value = kelurahan;
            option1.text = kelurahan;
            kelurahanSelect1.appendChild(option1);

            var option2 = document.createElement('option');
            option2.value = kelurahan;
            option2.text = kelurahan;
            kelurahanSelect2.appendChild(option2);
        });
    }
});

document.getElementById('kecamatan').addEventListener('change', function () {
    const kecamatan = this.value;
    const kelurahanSelect = document.getElementById('kelurahan');

    // Hapus semua opsi kelurahan saat kecamatan berubah
    kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';

    // Tambahkan opsi kelurahan yang sesuai dengan kecamatan yang dipilih
    if (kecamatan && kelurahanData[kecamatan]) {
        kelurahanData[kecamatan].forEach(function (kelurahan) {
            const option = document.createElement('option');
            option.value = kelurahan;
            option.textContent = kelurahan;
            kelurahanSelect.appendChild(option);
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    // Data kelurahan berdasarkan kecamatan
    const kelurahanData = {
        Blimbing: ["Arjosari", "Balearjosari", "Blimbing", "Bunulrejo", "Jodipan", "Kesatrian",
            "Pandanwangi", "Polehan", "Polowijen", "Purwantoro", "Purwodadi"],
        Kedungkandang: ["Arjowinangun", "Bumiayu", "Buring", "Cemorokandang", "Kedungkandang",
            "Kotalama", "Lesanpuro", "Madyopuro", "Mergosono", "Sawojajar", "Tlogowaru", "Wonokoyo"],
        Klojen: ["Bareng", "Gadingasri", "Kasin", "Kauman", "Kiduldalem", "Klojen",
            "Oro-Oro Dowo", "Penanggungan", "Rampal Celaket", "Samaan", "Sukoharjo"],
        Lowokwaru: ["Dinoyo", "Jatimulyo", "Ketawanggede", "Lowokwaru", "Merjosari",
            "Mojolangu", "Sumbersari", "Tasikmadu", "Tlogomas", "Tulusrejo", "Tunggulwulung", "Tunjungsekar"],
        Sukun: ["Bakalankrajan", "Bandulan", "Bandungrejosari", "Ciptomulyo", "Gadang",
            "Karangbesuki", "Kebonsari", "Mulyorejo", "Pisangcandi", "Sukun", "Tanjungrejo"]
    };

    const kecamatanSelect = document.getElementById('kecamatan');
    const kelurahanSelect = document.getElementById('kelurahan');
    const selectedKelurahan = "{{ $dataPilar->kelurahan }}";  // Kelurahan yang disimpan di database

    // Function untuk mengisi kelurahan berdasarkan kecamatan yang dipilih
    function updateKelurahanOptions() {
        const selectedKecamatan = kecamatanSelect.value;
        kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>'; // Reset options

        if (kelurahanData[selectedKecamatan]) {
            kelurahanData[selectedKecamatan].forEach(kelurahan => {
                const option = document.createElement('option');
                option.value = kelurahan;
                option.textContent = kelurahan;

                // Menandai kelurahan yang dipilih dari database
                if (kelurahan === selectedKelurahan) {
                    option.selected = true;
                }

                kelurahanSelect.appendChild(option);
            });
        }
    }

    // Listener untuk kecamatan yang diubah
    kecamatanSelect.addEventListener('change', updateKelurahanOptions);

    // Saat page load, isi kelurahan sesuai dengan kecamatan yang sudah dipilih
    if (kecamatanSelect.value) {
        updateKelurahanOptions();
    }
});

$(document).ready(function() {
    $('#myTable').DataTable();
});
