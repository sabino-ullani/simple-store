<h1>Add Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="price" placeholder="Price"><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <button type="submit">Save</button>
</form>