<?= require_once "header.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                    .
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Position</th>
                        </tr>
                        <?php
                        include "../koneksi.php";
                        $query = "SELECT FROM petugas";
                        $exec = mysqli_query($koneksi, $query);

                        while ($petugas = mysqli_fetch_assoc($exec)) {

                        ?>
                            <tr>
                                <td><?= $petugas['nama_lengkap']; ?></td>
                                <td><?= $petugas['username']; ?></td>
                                <td><?= $petugas['email'] ?></td>
                                <td><?= $petugas['tipe_petugas']; ?></td>
                            </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?= require_once "footer.php" ?>