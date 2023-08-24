<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <small>Ditulis oleh <?=$post->penulis?> (<?=$post->tgl_posting?>)</small>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <img alt="image" src="assets/img/thumbnail/<?=$post->gambar_utama?>" width="300"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?=$post->konten?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>