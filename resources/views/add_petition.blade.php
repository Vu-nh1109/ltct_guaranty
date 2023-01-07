<html><head><title></title></head><body>
    <div class="container">
    <form method="post" action="{{ route('petition.store') }}" 
            enctype="multipart/form-data">
        @csrf
        <div class="text">
        <label><h4>Add Order Id</h4></label>
        <input type="text" required name="order_id">
        </div>

        <div class="text">
        <label><h4>Add Reason</h4></label>
        <input type="text" required name="reason">
        </div>

        <div class="image">
        <label><h4>Add image</h4></label>
        <input type="file" class="form-control" required name="image1">
        </div>

        <div class="image">
        <input type="file" class="form-control" required name="image2">
        </div>

        <div class="image">
        <input type="file" class="form-control" required name="image3">
        </div>

        <div class="post_button">
        <button type="submit" class="btn btn-success">Add</button>
        </div>
    </form>
    </div>
</body>