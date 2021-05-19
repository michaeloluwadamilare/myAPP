$("form").submit(function(e) {
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'process.php',
    data: $('form').serialize(),
    success: function() {
      window.location.href = 'index.php';

    },

  });
});


    $("#addForm").submit( function(e) {
      e.preventDefault();
  
      $.ajax({
        type: 'POST',
        url: 'form.php',
        data: $('#addForm').serialize(),
        success: function(response) {
          window.location.href = 'index.php';
    },
});
});

//form object for all form types

function Form(){
  //form for book
    this.bookForm = '';
    this.bookForm += '<div class="form-group">';
    this.bookForm +=    '<label>Weight (KG)</label>';
    this.bookForm +=    '<input type="text" name="weight" pattern="[0-9]" title="The weight can only consist of numbers e.g 0.5, 20" class="form-control" required><br>';
    this.bookForm +=    '<p>Please provide weight in KG format<p>';
    this.bookForm += '</div>';

    // form for disc
    this.discForm = '';
    this.discForm += '<div class="form-group">';
    this.discForm +=    '<label>Size (MB)</label>';
    this.discForm +=    '<input type="text" name="size" pattern="[0-9]" title="The size can only consist of numbers e.g 0.5, 20" class="form-control" required><br>';
    this.discForm +=    '<p>Please provide size in MB format<p>';
    this.discForm += '</div>';

    this.furnitureForm = '';
    this.furnitureForm += '<div class="form-group">';
    this.furnitureForm +=    '<label>Height (CM)</label>';
    this.furnitureForm +=    '<input type="text" name="height" pattern="[0-9]" title="The height can only consist of numbers e.g 0.5, 20" class="form-control" required=>';
    this.furnitureForm += '</div>';

    this.furnitureForm += '<div class="form-group">';
    this.furnitureForm +=    '<label>Width (CM)</label>';
    this.furnitureForm +=    '<input type="text" name="width" pattern="[0-9]" title="The width can only consist of numbers e.g 0.5, 20" class="form-control" required>';
    this.furnitureForm += '</div>';

    this.furnitureForm += '<div class="form-group">';
    this.furnitureForm +=    '<label>Length (CM)</label>';
    this.furnitureForm +=    '<input type="text" name="length" pattern="[0-9]" title="The length can only consist of numbers e.g 0.5, 20" class="form-control" required><br>';
    this.furnitureForm +=     '<p>Please provide dimensions in HxWxL format<p>';
    this.furnitureForm += '</div>';

    

    this.Book = function(){
        return this.bookForm;
    }

    this.Disc = function(){
      return this.discForm
    }

    this.Furniture = function(){
      return this.furnitureForm;
    }
}


 function selectChange(){
  var category = document.getElementById('mySelect').value;
  var form = new Form()
  var output = form[category]();
  document.getElementById('productForm').innerHTML = output;
 }


function addPageRedirect(){
  window.location.href = "addproduct.php";
}

function IndexPageRedirect(){
  window.location.href = "index.php";
}