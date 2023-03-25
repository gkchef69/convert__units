<?php $title = 'Convert Units'; ?>

<?php include 'include_files/header.php'; ?>


<div class="container">

    <h1>Convert Units</h1>
</div>
<br><br>
<hr>
<br><br>
<div class="form">
    <form class="row gy-2 gx-4 align-items-center">
        <div class="col-auto add item_name">
            <label class="visually" for="autoSizingInput">Select a Item</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="milk">Milk</option>
                    <option value="sugar">Sugar</option>
                    <option value="juice">Juice</option>
                </select>
            </div>
        </div>

        <div class="col-auto add quantity">
            <label class="visually" for="autoSizingInputGroup">Quantity</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-basket2"></i></div>
                <input type="number" class="form-control" id="autoSizingInput" placeholder="Quantity" value="">
            </div>
        </div>
        <div class="col-auto add from">
            <label class="visually" for="autoSizingInput">From</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="kilogram">Kilogram</option>
                    <option value="Grams">Grams</option>
                    <option value="Liters">Liters</option>
                </select>
            </div>
        </div>
        <div class="col-auto add to">
            <label class="visually" for="autoSizingInput">To</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-arrow-left-right"></i></div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="kilogram">Kilogram</option>
                    <option value="Grams">Grams</option>
                    <option value="Liters">Liters</option>
                </select>
            </div>
        </div>

        <div class="col-auto button">
            <button type="submit" class="btn btn-primary">Calculated</button>
        </div>
    </form>
</div>

<?php include './include_files/footer.php'; ?>