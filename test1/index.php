<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        
        .discount {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container mt-2">
        <h4>Add New Content</h4>
        <form action="display.php" method="post" autocomplete="off">
            <div class="row m-2">
                <div class="col-3">
                    <label class="form-label" for="language">Language</label>
                </div>
                <div class="col-9">
                    <select class="form-control" name="language" id="language" required>
                        <option value="">Select Language</option>
                    <option value="English">English</option>
                    <option value="Hindi">Hindi</option>
                </select>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-3">
                    <label class="form-label" for="content_type">Select Content Type</label>
                </div>
                <div class="col-9">
                    <select class="form-control" name="content_type" id="content_type" required>
                        <option value="">Please select Content Type</option>
                        <option value="Educational">Educational</option>
                        <option value="Motivational">Motivational</option>
                    </select>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-3">
                    <label class="form-label" for="category_type">Category</label>
                </div>
                <div class="col-9">
                    <select class="form-control" name="category_type" id="category_type" required>
                        <option value="">Choose Option</option>
                        <option value="high level">high level</option>
                        <option value="low level">low level</option>
                    </select>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-3">
                    <label class="form-label" for="sub_title">Subject Title</label>
                </div>
                <div class="col-9">
                    <input class="form-control" type="text" placeholder="Enter Subject Title" onkeyup="checkname()" id="sub_title" name="sub_title">
                </div>
            </div>
            <div class="row m-2">
                <div class="col-3">
                    <label for="description">Description</label>
                </div>
                <div class="col-9">
                    <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-3">
                    <label for="image">Course Image</label>
                </div>
                <div class="col-9">
                    <input class="form-control" type="file" name="image" id="image" onchange="filesize()" accept="image/*">
                    <small id="file_err" class="text-danger"></small>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-3">
                    <label class="form-label" for="provider">Provider</label>
                </div>
                <div class="col-9">
                    <select class="form-control" name="provider" id="provider" required>
                        <option value="">Choose Option</option>
                        <option value="Educational">youtube</option>
                        <option value="Motivational">w3c</option>
                    </select>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-3 ">
                    <label for="freecourse">Free Course</label>
                </div>
                <div class="col-9 form-check form-switch">
                    <input class="form-check-input" id="freecourse" type="checkbox" onclick="display()" role="switch" name="freecourse">
                </div>
            </div>
            <div class="row m-2 " id="priceing">
                <div class="col-3">
                    <label class="form-label" for="price">price</label>
                </div>
                <div class="col-9">
                    <input class="form-control" type="number" placeholder="Enter price" id="price" name="price">
                </div>
            </div>
            <div class="row m-2">
                <div class="col-3 ">
                    <label for="Discount_s">Discount</label>
                </div>
                <div class="col-9 form-check form-switch">
                    <input class="form-check-input" type="checkbox" onclick="displaydiscount()" id="Discount_s" name="Discount_s" role="switch">
                </div>
            </div>

            <div class="row m-2 discount" id="discounting">
                <div class="col-3">
                    <label class="form-label" for="Discount">Discount</label>
                </div>
                <div class="col-9">
                    <input class="form-control" type="number" placeholder="Enter Discount" id="Discount" name="Discount">
                </div>
            </div>

            <div class="row m-2">
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>