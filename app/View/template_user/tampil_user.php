<main>
    <div class="header">
        <h1>TAMPIL DATA USER</h1>
    </div>
    <table>
        <thead>
            <tr height="80" widht="100" class="head">
                <td class="header">
                    <a href="/lat-php-with-masRohmani/mini-framework/public/tambah">+ TAMBAHH</a>
                </td>
            </tr>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>PASSWORD</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $r) {
                if ($r->update_at == null) {
                    $update_at = 'NONE';
                } else {
                    $update_at = $r->update_at;
                }
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $r->nama ?></td>
                    <td><?= $r->email ?></td>
                    <td><?= $r->phone ?></td>
                    <td><?= $r->password ?></td>
                    <td><?= $r->created_at ?></td>
                    <td><?= $update_at ?></td>
                    <td class="action">
                        <a class="edit" href="#">Edit</a>
                        <a class="hapus" href="#">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</main>