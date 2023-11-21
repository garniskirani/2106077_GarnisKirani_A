<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sewa Mobil</title>
    <style>
        body {
            font-family:Arial, Helvetica, sans-serifs;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        button {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-button {
            background-color: #4caf50;
            color: #fff;
            margin-right: 8px;
        }

        .reset-button {
            background-color: #f44336;
            color: #fff;
        }

        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    
    <form action="./proses_input.php" method="post">
        <h1>FORM RENTAL MOBIL</h1>
        <label for="nama_penyewa">Nama Penyewa:</label>
        <input type="text" name="nama_penyewa" maxlength="30" required> <br>
        
        <label for="tanggal_penyewaan">Tanggal Peminjaman:</label>
        <input type="date" id="tanggal_penyewaan" name="tanggal_penyewaan" required> <br>

        <label for="tipe_mobil">Tipe Mobil:</label>
        <select id="tipe_mobil" name="tipe_mobil" required>
        <option value="Sedan">Sedan</option>
        <option value="SUV">SUV</option>
        <option value="Truk">Truk</option>
        <option value="Minivan">Minivan</option>
        </select> <br>

        <label for="durasi_peminjaman">Durasi Peminjaman (hari):</label>
        <input type="number" id="durasi_peminjaman" name="durasi_peminjaman" min="1" required> <br>

        <label for="email">Email:</label>
        <input type="email" name="email" maxlength="30" required> <br>
        
        <div class="button-container">
            <button type="submit" class="submit-button">
                KIRIM ✅
            </button>
            
            <button type="reset" class="reset-button">
                RESET 🔄
            </button>
        </div>
    </form>
</body>
</html>