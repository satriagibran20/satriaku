<?php

if ($userRole == 'siswa') {
    // Menampilkan token untuk siswa
    echo "Token Anda: " . $token;
} else {
    echo "Anda tidak memiliki izin untuk melihat token.";
} 