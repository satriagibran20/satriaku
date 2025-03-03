<!-- <div class="info-box bg-transparent shadow-none">
    <img class="avatar" src="<?= base_url($siswa->foto) ?>" width="120" height="120">
    <div class="info-box-content">
        <h5 class="info-box-text text-white text-wrap"><b><?= $siswa->nama ?></b></h5>
        <span class="info-box-text text-white"><?= $siswa->nis ?></span>
        <span class="info-box-text text-white mb-1"><?= $siswa->nama_kelas ?></span>
    </div>
</div>

<script>
    $(`.avatar`).each(function () {
        $(this).on("error", function () {
            var src = $(this).attr('src').replace('profiles', 'foto_siswa');
            $(this).attr("src", src);
            $(this).on("error", function () {
                $(this).attr("src", base_url + 'assets/img/siswa.png');
            });

        });
    });
</script> -->

<div class="info-box bg-transparent shadow-none">
 <img class="d-flex mr-2 rounded-circle img-thumbnail thumb-lg" onerror="this.src='<?= base_url('assets/img/siswa.png') ?>'" src="<?= base_url($siswa->foto) ?>" width="90" height="90" alt="foto"/>
    <div class="info-box-content">
        <h5 class="info-box-text text-white text-wrap"><b><?= $siswa->nama ?></b></h5>
        <span class="info-box-text text-white"><b><?= $siswa->nis ?></b></span>
        <span class="info-box-text text-white mb-1"><b><?= $siswa->nama_kelas ?></b></span>
    </div>
</div>