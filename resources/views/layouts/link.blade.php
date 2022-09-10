<!-- Sidebar -->
    <div class="w3-animate-opacity w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
        <button onclick="w3_close()" class="w3-teal w3-bar-item w3-large">&times;</button>
        <a href="/api" class="w3-bar-item w3-button {{ ($title=='Halaman Utama' ? 'active' : '') }}">HALAMAN UTAMA</a>
        <a href="/tentang" class="w3-bar-item w3-button" {{ ($title == 'Tentang' ? 'active' : '') }}>TENTANG</a>
    </div>

<!-- Page Content -->
    <div class="w3-teal mb-sm-2">
        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
        <span style="margin-left:40%"> 
                {{ $title }}
        </span>
    </div>