<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Side line</title>
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
    <h2> post</h2>
    <a href="{{ route ('posts.create')}}" class="btn btn-success">create new </a>
    {{-- <a href="{{ route ('posts.home')}}" class="btn btn-success">create new </a> --}}
    @if ($message = Session::get('success'))
    <div class=" alert alert-success">
        {{ $message }}
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th> No.</th>
            <th> title.</th>
            <th> sex.</th>
            <th> money.</th>
            <th> job.</th>
            <th> location1.</th>
            <th> location2.</th>
            <th> location3.</th>
            <th> location4.</th>
            <th> description.</th>
            <th> danger.</th>
            <th> line.</th>
            <th> age.</th>
            <th> milk.</th>
            <th> waist.</th>
            <th> hip.</th>
            <th> height.</th>
            <th> weight.</th>
            <th width="280px">image</th>

            <th width="280px">Action</th>

        </tr>
{{-- @dd($posts) --}}
            @foreach ($posts as $post )
            <tr>
                <td> {{ ++$i }} </td>
                <td> {{ $post->title }} </td>
                <td> {{ $post->sex }} </td>
                <td> {{ $post->money }} </td>
                <td> {{ $post->job }} </td>
                <td> {{ $post->location1 }} </td>
                <td> {{ $post->location2 }} </td>
                <td> {{ $post->location3 }} </td>
                <td> {{ $post->location4 }} </td>
                <td> {{ Str::limit($post->description, 100) }} </td>
                <td> {{ $post->danger }} </td>
                <td> {{ $post->line }} </td>
                <td> {{ $post->age }} </td>
                <td> {{ $post->milk }} </td>
                <td> {{ $post->waist }} </td>
                <td> {{ $post->hip }} </td>
                <td> {{ $post->height }} </td>
                <td> {{ $post->weight }} </td>

                    <td> <?php foreach (json_decode($post->filename)as $picture) { ?>
                          <img src="{{ asset('/image/'.$picture) }}" style="height:120px; width:200px"/>
                         <?php } ?>
                    </td>


                <td>
                    <form action=" {{ route('posts.destroy', $post->id)}}" method="post">

                        <a href="{{ route('posts.show', $post->id)}}" class="btn btn-primary">show </a>
                        <a href="{{ route('posts.edit', $post->id)}}" class="btn but-map">edit </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">delete </button>
                    </form>
                    </td>
            </tr>

            @endforeach

        </table>
        {{ $posts->links() }}
</body>

