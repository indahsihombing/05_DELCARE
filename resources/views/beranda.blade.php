<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prakerja Help Page</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="header-content">
            <div class="logo">Delcare</div>
            <nav class="nav">
                <a href="#" class="active">Beranda</a>
                <a href="#">Panduan</a>
            </nav>
            <div class="auth-buttons">
                <button class="logout-btn">Keluar</button>
                <i class="fa fa-user profile-icon"></i>
            </div>
        </div>
        <!-- Title Section within the Header for a seamless look -->
        <div class="title-section">
            <h1>Apa yang bisa kami bantu?</h1>
        </div>
    </header>

    <!-- Help Section -->
    <main class="main-content">
        <div class="help-section">
            <div class="help-card">
                <img src="image/online-registration.png" alt="Pengiriman Formulir">
                <p>Kirim Laporan</p>
            </div>
            <div class="help-card">
                <img src="image/tracking.png" alt="Lacak Status">
                <p>Lacak Status</p>
            </div>
        </div>
    </main>

    <section class="faq-section">
        <h2>Pertanyaan Populer</h2>
        
        <!-- FAQ Item 1 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                <h3>Apa itu Program Kartu Prakerja?</h3>
                <span class="icon">−</span>
            </div>
            <div class="faq-answer">
                <p>Program Kartu Prakerja adalah program beasiswa pelatihan untuk meningkatkan kompetensi kerja dan kewirausahaan. Program ini ditujukan bukan hanya untuk pencari kerja, tapi juga mereka yang sudah bekerja maupun buruh yang ingin mendapatkan peningkatan skill atau kompetensi, juga pekerja/buruh yang terkena pemutusan hubungan kerja, termasuk pelaku usaha mikro dan kecil.</p>
                <button class="copy-link">Salin Link</button>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                <h3>Apa saja ketentuan untuk menjadi penerima Kartu Prakerja?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Berikut adalah ketentuan untuk menjadi penerima Kartu Prakerja...</p>
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                <h3>Apa saja tahapan daftar Kartu Prakerja?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Tahapan untuk mendaftar Kartu Prakerja adalah sebagai berikut...</p>
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                <h3>Bagaimana cara masuk ke akun Prakerja?</h3>
                <span class="icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Untuk masuk ke akun Prakerja, Anda perlu...</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">
          <!-- Company Info Section -->
          <div class="footer-section company-info">
            <div class="company-logo-container">
              <img src="image/logo-del.png" alt="Logo Perusahaan" class="company-logo">
              <div>
                <h3>Institut Teknologi Del</h3>
                <p>Institut Teknologi Del selalu berusaha memberikan layanan dan produk yang berkualitas untuk memenuhi kebutuhan seluruh Civitas Akademika.</p>
              </div>
            </div>
          </div>
      
          <!-- Contact Center Section -->
          <div class="footer-section contact-center">
            <h3>Layanan Contact Center Prakerja</h3>
            <p><i class="fa fa-phone"></i> 082164592541 (Hanya Panggilan Darurat!)</p>
            <p><i class="fa fa-whatsapp"></i> 085381822253 (Hanya Panggilan Darurat!)</p>
          </div>  
    
          <!-- Operational Hours Section -->
    <div class="footer-section operational-hours">
        <h3>Jam Operasional</h3>
        <p><i class="fa fa-calendar"></i> Senin - Jumat</p>
        <p><i class="fa fa-clock-o"></i> Pukul 08.00 - 17.00 WIB</p>
        <p><i class="fa fa-calendar"></i> Sabtu</p>
        <p><i class="fa fa-clock-o"></i> Pukul 08.00 - 12.00 WIB</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2024 Institut Teknologi Del. All rights reserved.</p>
    </div>
  </footer>
    

    <script src="js/faq.js"></script>

</body>
</html>
