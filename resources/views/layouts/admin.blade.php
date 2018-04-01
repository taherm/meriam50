<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>
  <!-- Bootstrap core CSS -->
  <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/style1.css')}}" rel="stylesheet">
  <script src="{{url('http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js')}}"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({
  selector: '#editor',
  plugins: 'image code',
  toolbar: 'undo redo | link image | code',
  // enable title field in the Image dialog
  image_title: true, 
  // enable automatic uploads of images represented by blob or data URIs
  automatic_uploads: true,
  // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
  // images_upload_url: 'postAcceptor.php',
  // here we add custom filepicker only to Image dialog
  file_picker_types: 'image', 
  // and here's our custom image picker
  file_picker_callback: function(cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    
    // Note: In modern browsers input[type="file"] is functional without 
    // even adding it to the DOM, but that might not be the case in some older
    // or quirky browsers like IE, so you might want to add it to the DOM
    // just in case, and visually hide it. And do not forget do remove it
    // once you do not need it anymore.

    input.onchange = function() {
      var file = this.files[0];
      
      var reader = new FileReader();
      reader.onload = function () {
        // Note: Now we need to register the blob in TinyMCEs image blob
        // registry. In the next release this part hopefully won't be
        // necessary, as we are looking to handle it internally.
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        // call the callback and populate the Title field with the file name
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };
    
    input.click();
  }
});</script>
</head>

<body>

  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h1>
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Admin Panel
            
          </h1>
        </div>
       
      </div>
    </div>
  </header>



  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="{{url('admin')}}" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
            </a>
            <a href="{{url('admin/create-page')}}" class="list-group-item">
              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Create Pages
              
            </a>
            <a href="{{url('admin/sub-menu')}}" class="list-group-item">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Create Sub Menu
              
            </a>
            <a href="{{url('admin/main-menu')}}" class="list-group-item">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Create Main Menu
              
            </a>
            <a href="{{url('admin/delete-menu')}}" class="list-group-item">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Delete Menu
              
            </a>
            <a href="{{url('admin/add-slider')}}" class="list-group-item">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Add Slider Image
              
            </a>

            
            <a href="{{url('admin/delete-slider')}}" class="list-group-item">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Delete Slider Image
              
            </a>
          </div>


        </div>

@yield('content')


        </div>
    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>