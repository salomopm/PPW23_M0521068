<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-light">
        <div class="container-fluid p-3 mb-2 bg-dark">
            <a class="navbar-brand text-white" href="#"><svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" id="Layer_1" x="0px" y="0px" width="50%" height="50%" viewBox="0 0 531.74818 180.83616" enable-background="new 0 0 531.74805 277.33643" xml:space="preserve" inkscape:version="0.48.4 r9939" sodipodi:docname="UFC_logo - Copy.svg"><link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-custom-link"/><link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-general-link"/><style xmlns="" lang="en" type="text/css" id="dark-mode-custom-style"/><style xmlns="" lang="en" type="text/css" id="dark-mode-native-style"/><style xmlns="" lang="en" type="text/css" id="dark-mode-native-sheet"/><metadata id="metadata23"><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/></cc:Work></rdf:RDF></metadata><defs id="defs21"/><sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="640" inkscape:window-height="480" id="namedview19" showgrid="false" fit-margin-top="0" fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0" inkscape:zoom="0.22627417" inkscape:cx="885.66255" inkscape:cy="55.94122" inkscape:window-x="0" inkscape:window-y="0" inkscape:window-maximized="0" inkscape:current-layer="Layer_1"/>
            <path d="M 40.896296,2.2219693 H 108.79669 L 73.165836,122.02373 c -2.50098,8.4043 2.80518,15.33594 11.54688,15.33594 l 0,0 c 8.74463,0 17.746094,-6.93164 20.244144,-15.33594 L 140.5882,2.2219693 200.79865,2.2205093 159.65754,155.36553 c -3.63135,13.50879 -18.06104,24.56543 -32.06738,24.56543 H 23.417296 c -16.6450205,0 -26.7343805,-13.13574 -22.41992045,-29.19824 L 40.896296,2.2219693 l 0,0 z" id="path11" inkscape:connector-curvature="0"/>
            <polygon points="276.322,67.6616 276.322,67.6631 346.049,67.6631 333.383,109.144 263.632,109.144 244.269,179.931 244.269,179.931 178.717,179.931 210.77,67.6616 " id="polygon13" transform="translate(-1.8445481e-4,-2.0066665e-4)"/>
            <path d="m 411.98908,0.42362933 h 88.67676 c 12.97168,0 34.99023,10.39306967 30.48438,26.92089967 l -1.77539,6.50732 h -79.13086 c -4.06445,0 -8.29395,3.25928 -9.39258,7.24072 l -24.59277,89.056641 c -1.09863,3.98242 1.32715,7.23975 5.39258,7.23975 h 79.49023 l -5.76367,21.13281 c -3.33594,12.24316 -16.49023,22.31445 -29.45605,22.31445 H 372.3055 c -16.5,0 -26.63672,-12.77734 -22.52441,-28.38867 L 384.30746,21.388959 C 387.34455,9.8567293 399.80158,0.42362933 411.98908,0.42362933 l 0,0 z" id="path15" inkscape:connector-curvature="0"/>
            <path d="m 353.0467,43.453409 h -69.58398 l -0.0352,0.11963 H 217.8758 L 230.48761,-2.0066665e-4 c 45.03857,0 90.07764,0 135.11279,0 L 353.0467,43.453409 l 0,0 z" id="path17" inkscape:connector-curvature="0"/>
            </svg></a>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item1">
                <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item2">
                <a class="nav-link" href="{{route('form')}}">Input Fighter</a>
                </li>
                <li class="nav-item3">
                <a class="nav-link" href="{{route('table-fighter')}}">Fighter List</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Basic</th>
                <th>Weight Class</th>
                <th>Fighter Photo</th>
                <th>Action</th>
            </tr>
            @foreach ($dtFighter as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->basic}}</td>
                <td>{{$item->weightClass}}</td>
                <td>
                    <img src="{{ asset($item->fighter_photo) }}" width="60" height="60" class="img img-responsive">
                </td>
                <td>
                <a href="{{ route('edit-fighter', $item->id) }}"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.<path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H322.8c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1H178.3zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z"/></svg></i></i></a>
                |
                <a href="{{ route('delete-fighter', $item->id) }}"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>