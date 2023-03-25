<?php $title = 'Edit Item'; ?>

<?php include 'include_files/header.php'; ?>

<div class="container">

    <h1>Edit Item</h1>
</div>

<br><br>
<hr>
<br><br>
<div class="form">
    <form class="row gy-2 gx-4 align-items-center">
        <div class="col-auto add item_name">
            <label class="visually-hidden" for="autoSizingInput">Item Name</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <input type="text" class="form-control" id="autoSizingInput" placeholder="Item Name">
            </div>
        </div>

        <div class="col-auto add kg">
            <label class="visually-hidden" for="autoSizingInputGroup">Kilogram</label>
            <div class="input-group">
                <div class="input-group-text">Kg</div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Kilogram" value="" readonly>
            </div>
        </div>
        <div class="col-auto add grams">
            <label class="visually-hidden" for="autoSizingInputGroup">Grams</label>
            <div class="input-group">
                <div class="input-group-text">Gr</div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Grams" value="" readonly>
            </div>
        </div>
        <div class="col-auto add oz">
            <label class="visually-hidden" for="autoSizingInputGroup">Oz</label>
            <div class="input-group">
                <div class="input-group-text">Oz</div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Oz" value="" readonly>
            </div>
        </div>
        <div class="col-auto add liter">
            <label class="visually-hidden" for="autoSizingInputGroup">Liter</label>
            <div class="input-group">
                <div class="input-group-text">Lt</div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Liter">
            </div>
        </div>
        <div class="col-auto add milliliters">
            <label class="visually-hidden" for="autoSizingInputGroup">Milliliter</label>
            <div class="input-group">
                <div class="input-group-text">Ml</div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Milliliter">
            </div>
        </div>
        <div class="col-auto add cups">
            <label class="visually-hidden" for="autoSizingInputGroup">Cups</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi-cup"></i></div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Cups">
            </div>
        </div>
        <div class="col-auto add glass">
            <label class="visually-hidden" for="autoSizingInputGroup">Glass</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-cup-straw"></i></div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Glass">
            </div>
        </div>
        <div class="col-auto add glass teaspoons">
            <label class="visually-hidden" for="autoSizingInputGroup">Teaspoons</label>
            <div class="input-group">
                <div class="input-group-text">Tsp</div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Teaspoons">
            </div>
        </div>
        <div class="col-auto add glass tablespoons ">
            <label class="visually-hidden" for="autoSizingInputGroup">Tablespoons</label>
            <div class="input-group">
                <div class="input-group-text">Tbsp</div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Tablespoons">
            </div>
        </div>

        <div class="col-auto button">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>


<?php include './include_files/footer.php'; ?>