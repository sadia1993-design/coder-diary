@extends('layouts.dashboard')

@section('content')
    <style>
        .problem-screenshort img {
            display: inline-block;
            width: 230px;
        }

        .formLabel {
            display: block;
            cursor: pointer;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 8px;
            text-transform: capitalize;
        }

        .formInput {
            width: 100%;
            border-radius: 5px;
            border: 1px solid;
            padding: 10px;
        }

        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
        }

        .accordion:after {
            content: "\002B";
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
            font-size: 21px;
        }

        .active:after {
            content: "\2212";
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        select {
            text-transform: capitalize;
        }

    </style>


    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <!-- General Report -->
        <div class="grid gap-6 xl:grid-cols-1">
            <!-- Sales Overview -->
            <div class="card mt-6">
                <!-- header -->
                <div class="card-header flex justify-between items-center">
                    <h1 class="h4">Problem Details </h1>
                    <a href="{{ route('problems.index') }}" class="btn-shadow">Back</a>
                </div>
                <!-- end header -->

                <!-- problem info -->
                <div class="grid grid-cols-4 gap-6 xl:grid-cols-2 p-6 pt-0">

                    <!-- card -->
                    <div class="card mt-6 xl:mt-1">
                        <div class="card-body flex items-center">

                            <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                                <i class="fad fa-calendar"></i>
                            </div>

                            <div class="flex flex-col">
                                <h1 class="font-semibold capitalize">Published On</h1>
                                <p class="text-xs capitalize">{{ $problem->created_at->format('d M, Y') }}</p>
                            </div>

                        </div>
                    </div>
                    <!-- end card -->

                    <!-- card -->
                    <div class="card mt-6 xl:mt-1">
                        <div class="card-body flex items-center">

                            <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                                <i class="fad fa-user"></i>
                            </div>

                            <div class="flex flex-col">
                                <h1 class="font-semibold capitalize">Publishe By</h1>
                                <p class="text-xs capitalize">{{ Auth::user()->name }}</p>
                            </div>

                        </div>
                    </div>
                    <!-- end card -->

                    <!-- card -->
                    <div class="card mt-6 xl:mt-1">
                        <div class="card-body flex items-center">

                            <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                                <i class="fad fa-eye"></i>
                            </div>

                            <div class="flex flex-col">
                                <h1 class="font-semibold capitalize">Visiblity</h1>
                                <p class="text-xs capitalize">{{ $problem->visibility }}</p>
                            </div>

                        </div>
                    </div>
                    <!-- end card -->

                    <!-- card -->
                    <div class="card mt-6 xl:mt-1">
                        <div class="card-body flex items-center">

                            <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                                <i class="fad fa-list-alt "></i>
                            </div>

                            <div class="flex flex-col">
                                <h1 class="font-semibold">Category</h1>
                                <p class="text-xs">{{ $problem->category->name }}</p>
                            </div>

                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end problem info -->

                <!-- problem info -->
                <div class="grid grid-cols-1 gap-6 xl:grid-cols-2 p-6 pt-0">
                    <!-- card -->
                    <div class="card mb-6 xl:mt-1">
                        <div class="p-6 flex items-center">
                            <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                                <i class="fad fa-tags"></i>
                            </div>
                            <div class="flex flex-col">
                                <h1 class="font-semibold text-sm mb-1">Tags</h1>
                                <div class="space-x-2">
                                    <a class="text-sm border py-1 px-2 rounded-sm hover:bg-teal-200 duration-200"
                                        href="#">PHP</a>
                                    <a class="text-sm border py-1 px-2 rounded-sm hover:bg-teal-200 duration-200"
                                        href="#">PHP</a>
                                    <a class="text-sm border py-1 px-2 rounded-sm hover:bg-teal-200 duration-200"
                                        href="#">PHP</a>
                                    <a class="text-sm border py-1 px-2 rounded-sm hover:bg-teal-200 duration-200"
                                        href="#">PHP</a>
                                    <a class="text-sm border py-1 px-2 rounded-sm hover:bg-teal-200 duration-200"
                                        href="#">PHP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end problem info -->

                <!-- body -->
                <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
                    <div class="p-0">

                        <!-- problem name -->
                        <div class="name pb-0">
                            <h3 class="text-2xl font-bold">{{ $problem->name }}</h3>
                        </div>
                        <!-- end problem name -->


                        <div class="mt-10 mb-10 items-center">
                            <h4 class="text-lg font-bold mb-3">Description</h4>
                            {!! $problem->description !!}
                        </div>
                    </div>

                    <div class="">
                        <div class="problem-screenshort problem-gallery">
                            <a href="https://picsum.photos/1024?random={{ rand(1, 1000) }}">
                                <img src="https://picsum.photos/150?random={{ rand(1, 1000) }}" class="m-1"
                                    alt="">
                            </a>
                            <a href="https://picsum.photos/1024?random={{ rand(1, 1000) }}">
                                <img src="https://picsum.photos/150?random={{ rand(1, 1000) }}" class="m-1"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end body -->
            </div>
            <!-- end Sales Overview -->

            <!-- Sales Overview -->
            <div class="card mt-6">
                <!-- header -->
                <div class="card-header flex flex-row justify-between accordion">
                    <h1 class="h6">Solution # </h1>
                </div>
                <!-- end header -->

                <!-- body -->
                <div class="grid grid-cols-2 gap-6 lg:grid-cols-1 panel p-0">
                    <div class="p-6">
                        <div class="mb-10 items-center">
                            <h4 class="h4">Solution</h4>
                            <p class="text-black">Amore sales in comparison to last month.more sales in comparison to
                                last month.more sales in comparison to last month.more sales in comparison to last
                                month.more sales in comparison to last month.% more sales in comparison to last month.</p>
                        </div>
                    </div>

                    <div class="pt-6 ">
                        <div class="problem-screenshort problem-gallery">
                            <a href="https://picsum.photos/1024?random={{ rand(1, 1000) }}">
                                <img src="https://picsum.photos/150?random={{ rand(1, 1000) }}" class="m-1"
                                    alt="">
                            </a>
                            <a href="https://picsum.photos/1024?random={{ rand(1, 1000) }}">
                                <img src="https://picsum.photos/150?random={{ rand(1, 1000) }}" class="m-1"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end body -->
            </div>
            <!-- end Sales Overview -->

        </div>
        <!-- End General Report -->

    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {


            $('.problem-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });


           
        });
    </script>
@endsection
