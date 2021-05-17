<?= $this->extend('layout/karyawan'); ?>
<?= $this->section('content'); ?>
<?= d($folder); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Dibagikan ke saya
        </h3>
    </div>
    <div class="card-body">
        <table class="table w-100 table-sm" id="browse">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Folder</th>
                    <th>Dokumen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($folder as $f) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td>
                            <a href="<?= base_url('myfolder/upload_file/' . $f['folder_id']); ?>">
                                <?= $f['folder']; ?>
                            </a>
                        </td>
                        <td><?= $f['parent']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('addons'); ?>
<script>
    $(document).ready(function() {
        $('#browse').DataTable({
            "paging": false,
            "ordering": false,
            "info": false,
            "dom": "<'row px-2 px-md-4 pt-2'<'col-md'f>>" +
                "<'row'<'col-md-12'tr>>"
        });
    })
</script>
<?= $this->endSection(); ?>