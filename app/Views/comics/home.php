<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Comics List</h1>
            <?php if (session()->getFlashdata('Alert')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('Alert'); ?>
                </div>
            <?php endif ?>
            <a href="/comics/create" class="btn btn-info mb-3">Add Comic +</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Name</th>
                        <th scope="col">Pages</th>
                        <th scope="col">Volumes</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $k['cover']; ?>" alt="" class="cover"></td>
                            <td><?= $k['name']; ?></td>
                            <td><?= $k['pages']; ?></td>
                            <td><?= $k['volumes']; ?></td>
                            <td>
                                <a href="/comics/<?= $k['slug']; ?>" class="btn btn-success">Details</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>