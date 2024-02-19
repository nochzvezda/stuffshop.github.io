<form action="create_product.php" class="table_add" method="post" enctype="multipart/form-data">

    <div class="table_add_row">
        <label>Название продукта</label>
        <input type="text" name="name">
    </div>

    <div class="table_add_row">
        <label>Цена</label>
        <input type="text" name="price">
    </div>

    <div class="table_add_row">
        <label>Описание</label>
        <input type="text" name="description">
    </div>

    <div class="table_add_row">
        <label>Фото компании</label>
        <input type="file" name="img[]" multiple>
    </div>
    

    <div class="btn_add_one">
        <button type="submit">Создать</button>
    </div>
</form>