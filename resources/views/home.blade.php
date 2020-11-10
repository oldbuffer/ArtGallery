@extends('layouts.app')

@section('content')
    <div class="jumbotron p-5 p-md-6 text-center text-white rounded bg-dark" style="min-height:300px;">
            <div class="col-md-12 px-0">
                <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3 mx-auto" style="width: 500px;">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
    </div>
    <div class="container">
        <h1 class="text-uppercase font-weight-normal text-center text-center mt-4 mb-0">Thumbnail Gallery</h1>
        <hr class="mt-2 mb-3">
        <div class="row m-x-1">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project One</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Two</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Three</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Project Four</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="text-uppercase font-weight-normal text-center text-center mt-4 mb-0">Thumbnail Gallery</h1>
        <hr class="mt-2 mb-3">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="jumbotron text-center">
        <div class="container">
            <h1>Album example</h1>
            <p class="lead text-muted mx-auto" style="width: 500px;">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-light my-2">Main call to action</a>
                <a href="#" class="btn btn-light my-2">Secondary action</a>
            </p>
        </div>
    </section>
    <div class="container">

        <h1 class="text-uppercase font-weight-normal text-center mt-4 mb-0">Thumbnail Gallery</h1>

        <hr class="mt-2 mb-3">

        <div class="row text-center text-lg-left">
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                <div class="gallery_img_bg m-2 align-middle" style="">
                    <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="row text-center text-lg-left">
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="row text-center text-lg-left">
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <img class="w-100" id="gallery_img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                <a href="#" class="d-block">
                    <div class="gallery_img_bg m-2 align-middle" style="">
                        <h1 class="m-0 h-100 d-flex align-items-center justify-content-center text-center">какой-то тcbxvnекст</h1>
                    </div>
                </a>
            </div>
        </div>

    </div>
@endsection
