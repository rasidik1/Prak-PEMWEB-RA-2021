<head>
    <title> kasir Sederhana </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 align="center">Daftar Belanja Rahmad Sidik</h1>
    <hr>

    <center>
        <form method="POST" onsubmit="hasil()">
            <table>
                <thead>
                    <tr>
                        <td colspan="3" align="center" width="500px" class="JudulBesar">Rekapitulasi Pembelian Buah</td>
                    </tr>
                    <tr align="center" class="judul">
                        <td>Nama Buah</td>
                        <td>Harga per Kilo</td>
                        <td>Jumlah(kg) </td>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <td><label>mangga</label></td>
                        <td><label>Rp. 15.000</label></td>
                        <td><input type="number" min="0" name="mangga" style="width: 50px" placeholder="0" value="0">
                        </td>
                    </tr>
                    <tr align="center">
                        <td><label>jambu</label></td>
                        <td><label>Rp. 13.000</label></td>
                        <td><input type="number" min="0" name="jambu" style="width: 50px" placeholder="0" value="0">
                        </td>
                    </tr>
                    <tr align="center">
                        <td><label>salak</label></td>
                        <td><label>Rp. 10.000</label></td>
                        <td><input type="number" min="0" name="salak" style="width: 50px" placeholder="0" value="0">
                        </td>
                    </tr>
                </tbody>
            </table>
            <button name="bayar id=" btn">Bayar</button>
        </form>

        <table>
            <thead>
                <tr>
                    <td colspan="3" align="center" width="500px" class="title">List dan total Belanja</td>
                </tr>
                <tr align="center" class="judul">
                    <td>Nama Buah</td>
                    <td>Jumlah(kg) </td>
                    <td>Harga(Rupiah)</td>
                </tr>
            </thead>
            <tbody id="cetak" align="center">

            </tbody>
        </table>
    </center>
</body>

<?php include('pbo.php') ?>

<script type="text/javascript">
function hasil() {

}
</script>