<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Details Comic</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['cover']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['name']; ?></h5>
                            <p class="card-text"><b>Author</b> : <?= $komik['author']; ?></p>
                            <p class="card-text"><b>Publisher</b> : <?= $komik['publisher']; ?></p>
                            <p class="card-text"><b>Volumes</b> : <?= $komik['volumes']; ?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                            <a href="/comics/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>

                            <form action="/comics/<?= $komik['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" onclick="return confirm('Are You Sure?');">Delete</button>
                            </form>
                            <!-- <a href="/comics/delete/<?= $komik['id']; ?>" class="btn btn-danger">Delete</a> -->
                            <a href="/comics" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>