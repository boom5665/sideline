<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>edit</title>
    <link rel="shortcut icon" href="favicon.png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Custom fonts for this template-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <h2> add new</h2>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">back </a>
        </div>

        @if ($errors->any())
        <div class=" alert alert-danger">
            <strong>Oop </strong>
            thre were som problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>title</strong>
                        <input type="text" name="title" class="form-control" placeholder="title " value="{{ $post->title }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>sex</strong>
                        <input type="text" name="sex" class="form-control" placeholder="title " value="{{ $post->sex }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>money</strong>
                        <input type="number" name="money" class="form-control" placeholder="title " value="{{ $post->money }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>job</strong>
                        <input type="text" name="job" class="form-control" placeholder="title " value="{{ $post->job }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>location1</strong>
                        <input type="text" name="location1" class="form-control" placeholder="title " value="{{ $post->location1 }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>location2</strong>
                        <input type="text" name="location2" class="form-control" placeholder="title " value="{{ $post->location2 }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>location3</strong>
                        <input type="text" name="location3" class="form-control" placeholder="title " value="{{ $post->location3 }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>location4</strong>
                        <input type="text" name="location4" class="form-control" placeholder="title " value="{{ $post->location4 }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>description</strong>
                        <input type="text" name="description" class="form-control" placeholder="title " value="{{ $post->description }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>danger</strong>
                        <input type="text" name="danger" class="form-control" placeholder="title " value="{{ $post->danger }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>line</strong>
                        <input type="text" name="line" class="form-control" placeholder="milk" value="{{ $post->line }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>age</strong>
                        <input type="number" name="age" class="form-control" placeholder="milk" value="{{ $post->age }}">
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>milk</strong>
                        <input type="text" name="milk" class="form-control" placeholder="milk" value="{{ $post->milk }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>waist</strong>
                        <input type="text" name="waist" class="form-control" placeholder="waist" value="{{ $post->waist }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>hip</strong>
                        <input type="text" name="hip" class="form-control" placeholder="waist" value="{{ $post->hip }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>height</strong>
                        <input type="text" name="height" class="form-control" placeholder="waist" value="{{ $post->height }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>weight</strong>
                        <input type="text" name="weight" class="form-control" placeholder="waist" value="{{ $post->weight }}">
                    </div>
                </div>
                <?php foreach (json_decode($post->filename)as $picture) { ?>
                    <img src="{{ asset('/image/'.$picture) }}" style="height:120px; width:200px"/>
                   <?php } ?>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Image:</strong>

                            <div class="gallery" style="width: 80%;"></div>
                            <input  type="file" name="filename[]" multiple id="gallery-photo-add" class="form-control"  value="{{ $post->weight }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">submit</button>
                </div>
            </div>

    </form>


        </div>

</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
   $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});

</script>
