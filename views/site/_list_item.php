<div class="col">
    <div class="card shadow-sm">
        <div class="card-body">
            <p class="card-text">
                <?=$model->full_name?>
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button data-author="<?=$model->id?>" type="button" class="btn btn-sm btn-outline-secondary subscribe-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Подписка на новые книги автора</button>
                </div>
            </div>
        </div>
    </div>
</div>
