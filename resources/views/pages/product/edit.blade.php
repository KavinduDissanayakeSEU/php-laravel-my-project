<form action="{{ route('product.update', $item->id) }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="row">
        <div class="form-group col-lg-6 mb-3">
            <input type="text" name="name" value="{{ $item->name }}" class="form-control" required>
        </div>
        <div class="form-group col-lg-6 mb-3">
            <input type="text" name="price" value="{{ $item->price }}" class="form-control" required>
        </div>
    <div class="d-grid mb-3">
        <button class="btn btn-outline-success" type="submit">
            Update
        </button>
    </div>
</div>
</form>