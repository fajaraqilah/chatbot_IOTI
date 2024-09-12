

<!DOCTYPE html>
<html lang="en">
<head>    
    <!-- CSS Links -->
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">

<!-- JQVMap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css">

<!-- AdminLTE -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="http://localhost/chatbot_IOTI/dist/css/custom.css">
<link rel="stylesheet" href="http://localhost/chatbot_IOTI/assets/css/styles.css">

<!-- OverlayScrollbars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.min.css">

<!-- Daterangepicker -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">

<!-- SweetAlert2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        .list-group-item {
    position: relative;
    padding: 10px 15px;
}

.badge {
    font-size: 0.9em;
}

/* Gaya untuk tombol dark mode */
#dark-mode-toggle {
    background-color: transparent; /* Background transparan */
    border: none; /* Menghilangkan border default tombol */
    color: #007bff; /* Warna teks atau ikon tombol */
    font-size: 1.2em; /* Ukuran font untuk ikon */
    cursor: pointer; /* Pointer cursor untuk menunjukkan tombol dapat diklik */
    transition: color 0.3s ease, background-color 0.3s ease; /* Transisi halus untuk perubahan warna */
}

#dark-mode-toggle:hover {
    color: #0056b3; /* Warna teks saat hover */
}

#dark-mode-toggle:focus {
    outline: none; /* Menghilangkan outline saat fokus */
}
   /* Gaya Umum untuk Conversation Box */
#convo-box {
    height: 35em;
    width: 100%;
    display: flex;
    flex-direction: column-reverse;
    overflow-y: auto;
    padding: 1em;
    background: linear-gradient(135deg, #f3f4f6 0%, #ffffff 100%); /* Gradasi lembut */
    border-radius: 12px; /* Membuat sudut lebih lembut */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08), 0 1px 3px rgba(0, 0, 0, 0.06); /* Bayangan yang lebih halus dan dalam */
    border: 1px solid #dcdcdc; /* Garis pembatas yang lebih lembut */
    transition: background-color 0.3s, color 0.3s, box-shadow 0.3s; /* Efek transisi halus */
}

/* Gaya untuk scrollbar agar lebih modern */
#convo-box::-webkit-scrollbar {
    width: 8px;
}

#convo-box::-webkit-scrollbar-thumb {
    background-color: #b3b3b3; /* Warna thumb scrollbar */
    border-radius: 4px;
}

#convo-box::-webkit-scrollbar-thumb:hover {
    background-color: #888888; /* Warna thumb scrollbar saat hover */
}

#convo-box::-webkit-scrollbar-track {
    background: transparent; /* Track scrollbar transparan */
}

/* Animasi hover untuk memberikan kesan lebih hidup */
#convo-box:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.07); /* Efek bayangan saat di-hover */
}

/* Dark mode support */
body.dark-mode #convo-box {
    background: linear-gradient(135deg, #2d2d2d 0%, #3a3a3a 100%); /* Gradasi latar belakang dark mode */
    border: 1px solid #555555;
    color: #f1f1f1;
}

/* Responsif */
@media (max-width: 768px) {
    #convo-box {
        height: 25em; /* Menyesuaikan tinggi di layar kecil */
        padding: 0.8em;
    }
}


#suggestion-list {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Mengatur 3 kolom dengan ukuran yang sama */
    gap: 1em; /* Menambahkan jarak antar item */
}

/* Responsive adjustments to maintain 3 columns */
@media (max-width: 768px) {
    #suggestion-list {
        grid-template-columns: repeat(2, 1fr); /* Menjadi 2 kolom pada layar kecil */
    }
}

@media (max-width: 480px) {
    #suggestion-list {
        grid-template-columns: 1fr; /* Menjadi 1 kolom pada layar yang sangat kecil */
    }
}


.msg-field.bot-msg {
    background: #f0f0f0; /* Warna latar belakang netral yang lembut untuk pesan bot */
    color: #333; /* Warna teks yang jelas */
    align-self: flex-start; /* Pesan bot berada di sebelah kiri */
    border-radius: 15px 15px 15px 0; /* Membuat sudut membulat untuk tampilan lebih ramah */
    padding: 10px 15px; /* Ruang yang cukup untuk teks */
    margin: 5px 0; /* Memberikan sedikit jarak antar pesan */
    max-width: 100%; /* Membatasi lebar pesan agar lebih mudah dibaca */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Memberikan bayangan halus */
}

.msg-field.user-msg {
    background: #4a90e2; /* Warna biru yang lebih lembut dan nyaman untuk pesan pengguna */
    color: #fff; /* Warna teks putih untuk kontras */
    align-self: flex-end; /* Pesan pengguna berada di sebelah kanan */
    border-radius: 15px 15px 0 15px; /* Membuat sudut membulat yang konsisten */
    padding: 10px 15px; /* Ruang yang cukup untuk teks */
    margin: 5px 0; /* Memberikan sedikit jarak antar pesan */
    max-width: 70%; /* Membatasi lebar pesan */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk kedalaman */
}
        .rounded-pill {
            border-radius: 2rem !important;
        }

/* Responsif untuk layar dengan lebar kurang dari 768px */
@media (max-width: 767.98px) {
    #convo-box {
        height: auto;
    }

    .msg-field {
        max-width: 100%; /* Lebar pesan di layar kecil */
        border-radius: 2em; /* Radius border lebih kecil untuk layar kecil */
    }
}

body.dark-mode textarea {
    background-color: #1e1e1e; /* Latar belakang gelap untuk textarea */
    color: #e0e0e0; /* Warna teks terang */
    border: 1px solid #444; /* Border untuk textarea */
}

body.dark-mode textarea:focus {
    background-color: #1e1e1e; /* Latar belakang tetap gelap saat fokus */
    color: #e0e0e0; /* Warna teks tetap terang */
    border-color: #555; /* Warna border saat fokus */
}
textarea#keyword {
    width: 100%; /* Memastikan textarea menutupi lebar penuh kontainer */
    padding: 10px; /* Menambahkan ruang di dalam textarea */
    font-size: 14px; /* Menyesuaikan ukuran font untuk tampilan yang lebih rapi */
    border: 1px solid #ccc; /* Warna border yang halus */
    border-radius: 8px; /* Membuat sudut sedikit melengkung */
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan dalam */
    transition: all 0.3s ease; /* Animasi halus pada interaksi */
    resize: none; /* Mencegah pengguna mengubah ukuran textarea */
    background-color: #fdfdfd; /* Warna latar belakang yang lebih terang */
}

/* Efek saat textarea mendapat fokus */
textarea#keyword:focus {
    border-color: #007bff; /* Warna border yang berubah saat di-fokuskan */
    outline: none; /* Menghilangkan outline default */
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.3); /* Efek bayangan biru saat fokus */
    background-color: #ffffff; /* Latar belakang yang lebih cerah saat fokus */
}

    </style>

    <!-- jQuery and JavaScript Files -->
    <script src="http://localhost/chatbot_IOTI/plugins/jquery/jquery.min.js"></script>
    <script src="http://localhost/chatbot_IOTI/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="http://localhost/chatbot_IOTI/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="http://localhost/chatbot_IOTI/plugins/toastr/toastr.min.js"></script>
    <script>
        var base_url = 'http://localhost/chatbot_IOTI/';
    </script>
    <script src="http://localhost/chatbot_IOTI/dist/js/script.js"></script>
    <script src="http://localhost/chatbot_IOTI/assets/js/scripts.js"></script>
</head>
<div class="container my-5">
    <div class="card card-outline-navy rounded-0">
        <div class="card-header">
            <h3 class="card-title fw-bold">Pertanyaan Yang Sering Ditanyakan</h3>
        </div>
        <div class="card-body">
            <?php 
            $i = 1; // Inisialisasi variabel $i
            $qry = $conn->query("SELECT *, COALESCE((SELECT count(response_id) FROM `keyword_fetched` WHERE response_id = response_list.id), 0) AS `fetched` FROM `response_list` ORDER BY COALESCE((SELECT count(response_id) FROM `keyword_fetched` WHERE response_id = response_list.id), 0) DESC LIMIT 10");
            $visibleCount = 0; // Counter untuk pertanyaan yang terlihat
            while ($row = $qry->fetch_assoc()):
                $responseText = strip_tags($row['response']);
                $shortText = strlen($responseText) > 150 ? substr($responseText, 0, 150) . '...' : $responseText;
                $visibleClass = $visibleCount < 1 ? 'visible' : 'd-none more-item'; // Menampilkan 2 item pertama
            ?>
            <div class="mb-3 <?php echo $visibleClass; ?>">
                <p>
                    <strong>Pertanyaan <?php echo $i++; ?>:</strong> <?php echo $shortText; ?>
                </p>
            </div>
            <?php 
                $visibleCount++; 
            endwhile; 
            ?>
            <!-- Tombol Show More / Show Less -->
            <div class="text-center mt-3">
                <button id="toggleBtn" class="btn btn-primary">Show More</button>
            </div>
        </div>
    </div>
</div>

<script>
// JavaScript untuk mengontrol tombol Show More / Show Less
document.getElementById('toggleBtn').addEventListener('click', function() {
    const moreItems = document.querySelectorAll('.more-item'); // Elemen yang disembunyikan
    if (this.textContent === 'Show More') {
        // Menampilkan elemen tersembunyi
        moreItems.forEach(function(item) {
            item.classList.remove('d-none');
        });
        this.textContent = 'Show Less'; // Ubah teks tombol
    } else {
        // Menyembunyikan elemen dan kembali ke tampilan awal
        moreItems.forEach(function(item) {
            item.classList.add('d-none');
        });
        this.textContent = 'Show More'; // Ubah kembali teks tombol
    }
});
</script>




<div class="container my-5">
    <div class="card card-outline-navy rounded-0">
        <div class="card-header">
            <div class="d-flex w-100 align-items-center">
                <div class="col-auto">
                    <img src="<?= validate_image($_settings->info('logo')) ?>" class="img-fluid img-thumbnail rounded-pill" style="width:1.9em;height:1.9em;object-fit:cover;object-position:center center" alt="<?= validate_image($_settings->info('bot_name')) ?>">
                </div>
                <div class="col-auto">
                    <b><?= $_settings->info('bot_name') ?></b>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="overflow-auto" id="convo-box">
            <div id="suggestion-list" class="my-4 px-3 d-flex flex-wrap">
    <?php 
    $suggestions = $_settings->info('suggestion') != '' ? json_decode($_settings->info('suggestion')) : [];
    foreach ($suggestions as $sg):
        if (empty($sg)) {
            continue;
        }
    ?>
        <a href="javascript:void(0)" class="rounded-pill bg-transparent border px-3 py-2 mx-2 my-2 text-decoration-none text-reset suggestion"><?= $sg ?></a>
    <?php endforeach; ?>
</div>

                <div class="d-flex w-100 align-items-center mt-4">
                    <div class="col-auto">
                        <img src="<?= validate_image($_settings->info('logo')) ?>" class="img-fluid img-thumbnail rounded-pill" style="width:2.5em;height:2.5em;object-fit:cover;object-position:center center" alt="<?= validate_image($_settings->info('bot_name')) ?>">
                    </div>
                    <div class="col-auto flex-shrink-1 flex-grow-1">
                        <div class="msg-field bot-msg w-auto d-inline-block bg-gradient-light border rounded-pill px-3 py-2"><?= $_settings->info('welcome_message') ?></div>
                    </div>
                </div>
            </div>
            <div class="d-flex w-100 align-items-center">
            <div class="col-auto flex-shrink-1 flex-grow-1 position-relative">
    <!-- Container untuk textarea dengan label dan ikon -->
    <label for="keyword" class="form-label visually-hidden">Silahkan ketik disni</label>
    <div class="input-group shadow-sm rounded">
        <!-- Textarea dengan gaya input group -->
        <textarea name="keyword" id="keyword" cols="30" rows="2" 
                  class="form-control form-control-sm border-0 rounded-end" 
                  placeholder="Silahkan Ketik Disini"></textarea>
    </div>
</div>

                            <!-- Tambahkan Tombol Print -->
<div class="col-auto ms-auto">
    <button class="btn btn-light btn-sm bg-gradient-light rounded-0 border" type="button" id="print">
        <i class="fa fa-print"></i> <!-- Hanya ikon tanpa teks -->
    </button>
</div>
                <div class="col-auto">
                    <button class="btn btn-outline-primary border-0 rounded-0" type="button" id="submit"><i class="fa fa-paper-plane"></i></button>
                    <!-- Tambahkan tombol dark mode di header atau tempat yang sesuai -->
<button id="dark-mode-toggle" aria-label="Toggle dark mode">🌙</button>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- Header Print -->
<noscript id="print-header">
    <div>
        <div class="d-flex w-100">
            <div class="col-2 text-center">
                <img style="height:.8in;width:.8in!important;object-fit:cover;object-position:center center" src="<?= validate_image($_settings->info('logo')) ?>" alt="" class="w-100 img-thumbnail rounded-pill]">
            </div>
            <div class="col-8 text-center">
                <div style="line-height:1em">
                    <h4 class="text-center mb-0"><?= $_settings->info('name') ?></h4>
                    <h3 class="text-center mb-0"><b>Chatbot Response</b></h3>
                </div>
            </div>
        </div>
        <hr>
    </div>
</noscript>

<noscript id="resp-msg">
    <div class="d-flex w-100 align-items-center mt-4">
        <div class="col-auto">
            <img src="<?= validate_image($_settings->info('logo')) ?>" class="img-fluid img-thumbnail rounded-pill" style="width:2.5em;height:2.5em;object-fit:cover;object-position:center center" alt="<?= validate_image($_settings->info('bot_name')) ?>">
        </div>
        <div class="col-auto flex-shrink-1 flex-grow-1">
            <div class="msg-field bot-msg w-auto d-inline-block bg-gradient-light border rounded-pill px-3 py-2 response"></div>
        </div>
    </div>
</noscript>
<noscript id="user-msg">
    <div class="d-flex flex-row-reverse  w-100 align-items-center mt-4">
        <div class="col-auto text-center">
            <div class="img-fluid img-thumbnail rounded-pill" style="width:2.5em;height:2.5em">
                <i class="fa fa-user text-muted bg-gradient-light" style="font-size:1em"></i>
            </div>
        </div>
        <div class="col-auto flex-shrink-1 flex-grow-1 text-right">
            <div class="msg-field w-auto d-inline-block bg-gradient-light border rounded-pill px-3 py-2 msg text-left"></div>
        </div>
    </div> 
</noscript>
<noscript id="sg-item">
    <a href="javascript:void(0)" class="w-auto rounded-pill bg-transparent border px-3 py-2 text-decoration-none text-reset suggestion"></a>
</noscript>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const darkModeToggle = document.getElementById('dark-mode-toggle');

    // Function to toggle dark mode
    const toggleDarkMode = () => {
        document.body.classList.toggle('dark-mode');
        document.querySelectorAll('#convo-box, .msg-field, textarea').forEach(el => el.classList.toggle('dark-mode'));
        
        // Save user preference
        localStorage.setItem('dark-mode', document.body.classList.contains('dark-mode') ? 'enabled' : 'disabled');
    };

    // Initialize dark mode based on saved preference
    const initializeDarkMode = () => {
        if (localStorage.getItem('dark-mode') === 'enabled') {
            document.body.classList.add('dark-mode');
            document.querySelectorAll('#convo-box, .msg-field, textarea').forEach(el => el.classList.add('dark-mode'));
        }
    };

    // Event listener for the dark mode toggle button
    darkModeToggle.addEventListener('click', toggleDarkMode);

    // Initialize dark mode on page load
    initializeDarkMode();
});



</script>

<script>
$(document).ready(function(){
    // Fungsi untuk mencetak respon
    $('#print').click(function(){
        // Buat elemen baru khusus untuk print agar tidak mengganggu elemen asli
        var printContent = $('<div>') 
        var h = $('head').clone() // Clone head untuk title
        var ph = $($('noscript#print-header').html()).clone() // Clone header cetak
        var p = $('#convo-box').clone() // Clone percakapan untuk cetak

        // Pindahkan hanya isi yang dibutuhkan untuk cetak ke dalam printContent
        printContent.append(ph).append(p)

        h.find('title').text('Chatbot Response - Print View')

        start_loader() // Memulai loader saat print dimulai
        var nw = window.open("", "_blank", "width="+($(window).width() * .8)+", height="+($(window).height() * .8)+", left="+($(window).width() * .1)+", top="+($(window).height() * .1))
        nw.document.querySelector('head').innerHTML = h.html()
        nw.document.querySelector('body').innerHTML = printContent.html() // Menambahkan konten print
        nw.document.close()
        setTimeout(() => {
            nw.print() // Mencetak konten
            setTimeout(() => {
                nw.close() // Menutup jendela print
                end_loader() // Menghentikan loader
            }, 300);
        }, 300);
    })
})
</script>
<script>
    function add_msg($kw=""){
        var item = $($('noscript#user-msg').html()).clone()
        item.find('.msg-field').text($kw)
        $('#suggestion-list').after(item)
    }
    function fetch_response($kw=""){
        var item = $($('noscript#resp-msg').html()).clone()
        $.ajax({
            url:_base_url_+"classes/Master.php?f=fetch_response",
            method:'POST',
            data:{kw : $kw},
            dataType:'json',
            error:err=>{
                console.log(err)
                alert("An errror occurred while fetching a response")
            },
            success:function(resp){
                if(resp.status = 'success'){
                    item.find('.msg-field').html(resp.response)
                    $('#suggestion-list').after(item)
                    $('#suggestion-list').html("")
                    if(!!resp.suggestions && Object.keys(resp.suggestions).length){
                        Object.keys(resp.suggestions).map((k)=>{
                            if(resp.suggestions[k] != ''){
                                var item = $($('noscript#sg-item').html()).clone()
                                item.text(resp.suggestions[k])
                                $('#suggestion-list').append(item)
                                item.click(function(){
                                    var kw = $(this).text()
                                    add_msg(kw)
                                    fetch_response(kw)
                                })
                            }
                        })
                        
                    }
                }else{
                    alert("An errror occurred while fetching a response")
                }
            }
        })
    }
    $(function(){
        $('#keyword').keypress(function(e){
            if(e.which == 13 && e.shiftKey == false){
                e.preventDefault()
                $('#submit').click()
            }
        })
        $('#keyword').on('input', function () {
            // Handle paste event
            $(this).val($(this).val().trimLeft());
        });

        $('#keyword').on('paste', function (e) {
            e.preventDefault();
            var text = e.originalEvent.clipboardData.getData('text/plain');
            $(this).val(text.trimLeft());
        });
        $('#submit').click(function(){
            var kw = $('#keyword').val()
            add_msg(kw)
            fetch_response(kw)
            var kw = $('#keyword').val('').focus()
        })
        $('.suggestion').click(function(){
            var kw = $(this).text()
            add_msg(kw)
            fetch_response(kw)
        })
    })
</script>