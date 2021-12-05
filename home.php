<?php require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
    .base {
        display: flex;

    }

    main {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        /* gap: 10px 10px; */

        width: 75%;

    }

    aside {
        width: 25%;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        margin: 10px;
        min-height: 235px;
        /* width: 25%; */
        /* height: 200px; */
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 2px 16px;
    }

    .card-head,
    .card-body {
        overflow: hidden;
        line-height: 2rem;
        max-height: 8rem;
        -webkit-box-orient: vertical;
        display: block;
        display: -webkit-box;
        overflow: hidden !important;
        text-overflow: ellipsis;
        -webkit-line-clamp: 4;
    }

    .card-head {
        margin: 0;
        /* height: 75px; */
    }

    aside {
        min-height: 100%;
        border: solid 1px #a18f8f29;
        padding: 10px;
    }

    Skip to content Search or jump to… Pull requests Issues Marketplace Explore @rasidik1 rasidik1 / Curriiculum-Vitae-HTML-PemWeb Public 1 0 0 Code Issues Pull requests Actions Projects 1 Wiki Security Insights Settings Curriiculum-Vitae-HTML-PemWeb/style.css @rasidik1 rasidik1 Commite Pertama Latest commit c8b12e6 13 days ago History 1 contributor 176 lines (165 sloc) 2.51 KB .container {
        width: 100%;
        margin: 0 50%;
    }

    h2 {
        background-color: #53bd84;
        padding: 30px 35px;
        margin: -10px -50px;
        text-align: center;
        color: #fff;
    }

    span {
        display: block;
        margin-bottom: 20px;
        color: red;
    }

    .success {
        display: block;
        margin-top: 20px;
        margin-bottom: 0;
        font-size: 14px;
    }

    b {
        color: green;
    }

    hr {
        margin: 10px -50px;
        border: 0;
        border-top: 1px solid #ccc;
        margin-bottom: 25px;
    }

    div.main {
        width: 306px;
        padding: 10px 50px 30px;
        border: 2px solid gray;
        font-family: raleway;
        float: left;
        margin-top: 15px;
    }

    input[type="text"] {
        width: 96%;
        height: 25px;
        padding: 5px;
        margin-bottom: 25px;
        margin-top: 5px;
        border: 2px solid #ccc;
        color: #53bd84;
        font-size: 16px;
    }

    input[type="radio"] {
        margin: 10px 10px 0 10px;
    }

    label {
        color: #53bd84;
        text-shadow: 0 1px 0 #fff;
        font-size: 14px;
        font-weight: bold;
    }

    #saran {
        width: 96%;
        height: 90px;
        padding: 5px;
        margin-bottom: 25px;
        margin-top: 5px;
        border: 2px solid #ccc;
        color: #53bd84;
        font-size: 16px;
    }

    input[type="submit"] {
        font-size: 16px;
        background: linear-gradient(#53bd84 5%, #fff 100%);
        color: #4e4d4b;
        font-weight: bold;
        cursor: pointer;
        width: 100%;
        padding: 10px 0;
        outline: none;
    }

    * {
        font-size: 25px;
    }

    body {
        margin: 0;
        padding: 0;
    }

    aside,
    footer {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    header {
        display: flex;
        justify-content: left;
        align-items: center;
        background-color: white;
        width: 100%;
        height: 100px;
        margin-left: 10px;
    }

    nav {
        background-color: #ffb319;
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
    }

    main {
        background-color: #b8dfd8;
        width: 65%;
        align-content: center;
        justify-content: center;
        text-align: left;
    }

    aside {
        font-size: 10px;
        background-color: #e8f6ef;
        width: 35%;
        height: 100%;
    }

    footer {
        background-color: #ffe194;
        width: 100%;
        height: 100%;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        color: black;
        display: inline;
    }

    li {
        display: inline;
        width: 60px;
        padding: 10px;
    }

    li a {
        color: white;
        text-align: center;
        padding: 6.5px 16px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #4caf50;
    }

    .active {
        background-color: #4caf50;
        height: 40px;
        width: 100%;
    }

    .judul_header {
        font-size: 60px;
        padding-left: 50px;
    }

    .biodata {
        border: 1;
        font-size: 1pt;
        font-style: normal;
        font-family: Helvetica, sans-serif;
        padding: 50pt;
    }

    .fotopropil {
        padding-left: 20px;
    }

    © 2021 GitHub,
    Inc. Terms Privacy Security Status Docs Contact GitHub Pricing API Training Blog About Loading complete
    </style>
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklan.css">
</head>

<body>
    <div>
        <header>
            <table>
                <tr>
                    <td>
                        <img width="70px" height="80px" src="assets/logo_itera.jpg" />
                    </td>
                    <td>
                        <h1 class="judul_header">Institut Teknologi Sumatera</h1>
                    </td>
                </tr>
            </table>
        </header>
        <nav>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="buat_cv.php">Buat CV</a></li>
                <li><a href="index_enc.php">CV Enskripsi</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>
    </div>
    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

            <div style="width: 50%;">
                <div class="card">
                    <div class="container">
                        <h3 class="card-head"><?= $item['judul']; ?></h3>
                        <p class="card-body"><?= $item['isi']; ?></p>
                    </div>
                </div>
            </div>

            <?php } ?>
        </main>

        <aside>
            <h2>History</h2>
            <div></div>
        </aside>
    </section>

    <script src="./assets/iklan/iklan.js"></script>
</body>

</html>