<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <style>   
        /* Styling untuk pop-up modal */
        .popup {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            text-align: center;
        }

        .popup-content h2 {
            margin-top: 0;
        }

        .popup-buttons {
            margin-top: 20px;
        }

        .popup-buttons button {
            margin: 0 10px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .confirm-btn {
            background-color: #28a745;
            color: white;
        }

        .cancel-btn {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <h1>HALLO, SELAMAT DATANG! <?php echo $_SESSION['name']; ?></h1>
    <a href="#" id="logout-link">Logout</a>

    <!-- Pop-up modal -->
    <div class="popup" id="popup">
        <div class="popup-content">
            <h2>selamat login anda berhasil</h2>
            <div class="popup-buttons">
                <button class="cancel-btn" id="cancel-logout">Cancel</button>
                <button class="confirm-btn" id="confirm-logout">Yes</button>
            </div>
        </div>
    </div>

    <script>
        const logoutLink = document.getElementById('logout-link');
        const popup = document.getElementById('popup');
        const confirmLogout = document.getElementById('confirm-logout');
        const cancelLogout = document.getElementById('cancel-logout');

        // Tampilkan pop-up ketika tombol logout diklik
        logoutLink.addEventListener('click', function (e) {
            e.preventDefault();
            popup.style.display = 'block';
        });

        // Aksi ketika pengguna mengklik "Yes"
        confirmLogout.addEventListener('click', function () {
            window.location.href = 'logout.php';
        });

        // Aksi ketika pengguna mengklik "Cancel"
        cancelLogout.addEventListener('click', function () {
            popup.style.display = 'none';
        });
    </script>
</body>
</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>

