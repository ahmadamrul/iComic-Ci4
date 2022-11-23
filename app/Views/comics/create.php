<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-2">Add Comics</h2>

            <form action="/comics/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" placeholder="Name" name="name" value="<?= old('name'); ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Author" class="col-sm-2 col-form-label">Author</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('author')) ? 'is-invalid' : ''; ?>" id="Author" placeholder="Author" name="author" value="<?= old('author'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('author'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Publisher" class="col-sm-2 col-form-label">Publisher</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('publisher')) ? 'is-invalid' : ''; ?>" id="Publisher" placeholder="Publisher" value="<?= old('publisher'); ?>" name="publisher">
                        <div class="invalid-feedback">
                            <?= $validation->getError('publisher'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Pages" class="col-sm-2 col-form-label">Pages</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= ($validation->hasError('pages')) ? 'is-invalid' : ''; ?>" id="Pages" placeholder="Pages" value="<?= old('pages'); ?>" name="pages">
                        <div class="invalid-feedback">
                            <?= $validation->getError('pages'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Volumes" class="col-sm-2 col-form-label">Volumes</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= ($validation->hasError('volumes')) ? 'is-invalid' : ''; ?>" id="Volumes" placeholder="Volumes" value="<?= old('volumes'); ?>" name="volumes">
                        <div class="invalid-feedback">
                            <?= $validation->getError('volumes'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Cover" class="col-sm-2 col-form-label">Cover</label>
                    <div class="col-sm-2">
                        <img src="/img/imagenotavailable.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="cover" name="cover" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('cover'); ?>
                            </div>
                            <label class="custom-file-label" for="cover">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>