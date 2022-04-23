@extends('layouts.dashboard')

@section('content')
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">

        @if ($errors->any())
            <div role="alert" class="mb-5">
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    ALert!!!
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 gap-6 xl:col-span-1">
            <div class="card col-span-2 xl:col-span-1">
                <div class="card-header flex justify-between items-center">
                    <h3 class="h4">Add Category</h3>
                    <a href="{{ route('category.index') }}" class="btn-shadow">Back</a>
                </div>
            </div>

            <div class="card">

                <div class="card-body">



                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        <div class="flex mt-6">
                            <div class="flex-1 mr-4">
                                <label for="name" class="formLabel">Name</label>
                                <input type="text" name="name"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="name">
                                <small id="name" class="form-text text-muted">Numeric value not allowed</small>

                            </div>

                            <div class="flex-1 mr-4">
                                <label for="slug" class="formLabel">Slug</label>
                                <input type="text" readonly name="slug"
                                    class="border bg-gray-300 focus:outline-none rounded w-full py-2 px-3" id="slug">
                            </div>
                        </div>



                        <div class="mt-6">
                            <button type="submit"
                                class="px-8 py-2 text-base uppercase bg-teal-600 hover:bg-emerald-700 text-white rounded-md transition-all">Add</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function() {
            $("input#slug").val("");
            // Permalink Generation
            jQuery("input#name").keyup(function() {
                var text = $("#name").val();
                if (text != "") {
                    $("input#slug").val(slugify(text));
                } else {
                    $("input#slug").val("");
                }
            });



            function slugify(string) {
                return string
                    .toString()
                    .trim()
                    .toLowerCase()
                    .replace(/\s+/g, "-")
                    .replace(/[^\w-]+/g, "")
                    .replace(/--+/g, "-")
                    .replace(/^-+/, "")
                    .replace(/-+$/, "");
            }


        });
    </script>
@endsection
