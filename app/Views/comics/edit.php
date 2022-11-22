<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-2">Edit Comics</h2>
            <form action="/comics/update/<?= $komik['id']; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                <input type="hidden" name="oldCover" value="<?= $komik['cover']; ?>">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" placeholder="Name" name="name" value="<?= (old('name')) ? old('name') : $komik['name']; ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Author" class="col-sm-2 col-form-label">Author</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Author" placeholder="Author" name="author" value="<?= (old('author')) ? old('author') : $komik['author']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Publisher" class="col-sm-2 col-form-label">Publisher</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Publisher" placeholder="Publisher" value="<?= (old('publisher')) ? old('publisher') : $komik['publisher']; ?>" name="publisher">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Pages" class="col-sm-2 col-form-label">Pages</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Pages" placeholder="Pages" value="<?= (old('pages')) ? old('pages') : $komik['pages']; ?>" name="pages">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Volumes" class="col-sm-2 col-form-label">Volumes</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Volumes" placeholder="Volumes" value="<?= (old('volumes')) ? old('volumes') : $komik['volumes']; ?>" name="volumes">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Cover" class="col-sm-2 col-form-label">Cover</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $komik['cover']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="cover" name="cover" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('cover'); ?>
                            </div>
                            <label class="custom-file-label" for="cover"><?= $komik['cover']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Change</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>